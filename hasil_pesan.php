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

  <div class="shadow-lg p-4 rounded-4" style="max-width: 550px; width: 100%;">
    <h3 class="fw-bold mb-3">Pesan Berhasil Dikirim</h3>
    
    <p class="mb-4">Terima kasih, <strong><?= $nama; ?>!</strong></p>

    <!-- Kotak Detail Data -->
    <div class="bg-light p-3 rounded mb-3">
      <strong>Nama:</strong> <?= $nama; ?>
    </div>

    <div class="bg-light p-3 rounded mb-3">
      <strong>Kelas:</strong> <?= $kelas; ?>
    </div>

    <div class="bg-light p-3 rounded mb-4">
      <strong>Pesan / Kesan:</strong> <?= $pesan; ?>
    </div>

    <div>
      <a href="index.php" class="btn btn-primary px-3 py-2">Kembali ke Data Mahasiswa</a>
    </div>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>