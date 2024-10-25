<?php
require_once '../models/Job.php';

class JobController {
    private $jobModel;

    public function __construct() {
        $this->jobModel = new Job();
    }

    public function postJob() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $title = $_POST['title'];
            $description = $_POST['description'];
            $employer_id = $_SESSION['user_id']; // Assuming the user is logged in

            if ($this->jobModel->postJob($title, $description, $employer_id)) {
                header("Location: ../public/employer_dashboard.php"); // Redirect after successful posting
                exit();
            } else {
                echo "Job posting failed.";
            }
        }

        include '../views/post_job_form.php'; // Create this view for job posting
    }

    public function listJobs() {
        $jobs = $this->jobModel->getAllJobs();
        include '../views/job_list.php'; // Create this view to display the job listings
    }
}
?>
