<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Program;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function create()
    {
        $programs = Program::all();
        return view('apply', compact('programs'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'program_id' => 'required|exists:programs,id',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'cnic' => 'required|string|max:15',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'date_of_birth' => 'required|date',
            'address' => 'required|string',
            'father_name' => 'required|string|max:255',
            'father_cnic' => 'required|string|max:15',
            'father_phone' => 'required|string|max:15',
            'matric_marks' => 'required|string|max:20',
            'matric_year' => 'required|integer',
            'inter_marks' => 'nullable|string|max:20',
            'inter_year' => 'nullable|integer',
        ]);

        Application::create($request->all());

        return redirect()->route('status')->with('success', 'Application submitted successfully!');
    }

    public function status()
    {
        return view('status');
    }

    public function checkStatus(Request $request)
    {
        $request->validate([
            'cnic' => 'required|string|max:15',
        ]);

        $application = Application::where('cnic', $request->cnic)->first();

        if ($application) {
            return view('status', compact('application'));
        } else {
            return view('status')->with('error', 'No application found with this CNIC.');
        }
    }
}
