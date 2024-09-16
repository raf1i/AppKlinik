<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'no_pasien', 'nama', 'jenis_kelamin', 'umur', 'foto', 'alamat'
    ];
}

