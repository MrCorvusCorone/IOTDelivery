<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {        
        // Admin -- Teguh Wijoseno --start
        User::create([
            'name'              => 'Teguh Wijoseno',
            'email'             => 'mr.tytoalba@gmail.com',
            'password'          => 'Password*123', 
            'enable_status'     => true,
            'date_lahir'        => '1988-12-23',
            'kota_lahir'        => 'Bandung',
            'telepon'           => '+6285175445569',
            'alm_jln_asal'      => 'Jl. Sasak Batu no.45',
            'alm_jln_domisili'  => 'Jl. Sasak Batu no.45',
            'alm_prov_asal'     => '32',
            'alm_kota_asal'     => '0',
            'alm_kec_asal'      => '0',
            'alm_kel_asal'      => '0',
            'alm_prov_domisili' => '0',
            'alm_kota_domisili' => '0',
            'alm_kec_domisili'  => '0',
            'alm_kel_domisili'  => '0',
            'user_role_id'      => 1, // user role: admin
            'photo'             => ''
        ]);// Admin -- Teguh Wijoseno -- end

        // User -- Anastasia Kosasih --start
        User::create([
            'name'              => 'Anastasia Kosasih',
            'email'             => 'anastasiakosasih@gmail.com',
            'password'          => 'Tobrut', 
            'enable_status'     => true,
            'date_lahir'        => '2002-01-13',
            'kota_lahir'        => 'Jakarta',
            'telepon'           => '+6285169696969',
            'alm_jln_asal'      => 'Jl. Sasak Batu no.45',
            'alm_jln_domisili'  => 'Jl. Sasak Batu no.45',
            'alm_prov_asal'     => '32',
            'alm_kota_asal'     => '0',
            'alm_kec_asal'      => '0',
            'alm_kel_asal'      => '0',
            'alm_prov_domisili' => '0',
            'alm_kota_domisili' => '0',
            'alm_kec_domisili'  => '0',
            'alm_kel_domisili'  => '0',
            'user_role_id'      => 2, // user role: user,
            'photo'             => ''
        ]);// User -- Anastasia Kosasih --end
    }
}
