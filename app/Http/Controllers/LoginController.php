<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return ke page login
        return view('auth.login');
    }

    public function authenticate(Request $request){
        // Proses validasi data input dari form login
        $validatedData = $request->validate([
            'email'     => ['required', 'email:rfc,dns'],
            'password'  => ['required', 'max:100', 'min:5']
        ]);

        // Jika proses validasi data berhasil
        if (Auth::attempt($validatedData)) {
            $request->session()->regenerate(); // Untuk menghindari teknik hacking session fixation

            // Jika proses authenticate berhasil
            return redirect()->intended('/'); // Redirect ke URL tertentu melalui authentification middleware
        }
        
        // Return ke halaman sebelumnya jika proses validasi data gagal
        return back()->with('login_failed', 'Login gagal! Silahkan login kembali!');
    }

    public function logout(Request $request){
        // Logout
        Auth::Logout();

        $request->session()->invalidate(); // Agar session sebelumnya tidak dapt dipakai kembali setelah logout

        $request->session()->regenerateToken(); // Membuat kembali token agar tidak dibajak

        // Redirect ke page home
        return redirect('/');
    }
}
