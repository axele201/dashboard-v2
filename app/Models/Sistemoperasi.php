<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sistemoperasi extends Model
{
    use HasFactory;
    protected $table = 'sistemoperasi';

    protected $fillable = [
        'tanggal',
        'namatugas',
        'keterangan',
    ];
}
