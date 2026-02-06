<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Fatima Girls College Amin Pur</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&family=Inter:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"> <!-- For icons -->
    <style>
        /* Include the CSS here for completeness */
        /* Header/Navbar */
        .header {
            height: 80px;
            background: #FFFFFF;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 24px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .logo img {
            height: 40px;
            width: auto;
            transition: opacity 0.3s;
        }
        .logo img:hover {
            opacity: 0.8;
        }
        .menu {
            display: flex;
            gap: 24px;
        }
        .menu a {
            text-decoration: none;
            color: #212121;
            font-weight: 600;
        }
        .buttons {
            display: flex;
            gap: 12px;
        }
        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-weight: bold;
            cursor: pointer;
            transition: opacity 0.3s;
        }
        .btn-primary {
            background: #E91E63;
            color: white;
        }
        .btn-secondary {
            background: #9C27B0;
            color: white;
        }
        .btn:hover {
            opacity: 0.8;
        }

        /* Footer */
        .footer {
            background: #212121;
            color: white;
            padding: 48px 0;
        }
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }
        .footer a {
            color: white;
            text-decoration: none;
        }

        /* Container */
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(45deg, #E91E63, #9C27B0);
            color: white;
            padding: 80px 24px;
            text-align: center;
        }
        .hero h1 {
            font-size: 48px;
            font-weight: 700;
            margin-bottom: 16px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        .hero h3 {
            font-size: 28px;
            margin-bottom: 16px;
        }
        .hero p {
            font-size: 18px;
            max-width: 600px;
            margin: 0 auto;
        }

        /* Contact Info Section */
        .contact-info {
            padding: 60px 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        }
        .contact-info h2 {
            text-align: center;
            color: #2c3e50;
            font-size: 2.5rem;
            margin-bottom: 40px;
        }
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 30px;
        }
        .contact-card {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            text-align: center;
            transition: all 0.4s ease;
            border: 1px solid rgba(255,255,255,0.2);
        }
        .contact-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 16px 48px rgba(0,0,0,0.2);
            background: linear-gradient(135deg, #ffffff 0%, #f0f2f5 100%);
        }
        .contact-icon {
            font-size: 3.5rem;
            margin-bottom: 20px;
            display: block;
            transition: transform 0.3s ease;
        }
        .contact-card:hover .contact-icon {
            transform: scale(1.1);
        }
        .contact-card h3 {
            color: #2c3e50;
            margin-bottom: 15px;
            font-size: 1.4rem;
            font-weight: 700;
        }
        .contact-card p {
            color: #5a6c7d;
            line-height: 1.7;
            font-size: 1rem;
        }

        /* Contact Form & Map Section */
        .contact-section {
            padding: 60px 0;
            background: #ffffff;
        }
        .contact-layout {
            display: flex;
            flex-direction: column;
            gap: 50px;
        }
        .contact-form, .map-section {
            background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%);
            padding: 40px;
            border-radius: 16px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.1);
            border: 1px solid rgba(255,255,255,0.2);
        }
        .contact-form h2, .map-section h2 {
            color: #2c3e50;
            margin-bottom: 30px;
            font-size: 2.2rem;
            font-weight: 700;
            text-align: center;
        }
        .form-group {
            margin-bottom: 25px;
        }
        .form-group label {
            display: block;
            margin-bottom: 10px;
            color: #34495e;
            font-weight: 600;
            font-size: 1.1rem;
        }
        .form-control {
            width: 100%;
            padding: 15px 18px;
            border: 2px solid #e1e5e9;
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background: #ffffff;
            box-shadow: inset 0 2px 4px rgba(0,0,0,0.05);
        }
        .form-control:focus {
            outline: none;
            border-color: #E91E63;
            box-shadow: 0 0 0 3px rgba(233, 30, 99, 0.1), inset 0 2px 4px rgba(0,0,0,0.05);
            transform: translateY(-2px);
        }
        .form-control:hover {
            border-color: #bdc3c7;
        }
        .btn-primary {
            background: linear-gradient(135deg, #E91E63 0%, #C2185B 100%);
            color: white;
            padding: 15px 30px;
            border: none;
            border-radius: 12px;
            font-size: 1.1rem;
            font-weight: 700;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(233, 30, 99, 0.3);
            width: 100%;
            margin-top: 10px;
        }
        .btn-primary:hover {
            background: linear-gradient(135deg, #C2185B 0%, #AD1457 100%);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(233, 30, 99, 0.4);
        }
        .alert {
            padding: 15px 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            font-weight: 600;
        }
        .alert-success {
            background: linear-gradient(135deg, #d4edda 0%, #c3e6cb 100%);
            color: #155724;
            border: 1px solid #c3e6cb;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .map-container {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        .location-details h3 {
            color: #333;
            margin-bottom: 15px;
        }
        .location-details ul {
            list-style: none;
            padding: 0;
        }
        .location-details li {
            padding: 8px 0;
            color: #666;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                height: auto;
                padding: 12px 24px;
            }
            .menu {
                flex-direction: column;
                gap: 12px;
                margin: 12px 0;
            }
            .buttons {
                margin-top: 12px;
            }
            .footer-grid {
                grid-template-columns: 1fr;
            }
            .hero {
                padding: 40px 24px;
            }
            .hero h1 {
                font-size: 36px;
            }
            .hero h3 {
                font-size: 24px;
            }
            .contact-grid {
                grid-template-columns: 1fr;
            }
            .contact-layout {
                gap: 40px;
            }
            .contact-form, .map-section {
                padding: 30px 20px;
            }
            .form-control {
                padding: 12px 15px;
            }
            .btn-primary {
                padding: 12px 25px;
                font-size: 1rem;
            }
        }
    </style>
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

    <!-- Hero Section -->
    <section class="hero">
        <h1>Fatima Girls College Amin Pur</h1>
        <h3>Get In Touch</h3>
        <p>We'd love to hear from you. Reach out to us with any questions or inquiries about our programs and admissions.</p>
    </section>

    <!-- Contact Information -->
    <section class="contact-info">
        <div class="container">
            <h2>Contact Information</h2>
            <div class="contact-grid">
                <div class="contact-card">
                    <i class="fas fa-map-marker-alt contact-icon" style="color: #E91E63;"></i>
                    <h3>Address</h3>
                    <p>Fatima Girls College<br>Main Road, City<br>Pakistan</p>
                </div>
                <div class="contact-card">
                    <i class="fas fa-phone contact-icon" style="color: #E91E63;"></i>
                    <h3>Phone</h3>
                    <p>+92-123-4567890<br>+92-123-4567891</p>
                </div>
                <div class="contact-card">
                    <i class="fas fa-envelope contact-icon" style="color: #E91E63;"></i>
                    <h3>Email</h3>
                    <p>info@fatimagirlscollege.edu.pk<br>admissions@fatimagirlscollege.edu.pk</p>
                </div>
                <div class="contact-card">
                    <i class="fas fa-clock contact-icon" style="color: #E91E63;"></i>
                    <h3>Office Hours</h3>
                    <p>Monday - Friday: 9:00 AM - 5:00 PM<br>Saturday: 9:00 AM - 1:00 PM</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Map -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-layout">
                <!-- Contact Form -->
                <div class="contact-form">
                    <h2>Send us a Message</h2>
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form action="{{ route('contact.send') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Full Name *</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address *</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject *</label>
                            <input type="text" id="subject" name="subject" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>

                <!-- Map Section -->
                <div class="map-section">
                    <h2>Find Us</h2>
                    <div class="map-container">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.8!2d67.001!3d24.861!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2sFatima+Girls+College+Amin+Pur!5e0!3m2!1sen!2s!4v1700000000000!5m2!1sen!2s"
                            width="100%"
                            height="300"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy">
                        </iframe>
                    </div>
                    <div class="location-details">
                        <h3>Our Location</h3>
                        <p>Fatima Girls College is located in the heart of the city, easily accessible by public transport and private vehicles.</p>
                        <ul>
                            <li><i class="fas fa-car" style="color: #E91E63;"></i> Parking available on campus</li>
                            <li><i class="fas fa-bus" style="color: #E91E63;"></i> Bus stop nearby</li>
                            <li><i class="fas fa-subway" style="color: #E91E63;"></i> Metro station within 1km</li>
                        </ul>
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