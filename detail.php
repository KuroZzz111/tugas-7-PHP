<?php
if (
    isset($_GET['nim']) && 
    isset($_GET['nama']) && 
    isset($_GET['jurusan']) && 
    isset($_GET['email']) && 
    isset($_GET['nilai']) && 
    isset($_GET['grade']) && 
    isset($_GET['status'])
) {
    $nim = htmlspecialchars($_GET['nim']);
    $nama = htmlspecialchars($_GET['nama']);
    $jurusan = htmlspecialchars($_GET['jurusan']);
    $email = htmlspecialchars($_GET['email']);
    $nilai = htmlspecialchars($_GET['nilai']);
    $grade = htmlspecialchars($_GET['grade']);
    $status = htmlspecialchars($_GET['status']);
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
    <title>Detail Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<body class="bg-white d-flex align-items-center justify-content-center min-vh-100 p-2">
    
 <div class="card" style="width: 500px;">
    <div class="card shadow-lg border-0 p-3 rounded-3" style="width: 500px;">
        <!-- Judul -->
        <h4 class="fw-bold mb-3">Detail Mahasiswa</h4>
        <!-- Isi Dalam kontainer -->
        <div class="bg-light px-2 py-1 rounded mb-3">
            <strong>NIM:</strong> <?= $nim; ?>
        </div>
        <div class="bg-light px-2 py-1 rounded mb-3">
            <strong>Nama:</strong> <?= $nama; ?>
        </div>
        <div class="bg-light px-2 py-1 rounded mb-3">
            <strong>Jurusan:</strong> <?= $jurusan; ?>
        </div>
        <div class="bg-light px-2 py-1 rounded mb-3">
            <strong>Email:</strong> <?= $email; ?>
        </div>
        <div class="bg-light px-2 py-1 rounded mb-3">
            <strong>Nilai:</strong> <?= $nilai; ?>
        </div>
        <div class="bg-light px-2 py-1 rounded mb-3">
            <strong>Grade:</strong> <?= $grade; ?>
        </div>
        <div class="bg-light px-2 py-1 rounded mb-3">
            <strong>Status:</strong> <?= $status; ?>
        </div>

        <!-- Tombol Kembali -->
        <div>
            <a href="index.php" class="btn btn-primary px-4 py-2">Kembali</a>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>