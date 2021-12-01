<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $upcomingConferences = Conference::where('start_date', '>=', now()->addRealDays(20))
            ->select(['name', 'slug', 'cover_image_url', 'start_date', 'location'])
            ->limit(5)
            ->get();

            return view('welcome', compact('upcomingConferences'));
    }
}
