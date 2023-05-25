<?php
session_start(); // Mulai sesi

include '../include/koneksi.php';

// Cek apakah pengguna telah login dan merupakan administrator
if (!isset($_SESSION['is_login']) || $_SESSION['is_admin'] != 1) {
    header('Location: ../login.php'); // Redirect ke halaman login
    exit(); // Hentikan eksekusi skrip
}

// Query untuk mengambil data pengguna dari database
$data = mysqli_query($conn, "SELECT * FROM user");

// Check if the edit form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the edited values
    $id = $_POST['id'];
    $newUsername = $_POST['newUsername'];
    $newEmail = $_POST['newEmail'];
    $newNohp = $_POST['newNohp'];
    $newPassword = $_POST['newPassword'];

    // Update the record in the database
    mysqli_query($conn, "UPDATE user SET username = '$newUsername', email = '$newEmail', nohp = '$newNohp', password = '$newPassword' WHERE id = $id");

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
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <td>No</td>
                        <td>Username</td>
                        <td>Email</td>
                        <td>No HP</td>
                        <td>Password</td>
                        <td>Hapus</td>
                        <td>Edit</td>
                    </tr>
                    <?php $nomor = 1; ?>
                    <?php while ($row = mysqli_fetch_assoc($data)) : ?>
                        <tr>
                            <td><?= $nomor++ ?></td>
                            <td><?= $row['username'] ?></td>
                            <td><?= $row['email'] ?></td>
                            <td><?= $row['nohp'] ?></td>
                            <td><?= $row['password'] ?></td>
                            <td>
                                <a href="hapus.php?primary=id&id=<?= $row['id'] ?>&table=user">Hapus</a>
                            </td>
                            <td>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editModal<?= $row['id'] ?>">
                                    Edit
                                </button>

                                <!-- Modal -->
                                <div class="modal fade" id="editModal<?= $row['id'] ?>" tabindex="-1" aria-labelledby="editModalLabel<?= $row['id'] ?>" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="editModalLabel<?= $row['id'] ?>">Edit User</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST" action="">
                                                    <input type="hidden" name="id" value="<?= $row['id'] ?>">
                                                    <div class="mb-3">
                                                        <label for="newUsername<?= $row['id'] ?>" class="form-label">New Username</label>
                                                        <input type="text" class="form-control" id="newUsername<?= $row['id'] ?>" name="newUsername" placeholder="New Username">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="newEmail<?= $row['id'] ?>" class="form-label">New Email</label>
                                                        <input type="email" class="form-control" id="newEmail<?= $row['id'] ?>" name="newEmail" placeholder="New Email">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="newNohp<?= $row['id'] ?>" class="form-label">New No HP</label>
                                                        <input type="text" class="form-control" id="newNohp<?= $row['id'] ?>" name="newNohp" placeholder="New No HP">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label for="newPassword<?= $row['id'] ?>" class="form-label">New Password</label>
                                                        <input type="password" class="form-control" id="newPassword<?= $row['id'] ?>" name="newPassword" placeholder="New Password">
                                                    </div>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kW3gyH/qxGq5UKl6AymepVMyZ8ud73ig0aTQcM7obQgckJ0Ae01GvVGF5zLWt/hF" crossorigin="anonymous"></script>
</body>

</html>