<?php
include '../include/koneksi.php';
session_start();
if (isset($_SESSION['is_login']) && $_SESSION['is_admin'] == 1) {
} else {
    header('Location: ../login.php');
}

$data_deposit = mysqli_query($conn, "SELECT * FROM deposit");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Data Deposit User</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <h4>Data Deposit User</h4>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID Deposit</th>
                            <th>ID User</th>
                            <th>Tanggal Deposit</th>
                            <th>Total Deposit</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($data_deposit)) : ?>
                            <tr>
                                <td><?= $row['id_deposit'] ?></td>
                                <td><?= $row['id_user'] ?></td>
                                <td><?= $row['tanggal_deposit'] ?></td>
                                <td><?= $row['total_deposit'] ?></td>
                                <td><?= $row['status'] ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>