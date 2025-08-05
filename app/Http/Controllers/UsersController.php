<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Provinsi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data dari table users
        $data['users'] = User::where('enable_status', true)->get();

        // Data untuk breadcrumb (components.dashboard.breadcrumb.blade.php)
        $data['group']      = 'Settings and Configs';
        $data['heading']    = 'View List';
        $data['menu']       = 'Users Settings';
        $data['submenu']    = 'Users List';

        //
        return view('settings.userslist.index', ['data' => $data]);
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
        //
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
    public function edit(Request $request, User $user)
    {
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

            // Ambil data user yang akan di-edit dari table users
            $data['user'] = $user;

            // Ambil data alamat asal dan domisili dari user yang akan di-edit
            $type_alamat = ['asal', 'domisili'];
            foreach ($type_alamat as $alm) {
                $data['alm_wilayah_'.$alm] = DB::table('users')
                                        ->join('provinsi', 'provinsi.id', '=', 'users.alm_prov_'.$alm)
                                        ->join('kota', 'kota.id', '=', 'users.alm_kota_'.$alm)
                                        ->join('kecamatan', 'kecamatan.id', '=', 'users.alm_kec_'.$alm)
                                        ->join('kelurahan', 'kelurahan.id', '=', 'users.alm_kel_'.$alm)
                                        ->where('users.id', '=', $user->id)
                                        ->where('users.enable_status', '=', true)
                                        ->where('provinsi.enable_status', '=', true)
                                        ->where('kota.enable_status', '=', true)
                                        ->where('kecamatan.enable_status', '=', true)
                                        ->where('kelurahan.enable_status', '=', true)
                                        ->select('provinsi.name as prov_'.$alm, 'kota.name as kota_'.$alm, 'kecamatan.name as kec_'.$alm, 'kelurahan.name as kel_'.$alm)
                                        ->get();
            
                $data['alm_wilayah_'.$alm] = collect($data['alm_wilayah_'.$alm][0]);
            }

            // Ambil data provinsi dari table provinsi
            $data['provincies'] = Provinsi::where('enable_status', true)->get();

            // Data untuk breadcrumb (components.dashboard.breadcrumb.blade.php)
            $data['group']      = 'Settings and Configs';
            $data['heading']    = 'Edit User';
            $data['menu']       = 'Users Settings';
            $data['submenu']    = 'Users List';

            // Redirect 
            return view('settings.userslist.edit', ['data' => $data]);
        }

        // Jika email user(auth) dan password dari input data tidak sama
        return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        // Proses validasi data
        $validatedData = $request->validate([
            'name'              => ['required'],
            'email'             => ['required', 'email:rfc, dns'],
            'telepon'           => ['required', 'starts_with:+'],
            'date_lahir'        => ['required', 'date'],
            'kota_lahir'        => ['required'],
            'alm_prov_asal'     => ['nullable'],
            'alm_kota_asal'     => ['nullable'],
            'alm_kec_asal'      => ['nullable'],
            'alm_kel_asal'      => ['nullable'],
            'alm_jl_asal'       => ['nullable'],
            'alm_prov_domisili' => ['nullable'],
            'alm_kota_domisili' => ['nullable'],
            'alm_kec_domisili'  => ['nullable'],
            'alm_kel_domisili'  => ['nullable'],
            'alm_jl_domisili'   => ['nullable'],
            'photo'             => ['nullable','mimes:jpeg,png,jpg','max:2048'] // dalam satuan kB (1 MB = 1024 kB)
        ]);

        // Simpan value dari request file 
        $photo = $request->file('photo'); 

        // Jika terdapat file foto terlampir 
        if ($photo != null) {

            // Hapus photo profil sebelumnya jika ada
            if ($user->photo != '') {
                Storage::disk('public')->delete('usersdata/'.$user->email.'/images/'.$user->photo);
            }

            // Membuat nama photo dengan menggabung uuid dan ekstensi imagenya
            $photoName = Str::uuid().'.'.$photo->getClientOriginalExtension(); 

            // Proses simpan file image sesuai email user
            Storage::disk('public')->putFileAs('usersdata/'.$request['email'].'/images', $photo, $photoName); 

            $validatedData['photo'] = $photoName;

            // Membuat nama photo dengan menggabung uuid dan ekstensi imagenya
            $photoName = Str::uuid().'.'.$photo->getClientOriginalExtension(); 

            // Proses simpan file image sesuai email user
            Storage::disk('public')->putFileAs('usersdata/'.$request['email'].'/images', $photo, $photoName); 

            $validatedData['photo'] = $photoName;
        
        } else{
            
            $validatedData['photo'] = $user->photo;

        }

        // Proses input data ke table users
        User::where('id', $user->id)->update([
            'name'              => $validatedData['name'],
            'email'             => $validatedData['email'],
            'telepon'           => $validatedData['telepon'],
            'date_lahir'        => $validatedData['date_lahir'],
            'kota_lahir'        => $validatedData['kota_lahir'],
            'alm_prov_asal'     => $validatedData['alm_prov_asal'],
            'alm_kota_asal'     => $validatedData['alm_kota_asal'],
            'alm_kec_asal'      => $validatedData['alm_kec_asal'],
            'alm_kel_asal'      => $validatedData['alm_kel_asal'],
            'alm_jln_asal'      => $validatedData['alm_jl_asal'],
            'alm_prov_domisili' => $validatedData['alm_prov_domisili'],
            'alm_kota_domisili' => $validatedData['alm_kota_domisili'],
            'alm_kec_domisili'  => $validatedData['alm_kec_domisili'],
            'alm_kel_domisili'  => $validatedData['alm_kel_domisili'],
            'alm_jln_domisili'  => $validatedData['alm_jl_domisili'],
            'photo'             => $validatedData['photo'],
        ]);

        // Redirect ke halaman login dengan pesan
        return redirect('/userslist')->with('edit_profile_success', '');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
