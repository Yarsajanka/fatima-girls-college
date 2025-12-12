@extends('layouts.app')

@section('title', 'Home - Fatima Girls College')

@section('content')
<!-- Header Navigation -->
<header class="sticky-top bg-white shadow-sm">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <!-- College Logo -->
                <a class="navbar-brand fw-bold text-primary fs-4" href="/">
                    Fatima Girls College
                </a>

                <!-- Mobile Menu Toggle -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navigation Menu -->
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/programs">Programs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/admission">Admission Info</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-pink text-white me-2" href="/apply">Apply Online</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-purple text-white me-2" href="/status">Student Portal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>

<!-- Hero Section -->
<section class="hero-section bg-gradient-pink-purple text-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <h1 class="display-4 fw-bold mb-4 hero-title">Fatima Girls College — Empowering the Next Generation</h1>
                <p class="lead mb-4 fs-5 hero-subtitle">Admissions Open for 2025 — Apply Online Today</p>
                <div class="d-flex flex-wrap gap-3">
                    <a href="/apply" class="btn btn-light btn-lg px-4 py-3 hero-btn">
                        Apply Now
                    </a>
                    <a href="/admission" class="btn btn-outline-light btn-lg px-4 py-3 hero-btn">
                        Admission Info
                    </a>
                </div>
            </div>
            <div class="col-lg-5 mt-4 mt-lg-0">
                <div class="position-relative hero-image">
                    <img src="https://via.placeholder.com/600x400?text=Empowering+Girls+Education" alt="Female students studying" class="img-fluid rounded-3 shadow-lg">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Statistics Section -->
<div class="bg-light py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 mb-4">
                <div class="stat-card">
                    <div class="display-4 text-primary mb-2">500+</div>
                    <h5 class="text-muted">Students</h5>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-card">
                    <div class="display-4 text-success mb-2">10+</div>
                    <h5 class="text-muted">Programs</h5>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-card">
                    <div class="display-4 text-info mb-2">50+</div>
                    <h5 class="text-muted">Faculty</h5>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="stat-card">
                    <div class="display-4 text-warning mb-2">25+</div>
                    <h5 class="text-muted">Years</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Programs Offered Section -->
<section class="container my-5" data-aos="fade-up">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <h2 class="display-5 fw-bold text-primary">Programs Offered</h2>
            <p class="lead text-muted">Choose from our diverse range of academic programs</p>
        </div>
    </div>
    <div class="row g-4">
        @forelse($programs as $program)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm program-card" data-aos="zoom-in">
                <div class="card-body text-center p-4">
                    <h5 class="card-title fw-bold mb-3">{{ $program->name }}</h5>
                    <p class="text-muted mb-2"><strong>Duration:</strong> {{ $program->duration_years }} Year{{ $program->duration_years > 1 ? 's' : '' }}</p>
                    <p class="text-muted mb-3"><strong>Eligibility:</strong> {{ $program->eligibility_criteria ?: 'As per HEC guidelines' }}</p>
                    <a href="/programs" class="btn btn-pink">View Details</a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm program-card">
                <div class="card-body text-center p-4">
                    <h5 class="card-title fw-bold mb-3">FSC Pre-Medical</h5>
                    <p class="text-muted mb-2"><strong>Duration:</strong> 2 Years</p>
                    <p class="text-muted mb-3"><strong>Eligibility:</strong> Matric Science</p>
                    <a href="/programs" class="btn btn-pink">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm program-card">
                <div class="card-body text-center p-4">
                    <h5 class="card-title fw-bold mb-3">FSC Pre-Engineering</h5>
                    <p class="text-muted mb-2"><strong>Duration:</strong> 2 Years</p>
                    <p class="text-muted mb-3"><strong>Eligibility:</strong> Matric Science</p>
                    <a href="/programs" class="btn btn-pink">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm program-card">
                <div class="card-body text-center p-4">
                    <h5 class="card-title fw-bold mb-3">ICS</h5>
                    <p class="text-muted mb-2"><strong>Duration:</strong> 2 Years</p>
                    <p class="text-muted mb-3"><strong>Eligibility:</strong> Matric Science</p>
                    <a href="/programs" class="btn btn-pink">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm program-card">
                <div class="card-body text-center p-4">
                    <h5 class="card-title fw-bold mb-3">I.Com</h5>
                    <p class="text-muted mb-2"><strong>Duration:</strong> 2 Years</p>
                    <p class="text-muted mb-3"><strong>Eligibility:</strong> Matric Commerce</p>
                    <a href="/programs" class="btn btn-pink">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm program-card">
                <div class="card-body text-center p-4">
                    <h5 class="card-title fw-bold mb-3">FA Arts</h5>
                    <p class="text-muted mb-2"><strong>Duration:</strong> 2 Years</p>
                    <p class="text-muted mb-3"><strong>Eligibility:</strong> Matric Arts</p>
                    <a href="/programs" class="btn btn-pink">View Details</a>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 border-0 shadow-sm program-card">
                <div class="card-body text-center p-4">
                    <h5 class="card-title fw-bold mb-3">BS Computer Science</h5>
                    <p class="text-muted mb-2"><strong>Duration:</strong> 4 Years</p>
                    <p class="text-muted mb-3"><strong>Eligibility:</strong> FSC Pre-Engineering/ICS</p>
                    <a href="/programs" class="btn btn-pink">View Details</a>
                </div>
            </div>
        </div>
        @endforelse
    </div>
