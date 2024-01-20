<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LinkApp extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_client',
        'nama_aplikasi',
        'link_aplikasi',
        'username_aplikasi',
        'password_aplikasi'
    ];
}
