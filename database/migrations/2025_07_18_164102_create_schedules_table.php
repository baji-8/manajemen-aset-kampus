<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');         // Nama matkul
            $table->string('class');               // Kelas
            $table->string('time');                // Jam
            $table->string('assistant');           // Asdos
            $table->unsignedBigInteger('laboratory_id');  // ID Laboratorium
            $table->foreign('laboratory_id')->references('id')->on('laboratoria'); // Foreign key
            $table->string('room')->nullable();   // Ruangan, nullable agar bisa kosong
            $table->timestamps();                 // Menambahkan created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}
