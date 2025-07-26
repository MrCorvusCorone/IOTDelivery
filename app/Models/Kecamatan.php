<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    // Table kecamatan
    protected $table = 'kecamatan';

    // Primary Key
    protected $primaryKey   = 'id';
    protected $keyType      = 'string';
    public $incrementing    = false;

    // Kolom yang boleh diisi 
    protected $fillable = [
        'id',
        'enable_status',
        'name',

        // Foreign Key
        'kota_id'
    ];

    // Relasi(invers) dengan table kota melalui model Kota
    public function kota(){
        return $this->belongsTo(Provinsi::class);
    }

    // Relasi dengan table kelurahan melalui model Kelurahan
    public function kelurahan(){
        return $this->hasMany(Kelurahan::class);
    }

}
