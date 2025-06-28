<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Profesional - [Nama Kamu]</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #1e293b;
            --accent: #f59e0b;
            --success: #10b981;
            --surface: #ffffff;
            --surface-alt: #f8fafc;
            --text-primary: #0f172a;
            --text-secondary: #64748b;
            --text-tertiary: #94a3b8;
            --border: #e2e8f0;
            --shadow: 0 1px 3px 0 rgb(0 0 0 / 0.1), 0 1px 2px -1px rgb(0 0 0 / 0.1);
            --shadow-lg: 0 10px 15px -3px rgb(0 0 0 / 0.1), 0 4px 6px -4px rgb(0 0 0 / 0.1);
            --shadow-xl: 0 20px 25px -5px rgb(0 0 0 / 0.1), 0 8px 10px -6px rgb(0 0 0 / 0.1);
            --gradient-primary: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            --gradient-accent: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
            --gradient-surface: linear-gradient(135deg, #fdfbfb 0%, #ebedee 100%);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            color: var(--text-primary);
            background: var(--gradient-surface);
            overflow-x: hidden;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 24px;
        }
        
        /* Header Styles */
        header {
            background: var(--gradient-primary);
            position: relative;
            padding: 120px 0 100px;
            overflow: hidden;
        }
        
        header::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="white" opacity="0.1"><path d="M0,0v46.29c47.79,24.34,155.93,72.76,347.27,14.06C391.28,51.15,499.92,17.71,651.98,33c152.06,15.29,294.52,82.65,348.02,108V0H0z"></path></svg>') no-repeat bottom;
            background-size: cover;
        }
        
        .header-content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
        }
        
        .profile-image {
            width: 160px;
            height: 160px;
            border-radius: 50%;
            object-fit: cover;
            border: 6px solid rgba(255, 255, 255, 0.3);
            box-shadow: var(--shadow-xl);
            margin-bottom: 32px;
            backdrop-filter: blur(10px);
            transition: transform 0.3s ease;
        }
        
        .profile-image:hover {
            transform: scale(1.05);
        }
        
        .header-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            margin-bottom: 16px;
            background: linear-gradient(45deg, white, rgba(255, 255, 255, 0.8));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .header-subtitle {
            font-size: clamp(1.125rem, 2vw, 1.5rem);
            font-weight: 400;
            max-width: 600px;
            margin: 0 auto;
            opacity: 0.95;
            line-height: 1.7;
        }
        
        /* Navigation Styles */
        nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 100;
            transition: all 0.3s ease;
        }
        
        .nav-container {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 0;
            gap: 8px;
        }
        
        .nav-link {
            color: var(--text-primary);
            text-decoration: none;
            padding: 12px 24px;
            font-weight: 500;
            font-size: 0.875rem;
            border-radius: 12px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: var(--gradient-primary);
            transition: left 0.3s ease;
            z-index: -1;
        }
        
        .nav-link:hover::before {
            left: 0;
        }
        
        .nav-link:hover {
            color: white;
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }
        
        /* Hero Section */
        .hero {
            padding: 100px 0;
            text-align: center;
            position: relative;
        }
        
        .hero-content {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .hero-title {
            font-size: clamp(2rem, 4vw, 3.5rem);
            font-weight: 700;
            margin-bottom: 24px;
            color: var(--text-primary);
            line-height: 1.2;
        }
        
        .hero-description {
            font-size: clamp(1rem, 2vw, 1.25rem);
            color: var(--text-secondary);
            margin-bottom: 48px;
            line-height: 1.7;
        }
        
        .cta-button {
            display: inline-flex;
            align-items: center;
            gap: 12px;
            background: var(--gradient-primary);
            color: white;
            padding: 16px 32px;
            border-radius: 16px;
            text-decoration: none;
            font-weight: 600;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-lg);
            position: relative;
            overflow: hidden;
        }
        
        .cta-button::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #764ba2 0%, #667eea 100%);
            transition: left 0.3s ease;
            z-index: -1;
        }
        
        .cta-button:hover::before {
            left: 0;
        }
        
        .cta-button:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-xl);
        }
        
        .cta-button::after {
            content: '→';
            margin-left: 8px;
            transition: transform 0.3s ease;
        }
        
        .cta-button:hover::after {
            transform: translateX(4px);
        }
        
        /* Skills Preview */
        .skills-preview {
            background: var(--surface);
            padding: 80px 0;
            border-radius: 32px 32px 0 0;
            margin-top: 60px;
            box-shadow: var(--shadow-xl);
        }
        
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 32px;
            margin-top: 48px;
        }
        
        .skill-card {
            background: var(--surface-alt);
            padding: 32px;
            border-radius: 20px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid var(--border);
        }
        
        .skill-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary);
        }
        
        .skill-icon {
            width: 64px;
            height: 64px;
            background: var(--gradient-primary);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 28px;
            color: white;
        }
        
        .skill-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 12px;
            color: var(--text-primary);
        }
        
        .skill-description {
            color: var(--text-secondary);
            font-size: 0.875rem;
            line-height: 1.6;
        }
        
        /* Footer */
        footer {
            background: var(--secondary);
            color: white;
            padding: 60px 0 40px;
            text-align: center;
            position: relative;
        }
        
        footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, var(--primary), transparent);
        }
        
        .footer-content {
            margin-bottom: 32px;
        }
        
        .footer-title {
            font-size: 1.5rem;
            font-weight: 600;
            margin-bottom: 16px;
        }
        
        .footer-text {
            color: var(--text-tertiary);
            margin-bottom: 24px;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-bottom: 32px;
        }
        
        .social-link {
            width: 48px;
            height: 48px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
        }
        
        .social-link:hover {
            background: var(--primary);
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }
        
        .footer-bottom {
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            padding-top: 24px;
            color: var(--text-tertiary);
            font-size: 0.875rem;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .nav-container {
                flex-wrap: wrap;
                gap: 4px;
            }
            
            .nav-link {
                padding: 8px 16px;
                font-size: 0.8rem;
            }
            
            .skills-grid {
                grid-template-columns: 1fr;
                gap: 24px;
            }
            
            .social-links {
                flex-wrap: wrap;
            }
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .hero-content > * {
            animation: fadeInUp 0.8s ease forwards;
        }
        
        .hero-title {
            animation-delay: 0.1s;
        }
        
        .hero-description {
            animation-delay: 0.2s;
        }
        
        .cta-button {
            animation-delay: 0.3s;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <img src="/images/nazar.jpeg" alt="Foto Profil Nazar Alfarija" class="profile-image">
                <h1 class="header-title">Halo, Saya Nazar Alfarija</h1>
                <p class="header-subtitle">Seorang Mahasiswa yang bersemangat menciptakan solusi digital inovatif dan pengalaman pengguna yang luar biasa</p>
            </div>
        </div>
    </header>
    
    <nav>
        <div class="container">
            <div class="nav-container">
                <a href="/" class="nav-link">Beranda</a>
                <a href="/about" class="nav-link">Tentang Saya</a>
                <a href="/skills" class="nav-link">Keahlian</a>
                <a href="/projects" class="nav-link">Proyek</a>
                <a href="/contact" class="nav-link">Kontak</a>
            </div>
        </div>
    </nav>
    
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h2 class="hero-title">Membangun Masa Depan Digital</h2>
                <p class="hero-description">Sebagai mahasiswa yang aktif belajar di bidang teknologi digital, saya tertarik menciptakan solusi kreatif yang tidak hanya fungsional, tetapi juga menyenangkan untuk digunakan. Saya percaya belajar lewat praktik adalah kunci perkembangan.</p>
                <a href="/projects" class="cta-button">Lihat Proyek Saya</a>
            </div>
        </div>
    </section>
    
    <section class="skills-preview">
        <div class="container">
            <div class="hero-content">
                <h2 class="hero-title">Keahlian Utama</h2>
                <p class="hero-description">Kombinasi sempurna antara teknologi dan kreativitas</p>
            </div>
            
            <div class="skills-grid">
                <div class="skill-card">
                    <div class="skill-icon">💻</div>
                    <h3 class="skill-title">Pengembangan Web</h3>
                    <p class="skill-description">Membangun aplikasi web modern dengan teknologi terdepan dan performa optimal</p>
                </div>
                
                <div class="skill-card">
                    <div class="skill-icon">🎨</div>
                    <h3 class="skill-title">UI/UX Design</h3>
                    <p class="skill-description">Merancang antarmuka yang intuitif dan pengalaman pengguna yang menyenangkan</p>
                </div>
    </section>
    
    <footer>
        <div class="container">
            <div class="footer-content">
                <h3 class="footer-title">Mari Berkolaborasi</h3>
                <p class="footer-text">Siap untuk memulai proyek bersama? Mari berdiskusi tentang ide Anda</p>
                
                <div class="social-links">
                    <a href="https://www.instagram.com/jaysonnzz?igsh=OWN3M2JmY3VnYmdk" target="_blank" class="social-link">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                    </a>
                    <a href="#" class="social-link" title="Twitter">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; 2025 Portfolio Nazar Alfarija. Semua hak dilindungi.</p>
            </div>
        </div>
    </footer>
</body>
</html>