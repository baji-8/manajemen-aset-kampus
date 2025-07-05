<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Laboratorium;

class LaboratoriumSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nama' => 'Lab-TI', 'lokasi' => 'Kampus E533', 'penanggung_jawab' => 'Bayu Aji', 'fasilitas' => '25 unit PC, LCD projector'],
            ['nama' => 'Lab-Jaringan', 'lokasi' => 'Kampus E534', 'penanggung_jawab' => 'Ahmad Fikri', 'fasilitas' => 'Router, Switch, 20 unit PC'],
            ['nama' => 'Lab-Bahasa', 'lokasi' => 'Gedung C203', 'penanggung_jawab' => 'Siti Aminah', 'fasilitas' => 'Headset, speaker'],
            ['nama' => 'Lab-Multimedia', 'lokasi' => 'Kampus D112', 'penanggung_jawab' => 'Rizky Hidayat', 'fasilitas' => 'PC editing, green screen'],
            ['nama' => 'Lab-Robotika', 'lokasi' => 'Kampus F101', 'penanggung_jawab' => 'Dian Saputra', 'fasilitas' => 'Arduino, sensor, robot lengan'],
            ['nama' => 'Lab-Komputasi', 'lokasi' => 'Kampus E235', 'penanggung_jawab' => 'Nurul Fatimah', 'fasilitas' => '30 unit PC, server mini'],
            ['nama' => 'Lab-Cloud', 'lokasi' => 'Kampus E236', 'penanggung_jawab' => 'Fajar Nugroho', 'fasilitas' => 'Cloud server, PC, switch'],
            ['nama' => 'Lab-AI', 'lokasi' => 'Gedung B202', 'penanggung_jawab' => 'Rendi Pratama', 'fasilitas' => 'GPU server, dataset, 10 unit PC'],
            ['nama' => 'Lab-Web', 'lokasi' => 'Gedung C101', 'penanggung_jawab' => 'Tina Agustina', 'fasilitas' => 'PC dengan XAMPP, internet cepat'],
            ['nama' => 'Lab-Pemrograman', 'lokasi' => 'Kampus E213', 'penanggung_jawab' => 'Lina Sari', 'fasilitas' => '25 PC, VSCode, Laravel']
        ];

        foreach ($data as $lab) {
            Laboratorium::create($lab);
        }
    }
}
