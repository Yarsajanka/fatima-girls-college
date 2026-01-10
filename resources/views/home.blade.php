<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fatima Girls College Amin Pur - Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    @vite(['resources/css/home.css'])
</head>
<body>
    <!-- Header/Navbar -->
    <header class="header">
        <div class="logo">
            <img src="{{ asset('images/college_logo.png') }}" alt="Fatima Girls College Amin Pur Logo" height="40">
        </div>
        <div>
  <p style="color: pink; font-weight: bold; font-style: italic;">
    Fatima Girls College Amin Pur
  </p>
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

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1 class="college-name">Fatima Girls College Amin Pur</h1>
            <h4>Empowering Women Through Education</h4>
            <p>Admissions Open for 2025</p>
            <div class="buttons">
                <a href="/apply"><button class="btn btn-primary">Apply Now</button></a>
                <a href="/programs"><button class="btn btn-secondary">View Programs</button></a>
            </div>
        </div>
        <div class="hero-image">
            <img src="{{ asset('images/studentillustrate.jpeg') }}" alt="Illustration of female students">
        </div>
    </section>

    <!-- Quick Stats -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-card">
                    <div>🏆</div>
                    <h3>20+ Years</h3>
                    <p>Of Excellence</p>
                </div>
                <div class="stat-card">
                    <div>👩‍🎓</div>
                    <h3>500+ Graduates</h3>
                    <p>Empowered Women</p>
                </div>
                <div class="stat-card">
                    <div>📚</div>
                    <h3>10 Programs</h3>
                    <p>Tailored for Success</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="programs">
        <div class="container">
            <h2>Programs We Offer</h2>
            <div class="programs-grid">
                @forelse($programs ?? [] as $program)
                <div class="program-card">
                    <h3>{{ $program->name }}</h3>
                    <p>Duration: {{ $program->duration_years }} Year{{ $program->duration_years > 1 ? 's' : '' }}<br>Eligibility: {{ $program->eligibility_criteria ?? 'High School Diploma' }}</p>
                    <a href="/programs"><button class="btn btn-outline">View Details</button></a>
                </div>
                @empty
                <div class="program-card">
                    <h3>Computer Science</h3>
                    <p>Duration: 4 Years<br>Eligibility: High School Diploma</p>
                    <a href="/programs"><button class="btn btn-outline">View Details</button></a>
                </div>
                <div class="program-card">
                    <h3>Business Admin</h3>
                    <p>Duration: 3 Years<br>Eligibility: High School Diploma</p>
                    <a href="/programs"><button class="btn btn-outline">View Details</button></a>
                </div>
                <div class="program-card">
                    <h3>Engineering</h3>
                    <p>Duration: 4 Years<br>Eligibility: High School Diploma</p>
                    <a href="/programs"><button class="btn btn-outline">View Details</button></a>
                </div>
                <div class="program-card">
                    <h3>Arts & Humanities</h3>
                    <p>Duration: 3 Years<br>Eligibility: High School Diploma</p>
                    <a href="/programs"><button class="btn btn-outline">View Details</button></a>
                </div>
                <div class="program-card">
                    <h3>Health Sciences</h3>
                    <p>Duration: 4 Years<br>Eligibility: High School Diploma</p>
                    <a href="/programs"><button class="btn btn-outline">View Details</button></a>
                </div>
                <div class="program-card">
                    <h3>Education</h3>
                    <p>Duration: 2 Years<br>Eligibility: Bachelor's Degree</p>
                    <a href="/programs"><button class="btn btn-outline">View Details</button></a>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Announcements -->
    <section class="announcements">
        <div class="container">
            <h2>Latest Announcements</h2>
            <div class="announcements-list">
                @forelse($announcements ?? [] as $announcement)
                <div class="announcement-card">
                    <div class="date-badge">{{ $announcement->published_at ? \Carbon\Carbon::parse($announcement->published_at)->format('M d') : 'Recent' }}</div>
                    <h3>{{ $announcement->title }}</h3>
                    <p>{{ Str::limit($announcement->content, 100) }}</p>
                    <a href="#">Read More</a>
                </div>
                @empty
                <div class="announcement-card">
                    <div class="date-badge">Oct 15</div>
                    <h3>Scholarship Opportunities</h3>
                    <p>New scholarships available for 2025 admissions...</p>
                    <a href="#">Read More</a>
                </div>
                <div class="announcement-card">
                    <div class="date-badge">Oct 10</div>
                    <h3>Campus Events</h3>
                    <p>Join our upcoming women's empowerment seminar...</p>
                    <a href="#">Read More</a>
                </div>
                <div class="announcement-card">
                    <div class="date-badge">Oct 5</div>
                    <h3>Application Deadline</h3>
                    <p>Early bird applications close soon...</p>
                    <a href="#">Read More</a>
                </div>
                <div class="announcement-card">
                    <div class="date-badge">Sep 30</div>
                    <h3>Alumni Spotlight</h3>
                    <p>Meet our featured graduate...</p>
                    <a href="#">Read More</a>
                </div>
                @endforelse
            </div>
        </div>
    </section>

    <!-- Why Choose Us -->
    <section class="why-choose">
        <div class="container" style="display: flex; gap: 48px;">
            <div class="why-text">
                <h2>Why Choose Us?</h2>
                <ul>
                    <li>✅ Supportive Community</li>
                    <li>✅ Expert Faculty</li>
                    <li>✅ Modern Facilities</li>
                    <li>✅ Career Support</li>
                </ul>
            </div>
            <div class="why-image">
                <img src="{{ asset('images/campusiamge.jpeg') }}" alt="Fatima Girls College Amin Pur Campus">
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section class="gallery">
        <div class="container">
            <h2>Gallery</h2>
            <div class="gallery-grid">
                @forelse($gallery ?? [] as $image)
                <img src="{{ asset('storage/' . $image->image_path) }}" alt="{{ $image->title }}">
                @empty
                <img src="https://via.placeholder.com/300x200?text=Image+1" alt="Gallery image 1">
                <img src="https://via.placeholder.com/300x200?text=Image+2" alt="Gallery image 2">
                <img src="https://via.placeholder.com/300x200?text=Image+3" alt="Gallery image 3">
                <img src="https://via.placeholder.com/300x200?text=Image+4" alt="Gallery image 4">
                <img src="https://via.placeholder.com/300x200?text=Image+5" alt="Gallery image 5">
                <img src="https://via.placeholder.com/300x200?text=Image+6" alt="Gallery image 6">
                @endforelse
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
