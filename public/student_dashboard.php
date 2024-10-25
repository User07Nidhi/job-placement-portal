<?php
session_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'student') {
    header("Location: login.php");
    exit();
}

echo "Welcome to the Student Dashboard!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
    <h2>Student Dashboard</h2>
    <p>Here you can browse available jobs and apply for them.</p>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #D1E9F6;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #343a40;
        }
        .sidebar {
            background-color: #ffffff;
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .sidebar h5 {
            color: #343a40;
        }
        .nav-link {
            color: #495057;
        }
        .nav-link.active {
            font-weight: bold;
            color: #007bff;
        }
        .card {
            margin-bottom: 20px;
            border: none;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .card-body {
            background-color: #ffffff;
            border-radius: 5px;
        }
        .btn-primary {
            background-color: #ffffff;
            border: none;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .logout-link {
            display: inline-block;
            margin-top: 20px;
            color: #007bff;
            text-decoration: none;
        }
        .logout-link:hover {
            text-decoration: underline;
        }
    </style>
<body>

    <div class="container-fluid">
        <div class="row">
            <nav class="col-md-2 d-none d-md-block bg-light sidebar">
                <div class="sidebar-sticky">
                    <h5>Dashboard</h5>
                    <ul class="nav flex-column">
                        <div class="col">
                            <li class="nav-item">
                                <a class="nav-link active" href="dashboard.php">Home</a>
                            </li>
                        </div>
                        <div class="col">
                            <li class="nav-item">
                                <a class="nav-link" href="view_jobs.php">View Jobs</a>
                            </li>
                        </div>
                        <div class="col">
                            <li class="nav-item">
                                <a class="nav-link" href="my_applications.php">My Applications</a>
                            </li>
                    </div> 
                    </ul>
                </div>
            </nav>

            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                <h2>Welcome</h2>
                <div class="row">
                    <!-- Job Listings -->
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Web developer</h5>
                                <p class="card-text">N10 - Ahemdabad</p>
                                <a href="#" class="btn btn-primary">Apply</a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Software Engineer</h5>
                                <p class="card-text">Parthvitech - Vadodara</p>
                                <a href="#" class="btn btn-primary">Apply</a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">FullStack developer</h5>
                                <p class="card-text">ADRI IT Solutions - Vadodara</p>
                                <a href="#" class="btn btn-primary">Apply</a>
                            </div>
                        </div>
                    </div>
                    <!-- Repeat for more job listings -->
                </div>
            </main>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <a href="logout.php">Logout</a>
</body>
</html>
