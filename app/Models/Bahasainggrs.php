<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahasainggrs extends Model
{
    use HasFactory;
    protected $table = 'bahasainggrs';
    protected $fillable = [
        'tanggal',
        'namatugas',
        'keterangan',
    ];
}
