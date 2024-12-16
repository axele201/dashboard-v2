<?php
namespace App\Http\Controllers;

use App\Models\Kalkulus;
use Illuminate\Http\Request;

class KalkulusController extends Controller
{
    public function Kalkulus(Request $request)
{
    $request->validate([
        'tanggal' => 'required|date',
        'namatugas' => 'required|string',
        'keterangan' => 'required|string',
    ]);

    Kalkulus::create([
        'tanggal' => $request->tanggal,
        'namatugas' => $request->namatugas,
        'keterangan' => $request->keterangan,
    ]);
    return redirect('/kalkulus');
}

}
