@extends('admin.layout')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h1 class="mb-1"><i class="fas fa-tachometer-alt text-primary me-2"></i>Admin Dashboard</h1>
                    <p class="text-muted mb-0">Welcome back! Here's what's happening with your college admissions.</p>
                </div>
                <div>
                    <small class="text-muted">{{ now()->format('l, F j, Y') }}</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row mb-5">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stat-card bg-primary text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="mb-1">{{ $stats['total_applications'] }}</h2>
                            <p class="mb-0 opacity-75">Total Applications</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-alt fa-2x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stat-card bg-warning text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="mb-1">{{ $stats['pending_applications'] }}</h2>
                            <p class="mb-0 opacity-75">Pending Review</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-clock fa-2x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stat-card bg-success text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="mb-1">{{ $stats['approved_applications'] }}</h2>
                            <p class="mb-0 opacity-75">Approved</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-check-circle fa-2x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card stat-card bg-info text-white h-100">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h2 class="mb-1">{{ $stats['total_programs'] }}</h2>
                            <p class="mb-0 opacity-75">Active Programs</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-graduation-cap fa-2x opacity-75"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="row mb-5">
        <div class="col-12">
            <h3 class="mb-4"><i class="fas fa-bolt text-warning me-2"></i>Quick Actions</h3>
        </div>
    </div>

    <div class="row mb-4">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card action-card h-100">
                <div class="card-body">
                    <div class="icon text-primary">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h5 class="card-title mb-3">Programs</h5>
                    <p class="card-text text-muted mb-3">Manage academic programs and courses</p>
                    <a href="{{ route('admin.programs') }}" class="btn btn-primary btn-modern">
                        <i class="fas fa-arrow-right me-2"></i>Manage Programs
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card action-card h-100">
                <div class="card-body">
                    <div class="icon text-warning">
                        <i class="fas fa-users"></i>
                    </div>
                    <h5 class="card-title mb-3">Applications</h5>
                    <p class="card-text text-muted mb-3">Review and manage student applications</p>
                    <a href="{{ route('admin.applicants') }}" class="btn btn-warning btn-modern">
                        <i class="fas fa-arrow-right me-2"></i>Review Applications
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card action-card h-100">
                <div class="card-body">
                    <div class="icon text-info">
                        <i class="fas fa-bullhorn"></i>
                    </div>
                    <h5 class="card-title mb-3">Announcements</h5>
                    <p class="card-text text-muted mb-3">Create and manage college announcements</p>
                    <a href="{{ route('admin.announcements') }}" class="btn btn-info btn-modern">
                        <i class="fas fa-arrow-right me-2"></i>Manage Announcements
                    </a>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card action-card h-100">
                <div class="card-body">
                    <div class="icon text-success">
                        <i class="fas fa-images"></i>
                    </div>
                    <h5 class="card-title mb-3">Gallery</h5>
                    <p class="card-text text-muted mb-3">Upload and manage college photos</p>
                    <a href="{{ route('admin.gallery') }}" class="btn btn-success btn-modern">
                        <i class="fas fa-arrow-right me-2"></i>Manage Gallery
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Admission Controls -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-light">
                    <h5 class="mb-0"><i class="fas fa-cogs text-secondary me-2"></i>Admission Controls</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="d-grid">
                                <form method="POST" action="{{ route('admin.admissions.toggle') }}">
                                    @csrf
                                    <button type="submit" name="is_open" value="1" class="btn btn-success btn-lg">
                                        <i class="fas fa-play-circle me-2"></i>Open Admissions
                                    </button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div class="d-grid">
                                <form method="POST" action="{{ route('admin.admissions.toggle') }}">
                                    @csrf
                                    <button type="submit" name="is_open" value="0" class="btn btn-danger btn-lg">
                                        <i class="fas fa-stop-circle me-2"></i>Close Admissions
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="alert alert-info mt-3">
                        <i class="fas fa-info-circle me-2"></i>
                        <strong>Current Status:</strong> Admissions are currently {{ $admissionsOpen ? 'OPEN' : 'CLOSED' }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
