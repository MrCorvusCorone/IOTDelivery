<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    //
    public function passwordConfirm(Request $request, User $user){
        // Proses validasi password
        $validatedData = $request->validate([
            'passwordAuth' => ['required']
        ]);

        // Ambil data email user(auth) dan password dari input data untuk di cek kesesuainnya
        $authData = [
            'email'     => Auth::user()->email,
            'password'  => $request->passwordAuth
        ];

        // Jika email user ter-authentifikasi dan password input sesuai
        if(Auth::attempt($authData)){
            // 
        }

        // 
    }
}
