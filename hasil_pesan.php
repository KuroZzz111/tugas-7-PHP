<?php
if (isset($_POST['nama']) && isset($_POST['kelas']) && isset($_POST['pesan'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $kelas = htmlspecialchars($_POST['kelas']);
    $pesan = htmlspecialchars($_POST['pesan']);
} else {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body class="bg-white d-flex align-items-center justify-content-center min-vh-100 p-2">

 <div class="card" style="width: 500px;">
  <div class="card-body bg-light shadow-lg">
    <h4 class="card-title">Pesan Berhasi Dikirim</h4>
    <h5 class="card-text">Terima Kasih, <strong><?= $nama; ?>!</strong></p></h5>
    <div>
        <div class="bg-light p-2 rounded mb-3"> <strong>Nama:</strong> <?= $nama; ?>
        </div>

         <div class="bg-light p-2 rounded mb-3"> <strong>Kelas:</strong> <?= $kelas; ?>
        </div>

        <div class="bg-light p-2 rounded mb-3"> <strong>Pesan / Kesan:</strong> <?= $pesan; ?>
        </div>
    </div>
    <a href="index.php" class="btn btn-primary">Kembali ke Data Mahasiswa</a>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>