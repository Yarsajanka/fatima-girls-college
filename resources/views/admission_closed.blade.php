<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admissions Closed - Fatima Girls College Amin Pur</title>
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
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="college-name">Fatima Girls College Amin Pur</h1>
            <h3>Admissions Currently Closed</h3>
            <p>We apologize, but online applications are temporarily closed. Please check back later for updates on when admissions will reopen.</p>
            <div class="buttons">
                <a href="/admission"><button class="btn btn-secondary">View Admission Information</button></a>
                <a href="/"><button class="btn btn-primary">Back to Home</button></a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-grid">
                <div>
                    <h3>About College</h3>
                    <p>Empowering individuals to unlock their potential. Where ambitions are formed and goals accomplished according to 21st-century skills standards, enriched with Islamic values.</p>
                </div>
                <div>
                    <h3>Important Links</h3>
                    <a href="/">Home</a><br>
                    <a href="/programs">Programs</a><br>
                    <a href="/admission">Admissions</a>
                </div>
                <div>
                    <h3>Contact Info</h3>
                    <p>Opposite to Molana Muhammad Zakir Degree College Aminpur Bangla<br>Phone: 03214251905<br>Email: fgcollege86@gmail.com</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
