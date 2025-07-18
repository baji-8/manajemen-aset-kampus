@extends('layouts.app')

@section('content')
<div class="container py-4">
    <div class="mb-4">
        <h1 class="fw-bold text-primary">Detail Laboratorium</h1>
        <p class="text-muted">Informasi lengkap mengenai laboratorium yang terdaftar.</p>
    </div>

    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">
            <h3 class="card-title fw-semibold mb-3 text-dark">{{ $laboratorium->nama }}</h3>

            <div class="mb-3">
                <span class="fw-medium text-secondary">📍 Lokasi</span>
                <div class="text-dark">{{ $laboratorium->lokasi }}</div>
            </div>

            <div class="mb-3">
                <span class="fw-medium text-secondary">👤 Penanggung Jawab</span>
                <div class="text-dark">{{ $laboratorium->penanggung_jawab }}</div>
            </div>

            <div class="mb-3">
                <span class="fw-medium text-secondary">🧰 Fasilitas</span>
                <div class="text-dark">
                    @if ($laboratorium->fasilitas)
                        {!! nl2br(e($laboratorium->fasilitas)) !!}
                    @else
                        <em class="text-muted">Tidak ada informasi fasilitas.</em>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="mt-4">
        <a href="{{ route('laboratorium.index') }}" class="btn btn-outline-secondary rounded-pill px-4">← Kembali ke Daftar</a>
    </div>
</div>
@endsection
