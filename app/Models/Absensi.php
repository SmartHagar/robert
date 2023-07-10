<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $table = 'absensi';

    // relasi belongs to personal
    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }
}
