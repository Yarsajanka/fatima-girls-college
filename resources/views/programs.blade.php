@extends('layouts.app')

@section('title', 'Programs - Fatima Girls College')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-5">Our Programs</h1>

    <div class="row">
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">F.A (Faculty of Arts)</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">A comprehensive program covering humanities and social sciences, preparing students for diverse career paths.</p>
                    <ul class="list-unstyled">
                        <li><strong>Duration:</strong> 1 Year</li>
                        <li><strong>Eligibility:</strong> Matriculation (45% min)</li>
                        <li><strong>Fee:</strong> PKR 25,000/year</li>
                        <li><strong>Seats:</strong> 100</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="/apply" class="btn btn-primary w-100">Apply Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-header bg-secondary text-white">
                    <h5 class="mb-0">F.Sc Pre-Medical</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Focused on biology, chemistry, and physics, preparing students for medical and healthcare careers.</p>
                    <ul class="list-unstyled">
                        <li><strong>Duration:</strong> 2 Years</li>
                        <li><strong>Eligibility:</strong> Matric Science (60% min)</li>
                        <li><strong>Fee:</strong> PKR 35,000/year</li>
                        <li><strong>Seats:</strong> 80</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="/apply" class="btn btn-secondary w-100">Apply Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">F.Sc Pre-Engineering</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Emphasis on mathematics, physics, and chemistry, preparing students for engineering disciplines.</p>
                    <ul class="list-unstyled">
                        <li><strong>Duration:</strong> 2 Years</li>
                        <li><strong>Eligibility:</strong> Matric Science (60% min)</li>
                        <li><strong>Fee:</strong> PKR 35,000/year</li>
                        <li><strong>Seats:</strong> 80</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="/apply" class="btn btn-primary w-100">Apply Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-header bg-secondary text-white">
                    <h5 class="mb-0">ICS (Computer Science)</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Combines computer science with mathematics and physics, preparing students for IT careers.</p>
                    <ul class="list-unstyled">
                        <li><strong>Duration:</strong> 2 Years</li>
                        <li><strong>Eligibility:</strong> Matric Science (55% min)</li>
                        <li><strong>Fee:</strong> PKR 30,000/year</li>
                        <li><strong>Seats:</strong> 60</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="/apply" class="btn btn-secondary w-100">Apply Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">ICOM (Commerce)</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Focuses on business, accounting, and economics, preparing students for commerce and finance careers.</p>
                    <ul class="list-unstyled">
                        <li><strong>Duration:</strong> 2 Years</li>
                        <li><strong>Eligibility:</strong> Matric (50% min)</li>
                        <li><strong>Fee:</strong> PKR 28,000/year</li>
                        <li><strong>Seats:</strong> 70</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="/apply" class="btn btn-primary w-100">Apply Now</a>
                </div>
            </div>
        </div>

        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card h-100">
                <div class="card-header bg-secondary text-white">
                    <h5 class="mb-0">BS Computer Science</h5>
                </div>
                <div class="card-body">
                    <p class="card-text">Comprehensive 4-year program covering software development, algorithms, and modern computing technologies.</p>
                    <ul class="list-unstyled">
                        <li><strong>Duration:</strong> 4 Years</li>
                        <li><strong>Eligibility:</strong> F.Sc/ICS/A-Level (50% min)</li>
                        <li><strong>Fee:</strong> PKR 45,000/year</li>
                        <li><strong>Seats:</strong> 50</li>
                    </ul>
                </div>
                <div class="card-footer">
                    <a href="/apply" class="btn btn-secondary w-100">Apply Now</a>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-5">
        <div class="alert alert-info">
            <h5>Need Help Choosing a Program?</h5>
            <p>Contact our admission office for personalized guidance and career counseling.</p>
            <a href="/contact" class="btn btn-primary">Contact Us</a>
        </div>
    </div>
</div>
@endsection
