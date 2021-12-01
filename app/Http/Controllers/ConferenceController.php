<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Support\Facades\Gate;

class ConferenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->only(['decline', 'attend']);
        $this->middleware(['auth', 'auth.is-admin'])->only('delete');
    }

    public function index()
    {
        $conferences = Conference::select(['name', 'slug', 'cover_image_url', 'start_date', 'location'])
            ->where('start_date', '>', now())
            ->where('end_date', '>', now())
            ->orderBy('start_date', 'asc')
            ->paginate(20);

        return view('conferences.index', compact('conferences'));
    }

    public function show(Conference $conference)
    {
        $conference->loadMissing('speakers');
        $conference->loadCount('attendants');

        $speakers = $conference->speakers;
        return view('conferences.show', compact('conference', 'speakers'));
    }

    public function attend(Conference $conference)
    {
        if ($conference->end_date < now()) {
            session()
                ->flash('warning', "This conference has already ended");
            return redirect()->back();
        }

        $conference->attendants()->attach(auth()->id());

        session()
            ->flash('success', "You have been added to <strong>{$conference->name}'s</strong> attendance list");

        return redirect()->back();
    }

    public function decline(Conference $conference)
    {
        $conference->attendants()->detach(auth()->id());

        session()
            ->flash('success', "You have been removed to <strong>{$conference->name}'s</strong> attendance list");

        return redirect()->back();
    }

    public function past()
    {
        $conferences = Conference::select(['name', 'slug', 'cover_image_url', 'start_date', 'location'])
            ->where('start_date', '<', now())
            ->where('end_date', '<', now())
            ->orderBy('start_date', 'asc')
            ->paginate(20);

            return view('conferences.past', compact('conferences'));
    }

    public function destroy(Conference $conference)
    {
        if (!Gate::allows('is-admin')) {
            return redirect('/');
        }

        $conference->delete();

        return redirect()->back()->with('success', "Conference event deleted");
    }
}
