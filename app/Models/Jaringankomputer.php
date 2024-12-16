<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jaringankomputer extends Model
{
    use HasFactory;
    protected $table = 'jaringankomputer';
    protected $fillable = [
        'tanggal',
        'namatugas',
        'keterangan',
    ];
}
