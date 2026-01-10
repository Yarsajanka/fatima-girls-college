@extends('admin.layout')

@section('title', 'Create Program')

@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div class="card">
            <div class="card-header">
                <h3>Create New Program</h3>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('admin.programs.store') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Program Name</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="code" class="form-label">Program Code</label>
                        <input type="text" class="form-control @error('code') is-invalid @enderror" id="code" name="code" value="{{ old('code') }}" required>
                        @error('code')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="duration_years" class="form-label">Duration (Years)</label>
                                <input type="number" class="form-control @error('duration_years') is-invalid @enderror" id="duration_years" name="duration_years" value="{{ old('duration_years', 1) }}" min="1" max="4" required>
                                @error('duration_years')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="capacity" class="form-label">Capacity</label>
                                <input type="number" class="form-control @error('capacity') is-invalid @enderror" id="capacity" name="capacity" value="{{ old('capacity', 50) }}" min="1" required>
                                @error('capacity')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="eligibility_criteria" class="form-label">Eligibility Criteria</label>
                        <textarea class="form-control @error('eligibility_criteria') is-invalid @enderror" id="eligibility_criteria" name="eligibility_criteria" rows="2">{{ old('eligibility_criteria') }}</textarea>
                        @error('eligibility_criteria')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="fee_per_year" class="form-label">Fee Per Year (Rs.)</label>
                        <input type="number" class="form-control @error('fee_per_year') is-invalid @enderror" id="fee_per_year" name="fee_per_year" value="{{ old('fee_per_year', 0) }}" min="0" step="0.01" required>
                        @error('fee_per_year')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" {{ old('is_active', true) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_active">
                                Active
                            </label>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('admin.programs') }}" class="btn btn-secondary">Cancel</a>
                        <button type="submit" class="btn btn-primary">Create Program</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
