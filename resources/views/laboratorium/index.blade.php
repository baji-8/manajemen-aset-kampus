<!DOCTYPE html>
<html>
<head>
    <title>Data Laboratorium</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .card-lab {
            transition: 0.3s ease;
        }
        .card-lab:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }
        .btn-sm {
            font-size: 0.8rem;
        }
    </style>
</head>
<body class="bg-light py-4">

<div class="container">

    {{-- Pencarian --}}
    <form method="GET" action="{{ route('laboratorium.index') }}" class="mb-4">
        <div class="input-group">
            <input type="text" name="search" value="{{ $keyword }}" class="form-control" placeholder="Cari laboratorium...">
            <button type="submit" class="btn btn-primary">Cari</button>
            <a href="{{ route('laboratorium.index') }}" class="btn btn-outline-secondary">Reset</a>
        </div>
    </form>

    {{-- Header dan Aksi --}}
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="fw-bold">📚 Daftar Laboratorium</h2>
        <div class="d-flex gap-2">
            <a href="{{ route('laboratorium.create') }}" class="btn btn-success"><i class="bi bi-plus-circle"></i> Tambah</a>
            <a href="{{ route('laboratorium.export.pdf') }}" class="btn btn-danger"><i class="bi bi-file-earmark-pdf"></i> Export PDF</a>
        </div>
    </div>

    {{-- Notifikasi --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    {{-- Data --}}
    <div class="row g-4">
        @forelse($laboratoria as $lab)
            <div class="col-md-6 col-lg-4">
                <div class="card card-lab shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $lab->nama }}</h5>
                        <p class="card-text">
                            <strong>Lokasi:</strong> {{ $lab->lokasi }}<br>
                            <strong>Penanggung Jawab:</strong> {{ $lab->penanggung_jawab }}<br>
                            <strong>Fasilitas:</strong> {{ $lab->fasilitas }}
                        </p>
                        <div class="d-flex justify-content-end gap-2">
                            <a href="{{ route('laboratorium.show', $lab->id) }}" class="btn btn-info btn-sm">Detail</a>
                            <a href="{{ route('laboratorium.edit', $lab->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('laboratorium.destroy', $lab->id) }}" method="POST" onsubmit="return confirm('Yakin ingin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="alert alert-info text-center">Belum ada data laboratorium.</div>
            </div>
        @endforelse
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-4">
        {{ $laboratoria->appends(request()->input())->links() }}
    </div>

</div>

<!-- Bootstrap icons (jika ingin pakai ikon tambahan) -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</body>
</html>
