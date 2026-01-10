@extends('admin.layout')

@section('title', 'Applicants Management')

@section('content')
<div class="container-fluid">
    <!-- Header Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="mb-1"><i class="fas fa-users text-primary me-2"></i>Applicants Management</h1>
                    <p class="text-muted mb-0">Review and manage student applications</p>
                </div>
                <div class="d-flex gap-2 flex-wrap">
                    <form method="GET" class="d-inline">
                        <select name="status" class="form-select" onchange="this.form.submit()">
                            <option value="all" {{ $status == 'all' ? 'selected' : '' }}>All Applications</option>
                            <option value="pending" {{ $status == 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="under_review" {{ $status == 'under_review' ? 'selected' : '' }}>Under Review</option>
                            <option value="approved" {{ $status == 'approved' ? 'selected' : '' }}>Approved</option>
                            <option value="rejected" {{ $status == 'rejected' ? 'selected' : '' }}>Rejected</option>
                            <option value="interview_scheduled" {{ $status == 'interview_scheduled' ? 'selected' : '' }}>Interview Scheduled</option>
                        </select>
                    </form>
                    <form method="POST" action="{{ route('admin.applicants.download-pdf') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-success btn-modern" id="download-pdf-btn" disabled>
                            <i class="fas fa-download me-2"></i>Download Selected PDF
                        </button>
                    </form>
                    <button type="button" class="btn btn-primary btn-modern" data-bs-toggle="modal" data-bs-target="#uploadPdfModal">
                        <i class="fas fa-upload me-2"></i>Upload Selected Candidates PDF
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Success Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle me-2"></i>{{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Applications Cards -->
    <div class="row">
        @forelse($applications as $application)
        <div class="col-xl-6 mb-4">
            <div class="card action-card h-100">
                <div class="card-header bg-light d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <input type="checkbox" class="form-check-input me-3 application-checkbox" name="applications[]" value="{{ $application->id }}" form="pdf-form">
                        <div>
                            <h6 class="mb-0">{{ $application->application_id }}</h6>
                            <small class="text-muted">{{ $application->created_at->format('M d, Y') }}</small>
                        </div>
                    </div>
                    <span class="badge bg-{{ $application->status_badge }} fs-6">
                        <i class="fas fa-{{ $application->status_icon }} me-1"></i>{{ ucfirst(str_replace('_', ' ', $application->status)) }}
                    </span>
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-8">
                            <h5 class="mb-1">{{ $application->full_name }}</h5>
                            <p class="text-muted mb-2">{{ $application->email }} | {{ $application->phone }}</p>
                        </div>
                        <div class="col-4 text-end">
                            <small class="text-muted">Program</small>
                            <p class="mb-0 fw-bold">{{ $application->program->name }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <small class="text-muted">CNIC</small>
                            <p class="mb-0">{{ $application->cnic }}</p>
                        </div>
                        <div class="col-6">
                            <small class="text-muted">Date of Birth</small>
                            <p class="mb-0">{{ $application->date_of_birth->format('M d, Y') }}</p>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <div class="col-6">
                            <small class="text-muted">Marks</small>
                            <p class="mb-0">{{ $application->marks_obtained }}/{{ $application->total_marks }} ({{ $application->percentage }}%)</p>
                        </div>
                        <div class="col-6">
                            <small class="text-muted">Board</small>
                            <p class="mb-0">{{ $application->board }}</p>
                        </div>
                    </div>

                    @if($application->remarks)
                    <div class="alert alert-warning py-2">
                        <small><i class="fas fa-comment me-1"></i>{{ $application->remarks }}</small>
                    </div>
                    @endif
                </div>
                <div class="card-footer bg-transparent">
                    <div class="d-flex gap-2">
                        <a href="{{ route('admin.applicants.show', $application) }}" class="btn btn-info btn-sm flex-fill">
                            <i class="fas fa-eye me-1"></i>View Details
                        </a>
                        <div class="dropdown flex-fill">
                            <button class="btn btn-secondary btn-sm dropdown-toggle w-100" type="button" data-bs-toggle="dropdown">
                                <i class="fas fa-edit me-1"></i>Update Status
                            </button>
                            <ul class="dropdown-menu w-100">
                                <li><a class="dropdown-item" href="#" onclick="updateStatus({{ $application->id }}, 'pending')">
                                    <i class="fas fa-clock text-warning me-2"></i>Pending
                                </a></li>
                                <li><a class="dropdown-item" href="#" onclick="updateStatus({{ $application->id }}, 'under_review')">
                                    <i class="fas fa-search text-info me-2"></i>Under Review
                                </a></li>
                                <li><a class="dropdown-item" href="#" onclick="updateStatus({{ $application->id }}, 'approved')">
                                    <i class="fas fa-check text-success me-2"></i>Approved
                                </a></li>
                                <li><a class="dropdown-item" href="#" onclick="updateStatus({{ $application->id }}, 'rejected')">
                                    <i class="fas fa-times text-danger me-2"></i>Rejected
                                </a></li>
                                <li><a class="dropdown-item" href="#" onclick="updateStatus({{ $application->id }}, 'interview_scheduled')">
                                    <i class="fas fa-calendar text-primary me-2"></i>Interview Scheduled
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center py-5">
                    <i class="fas fa-users fa-4x text-muted mb-3"></i>
                    <h4 class="text-muted">No Applications Found</h4>
                    <p class="text-muted">No applications match the selected filter criteria</p>
                </div>
            </div>
        </div>
        @endforelse
    </div>

    <!-- Pagination -->
    @if($applications->hasPages())
    <div class="row mt-4">
        <div class="col-12">
            <div class="d-flex justify-content-center">
                {{ $applications->links() }}
            </div>
        </div>
    </div>
    @endif

    <!-- Statistics Footer -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card bg-light">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-2">
                            <h4 class="text-primary">{{ $applications->total() }}</h4>
                            <small class="text-muted">Total Applications</small>
                        </div>
                        <div class="col-md-2">
                            <h4 class="text-warning">{{ $applications->where('status', 'pending')->count() }}</h4>
                            <small class="text-muted">Pending</small>
                        </div>
                        <div class="col-md-2">
                            <h4 class="text-info">{{ $applications->where('status', 'under_review')->count() }}</h4>
                            <small class="text-muted">Under Review</small>
                        </div>
                        <div class="col-md-2">
                            <h4 class="text-success">{{ $applications->where('status', 'approved')->count() }}</h4>
                            <small class="text-muted">Approved</small>
                        </div>
                        <div class="col-md-2">
                            <h4 class="text-danger">{{ $applications->where('status', 'rejected')->count() }}</h4>
                            <small class="text-muted">Rejected</small>
                        </div>
                        <div class="col-md-2">
                            <h4 class="text-secondary">{{ $applications->where('status', 'interview_scheduled')->count() }}</h4>
                            <small class="text-muted">Interview Scheduled</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form id="pdf-form" method="POST" action="{{ route('admin.applicants.download-pdf') }}" style="display: none;">
    @csrf
</form>

<script>
function updateStatus(applicationId, status) {
    const statusText = status.replace(/_/g, ' ').replace(/\b\w/g, l => l.toUpperCase());
    if (confirm(`Are you sure you want to update the status to "${statusText}"?`)) {
        const form = document.createElement('form');
        form.method = 'POST';
        form.action = `/admin/applicants/${applicationId}/status`;

        const csrfToken = document.createElement('input');
        csrfToken.type = 'hidden';
        csrfToken.name = '_token';
        csrfToken.value = '{{ csrf_token() }}';

        const statusInput = document.createElement('input');
        statusInput.type = 'hidden';
        statusInput.name = 'status';
        statusInput.value = status;

        const methodInput = document.createElement('input');
        methodInput.type = 'hidden';
        methodInput.name = '_method';
        methodInput.value = 'PUT';

        form.appendChild(csrfToken);
        form.appendChild(statusInput);
        form.appendChild(methodInput);

        document.body.appendChild(form);
        form.submit();
    }
}

// Handle checkbox selection
document.addEventListener('DOMContentLoaded', function() {
    const checkboxes = document.querySelectorAll('.application-checkbox');
    const downloadBtn = document.getElementById('download-pdf-btn');

    function updateDownloadButton() {
        const checkedBoxes = document.querySelectorAll('.application-checkbox:checked');
        downloadBtn.disabled = checkedBoxes.length === 0;
        downloadBtn.innerHTML = checkedBoxes.length > 0
            ? `<i class="fas fa-download me-2"></i>Download ${checkedBoxes.length} Selected PDF`
            : `<i class="fas fa-download me-2"></i>Download Selected PDF`;
    }

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateDownloadButton);
    });

    updateDownloadButton();
});
</script>

<!-- Upload PDF Modal -->
<div class="modal fade" id="uploadPdfModal" tabindex="-1" aria-labelledby="uploadPdfModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadPdfModalLabel">
                    <i class="fas fa-upload text-primary me-2"></i>Upload Selected Candidates PDF
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('admin.applicants.upload-selected-pdf') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="pdf_title" class="form-label">PDF Title</label>
                        <input type="text" class="form-control" id="pdf_title" name="title" value="Selected Candidates List - {{ date('F Y') }}" required>
                        <div class="form-text">This will be displayed as the download link title</div>
                    </div>
                    <div class="mb-3">
                        <label for="pdf_file" class="form-label">PDF File</label>
                        <input type="file" class="form-control" id="pdf_file" name="pdf_file" accept=".pdf" required>
                        <div class="form-text">Upload a PDF file containing the list of selected candidates</div>
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Make this PDF available for download on the admission page
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-upload me-2"></i>Upload PDF
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.dropdown-menu {
    min-width: 200px;
}
</style>
@endsection
