<!DOCTYPE html>
<html>
<head>
    <title>Tambah Laboratorium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">

    <h1>Tambah Laboratorium</h1>

    <form action="{{ route('laboratorium.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Penanggung Jawab</label>
            <input type="text" name="penanggung_jawab" class="form-control" required>
        </div>

        <div class="mb-3">
            <label>Fasilitas</label>
            <textarea name="fasilitas" class="form-control"></textarea>
        </div>

        <button class="btn btn-primary">Simpan</button>
        <a href="{{ route('laboratorium.index') }}" class="btn btn-secondary">Kembali</a>
    </form>

</body>
</html>
