<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemogramanweb extends Model
{
    use HasFactory;
    protected $table = 'pemogramanweb';
    protected $fillable = [
        'tanggal',
        'namatugas',
        'keterangan',
    ];
}
