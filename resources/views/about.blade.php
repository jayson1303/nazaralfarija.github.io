<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Saya - [Nama Kamu]</title>
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
        
        /* Header */
        .page-header {
            background: var(--gradient-primary);
            position: relative;
            padding: 120px 0 100px;
            overflow: hidden;
        }
        
        .page-header::before {
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
        
        .page-title {
            font-size: clamp(2.5rem, 5vw, 4rem);
            font-weight: 700;
            margin-bottom: 16px;
            background: linear-gradient(45deg, white, rgba(255, 255, 255, 0.8));
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            animation: slideDown 1s ease-out;
        }
        
        .page-subtitle {
            font-size: clamp(1.125rem, 2vw, 1.5rem);
            font-weight: 400;
            opacity: 0.95;
            max-width: 600px;
            margin: 0 auto;
            animation: slideDown 1s ease-out 0.2s both;
        }
        
        /* Navigation */
        nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--border);
            position: sticky;
            top: 0;
            z-index: 100;
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
        
        .nav-link.active {
            background: var(--gradient-primary);
            color: white;
        }
        
        /* Main Content */
        .main-content {
            padding: 80px 0;
        }
        
        .about-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 48px;
            margin-bottom: 80px;
        }
        
        .profile-section {
            background: var(--surface);
            border-radius: 24px;
            padding: 40px;
            box-shadow: var(--shadow-xl);
            border: 1px solid var(--border);
            text-align: center;
            position: sticky;
            top: 120px;
            height: fit-content;
            animation: fadeInUp 1s ease-out 0.3s both;
        }
        
        .profile-avatar {
            width: 180px;
            height: 180px;
            border-radius: 50%;
            background: var(--gradient-primary);
            margin: 0 auto 24px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 80px;
            color: white;
            box-shadow: var(--shadow-xl);
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease;
        }
        
        .profile-avatar:hover {
            transform: scale(1.05);
        }
        
        .profile-avatar::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: conic-gradient(from 0deg, transparent, rgba(255,255,255,0.2), transparent);
            animation: spin 8s linear infinite;
        }
        
        .profile-name {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 8px;
        }
        
        .profile-role {
            font-size: 1.125rem;
            color: var(--primary);
            font-weight: 500;
            margin-bottom: 24px;
        }
        
        .profile-stats {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-top: 32px;
        }
        
        .stat-item {
            text-align: center;
            padding: 20px;
            background: var(--surface-alt);
            border-radius: 16px;
            transition: all 0.3s ease;
        }
        
        .stat-item:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }
        
        .stat-number {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
            display: block;
            margin-bottom: 4px;
        }
        
        .stat-label {
            font-size: 0.875rem;
            color: var(--text-secondary);
            font-weight: 500;
        }
        
        .about-content {
            animation: fadeInUp 1s ease-out 0.5s both;
        }
        
        .content-section {
            background: var(--surface);
            border-radius: 24px;
            padding: 40px;
            margin-bottom: 32px;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--border);
        }
        
        .section-title {
            font-size: 1.75rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 24px;
            display: flex;
            align-items: center;
            gap: 12px;
        }
        
        .section-icon {
            font-size: 1.5rem;
            padding: 8px;
            background: var(--gradient-primary);
            border-radius: 12px;
            color: white;
        }
        
        .about-text {
            font-size: 1.125rem;
            line-height: 1.8;
            color: var(--text-secondary);
            margin-bottom: 20px;
        }
        
        .highlight-text {
            color: var(--primary);
            font-weight: 600;
            background: rgba(99, 102, 241, 0.1);
            padding: 2px 8px;
            border-radius: 6px;
        }
        
        /* Interests Section */
        .interests-section {
            margin-top: 80px;
        }
        
        .section-header {
            text-align: center;
            margin-bottom: 48px;
        }
        
        .section-header h2 {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 16px;
        }
        
        .section-header p {
            font-size: 1.125rem;
            color: var(--text-secondary);
            max-width: 600px;
            margin: 0 auto;
        }
        
        .interests-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 32px;
            animation: fadeInUp 1s ease-out 0.7s both;
        }
        
        .interest-card {
            background: var(--surface);
            border-radius: 20px;
            padding: 32px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
        }
        
        .interest-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary);
        }
        
        .interest-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            display: block;
        }
        
        .interest-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 12px;
        }
        
        .interest-desc {
            color: var(--text-secondary);
            line-height: 1.6;
        }
        
        /* Timeline */
        .timeline-section {
            margin-top: 80px;
        }
        
        .timeline {
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            top: 0;
            bottom: 0;
            width: 2px;
            background: var(--gradient-primary);
            transform: translateX(-50%);
        }
        
        .timeline-item {
            display: flex;
            margin-bottom: 40px;
            position: relative;
            animation: slideInUp 0.8s ease-out;
        }
        
        .timeline-item:nth-child(odd) {
            flex-direction: row-reverse;
        }
        
        .timeline-content {
            flex: 1;
            background: var(--surface);
            border-radius: 16px;
            padding: 24px;
            margin: 0 24px;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--border);
            position: relative;
        }
        
        .timeline-content::before {
            content: '';
            position: absolute;
            top: 20px;
            width: 0;
            height: 0;
            border: 10px solid transparent;
        }
        
        .timeline-item:nth-child(odd) .timeline-content::before {
            left: -20px;
            border-right-color: var(--surface);
        }
        
        .timeline-item:nth-child(even) .timeline-content::before {
            right: -20px;
            border-left-color: var(--surface);
        }
        
        .timeline-dot {
            width: 16px;
            height: 16px;
            background: var(--gradient-primary);
            border-radius: 50%;
            position: absolute;
            left: 50%;
            top: 24px;
            transform: translateX(-50%);
            box-shadow: 0 0 0 4px var(--surface), 0 0 0 6px var(--primary);
            z-index: 2;
        }
        
        .timeline-year {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--primary);
            margin-bottom: 8px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .timeline-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 8px;
        }
        
        .timeline-desc {
            color: var(--text-secondary);
            line-height: 1.6;
        }
        
        /* Animations */
        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
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
        
        @keyframes slideInUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        @keyframes spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .about-grid {
                grid-template-columns: 1fr;
                gap: 32px;
            }
            
            .profile-section {
                position: static;
            }
            
            .timeline::before {
                left: 20px;
            }
            
            .timeline-item {
                flex-direction: column !important;
                margin-left: 40px;
            }
            
            .timeline-content {
                margin: 0;
            }
            
            .timeline-content::before {
                left: -20px !important;
                right: auto !important;
                border-right-color: var(--surface) !important;
                border-left-color: transparent !important;
            }
            
            .timeline-dot {
                left: 20px;
                transform: translateX(-50%);
            }
            
            .interests-grid {
                grid-template-columns: 1fr;
            }
            
            .nav-container {
                flex-wrap: wrap;
                gap: 4px;
            }
            
            .nav-link {
                padding: 8px 16px;
                font-size: 0.8rem;
            }
        }
    </style>
