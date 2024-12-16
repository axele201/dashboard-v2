<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekayasaperangkatlunak extends Model
{
    use HasFactory;
    protected $table = 'rekayasaperangkatlunak';
    protected $fillable = [
        'tanggal',
        'namatugas',
        'keterangan',
    ];
}
