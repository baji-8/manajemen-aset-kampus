<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    // Tentukan kolom yang dapat diisi (fillable)
    protected $fillable = [
        'course_name', 
        'class', 
        'time', 
        'assistant', 
        'laboratory_id', 
        'room',
    ];

    // Tentukan relasi dengan model Laboratorium
    public function laboratory()
    {
        return $this->belongsTo(Laboratorium::class, 'laboratory_id');
    }
}
