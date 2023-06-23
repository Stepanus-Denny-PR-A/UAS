<?php

namespace App\Http\Controllers;

use App\Models\Studio;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreStudioRequest;
use App\Http\Requests\UpdateStudioRequest;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('Studio')->get();
        return view('Studio_main',['da'=>$data]);
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreStudioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function more($id)
    {
        $data = DB::table('Studio')->get();
        foreach ($data as $dt) {
            if ($dt->id == $id) {
                $dt->vidio = str_replace("https://youtu.be/", "https://www.youtube.com/embed/", $dt->vidio);
                return view('Studio_deskripsi', ['data' => $dt]);
            }}}
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Studio $studio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStudioRequest $request, Studio $studio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Studio $studio)
    {
        //
    }
}
