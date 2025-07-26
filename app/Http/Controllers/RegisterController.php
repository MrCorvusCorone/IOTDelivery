<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('auth.register');
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
    public function store(Request $request)
    {
        // Proses validasi data input
        $validatedData = $request->validate([
            'name'              => ['required', 'max:50', 'min:7'],
            'email'             => ['required', 'email:rfc,dns', 'unique:users'],
            'password'          => ['required', 'max:100', 'min:5'],
            'retypepassword'    => ['required', 'same:password']
        ]);

        // Prose Encryption PAssword
        // $validatedData['password'] = bcrypt($validatedData['password']); // Menggunakan bcrypt() bawaan PHP 
        $validatedData['password'] = Hash::make($validatedData['password']); // Menggunakan method static Hash::make() bawaan Laravel

        // Proses store datainput ke table users
        User::create([
            'name'      => $validatedData['name'],
            'email'     => $validatedData['email'],
            'password'  => $validatedData['password']
        ]);

        // Setelah prose store data input ke table users selesai, redirect ke view auth.login
        return redirect('/login')->with('register_success', 'Proses registrasi akun Anda sukses. Silahkan untuk login.');     
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
