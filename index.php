<?php
$mahasiswa = [
[
"nim" => "25001",
"nama" => "Ridho Muhamad Nugroho",
"jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
"email" => "ridho@upi.edu",
"nilai" => 85
],
[
"nim" => "25002",
"nama" => "Aceng Setiawan",
"jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
"email" => "aceng@upi.edu",
"nilai" => 90
],[
"nim" => "25003",
"nama" => "Agus Gunawan",
"jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
"email" => "agus@upi.edu",
"nilai" => 60
],[
"nim" => "25004",
"nama" => "Budi Doremi",
"jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
"email" => "Budi@upi.edu",
"nilai" => 66
],[
"nim" => "25005",
"nama" => "Shallow Vernal",
"jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
"email" => "Shallow@upi.edu",
"nilai" => 100
],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
</head>
<style>
.container {
    max-width: 1000px;
}

.card {
    border-radius: 10px !important;
}

.table {
    font-size: 13px;
}

.table th,
.table td {
    padding: 8px;
}
</style>
<body>
    <div class="container my-4">
        <div class="card border-0 shadow-sm p-3 rounded-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h3 class="fw-bold m-0">Daftar Nilai Mahasiswa</h3>
                <!-- Tombol menuju Form Pesan -->
                <a href="form_pesan.php" class="btn btn-success">Isi Form Pesan</a>
            </div>
<h4> Mini Website PHP Dasar</h4>
<div class="table-responsive">
<table class="table table-bordered align-middle small">
 <thead class="table-success">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Nilai</th>
        <th>Email</th>
        <th>Grade</th>
        <th>Status</th>
        <th>Detail</th>
    </tr>
 </thead>
<tbody>

<?php 
$no = 1;
foreach($mahasiswa as $mhs):

if($mhs["nilai"] >= 80) {
    $grade = "A";
} elseif($mhs["nilai"] >= 70) {
    $grade = "B";
} elseif($mhs["nilai"] >= 60) {
    $grade = "C";
} else {
    $grade = "D";
}

if($mhs["nilai"] >= 70) {
    $status = "<span class='badge bg-success'>Lulus</span>";
} else {
    $status = "<span class='badge bg-danger'>Tidak Lulus</span>";
}

?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $mhs["nim"] ?></td>
        <td><?= $mhs["nama"] ?></td>
        <td><?= $mhs["jurusan"] ?></td>
        <td><?= $mhs["nilai"] ?></td>
        <td><?= $mhs["email"] ?></td>
        <td class="fw-bold text-center"><?= $grade; ?></td>
        <td class="text-center"><?= $status; ?></td>
        <td>
           <a href="detail.php?nim=<?= $mhs['nim']; ?>&nama=<?= $mhs['nama']; ?>&jurusan=<?= $mhs['jurusan']; ?>&email=<?= $mhs['email']; ?>&nilai=<?= $mhs['nilai']; ?>&grade=<?= $grade; ?>&status=<?= strip_tags($status); ?>" class="btn btn-outline-danger btn-sm">Lihat Detail</a>
        </td>
    </tr>
<?php endforeach; ?>
    </tbody>
</table>
        </div>
        </div>
    </div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>