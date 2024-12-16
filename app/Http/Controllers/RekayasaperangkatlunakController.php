<?php

namespace App\Http\Controllers;

use App\Models\Rekayasaperangkatlunak;
use Illuminate\Http\Request;

class RekayasaperangkatlunakController extends Controller
{
    public function rekayasaperangkatlunak(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'namatugas' => 'required|string',
            'keterangan' => 'required|string',
        ]);
        Rekayasaperangkatlunak::create([
            'tanggal' => $request->tanggal,
            'namatugas' => $request->namatugas,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/rekayasaperangkatlunak');
    }
}
