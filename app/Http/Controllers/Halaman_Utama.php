<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Halaman_Utama extends Controller
{
    public function ke_main()
    {
        $data = DB::table('Data-Filem')->get();
        return view('Main',['da'=>$data]);
    }
}
