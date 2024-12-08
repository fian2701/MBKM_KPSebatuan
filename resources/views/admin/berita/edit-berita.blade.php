<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Berita</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
        }

        .container {
            margin-top: 50px;
        }

        .form-container {
            background-color: #f8f9fa;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 700px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-4">Edit Berita</h2>
        <div class="form-container">
            <form action="{{ route('berita.update', $berita->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Berita</label>
                    <input type="text" name="judul" class="form-control" id="judul" value="{{ old('judul', $berita->judul) }}">
                    @error('judul')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="konten" class="form-label">Konten Berita</label>
                    <textarea name="konten" class="form-control" id="konten" rows="8">{{ old('konten', $berita->konten) }}</textarea>
                    @error('konten')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="tanggal_terbit" class="form-label">Tanggal Terbit</label>
                    <input type="date" name="tanggal_terbit" class="form-control" id="tanggal_terbit" value="{{ old('tanggal_terbit', $berita->tanggal_terbit) }}">
                    @error('tanggal_terbit')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Unggah Gambar Baru (Opsional)</label>
                    <input type="file" name="gambar" class="form-control" id="gambar" accept="image/*">
                    @error('gambar')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    @if ($berita->gambar)
                        <p class="mt-2">Gambar saat ini:</p>
                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="Gambar Berita" class="img-thumbnail" style="max-width: 200px;">
                    @endif
                </div>

                <div class="d-flex justify-content-between">
                    <a href="{{ route('berita.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
