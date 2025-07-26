<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UserRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Ambil data dari table users join user_roles
        $data['users'] = DB::table('users')
                        ->join('user_roles', 'user_roles.id', '=', 'users.user_role_id')
                        ->where('users.enable_status', '=', true)
                        ->select('users.id as user_id', 'users.name as user_name', 'users.email as email', 'users.telepon as telp', 'user_roles.id as role_id', 'user_roles.name as role_name', 'user_roles.desc as role_desc')
                        ->get();
        
        // Ambil data dari table user_roles
        $data['roles'] = UserRole::where('enable_status', true)->get();

        // Data untuk breadcrumb (components.dashboard.breadcrumb.blade.php)
        $data['heading']    = 'User Role List';
        $data['group']      = 'Settings and Configs';
        $data['menu']       = 'Users Setting';
        $data['submenu']    = 'Users Role';

        // 
        return view('settings.usersroles.index', ['data' => $data]);

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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Type casting dari string ke integer
        $user_role_id = $request['user_role'];

        // Proses update table users
        User::where('id', $id)
            ->where('enable_status', 1)
            ->update(['user_role_id' => $user_role_id]);
 
        // Ambil data dari table users join user_roles
        $data['users'] = DB::table('users')
                        ->join('user_roles', 'user_roles.id', '=', 'users.user_role_id')
                        ->where('users.enable_status', '=', true)
                        ->select('users.id as user_id', 'users.name as user_name', 'users.email as email', 'users.telepon as telp', 'user_roles.id as role_id', 'user_roles.name as role_name', 'user_roles.desc as role_desc')
                        ->get();
        
        // Ambil data dari table user_roles
        $data['roles'] = UserRole::where('enable_status', true)->get();

        // Arahkan ke view usersroles.index.php 
        return view('settings.usersroles.index', ['data' => $data]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
