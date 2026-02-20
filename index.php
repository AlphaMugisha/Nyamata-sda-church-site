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
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Inter', sans-serif; }
        .bg-deep-blue { background-color: #1a2a44; }
        .text-warm-gold { color: #c5a059; }
        .bg-warm-gold { background-color: #c5a059; }
        .hero-overlay { background: rgba(26, 42, 68, 0.6); }
    </style>
</head>
<body class="bg-white text-gray-800">

    <nav class="fixed w-full z-50 bg-white/90 backdrop-blur-md shadow-sm">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold bg-deep-blue bg-clip-text text-transparent">Nyamata SDA</a>
            <div class="hidden md:flex space-x-8 font-medium">
                <a href="#about" class="hover:text-warm-gold transition">About</a>
                <a href="#services" class="hover:text-warm-gold transition">Services</a>
                <a href="#ministries" class="hover:text-warm-gold transition">Ministries</a>
                <a href="#sermons" class="hover:text-warm-gold transition">Sermons</a>
                <a href="#contact" class="hover:text-warm-gold transition">Contact</a>
            </div>
            <a href="#visit" class="bg-warm-gold text-white px-6 py-2 rounded-full font-bold hover:bg-opacity-90 transition">Plan Your Visit</a>
        </div>
    </nav>

    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <video autoplay muted loop playsinline class="absolute w-auto min-w-full min-height-full max-w-none">
            <source src="https://assets.mixkit.co/videos/preview/mixkit-sun-shining-through-the-branches-of-a-tree-40244-large.mp4" type="video/mp4">
        </video>
        <div class="absolute inset-0 hero-overlay"></div>
        <div class="relative z-10 text-center text-white px-4">
            <h1 class="text-5xl md:text-7xl font-bold mb-4">Welcome Home</h1>
            <p class="text-xl md:text-2xl mb-8 font-light">Join us this Sabbath at Nyamata SDA Church</p>
            <div class="flex flex-col md:flex-row justify-center gap-4">
                <a href="#visit" class="bg-warm-gold px-8 py-4 rounded-lg font-bold text-lg hover:scale-105 transition">Plan Your Visit</a>
                <a href="#sermons" class="bg-white/20 backdrop-blur-md border border-white px-8 py-4 rounded-lg font-bold text-lg hover:bg-white/30 transition">Watch Sermons</a>
            </div>
        </div>
    </section>

    <section id="about" class="py-20 px-6 max-w-5xl mx-auto text-center">
        <h2 class="text-deep-blue text-4xl font-bold mb-6">About Nyamata SDA Church</h2>
        <p class="text-xl text-gray-600 mb-8 leading-relaxed">
            We are a vibrant Seventh-day Adventist Christian community in Nyamata, Rwanda. 
            Our mission is simple: To Love God, love people, and prepare for Christ’s return.
        </p>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="p-6 bg-gray-50 rounded-2xl shadow-soft">
                <h3 class="font-bold text-warm-gold mb-2">Our Mission</h3>
                <p>Spreading the Three Angels' Messages to the world.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-2xl shadow-soft">
                <h3 class="font-bold text-warm-gold mb-2">Our Hope</h3>
                <p>The blessed hope of Jesus Christ's soon second coming.</p>
            </div>
            <div class="p-6 bg-gray-50 rounded-2xl shadow-soft">
                <h3 class="font-bold text-warm-gold mb-2">Our Community</h3>
                <p>A family that grows together in grace and truth.</p>
            </div>
        </div>
    </section>

    <section id="services" class="bg-deep-blue py-20 px-6 text-white">
        <div class="max-w-7xl mx-auto">
            <div class="flex justify-between items-center mb-12">
                <h2 class="text-4xl font-bold">Service Times</h2>
                <?php if($isSabbathService): ?>
                    <span class="bg-red-500 animate-pulse px-4 py-1 rounded-full text-sm font-bold">LIVE SERVICE IN PROGRESS</span>
                <?php endif; ?>
            </div>
            <div class="grid md:grid-cols-4 gap-6">
                <div class="border border-white/20 p-8 rounded-2xl hover:bg-white/5 transition">
                    <h3 class="text-warm-gold font-bold text-lg mb-2">Sabbath School</h3>
                    <p class="text-2xl">Saturday 8:30 AM</p>
                </div>
                <div class="border border-white/20 p-8 rounded-2xl hover:bg-white/5 transition">
                    <h3 class="text-warm-gold font-bold text-lg mb-2">Divine Worship</h3>
                    <p class="text-2xl">Saturday 10:00 AM</p>
                </div>
                <div class="border border-white/20 p-8 rounded-2xl hover:bg-white/5 transition">
                    <h3 class="text-warm-gold font-bold text-lg mb-2">Midweek Prayer</h3>
                    <p class="text-2xl">Wednesday 6:00 PM</p>
                </div>
                <div class="border border-white/20 p-8 rounded-2xl hover:bg-white/5 transition">
                    <h3 class="text-warm-gold font-bold text-lg mb-2">Youth Fellowship</h3>
                    <p class="text-2xl">Friday 5:00 PM</p>
                </div>
            </div>
        </div>
    </section>

    <section id="ministries" class="py-20 px-6 bg-gray-50">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-deep-blue text-4xl font-bold mb-12">Our Ministries</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-5 gap-6">
                <?php 
                $ministries = ["Children", "Youth", "Women", "Men", "Community Outreach"];
                foreach($ministries as $m): ?>
                <div class="bg-white p-8 rounded-3xl shadow-lg hover:-translate-y-2 transition duration-300">
                    <div class="w-12 h-12 bg-warm-gold/20 rounded-full mx-auto mb-4 flex items-center justify-center">
                        <div class="w-6 h-6 bg-warm-gold rounded-full"></div>
                    </div>
                    <h4 class="font-bold text-deep-blue"><?php echo $m; ?> Ministry</h4>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="visit" class="py-20 px-6 max-w-7xl mx-auto grid md:grid-cols-2 gap-12">
        <div>
            <h2 class="text-deep-blue text-4xl font-bold mb-6">Visit Us</h2>
            <p class="text-gray-600 mb-6">We are located in the heart of Nyamata. Come experience God’s love with us.</p>
            <div class="space-y-4 mb-8">
                <p><strong>Address:</strong> Nyamata, Rwanda</p>
                <p><strong>Email:</strong> info@nyamatasda.org</p>
                <p><strong>Phone:</strong> +250 XXX XXX XXX</p>
            </div>
            <div class="w-full h-64 bg-gray-200 rounded-2xl overflow-hidden flex items-center justify-center text-gray-400">
                [Google Map of Nyamata SDA Church]
            </div>
        </div>
        <div class="bg-white p-8 rounded-3xl shadow-xl border border-gray-100">
            <h3 class="text-2xl font-bold mb-6">Contact Us</h3>
            <form action="#" method="POST" class="space-y-4">
                <input type="text" placeholder="Full Name" class="w-full p-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-warm-gold">
                <input type="email" placeholder="Email Address" class="w-full p-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-warm-gold">
                <textarea placeholder="Your Message" rows="4" class="w-full p-4 rounded-xl border border-gray-200 focus:outline-none focus:ring-2 focus:ring-warm-gold"></textarea>
                <button type="submit" class="w-full bg-deep-blue text-white py-4 rounded-xl font-bold hover:bg-opacity-90 transition">Send Message</button>
            </form>
        </div>
    </section>

    <footer class="bg-deep-blue text-white/70 py-12 px-6">
        <div class="max-w-7xl mx-auto grid md:grid-cols-3 gap-12 text-center md:text-left">
            <div>
                <h4 class="text-white font-bold text-xl mb-4">Nyamata SDA</h4>
                <p>A Seventh-day Adventist community dedicated to sharing the love of Christ in Rwanda.</p>
            </div>
            <div>
                <h4 class="text-white font-bold mb-4">Quick Links</h4>
                <ul class="space-y-2">
                    <li><a href="#about" class="hover:text-warm-gold">About Us</a></li>
                    <li><a href="#ministries" class="hover:text-warm-gold">Ministries</a></li>
                    <li><a href="#sermons" class="hover:text-warm-gold">Sermons</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-4">Sabbath Services</h4>
                <p>Saturday 8:30 AM - 1:00 PM</p>
                <p class="mt-4 text-warm-gold">© <?php echo date('Y'); ?> Nyamata SDA Church</p>
            </div>
        </div>
    </footer>

</body>
</html>