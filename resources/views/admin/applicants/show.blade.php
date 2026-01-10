@extends('admin.layout')

@section('title', 'Application Details')

@section('content')
<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Application Details: {{ $application->application_id }}</h1>
            <a href="{{ route('admin.applicants') }}" class="btn btn-secondary">Back to Applications</a>
        </div>
    </div>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>Personal Information</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Full Name:</strong> {{ $application->full_name }}</p>
                        <p><strong>Date of Birth:</strong> {{ $application->date_of_birth->format('M d, Y') }}</p>
                        <p><strong>CNIC:</strong> {{ $application->formatted_cnic }}</p>
                        <p><strong>Gender:</strong> {{ $application->gender }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Religion:</strong> {{ $application->religion }}</p>
                        <p><strong>Nationality:</strong> {{ $application->nationality }}</p>
                        <p><strong>Phone:</strong> {{ $application->phone }}</p>
                        <p><strong>Email:</strong> {{ $application->email }}</p>
                    </div>
                </div>
                <p><strong>Address:</strong> {{ $application->address }}</p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <h5>Parent/Guardian Information</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Father Name:</strong> {{ $application->father_name }}</p>
                        <p><strong>Father CNIC:</strong> {{ $application->father_cnic }}</p>
                        <p><strong>Father Phone:</strong> {{ $application->father_phone }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Mother Name:</strong> {{ $application->mother_name ?: 'N/A' }}</p>
                        <p><strong>Father Occupation:</strong> {{ $application->father_occupation ?: 'N/A' }}</p>
                        <p><strong>Mother Occupation:</strong> {{ $application->mother_occupation ?: 'N/A' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <h5>Academic Information</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Previous School:</strong> {{ $application->previous_school }}</p>
                        <p><strong>Board:</strong> {{ $application->board }}</p>
                        <p><strong>Grade:</strong> {{ $application->grade }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Marks Obtained:</strong> {{ $application->marks_obtained }}</p>
                        <p><strong>Total Marks:</strong> {{ $application->total_marks }}</p>
                        <p><strong>Percentage:</strong> {{ $application->percentage }}%</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <h5>Program & Status</h5>
            </div>
            <div class="card-body">
                <p><strong>Applied Program:</strong> {{ $application->program->name }}</p>
                <p><strong>Current Status:</strong>
                    <span class="badge bg-{{ $application->status_badge }}">{{ ucfirst(str_replace('_', ' ', $application->status)) }}</span>
                </p>
                <p><strong>Applied Date:</strong> {{ $application->created_at->format('M d, Y H:i') }}</p>
                @if($application->submitted_at)
                    <p><strong>Submitted At:</strong> {{ $application->submitted_at->format('M d, Y H:i') }}</p>
                @endif
                @if($application->remarks)
                    <p><strong>Remarks:</strong> {{ $application->remarks }}</p>
                @endif
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5>Documents</h5>
            </div>
            <div class="card-body">
                @if($application->photo_path)
                    <p><strong>Photo:</strong> <a href="{{ asset('storage/' . $application->photo_path) }}" target="_blank">View</a></p>
                @endif
                @if($application->cnic_copy_path)
                    <p><strong>CNIC Copy:</strong> <a href="{{ asset('storage/' . $application->cnic_copy_path) }}" target="_blank">View</a></p>
                @endif
                @if($application->marksheet_path)
                    <p><strong>Marksheet:</strong> <a href="{{ asset('storage/' . $application->marksheet_path) }}" target="_blank">View</a></p>
                @endif
                @if($application->other_docs_path)
                    <p><strong>Other Documents:</strong> <a href="{{ asset('storage/' . $application->other_docs_path) }}" target="_blank">View</a></p>
                @endif
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-header">
                <h5>Update Status</h5>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.applicants.update-status', $application) }}">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-control" id="status" name="status" required>
                            <option value="pending" {{ $application->status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="under_review" {{ $application->status == 'under_review' ? 'selected' : '' }}>Under Review</option>
                            <option value="approved" {{ $application->status == 'approved' ? 'selected' : '' }}>Approved</option>
                            <option value="rejected" {{ $application->status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                            <option value="interview_scheduled" {{ $application->status == 'interview_scheduled' ? 'selected' : '' }}>Interview Scheduled</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="remarks" class="form-label">Remarks</label>
                        <textarea class="form-control" id="remarks" name="remarks" rows="3">{{ $application->remarks }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Update Status</button>
                </form>
            </div>
        </div>

        @if($application->fees->count() > 0)
        <div class="card mt-3">
            <div class="card-header">
                <h5>Fee Information</h5>
            </div>
            <div class="card-body">
                @foreach($application->fees as $fee)
                    <div class="border-bottom pb-2 mb-2">
                        <p><strong>{{ $fee->description }}:</strong> {{ $fee->formatted_amount }}</p>
                        <p><strong>Status:</strong>
                            <span class="badge bg-{{ $fee->status == 'paid' ? 'success' : ($fee->status == 'pending' ? 'warning' : 'danger') }}">
                                {{ ucfirst($fee->status) }}
                            </span>
                        </p>
                        <p><strong>Due Date:</strong> {{ $fee->due_date->format('M d, Y') }}</p>
                        @if($fee->paid_date)
                            <p><strong>Paid Date:</strong> {{ $fee->paid_date->format('M d, Y') }}</p>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
