<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Placement Portal</title>
</head>
<style>
    main {
        padding: 15px;
    }

    h1 {
        font-size: 1.8em; /* Adjust heading size */
    }

    h2 {
        font-size: 1.5em; /* Adjust heading size */
    }
    footer {
        background: #16423C; /* Dark background */
        color: white; /* White text */
        text-align: center;
        padding: 15px;
        position: relative;
        bottom: 0;
        width: 100%;
            margin-top: 20px; /* Add some space above the footer */
    }
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        background-color: #C4DAD2;
        color: #229799;
        line-height: 1.6;
    }

    /* Header styles */
    header {
        background: #16423C; /* Green background */
        color: white; /* White text */
        padding: 20px;
        text-align: center;
    }

    /* Main content styles */
    main {
        padding: 20px;
        max-width: 800px;
        margin: auto;
        background: white;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        border-radius: 8px;
    }

    /* Heading styles */
    h1, h2 {
        margin-bottom: 20px;
    }

    /* Paragraph styles */
    p {
        margin-bottom: 15px;
    }

    /* Link styles */
    a {
        color: #4CAF50; /* Link color */
        text-decoration: none; /* Remove underline */
    }

    a:hover {
        text-decoration: underline; /* Add underline on hover */
    }
</style>
<body>
    <header>
        <h1>Welcome to the Job Placement Portal</h1>
    </header>
    <main>
        <h2>Your Gateway to Opportunities</h2>
        <p>Find the best jobs or post job openings to connect with potential candidates.</p>
        <?php if (isset($_SESSION['user_id'])): ?>
            <p>Hello, <?php echo htmlspecialchars($_SESSION['role']); ?>!</p>
            <p><a href="student_dashboard.php">Go to Student Dashboard</a></p>
            <p><a href="employer_dashboard.php">Go to Employer Dashboard</a></p>
            <p><a href="logout.php">Logout</a></p>
        <?php else: ?>
            <p><a href="register.php">Register</a> or <a href="login.php">Login</a> to continue.</p>
        <?php endif; ?>
    </main>
    <footer>
        <p>&copy; <?php echo date("Y"); ?> Job Placement Portal. All rights reserved.</p>
    </footer>
</body>
</html>
