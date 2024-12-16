<?php

namespace App\Http\Controllers;

use App\Models\Pemogramanweb;
use Illuminate\Http\Request;

class PemogramanwebController extends Controller
{
    public function pemogramanweb(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'namatugas' => 'required|string',
            'keterangan' => 'required|string',
        ]);
        Pemogramanweb::create([
            'tanggal' => $request->tanggal,
            'namatugas' => $request->namatugas,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/pemogramanWeb');
    }
}
