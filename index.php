<?php
// PHP Logic: Check if it's currently Sunday between 10 AM and 12 PM for the Live Badge
date_default_timezone_set('Africa/Kigali'); // Set to your local time
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
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-navy: #1a2a44;
            --accent-gold: #c5a059;
            --live-red: #e74c3c;
            --text-light: #f4f4f4;
            --text-dark: #333;
        }

        body {
            margin: 0;
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            line-height: 1.6;
        }

        /* Hero Section */
        .hero {
            height: 80vh;
            background: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), 
                        url('https://images.unsplash.com/photo-1510519133417-2467bcaf9034?auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }

        .hero h1 { font-size: 4rem; margin-bottom: 10px; letter-spacing: 2px; }
        
        .btn {
            padding: 12px 30px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
            margin: 10px;
            display: inline-block;
        }

        .btn-gold { background: var(--accent-gold); color: white; }
        .btn-outline { border: 2px solid white; color: white; }

        /* Service Cards */
        .service-section {
            background: var(--primary-navy);
            padding: 60px 20px;
            text-align: center;
            color: white;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 20px;
            max-width: 1100px;
            margin: 40px auto;
        }

        .card {
            background: rgba(255,255,255,0.1);
            padding: 30px;
            border-radius: 10px;
            position: relative;
            overflow: hidden;
            border: 1px solid rgba(255,255,255,0.2);
        }

        .live-badge {
            background: var(--live-red);
            padding: 5px 10px;
            font-size: 0.8rem;
            position: absolute;
            top: 15px;
            right: 15px;
            border-radius: 3px;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% { opacity: 1; }
            50% { opacity: 0.5; }
            100% { opacity: 1; }
        }

        /* Ministries */
        .ministries { padding: 80px 20px; background: #f9f9f9; text-align: center; }

        .m-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <header class="hero">
        <h1>WELCOME HOME</h1>
        <p>Join us this Sunday at 10:00 AM</p>
        <div class="cta-group">
            <a href="#visit" class="btn btn-gold">Plan Your Visit</a>
            <a href="#watch" class="btn btn-outline">Watch Live</a>
        </div>
    </header>

    <section class="service-section">
        <h2>SERVICE TIMES</h2>
        <div class="grid">
            <div class="card">
                <?php if($isLive): ?>
                    <span class="live-badge">LIVE NOW</span>
                <?php endif; ?>
                <h3>Sunday Worship</h3>
                <p>10:00 AM</p>
                <a href="#" class="btn btn-outline" style="font-size: 0.8rem;">Watch Now</a>
            </div>
            <div class="card">
                <h3>Youth Night</h3>
                <p>Friday 6:00 PM</p>
                <a href="#" class="btn btn-outline" style="font-size: 0.8rem;">Watch Now</a>
            </div>
            <div class="card">
                <h3>Prayer Meeting</h3>
                <p>Wednesday 7:00 PM</p>
                <a href="#" class="btn btn-outline" style="font-size: 0.8rem;">Watch Now</a>
            </div>
        </div>
    </section>

    <section class="ministries">
        <h2>OUR MINISTRIES</h2>
        <div class="grid">
            <div class="m-card">
                <img src="https://images.unsplash.com/photo-1472653431158-6364773b2a56?auto=format&fit=crop&w=400&q=80" alt="Kids">
                <h4>Kids Ministry</h4>
            </div>
            <div class="m-card">
                <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?auto=format&fit=crop&w=400&q=80" alt="Youth">
                <h4>Youth Group</h4>
            </div>
            <div class="m-card">
                <img src="https://images.unsplash.com/photo-1511671782779-c97d3d27a1d4?auto=format&fit=crop&w=400&q=80" alt="Worship">
                <h4>Worship Team</h4>
            </div>
        </div>
    </section>

    <script>
        // Smooth scrolling for navigation
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        console.log("Grace Church Site Loaded Successfully!");
    </script>
</body>
</html>