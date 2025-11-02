<?php
session_start();

// Dummy akun
$dummy_user = "saipul";
$dummy_pass = "12345";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === $dummy_user && $password === $dummy_pass) {
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

