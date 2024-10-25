<?php
require_once '../config/config.php';

class Job {
    private $db;

    public function __construct() {
        $this->db = new PDO("mysql:host=localhost;dbname=job_placement", 'root', '');
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    // Method for posting a job
    public function postJob($title, $description, $employer_id) {
        $sql = "INSERT INTO jobs (title, description, employer_id) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$title, $description, $employer_id]);
    }

    // Method to fetch all jobs
    public function getAllJobs() {
        $sql = "SELECT * FROM jobs";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    // Method to get job by ID
    public function getJobById($id) {
        $sql = "SELECT * FROM jobs WHERE id = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch();
    }
}
?>
