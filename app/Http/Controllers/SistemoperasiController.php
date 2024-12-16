<?php

namespace App\Http\Controllers;

use App\Models\Sistemoperasi;
use Illuminate\Http\Request;

class SistemoperasiController extends Controller
{
    public function sistemoperasi(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'namatugas' => 'required|string',
            'keterangan' => 'required|string',
        ]);
    
        Sistemoperasi::create([
            'tanggal' => $request->tanggal,
            'namatugas' => $request->namatugas,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/sistemoperasi');
    }
}
