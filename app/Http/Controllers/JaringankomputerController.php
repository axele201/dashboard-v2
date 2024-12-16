<?php

namespace App\Http\Controllers;

use App\Models\Jaringankomputer;
use Illuminate\Http\Request;

class JaringankomputerController extends Controller
{
    public function jaringankomputer(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'namatugas' => 'required|string',
            'keterangan' => 'required|string',
        ]);
        Jaringankomputer::create([
            'tanggal' => $request->tanggal,
            'namatugas' => $request->namatugas,
            'keterangan' => $request->keterangan,
        ]);
        return redirect('/jaringankomputer');
    }
}
