@extends('layouts.schedule')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Edit Jadwal</h2>
    
    <!-- Form Edit Jadwal -->
    <form action="{{ route('schedule.update', $schedule->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <!-- Nama Matkul -->
            <div class="col-md-6 mb-3">
                <label for="course_name" class="form-label">Nama Matkul</label>
                <input type="text" name="course_name" id="course_name" class="form-control" value="{{ $schedule->course_name }}" required>
            </div>

            <!-- Kelas -->
            <div class="col-md-6 mb-3">
                <label for="class" class="form-label">Kelas</label>
                <input type="text" name="class" id="class" class="form-control" value="{{ $schedule->class }}" required>
            </div>

            <!-- Jam -->
            <div class="col-md-6 mb-3">
                <label for="time" class="form-label">Jam</label>
                <input type="text" name="time" id="time" class="form-control" value="{{ $schedule->time }}" required>
            </div>

            <!-- Asdos -->
            <div class="col-md-6 mb-3">
                <label for="assistant" class="form-label">Asdos</label>
                <input type="text" name="assistant" id="assistant" class="form-control" value="{{ $schedule->assistant }}" required>
            </div>

            <!-- Ruangan -->
            <div class="col-md-6 mb-3">
                <label for="room" class="form-label">Ruangan</label>
                <input type="text" name="room" id="room" class="form-control" value="{{ $schedule->room }}">
            </div>

            <!-- Laboratorium -->
            <div class="col-md-6 mb-3">
                <label for="laboratory_id" class="form-label">Laboratorium</label>
                <select name="laboratory_id" id="laboratory_id" class="form-select" required>
                    @foreach ($laboratories as $laboratory)
                        <option value="{{ $laboratory->id }}" {{ $schedule->laboratory_id == $laboratory->id ? 'selected' : '' }}>
                            {{ $laboratory->nama }}
                        </option>
                    @endforeach
                </select>
            </div>
        </div>

        <!-- Tombol Perbarui -->
        <div class="text-center mt-4">
            <button type="submit" class="btn btn-warning btn-lg">
                <i class="bi bi-pencil"></i> Perbarui
            </button>
        </div>
    </form>
</div>
@endsection
