<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/style/style.css">
    <script src="assets/script/script.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Home - KK CREATOR</title>
</head>

<body class="font-sans">

    <nav class="bg-white shadow-md fixed top-0 left-0 w-full z-50">
        <div class="flex justify-between items-center py-1 px-4 max-w-7xl mx-auto">
            <div class="flex flex-col items-center gap-1">
                <div class="flex items-center gap-1 font-bold">
                    <div class="w-10 h-10 bg-white rounded-md flex items-center justify-center"> <img
                            src="assets/images/icon.jpeg" alt="KK Creator Logo"
                            class="w-10 h-10 rounded-md object-contain opacity-80">
                    </div>
                    <span class="font-black text-2xl text-black">KK CREATOR</span>
                </div>
            </div>
            <div class="flex gap-8 text-sm font-medium text-black">
                <a href="index.php" class="hover:text-pink-500">Home</a>
                <a href="pages/about.php" class="hover:text-pink-500">About us</a>
                <a href="pages/work.php" class="hover:text-pink-500">Work</a>
                <a href="pages/info.php" class="hover:text-pink-500">Info</a>
            </div>
            <button class="bg-gradient-to-r from-pink-500 to-purple-600 px-6 py-2 rounded-full text-sm">Get
                Started</button>
    </nav>

    <header class="text-center pt-14 pb-10 px-4">
        <div class="flex flex-col md:flex-row items-center justify-center gap-6 mb-6">

            <!-- Logo Image -->
            <img src="assets/images/icon.jpeg" alt="KK Creator Logo"
                class="reveal w-24 h-auto rounded-lg shadow-lg opacity-0">

            <div class="flex flex-col items-center">
                <div
                    class="inline-block px-8 py-3 rounded-full border border-pink-500 text-pink-400 text-2xl font-black mb-4 shadow-[0_0_20px_rgba(236,72,153,0.6)] uppercase tracking-widest">
                    KK CREATOR PRESENTS
                </div>
                <h1 class="text-4xl md:text-6xl font-bold">Content Creator Competition</h1>
            </div>
        </div>

        <div class="reveal flex justify-center mb-8 opacity-0">
            <img src="assets/images/trophy.png" alt="Trophy" class="w-48 h-auto object-contain trophy-image reveal">
        </div>

        <div class="mt-8 flex justify-center">
            <div class="bg-black/40 p-4 rounded-xl inline-flex items-center gap-3 border border-yellow-500/30">
                <span class="text-2xl">🏆</span>
                <span class="text-yellow-400 font-semibold uppercase tracking-widest">Pure 500 Gram Gold
                    Trophy</span>
                <span class="text-2xl">🏆</span>
            </div>
        </div>
    </header>

    <div class="flex justify-center mb-12">
        <a href="pages/register.php"
            class="bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 px-12 py-4 rounded-full text-2xl font-bold hover:scale-105 transition-transform shadow-lg blink">
            Register Here 🚀
        </a>
    </div>

    <div class="flex justify-center mb-12">
        <a href="pages/participants.php"
            class="bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 px-12 py-4 rounded-full text-2xl font-bold hover:scale-105 transition-transform shadow-lg blink">
            3C Participants
        </a>
    </div>

    <section class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-4 px-6">

        <button class="tricolor-btn">
            Competition System
        </button>

        <button class="tricolor-btn" onclick="location.href='pages/prize.php';">
            Prize List
        </button>

        <button class="tricolor-btn">
            Upload Video
        </button>

        <button class="tricolor-btn">
            Script Board
        </button>

        <button class="tricolor-btn">
            Time & Duration
        </button>

        <button class="tricolor-btn">
            View Competition Details
        </button>

    </section>

    </section>

    <br>
    <br>

    <section class="social-section">
        <p class="social-desc text-2xl font-semibold whitespace-nowrap">
            <h2>Follow Us on Social Media</h2>
        </p>
        <p class="social-desc text-2xl font-semibold whitespace-nowrap">
            Stay connected with us for latest updates, competitions, tips and announcements.
        </p>

        <br>

        <div class="social-box-container flex flex-wrap gap-8 justify-center">
            <!-- Facebook -->
            <div class="social-box facebook h-[350px] flex flex-col justify-between items-center p-6">
                <img src="assets/images/facebook.jpeg" alt="Facebook Icon" class="social-icon">
                <h3>Facebook</h3>
                <p>Join our Facebook community for daily updates and discussions.</p>
                <a href="https://www.facebook.com" target="_blank">Visit Page</a>
            </div>
            <!-- Instagram -->
            <div class="social-box instagram mx-auto">
                <img src="assets/images/instagram.jpeg" alt="Instagram Icon" class="social-icon">
                <h3>Instagram</h3>
                <p>Follow us for reels, stories and behind-the-scenes content.</p>
                <a href="https://www.instagram.com" target="_blank">Follow Now</a>
            </div>
            <!-- YouTube -->
            <div class="social-box youtube h-[350px] flex flex-col justify-between items-center">
                <img src="assets/images/youtube.jpeg" alt="YouTube Icon" class="social-icon">
                <h3>YouTube</h3>
                <p>Subscribe to watch tutorials, events and exclusive videos.</p>
                <a href="https://www.youtube.com" target="_blank">Subscribe</a>
            </div>
            <!-- Snapchat -->
            <div class="social-box snapchat mx-auto">
                <img src="assets/images/snapchat.jpeg" alt="Snapchat Icon" class="social-icon">
                <h3>Snapchat</h3>
                <p>Follow us for daily snaps, updates and behind-the-scenes moments.</p>
                <a href="https://www.snapchat.com" target="_blank">Follow Now</a>
            </div>
            <!-- Twitter -->
            <div class="social-box twitter h-[350px] flex flex-col justify-between items-center">
                <img src="assets/images/twitter.jpeg" alt="Twitter Icon" class="social-icon">
                <h3>Twitter</h3>
                <p>Follow us for latest updates, announcements and trending posts.</p>
                <a href="https://www.x.com" target="_blank">Follow Now</a>
            </div>

        </div>
        </div>

    </section>

    <footer class="text-center mt-20 py-10 bg-black/20">
        <h2 class="text-3xl font-bold mb-2">Grow your career with Socio Commerce</h2>
        <p class="text-gray-400 max-w-2xl mx-auto px-6">Learn how to enhance your online presence, create smarter
            content, and grow faster using AI-powered tools.</p>
        <br>
        <p class="text-gray-400">© <span id="current-year"></span> KK CREATOR. All rights reserved.</p>
    </footer>

</body>

</html>