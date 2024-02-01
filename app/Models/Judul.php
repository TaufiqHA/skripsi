<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Judul extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['skripsi'];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function skripsi()
    {
        return $this->hasOne(Skripsi::class);
    }

    public function dosen_pembimbing1()
    {
        return $this->belongsTo(Dosen::class, 'nama_dosen1');
    }

    public function dosen_pembimbing2()
    {
        return $this->belongsTo(Dosen::class, 'nama_dosen2');
    }

    public function dosen_pembimbing3()
    {
        return $this->belongsTo(Dosen::class, 'nama_dosen3');
    }

    public function dosen_pembimbing4()
    {
        return $this->belongsTo(Dosen::class, 'nama_dosen4');
    }
}
