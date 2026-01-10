@extends('admin.layout')

@section('title', 'Gallery Management')

@section('content')
<div class="container-fluid">
    <!-- Header Section -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="mb-1"><i class="fas fa-images text-primary me-2"></i>Gallery Management</h1>
                    <p class="text-muted mb-0">Upload and manage college gallery images</p>
                </div>
                <button type="button" class="btn btn-primary btn-modern" data-bs-toggle="modal" data-bs-target="#uploadModal">
                    <i class="fas fa-plus me-2"></i>Upload Images
                </button>
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

    <!-- Gallery Grid -->
    <div class="row">
        @forelse($gallery as $image)
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
            <div class="card action-card h-100">
                <div class="card-header bg-light d-flex justify-content-between align-items-center">
                    <h6 class="mb-0">
                        <i class="fas fa-image text-primary me-2"></i>{{ Str::limit($image->title, 20) }}
                    </h6>
                    @if($image->is_active)
                        <span class="badge bg-success"><i class="fas fa-eye me-1"></i>Active</span>
                    @else
                        <span class="badge bg-secondary"><i class="fas fa-eye-slash me-1"></i>Inactive</span>
                    @endif
                </div>
                <div class="card-body p-0">
                    <img src="{{ asset('storage/' . $image->image_path) }}" class="card-img-top gallery-image" alt="{{ $image->title }}">
                </div>
                <div class="card-footer bg-transparent">
                    <div class="d-flex justify-content-between align-items-center mb-2">
                        <small class="text-muted">
                            <i class="fas fa-calendar me-1"></i>{{ $image->formatted_date }}
                        </small>
                        <small class="text-muted">
                            <i class="fas fa-sort me-1"></i>Order: {{ $image->sort_order }}
                        </small>
                    </div>
                    <form method="POST" action="{{ route('admin.gallery.destroy', $image) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm w-100" onclick="return confirm('Are you sure you want to delete this image?')">
                            <i class="fas fa-trash me-1"></i>Delete
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="card">
                <div class="card-body text-center py-5">
                    <i class="fas fa-images fa-4x text-muted mb-3"></i>
                    <h4 class="text-muted">No Images in Gallery</h4>
                    <p class="text-muted mb-4">Start building your college gallery by uploading some images</p>
                    <button type="button" class="btn btn-primary btn-modern" data-bs-toggle="modal" data-bs-target="#uploadModal">
                        <i class="fas fa-plus me-2"></i>Upload First Image
                    </button>
                </div>
            </div>
        </div>
        @endforelse
    </div>

    <!-- Statistics Footer -->
    @if($gallery->count() > 0)
    <div class="row mt-4">
        <div class="col-12">
            <div class="card bg-light">
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-md-3">
                            <h4 class="text-primary">{{ $gallery->count() }}</h4>
                            <small class="text-muted">Total Images</small>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-success">{{ $gallery->where('is_active', true)->count() }}</h4>
                            <small class="text-muted">Active Images</small>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-info">{{ $gallery->avg('sort_order') }}</h4>
                            <small class="text-muted">Avg. Sort Order</small>
                        </div>
                        <div class="col-md-3">
                            <h4 class="text-warning">{{ $gallery->where('published_at', '>=', now()->subDays(30))->count() }}</h4>
                            <small class="text-muted">Recent Uploads</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
</div>

<!-- Upload Modal -->
<div class="modal fade" id="uploadModal" tabindex="-1" aria-labelledby="uploadModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadModalLabel">Upload Gallery Images</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('admin.gallery.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title" class="form-label">Image Title</label>
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required>
                        @error('title')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Select Image</label>
                        <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image" accept="image/*" required>
                        @error('image')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="sort_order" class="form-label">Sort Order</label>
                        <input type="number" class="form-control" id="sort_order" name="sort_order" value="0">
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" checked>
                            <label class="form-check-label" for="is_active">
                                Active
                            </label>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.gallery-image {
    height: 200px;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.gallery-image:hover {
    transform: scale(1.05);
}
</style>
@endsection
