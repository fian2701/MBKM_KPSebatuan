<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Berita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h2>Tambah Berita</h2>

        <!-- Form untuk input berita -->
        <form action="/berita/store" method="POST" enctype="multipart/form-data">
            <!-- CSRF Token (Jika menggunakan Laravel) -->
            <!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
            
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Berita</label>
                <input type="text" name="judul" class="form-control" id="judul" placeholder="Masukkan judul berita" required>
            </div>

            <div class="mb-3">
                <label for="konten" class="form-label">Konten Berita</label>
                <textarea name="konten" class="form-control" id="konten" rows="5" placeholder="Masukkan konten berita" required></textarea>
            </div>

            <div class="mb-3">
                <label for="tanggal_terbit" class="form-label">Tanggal Terbit</label>
                <input type="date" name="tanggal_terbit" class="form-control" id="tanggal_terbit" required>
            </div>

            <!-- Input untuk gambar -->
            <div class="mb-3">
                <label for="gambar" class="form-label">Unggah Gambar Berita</label>
                <input type="file" name="gambar" class="form-control" id="gambar" accept="image/*">
            </div>

            <button type="submit" class="btn btn-primary">Simpan Berita</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