</section>

<!-- Latest Announcements Section -->
<div class="bg-primary text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold">Latest Announcements</h2>
                <p class="lead">Stay updated with the latest news and important announcements</p>
            </div>
        </div>
        <div class="row g-4">
            @forelse($announcements as $announcement)
            <div class="col-md-6">
                <div class="card bg-white text-dark border-0 shadow-lg">
                    <div class="card-body p-4">
                        <div class="d-flex align-items-start mb-3">
                            <div class="announcement-icon me-3">
                                <i class="fas fa-bullhorn fa-2x text-primary"></i>
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="card-title fw-bold mb-2">{{ $announcement->title }}</h5>
                                <p class="card-text">{{ Str::limit($announcement->content, 150) }}</p>
                                <small class="text-muted">
                                    <i class="fas fa-calendar-alt me-1"></i>
                                    {{ $announcement->published_at ? $announcement->published_at->format('M d, Y') : 'Recent' }}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-md-6">
                <div class="card bg-white text-dark border-0 shadow-lg">
                    <div class="card-body p-4 text-center">
                        <i class="fas fa-calendar-check fa-3x text-primary mb-3"></i>
                        <h5 class="card-title fw-bold">Admission Open for 2025</h5>
                        <p class="card-text">Applications are now open for all programs. Apply before the deadline to secure your seat.</p>
                        <small class="text-muted">Posted on: December 1, 2024</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card bg-white text-dark border-0 shadow-lg">
                    <div class="card-body p-4 text-center">
                        <i class="fas fa-tools fa-3x text-success mb-3"></i>
                        <h5 class="card-title fw-bold">New Campus Facilities</h5>
                        <p class="card-text">Exciting updates on our new library, computer labs, and sports facilities.</p>
                        <small class="text-muted">Posted on: November 28, 2024</small>
                    </div>
                </div>
            </div>
            @endforelse
        </div>
    </div>
</div>

