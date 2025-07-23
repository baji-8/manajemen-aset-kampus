<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Jadwal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2>Detail Jadwal: {{ $schedule->course_nama }}</h2>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama Matkul: {{ $schedule->course_nama }}</h5>
                <p><strong>Kelas:</strong> {{ $schedule->class }}</p>
                <p><strong>Jam:</strong> {{ $schedule->time }}</p>
                <p><strong>Asdos:</strong> {{ $schedule->assistant }}</p>
                <p><strong>Laboratorium:</strong> {{ $schedule->laboratory->nama ?? 'Tidak ada' }}</p>
            </div>
        </div>

        <div class="mt-4">
            <a href="{{ route('schedule.index') }}" class="btn btn-secondary">Kembali ke Daftar Jadwal</a>
            <a href="{{ route('schedule.edit', $schedule->id) }}" class="btn btn-warning">Edit Jadwal</a>
            <form action="{{ route('schedule.destroy', $schedule->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus Jadwal</button>
            </form>
        </div>
    </div>
</body>
</html>
