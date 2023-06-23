<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class Registrasi extends Controller
{
public function index()
{
    return view('index');
}



public function Login(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ],
    [
        'email.required' => 'Harap mengisi email',
        'password.required' => 'Harap mengisi password'
    ]);

    $datalogin = [
        'email' => $request->email,
        'password' => $request->password
    ];

    if (Auth::attempt($datalogin)) {
        // Login sukses
        $id = User::where('email', $datalogin['email'])->first()->id;
        $request->session()->put('id',$id);
        return redirect('/main');

    } else {
        // Login gagal
        return redirect('/')->withErrors('password/email salah');
    }
}

public function logout(){
    Auth::logout();
    session_abort();
    return redirect('/');
}

public function registrasi()
{
    return view('singin');
}

public function insert_user(Request $request)
{
    $request->validate([
        'name'=>'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6'
    ],
    [
        'email.required' => 'Harap mengisi emailnya',
        'email.email'=>'email tidak valid',
        'email.unique'=>'Email sudah ada silahkan login',
        'password.required' => 'Harap mengisi passsword',
        'password.min'=>'Minimum 6',
        'name.required'=>'Harap mengisi nama'
    ]);

    $data = [
        'name'=>$request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
    ];

    User::create($data);
    return redirect('/')->with('pesan','Silahkan Login');
}
        }

