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
</head>
<body>
<div class="slideshow-container">
        <div class="slide" style="background-image: url('assets/background1.jpg');"></div>
        <div class="slide" style="background-image: url('assets/background2.jpg');"></div>
        <div class="slide" style="background-image: url('assets/background3.jpg');"></div>
    </div>

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
            <div class="filter-section">
                <select name="student" id="student-select">
                    <option value="">Select/search a student</option>
                </select>
                <select name="cohort" id="cohort-select">
                    <option value="">Select/search a cohort</option>
                </select>
            </div>
        </div>

        <div class="metrics">
            <div class="metric-card">
                <i class="fas fa-user-check"></i>
                <div class="metric-content">
                    <h3>Attendance Average</h3>
                    <p>N/A</p>
                </div>
            </div>
            <div class="metric-card">
                <i class="fas fa-tasks"></i>
                <div class="metric-content">
                    <h3>Assignment Completion</h3>
                    <p>N/A</p>
                </div>
            </div>
            <div class="metric-card">
                <i class="fas fa-users"></i>
                <div class="metric-content">
                    <h3>Total Students</h3>
                    <p>N/A</p>
                </div>
            </div>
        </div>

        <div class="chart">
            <h3>Cohort Performance Over Time</h3>
            <div class="chart-placeholder">
                <p>📉 No Data Available</p>
            </div>
        </div>
    </main>
</body>
</html>
