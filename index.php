<?php
// Timezone and Logic for Sabbath Services
date_default_timezone_set('Africa/Kigali'); 
$day = date('l');
$hour = (int)date('G');

// Determine if it is currently Sabbath (Saturday 8:30 AM - 1:00 PM)
$isSabbathService = ($day == "Saturday" && $hour >= 8 && $hour < 13);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nyamata SDA Church | Welcome Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        /* CSS VARIABLES */
        :root {
            --deep-blue: #1a2a44;
            --warm-gold: #c5a059;
            --white: #ffffff;
            --gray-light: #f9f9f9;
            --gray-text: #555;
            --shadow: 0 10px 30px rgba(0,0,0,0.1);
        }

        /* RESET & BASE STYLES */
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'Inter', sans-serif; color: #333; line-height: 1.6; background: var(--white); }
        html { scroll-behavior: smooth; }

        /* NAVIGATION */
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 8%;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .logo { font-size: 1.5rem; font-weight: 700; color: var(--deep-blue); text-decoration: none; }
        .nav-links a { text-decoration: none; color: var(--deep-blue); margin-left: 30px; font-weight: 500; transition: 0.3s; }
        .nav-links a:hover { color: var(--warm-gold); }
        .btn-nav { background: var(--warm-gold); color: white !important; padding: 10px 20px; border-radius: 50px; }

        /* HERO SECTION */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            color: white;
            overflow: hidden;
        }
        #hero-vid {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            transform: translate(-50%, -50%);
            z-index: -1;
            object-fit: cover;
        }
        .hero-overlay {
            position: absolute;
            inset: 0;
            background: rgba(26, 42, 68, 0.6);
            z-index: 0;
        }
        .hero-content { z-index: 1; padding: 0 20px; }
        .hero-content h1 { font-size: 4.5rem; margin-bottom: 10px; }
        .hero-content p { font-size: 1.5rem; margin-bottom: 30px; font-weight: 300; }

        .btn { padding: 15px 35px; border-radius: 8px; text-decoration: none; font-weight: 700; display: inline-block; margin: 10px; transition: 0.3s; }
        .btn-primary { background: var(--warm-gold); color: white; }
        .btn-secondary { border: 2px solid white; color: white; }
        .btn:hover { transform: translateY(-3px); opacity: 0.9; }

        /* SERVICE TIMES (FLEXBOX) */
        .services { padding: 100px 8%; background: var(--deep-blue); color: white; text-align: center; }
        .section-title { font-size: 2.5rem; margin-bottom: 50px; }
        .service-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }
        .service-card {
            flex: 1 1 250px;
            border: 1px solid rgba(255,255,255,0.1);
            padding: 40px;
            border-radius: 20px;
            transition: 0.3s;
        }
        .service-card:hover { background: rgba(255,255,255,0.05); }
        .service-card h3 { color: var(--warm-gold); margin-bottom: 10px; }

        /* MINISTRIES (GRID) */
        .ministries { padding: 100px 8%; background: var(--gray-light); text-align: center; }
        .m-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 25px;
            margin-top: 50px;
        }
        .m-card {
            background: white;
            padding: 40px 20px;
            border-radius: 25px;
            box-shadow: var(--shadow);
            transition: 0.3s;
        }
        .m-card:hover { transform: translateY(-10px); }

        /* LIVE BADGE */
        .live-badge {
            background: #ff4b2b;
            color: white;
            padding: 5px 15px;
            border-radius: 50px;
            font-size: 0.8rem;
            font-weight: 700;
            display: inline-block;
            margin-bottom: 20px;
            animation: pulse 1.5s infinite;
        }
        @keyframes pulse { 0% { opacity: 1; } 50% { opacity: 0.5; } 100% { opacity: 1; } }

        /* CONTACT FORM */
        .contact-container {
            display: flex;
            flex-wrap: wrap;
            gap: 50px;
            padding: 100px 8%;
            max-width: 1200px;
            margin: 0 auto;
        }
        .contact-info, .contact-form { flex: 1 1 400px; }
        input, textarea {
            width: 100%;
            padding: 15px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            font-family: inherit;
        }
        .btn-submit { background: var(--deep-blue); color: white; border: none; cursor: pointer; width: 100%; }

        /* FOOTER */
        footer { background: var(--deep-blue); color: rgba(255,255,255,0.6); padding: 60px 8%; text-align: center; }
        
        /* RESPONSIVE */
        @media (max-width: 768px) {
            .hero-content h1 { font-size: 2.5rem; }
            .nav-links { display: none; }
        }
    </style>
</head>
<body>

    <nav>
        <a href="#" class="logo">Nyamata SDA</a>
        <div class="nav-links">
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#ministries">Ministries</a>
            <a href="#contact">Contact</a>
            <a href="#visit" class="btn-nav">Plan Your Visit</a>
        </div>
    </nav>

    <section class="hero">
        <video autoplay muted loop playsinline id="hero-vid">
            <source src="https://assets.mixkit.co/videos/preview/mixkit-sun-shining-through-the-branches-of-a-tree-40244-large.mp4" type="video/mp4">
        </video>
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Welcome Home</h1>
            <p>Join us this Sabbath at Nyamata SDA Church</p>
            <a href="#visit" class="btn btn-primary">Plan Your Visit</a>
            <a href="#sermons" class="btn btn-secondary">Watch Sermons</a>
        </div>
    </section>

    <section id="services" class="services">
        <?php if($isSabbathService): ?>
            <div class="live-badge">LIVE SERVICE IN PROGRESS</div>
        <?php endif; ?>
        <h2 class="section-title">Service Times</h2>
        <div class="service-grid">
            <div class="service-card">
                <h3>Sabbath School</h3>
                <p>Saturday 8:30 AM</p>
            </div>
            <div class="service-card">
                <h3>Divine Worship</h3>
                <p>Saturday 10:00 AM</p>
            </div>
            <div class="service-card">
                <h3>Midweek Prayer</h3>
                <p>Wednesday 6:00 PM</p>
            </div>
            <div class="service-card">
                <h3>Youth Fellowship</h3>
                <p>Friday 5:00 PM</p>
            </div>
        </div>
    </section>

    <section id="ministries" class="ministries">
        <h2 class="section-title" style="color: var(--deep-blue);">Our Ministries</h2>
        <div class="m-grid">
            <div class="m-card"><h4>Children</h4></div>
            <div class="m-card"><h4>Youth</h4></div>
            <div class="m-card"><h4>Women</h4></div>
            <div class="m-card"><h4>Men</h4></div>
            <div class="m-card"><h4>Outreach</h4></div>
        </div>
    </section>

    <section id="contact" class="contact-container">
        <div class="contact-info">
            <h2 style="color: var(--deep-blue); font-size: 2.5rem; margin-bottom: 20px;">Visit Us</h2>
            <p style="margin-bottom: 20px;">We are located in Nyamata, Rwanda. We would love to meet you this Saturday!</p>
            <p><strong>Email:</strong> info@nyamatasda.org</p>
            <p><strong>Phone:</strong> +250 788 000 000</p>
        </div>
        <div class="contact-form">
            <form action="#">
                <input type="text" placeholder="Your Name" required>
                <input type="email" placeholder="Your Email" required>
                <textarea rows="5" placeholder="Your Message"></textarea>
                <button type="submit" class="btn btn-submit">Send Message</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> Nyamata SDA Church | Loving God, Loving People.</p>
    </footer>

</body>
</html>