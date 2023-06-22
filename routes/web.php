<?php
use App\Http\Controllers\Registrasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Bagian_Deskripsi;
use App\Http\Controllers\Halaman_Utama;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [Registrasi::class,'index']);

Route::post('/login',[Registrasi::class,'Login']);

Route::get('/index/sign_in',[Registrasi::class,'registrasi']);

Route::post('/index/create_user',[Registrasi::class,'insert_user']);

Route::get('/Main/logout',[Registrasi::class,'logout']);

Route::get('/main', [Halaman_Utama::class,'ke_main']);

Route::get('/{id}', [Bagian_Deskripsi::class,'index']);

Route::post('/store', [Bagian_Deskripsi::class,'store']);


