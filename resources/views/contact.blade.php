<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - Nazar Alfarija</title>
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
        
        .contact-grid {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 48px;
            margin-bottom: 80px;
        }
        
        .contact-info-section {
            background: var(--surface);
            border-radius: 24px;
            padding: 40px;
            box-shadow: var(--shadow-xl);
            border: 1px solid var(--border);
            position: sticky;
            top: 120px;
            height: fit-content;
            animation: fadeInUp 1s ease-out 0.3s both;
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
        
        .contact-card {
            background: var(--surface-alt);
            border-radius: 16px;
            padding: 24px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            border: 1px solid var(--border);
        }
        
        .contact-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-lg);
        }
        
        .contact-item {
            display: flex;
            align-items: center;
            gap: 16px;
        }
        
        .contact-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            color: white;
            flex-shrink: 0;
        }
        
        .email-icon { background: linear-gradient(135deg, #667eea 0%, #764ba2 100%); }
        .whatsapp-icon { background: linear-gradient(135deg, #25d366 0%, #128c7e 100%); }
        
        .contact-details h4 {
            font-size: 1.125rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 4px;
        }
        
        .contact-details p {
            color: var(--text-secondary);
            font-size: 0.875rem;
            margin-bottom: 8px;
        }
        
        .contact-link {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .contact-link:hover {
            color: var(--primary-dark);
        }
        
        .form-section {
            background: var(--surface);
            border-radius: 24px;
            padding: 40px;
            box-shadow: var(--shadow-xl);
            border: 1px solid var(--border);
            animation: fadeInUp 1s ease-out 0.5s both;
        }
        
        .form-group {
            margin-bottom: 24px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--text-primary);
            font-weight: 500;
            font-size: 0.875rem;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 16px;
            border: 2px solid var(--border);
            border-radius: 12px;
            font-size: 1rem;
            transition: all 0.3s ease;
            box-sizing: border-box;
            font-family: inherit;
            background: var(--surface-alt);
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: var(--primary);
            background: var(--surface);
            box-shadow: 0 0 0 3px rgba(99, 102, 241, 0.1);
        }
        
        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }
        
        .submit-btn {
            background: var(--gradient-primary);
            color: white;
            border: none;
            padding: 16px 32px;
            border-radius: 12px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
            width: 100%;
            justify-content: center;
        }
        
        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-xl);
        }
        
        /* Social Media Section */
        .social-section {
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
        
        .social-container {
            max-width: 400px;
            margin: 0 auto;
            animation: fadeInUp 1s ease-out 0.7s both;
        }
        
        .social-card {
            background: var(--surface);
            border-radius: 20px;
            padding: 32px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
        }
        
        .social-card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
        }
        
        .social-card-icon {
            width: 80px;
            height: 80px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            margin: 0 auto 20px;
            background: linear-gradient(135deg, #e1306c 0%, #fd1d1d 50%, #fcb045 100%);
        }
        
        .social-card h4 {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 8px;
        }
        
        .social-card p {
            color: var(--text-secondary);
            margin-bottom: 16px;
        }
        
        .social-link {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s ease;
        }
        
        .social-link:hover {
            color: var(--primary-dark);
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
            .contact-grid {
                grid-template-columns: 1fr;
                gap: 32px;
            }
            
            .contact-info-section {
                position: static;
            }
            
            .nav-container {
                flex-wrap: wrap;
                gap: 4px;
            }
            
            .nav-link {
                padding: 8px 16px;
                font-size: 0.8rem;
            }
            
            .contact-item {
                flex-direction: column;
                text-align: center;
                gap: 12px;
            }
        }
    </style>
</head>
<body>
    <header class="page-header">
        <div class="container">
            <div class="header-content">
                <h1 class="page-title">Hubungi Saya</h1>
                <p class="page-subtitle">Mari berdiskusi dan berkolaborasi untuk menciptakan hal-hal luar biasa</p>
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
                <a href="/contact" class="nav-link active">Kontak</a>
            </div>
        </div>
    </nav>
    
    <main class="main-content">
        <div class="container">
            <div class="contact-grid">
                <div class="contact-info-section">
                    <h3 class="section-title">
                        <span class="section-icon">📞</span>
                        Informasi Kontak
                    </h3>
                    
                    <div class="contact-card">
                        <div class="contact-item">
                            <div class="contact-icon email-icon">
                                ✉️
                            </div>
                            <div class="contact-details">
                                <h4>Email</h4>
                                <p>Kirim pesan langsung</p>
                                <a href="mailto:jay168510@gmail.com" class="contact-link">
                                    jay168510@gmail.com
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="contact-card">
                        <div class="contact-item">
                            <div class="contact-icon whatsapp-icon">
                                📱
                            </div>
                            <div class="contact-details">
                                <h4>WhatsApp</h4>
                                <p>Chat langsung</p>
                                <a href="https://wa.me/6285872105771" target="_blank" class="contact-link">
                                    Kirim Pesan WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-section">
                    <h3 class="section-title">
                        <span class="section-icon">💬</span>
                        Kirim Pesan
                    </h3>
                    
                    <form class="contact-form" id="contactForm">
                        <div class="form-group">
                            <label for="name">Nama Lengkap</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="subject">Subjek</label>
                            <input type="text" id="subject" name="subject" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="message">Pesan</label>
                            <textarea id="message" name="message" rows="5" required placeholder="Tuliskan pesan Anda disini..."></textarea>
                        </div>
                        
                        <button type="submit" class="submit-btn">
                            <span>✈️</span>
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>

            <section class="social-section">
                <div class="section-header">
                    <h2>Media Sosial</h2>
                    <p>Ikuti dan terhubung dengan saya di Instagram</p>
                </div>
                
                <div class="social-container">
                    <div class="social-card">
                        <div class="social-card-icon">
                            📸
                        </div>
                        <h4>Instagram</h4>
                        <p>Kehidupan sehari-hari dan behind the scenes</p>
                        <a href="https://www.instagram.com/jaysonnzz?igsh=OWN3M2JmY3VnYmdk" target="_blank" class="social-link">
                            <span>👉</span> @nazaralfarija
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </main>

    <script>
        // Form submission handler
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(this);
            const name = formData.get('name');
            const email = formData.get('email');
            const subject = formData.get('subject');
            const message = formData.get('message');
            
            // Create mailto link
            const mailtoLink = `mailto:jay168510@gmail.com?subject=${encodeURIComponent(subject)}&body=${encodeURIComponent(`Nama: ${name}\nEmail: ${email}\n\nPesan:\n${message}`)}`;
            
            // Open email client
            window.location.href = mailtoLink;
            
            // Show success message
            const submitBtn = this.querySelector('.submit-btn');
            const originalText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<span>✅</span> Pesan Terkirim!';
            submitBtn.style.background = 'var(--success)';
            
            setTimeout(() => {
                submitBtn.innerHTML = originalText;
                submitBtn.style.background = 'var(--gradient-primary)';
                this.reset();
            }, 3000);
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
    </script>
</body>
</html>