<?php

namespace App\Models;
use app\Http\Controllers\Control;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Data_filem extends Model
{
    protected $fillable = [
            'Judul',
            'Gambar',
            'Tahun_Terbit',
            'Deskripsi',
            'Biaya_Pembuatan',
            'Pendapatan',
            'Trailer',
            'Sutradara',
            'Pemeran'];

    }
