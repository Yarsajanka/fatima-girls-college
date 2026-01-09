<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Content;

class AdmissionController extends Controller
{
    public function index()
    {
        $schedule = Content::where('type', 'admission_schedule')->where('is_active', true)->first();
        $eligibility = Content::where('type', 'eligibility_criteria')->where('is_active', true)->first();
        $documents = Content::where('type', 'required_documents')->where('is_active', true)->first();
        $guidelines = Content::where('type', 'admission_guidelines')->where('is_active', true)->first();

        return view('admission', compact('schedule', 'eligibility', 'documents', 'guidelines'));
    }
}
