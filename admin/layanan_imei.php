<?php
session_start(); // Mulai sesi
include '../include/koneksi.php';
$data = mysqli_query($conn, "SELECT * from produk");
if (isset($_SESSION['is_login']) && $_SESSION['is_admin'] == 1) {
} else {
    header('Location: ../login.php');
}
// Function to retrieve the product details based on the ID
function getProduct($id)
{
    global $conn;
    $query = mysqli_query($conn, "SELECT * FROM produk WHERE id_imei = '$id'");
    return mysqli_fetch_assoc($query);
}

// Check if the form is submitted for editing
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama_layanan = $_POST['nama_layanan'];
    $harga_layanan = $_POST['harga_layanan'];
    $tipe = $_POST['tipe'];

    // Perform the update query here
    mysqli_query($conn, "UPDATE produk SET nama_layanan = '$nama_layanan', harga_layanan = '$harga_layanan', tipe = '$tipe' WHERE id_imei = '$id'");
    // Redirect to the current page to refresh the data
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="card">
        <div class="card-header">
            Featured
        </div>
        <div class="card-body">
            <table class="table">
                <tr>
                    <td>No</td>
                    <td>Nama Layanan</td>
                    <td>Harga Layanan</td>
                    <td>Tipe</td>
                    <td>Hapus</td>
                    <td>Edit</td>
                </tr>
                <?php $no = 1; ?>
                <?php foreach ($data as $row) : ?>
                    <tr>
                        <td><?= $no++ ?></td>
                        <td><?= $row['nama_layanan']; ?></td>
                        <td><?= $row['harga_layanan']; ?></td>
                        <td><?= $row['tipe']; ?></td>
                        <td>
                            <a href="hapus.php?primary=id_imei&id=<?= $row['id_imei'] ?>&table=produk">Hapus</a>
                        </td>
                        <td>
                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id_imei'] ?>">Edit</button>
                            <!-- Edit Modal -->
                            <div class="modal fade" id="editModal<?= $row['id_imei'] ?>" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Edit Product</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="">
                                                <input type="hidden" name="id" value="<?= $row['id_imei'] ?>">
                                                <div class="mb-3">
                                                    <label for="nama_layanan" class="form-label">Nama Layanan</label>
                                                    <input type="text" class="form-control" id="nama_layanan" name="nama_layanan" value="<?= $row['nama_layanan'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="harga_layanan" class="form-label">Harga Layanan</label>
                                                    <input type="text" class="form-control" id="harga_layanan" name="harga_layanan" value="<?= $row['harga_layanan'] ?>">
                                                </div>
                                                <div class="mb-3">
                                                    <label for="tipe" class="form-label">Tipe</label>
                                                    <input type="text" class="form-control" id="tipe" name="tipe" value="<?= $row['tipe'] ?>">
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach ?>
            </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>