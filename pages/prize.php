<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../assets/style/style.css">
	<script src="../assets/script/script.js"></script>
	<script src="https://cdn.tailwindcss.com"></script>
	<title>Prize List - KK CREATOR</title>
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

	<header class="text-center py-16 px-4">
		<div class="flex flex-col items-center justify-center gap-6 mb-6">
			<h1 class="reveal text-4xl md:text-6xl font-bold opacity-0">🏆 Prize List</h1>
		</div>
		</div>
	</header>

	<section class="max-w-7xl mx-auto px-6 mb-20">
		<div class="grid grid-cols-1 md:grid-cols-3 gap-8">

			<div class="reveal bg-black/40 p-2 rounded-2xl border border-gray-700 opacity-0">
				<img src="../assets/images/prize1.jpeg" alt="Prize 1" class="w-full h-auto rounded-xl">
			</div>

			<div class="reveal bg-black/40 p-2 rounded-2xl border border-gray-700 opacity-0">
				<img src="../assets/images/prize2.jpeg" alt="Prize 2" class="w-full h-auto rounded-xl">
			</div>

			<div class="reveal bg-black/40 p-2 rounded-2xl border border-gray-700 opacity-0">
				<img src="../assets/images/prize3.jpeg" alt="Prize 3" class="w-full h-auto rounded-xl">
			</div>

			<div class="reveal bg-black/40 p-2 rounded-2xl border border-purple-500/20 opacity-0">
				<img src="../assets/images/prize21.jpeg" alt="Prize 21" class="w-full h-auto rounded-xl">
			</div>

			<div class="reveal bg-black/40 p-2 rounded-2xl border border-pink-500/20 opacity-0">
				<img src="../assets/images/prize50.jpeg" alt="Prize 50" class="w-full h-auto rounded-xl">
			</div>

			<div class="reveal bg-black/40 p-2 rounded-2xl border border-indigo-500/30 opacity-0">
				<img src="../assets/images/prize100.jpeg" alt="Prize 100"
					class="w-full h-auto rounded-xl shadow-lg shadow-indigo-500/20">
			</div>

			<div class="reveal bg-black/40 p-2 rounded-2xl border border-purple-500/30 opacity-0">
				<img src="../assets/images/prize200.jpeg" alt="Prize 200"
					class="w-full h-auto rounded-xl shadow-lg shadow-purple-500/20">
			</div>

			<div class="reveal bg-black/40 p-2 rounded-2xl border border-pink-500/30 opacity-0">
				<img src="../assets/images/prize1000.jpeg" alt="Prize 1000"
					class="w-full h-auto rounded-xl shadow-lg shadow-pink-500/20">
			</div>

			<div class="reveal bg-black/40 p-2 rounded-2xl border border-yellow-500/20 opacity-0">
				<img src="../assets/images/prize_nano_micro.jpeg" alt="Prize Nano Micro"
					class="w-full h-auto rounded-xl">
			</div>

		</div>
	</section>

	<footer class="text-center py-10 bg-black/20">
		<p class="text-gray-400">© <span id="current-year"></span> KK CREATOR. All rights reserved.</p>
	</footer>

</body>

</html>