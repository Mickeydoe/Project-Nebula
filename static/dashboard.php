<?php
session_start();
// Check if user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}

$username = htmlspecialchars($_SESSION['username']);

// Set login time if not already set
if (!isset($_SESSION['login_time'])) {
    $_SESSION['login_time'] = date("Y-m-d H:i:s");
}
$loginTime = $_SESSION['login_time'];

// Fetch user count from the Lambda function via API Gateway
$api_url = "https://njg5vbjhkc.execute-api.us-east-1.amazonaws.com/dev"; // Replace with your API Gateway URL
$user_count = "N/A";

try {
    $response = file_get_contents($api_url);
    $data = json_decode($response, true);
    if (isset($data['user_count'])) {
        $user_count = $data['user_count'];
    } else {
        $user_count = "No user count data";
    }
} catch (Exception $e) {
    // Handle error
    $user_count = "Error fetching user count";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <header class="header">
        <div class="logo">🚀 Nebula - dock</div>
        <div class="user-info">
            <i class="fas fa-user-circle"></i>
            <span>Welcome, <?php echo $username; ?></span>
            <small>Logged in at: <?php echo $loginTime; ?></small>
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
            <p>Number of users: <?php echo $user_count; ?></p>
        </div>

        <!-- Announcements or Recent Activities Section -->
        <div class="announcements">
            <h3>Announcements</h3>
            <p>No new announcements at this time.</p>
        </div>
    </main>

    <footer class="footer">
        &copy; 2024 Nebula. All rights reserved.
    </footer>
</body>
</html>
