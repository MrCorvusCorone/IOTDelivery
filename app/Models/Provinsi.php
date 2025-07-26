<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    // Table Provinsi
    protected $table = 'provinsi';

    // Primary Key
    protected $primaryKey   = 'id';
    protected $keyType      = 'string';
    public $incrementing    = false;

    // Kolom yang boleh diisi 
    protected $fillable = [
        'id',
        'enable_status',
        'name'
    ];

    // Relasi dengan table kota melalui model Kota
    public function kota(){
        return $this->hasMany(Kota::class);
    }

    // Relasi dengan table users melaui model User
    public function user(){
        return $this->hasMany(User::class);
    }
}
