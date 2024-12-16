<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;

class UserController extends Controller
{
    function KirimU(Request $request)
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
            'Status' => 'User',
            'Email' => $request->Email,
            'Nama' => $request->Nama,
            'Nomer' => $request->Nomer,
            'Password' => bcrypt($request->Password),
        ]);
        return redirect()->route('login');
    }
}
