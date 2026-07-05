<?php
include "../../config/koneksi.php";

// Pencarian
$cari = "";
if (isset($_GET['cari'])) {
    $cari = $_GET['cari'];
    $query = mysqli_query($conn, "SELECT * FROM buku WHERE judul LIKE '%$cari%'");
} else {
    $query = mysqli_query($conn, "SELECT * FROM buku");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Buku</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2 class="text-center mb-4">📚 Data Buku</h2>

    <div class="d-flex justify-content-between mb-3">

        <a href="tambah.php" class="btn btn-success">
            + Tambah Buku
        </a>

        <form method="GET" class="d-flex">

            <input
                type="text"
                name="cari"
                class="form-control me-2"
                placeholder="Cari Judul Buku"
                value="<?= $cari ?>"
            >

            <button class="btn btn-primary">
                Cari
            </button>

        </form>

    </div>

    <table class="table table-bordered table-striped">

        <thead class="table-dark">

            <tr>

                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun</th>
                <th>Aksi</th>

            </tr>

        </thead>

        <tbody>

        <?php

        $no = 1;

        while($data = mysqli_fetch_assoc($query)){

        ?>

        <tr>

            <td><?= $no++ ?></td>

            <td><?= $data['judul'] ?></td>

            <td><?= $data['penulis'] ?></td>

            <td><?= $data['penerbit'] ?></td>

            <td><?= $data['tahun'] ?></td>

            <td>

                <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-warning btn-sm">
                    Edit
                </a>

                <a
                    href="hapus.php?id=<?= $data['id'] ?>"
                    class="btn btn-danger btn-sm"
                    onclick="return confirm('Yakin ingin menghapus data?')"
                >
                    Hapus
                </a>

            </td>

        </tr>

        <?php } ?>

        </tbody>

    </table>

</div>

</body>
</html>