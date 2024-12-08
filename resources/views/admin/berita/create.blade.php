<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Desa Sebatuan - Inputan Berita</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            overflow: hidden;
            display: flex;
        }

        .sidebar {
            background-color: #343a40;
            color: white;
            width: 250px;
            height: 100%;
            position: fixed;
            padding: 20px;
            transition: all 0.3s ease;
            z-index: 1000;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar.closed {
            width: 0;
            padding: 0;
            overflow: hidden;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 10px 15px;
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
            overflow-y: auto;
            transition: all 0.3s ease;
        }

        .content.shifted {
            margin-left: 0;
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
            display: block;
        }

        .form-container {
            background-color: whitesmoke;
            border: 1px solid black;
            border-radius: 8px;
            padding: 30px;
            max-width: 600px;
            margin: 20px auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <h4></h4>
        <a href="/berita">Input Berita</a>
        <a href="/daftar_kegiatan">Input Daftar Kegiatan</a>
        <a href="/perangkatdesa">Struktur Pengurusan</a>
        <!-- Logout Button -->
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="logout-btn">Logout</button>
        </form>
    </div>

    <!-- Toggle Button -->
    <button class="toggle-btn" id="toggle-btn">☰</button>

    <!-- Content Area -->
    <div class="content" id="content">
        <h2 class="text-center mb-4">Tambah Berita</h2>
        <!-- Form to Add News -->
        <div class="form-container">
            <form action="{{ url('/berita') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="judul" class="form-label">Judul Berita</label>
                    <input type="text" name="judul" class="form-control" id="judul" value="{{ old('judul') }}" required>
                </div>

                <div class="mb-3">
                    <label for="konten" class="form-label">Konten Berita</label>
                    <textarea name="konten" class="form-control" id="konten" rows="8" required>{{ old('konten') }}</textarea>
                </div>

                <div class="mb-3">
                    <label for="tanggal" class="form-label">Tanggal</label>
                    <input type="date" name="tanggal_terbit" class="form-control" id="tanggal" value="{{ old('tanggal') }}" required>
                </div>

                <div class="mb-3">
                    <label for="gambar" class="form-label">Unggah Gambar</label>
                    <input type="file" name="gambar" class="form-control" id="gambar" accept="image/*" required>
                </div>

                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-primary">Simpan Berita</button>
                </div>
            </form>
        </div>

        <!-- Table to Display News -->
        <h3 class="mt-5">Daftar Berita</h3>
        <table class="table table-bordered table-hover mt-3">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($beritas as $berita )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $berita->judul}}</td>
                    <td>{{ $berita->tanggal_terbit}}</td>
                    <td>
                        <a href="/berita/{{$berita->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                        <form action="/berita/{{$berita->id}}" method="POST" style="display:inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus berita ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                <!-- Example Data -->
                
                <!-- Add your dynamic data here -->
            </tbody>
        </table>
    </div>

    <!-- Bootstrap JS -->
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
