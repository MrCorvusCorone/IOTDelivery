<?php

namespace Database\Seeders;

use App\Models\Provinsi;
use App\Models\Kota;
use App\Models\Kecamatan;
use App\Models\Kelurahan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WilayahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // URL API yang diakses
        $url = 'https://wilayah.id/api/provinces.json';

        // Buat konteks stream dengan opsi SSL yang menonaktifkan verifikasi peer
        $context = stream_context_create([
            'ssl' => [
                'verify_peer'      => false, // Menonaktifkan verifikasi sertifikat server
                'verify_peer_name' => false, // Menonaktifkan verifikasi nama host
            ]
        ]);

        // Ambil data dari https://wilayah.id/ ketika seeder pertama kali dijalankan.
        $provinsi = file_get_contents($url, false, $context); // Gunakan file_get_contents() dengan konteks yang dibuat
        $provinsi = json_decode($provinsi, true); // decode json ke bentuk array Associative

        // Merubah Array Associative $provinsi menjadi bentuk collection
        $provinsi = collect($provinsi['data']);

        // Data dengan isi null untuk mengisi foreign key table lain
        Provinsi::create([
            'enable_status' => true,
            'id'            => '0',
            'name'          => "null"
        ]);

        // Simpan data $provinsi ke table provinsi
        foreach($provinsi as $prov){
            Provinsi::create([
                'enable_status' => true,
                'id'            => $prov['code'],
                'name'          => $prov['name']
            ]);
        } // /.province

        // Kota data dengan isi null untuk mengisi foreign key table lain
        Kota::create([
            'enable_status' => true,
            'id'            => '0',
            'name'          => 'null',
            'provinsi_id'   => '0'
        ]); // /.kota

        
        // Kecamatan data dengan isi null untuk mengisi foreign key table lain
        Kecamatan::create([
            'enable_status' => true,
            'id'            => '0',
            'name'          => 'null',
            'kota_id'       => '0'
        ]); // /.kecamatan

        // Kelurahan data dengan isi null untuk mengisi foreign key table lain
        Kelurahan::create([
            'enable_status' => true,
            'id'            => '0',
            'name'          => 'null',
            'kecamatan_id'  => '0'
        ]); // /.kelurahan
    }
}
