<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Desa Sebatuan - Inputan Daftar Kegiatan</title>
    <style>
        body {
            margin: 0;
            display: flex;
            flex-direction: column;
            overflow: auto; /* Mengaktifkan scroll pada halaman */
            height: 100%; /* Pastikan body memiliki ketinggian dinamis */
        }

        .sidebar {
            background-color: #343a40;
            color: white;
            width: 250px;
            height: 100%;
            position: fixed;
            transform: translateX(0);
            transition: transform 0.3s ease-in-out;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.5);
        }

        .sidebar.closed {
            transform: translateX(-100%);
        }

        .sidebar h4 {
            padding: 15px;
            text-align: center;
            margin-bottom: 20px;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 15px 20px;
            margin-bottom: 10px;
            display: block;
            border-radius: 4px;

        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            width: 100%;
            transition: margin-left 0.3s ease-in-out;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: #f8f9fa;
        }

        .content.shifted {
            margin-left: 0;
        }

        .form-container,
        .table-container {
            width: 100%;
            max-width: 800px;
            background-color: white;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .toggle-btn {
            position: absolute;
            top: 10px;
            left: 10px;
            z-index: 1001;
            background-color: #343a40;
            color: white;
            border: none;
            border-radius: 4px;
            padding: 10px 15px;
            cursor: pointer;
        }

        .logout-btn {
            background-color: #dc3545;
            color: white;
            border: none;
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border-radius: 5px;
            margin-top: 20px;
        }

        .logout-btn:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div>
            <h4></h4>
            <a href="/berita">Input Berita</a>
            <a href="/daftar_kegiatan">Input Daftar Kegiatan</a>
            <a href="/perangkatdesa">Struktur Pengurusan</a>
        </div>
        <form action="/logout" method="POST" class="p-3">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>

    <!-- Toggle Button -->
    <button class="toggle-btn" id="toggle-btn">☰</button>

    <!-- Content Area -->
    <div class="content" id="content">
        <!-- Form to Add Activity -->
        <div class="form-container">
            <h2 class="text-center mb-4">Tambah Daftar Kegiatan</h2>
            <form action="{{ url('/daftar_kegiatan') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="nama_kegiatan" class="form-label">Nama Kegiatan</label>
                    <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan" value="{{ old('nama_kegiatan') }}" required>
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal Kegiatan</label>
                    <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{ old('tanggal') }}" required>
                </div>

                <div class="mb-3">
                    <label for="deskripsi" class="form-label">Deskripsi Kegiatan</label>
                    <textarea name="deskripsi" class="form-control" id="deskripsi" rows="5" required>{{ old('deskripsi') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Unggah Gambar</label>
                    <input type="file" name="gambar" class="form-control" id="gambar" accept="image/*" required>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Simpan Kegiatan</button>
                </div>
            </form>
        </div>

        <!-- List of Activities -->
        <div class="table-container">
            <h3 class="text-center">Daftar Kegiatan</h3>
            <table class="table table-striped table-bordered mt-3">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th>Nama Kegiatan</th>
                        <th>Tanggal</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Example Data -->
                     @foreach ( $daftar_kegiatans as $daftar_kegiatan )
                     <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $daftar_kegiatan->nama_kegiatan}}</td>
                    <td>{{ $daftar_kegiatan->tanggal}}</td>
                        <td>
                        <a href="/daftar_kegiatan/{{$daftar_kegiatan->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                            <form action="/daftar_kegiatan/{{$daftar_kegiatan->id}}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus kegiatan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                     @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const toggleBtn = document.getElementById('toggle-btn');
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('content');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('closed');
            content.classList.toggle('shifted');
        });
    </script>
</body>
</html>
