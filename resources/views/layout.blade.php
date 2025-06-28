<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portofolio profesional - Web Developer & Designer">
    <title>@yield('title', 'Portofolio Saya')</title>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #3498db;
            --primary-dark: #2980b9;
            --secondary-color: #2c3e50;
            --accent-color: #e74c3c;
            --text-color: #333;
            --text-light: #7f8c8d;
            --bg-color: #ffffff;
            --bg-light: #f8f9fa;
            --shadow: 0 2px 10px rgba(0,0,0,0.1);
            --shadow-hover: 0 5px 20px rgba(0,0,0,0.15);
            --border-radius: 8px;
            --transition: all 0.3s ease;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            color: var(--text-color);
            background-color: var(--bg-color);
        }

        /* Header & Navigation */
        .header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--primary-dark) 100%);
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-height: 70px;
        }

        .logo {
            color: white;
            font-size: 1.5rem;
            font-weight: 700;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo i {
            font-size: 1.8rem;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 0;
        }

        .nav-item {
            position: relative;
        }

        .nav-link {
            color: white;
            text-decoration: none;
            padding: 1rem 1.5rem;
            font-weight: 500;
            transition: var(--transition);
            display: block;
            position: relative;
            overflow: hidden;
        }

        .nav-link:before {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 3px;
            background: white;
            transition: var(--transition);
            transform: translateX(-50%);
        }

        .nav-link:hover:before,
        .nav-link.active:before {
            width: 80%;
        }

        .nav-link:hover {
            background: rgba(255,255,255,0.1);
        }

        /* Mobile Menu */
        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            cursor: pointer;
        }

        .mobile-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: var(--primary-color);
            box-shadow: var(--shadow);
        }

        .mobile-menu.active {
            display: block;
        }

        .mobile-nav-link {
            color: white;
            text-decoration: none;
            padding: 1rem 2rem;
            display: block;
            border-bottom: 1px solid rgba(255,255,255,0.1);
            transition: var(--transition);
        }

        .mobile-nav-link:hover {
            background: rgba(255,255,255,0.1);
        }

        /* Main Content */
        .main-content {
            min-height: calc(100vh - 140px);
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        /* Page Header */
        .page-header {
            text-align: center;
            margin-bottom: 3rem;
            padding: 2rem 0;
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: var(--border-radius);
        }

        .page-title {
            font-size: 2.5rem;
            color: var(--secondary-color);
            margin-bottom: 0.5rem;
            font-weight: 700;
        }

        .page-subtitle {
            color: var(--text-light);
            font-size: 1.1rem;
        }

        /* Breadcrumb */
        .breadcrumb {
            background: var(--bg-light);
            padding: 1rem 2rem;
            border-bottom: 1px solid #dee2e6;
        }

        .breadcrumb-container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .breadcrumb-list {
            list-style: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .breadcrumb-item {
            color: var(--text-light);
        }

        .breadcrumb-link {
            color: var(--primary-color);
            text-decoration: none;
            transition: var(--transition);
        }

        .breadcrumb-link:hover {
            color: var(--primary-dark);
        }

        /* Footer */
        .footer {
            background: var(--secondary-color);
            color: white;
            text-align: center;
            padding: 2rem 0;
            margin-top: 3rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 2rem;
        }

        .footer-text {
            margin-bottom: 1rem;
        }

        .footer-social {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }

        .footer-social a {
            color: white;
            font-size: 1.2rem;
            transition: var(--transition);
        }

        .footer-social a:hover {
            color: var(--primary-color);
            transform: translateY(-2px);
        }

        /* Scroll to Top Button */
        .scroll-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: var(--primary-color);
            color: white;
            border: none;
            border-radius: 50%;
            width: 50px;
            height: 50px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: var(--transition);
            opacity: 0;
            visibility: hidden;
            z-index: 1000;
        }

        .scroll-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .scroll-top:hover {
            background: var(--primary-dark);
            transform: translateY(-3px);
        }

        /* Loading Animation */
        .loading {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.3s ease;
        }

        .loading-spinner {
            width: 50px;
            height: 50px;
            border: 3px solid #f3f3f3;
            border-top: 3px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .mobile-menu-btn {
                display: block;
            }

            .nav-container {
                padding: 0 1rem;
            }

            .container {
                padding: 1rem;
            }

            .page-title {
                font-size: 2rem;
            }

            .breadcrumb {
                padding: 0.5rem 1rem;
            }

            .scroll-top {
                bottom: 1rem;
                right: 1rem;
                width: 45px;
                height: 45px;
            }
        }

        /* Dark Mode */
        @media (prefers-color-scheme: dark) {
            :root {
                --text-color: #ecf0f1;
                --bg-color: #2c3e50;
                --bg-light: #34495e;
            }

            .page-header {
                background: linear-gradient(135deg, #34495e 0%, #2c3e50 100%);
            }

            .breadcrumb {
                background: var(--bg-light);
                border-color: #576574;
            }
        }

        /* Custom Animations */
        .fade-in {
            animation: fadeIn 0.6s ease-in;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <!-- Loading Screen -->
    <div class="loading" id="loading">
        <div class="loading-spinner"></div>
    </div>

    <!-- Header -->
    <header class="header">
        <div class="nav-container">
            <a href="/" class="logo">
                <i class="fas fa-code"></i>
                <span>Portfolio</span>
            </a>
            
            <nav>
                <ul class="nav-menu">
                    <li class="nav-item">
                        <a href="/" class="nav-link {{ request()->is('/') ? 'active' : '' }}">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/about" class="nav-link {{ request()->is('about') ? 'active' : '' }}">
                            <i class="fas fa-user"></i> Tentang
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/skills" class="nav-link {{ request()->is('skills') ? 'active' : '' }}">
                            <i class="fas fa-cogs"></i> Keahlian
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/projects" class="nav-link {{ request()->is('projects') ? 'active' : '' }}">
                            <i class="fas fa-folder-open"></i> Proyek
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/contact" class="nav-link {{ request()->is('contact') ? 'active' : '' }}">
                            <i class="fas fa-envelope"></i> Kontak
                        </a>
                    </li>
                </ul>
            </nav>

            <button class="mobile-menu-btn" id="mobileMenuBtn">
                <i class="fas fa-bars"></i>
            </button>
        </div>

        <!-- Mobile Menu -->
        <div class="mobile-menu" id="mobileMenu">
            <a href="/" class="mobile-nav-link">
                <i class="fas fa-home"></i> Home
            </a>
            <a href="/about" class="mobile-nav-link">
                <i class="fas fa-user"></i> Tentang
            </a>
            <a href="/skills" class="mobile-nav-link">
                <i class="fas fa-cogs"></i> Keahlian
            </a>
            <a href="/projects" class="mobile-nav-link">
                <i class="fas fa-folder-open"></i> Proyek
            </a>
            <a href="/contact" class="mobile-nav-link">
                <i class="fas fa-envelope"></i> Kontak
            </a>
        </div>
    </header>

    <!-- Breadcrumb -->
    <div class="breadcrumb">
        <div class="breadcrumb-container">
            <ul class="breadcrumb-list">
                <li class="breadcrumb-item">
                    <a href="/" class="breadcrumb-link">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <i class="fas fa-chevron-right"></i>
                </li>
                <li class="breadcrumb-item">
                    @yield('breadcrumb', 'Halaman')
                </li>
            </ul>
        </div>
    </div>

    <!-- Main Content -->
    <main class="main-content fade-in">
        <div class="container">
            @yield('content')
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <p class="footer-text">
                &copy; {{ date('Y') }} Portfolio Saya. Dibuat dengan <i class="fas fa-heart" style="color: #e74c3c;"></i> menggunakan Laravel
            </p>
            <div class="footer-social">
                <a href="#" title="GitHub"><i class="fab fa-github"></i></a>
                <a href="#" title="LinkedIn"><i class="fab fa-linkedin"></i></a>
                <a href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" title="Instagram"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button -->
    <button class="scroll-top" id="scrollTop">
        <i class="fas fa-arrow-up"></i>
    </button>

    <script>
        // Loading Screen
        window.addEventListener('load', function() {
            const loading = document.getElementById('loading');
            loading.style.opacity = '0';
            setTimeout(() => {
                loading.style.display = 'none';
            }, 300);
        });

        // Mobile Menu Toggle
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mobileMenu = document.getElementById('mobileMenu');

        mobileMenuBtn.addEventListener('click', function() {
            mobileMenu.classList.toggle('active');
            const icon = this.querySelector('i');
            icon.classList.toggle('fa-bars');
            icon.classList.toggle('fa-times');
        });

        // Scroll to Top Button
        const scrollTopBtn = document.getElementById('scrollTop');

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollTopBtn.classList.add('visible');
            } else {
                scrollTopBtn.classList.remove('visible');
            }
        });

        scrollTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Active Navigation Highlight
        const currentLocation = location.pathname;
        const menuItems = document.querySelectorAll('.nav-link');
        const mobileMenuItems = document.querySelectorAll('.mobile-nav-link');

        [...menuItems, ...mobileMenuItems].forEach(item => {
            if (item.getAttribute('href') === currentLocation) {
                item.classList.add('active');
            }
        });

        // Smooth Scrolling for Anchor Links
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
    </script>
</body>
</html>