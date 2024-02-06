<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Bimbingan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function judul()
    {
        return $this->hasOne(Judul::class);
    }

    public function dosen()
    {
        return $this->hasOne(Dosen::class);
    }
}
