<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Daftar Kegiatan</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2 class="text-center mb-4">Edit Daftar Kegiatan</h2>
        <form action="{{ route('daftar_kegiatan.update', $daftar_kegiatan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
                <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan" value="{{ old('nama_kegiatan', $daftar_kegiatan->nama_kegiatan) }}">
                @error('nama_kegiatan')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal Kegiatan</label>
                <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{ old('tanggal', $daftar_kegiatan->tanggal) }}">
                @error('tanggal')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi Kegiatan</label>
                <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5">{{ old('deskripsi', $daftar_kegiatan->deskripsi) }}</textarea>
                @error('deskripsi')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="gambar" class="form-label">Unggah Gambar Baru (Opsional)</label>
                <input type="file" name="gambar" class="form-control" id="gambar" accept="image/*">
                @error('gambar')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
                @if ($daftar_kegiatan->gambar)
                    <p class="mt-2">Gambar saat ini:</p>
                    <img src="{{ asset('images/' . $daftar_kegiatan->gambar) }}" alt="Gambar Kegiatan" class="img-thumbnail" style="max-width: 200px;">
                @endif
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ route('daftar_kegiatan.index') }}" class="btn btn-secondary">Kembali</a>
                <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
