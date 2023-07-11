<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Honorer extends Model
{
    use HasFactory;

    protected $table = 'honorer';

    // relasi has one personal
    public function personal()
    {
        return $this->hasOne(Personal::class, 'id', 'personal_id');
    }
}
