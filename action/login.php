<?php
include '../include/koneksi.php';
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' && password = '$password'");
    $cek = mysqli_num_rows($query);
    if ($cek == 1) {
        $data_user = mysqli_fetch_assoc($query);
        if ($data_user['is_admin'] == '1') {
            $_SESSION['is_admin'] = $data_user['is_admin'];
            $_SESSION['id_user'] = $data_user['id'];
            $_SESSION['username'] = $data_user['username'];
            $_SESSION['email'] = $data_user['email'];
            $_SESSION['nohp'] = $data_user['nohp'];
            $_SESSION['password'] = $data_user['password'];
            $_SESSION['is_login'] = true;
            header('Location: ../admin/index.php');
        } else {
            $_SESSION['is_admin'] = $data_user['is_admin'];
            $_SESSION['id_user'] = $data_user['id'];
            $_SESSION['username'] = $data_user['username'];
            $_SESSION['email'] = $data_user['email'];
            $_SESSION['nohp'] = $data_user['nohp'];
            $_SESSION['password'] = $data_user['password'];
            $_SESSION['is_login'] = true;
            header('Location: ../user/index.php');
        }
    } else {
        header('Location: ../login.php');
    }
}
