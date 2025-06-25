<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Integrated Civil Services Coaching - SPM IAS Academy x Royal Global University</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        .header {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            padding: 1rem 0;
            position: sticky;
            top: 0;
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }

        .logo-section {
            display: flex;
            align-items: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .logo-icon {
            width: 40px;
            height: 40px;
            background: #ffd700;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #1e3c72;
        }

        .partnership {
            font-size: 0.9rem;
            opacity: 0.9;
        }

        .nav-links {
            display: flex;
            gap: 30px;
            list-style: none;
        }

        .nav-links a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .nav-links a:hover {
            color: #ffd700;
        }

        .cta-btn {
            background: #ffd700;
            color: #1e3c72;
            padding: 10px 20px;
            border: none;
            border-radius: 25px;
            font-weight: bold;
            cursor: pointer;
            transition: transform 0.3s;
        }

        .cta-btn:hover {
            transform: translateY(-2px);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(30, 60, 114, 0.9), rgba(42, 82, 152, 0.9)), url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 600"><rect fill="%23f0f8ff" width="1200" height="600"/><g fill="%23e6f3ff"><circle cx="100" cy="100" r="50"/><circle cx="300" cy="200" r="30"/><circle cx="500" cy="150" r="40"/><circle cx="700" cy="300" r="35"/><circle cx="900" cy="180" r="45"/><circle cx="1100" cy="250" r="25"/></g></svg>');
            color: white;
            padding: 80px 0;
            text-align: center;
            background-size: cover;
            background-position: center;
        }

        .hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
        }

        .hero .subtitle {
            font-size: 1.3rem;
            margin-bottom: 30px;
            opacity: 0.9;
        }

        .hero-features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin: 50px 0;
        }

        .feature-card {
            background: rgba(255, 255, 255, 0.1);
            padding: 30px;
            border-radius: 15px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .feature-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .enrollment-form {
            background: white;
            color: #333;
            padding: 40px;
            border-radius: 20px;
            max-width: 500px;
            margin: 0 auto;
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group input, .form-group select {
            width: 100%;
            padding: 12px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-size: 1rem;
        }

        .form-group input:focus, .form-group select:focus {
            border-color: #2a5298;
            outline: none;
        }

        /* Stats Section */
        .stats {
            padding: 60px 0;
            background: #f8faff;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 40px;
            text-align: center;
        }

        .stat-item {
            padding: 30px;
        }

        .stat-number {
            font-size: 3rem;
            font-weight: bold;
            color: #2a5298;
            margin-bottom: 10px;
        }

        /* Course Details */
        .courses {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #1e3c72;
        }

        .section-subtitle {
            text-align: center;
            font-size: 1.2rem;
            margin-bottom: 50px;
            color: #666;
        }

        .course-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }

        .course-card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }

        .course-card:hover {
            transform: translateY(-5px);
        }

        .course-header {
            background: linear-gradient(135deg, #2a5298, #1e3c72);
            color: white;
            padding: 30px;
            text-align: center;
        }

        .course-body {
            padding: 30px;
        }

        .course-features {
            list-style: none;
            margin: 20px 0;
        }

        .course-features li {
            padding: 8px 0;
            border-bottom: 1px solid #f0f0f0;
        }

        .course-features li:before {
            content: "✓";
            color: #28a745;
            font-weight: bold;
            margin-right: 10px;
        }

        /* Faculty Section */
        .faculty {
            padding: 80px 0;
            background: #f8faff;
        }

        .faculty-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 40px;
        }

        .faculty-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        .faculty-avatar {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            background: linear-gradient(135deg, #2a5298, #1e3c72);
            margin: 0 auto 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            font-weight: bold;
        }

        /* Testimonials */
        .testimonials {
            padding: 80px 0;
        }

        .testimonial-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }

        .testimonial-card {
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            border-left: 5px solid #ffd700;
        }

        .testimonial-text {
            font-style: italic;
            margin-bottom: 20px;
            font-size: 1.1rem;
        }

        .testimonial-author {
            font-weight: bold;
            color: #2a5298;
        }

        /* Footer */
        .footer {
            background: #1e3c72;
            color: white;
            padding: 60px 0 30px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 40px;
            margin-bottom: 40px;
        }

        .footer-section h3 {
            margin-bottom: 20px;
            color: #ffd700;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 10px;
        }

        .footer-section ul li a {
            color: white;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: #ffd700;
        }

        .footer-bottom {
            border-top: 1px solid rgba(255,255,255,0.2);
            padding-top: 30px;
            text-align: center;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav {
                flex-direction: column;
                gap: 20px;
            }

            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
                gap: 15px;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero .subtitle {
                font-size: 1.1rem;
            }

            .hero-features {
                grid-template-columns: 1fr;
            }

            .enrollment-form {
                margin: 20px;
                padding: 30px 20px;
            }

            .course-grid {
                grid-template-columns: 1fr;
            }

            .faculty-grid {
                grid-template-columns: 1fr;
            }

            .testimonial-grid {
                grid-template-columns: 1fr;
            }
        }

        /* Animations */
        .fade-in {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeIn 0.6s forwards;
        }

        @keyframes fadeIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .floating {
            animation: floating 3s ease-in-out infinite;
        }

        @keyframes floating {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="container">
            <nav class="nav">
                <div class="logo-section">
                    <div class="logo">
                        <div class="logo-icon">RGU</div>
                        <div>
                            <div style="font-weight: bold; font-size: 1.2rem;">Royal Global University</div>
                            <div class="partnership">in association with SPM IAS Academy</div>
                        </div>
                    </div>
                </div>
                <ul class="nav-links">
                    <li><a href="#courses">Courses</a></li>
                    <li><a href="#faculty">Faculty</a></li>
                    <li><a href="#testimonials">Success Stories</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <button class="cta-btn">Enroll Now</button>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h1 class="fade-in">Integrated Civil Services Coaching</h1>
            <p class="subtitle fade-in">Master UPSC & APSC while earning your Graduation degree</p>
            
            <div class="hero-features">
                <div class="feature-card fade-in floating">
                    <div class="feature-icon">🎓</div>
                    <h3>Dual Advantage</h3>
                    <p>Complete your graduation while preparing for civil services</p>
                </div>
                <div class="feature-card fade-in floating">
                    <div class="feature-icon">👨‍🏫</div>
                    <h3>Expert Faculty</h3>
                    <p>Learn from experienced civil servants and academic experts</p>
                </div>
                <div class="feature-card fade-in floating">
                    <div class="feature-icon">📱</div>
                    <h3>Hybrid Learning</h3>
                    <p>Flexible online and offline classes with digital resources</p>
                </div>
            </div>

            <div class="enrollment-form fade-in">
                <h3 style="margin-bottom: 20px; color: #1e3c72;">Start Your Journey Today</h3>
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="Full Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Email Address" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <select required>
                            <option value="">Select Course Interest</option>
                            <option value="upsc">UPSC Preparation</option>
                            <option value="apsc">APSC Preparation</option>
                            <option value="both">UPSC + APSC</option>
                        </select>
                    </div>
                    <button type="submit" class="cta-btn" style="width: 100%; padding: 15px; font-size: 1.1rem;">Get Free Counseling</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stats-grid">
                <div class="stat-item fade-in">
                    <div class="stat-number">500+</div>
                    <div>Successful Candidates</div>
                </div>
                <div class="stat-item fade-in">
                    <div class="stat-number">15+</div>
                    <div>Years of Excellence</div>
                </div>
                <div class="stat-item fade-in">
                    <div class="stat-number">95%</div>
                    <div>Success Rate</div>
                </div>
                <div class="stat-item fade-in">
                    <div class="stat-number">50+</div>
                    <div>Expert Faculty</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Course Details -->
    <section class="courses" id="courses">
        <div class="container">
            <h2 class="section-title">Our Integrated Programs</h2>
            <p class="section-subtitle">Choose the program that fits your career aspirations</p>
            
            <div class="course-grid">
                <div class="course-card fade-in">
                    <div class="course-header">
                        <h3>UPSC + Graduation</h3>
                        <div style="font-size: 2rem; margin: 10px 0;">₹2,50,000</div>
                        <div>3 Years Program</div>
                    </div>
                    <div class="course-body">
                        <ul class="course-features">
                            <li>Complete UPSC Syllabus Coverage</li>
                            <li>Bachelor's Degree (Arts/Commerce)</li>
                            <li>Daily Test Series</li>
                            <li>Interview Preparation</li>
                            <li>Current Affairs Updates</li>
                            <li>Personal Mentoring</li>
                            <li>Study Materials Included</li>
                        </ul>
                        <button class="cta-btn" style="width: 100%; padding: 12px;">Choose This Program</button>
                    </div>
                </div>

                <div class="course-card fade-in">
                    <div class="course-header" style="background: linear-gradient(135deg, #ffd700, #ffed4e);">
                        <h3 style="color: #1e3c72;">APSC + Graduation</h3>
                        <div style="font-size: 2rem; margin: 10px 0; color: #1e3c72;">₹1,80,000</div>
                        <div style="color: #1e3c72;">3 Years Program</div>
                    </div>
                    <div class="course-body">
                        <ul class="course-features">
                            <li>Complete APSC Syllabus</li>
                            <li>Bachelor's Degree (Arts/Commerce)</li>
                            <li>Assamese Language Support</li>
                            <li>State-specific Current Affairs</li>
                            <li>Mock Interviews</li>
                            <li>Regional Faculty Expertise</li>
                            <li>Comprehensive Study Materials</li>
                        </ul>
                        <button class="cta-btn" style="width: 100%; padding: 12px;">Choose This Program</button>
                    </div>
                </div>

                <div class="course-card fade-in">
                    <div class="course-header">
                        <h3>UPSC + APSC + Graduation</h3>
                        <div style="font-size: 2rem; margin: 10px 0;">₹3,20,000</div>
                        <div>4 Years Program</div>
                    </div>
                    <div class="course-body">
                        <ul class="course-features">
                            <li>Dual Civil Services Preparation</li>
                            <li>Bachelor's Degree</li>
                            <li>Maximum Success Opportunities</li>
                            <li>Comprehensive Test Series</li>
                            <li>Expert Faculty for Both Exams</li>
                            <li>Interview Training</li>
                            <li>Lifetime Support</li>
                        </ul>
                        <button class="cta-btn" style="width: 100%; padding: 12px;">Choose This Program</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Faculty Section -->
    <section class="faculty" id="faculty">
        <div class="container">
            <h2 class="section-title">Meet Our Expert Faculty</h2>
            <p class="section-subtitle">Learn from the best minds in civil services preparation</p>
            
            <div class="faculty-grid">
                <div class="faculty-card fade-in">
                    <div class="faculty-avatar">Dr. SK</div>
                    <h3>Dr. Suresh Kumar</h3>
                    <p style="color: #666; margin-bottom: 15px;">Former IAS Officer & Director</p>
                    <p>25+ years in civil services with expertise in Public Administration and General Studies</p>
                </div>

                <div class="faculty-card fade-in">
                    <div class="faculty-avatar">Prof. MS</div>
                    <h3>Prof. Meera Sharma</h3>
                    <p style="color: #666; margin-bottom: 15px;">Political Science Expert</p>
                    <p>PhD in Political Science, specializes in Indian Polity and International Relations</p>
                </div>

                <div class="faculty-card fade-in">
                    <div class="faculty-avatar">Dr. RD</div>
                    <h3>Dr. Rajesh Deka</h3>
                    <p style="color: #666; margin-bottom: 15px;">Economics & Current Affairs</p>
                    <p>Former RBI Officer with expertise in Indian Economy and Banking sector</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials" id="testimonials">
        <div class="container">
            <h2 class="section-title">Success Stories</h2>
            <p class="section-subtitle">Hear from our successful students</p>
            
            <div class="testimonial-grid">
                <div class="testimonial-card fade-in">
                    <div class="testimonial-text">
                        "The integrated program helped me save crucial years. I cleared UPSC in my first attempt while completing my graduation. The faculty support was exceptional."
                    </div>
                    <div class="testimonial-author">- Priya Sharma, IAS 2023</div>
                </div>

                <div class="testimonial-card fade-in">
                    <div class="testimonial-text">
                        "SPM IAS Academy's unique approach and Royal Global University's academic excellence gave me the perfect foundation for civil services."
                    </div>
                    <div class="testimonial-author">- Amit Kumar, APSC 2022</div>
                </div>

                <div class="testimonial-card fade-in">
                    <div class="testimonial-text">
                        "The mentorship program and personalized attention helped me overcome my weaknesses. Highly recommend this integrated approach."
                    </div>
                    <div class="testimonial-author">- Sneha Devi, IPS 2023</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer" id="contact">
        <div class="container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3>Contact Information</h3>
                    <ul>
                        <li>📍 Royal Global University Campus, Guwahati</li>
                        <li>📞 +91 98765 43210</li>
                        <li>✉️ admissions@rgu-spmias.edu.in</li>
                        <li>🌐 www.royalglobaluniversity.ac.in</li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="#courses">Courses</a></li>
                        <li><a href="#faculty">Faculty</a></li>
                        <li><a href="#testimonials">Success Stories</a></li>
                        <li><a href="#">Admission Process</a></li>
                        <li><a href="#">Syllabus</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Programs</h3>
                    <ul>
                        <li><a href="#">UPSC + Graduation</a></li>
                        <li><a href="#">APSC + Graduation</a></li>
                        <li><a href="#">Combined Program</a></li>
                        <li><a href="#">Mock Test Series</a></li>
                        <li><a href="#">Interview Preparation</a></li>
                    </ul>
                </div>

                <div class="footer-section">
                    <h3>Follow Us</h3>
                    <ul>
                        <li><a href="#">Facebook</a></li>
                        <li><a href="#">Instagram</a></li>
                        <li><a href="#">YouTube</a></li>
                        <li><a href="#">LinkedIn</a></li>
                        <li><a href="#">Twitter</a></li>
                    </ul>
                </div>
            </div>

            <div class="footer-bottom">
                <p>&copy; 2025 Royal Global University in association with SPM IAS Academy. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Animation on scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.animationDelay = Math.random() * 0.3 + 's';
                    entry.target.classList.add('fade-in');
                }
            });
        }, observerOptions);

        // Observe all elements that should animate
        document.querySelectorAll('.course-card, .faculty-card, .testimonial-card, .stat-item').forEach(el => {
            observer.observe(el);
        });

        // Form handling
        document.querySelector('form').addEventListener('submit', function(e) {
            e.preventDefault();
            alert('Thank you for your interest! Our counselor will contact you within 24 hours.');
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Mobile menu toggle (if needed)
        const ctaButtons = document.querySelectorAll('.cta-btn');
        ctaButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                if (this.textContent.includes('Enroll') || this.textContent.includes('Choose')) {
                    document.querySelector('form').scrollIntoView({ behavior: 'smooth' });
                }
            });
        });
    </script>
</body>
</html>

