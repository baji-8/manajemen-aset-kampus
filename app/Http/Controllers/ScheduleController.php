<?php

namespace App\Http\Controllers;

use App\Models\Schedule;
use App\Models\Laboratorium;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    // Menampilkan semua jadwal
    public function index()
    {
        $schedules = Schedule::with('laboratory')->get();
        return view('schedule.index', compact('schedules'));
    }

    // Menampilkan form untuk menambah jadwal
    public function create()
    {
        $laboratories = Laboratorium::all();
        return view('schedule.create', compact('laboratories'));
    }

    // Menyimpan jadwal baru
    public function store(Request $request)
    {
        $validated = $request->validate([
            'course_name' => 'required',
            'class' => 'required',
            'time' => 'required',
            'assistant' => 'required',
            'laboratory_id' => 'required|exists:laboratoria,id',
            'room' => 'nullable|string|max:255',
        ]);

        Schedule::create($validated);

        return redirect()->route('schedule.index')->with('status', 'Jadwal berhasil disimpan!');
    }
    public function edit($id)
{
    // Menemukan jadwal berdasarkan ID
    $schedule = Schedule::findOrFail($id);

    // Mendapatkan daftar laboratorium untuk dropdown
    $laboratories = Laboratorium::all();

    // Menampilkan form edit dengan data jadwal dan daftar laboratorium
    return view('schedule.edit', compact('schedule', 'laboratories'));
}
public function update(Request $request, $id)
{
    // Validasi input dari form
    $validated = $request->validate([
        'course_name' => 'required',
        'class' => 'required',
        'time' => 'required',
        'assistant' => 'required',
        'laboratory_id' => 'required|exists:laboratoria,id',
        'room' => 'nullable|string|max:255',
    ]);

    // Menemukan jadwal yang akan diupdate
    $schedule = Schedule::findOrFail($id);

    // Mengupdate data jadwal dengan data yang sudah divalidasi
    $schedule->update($validated);

    // Redirect ke halaman daftar jadwal dengan pesan sukses
    return redirect()->route('schedule.index')->with('status', 'Jadwal berhasil diperbarui!');
}
public function destroy($id)
{
    // Menemukan jadwal berdasarkan ID dan menghapusnya
    $schedule = Schedule::findOrFail($id);
    $schedule->delete();

    // Redirect kembali ke halaman daftar jadwal
    return redirect()->route('schedule.index')->with('status', 'Jadwal berhasil dihapus!');
}

}
