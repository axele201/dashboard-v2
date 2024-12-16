<?php

namespace App\Http\Controllers;

use App\Models\Bahasainggrs;
use Illuminate\Http\Request;

class BahasainggrsController extends Controller
{
    public function bahasainggris(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'namatugas' => 'required|string',
            'keterangan' => 'required|string',
        ]);
        Bahasainggrs:: create([
            'tanggal' => $request->tanggal,
            'namatugas' => $request->namatugas,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/bahasainggris');
    }
}
