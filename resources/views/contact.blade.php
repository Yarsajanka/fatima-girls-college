@extends('layouts.app')

@section('title', 'Contact Us - Fatima Girls College')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-5">Contact Us</h1>

    <div class="row">
        <div class="col-lg-8 mx-auto">
            @if($contact)
                <div class="card">
                    <div class="card-body">
                        {!! nl2br(e($contact->content)) !!}
                    </div>
                </div>
            @else
                <p>Contact details not available.</p>
            @endif
        </div>
    </div>
</div>
@endsection
