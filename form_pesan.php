<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
<style>
    .form-card {
        max-width: 500px;
    }
</style>
</head>
<body>
    <div class="container mt-4">
        <div class="card p-3 shadow-lg mx-auto form-card">
        <h2 class="mb-3">Form Pesan Mahasiswa</h2>
        <!-- Formulir -->
        <form action="hasil_pesan.php" method="POST">
           
            <div class="mb-3">
             <label for="nama" class="form-label">Nama</label>
             <input type="text" name="nama" class="form-control" id="nama" required>
        </div>
       
        <div class="mb-3">
             <label for="kelas" class="form-label">Kelas</label>
            <input type="text" name="kelas" class="form-control" id="kelas" required>
        </div>
      
        <div class="mb-3">
            <label for="pesan" class="form-label">Pesan / Kesan</label>
            <textarea name="pesan" class="form-control" id="pesan" rows="4" required></textarea>
            </div>
            <!-- Button Submit -->
            <button type="submit" class="btn btn-primary">Kirim Pesan</button>
            <a href="index.php" class="btn btn-dark">Kembali</a>

            
        </form>
    </div>
</div>
    
</body>
</html>