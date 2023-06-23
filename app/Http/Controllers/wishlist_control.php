<?php

namespace App\Http\Controllers;

use App\Models\Wishlist;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class wishlist_control extends Controller
{
    public function index()
    {
        $data = Wishlist::get();
        $filem = collect();
        $id_wish=[];
        foreach ($data as $key) {
            if($key->id_user==session('id')){
            $ids = null;
            $ids = DB::table('data-filem')->where('id', $key->id_filem)->get();
            if ($ids->isNotEmpty()) {
                $filem = $filem->concat($ids);
                $id_wish[]=$key->id;
            }
        }
    }
        return view('table', ['data' => $filem,'id_wish'=>$id_wish]);
}

    public function hapus($id)
    {
        $data = Wishlist::find($id);
        if ($data) {
            $data->delete();
        }
        return redirect('/Main/wishlist');
    }


    public function add($id)
{

    $data = [
        'id_user'=>session('id'),
        'id_filem' => $id,
    ];

    Wishlist::create($data);
    return redirect('/Main/wishlist');
}

}
