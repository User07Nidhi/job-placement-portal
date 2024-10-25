<?php
require_once '../models/User.php';

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];
            $role = $_POST['role'];

            if ($this->userModel->register($email, $password, $role)) {
                header("Location: ../public/login.php");
                exit();
            } else {
                echo "Registration failed.";
            }
        }

        include '../views/register_form.php';
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->userModel->login($email, $password);
            if ($user) {
                session_start();
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['role'] = $user['role'];
                header("Location: ../public/student_dashboard.php"); // or employer_dashboard.php based on role
                exit();
            } else {
                echo "Invalid email or password.";
            }
        }

        include '../views/login_form.php';
    }
}
?>
