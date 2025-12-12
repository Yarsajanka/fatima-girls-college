@extends('layouts.app')

@section('title', 'About Us - Fatima Girls College')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h1 class="text-center mb-4">About Fatima Girls College</h1>

            @php
                $vision = \App\Models\Content::where('type', 'vision')->where('is_active', true)->first();
                $mission = \App\Models\Content::where('type', 'mission')->where('is_active', true)->first();
                $principalMessage = \App\Models\Content::where('type', 'principal_message')->where('is_active', true)->first();
                $history = \App\Models\Content::where('type', 'history')->where('is_active', true)->first();
            @endphp

            @if($vision)
            <h2 class="mb-3">{{ $vision->title }}</h2>
            <p>{{ $vision->content }}</p>
            @endif

            @if($mission)
            <h2 class="mb-3">{{ $mission->title }}</h2>
            <p>{{ $mission->content }}</p>
            @endif

            @if($principalMessage)
            <h2 class="mb-3">{{ $principalMessage->title }}</h2>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="{{ $principalMessage->image_path ? asset('storage/' . $principalMessage->image_path) : 'https://via.placeholder.com/200x250?text=Principal' }}" alt="Principal" class="img-fluid rounded">
                        </div>
                        <div class="col-md-8">
                            <p class="card-text">{{ $principalMessage->content }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endif

            @if($history)
            <h2 class="mb-3">{{ $history->title }}</h2>
            <p>{{ nl2br($history->content) }}</p>
            @endif

            <h2 class="mb-3">Why Choose Fatima Girls College?</h2>
            <div class="row">
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Experienced and dedicated faculty</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Modern classrooms and laboratories</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Comprehensive library resources</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Sports and extracurricular activities</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <ul class="list-unstyled">
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Career counseling and guidance</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Safe and secure campus environment</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Scholarships and financial aid</li>
                        <li class="mb-2"><i class="bi bi-check-circle-fill text-primary me-2"></i> Strong alumni network</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
