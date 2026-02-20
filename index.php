<?php
// Set local time for your dynamic "Live" badge logic
date_default_timezone_set('Africa/Kigali'); 
$day = date('l');
$hour = (int)date('G');
$isLive = ($day == "Sunday" && $hour >= 10 && $hour < 12);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grace Church | Welcome Home</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-navy: #1a2a44;
            --accent-gold: #c5a059;
            --live-red: #e74c3c;
            --glass: rgba(255, 255, 255, 0.1);
        }

        body, html { margin: 0; padding: 0; font-family: 'Inter', sans-serif; scroll-behavior: smooth; }

        /* 1. STICKY TRANSPARENT HEADER */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 5%;
            z-index: 1000;
            transition: 0.4s ease;
            box-sizing: border-box;
        }

        /* Header change on scroll */
        header.scrolled {
            background: var(--primary-navy);
            padding: 12px 5%;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
        }

        .logo { font-size: 1.5rem; font-weight: 700; color: white; text-decoration: none; font-style: italic; }
        
        nav a { color: white; text-decoration: none; margin-left: 25px; font-weight: 500; font-size: 0.9rem; transition: 0.3s; }
        nav a:hover { color: var(--accent-gold); }

        .header-btns { display: flex; gap: 10px; margin-left: 20px; }
        .btn-sm { padding: 8px 16px; font-size: 0.8rem; border-radius: 4px; text-transform: uppercase; }

        /* 2. HERO SECTION WITH VIDEO BACKGROUND */
        .hero {
            position: relative;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            color: white;
            text-align: center;
        }

        #bg-video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -1;
            transform: translate(-50%, -50%);
            object-fit: cover;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Darken video for text readability */
            z-index: 0;
        }

        .hero-content { z-index: 1; max-width: 800px; padding: 20px; }
        .hero-content h1 { font-size: clamp(2.5rem, 8vw, 5rem); margin: 0; letter-spacing: 4px; }
        .hero-content p { font-size: 1.2rem; margin-bottom: 30px; opacity: 0.9; }

        /* BUTTONS */
        .btn { padding: 15px 35px; border-radius: 5px; text-decoration: none; font-weight: 700; transition: 0.3s; display: inline-block; margin: 5px; }
        .btn-gold { background: var(--accent-gold); color: white; border: 1px solid var(--accent-gold); }
        .btn-outline { border: 2px solid white; color: white; }
        .btn-gold:hover { background: transparent; color: var(--accent-gold); }

        /* REST OF CONTENT */
        .content-section { padding: 100px 10%; text-align: center; background: white; }
    </style>
</head>
<body>

    <header id="main-header">
        <a href="#" class="logo">Grace Church</a>
        <nav>
            <a href="#">About</a>
            <a href="#">Ministries</a>
            <a href="#">Sermons</a>
            <a href="#">Events</a>
            <a href="#">Contact</a>
        </nav>
        <div class="header-btns">
            <a href="#" class="btn btn-gold btn-sm">Visit Us</a>
            <a href="#" class="btn btn-outline btn-sm" style="border-color: var(--accent-gold); color: var(--accent-gold);">Watch Online</a>
        </div>
    </header>

    <section class="hero">
        <video autoplay muted loop playsinline id="bg-video">
            <source src="https://assets.mixkit.co/videos/preview/mixkit-sun-shining-through-the-branches-of-a-tree-40244-large.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>
        
        <div class="hero-content">
            <h1>WELCOME HOME</h1>
            <p>Join us this Sunday at 10:00 AM</p>
            <div class="cta-group">
                <a href="#visit" class="btn btn-gold">Plan Your Visit</a>
                <a href="#watch" class="btn btn-outline">Watch Live</a>
            </div>
        </div>
    </section>

    <section class="content-section" id="visit">
        <h2>Our Mission & Beliefs</h2>
        <p>We exist to love God, love people, and make disciples of Jesus Christ.</p>
    </section>

    <script>
        // Header Scroll Effect
        const header = document.getElementById('main-header');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    </script>

</body>
</html>