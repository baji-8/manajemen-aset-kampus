<!DOCTYPE html>
<html>
<head>
    <title>Edit Laboratorium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4">

    <h1>Edit Laboratorium</h1>

    <form action="{{ route('laboratorium.update', $laboratorium->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{ $laboratorium->nama }}" required>
        </div>

        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control" value="{{ $laboratorium->lokasi }}" required>
        </div>

        <div class="mb-3">
            <label>Penanggung Jawab</label>
            <input type="text" name="penanggung_jawab" class="form-control" value="{{ $laboratorium->penanggung_jawab }}" required>
        </div>

        <div class="mb-3">
            <label>Fasilitas</label>
            <textarea name="fasilitas" class="form-control">{{ $laboratorium->fasilitas }}</textarea>
        </div>

        <button class="btn btn-success">Update</button>
        <a href="{{ route('laboratorium.index') }}" class="btn btn-secondary">Kembali</a>
    </form>

</body>
</html>
