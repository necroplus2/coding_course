<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function masuk(Request $request) {
        //dd($request);
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('home');
        }
 
        return back()->with('loginSalah', 'Maaf, Silahkan cek email atau password anda dengan benar');
    }

    public function logout(Request $request) {
        Auth::logout();
 
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    public function daftar(Request $request) {
        $arrDaftar = $request->validate([
            'nama_lengkap' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $arrDaftar['password'] = bcrypt($arrDaftar['password']);
        $arrDaftar['status'] = 'user';

        // dd($arrDaftar);
        User::create($arrDaftar);

        return redirect('/masuk')->with('sukses', 'Daftar Berhasil! Silahkan Login');
        

    }
}
