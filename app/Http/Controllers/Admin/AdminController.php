<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Conference;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;

class AdminController extends Controller
{
    public function index()
    {
        $conferencesCount = Conference::count();
        $pastConferencesCount = Conference::where('start_date', '>', now())->orWhere('end_date', '<', now())->count();
        $upcomingConferencesCount = Conference::where('start_date', '>', now())->where('end_date', '>', now())->count();

        return view('admin.index', compact('conferencesCount', 'pastConferencesCount', 'upcomingConferencesCount'));
    }

    public function conferences()
    {
        $conferences = Conference::withCount('attendants')->paginate(30);

        return view('admin.conferences', compact('conferences'));
    }

    public function users()
    {
        $conferences = Conference::select(['name', 'slug'])
            ->where('start_date', '>', now())
            ->where('end_date', '>', now())
            ->orderBy('start_date', 'asc')
            ->paginate(20);
        $users = User::with('roles')->withCount('conferences')->paginate(20);

        return view('admin.users', compact('users', 'conferences'));
    }

    public function deleteUser(User $user)
    {
        if (!Gate::allows('is-admin')) {
            return redirect('/');
        }

        $user->delete();

        return redirect()->back()->with('success', "User event deleted");
    }
}
