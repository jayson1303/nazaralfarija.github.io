<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keahlian - Nazar Alfarija</title>
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
        
        /* Skills Categories */
        .skills-categories {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 32px;
            margin-bottom: 80px;
        }
        
        .skill-category {
            background: var(--surface);
            border-radius: 24px;
            padding: 40px;
            box-shadow: var(--shadow-xl);
            border: 1px solid var(--border);
            animation: fadeInUp 1s ease-out;
            transition: all 0.3s ease;
        }
        
        .skill-category:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
        }
        
        .category-header {
            display: flex;
            align-items: center;
            gap: 16px;
            margin-bottom: 32px;
        }
        
        .category-icon {
            font-size: 2.5rem;
            padding: 16px;
            background: var(--gradient-primary);
            border-radius: 16px;
            color: white;
            box-shadow: var(--shadow-lg);
        }
        
        .category-title {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--text-primary);
        }
        
        .skills-list {
            display: flex;
            flex-direction: column;
            gap: 24px;
        }
        
        .skill-item {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }
        
        .skill-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .skill-name {
            font-size: 1rem;
            font-weight: 600;
            color: var(--text-primary);
        }
        
        .skill-level {
            font-size: 0.875rem;
            font-weight: 500;
            padding: 4px 12px;
            border-radius: 20px;
        }
        
        .skill-level.beginner {
            color: var(--accent);
            background: rgba(245, 158, 11, 0.1);
        }
        
        .skill-level.basic {
            color: var(--primary);
            background: rgba(99, 102, 241, 0.1);
        }
        
        .skill-progress {
            width: 100%;
            height: 8px;
            background: var(--surface-alt);
            border-radius: 4px;
            overflow: hidden;
            position: relative;
        }
        
        .skill-progress-fill {
            height: 100%;
            background: var(--gradient-primary);
            border-radius: 4px;
            transition: width 1.5s ease-out;
            position: relative;
            overflow: hidden;
        }
        
        .skill-progress-fill::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
            animation: shimmer 2s infinite;
        }
        
        /* Learning Status */
        .learning-status {
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.2);
            border-radius: 12px;
            padding: 16px;
            margin-top: 32px;
            text-align: center;
        }
        
        .learning-status h3 {
            color: var(--success);
            font-size: 1.125rem;
            margin-bottom: 8px;
        }
        
        .learning-status p {
            color: var(--text-secondary);
            font-size: 0.875rem;
        }
        
        /* Tools Section */
        .tools-section {
            margin-top: 80px;
        }
        
        .tools-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 24px;
        }
        
        .tool-item {
            background: var(--surface);
            border-radius: 16px;
            padding: 24px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
            animation: fadeInUp 1s ease-out;
        }
        
        .tool-item:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
            border-color: var(--primary);
        }
        
        .tool-icon {
            font-size: 2.5rem;
            margin-bottom: 12px;
            display: block;
        }
        
        .tool-name {
            font-size: 0.875rem;
            font-weight: 600;
            color: var(--text-primary);
        }
        
        /* Certifications Section */
        .certifications-section {
            margin-top: 80px;
        }
        
        .certifications-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 32px;
        }
        
        .certification-card {
            background: var(--surface);
            border-radius: 20px;
            padding: 32px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
            animation: fadeInUp 1s ease-out;
        }
        
        .certification-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
            border-color: var(--primary);
        }
        
        .cert-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            display: block;
        }
        
        .cert-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 8px;
        }
        
        .cert-issuer {
            font-size: 1rem;
            color: var(--primary);
            font-weight: 500;
            margin-bottom: 12px;
        }
        
        .cert-status {
            display: inline-block;
            padding: 6px 16px;
            border-radius: 20px;
            font-size: 0.875rem;
            font-weight: 500;
        }
        
        .cert-status.learning {
            background: rgba(245, 158, 11, 0.1);
            color: var(--accent);
        }
        
        .cert-status.planning {
            background: rgba(99, 102, 241, 0.1);
            color: var(--primary);
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
        
        @keyframes shimmer {
            0% { left: -100%; }
            100% { left: 100%; }
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .skills-categories {
                grid-template-columns: 1fr;
            }
            
            .certifications-grid,
            .tools-grid {
                grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            }
            
            .nav-container {
                flex-wrap: wrap;
                gap: 4px;
            }
            
            .nav-link {
                padding: 8px 16px;
                font-size: 0.8rem;
            }
            
            .skill-category {
                padding: 24px;
            }
            
            .category-icon {
                font-size: 2rem;
                padding: 12px;
            }
        }
    </style>
</head>
<body>
    <header class="page-header">
        <div class="container">
            <div class="header-content">
                <h1 class="page-title">Keahlian Saya</h1>
                <p class="page-subtitle">Perjalanan belajar programming sebagai mahasiswa</p>
            </div>
        </div>
    </header>
    
    <nav>
        <div class="container">
            <div class="nav-container">
                <a href="/" class="nav-link">Beranda</a>
                <a href="/about" class="nav-link">Tentang Saya</a>
                <a href="/skills" class="nav-link active">Keahlian</a>
                <a href="/projects" class="nav-link">Proyek</a>
                <a href="/contact" class="nav-link">Kontak</a>
            </div>
        </div>
    </nav>
    
    <main class="main-content">
        <div class="container">
            <!-- Learning Status -->
            <div class="learning-status">
                <h3>🎓 Status Pembelajaran</h3>
                <p>Saya sedang aktif belajar dan mengembangkan keahlian programming sebagai mahasiswa. Setiap hari adalah kesempatan untuk belajar hal baru!</p>
            </div>

            <!-- Technical Skills -->
            <section>
                <div class="section-header">
                    <h2>Keahlian yang Sedang Dipelajari</h2>
                    <p>Bahasa pemrograman dan teknologi yang sedang saya pelajari</p>
                </div>
                
                <div class="skills-categories">
                    <!-- Frontend Development -->
                    <div class="skill-category">
                        <div class="category-header">
                            <div class="category-icon">🎨</div>
                            <h3 class="category-title">Frontend Development</h3>
                        </div>
                        <div class="skills-list">
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name">HTML</span>
                                    <span class="skill-level basic">Dasar</span>
                                </div>
                                <div class="skill-progress">
                                    <div class="skill-progress-fill" data-width="75"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name">CSS</span>
                                    <span class="skill-level basic">Dasar</span>
                                </div>
                                <div class="skill-progress">
                                    <div class="skill-progress-fill" data-width="70"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name">JavaScript</span>
                                    <span class="skill-level beginner">Pemula</span>
                                </div>
                                <div class="skill-progress">
                                    <div class="skill-progress-fill" data-width="50"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Backend Development -->
                    <div class="skill-category">
                        <div class="category-header">
                            <div class="category-icon">⚙️</div>
                            <h3 class="category-title">Backend Development</h3>
                        </div>
                        <div class="skills-list">
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name">PHP</span>
                                    <span class="skill-level basic">Dasar</span>
                                </div>
                                <div class="skill-progress">
                                    <div class="skill-progress-fill" data-width="65"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name">Laravel</span>
                                    <span class="skill-level beginner">Pemula</span>
                                </div>
                                <div class="skill-progress">
                                    <div class="skill-progress-fill" data-width="45"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name">Python</span>
                                    <span class="skill-level beginner">Sedikit</span>
                                </div>
                                <div class="skill-progress">
                                    <div class="skill-progress-fill" data-width="30"></div>
                                </div>
                            </div>
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name">REST API</span>
                                    <span class="skill-level beginner">Sedikit</span>
                                </div>
                                <div class="skill-progress">
                                    <div class="skill-progress-fill" data-width="35"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Database -->
                    <div class="skill-category">
                        <div class="category-header">
                            <div class="category-icon">🗄️</div>
                            <h3 class="category-title">Database</h3>
                        </div>
                        <div class="skills-list">
                            <div class="skill-item">
                                <div class="skill-header">
                                    <span class="skill-name">MySQL</span>
                                    <span class="skill-level basic">Dasar</span>
                                </div>
                                <div class="skill-progress">
                                    <div class="skill-progress-fill" data-width="60"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Tools & Software -->
            <section class="tools-section">
                <div class="section-header">
                    <h2>Tools yang Saya Gunakan</h2>
                    <p>Alat-alat yang membantu saya dalam belajar dan mengembangkan proyek</p>
                </div>
                
                <div class="tools-grid">
                    <div class="tool-item">
                        <span class="tool-icon">💻</span>
                        <span class="tool-name">VS Code</span>
                    </div>
                    <div class="tool-item">
                        <span class="tool-icon">🎨</span>
                        <span class="tool-name">Figma</span>
                    </div>
                    <div class="tool-item">
                        <span class="tool-icon">🖥️</span>
                        <span class="tool-name">XAMPP</span>
                    </div>
                    <div class="tool-item">
                        <span class="tool-icon">📊</span>
                        <span class="tool-name">phpMyAdmin</span>
                    </div>
                </div>
            </section>

            <!-- Learning Goals -->
            <section class="certifications-section">
                <div class="section-header">
                    <h2>Target Pembelajaran</h2>
                    <p>Hal-hal yang sedang dan akan saya pelajari ke depannya</p>
                </div>
                
                <div class="certifications-grid">
                    <div class="certification-card">
                        <span class="cert-icon">📚</span>
                        <h4 class="cert-title">Web Development Fundamentals</h4>
                        <p class="cert-issuer">Kuliah & Self-Learning</p>
                        <span class="cert-status learning">Sedang Dipelajari</span>
                    </div>
                    <div class="certification-card">
                        <span class="cert-icon">🔧</span>
                        <h4 class="cert-title">Laravel Framework</h4>
                        <p class="cert-issuer">Online Course</p>
                        <span class="cert-status learning">Sedang Dipelajari</span>
                    </div>
                    <div class="certification-card">
                        <span class="cert-icon">🐙</span>
                        <h4 class="cert-title">Git & Version Control</h4>
                        <p class="cert-issuer">Self-Learning</p>
                        <span class="cert-status planning">Rencana Selanjutnya</span>
                    </div>
                    <div class="certification-card">
                        <span class="cert-icon">🚀</span>
                        <h4 class="cert-title">Advanced Web Development</h4>
                        <p class="cert-issuer">Future Goal</p>
                        <span class="cert-status planning">Target Jangka Panjang</span>
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
                    
                    // Animate progress bars
                    const progressBars = entry.target.querySelectorAll('.skill-progress-fill');
                    progressBars.forEach(bar => {
                        setTimeout(() => {
                            const width = bar.getAttribute('data-width');
                            bar.style.width = width + '%';
                        }, 500);
                    });
                }
            });
        }, observerOptions);

        // Observe animated elements
        document.querySelectorAll('.skill-category, .certification-card, .tool-item, .learning-status').forEach((el, index) => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = `all 0.6s ease-out ${index * 0.1}s`;
            observer.observe(el);
        });

        // Initialize progress bars
        document.querySelectorAll('.skill-progress-fill').forEach(bar => {
            bar.style.width = '0%';
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

        // Add hover effects for skill items
        document.querySelectorAll('.skill-item').forEach(item => {
            item.addEventListener('mouseenter', function() {
                this.style.transform = 'translateX(8px)';
                this.style.transition = 'transform 0.3s ease';
            });
            
            item.addEventListener('mouseleave', function() {
                this.style.transform = 'translateX(0)';
            });
        });
    </script>
</body>
</html>