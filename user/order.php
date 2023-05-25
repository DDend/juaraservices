<?php
include '../include/koneksi.php';
session_start();
if (isset($_SESSION['is_login']) && $_SESSION['is_admin'] == 0) {
} else {
    header('Location: ../login.php');
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id_imei = $_POST['id_imei'];
    $ekstensi_diperbolehkan    = array('png', 'jpg');
    $screenshoot_imei = $_FILES['screenshoot_imei']['name'];
    $x = explode('.', $screenshoot_imei);
    $ekstensi = strtolower(end($x));
    $ukuran    = $_FILES['screenshoot_imei']['size'];
    $file_tmp = $_FILES['screenshoot_imei']['tmp_name'];

    if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
        if ($ukuran < 1044070) {
            move_uploaded_file($file_tmp, '../screenshoot/' . $screenshoot_imei);
            $query = mysqli_query($conn, "INSERT INTO transaksi (id_transaksi, id_user,id_imei,screenshoot_imei) values('', '{$_SESSION['id_user']}', '$id_imei', '$screenshoot_imei')");
            if ($query) {
                echo "<script> 
                    alert('Order anda berhasil di kirim !');
                </script>";
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
$dataproduk = mysqli_query($conn, "SELECT * FROM produk");
$data_transaksi = mysqli_query($conn, "SELECT * FROM transaksi JOIN produk on produk.id_imei = transaksi.id_imei where id_user='{$_SESSION['id_user']}'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Order Form</title>
</head>

<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h4>Form Order</h4>
                        <form method="POST" enctype="multipart/form-data">
                            <div>
                                <label for="" class="form-label">Produk</label>
                                <select name="id_imei" id="id_imei" class="form-control">
                                    <?php foreach ($dataproduk as $prd) : ?>
                                        <option value="<?= $prd['id_imei'] ?>"><?= $prd['nama_layanan'] ?> = <?= $prd['harga_layanan'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div>
                                <label for="bukti_transaksi">Screenshoot Imei:</label>
                                <input class="form-control" type="file" name="screenshoot_imei" id="bukti_transaksi" required accept="image/*">
                            </div>
                            <div>
                                <div class="btn-group clearfix">

                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <h4>Riwayat Transaksi</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Id Transaksi</th>
                                    <th>Tanggal Transaksi</th>
                                    <th>nama_layanan</th>
                                    <th>Harga Layanan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data_transaksi as $row) : ?>
                                    <tr>
                                        <td><?= $row['id_transaksi'] ?></td>
                                        <td><?= $row['tanggal_transaksi'] ?></td>
                                        <td><?= $row['nama_layanan'] ?></td>
                                        <td><?= $row['harga_layanan'] ?></td>
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