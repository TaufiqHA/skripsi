<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function dospem1()
    {
        return $this->hasMany(Skripsi::class, 'dospem1_id');
    }

    public function dospem2()
    {
        return $this->hasMany(Skripsi::class, 'dospem2_id');
    }

    public function mahasiswa()
    {
        return $this->belongsToMany(Mahasiswa::class, 'dosen_pembimbings');
    }

    public function mahasiswa2()
    {
        return $this->belongsToMany(Mahasiswa::class, 'dosen_pembimbing2');
    }
}
