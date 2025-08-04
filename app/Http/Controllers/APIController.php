<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Kelurahan;
use App\Models\Kota;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isEmpty;

class APIController extends Controller
{
    // Fungsi untuk mendapatkan data dari API -- start
    public function getData($url_param, $wilayah_param){
        // URL API yang diakses
        $url = $url_param.$wilayah_param.'.json'; 

        // Buat konteks stream dengan opsi SSL yang menonaktifkan verifikasi peer
        $context = stream_context_create([
            'ssl' => [
                'verify_peer'      => false, // Menonaktifkan verifikasi sertifikat server
                'verify_peer_name' => false, // Menonaktifkan verifikasi nama host
            ]
        ]);

        // Ambil data dari https://wilayah.id/ ketika seeder pertama kali dijalankan.
        $result = file_get_contents($url, false, $context); // Gunakan file_get_contents() dengan konteks yang dibuat
        $result = json_decode($result, true); // decode json ke bentuk array Associative

        // Merubah Array Associative $provinsi menjadi bentuk collection
        $result = collect($result['data']);

        // Return
        return $result;
    }


    // Check data dari table kota
    public function checkKota($provinsi){

        // Ambil data kota sesuai $provinsi
        $kota = Kota::where('provinsi_id', $provinsi)->get();
        $kota = collect($kota);

        // Return
        return $kota;
    }

    // Ambil data dari table kota
    public function getKota($provinsi){
        // Ambil data URL API yang diakses
        $kota = $this->getData('https://wilayah.id/api/regencies/', $provinsi);
      
        // Simpan data $kota ke table kota
        foreach ($kota as $item) {
            Kota::create([
                'enable_status' => true,
                'id'            => $item['code'],
                'name'          => $item['name'],
                'provinsi_id'   => $provinsi
            ]);
        }

        $kota = Kota::where('provinsi_id', $provinsi)->get();
        $kota = collect($kota);

        // Return 
        return $kota;
    }


    // Check data dari table kecamatan
    public function checkKecamatan($kota){
        // Ambil data kecamatan sesuai $provinsi
        $kecamatan = Kecamatan::where('kota_id', $kota)->get();
        $kecamatan = collect($kecamatan);

        // Return
        return $kecamatan;
    }

    // Ambil data dari table kecamatan
    public function getKecamatan($kota){
        // Ambil data URL API yang diakses
        $kecamatan = $this->getData('https://wilayah.id/api/districts/', $kota);

        // Simpan data $kota ke table kota
        foreach ($kecamatan as $item) {
            Kecamatan::create([
                'enable_status' => true,
                'id'            => $item['code'],
                'name'          => $item['name'],
                'kota_id'       => $kota
            ]);
        }

        $kecamatan = Kecamatan::where('kota_id', $kota)->get();
        $kecamatan = collect($kecamatan);

        // Return 
        return $kecamatan;
    }

    // Check data dari table kecamatan
    public function checkKelurahan($kecamatan){
        // Ambil data kecamatan sesuai $provinsi
        $kelurahan = Kelurahan::where('kecamatan_id', $kecamatan)->get();
        $kelurahan = collect($kelurahan);

        // Return
        return $kelurahan;
    }

    // Ambil data dari table kecamatan
    public function getKelurahan($kecamatan){
        // Ambil data URL API yang diakses
        $kelurahan = $this->getData('https://wilayah.id/api/villages/', $kecamatan);

        // Simpan data $kota ke table kota
        foreach ($kelurahan as $item) {
            Kelurahan::create([
                'enable_status' => true,
                'id'            => $item['code'],
                'name'          => $item['name'],
                'kecamatan_id'  => $kecamatan
            ]);
        }

        $kelurahan = Kelurahan::where('kecamatan_id', $kecamatan)->get();
        $kelurahan = collect($kelurahan);

        // Return 
        return $kelurahan;
    }
    
}
