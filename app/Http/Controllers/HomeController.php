<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;
use App\Models\Program;

class HomeController extends Controller
{
    public function index()
    {
        $announcements = Content::where('type', 'announcement')
            ->where('is_active', true)
            ->orderBy('published_at', 'desc')
            ->take(4)
            ->get();

        $gallery = Content::where('type', 'gallery')
            ->where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        $programs = Program::where('is_active', true)
            ->orderBy('name')
            ->take(6)
            ->get();

        return view('home', compact('announcements', 'gallery', 'programs'));
    }
}
