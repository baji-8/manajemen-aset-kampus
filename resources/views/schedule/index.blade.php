@extends('layouts.schedule')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Daftar Jadwal</h2>

    <div class="text-end mb-4">
        <a href="{{ route('schedule.create') }}" class="btn btn-success btn-lg">
            <i class="bi bi-plus-circle"></i> Tambah Jadwal
        </a>
    </div>

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-light">
            <tr>
                <th>No</th>
                <th>Nama Matkul</th>
                <th>Kelas</th>
                <th>Jam</th>
                <th>Asdos</th>
                <th>Laboratorium</th>
                <th>Ruangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $schedule->course_name }}</td>
                    <td>{{ $schedule->class }}</td>
                    <td>{{ $schedule->time }}</td>
                    <td>{{ $schedule->assistant }}</td>
                    <td>{{ $schedule->laboratory->nama }}</td>
                    <td>{{ $schedule->room }}</td>
                    <td class="d-flex justify-content-start">
                        <a href="{{ route('schedule.edit', $schedule->id) }}" class="btn btn-warning btn-sm me-2">
                            <i class="bi bi-pencil"></i> Edit
                        </a>

                        <form action="{{ route('schedule.destroy', $schedule->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus jadwal ini?')">
                                <i class="bi bi-trash"></i> Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
