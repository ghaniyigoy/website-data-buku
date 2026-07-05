<?php

include "../../config/koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($conn,"SELECT * FROM buku WHERE id='$id'");

$buku = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>
<html>
<head>

<title>Edit Buku</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h2>Edit Buku</h2>

<form action="proses.php" method="POST">

<input type="hidden" name="id" value="<?= $buku['id']; ?>">

<div class="mb-3">

<label>Judul</label>

<input
type="text"
name="judul"
class="form-control"
value="<?= $buku['judul']; ?>"
required>

</div>

<div class="mb-3">

<label>Penulis</label>

<input
type="text"
name="penulis"
class="form-control"
value="<?= $buku['penulis']; ?>"
required>

</div>

<div class="mb-3">

<label>Penerbit</label>

<input
type="text"
name="penerbit"
class="form-control"
value="<?= $buku['penerbit']; ?>"
required>

</div>

<div class="mb-3">

<label>Tahun</label>

<input
type="number"
name="tahun"
class="form-control"
value="<?= $buku['tahun']; ?>"
required>

</div>

<button
type="submit"
name="update"
class="btn btn-warning">

Update

</button>

<a href="index.php" class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</body>
</html>