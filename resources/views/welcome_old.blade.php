<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NETTVCABLE - TV Cable Guide, Help & Information</title>
    
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --primary-purple: #9333ea;
            --primary-indigo: #4f46e5;
            --text-dark: #111827;
            --text-gray: #4b5563;
            --bg-light: #f9fafb;
            --white: #ffffff;
            --gradient: linear-gradient(135deg, #a855f7 0%, #6366f1 100%);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background-color: var(--white);
            color: var(--text-dark);
            line-height: 1.6;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            text-align: center;
            padding: 30px 0;
        }

        header h1 {
            color: var(--primary-purple);
            font-size: 32px;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 2px;
        }

        header p {
            color: var(--text-gray);
            font-size: 15px;
            font-weight: 500;
        }

        /* Hero Section */
        .hero {
            background: var(--gradient);
            border-radius: 12px;
            padding: 60px 40px;
            text-align: center;
            color: var(--white);
            margin-bottom: 50px;
        }

        .hero h2 {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 25px;
            letter-spacing: -0.5px;
        }

        .hero p {
            font-size: 16px;
            line-height: 1.7;
            max-width: 750px;
            margin: 0 auto 35px;
            opacity: 0.9;
        }

        .btn-call-hero {
            display: inline-flex;
            align-items: center;
            background: var(--white);
            color: var(--primary-purple);
            padding: 14px 28px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            font-size: 18px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .btn-call-hero:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .btn-call-hero i {
            margin-right: 10px;
        }

        /* Features Grid */
        .features-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 60px;
        }

        .feature-item {
            text-align: center;
            padding: 20px;
            transition: transform 0.3s;
        }

        .feature-icon {
            font-size: 40px;
            margin-bottom: 15px;
            display: block;
        }

        .feature-item h3 {
            font-size: 16px;
            font-weight: 800;
            margin-bottom: 15px;
            color: var(--text-dark);
            line-height: 1.3;
        }

        .feature-item p {
            font-size: 14px;
            color: var(--text-gray);
            margin-bottom: 20px;
            line-height: 1.6;
            min-height: 90px;
        }

        .btn-call-small {
            display: inline-block;
            background: var(--gradient);
            color: var(--white);
            padding: 8px 25px;
            border-radius: 50px;
            text-decoration: none;
            font-size: 14px;
            font-weight: 600;
            transition: opacity 0.2s;
        }

        .btn-call-small:hover {
            opacity: 0.9;
        }

        /* Content Section */
        .main-content {
            margin-bottom: 60px;
        }

        .main-content h2 {
            text-align: center;
            font-size: 30px;
            font-weight: 800;
            margin-bottom: 35px;
            color: var(--text-dark);
        }

        .main-content p {
            margin-bottom: 20px;
            color: var(--text-gray);
            font-size: 15px;
            line-height: 1.8;
        }

        /* CTA Section */
        .cta-section {
            background-color: #f3f4f6;
            border-radius: 12px;
            padding: 50px 20px;
            text-align: center;
            margin-bottom: 50px;
        }

        .cta-section h2 {
            font-size: 26px;
            font-weight: 800;
            margin-bottom: 10px;
            color: var(--text-dark);
        }

        .cta-section p {
            color: var(--text-gray);
            font-size: 16px;
            margin-bottom: 30px;
            font-weight: 500;
        }

        /* Disclaimer */
        .disclaimer {
            text-align: center;
            padding: 40px 0;
            border-top: 1px solid #e5e7eb;
        }

        .disclaimer h4 {
            font-size: 17px;
            font-weight: 800;
            margin-bottom: 15px;
            color: var(--text-dark);
        }

        .disclaimer p {
            font-size: 13.5px;
            color: var(--text-gray);
            max-width: 900px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Footer */
        footer {
            background-color: #0f172a;
            color: var(--white);
            text-align: center;
            padding: 25px 0;
            font-size: 14px;
            font-weight: 600;
            letter-spacing: 0.3px;
        }

        /* Responsive */
        @media (max-width: 1024px) {
            .features-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .features-grid {
                grid-template-columns: 1fr;
            }
            .hero h2 {
                font-size: 28px;
            }
            .hero p {
                font-size: 16px;
            }
        }
    </style>
</head>
<body>

    <header>
        <div class="container">
            <h1>NETTVCABLE</h1>
            <p>TV Cable Guide, Help & Information</p>
        </div>
    </header>

    <div class="container">
        <!-- Hero Section -->
        <section class="hero">
            <h2>TV Cable Made Simple</h2>
            <p>NETTVCABLE provides clear guidance and easy-to-understand information about TV cable services. Whether you are exploring options or setting up your connection, everything is explained in a simple and helpful way.</p>
            <a href="tel:8336246761" class="btn-call-hero">
                <span>📞 Call Now: (833) 624-6761</span>
            </a>
        </section>

        <!-- Features Grid -->
        <section class="features-grid">
            <div class="feature-item">
                <span class="feature-icon">📺</span>
                <h3>Cable Setup Made Clear</h3>
                <p>Understanding how TV cable setup works can save time and avoid confusion. We explain the process in simple terms so you know what equipment is required, how connections work, and what to expect during setup from start to finish.</p>
                <a href="tel:8336246761" class="btn-call-small">Call Now</a>
            </div>

            <div class="feature-item">
                <span class="feature-icon">📋</span>
                <h3>Service Details Explained</h3>
                <p>TV cable services come with different features and channel options. We break down the details so you can understand how services work, what they include, and how they match your viewing preferences clearly.</p>
                <a href="tel:8336246761" class="btn-call-small">Call Now</a>
            </div>

            <div class="feature-item">
                <span class="feature-icon">📘</span>
                <h3>Easy Viewing Guide</h3>
                <p>Our guide explains how TV cable works step by step, from installation to daily use. Everything is presented in a simple format so you can understand features, navigation, and usage without technical difficulty.</p>
                <a href="tel:8336246761" class="btn-call-small">Call Now</a>
            </div>

            <div class="feature-item">
                <span class="feature-icon">☎️</span>
                <h3>Quick Help Anytime</h3>
                <p>If you have questions about TV cable services, getting clear answers quickly makes a big difference. We provide easy guidance so you can understand everything and move forward without delays.</p>
                <a href="tel:8336246761" class="btn-call-small">Call Now</a>
            </div>
        </section>

        <!-- Content Section -->
        <section class="main-content">
            <h2>Simple TV Cable Information for Everyday Use</h2>
            <p>TV cable remains one of the most popular ways to access entertainment at home. With a wide range of channels and content available, it provides flexibility and convenience for viewers. However, many users find it difficult to understand how services work.</p>
            <p>Learning how TV cable operates can help you make better decisions. From signal transmission to home connection, understanding the basics ensures you get the most out of your service.</p>
            <p>Choosing the right option depends on your viewing preferences. Some people prefer more channels, while others focus on specific types of content. Understanding these choices helps simplify your decision.</p>
            <p>Installation is another important part of the process. Knowing how everything connects ensures a smoother experience and helps avoid confusion during setup.</p>
            <p>Basic troubleshooting knowledge can also improve your experience. Understanding simple solutions helps you manage common issues quickly and easily.</p>
            <p>NETTVCABLE focuses on providing clear and simple information so users can better understand TV cable services and make informed decisions with confidence.</p>
        </section>

        <!-- CTA Section -->
        <section class="cta-section">
            <h2>Need TV Cable Information?</h2>
            <p>Call now and get clear and simple guidance instantly.</p>
            <a href="tel:8336246761" class="btn-call-hero">
                <span>📞 Call Now: (833) 624-6761</span>
            </a>
        </section>

        <!-- Disclaimer -->
        <section class="disclaimer">
            <h4>Disclaimer</h4>
            <p>NETTVCABLE is an independent informational platform that provides guidance and general information about TV cable services. We do not provide TV cable services, sell subscriptions, or process payments. All services and agreements are handled directly by respective providers.</p>
        </section>
    </div>

    <footer>
        <div class="container">
            <p>© 2026 NETTVCABLE. All Rights Reserved.</p>
        </div>
    </footer>

</body>
</html>