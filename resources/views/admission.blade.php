<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Women's College - Admission</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    @vite(['resources/css/home.css'])
</head>
<body>
    <!-- Header/Navbar -->
    <header class="header">
        <div class="logo">Women's College</div>
        <nav class="menu">
            <a href="/">Home</a>
            <a href="/about">About Us</a>
            <a href="/programs">Programs</a>
            <a href="/admission">Admission Info</a>
            <a href="/contact">Contact</a>
        </nav>
        <div class="buttons">
            <a href="/apply"><button class="btn btn-primary">Apply Online</button></a>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Start Your Journey Here</h1>
            <p>Join our community of empowered women</p>
            <div class="buttons">
                <a href="/apply"><button class="btn btn-primary">Apply Now</button></a>
                <a href="/programs"><button class="btn btn-secondary">View Programs</button></a>
            </div>
        </div>
        <div class="hero-image">
            <img src="https://via.placeholder.com/500x400?text=Admission+Illustration" alt="Admission illustration">
        </div>
    </section>

    <!-- Admission Schedule -->
    <section class="admission-section">
        <div class="container">
            <h2>Admission Schedule</h2>
            @if($schedule)
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">{{ $schedule->title }}</h4>
                </div>
                <div class="card-body">
                    <p>{{ nl2br($schedule->content) }}</p>
                </div>
            </div>
            @endif
        </div>
    </section>

    <!-- Eligibility Criteria -->
    <section class="admission-section">
        <div class="container">
            <h2>Eligibility Criteria</h2>
            @if($eligibility)
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">{{ $eligibility->title }}</h4>
                </div>
                <div class="card-body">
                    <p>{{ nl2br($eligibility->content) }}</p>
                </div>
            </div>
            @endif
        </div>
    </section>

    <!-- Required Documents -->
    <section class="admission-section">
        <div class="container">
            <h2>Required Documents</h2>
            @if($documents)
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">{{ $documents->title }}</h4>
                </div>
                <div class="card-body">
                    <p>{{ nl2br($documents->content) }}</p>
                </div>
            </div>
            @endif
        </div>
    </section>

    <!-- Admission Process -->
    <section class="process-steps">
        <div class="container">
            <h2>Admission Process</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="step">
                        <div class="step-number">1</div>
                        <h5>Submit Application</h5>
                        <p>Complete the online application form with all required information</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step">
                        <div class="step-number">2</div>
                        <h5>Document Verification</h5>
                        <p>Submit all required documents for verification</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step">
                        <div class="step-number">3</div>
                        <h5>Entrance Test</h5>
                        <p>Take the entrance examination on the scheduled date</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="step">
                        <div class="step-number">4</div>
                        <h5>Interview</h5>
                        <p>Attend the personal interview with faculty members</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step">
                        <div class="step-number">5</div>
                        <h5>Result Announcement</h5>
                        <p>Check results and merit list on the website</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="step">
                        <div class="step-number">6</div>
                        <h5>Fee Payment</h5>
                        <p>Complete admission formalities and fee payment</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Admission Guidelines -->
    <section class="admission-section">
        <div class="container">
            <h2>Admission Guidelines</h2>
            @if($guidelines)
            <div class="card mb-4">
                <div class="card-header bg-primary text-white">
                    <h4 class="mb-0">{{ $guidelines->title }}</h4>
                </div>
                <div class="card-body">
                    <p>{{ nl2br($guidelines->content) }}</p>
                </div>
            </div>
            @endif
        </div>
    </section>

    <!-- Important Notes -->
    <section class="notes">
        <div class="container">
            <h2>Important Notes</h2>
            <div class="notes-content">
                <ul>
                    <li>All applications must be submitted online through the official website</li>
                    <li>Incomplete applications will not be considered</li>
                    <li>Admission is based on merit and entrance test performance</li>
                    <li>Original documents must be presented at the time of admission</li>
                    <li>Application fees are non-refundable</li>
                    <li>For any queries, contact the admission office</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h3>About College</h3>
                    <p>Empowering women through quality education...</p>
                </div>
                <div>
                    <h3>Important Links</h3>
                    <a href="/">Home</a><br>
                    <a href="/programs">Programs</a><br>
                    <a href="/admission">Admissions</a>
                </div>
                <div>
                    <h3>Contact Info</h3>
                    <p>123 College St, City<br>Phone: (123) 456-7890<br>Email: info@college.edu</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
