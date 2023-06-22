<?php

namespace App\Http\Controllers;

use App\Models\komentar;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class Bagian_Deskripsi extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $data = DB::table('data-filem')->get();
        $komentar= DB::table('komentar')->get();
        foreach ($data as $dt) {
            if ($dt->id == $id) {
                $dt->Trailer = str_replace("https://youtu.be/", "https://www.youtube.com/embed/", $dt->Trailer);
                return view('deskripsi', ['data' => $dt,'coments'=>$komentar]);
            }}



    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=[
            'ID_filem'=>$request->id,
            'ID_user'=>session('id'),
            'Isi'=>$request->isi
        ];
        komentar::create($data);
        return redirect($request->id);
    }

    /**
     * Display the specified resource.
     */
    public function show(komentar $komentar)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(komentar $komentar)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, komentar $komentar)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(komentar $komentar)
    {
        //
    }
}
