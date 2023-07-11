<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = 'pegawai';

    // relasi has one personal
    public function personal()
    {
        return $this->hasOne(Personal::class, 'id', 'personal_id');
    }

    // relasi belongs to pangkat
    public function pangkat()
    {
        return $this->belongsTo(Pangkat::class);
    }

    // relasi has many absensi
    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
}
