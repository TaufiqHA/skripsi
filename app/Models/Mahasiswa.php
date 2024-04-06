<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function judul()
    {
        return $this->hasMany(Judul::class);
    }

    public function room()
    {
        return $this->hasMany(Room::class);
    }

    public function pengajuan()
    {
        return $this->hasOne(Pengajuan::class);
    }

    public function message()
    {
        return $this->hasMany(Message::class);
    }

    public function sempro()
    {
        return $this->hasOne(SeminarProposal::class);
    }

    // protected static function booted()
    // {
    //     static::deleted(function ($mahasiswa) {
    //         $mahasiswa->user()->delete();
    //         $mahasiswa->judul()->delete();
    //         $mahasiswa->room()->delete();
    //         $mahasiswa->pengajuan()->delete();
    //     });
    // }
}
