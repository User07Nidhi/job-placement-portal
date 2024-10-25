<?php
session_start();

// Redirect to login page if user is not logged in
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'employer') {
    header("Location: login.php");
    exit();
}

echo "Welcome to the Employer Dashboard!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employer Dashboard</title>
    <h2>Employer Dashboard</h2>
    <p>Here you can post new jobs and view job applications.</p>
    <!DOCTYPE html>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #E7FBE6;
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
            text-align:center;
        }
        .card-body {
            background-color: #ffffff;
            border-radius: 5px;
            
        }
        .card-title {
            font-size: 1.25rem; /* Larger font size for card title */
            color: #343a40; /* Darker color for better contrast */
            margin-bottom: 0.5rem; /* Space below the title */
            font-weight: bold; /* Bold text for emphasis */
        }
        .card-text {
            font-size: 1rem; /* Standard font size for card text */
            color: #6c757d; /* Muted color for less emphasis */
            margin-bottom: 1rem; /* Space below the text */
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
                        <li class="nav-item">
                            <a class="nav-link active" href="dashboard.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="view_jobs.php">View Jobs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="my_applications.php">My Applications</a>
                        </li>
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
                                <h5 class="card-title">Applier</h5>
                                <p class="card-text">Krisha gandhi - Vadodara</p>
                                <a href="#" class="btn btn-primary">Check profile</a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Applier</h5>
                                <p class="card-text">Nidhishree Roy - Vadodara</p>
                                <a href="#" class="btn btn-primary">Check profile</a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Applier</h5>
                                <p class="card-text">Trisha Sharma - Vadodara</p>
                                <a href="#" class="btn btn-primary">Check profile</a>
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
