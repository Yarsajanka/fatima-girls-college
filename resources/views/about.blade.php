<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Fatima Girls College Amin Pur</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    @vite(['resources/css/home.css'])
</head>
<body>
    <!-- Header/Navbar -->
    <header class="header">
        <div class="logo">
            <img src="{{ asset('images/college_logo.png') }}" alt="Fatima Girls College Amin Pur Logo" height="40">
        </div>
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

    <!-- Page Content -->
    <section class="page-content">
        <div class="container">
            <h1>About Us</h1>

            @php
                $vision = \App\Models\Content::where('type', 'vision')->where('is_active', true)->first();
                $mission = \App\Models\Content::where('type', 'mission')->where('is_active', true)->first();
                $principalMessage = \App\Models\Content::where('type', 'principal_message')->where('is_active', true)->first();
                $history = \App\Models\Content::where('type', 'history')->where('is_active', true)->first();
            @endphp

            @if($vision)
            <div class="about-section">
                <h2>{{ $vision->title }}</h2>
                <p>{{ $vision->content }}</p>
            </div>
            @endif

            @if($mission)
            <div class="about-section">
                <h2>{{ $mission->title }}</h2>
                <p>{{ $mission->content }}</p>
            </div>
            @endif

            @if($principalMessage)
            <div class="about-section">
                <h2>{{ $principalMessage->title }}</h2>
                <div class="principal-message">
                    <img src="{{ $principalMessage->image_path ? asset('storage/' . $principalMessage->image_path) : 'https://via.placeholder.com/200x250?text=Principal' }}" alt="Principal">
                    <p>{{ $principalMessage->content }}</p>
                </div>
            </div>
            @endif

            @if($history)
            <div class="about-section">
                <h2>{{ $history->title }}</h2>
                <p>{{ nl2br($history->content) }}</p>
            </div>
            @endif

            <div class="about-section">
                <h2>Why Choose Us?</h2>
                <div class="why-choose-grid">
                    <div class="why-item">
                        <h3>Experienced Faculty</h3>
                        <p>Dedicated and qualified teachers committed to student success.</p>
                    </div>
                    <div class="why-item">
                        <h3>Modern Facilities</h3>
                        <p>State-of-the-art classrooms, labs, and learning resources.</p>
                    </div>
                    <div class="why-item">
                        <h3>Holistic Development</h3>
                        <p>Sports, arts, and extracurricular activities for complete growth.</p>
                    </div>
                    <div class="why-item">
                        <h3>Career Support</h3>
                        <p>Counseling and guidance for future career paths.</p>
                    </div>
                    <div class="why-item">
                        <h3>Safe Environment</h3>
                        <p>Secure and supportive campus for focused learning.</p>
                    </div>
                    <div class="why-item">
                        <h3>Strong Community</h3>
                        <p>Active alumni network and community engagement.</p>
                    </div>
                </div>
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
