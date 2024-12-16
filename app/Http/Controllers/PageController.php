<?php

namespace App\Http\Controllers;

use App\Models\Bahasainggrs;
use App\Models\Jaringankomputer;
use App\Models\Kalkulus;
use App\Models\Logikadigital;
use App\Models\Pemogramanweb;
use App\Models\Rekayasaperangkatlunak;
use App\Models\Sistemoperasi;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('L&G.login');
    }
    public function registrasi()
    {
        return view('L&G.registrasi');
    }
    public function registrasiUser()
    {
        return view('L&G.regU');
    }
    public function registrasiKeuangan()
    {
        return view('L&G.regKeuangan');
    }
    public function index()
    {
        $data = [
            'content'=>'post.dashboard'
        ];
        return view('pembungkus.wrapper', $data);
    }
    public function kontak()
    {
        $data = [
            'content'=>'post.CONTACT.contact'
        ];
        return view('pembungkus.wrapper', $data);
    }
    public function kalender()
    {
        $data = [
            'content'=>'post.kalender'
        ];
        return view('pembungkus.wrapper', $data);
    }
    public function keuangan()
    {
        $data = [
            'content'=>'post.KEUANGAN.financial'
        ];
        return view('pembungkus.wrapper', $data);
    }
    public function smester3()
    {
        $data = [
            'content'=>'post.PERKULIAHAN.JADWAL.smester3'
        ];
        return view('pembungkus.wrapper', $data);
    }
    // MATA KULIAH
    public function kalkulus()
    {
        $tugas = Kalkulus::all();
        $data = [
            'content' => 'post.PERKULIAHAN.TUGAS.kalkulus',
            'tugas' => $tugas
        ];
        return view('pembungkus.wrapper', $data);
    }

    public function bahasainggris()
    {
        $tugas = Bahasainggrs::all();
        $data = [
            'content'=>'post.PERKULIAHAN.TUGAS.bahasainggris',
            'tugas'=>$tugas,
        ];
        return view('pembungkus.wrapper', $data);
    }
    public function jaringankomputer()
    {
        $tugas = Jaringankomputer::all();
        $data = [
            'content'=>'post.PERKULIAHAN.TUGAS.jaringankomputer',
            'tugas'=>$tugas,
        ];
        return view('pembungkus.wrapper', $data);
    }
    public function logikadigital()
    {
        $tugas = Logikadigital::all();
        $data = [
            'content'=>'post.PERKULIAHAN.TUGAS.logikadigital',
            'tugas'=>$tugas,
        ];
        return view('pembungkus.wrapper', $data);
    }
    public function pemogramanWeb()
    {
        $tugas = Pemogramanweb::all();
        $data = [
            'content'=>'post.PERKULIAHAN.TUGAS.pemogramanWeb',
            'tugas'=>$tugas,
        ];
        return view('pembungkus.wrapper', $data);
    }
    public function rekayasaperangkatlunak()
    {
        $tugas = Rekayasaperangkatlunak::all();
        $data = [
            'content'=>'post.PERKULIAHAN.TUGAS.rekayasaperangkatlunak',
            'tugas'=>$tugas,
        ];
        return view('pembungkus.wrapper', $data);
    }
    public function sistemoperasi()
    {
        $tugas = Sistemoperasi::all();
        $data = [
            'content'=>'post.PERKULIAHAN.TUGAS.sistemoperasi',
            'tugas'=>$tugas,
        ];
        return view('pembungkus.wrapper', $data);
    }
    public function Mail()
    {
        $data = [
            'content'=>'post.mail'
        ];
        return view('pembungkus.wrapper', $data);
    }
}
