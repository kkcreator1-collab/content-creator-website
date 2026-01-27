<?php
// SET YOUR SECRET KEY HERE
$secret_key = "my_private_access_2026";

// Check if the key is present and correct
if (!isset($_GET['access']) || $_GET['access'] !== $secret_key) {
    echo "<script>
        alert('❌ Incorrect Secret Key. Access Denied.');
        window.close();
    </script>";
    exit;
}

// Database credentials for Render PostgreSQL
$host = 'dpg-d5ru0c1r0fns739ja0dg-a';
$db = 'content_creator_website';
$user = 'content_creator_website_user';
$pass = 'kKEQMQkX3DxkcMbHIW5V4gbDJuDNoXCq';
$dsn = "pgsql:host=$host;port=5432;dbname=$db;user=$user;password=$pass";

try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $pdo->query("SELECT * FROM registrations ORDER BY created_at DESC");
    $registrations = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("❌ Database Error: " . htmlspecialchars($e->getMessage()));
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Admin - Restricted Access</title>
</head>

<body class="bg-slate-900 text-white p-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold mb-10 text-pink-500">Stored Registrations (Admin Only)</h1>

        <div class="overflow-x-auto bg-white/5 rounded-3xl border border-white/10">
            <table class="w-full text-left">
                <thead>
                    <tr class="border-b border-white/10">
                        <th class="p-4">Image</th>
                        <th class="p-4">Full Name</th>
                        <th class="p-4">Email</th>
                        <th class="p-4">Category</th>
                        <th class="p-4">Mobile</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($registrations as $row): ?>
                        <tr class="border-b border-white/5">
                            <td class="p-4">
                                <img src="../assets/uploads/<?php echo htmlspecialchars($row['image']); ?>"
                                    class="w-12 h-12 rounded-lg object-cover">
                            </td>
                            <td class="p-4"><?php echo htmlspecialchars($row['fullname']); ?></td>
                            <td class="p-4"><?php echo htmlspecialchars($row['email']); ?></td>
                            <td class="p-4"><?php echo htmlspecialchars($row['category']); ?></td>
                            <td class="p-4"><?php echo htmlspecialchars($row['mobile']); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>