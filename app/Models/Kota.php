<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model
{
    use HasFactory;

    // Table kota
    protected $table = 'kota';

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
        'provinsi_id'
    ];

    // Relasi(invers) dengan table provinsi melalui model Provinsi
    public function provinsi(){
        return $this->belongsTo(Provinsi::class);
    } 

    // Relasi dengan table kecamatan melaui model Kecamatan
    public function kecamatan(){
        return $this->hasMany(Kecamatan::class);
    }
}
