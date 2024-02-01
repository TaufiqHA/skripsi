<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Skripsi extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    protected $with = ['dospem1', 'dospem2'];

    public function judul()
    {
        return $this->belongsTo(Judul::class);
    }

    public function dospem1()
    {
        return $this->belongsTo(Dosen::class, 'dospem1_id');
    }

    public function dospem2()
    {
        return $this->belongsTo(Dosen::class, 'dospem2_id');
    }
}
