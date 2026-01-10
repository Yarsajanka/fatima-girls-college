<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Program;
use App\Models\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'total_applications' => Application::count(),
            'pending_applications' => Application::where('status', 'pending')->count(),
            'approved_applications' => Application::where('status', 'approved')->count(),
            'total_programs' => Program::where('is_active', true)->count(),
            'total_announcements' => Content::where('type', 'announcement')->where('is_active', true)->count(),
        ];

        $admissionsOpen = Content::where('type', 'admission_status')
            ->where('is_active', true)
            ->value('content') === 'open';

        return view('admin.dashboard', compact('stats', 'admissionsOpen'));
    }

    // Programs CRUD
    public function programs()
    {
        $programs = Program::orderBy('name')->get();
        return view('admin.programs.index', compact('programs'));
    }

    public function createProgram()
    {
        return view('admin.programs.create');
    }

    public function storeProgram(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10|unique:programs',
            'description' => 'nullable|string',
            'duration_years' => 'required|integer|min:1|max:4',
            'capacity' => 'required|integer|min:1',
            'eligibility_criteria' => 'nullable|string',
            'fee_per_year' => 'required|numeric|min:0',
        ]);

        Program::create($request->all());

        return redirect()->route('admin.programs')->with('success', 'Program created successfully.');
    }

    public function editProgram(Program $program)
    {
        return view('admin.programs.edit', compact('program'));
    }

    public function updateProgram(Request $request, Program $program)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'code' => 'required|string|max:10|unique:programs,code,' . $program->id,
            'description' => 'nullable|string',
            'duration_years' => 'required|integer|min:1|max:4',
            'capacity' => 'required|integer|min:1',
            'eligibility_criteria' => 'nullable|string',
            'fee_per_year' => 'required|numeric|min:0',
            'is_active' => 'boolean',
        ]);

        $program->update($request->all());

        return redirect()->route('admin.programs')->with('success', 'Program updated successfully.');
    }

    public function destroyProgram(Program $program)
    {
        $program->delete();
        return redirect()->route('admin.programs')->with('success', 'Program deleted successfully.');
    }

    // Admissions Toggle
    public function toggleAdmissions(Request $request)
    {
        $isOpen = $request->boolean('is_open');

        // You might want to store this in a settings table or config
        // For now, we'll use a simple approach with a Content entry
        Content::updateOrCreate(
            ['type' => 'admission_status'],
            [
                'title' => 'Admission Status',
                'content' => $isOpen ? 'open' : 'closed',
                'is_active' => true,
            ]
        );

        return redirect()->back()->with('success', 'Admission status updated successfully.');
    }

    // Applicants
    public function applicants(Request $request)
    {
        $status = $request->get('status', 'all');
        $query = Application::with('program');

        if ($status !== 'all') {
            $query->where('status', $status);
        }

        $applications = $query->orderBy('created_at', 'desc')->paginate(20);

        return view('admin.applicants.index', compact('applications', 'status'));
    }

    public function showApplicant(Application $application)
    {
        $application->load('program', 'fees');
        return view('admin.applicants.show', compact('application'));
    }

    public function updateApplicantStatus(Request $request, Application $application)
    {
        $request->validate([
            'status' => 'required|in:pending,under_review,approved,rejected,interview_scheduled',
            'remarks' => 'nullable|string',
        ]);

        $application->update([
            'status' => $request->status,
            'remarks' => $request->remarks,
        ]);

        return redirect()->back()->with('success', 'Application status updated successfully.');
    }

    public function downloadSelectedApplicantsPdf(Request $request)
    {
        $applicationIds = $request->get('applications', []);
        $applications = Application::whereIn('id', $applicationIds)->with('program')->get();

        $pdf = Pdf::loadView('admin.applicants.selected_pdf', compact('applications'));

        return $pdf->download('selected_applicants.pdf');
    }

    public function uploadSelectedCandidatesPdf(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'pdf_file' => 'required|file|mimes:pdf|max:10240', // 10MB max
            'is_active' => 'boolean',
        ]);

        $pdfPath = $request->file('pdf_file')->store('selected_candidates', 'public');

        // Update or create the selected candidates PDF content
        Content::updateOrCreate(
            ['type' => 'selected_candidates_pdf'],
            [
                'title' => $request->title,
                'content' => 'PDF file containing list of selected candidates',
                'image_path' => $pdfPath,
                'is_active' => $request->boolean('is_active'),
                'published_at' => now(),
            ]
        );

        return redirect()->route('admin.applicants')->with('success', 'Selected candidates PDF uploaded successfully.');
    }

    // Announcements
    public function announcements()
    {
        $announcements = Content::where('type', 'announcement')
            ->orderBy('published_at', 'desc')
            ->get();

        return view('admin.announcements.index', compact('announcements'));
    }

    public function createAnnouncement()
    {
        return view('admin.announcements.create');
    }

    public function storeAnnouncement(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'is_active' => 'boolean',
            'published_at' => 'required|date',
        ]);

        Content::create([
            'type' => 'announcement',
            'title' => $request->title,
            'content' => $request->content,
            'is_active' => $request->boolean('is_active'),
            'published_at' => $request->published_at,
        ]);

        return redirect()->route('admin.announcements')->with('success', 'Announcement created successfully.');
    }

    public function editAnnouncement(Content $announcement)
    {
        return view('admin.announcements.edit', compact('announcement'));
    }

    public function updateAnnouncement(Request $request, Content $announcement)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'is_active' => 'boolean',
            'published_at' => 'required|date',
        ]);

        $announcement->update([
            'title' => $request->title,
            'content' => $request->content,
            'is_active' => $request->boolean('is_active'),
            'published_at' => $request->published_at,
        ]);

        return redirect()->route('admin.announcements')->with('success', 'Announcement updated successfully.');
    }

    public function destroyAnnouncement(Content $announcement)
    {
        $announcement->delete();
        return redirect()->route('admin.announcements')->with('success', 'Announcement deleted successfully.');
    }

    // Gallery
    public function gallery()
    {
        $gallery = Content::where('type', 'gallery')
            ->orderBy('sort_order')
            ->get();

        return view('admin.gallery.index', compact('gallery'));
    }

    public function storeGallery(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'is_active' => 'boolean',
        ]);

        $imagePath = $request->file('image')->store('gallery', 'public');

        $maxSortOrder = Content::where('type', 'gallery')->max('sort_order') ?? 0;

        Content::create([
            'type' => 'gallery',
            'title' => $request->title,
            'image_path' => $imagePath,
            'is_active' => $request->boolean('is_active'),
            'sort_order' => $maxSortOrder + 1,
        ]);

        return redirect()->route('admin.gallery')->with('success', 'Image uploaded successfully.');
    }

    public function destroyGallery(Content $gallery)
    {
        if ($gallery->image_path) {
            Storage::disk('public')->delete($gallery->image_path);
        }

        $gallery->delete();

        return redirect()->route('admin.gallery')->with('success', 'Image deleted successfully.');
    }
}
