<?php

namespace App\Http\Controllers;

use App\Models\Content;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $vision = Content::where('type', 'vision')->where('is_active', true)->first();
        $mission = Content::where('type', 'mission')->where('is_active', true)->first();
        $history = Content::where('type', 'history')->where('is_active', true)->first();
        $principalMessage = Content::where('type', 'principal_message')->where('is_active', true)->first();

        return view('about', compact('vision', 'mission', 'history', 'principalMessage'));
    }
}
