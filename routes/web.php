<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BahasainggrsController;
use App\Http\Controllers\JaringankomputerController;
use App\Http\Controllers\KalkulusController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\LogikadigitalController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PemogramanwebController;
use App\Http\Controllers\RekayasaperangkatlunakController;
use App\Http\Controllers\SistemoperasiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// DASHBOARD
Route::get('/', [PageController::class, 'index'])->name('dashboard');
// KALENDER
Route::get('/kalender', [PageController::class, 'kalender'])->name('kalender');
// LOGIN
Route::get('/login', [PageController::class, 'login'])->name('login');
// REGISTRASI ADMIN
Route::get('/registrasi', [PageController::class, 'registrasi'])->name('registrasi');
// REGISTRASI USER
Route::get('/registrasiU', [PageController::class, 'registrasiUser'])->name('registrasiU');
// REGISTRASI KEUANGAN
Route::get('/registrasiK', [PageController::class, 'registrasiKeuangan'])->name('registrasiK');
// PERKULIAHAN
Route::get('/smester3', [PageController::class, 'smester3'])->name('smester3');
// CONTACT
Route::get('/contact', [PageController::class, 'kontak'])->name('contact');
// MATA KULIAH
Route::get('/jaringankomputer', [PageController::class, 'jaringankomputer'])->name('jaringankomputer');
Route::get('/kalkulus', [PageController::class, 'kalkulus'])->name('kalkulus');
Route::get('/pemogramanWeb', [PageController::class, 'pemogramanWeb'])->name('pemogramanWeb');
Route::get('/rekayasaperangkatlunak', [PageController::class, 'rekayasaperangkatlunak'])->name('rekayasaperangkatlunak');
Route::get('/sistemoperasi', [PageController::class, 'sistemoperasi'])->name('sistemoperasi');
Route::get('/logikadigital', [PageController::class, 'logikadigital'])->name('logikadigital');
Route::get('/bahasainggris', [PageController::class, 'bahasainggris'])->name('bahasainggris');
Route::get('/mail', [PageController::class, 'Mail'])->name('mail');
// REGISTRASI CONTROLLER
Route::post('/kirim-admin', [AdminController::class, 'Kirim'])->name('kirim-admin');
Route::post('/kkirim-user',[UserController::class, 'KirimU'])->name('kirim-user');
Route::post('/kirim-keuangan',[KeuanganController::class, 'KirimK'])->name('kirim-keuangan');
Route::post('/kalkulusKirim',[KalkulusController::class,'Kalkulus'])->name('kirim-kalkulus');
Route::post('/sistemoperasiKirim', [SistemoperasiController::class, 'sistemoperasi'])->name('kirim-sistemoperasi');
Route::post('/bahasainggrisKirim', [BahasainggrsController::class, 'bahasainggris'])->name('kirim-inggris');
Route::post('/pemogramanwebKirim', [PemogramanwebController::class, 'pemogramanweb'])->name('kirim-pemogramanweb');
Route::post('/logikadigitalKirim', [LogikadigitalController::class, 'logikadigital'])->name('kirim-logikadigital');
Route::post('/relayasaperangkatlunakKirim', [RekayasaperangkatlunakController::class, 'rekayasaperangkatlunak'])->name('kirim-rekayasaperangkatlunak');
Route::post('/jaringankomputerKirim', [JaringankomputerController::class,'jaringankomputer'])->name('kirim-jaringankomputer');