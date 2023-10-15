<?php
require_once("db_connection.php");
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve and sanitize form data
    $loginEmail = filter_var($_POST["loginEmail"], FILTER_SANITIZE_EMAIL);
    $loginPassword = $_POST["loginPassword"];

    if (empty($loginEmail) || empty($loginPassword)) {
        echo "Both email and password are required.";
    } else {
        $sql = "SELECT admin_id, admin_username, admin_password FROM admin WHERE admin_email = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $loginEmail);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_bind_result($stmt, $admin_Id, $admin_username, $admin_password);
        mysqli_stmt_fetch($stmt);
        mysqli_stmt_close($stmt);

        if (password_verify($loginPassword, $admin_password)) {
            $_SESSION["admin_id"] = $admin_Id;
            $_SESSION["admin_username"] = $admin_username;

            header("Location: admin_dashboard.php");
            exit();
        } else {
            echo "Invalid email or password.";
        }

        mysqli_close($conn);
    }
}
?>
