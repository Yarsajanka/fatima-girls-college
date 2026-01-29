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

            <!-- Principal's Message -->
            <div class="about-section">
                <h2>Principal's Message</h2>
                <div class="principal-message">
                    <div class="message-content">
                        <h3>Fatima Girls College</h3>
                        <p>At Fatima Girls College, we are committed to shaping skilled, confident, and ethically grounded young women. Our highly qualified faculty guide students through an education that integrates Islamic values, scientific knowledge, and practical skills.</p>
                        <p>We emphasize critical thinking, innovation, and global awareness, enhanced through workshops, seminars, and conferences, providing students with exposure to real-world challenges and emerging ideas. Our goal is to prepare young women for academic excellence, leadership, and meaningful contributions in a rapidly evolving 21st-century world.</p>
                        <div class="principal-signature">
                            <strong>Principal</strong><br>
                            Fatima Girls College
                        </div>
                    </div>
                </div>
            </div>

            <!-- Vision -->
            <div class="about-section">
                <h2>Vision</h2>
                <p>Empowering individuals to unlock their potential.</p>
                <p>Where ambition are formed and goals accomplished according to 21st-century skills standards, enriched with islamic values</p>
            </div>

            <!-- Why Choose Our College -->
            <div class="about-section">
                <h2>WHY CHOOSE OUR COLLEGE?</h2>
                <p>Because we don't just prepare you for exams - we prepare you for life. Our college provides the exact environment described above. We offer:</p>
                <ul>
                    <li>Mentorship that matters</li>
                    <li>Faculty that inspires</li>
                    <li>A culture of excellence and innovation</li>
                    <li>Reliable, relevant, and updated academic material</li>
                </ul>
                <p>This is not just a college-it's your launching pad to a bright future. The opportunity is here. The time is now. The journey begins with us</p>
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
