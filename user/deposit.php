<?php
include '../include/koneksi.php';
session_start();
if (isset($_SESSION['is_login']) && $_SESSION['is_admin'] == 0) {
} else {
    header('Location: ../login.php');
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nominal = $_POST['nominal'];
    $ekstensi_diperbolehkan    = array('png', 'jpg');
    $bukti_transaksi = $_FILES['bukti_deposit']['name'];
    $x = explode('.', $bukti_transaksi);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['bukti_deposit']['size'];
    $file_tmp = $_FILES['bukti_deposit']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            move_uploaded_file($file_tmp, '../uploads/' . $bukti_transaksi);
            $query = mysqli_query($conn, "INSERT INTO deposit (id_deposit, id_user,total_deposit, bukti_deposit) values('', '{$_SESSION['id_user']}', '$nominal', '$bukti_transaksi')");
            if ($query) {
                echo 'FILE BERHASIL DI UPLOAD';
            } else {
                echo 'GAGAL MENGUPLOAD GAMBAR';
            }
        } else {
            echo 'UKURAN FILE TERLALU BESAR';
        }
    } else {
        echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
    }
}
$data_deposit = mysqli_query($conn, "SELECT * FROM deposit where id_user='{$_SESSION['id_user']}'")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Deposit Form</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Form Deposit</h4>
                        <form method="POST" enctype="multipart/form-data">
                            <div>
                                <label for="nominal">Nominal Deposit:</label>
                                <input class="form-control" type="text" name="nominal" id="nominal" required>
                            </div>
                            <div>
                                <label for="bukti_transaksi">Bukti Transaksi:</label>
                                <input class="form-control" type="file" name="bukti_deposit" id="bukti_transaksi" required accept="image/*">
                            </div>
                            <div>
                                <div class="btn-group clearfix">

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h4>Riwayat Deposit</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id Deposit</th>
                                    <th>Tanggal Deposit</th>
                                    <th>Nominal</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_deposit as $row) : ?>
                                    <tr>
                                        <td><?= $row['id_deposit'] ?></td>
                                        <td><?= $row['tanggal_deposit'] ?></td>
                                        <td><?= $row['total_deposit'] ?></td>
                                        <td><?= $row['status'] ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>


</body>

</html>