</head>
<body>
    <header class="page-header">
        <div class="container">
            <div class="header-content">
                <h1 class="page-title">Tentang Saya</h1>
                <p class="page-subtitle">Perjalanan saya dalam dunia teknologi dan pengembangan software</p>
            </div>
        </div>
    </header>
    
    <nav>
        <div class="container">
            <div class="nav-container">
                <a href="/" class="nav-link">Beranda</a>
                <a href="/about" class="nav-link active">Tentang Saya</a>
                <a href="/skills" class="nav-link">Keahlian</a>
                <a href="/projects" class="nav-link">Proyek</a>
                <a href="/contact" class="nav-link">Kontak</a>
            </div>
        </div>
    </nav>
    
    <main class="main-content">
        <div class="container">
            <div class="about-grid">
                <div class="profile-section">
                    <div class="profile-avatar">
                        👨‍💻
                    </div>
                    <h3 class="profile-name">Nazar Alfarija</h3>
                    <p class="profile-role">Mahasiswa Sistem Informasi</p>
                    
                    <div class="profile-stats">
                        <div class="stat-item">
                            <span class="stat-number">4</span>
                            <span class="stat-label">Semester</span>
                        </div>
                        <div class="stat-item">
                            <span class="stat-number">3.52</span>
                            <span class="stat-label">IPK Terakhir</span>
                        </div>
                    </div>
                </div>

                <div class="about-content">
                    <div class="content-section">
                        <h3 class="section-title">
                            <span class="section-icon">👋</span>
                            Halo, Perkenalkan!
                        </h3>
                        <p class="about-text">
                            Halo, saya <span class="highlight-text">Nazar Alfarija</span>, seorang mahasiswa Sistem Informasi
                            semester 4 yang passionate dalam dunia teknologi dan pengembangan software.
                            Saya selalu antusias untuk belajar hal-hal baru dalam dunia IT.
                        </p>
                        <p class="about-text">
                            Sebagai mahasiswa yang aktif, saya terus mengasah kemampuan programming melalui 
                            berbagai mata kuliah, project assignment, dan eksplorasi teknologi terbaru. 
                            Saya percaya bahwa pembelajaran yang konsisten adalah kunci untuk menjadi developer yang handal.
                        </p>
                    </div>

                    <div class="content-section">
                        <h3 class="section-title">
                            <span class="section-icon">🎯</span>
                            Misi & Visi
                        </h3>
                        <p class="about-text">
                            Sebagai mahasiswa, misi saya adalah terus belajar dan mengembangkan kemampuan 
                            untuk menciptakan aplikasi yang bermanfaat bagi masyarakat. Saya percaya 
                            bahwa dengan dedikasi dan kerja keras, saya dapat berkontribusi positif 
                            dalam dunia teknologi di masa depan.
                        </p>
                    </div>
                </div>
            </div>

            <section class="interests-section">
                <div class="section-header">
                    <h2>Minat & Keahlian</h2>
                    <p>Area yang saya fokuskan dan kembangkan selama perjalanan akademik</p>
                </div>
                
                <div class="interests-grid">
                    <div class="interest-card">
                        <span class="interest-icon">💻</span>
                        <h4 class="interest-title">Programming</h4>
                        <p class="interest-desc">Belajar bahasa pemrograman Laravel, PHP, dan teknologi web modern</p>
                    </div>
                    <div class="interest-card">
                        <span class="interest-icon">📚</span>
                        <h4 class="interest-title">Learning</h4>
                        <p class="interest-desc">Selalu antusias mempelajari teknologi dan konsep baru dalam pengembangan software</p>
                    </div>
                    <div class="interest-card">
                        <span class="interest-icon">🎯</span>
                        <h4 class="interest-title">Problem Solving</h4>
                        <p class="interest-desc">Menyukai tantangan dalam memecahkan masalah kompleks dan mencari solusi kreatif</p>
                    </div>
                </div>
            </section>

            <section class="timeline-section">
                <div class="section-header">
                    <h2>Perjalanan Akademik</h2>
                    <p>Timeline perjalanan pendidikan dan pencapaian saya</p>
                </div>
                
                <div class="timeline">
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <div class="timeline-year">2024 - Sekarang</div>
                            <h4 class="timeline-title">Semester 4</h4>
                            <p class="timeline-desc">Fokus pada mata kuliah advanced programming dan database management sistem yang lebih kompleks.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <div class="timeline-year">2023</div>
                            <h4 class="timeline-title">Semester 1-3</h4>
                            <p class="timeline-desc">Mempelajari fundamental programming, struktur data, algoritma, dan konsep dasar sistem informasi.</p>
                        </div>
                    </div>
                    <div class="timeline-item">
                        <div class="timeline-dot"></div>
                        <div class="timeline-content">
                            <div class="timeline-year">2022</div>
                            <h4 class="timeline-title">Mulai Kuliah</h4>
                            <p class="timeline-desc">Memulai perjalanan sebagai mahasiswa Sistem Informasi dengan semangat tinggi untuk belajar teknologi.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script>
        // Intersection Observer untuk animasi scroll
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe animated elements
        document.querySelectorAll('.interest-card, .timeline-item').forEach((el, index) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = `all 0.6s ease-out ${index * 0.1}s`;
            observer.observe(el);
        });

        // Counter animation untuk stats
        function animateCounter(element, target) {
            let current = 0;
            const isFloat = target.toString().includes('.');
            const increment = isFloat ? target / 100 : target / 50;
            
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                
                if (isFloat) {
                    element.textContent = current.toFixed(2);
                } else {
                    element.textContent = Math.floor(current);
                }
            }, 30);
        }

        // Start counter animation when visible
        const statsObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const numbers = entry.target.querySelectorAll('.stat-number');
                    numbers.forEach(num => {
                        const target = parseFloat(num.textContent);
                        num.textContent = '0';
                        setTimeout(() => animateCounter(num, target), 500);
                    });
                    statsObserver.unobserve(entry.target);
                }
            });
        });

        const profileSection = document.querySelector('.profile-section');
        if (profileSection) {
            statsObserver.observe(profileSection);
        }

        // Smooth scrolling untuk anchor links
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