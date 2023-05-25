<?php
include '../include/koneksi.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $nohp = $_POST['nohp'];
    $password = $_POST['password'];
    $is_admin = 0;

    mysqli_query($conn, "INSERT INTO user (id, username, email, nohp, password, is_admin) VALUES ('', '$username', '$email', '$nohp', '$password', '$is_admin')");

    // Redirect to the login page
    header('Location: ../login.php');
    exit();
}
?>
