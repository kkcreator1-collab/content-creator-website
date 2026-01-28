<?php
// Database credentials
$host = 'dpg-d5ru0c1r0fns739ja0dg-a';
$db = 'content_creator_website';
$user = 'content_creator_website_user';
$pass = 'kKEQMQkX3DxkcMbHIW5V4gbDJuDNoXCq';

// Native PDO DSN for PostgreSQL
$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$user;password=$pass";

// --- CONNECTION TEST ---
try {
    $pdo_test = new PDO($dsn);
    $pdo_test->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo_test = null;
} catch (PDOException $e) {
    echo "<script>alert('⚠️ Database Connection Failed: " . addslashes($e->getMessage()) . "');</script>";
}

// --- FORM PROCESSING ---
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $pdo = new PDO($dsn);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Table creation
        $pdo->exec("CREATE TABLE IF NOT EXISTS registrations (
			id SERIAL PRIMARY KEY,
			fullname VARCHAR(255) NOT NULL,
			email VARCHAR(255) NOT NULL,
			portfolio VARCHAR(255),
			category VARCHAR(50),
			mobile VARCHAR(20),
			address TEXT,
			image VARCHAR(255),
			created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
		)");

        // 1. IMAGE UPLOAD LOGIC
        $imageName = "";
        if (isset($_FILES['user_image']) && $_FILES['user_image']['error'] === 0) {
            $uploadDir = '../assets/uploads/';

            // Create directory if it doesn't exist
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            // Generate a unique name to prevent overwriting
            $fileExtension = pathinfo($_FILES['user_image']['name'], PATHINFO_EXTENSION);
            $imageName = time() . '_' . uniqid() . '.' . $fileExtension;
            $targetPath = $uploadDir . $imageName;

            if (!move_uploaded_file($_FILES['user_image']['tmp_name'], $targetPath)) {
                throw new Exception("Failed to upload image.");
            }
        }

        // 2. DATA INSERTION
        $fullname = htmlspecialchars($_POST['fullname']);
        $email = htmlspecialchars($_POST['email']);
        $portfolio = htmlspecialchars($_POST['portfolio']);
        $category = $_POST['category'];
        $mobile = htmlspecialchars($_POST['mobile']);
        $address = htmlspecialchars($_POST['address']);

        $sql = "INSERT INTO registrations (fullname, email, portfolio, category, mobile, address, image) 
				VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$fullname, $email, $portfolio, $category, $mobile, $address, $imageName]);

        echo "<script>alert('Registration Successful!'); window.location.href='../index.php';</script>";
        exit;

    } catch (Exception $e) {
        echo "<script>alert('❌ Error: " . addslashes($e->getMessage()) . "');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style/style.css">
    <script src="../assets/script/script.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Register - KK CREATOR</title>
</head>

<body class="font-sans">

    <nav class="flex justify-between items-center p-6 max-w-7xl mx-auto">
        <div class="flex flex-col items-center gap-1">
            <div class="flex items-center gap-2">
                <div class="w-10 h-10 bg-white rounded-md flex items-center justify-center text-black font-bold"><img
                        src="../assets/images/icon.jpeg" alt="KK Creator Logo" class="reveal w-12 h-auto opacity-80">
                </div>
                <span class="font-black text-2xl text-black">KK CREATOR</span>
            </div>
        </div>
        <div class="hidden md:flex gap-8 text-sm font-medium">
            <a href="../index.php" class="hover:text-pink-500">Home</a>
            <a href="../pages/about.php" class="hover:text-pink-500">About us</a>
            <a href="../pages/work.php" class="hover:text-pink-500">Work</a>
            <a href="../pages/info.php" class="hover:text-pink-500">Info</a>
            <a href="../pages/participants.php" class="hover:text-pink-500">Participants</a>
        </div>
        <button class="bg-gradient-to-r from-pink-500 to-purple-600 px-6 py-2 rounded-full text-sm">Get Started</button>
    </nav>

    <section class="max-w-2xl mx-auto py-16 px-6">
        <div class="text-center mb-10">
            <h1 class="text-4xl font-bold mb-4">Join the Competition</h1>
            <p class="text-gray-400">Fill out the details below to register for the 3C Pure Gold Trophy event.</p>
        </div>

        <form class="glass-card p-8 rounded-3xl space-y-6 shadow-xl border border-white/10"
            action="../pages/register.php" method="POST" enctype="multipart/form-data">
            <div>
                <label class="block text-sm font-medium mb-2">Full Name <span class="text-red-500">*</span></label>
                <input type="text" name="fullname" placeholder="Enter name" required
                    class="w-full bg-white/5 border border-white/20 rounded-xl px-4 py-3 focus:outline-none focus:border-pink-500 transition-colors">
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Email Address <span class="text-red-500">*</span></label>
                <input type="email" name="email" placeholder="email@example.com" required
                    class="w-full bg-white/5 border border-white/20 rounded-xl px-4 py-3 focus:outline-none focus:border-pink-500 transition-colors">
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">Channel/Portfolio Link <span
                        class="text-red-500">*</span></label>
                <input type="url" name="portfolio" placeholder="https://..." required
                    class="w-full bg-white/5 border border-white/20 rounded-xl px-4 py-3 focus:outline-none focus:border-pink-500 transition-colors">
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">Category <span class="text-red-500">*</span></label>
                <select name="category" required
                    class="w-full bg-white/5 border border-white/20 rounded-xl px-4 py-3 focus:outline-none focus:border-pink-500 transition-colors appearance-none">
                    <option class="bg-slate-900">Nano</option>
                    <option class="bg-slate-900">Micro</option>
                    <option class="bg-slate-900">Macro</option>
                    <option class="bg-slate-900">Mega</option>
                </select>
            </div>

            <div>
                <label class="block text-sm font-medium mb-2">Mobile Number <span class="text-red-500">*</span></label>
                <input type="tel" name="mobile" placeholder="Enter your mobile number" required
                    class="w-full bg-white/5 border border-white/20 rounded-xl px-4 py-3 focus:outline-none focus:border-pink-500 transition-colors">
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Full Address <span class="text-red-500">*</span></label>
                <textarea name="address" placeholder="Enter your address" required
                    class="w-full bg-white/5 border border-white/20 rounded-xl px-4 py-3 focus:outline-none focus:border-pink-500 transition-colors h-24"></textarea>
            </div>
            <div>
                <label class="block text-sm font-medium mb-2">Upload Image <span class="text-red-500">*</span></label>
                <input type="file" name="user_image" required
                    class="w-full bg-white/5 border border-white/20 rounded-xl px-4 py-2 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-pink-500 file:text-white hover:file:bg-pink-600">
            </div>

            <div class="pt-4">
                <button type="submit"
                    class="w-full bg-gradient-to-r from-pink-500 via-purple-500 to-indigo-500 py-4 rounded-xl text-xl font-bold hover:scale-[1.02] transition-transform shadow-lg">
                    Submit Registration 🚀
                </button>
            </div>
        </form>
    </section>

    <footer class="text-center mt-20 py-10 bg-black/20">
        <p class="text-gray-400">© 2026 KK CREATOR. Powered by Socio Commerce.</p>
    </footer>

</body>

</html>