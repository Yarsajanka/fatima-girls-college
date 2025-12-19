<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Program;

class ProgramController extends Controller
{
    public function index()
    {
        $programs = Program::where('is_active', true)->get();
        return view('programs', compact('programs'));
    }

    public function show($id)
    {
        $program = Program::findOrFail($id);
        return view('program-detail', compact('program'));
    }
}
