@extends('admin.layout')

@section('title', 'Programs Management')

@section('content')
<div class="container-fluid">
    <!-- Header Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="mb-1"><i class="fas fa-graduation-cap text-primary me-2"></i>Programs Management</h1>
                    <p class="text-muted mb-0">Manage academic programs and courses offered by the college</p>
                </div>
                <a href="{{ route('admin.programs.create') }}" class="btn btn-primary btn-modern">
                    <i class="fas fa-plus me-2"></i>Add New Program
                </a>
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

    <!-- Programs Cards/Grid -->
    <div class="row">
        @forelse($programs as $program)
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card action-card h-100">
                <div class="card-header bg-light d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <i class="fas fa-book text-primary me-2"></i>{{ $program->name }}
                    </h5>
                    @if($program->is_active)
                        <span class="badge bg-success"><i class="fas fa-check me-1"></i>Active</span>
                    @else
                        <span class="badge bg-secondary"><i class="fas fa-pause me-1"></i>Inactive</span>
                    @endif
                </div>
                <div class="card-body">
                    <div class="row mb-3">
                        <div class="col-6">
                            <small class="text-muted">Code</small>
                            <p class="mb-1 fw-bold">{{ $program->code }}</p>
                        </div>
                        <div class="col-6">
                            <small class="text-muted">Duration</small>
                            <p class="mb-1 fw-bold">{{ $program->duration_years }} years</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <small class="text-muted">Capacity</small>
                            <p class="mb-1 fw-bold">{{ $program->capacity }} students</p>
                        </div>
                        <div class="col-6">
                            <small class="text-muted">Fee/Year</small>
                            <p class="mb-1 fw-bold">Rs. {{ number_format($program->fee_per_year, 0) }}</p>
                        </div>
                    </div>
                    @if($program->description)
                    <div class="mb-3">
                        <small class="text-muted">Description</small>
                        <p class="mb-0 small">{{ Str::limit($program->description, 100) }}</p>
                    </div>
                    @endif
                </div>
                <div class="card-footer bg-transparent">
                    <div class="d-flex gap-2">
                        <a href="{{ route('admin.programs.edit', $program) }}" class="btn btn-warning btn-sm flex-fill">
                            <i class="fas fa-edit me-1"></i>Edit
                        </a>
                        <form method="POST" action="{{ route('admin.programs.destroy', $program) }}" class="flex-fill">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm w-100" onclick="return confirm('Are you sure you want to delete this program?')">
                                <i class="fas fa-trash me-1"></i>Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center py-5">
                    <i class="fas fa-graduation-cap fa-4x text-muted mb-3"></i>
                    <h4 class="text-muted">No Programs Found</h4>
                    <p class="text-muted mb-4">Start by adding your first academic program</p>
                    <a href="{{ route('admin.programs.create') }}" class="btn btn-primary btn-modern">
                        <i class="fas fa-plus me-2"></i>Create First Program
                    </a>
                </div>
            </div>
        </div>
        @endforelse
    </div>

    <!-- Statistics Footer -->
    <div class="row mt-4">
        <div class="col-12">
            <div class="card bg-light">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-3">
                            <h4 class="text-primary">{{ $programs->count() }}</h4>
                            <small class="text-muted">Total Programs</small>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-success">{{ $programs->where('is_active', true)->count() }}</h4>
                            <small class="text-muted">Active Programs</small>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-warning">{{ $programs->avg('duration_years') }} yrs</h4>
                            <small class="text-muted">Avg. Duration</small>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-info">Rs. {{ number_format($programs->avg('fee_per_year'), 0) }}</h4>
                            <small class="text-muted">Avg. Fee/Year</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