<!-- Why Choose Our College Section -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="display-5 fw-bold text-primary mb-4">Why Choose Our College?</h2>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="d-flex align-items-start mb-3">
                            <div class="feature-icon-pink me-3">
                                <i class="fas fa-users fa-2x text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Experienced Faculty</h6>
                                <p class="text-muted small">Learn from qualified and experienced educators</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start mb-3">
                            <div class="feature-icon-pink me-3">
                                <i class="fas fa-shield-alt fa-2x text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Discipline & Safety</h6>
                                <p class="text-muted small">Safe and disciplined learning environment</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start mb-3">
                            <div class="feature-icon-pink me-3">
                                <i class="fas fa-laptop fa-2x text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Modern Computer Labs</h6>
                                <p class="text-muted small">State-of-the-art computer facilities</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start mb-3">
                            <div class="feature-icon-pink me-3">
                                <i class="fas fa-graduation-cap fa-2x text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Scholarship Opportunities</h6>
                                <p class="text-muted small">Financial aid for deserving students</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex align-items-start mb-3">
                            <div class="feature-icon-pink me-3">
                                <i class="fas fa-theater-masks fa-2x text-white"></i>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Co-curricular Activities</h6>
                                <p class="text-muted small">Sports, arts, and cultural activities</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <img src="https://via.placeholder.com/600x400?text=Modern+Campus+Facilities" alt="College Campus" class="img-fluid rounded-3 shadow-lg">
            </div>
        </div>
    </div>
</section>

<!-- About Us Preview Section -->
<section class="py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="https://via.placeholder.com/600x400?text=Female+Students+Studying" alt="Female students" class="img-fluid rounded-3 shadow-lg">
            </div>
            <div class="col-lg-6 mt-4 mt-lg-0">
                <h2 class="display-5 fw-bold text-primary mb-4">About Fatima Girls College</h2>
                <p class="lead text-muted mb-4">
                    Fatima Girls College is dedicated to empowering young women through quality education, modern facilities, and committed faculty. We provide a nurturing environment where students can excel academically and personally.
                </p>
                <a href="/about" class="btn btn-pink btn-lg">Read More</a>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="display-5 fw-bold text-primary">What Our Students Say</h2>
                <p class="lead text-muted">Hear from our successful graduates</p>
            </div>
        </div>
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm testimonial-card" data-aos="fade-up">
                    <div class="card-body p-4 text-center">
                        <div class="testimonial-stars mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="card-text mb-3">"Fatima Girls College provided me with excellent education and helped me build confidence. The faculty is supportive and the facilities are top-notch."</p>
                        <h6 class="fw-bold">Sarah Ahmed</h6>
                        <small class="text-muted">BS Computer Science Graduate</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm testimonial-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="card-body p-4 text-center">
                        <div class="testimonial-stars mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="card-text mb-3">"The college environment is safe and encouraging. I made lifelong friends and gained skills that helped me succeed in my career."</p>
                        <h6 class="fw-bold">Ayesha Khan</h6>
                        <small class="text-muted">FSC Pre-Medical Graduate</small>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="card border-0 shadow-sm testimonial-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="card-body p-4 text-center">
                        <div class="testimonial-stars mb-3">
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                            <i class="fas fa-star text-warning"></i>
                        </div>
                        <p class="card-text mb-3">"Outstanding faculty and modern facilities made my learning experience exceptional. Highly recommended for girls' education."</p>
                        <h6 class="fw-bold">Fatima Ali</h6>
                        <small class="text-muted">I.Com Graduate</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<div class="container my-5">
    <div class="row">
        <div class="col-12 text-center mb-5">
            <h2 class="display-5 fw-bold text-primary">Campus Gallery</h2>
            <p class="lead text-muted">Take a virtual tour of our beautiful campus and facilities</p>
        </div>
    </div>
    @if($gallery->count() > 0)
    <div id="galleryCarousel" class="carousel slide shadow-lg rounded-3 overflow-hidden" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach($gallery as $index => $image)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <div class="position-relative">
                    <img src="{{ asset('storage/' . $image->image_path) }}" class="d-block w-100" alt="{{ $image->title }}" style="height: 500px; object-fit: cover;">
                    <div class="carousel-caption d-none d-md-block bg-dark bg-opacity-75 rounded p-3">
                        <h5>{{ $image->title }}</h5>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#galleryCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#galleryCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        <div class="carousel-indicators">
            @foreach($gallery as $index => $image)
            <button type="button" data-bs-target="#galleryCarousel" data-bs-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}" aria-current="{{ $index == 0 ? 'true' : 'false' }}" aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>
    </div>
    @else
    <div class="text-center">
        <div class="bg-light rounded-3 p-5">
            <i class="fas fa-images fa-4x text-muted mb-3"></i>
            <h4 class="text-muted">Gallery Coming Soon</h4>
            <p class="text-muted">We're preparing amazing photos of our campus and facilities</p>
        </div>
    </div>
    @endif
