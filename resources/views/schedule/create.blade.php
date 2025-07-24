@extends('layouts.schedule')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Tambah Jadwal</h2>

    <form action="{{ route('schedule.store') }}" method="POST">
        @csrf
        <div class="form-group mb-3">
            <label for="course_name">Nama Mata Kuliah</label>
            <input type="text" class="form-control" id="course_name" name="course_name" required>
        </div>

        <div class="form-group mb-3">
            <label for="class">Kelas</label>
            <input type="text" class="form-control" id="class" name="class" required>
        </div>

        <div class="form-group mb-3">
            <label for="assistant">Asisten Dosen</label>
            <input type="text" class="form-control" id="assistant" name="assistant" required>
        </div>

        <div class="form-group mb-3">
            <label for="laboratory">Laboratorium</label>
            <select name="laboratory_id" id="laboratory" class="form-control" required>
                <option value="">Pilih Laboratorium</option>
                @foreach ($laboratories as $laboratory)
                    <option value="{{ $laboratory->id }}">{{ $laboratory->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group mb-3">
            <label for="room">Ruangan</label>
            <input type="text" class="form-control" id="room" name="room" required>
        </div>

        <div class="form-group mb-3">
            <label for="time">Jam</label>
            <select name="time" id="time" class="form-control" required>
                <option value="07:30-08:30">07:30-08:30</option>
                <option value="08:30-09:30">08:30-09:30</option>
                <option value="09:30-10:30">09:30-10:30</option>
                <option value="10:30-11:30">10:30-11:30</option>
                <option value="11:30-12:30">11:30-12:30</option>
                <option value="12:30-13:30">12:30-13:30</option>
                <option value="13:30-14:30">13:30-14:30</option>
                <option value="14:30-15:30">14:30-15:30</option>
                <option value="15:30-16:30">15:30-16:30</option>
                <option value="16:30-17:30">16:30-17:30</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Tambah Jadwal</button>
    </form>
</div>
@endsection
