<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',

        // Atribut yang ditambahkan 
        'enable_status',
        'date_lahir',
        'kota_lahir',
        'telepon',
        'alm_jln_asal',
        'alm_jln_domisili',
        'alm_prov_asal',
        'alm_kota_asal',
        'alm_kec_asal',
        'alm_kel_asal',
        'alm_prov_domisili',
        'alm_kota_domisili',
        'alm_kec_domisili',
        'alm_kel_domisili',
        'user_role_id',
        'photo' 
    ];

    // Attribute yang memiliki nilai default
    protected $attributes = [
        'user_role_id'  => 2
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    // Relasi(invers) dengan table provinsi melalui model Provinsi
    public function provinsi_asal(){
        return $this->belongsTo(Provinsi::class);
    }

    // Relasi(invers) dengan table kota melalui model Kota
    public function kota(){
        return $this->belongsTo(Kota::class);
    }

    // Relasi(invers) dengan table kecamatan melalui model Kecamatan
    public function kecamatan(){
        return $this->belongsTo(Kecamatan::class);
    }

    // Relasi(invers) dengan table kelurahan melalui model Kelurahan
    public function kelurahan(){
        return $this->belongsTo(Kelurahan::class);
    }

    // Relasi(invers) dengan table user_roles memalui model UserRole
    public function user_role(){
        return $this->belongsTo(UserRole::class);
    } 
}
