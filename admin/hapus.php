<?php
include '../include/koneksi.php';
$primary = $_GET['primary'];
$id = $_GET['id'];
$table = $_GET['table'];

mysqli_query($conn, "DELETE FROM $table WHERE $primary = '$id'");
header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>