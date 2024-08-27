<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
$username = htmlspecialchars($_SESSION['username']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to right, #1f4037, #99f2c8); /* Gradient background */
            color: #333;
            margin: 0;
            padding: 0;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
            background-color: #0f2027; /* Dark background for header */
            color: white;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .user-info {
            display: flex;
            align-items: center;
        }

        .user-info i {
            margin-right: 10px;
            font-size: 20px;
        }

        .menu {
            background-color: #16222A; /* Dark background for menu */
            padding: 15px;
        }

        .menu ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: space-around;
        }

        .menu ul li a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            display: block;
            transition: background 0.3s;
        }

        .menu ul li a:hover {
            background-color: #3a7bd5; /* Hover effect */
            border-radius: 5px;
        }

        .dashboard {
            padding: 20px;
        }

        .dashboard-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .dashboard-header h2 {
            font-size: 28px;
            color: #0f2027; /* Matching the header color */
        }

        .announcements {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: 0 auto;
            text-align: center;
        }

        .announcements h3 {
            font-size: 22px;
            color: #3a7bd5; /* Highlighted color */
            margin-bottom: 10px;
        }

        .announcements p {
            font-size: 16px;
            color: #555;
        }

        .footer {
            text-align: center;
            padding: 20px;
            background-color: #16222A;
            color: white;
            position: fixed;
            width: 100%;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header class="header">
        <div class="logo">🚀 Nebula - dock</div>
        <div class="user-info">
            <i class="fas fa-user-circle"></i>
            <span>Welcome, <?php echo $username; ?></span>
        </div>
    </header>

    <!-- Navigation Menu -->
    <nav class="menu">
        <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
            <li><a href="newuser.html">Create New User</a></li>
            <li><a href="viewusers.html">View Users</a></li>
        </ul>
    </nav>

    <main class="dashboard">
        <div class="dashboard-header">
            <h2>Student Dashboard</h2>
        </div>

        <!-- Announcements or Recent Activities Section -->
        <div class="announcements">
            <h3>Announcements</h3>
            <p>No new announcements at this time.</p>
        </div>
    </main>

    <footer class="footer">
        &copy; 2024 Nebula Dock. All rights reserved.
    </footer>
</body>
</html>
