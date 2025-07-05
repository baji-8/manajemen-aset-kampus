<!DOCTYPE html>
<html>
<head>
    <title>Data Laboratorium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container py-4 ">
<form method="GET" action="{{ route('laboratorium.index') }}" class="mb-4">
    <div style="display: flex; gap: 10px;">
        <input type="text" name="search" value="{{ $keyword }}" class="form-control" placeholder="Cari laboratorium...">
        <button type="submit" class="btn btn-primary">Cari</button>
        <a href="{{ route('laboratorium.index') }}" class="btn btn-secondary">Reset</a>
    </div>
</form>

    <h1>Daftar Laboratorium</h1>

    <a href="{{ route('laboratorium.create') }}" class="btn btn-primary mb-3">Tambah Laboratorium</a>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Lokasi</th>
                <th>Penanggung Jawab</th>
                <th>Fasilitas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($laboratoria as $lab)
                <tr>
                    <td>{{ $lab->nama }}</td>
                    <td>{{ $lab->lokasi }}</td>
                    <td>{{ $lab->penanggung_jawab }}</td>
                    <td>{{ $lab->fasilitas }}</td>
                    <td>
                        <a href="{{ route('laboratorium.edit', $lab->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('laboratorium.destroy', $lab->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin hapus?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Belum ada data laboratorium.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

</body>
</html>
