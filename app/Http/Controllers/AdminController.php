<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    function Kirim(Request $request)
    {
        $request->validate([
            'Email'=>'required|email',
            'Nama'=>'required|string',
            'Nomer'=>'required|numeric|digits_between:10,13',
            'Password'=>[
                'required',
                'string',
                'min:6',
                'regex:/[a-z]/',
                'regex:/[A-Z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*?&]/',
            ],
        ]);
        Admin::create([
            'Status' => 'Admin',
            'Email' => $request->Email,
            'Nama' => $request->Nama,
            'Nomer' => $request->Nomer,
            'Password' => bcrypt($request->Password),
        ]);
        return redirect()->route('login');
    }
}
