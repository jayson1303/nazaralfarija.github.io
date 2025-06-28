<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyek - Nazar Alfarija</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');
        
        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #1e293b;
            --accent: #f59e0b;
            --success: #10b981;
            --warning: #ef4444;
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
            --gradient-success: linear-gradient(135deg, #84fab0 0%, #8fd3f4 100%);
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
        
        /* Achievement Banner */
        .achievement-banner {
            background: var(--gradient-success);
            border-radius: 20px;
            padding: 32px;
            text-align: center;
            margin-bottom: 60px;
            box-shadow: var(--shadow-xl);
            animation: fadeInUp 1s ease-out;
        }
        
        .achievement-banner h3 {
            font-size: 1.5rem;
            font-weight: 700;
            color: white;
            margin-bottom: 8px;
        }
        
        .achievement-banner p {
            font-size: 1rem;
            color: rgba(255, 255, 255, 0.9);
        }
        
        /* Project Categories */
        .project-categories {
            display: flex;
            justify-content: center;
            gap: 16px;
            margin-bottom: 48px;
            flex-wrap: wrap;
        }
        
        .category-filter {
            padding: 12px 24px;
            border: 2px solid var(--border);
            border-radius: 25px;
            background: var(--surface);
            color: var(--text-secondary);
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }
        
        .category-filter.active,
        .category-filter:hover {
            border-color: var(--primary);
            background: var(--primary);
            color: white;
            transform: translateY(-2px);
        }
        
        /* Projects Grid */
        .projects-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 32px;
            margin-bottom: 60px;
        }
        
        .project-card {
            background: var(--surface);
            border-radius: 20px;
            overflow: hidden;
            box-shadow: var(--shadow-lg);
            border: 1px solid var(--border);
            transition: all 0.3s ease;
            animation: fadeInUp 1s ease-out;
        }
        
        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
        }
        
        .project-image {
            height: 200px;
            background: var(--gradient-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .project-image::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(0,0,0,0.1), rgba(255,255,255,0.1));
        }
        
        .project-content {
            padding: 32px;
        }
        
        .project-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 16px;
        }
        
        .project-title {
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--text-primary);
            margin-bottom: 8px;
        }
        
        .project-status {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        
        .project-status.completed {
            background: rgba(16, 185, 129, 0.1);
            color: var(--success);
        }
        
        .project-status.winner {
            background: rgba(245, 158, 11, 0.1);
            color: var(--accent);
        }
        
        .project-status.learning {
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary);
        }
        
        .project-description {
            color: var(--text-secondary);
            margin-bottom: 20px;
            line-height: 1.6;
        }
        
        .project-tech {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-bottom: 24px;
        }
        
        .tech-tag {
            padding: 4px 12px;
            background: var(--surface-alt);
            border: 1px solid var(--border);
            border-radius: 20px;
            font-size: 0.75rem;
            font-weight: 500;
            color: var(--text-secondary);
        }
        
        .project-links {
            display: flex;
            gap: 12px;
        }
        
        .project-link {
            padding: 10px 20px;
            border-radius: 12px;
            text-decoration: none;
            font-weight: 500;
            font-size: 0.875rem;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .project-link.primary {
            background: var(--gradient-primary);
            color: white;
        }
        
        .project-link.secondary {
            background: var(--surface-alt);
            color: var(--text-primary);
            border: 1px solid var(--border);
        }
        
        .project-link:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }
        
        /* Learning Projects Section */
        .learning-section {
            margin-top: 80px;
            padding: 40px;
            background: rgba(99, 102, 241, 0.05);
            border-radius: 24px;
            border: 1px solid rgba(99, 102, 241, 0.1);
        }
        
        .learning-projects {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            margin-top: 32px;
        }
        
        .learning-card {
            background: var(--surface);
            border-radius: 16px;
            padding: 24px;
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
        }
        
        .learning-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }
        
        .learning-card h4 {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 8px;
        }
        
        .learning-card p {
            color: var(--text-secondary);
            font-size: 0.875rem;
            margin-bottom: 16px;
        }
        
        .learning-progress {
            height: 6px;
            background: var(--surface-alt);
            border-radius: 3px;
            overflow: hidden;
        }
        
        .learning-progress-fill {
            height: 100%;
            background: var(--gradient-primary);
            border-radius: 3px;
            transition: width 1s ease-out;
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
        
        /* Responsive */
        @media (max-width: 768px) {
            .projects-grid {
                grid-template-columns: 1fr;
            }
            
            .project-categories {
                gap: 8px;
            }
            
            .category-filter {
                padding: 8px 16px;
                font-size: 0.875rem;
            }
            
            .nav-container {
                flex-wrap: wrap;
                gap: 4px;
            }
            
            .nav-link {
                padding: 8px 16px;
                font-size: 0.8rem;
            }
            
            .project-content {
                padding: 24px;
            }
            
            .project-links {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <header class="page-header">
        <div class="container">
            <div class="header-content">
                <h1 class="page-title">Proyek Saya</h1>
                <p class="page-subtitle">Kumpulan proyek yang telah saya kerjakan selama perjalanan belajar</p>
            </div>
        </div>
    </header>
    
    <nav>
        <div class="container">
            <div class="nav-container">
                <a href="/" class="nav-link">Beranda</a>
                <a href="/about" class="nav-link">Tentang Saya</a>
                <a href="/skills" class="nav-link">Keahlian</a>
                <a href="/projects" class="nav-link active">Proyek</a>
                <a href="/contact" class="nav-link">Kontak</a>
            </div>
        </div>
    </nav>
    
    <main class="main-content">
        <div class="container">


            <!-- Project Categories -->
            <div class="project-categories">
                <button class="category-filter active" data-category="all">Semua Proyek</button>
                <button class="category-filter" data-category="web">Web Application</button>
                <button class="category-filter" data-category="academic">Tugas Kuliah</button>
            </div>

            <!-- Main Section -->
            <section>
                <div class="section-header">
                    <h2>Proyek Utama</h2>
                    <p>Proyek-proyek yang telah saya selesaikan</p>
                </div>
                
                <div class="projects-grid">
                    <!-- Sistem Pembayaran Iuran Warga -->
                    <div class="project-card" data-category="web">
                        <div class="project-image">
                            💰
                        </div>
                        <div class="project-content">
                            <div class="project-header">
                                <div>
                                    <h3 class="project-title">Sistem Pembayaran Iuran Warga</h3>
                                    <span class="project-status winner">🏆 Juara 1</span>
                                </div>
                            </div>
                            <p class="project-description">
                                Sistem manajemen pembayaran iuran warga berbasis web yang dikembangkan secara berkelompok. 
                                Fitur mencakup pencatatan pembayaran, laporan keuangan, dan notifikasi otomatis.
                            </p>
                            <div class="project-tech">
                                <span class="tech-tag">PHP</span>
                                <span class="tech-tag">Laravel</span>
                                <span class="tech-tag">MySQL</span>
                                <span class="tech-tag">Bootstrap</span>
                                <span class="tech-tag">JavaScript</span>
                            </div>
                        </div>
                    </div>

                    <!-- Web E-commerce -->
                    <div class="project-card" data-category="web academic">
                        <div class="project-image">
                            🛒
                        </div>
                        <div class="project-content">
                            <div class="project-header">
                                <div>
                                    <h3 class="project-title">Website E-commerce</h3>
                                    <span class="project-status completed">Selesai</span>
                                </div>
                            </div>
                            <p class="project-description">
                                Aplikasi e-commerce sederhana dengan fitur keranjang belanja, manajemen produk, 
                                dan sistem pembayaran dasar. Dibuat untuk memahami konsep CRUD dan session management.
                            </p>
                            <div class="project-tech">
                                <span class="tech-tag">PHP</span>
                                <span class="tech-tag">MySQL</span>
                                <span class="tech-tag">HTML</span>
                                <span class="tech-tag">CSS</span>
                                <span class="tech-tag">JavaScript</span>
                            </div>
                        </div>
                    </div>

                    <!-- Web Booking -->
                    <div class="project-card" data-category="web academic">
                        <div class="project-image">
                            📅
                        </div>
                        <div class="project-content">
                            <div class="project-header">
                                <div>
                                    <h3 class="project-title">Website Booking</h3>
                                    <span class="project-status completed">Selesai</span>
                                </div>
                            </div>
                            <p class="project-description">
                                Sistem booking/reservasi online dengan fitur pemilihan tanggal, waktu, 
                                dan konfirmasi booking. Menggunakan calendar picker dan validasi form.
                            </p>
                            <div class="project-tech">
                                <span class="tech-tag">PHP</span>
                                <span class="tech-tag">MySQL</span>
                                <span class="tech-tag">HTML</span>
                                <span class="tech-tag">CSS</span>
                                <span class="tech-tag">JavaScript</span>
                            </div>
                        </div>
                    </div>

                    <!-- Portfolio Website -->
                    <div class="project-card" data-category="web">
                        <div class="project-image">
                            👨‍💻
                        </div>
                        <div class="project-content">
                            <div class="project-header">
                                <div>
                                    <h3 class="project-title">Website Portfolio</h3>
                                    <span class="project-status learning">Sedang Dikembangkan</span>
                                </div>
                            </div>
                            <p class="project-description">
                                Website portfolio pribadi yang sedang dikembangkan untuk menampilkan 
                                proyek-proyek dan keahlian. Fokus pada desain responsive dan user experience.
                            </p>
                            <div class="project-tech">
                                <span class="tech-tag">HTML</span>
                                <span class="tech-tag">CSS</span>
                                <span class="tech-tag">JavaScript</span>
                                <span class="tech-tag">Bootstrap</span>
                            </div>
                        </div>
                    </div>

                    <!-- CRUD Sederhana -->
                    <div class="project-card" data-category="academic">
                        <div class="project-image">
                            📝
                        </div>
                        <div class="project-content">
                            <div class="project-header">
                                <div>
                                    <h3 class="project-title">Aplikasi CRUD Sederhana</h3>
                                    <span class="project-status completed">Selesai</span>
                                </div>
                            </div>
                            <p class="project-description">
                                Aplikasi Create, Read, Update, Delete sederhana untuk manajemen data mahasiswa. 
                                Proyek pertama untuk memahami konsep dasar database dan PHP.
                            </p>
                            <div class="project-tech">
                                <span class="tech-tag">PHP</span>
                                <span class="tech-tag">MySQL</span>
                                <span class="tech-tag">HTML</span>
                                <span class="tech-tag">CSS</span>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Learning Projects -->
            <section class="learning-section">
                <div class="section-header">
                    <h2>Proyek Pembelajaran</h2>
                    <p>Proyek-proyek yang sedang atau akan saya kerjakan untuk belajar</p>
                </div>
                
                <div class="learning-projects">
                    <div class="learning-card">
                        <h4>API REST dengan Laravel</h4>
                        <p>Belajar membuat API RESTful sederhana untuk aplikasi mobile</p>
                        <div class="learning-progress">
                            <div class="learning-progress-fill" style="width: 40%"></div>
                        </div>
                    </div>
                    <div class="learning-card">
                        <h4>Blog dengan Laravel</h4>
                        <p>Membuat sistem blog dengan authentication dan comment system</p>
                        <div class="learning-progress">
                            <div class="learning-progress-fill" style="width: 25%"></div>
                        </div>
                    </div>
                    <div class="learning-card">
                        <h4>Landing Page Modern</h4>
                        <p>Desain dan coding landing page dengan animasi CSS</p>
                        <div class="learning-progress">
                            <div class="learning-progress-fill" style="width: 70%"></div>
                        </div>
                    </div>
                    <div class="learning-card">
                        <h4>Dashboard Admin</h4>
                        <p>Membuat dashboard admin dengan charts dan data visualization</p>
                        <div class="learning-progress">
                            <div class="learning-progress-fill" style="width: 30%"></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script>
        // Project filtering
        const filterButtons = document.querySelectorAll('.category-filter');
        const projectCards = document.querySelectorAll('.project-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const category = button.getAttribute('data-category');
                
                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                button.classList.add('active');
                
                // Filter projects
                projectCards.forEach(card => {
                    const cardCategories = card.getAttribute('data-category');
                    
                    if (category === 'all' || cardCategories.includes(category)) {
                        card.style.display = 'block';
                        card.style.animation = 'fadeInUp 0.5s ease-out';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

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
        document.querySelectorAll('.project-card, .learning-card, .achievement-banner').forEach((el, index) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = `all 0.6s ease-out ${index * 0.1}s`;
            observer.observe(el);
        });

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

        // Add hover effects for project cards
        document.querySelectorAll('.project-card').forEach(card => {
            card.addEventListener('mouseenter', function() {
                this.style.transform = 'translateY(-12px)';
            });
            
            card.addEventListener('mouseleave', function() {
                this.style.transform = 'translateY(-8px)';
            });
        });
    </script>
</body>
</html>