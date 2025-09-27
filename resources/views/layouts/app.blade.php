<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Portfolio - Web Developer')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
            --light-bg: #ecf0f1;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
        }

        .hero-section {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .section-padding {
            padding: 80px 0;
        }

        .skill-bar {
            height: 20px;
            background: #e9ecef;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 20px;
        }

        .skill-progress {
            height: 100%;
            background: linear-gradient(90deg, var(--secondary-color), var(--accent-color));
            border-radius: 10px;
            transition: width 2s ease-in-out;
        }

        .project-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            border: none;
            border-radius: 15px;
        }

        .project-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        }

        .tech-badge {
            background: var(--secondary-color);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin: 2px;
            display: inline-block;
        }

        .navbar {
            transition: all 0.3s ease;
        }

        .navbar-scrolled {
            background: rgba(44, 62, 80, 0.95) !important;
            backdrop-filter: blur(10px);
        }

        .btn-primary {
            background: var(--secondary-color);
            border: none;
            padding: 12px 30px;
            border-radius: 25px;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: var(--accent-color);
            transform: translateY(-2px);
        }

        .social-links a {
            color: var(--primary-color);
            font-size: 1.5rem;
            margin: 0 10px;
            transition: color 0.3s ease;
        }

        .social-links a:hover {
            color: var(--secondary-color);
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background: transparent;">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#home">Portfolio Iqmal Nuriadi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">Tentang</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Keahlian</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/proyek">Proyek</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer class="bg-dark text-white py-4">
        <div class="container text-center">
            <div class="social-links mb-3">
                <a href="https://github.com/iqmlcaiera15"><i class="fab fa-github text-white"></i></a>
                <a href="https://www.linkedin.com/in/iqmal-nuriadi-007156197/"><i class="fab fa-linkedin text-white"></i></a>
                <a href="https://www.instagram.com/iqmlnriadi/"><i class="fab fa-instagram text-white"></i></a>
            </div>
            <p>&copy; {{ date('Y') }} Portfolio. Dibuat oleh Iqmal menggunakan Laravel.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('navbar-scrolled');
            } else {
                navbar.classList.remove('navbar-scrolled');
            }
        });

        // Smooth scrolling
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

        // Animate skill bars on scroll
        const observerOptions = {
            threshold: 0.5,
            rootMargin: '0px 0px -100px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const skillBars = entry.target.querySelectorAll('.skill-progress');
                    skillBars.forEach(bar => {
                        const width = bar.getAttribute('data-width');
                        bar.style.width = width + '%';
                    });
                }
            });
        }, observerOptions);

        const skillsSection = document.querySelector('#skills');
        if (skillsSection) {
            observer.observe(skillsSection);
        }
    </script>
</body>
</html>