</div>

<!-- Call to Action Section -->
<div class="bg-gradient-secondary text-white py-5">
    <div class="container text-center">
        <h2 class="display-5 fw-bold mb-4">Ready to Start Your Journey?</h2>
        <p class="lead mb-4 fs-5">Join thousands of successful graduates who started their careers at Fatima Girls College</p>
        <div class="d-flex flex-wrap justify-content-center gap-3">
            <a href="/apply" class="btn btn-light btn-lg px-5 py-3">
                <i class="fas fa-rocket me-2"></i>Apply Now
            </a>
            <a href="/contact" class="btn btn-outline-light btn-lg px-5 py-3">
                <i class="fas fa-phone me-2"></i>Contact Us
            </a>
            <a href="/admission" class="btn btn-outline-light btn-lg px-5 py-3">
                <i class="fas fa-question-circle me-2"></i>Admission Info
            </a>
        </div>
    </div>
</div>

<style>
/* Color Palette */
:root {
    --pink: #e91e63;
    --purple: #9c27b0;
    --dark-purple: #6a1b9a;
    --light-grey: #f8f9fa;
}

/* Gradients */
.bg-gradient-pink-purple {
    background: linear-gradient(135deg, var(--pink) 0%, var(--purple) 100%);
}

.bg-purple {
    background-color: var(--purple);
}

.bg-dark-purple {
    background-color: var(--dark-purple);
}

/* Buttons */
.btn-pink {
    background-color: var(--pink);
    border-color: var(--pink);
}

.btn-pink:hover {
    background-color: #d81b60;
    border-color: #d81b60;
}

.btn-purple {
    background-color: var(--purple);
    border-color: var(--purple);
}

.btn-purple:hover {
    background-color: #8e24aa;
    border-color: #8e24aa;
}

.text-pink {
    color: var(--pink) !important;
}

/* Cards */
.program-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.program-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.15) !important;
}

.testimonial-card {
    transition: transform 0.3s ease;
}

.testimonial-card:hover {
    transform: translateY(-5px);
}

/* Icons */
.feature-icon-pink {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background-color: var(--pink);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.announcement-icon {
    background: rgba(0,123,255,0.1);
    border-radius: 50%;
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* Statistics */
.stat-card .display-4 {
    font-size: 2.5rem;
    font-weight: 700;
}

/* Hero Animations */
.hero-title, .hero-subtitle, .hero-btn {
    opacity: 0;
    transform: translateY(30px);
    animation: fadeInUp 1s ease forwards;
}

.hero-title {
    animation-delay: 0.2s;
}

.hero-subtitle {
    animation-delay: 0.4s;
}

.hero-btn {
    animation-delay: 0.6s;
}

@keyframes fadeInUp {
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

/* Testimonial Stars */
.testimonial-stars {
    color: #ffc107;
}

/* Typography */
body {
    font-family: 'Inter', sans-serif;
}

h1, h2, h3, h4, h5, h6 {
    font-family: 'Poppins', sans-serif;
}

/* Responsive */
@media (max-width: 768px) {
    .display-4 {
        font-size: 2rem;
    }

    .display-5 {
        font-size: 1.8rem;
    }

    .hero-section .col-lg-7 {
        text-align: center;
        margin-bottom: 2rem;
    }

    .navbar-nav {
        text-align: center;
    }

    .navbar-nav .nav-item {
        margin-bottom: 0.5rem;
    }
}

/* AOS Animations (fallback) */
[data-aos] {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.6s ease, transform 0.6s ease;
}

[data-aos].aos-animate {
    opacity: 1;
    transform: translateY(0);
}
</style>
@endsection
