<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserRole extends Model
{
    use HasFactory;

    // Table app_modules
    protected $table = 'user_roles';

    // Primary Key
    protected $primaryKey = 'id';

    // Kolom yang boleh diisi 
    protected $fillable = [
        'enable_status',
        'name',
        'desc'
    ];

    // Relasi dengan table users melalui model User
    public function users(){
        return $this->hasMany(User::class);
    } 
}
