<?php
use App\Http\Controllers\Registrasi;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Halaman_Utama;
use App\Http\Controllers\Bagian_Deskripsi;
use App\Http\Controllers\StudioController;
use App\Http\Controllers\wishlist_control;

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
Route::get('/wish{id}', [wishlist_control::class,'add']);

Route::get('/del{id}', [wishlist_control::class,'hapus']);

Route::post('/store', [Bagian_Deskripsi::class,'store']);

Route::get('/', [Registrasi::class,'index']);

Route::post('/login',[Registrasi::class,'Login']);

Route::get('/index/sign_in',[Registrasi::class,'registrasi']);

Route::post('/index/create_user',[Registrasi::class,'insert_user']);

Route::get('/Main/logout',[Registrasi::class,'logout']);

Route::get('/main', [Halaman_Utama::class,'ke_main']);

Route::get('/Main/Studio', [StudioController::class,'index']);

Route::get('/Studio{id}', [StudioController::class,'more']);

Route::get('/{id}', [Bagian_Deskripsi::class,'index']);

Route::get('/Main/wishlist', [wishlist_control::class,'index']);




