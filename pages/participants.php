<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <script src="../assets/script/script.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>3C Participants - KK CREATOR</title>
</head>

<body class="font-sans bg-black text-white">

    <nav class="flex justify-between items-center p-6 max-w-7xl mx-auto">
        <div class="flex flex-col items-center gap-1">
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-white rounded-md flex items-center justify-center text-black font-bold">
                    <img src="../assets/images/icon.jpeg" alt="KK Creator Logo" class="reveal w-12 h-auto opacity-80">
                </div>
                <span class="font-black text-2xl text-black">KK CREATOR</span>
            </div>
        </div>
        <div class="hidden md:flex gap-8 text-sm font-medium">
            <a href="../index.php" class="hover:text-pink-500">Home</a>
            <a href="../pages/about.php" class="hover:text-pink-500">About us</a>
            <a href="../pages/work.php" class="hover:text-pink-500">Work</a>
            <a href="../pages/info.php" class="hover:text-pink-500">Info</a>
        </div>
        <button class="bg-gradient-to-r from-pink-500 to-purple-600 px-6 py-2 rounded-full text-sm">Get Started</button>
    </nav>

    <section class="max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 px-6 py-10">
        <button class="glass-btn">
            Competition System
        </button>

        <button class="glass-btn" onclick="location.href='../pages/prize.php';">
            Prize List
        </button>

        <button class="glass-btn">
            Upload Video
        </button>

        <button class="glass-btn">
            Script Board
        </button>

        <button class="glass-btn">
            Time & Duration
        </button>

        <button class="glass-btn">
            View Competition Details
        </button>
    </section>

    </section>
</body>

</html>