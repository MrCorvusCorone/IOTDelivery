<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin -- start
        UserRole::create([
            'enable_status'     => true,
            'name'              => 'admin',
            'desc'              => 'Akun super user yang digunakan untuk membuat, edit, dan delete akun, mereset seluruh password, mengatur hak akses, manajemen database dan aplikasi',
        ]); // Admin -- end 
        
        // User -- start
        UserRole::create([
            'enable_status'     => true,
            'name'              => 'user',
            'desc'              => 'Akun yang digunakan untuk promote registrasi akun, promote delete akun',
        ]); // User -- end
    
    }
}
