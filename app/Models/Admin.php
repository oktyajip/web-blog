<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $table = 'admins'; // Nama tabel kustom Anda

    // Kolom-kolom yang bisa diisi
    protected $fillable = [
        'name', 'email', 'password',
    ];

    // Kolom yang harus disembunyikan
    protected $hidden = [
        'password', 'remember_token',
    ];
}
