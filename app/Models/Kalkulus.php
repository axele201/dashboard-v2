<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kalkulus extends Model
{
    use HasFactory;
    protected $table = 'kalkulus';

    protected $fillable = [
        'tanggal',
        'namatugas',
        'keterangan',
    ];
}
