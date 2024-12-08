<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Edit Struktur Pengurus</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
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
        <h2 class="text-center mb-4">Edit Struktur Pengurus</h2>
        <form action="/perangkatdesa/{{$perangkatdesa->id}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" id="nama" value="{{ old('nama', $perangkatdesa->nama) }}">
            @error('nama')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" name="jabatan" class="form-control" id="jabatan" value="{{ old('jabatan', $perangkatdesa->jabatan) }}">
            @error('jabatan')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="foto" class="form-label">Unggah Foto Baru (Opsional)</label>
            <input type="file" name="foto" class="form-control" id="foto" accept="image/*">
            @error('foto')
                <div class="text-danger">{{ $message }}</div>
            @enderror
            @if ($perangkatdesa->foto)
                <p class="mt-2">Foto Saat Ini:</p>
                <img src="{{ asset('storage/' . $perangkatdesa->foto) }}" alt="Foto Pengurus" class="img-thumbnail" style="max-width: 200px;">
            @endif
        </div>

        <div class="d-flex justify-content-between">
            <a href="{{ route('perangkatdesa.index') }}" class="btn btn-secondary">Kembali</a>
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </div>
    </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
