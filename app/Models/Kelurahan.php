<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelurahan extends Model
{
    use HasFactory;

    // Table kelurahan
    protected $table = 'kelurahan';

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
        'kecamatan_id'
    ];

    // Relasi(invers) dengan table kecamatan melalui model Kecamatan
    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class);
    }

}
