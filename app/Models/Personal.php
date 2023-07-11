<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personal extends Model
{
    use HasFactory;

    protected $table = 'personal';

    // relasi belongs to jabatan
    public function jabatan()
    {
        return $this->belongsTo(Jabatan::class);
    }

    // relasi has one pegawai
    public function pegawai()
    {
        return $this->hasOne(Pegawai::class);
    }

    // relasi has one honorer
    public function honorer()
    {
        return $this->hasOne(Honorer::class, 'personal_id', 'id');
    }

    // relasi has many absensi
    public function absensi()
    {
        return $this->hasMany(Absensi::class);
    }
}
