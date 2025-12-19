<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programs - Women's College</title>
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

    <!-- Page Content -->
    <section class="page-content">
        <div class="container">
            <h1>Our Programs</h1>

            <div class="programs-list">
                @forelse($programs ?? [] as $program)
                <div class="program-detail">
                    <h3>{{ $program->name }}</h3>
                    <p><strong>Duration:</strong> {{ $program->duration_years }} Year{{ $program->duration_years > 1 ? 's' : '' }}</p>
                    <p><strong>Eligibility:</strong> {{ $program->eligibility_criteria ?? 'High School Diploma' }}</p>
                    <p><strong>Fee:</strong> {{ $program->fee_per_year ? 'PKR ' . number_format($program->fee_per_year) . '/year' : 'Contact for details' }}</p>
                    <p><strong>Seats:</strong> {{ $program->capacity ?? 'Limited' }}</p>
                    <p>{{ $program->description ?? 'A comprehensive program designed to prepare students for successful careers.' }}</p>
                    <a href="/apply"><button class="btn btn-primary">Apply Now</button></a>
                </div>
                @empty
                <div class="program-detail">
                    <h3>F.A (Faculty of Arts)</h3>
                    <p><strong>Duration:</strong> 2 Years</p>
                    <p><strong>Eligibility:</strong> Matriculation (45% min)</p>
                    <p><strong>Fee:</strong> PKR 25,000/year</p>
                    <p><strong>Seats:</strong> 100</p>
                    <p>A comprehensive program covering humanities and social sciences, preparing students for diverse career paths.</p>
                    <a href="/apply"><button class="btn btn-primary">Apply Now</button></a>
                </div>
                <div class="program-detail">
                    <h3>F.Sc Pre-Medical</h3>
                    <p><strong>Duration:</strong> 2 Years</p>
                    <p><strong>Eligibility:</strong> Matric Science (60% min)</p>
                    <p><strong>Fee:</strong> PKR 35,000/year</p>
                    <p><strong>Seats:</strong> 80</p>
                    <p>Focused on biology, chemistry, and physics, preparing students for medical and healthcare careers.</p>
                    <a href="/apply"><button class="btn btn-primary">Apply Now</button></a>
                </div>
                <div class="program-detail">
                    <h3>F.Sc Pre-Engineering</h3>
                    <p><strong>Duration:</strong> 2 Years</p>
                    <p><strong>Eligibility:</strong> Matric Science (60% min)</p>
                    <p><strong>Fee:</strong> PKR 35,000/year</p>
                    <p><strong>Seats:</strong> 80</p>
                    <p>Emphasis on mathematics, physics, and chemistry, preparing students for engineering disciplines.</p>
                    <a href="/apply"><button class="btn btn-primary">Apply Now</button></a>
                </div>
                <div class="program-detail">
                    <h3>ICS (Computer Science)</h3>
                    <p><strong>Duration:</strong> 2 Years</p>
                    <p><strong>Eligibility:</strong> Matric Science (55% min)</p>
                    <p><strong>Fee:</strong> PKR 30,000/year</p>
                    <p><strong>Seats:</strong> 60</p>
                    <p>Combines computer science with mathematics and physics, preparing students for IT careers.</p>
                    <a href="/apply"><button class="btn btn-primary">Apply Now</button></a>
                </div>
                <div class="program-detail">
                    <h3>ICOM (Commerce)</h3>
                    <p><strong>Duration:</strong> 2 Years</p>
                    <p><strong>Eligibility:</strong> Matric (50% min)</p>
                    <p><strong>Fee:</strong> PKR 28,000/year</p>
                    <p><strong>Seats:</strong> 70</p>
                    <p>Focuses on business, accounting, and economics, preparing students for commerce and finance careers.</p>
                    <a href="/apply"><button class="btn btn-primary">Apply Now</button></a>
                </div>
                <div class="program-detail">
                    <h3>BS Computer Science</h3>
                    <p><strong>Duration:</strong> 4 Years</p>
                    <p><strong>Eligibility:</strong> Intermediate (50% min)</p>
                    <p><strong>Fee:</strong> PKR 45,000/year</p>
                    <p><strong>Seats:</strong> 50</p>
                    <p>Comprehensive 4-year program covering software development, algorithms, and modern computing technologies.</p>
                    <a href="/apply"><button class="btn btn-primary">Apply Now</button></a>
                </div>
                @endforelse
            </div>

            <div class="text-center" style="margin-top: 48px; padding: 32px; background: #f5f5f5; border-radius: 16px;">
                <h3>Need Help Choosing a Program?</h3>
                <p>Contact our admission office for personalized guidance and career counseling.</p>
                <a href="/contact"><button class="btn btn-primary">Contact Us</button></a>
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
