<?php

namespace App\Http\Controllers;

use App\Models\Logikadigital;
use Illuminate\Http\Request;

class LogikadigitalController extends Controller
{
    public function logikadigital(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'namatugas' => 'required|string',
            'keterangan' => 'required|string',
        ]);
        Logikadigital::create([
            'tanggal' => $request->tanggal,
            'namatugas' => $request->namatugas,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/logikadigital');
    }
}
