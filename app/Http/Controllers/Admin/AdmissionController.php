<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class AdmissionController extends Controller
{
    public function index()
    {
        $admissionSchedule = Content::where('type', 'admission_schedule')->first();
        $eligibility = Content::where('type', 'eligibility_criteria')->first();
        $documents = Content::where('type', 'required_documents')->first();
        $guidelines = Content::where('type', 'admission_guidelines')->first();

        return view('admin.admissions.index', compact('admissionSchedule', 'eligibility', 'documents', 'guidelines'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'admission_schedule' => 'required|string',
            'eligibility_criteria' => 'required|string',
            'required_documents' => 'required|string',
            'admission_guidelines' => 'required|string',
        ]);

        // Update or create admission schedule
        Content::updateOrCreate(
            ['type' => 'admission_schedule'],
            ['content' => $request->admission_schedule, 'is_active' => true]
        );

        // Update or create eligibility
        Content::updateOrCreate(
            ['type' => 'eligibility_criteria'],
            ['content' => $request->eligibility_criteria, 'is_active' => true]
        );

        // Update or create documents
        Content::updateOrCreate(
            ['type' => 'required_documents'],
            ['content' => $request->required_documents, 'is_active' => true]
        );

        // Update or create guidelines
        Content::updateOrCreate(
            ['type' => 'admission_guidelines'],
            ['content' => $request->admission_guidelines, 'is_active' => true]
        );

        return redirect()->route('admin.admissions.index')->with('success', 'Admission content updated successfully.');
    }
}
