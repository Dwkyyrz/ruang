<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datasiswa extends Model
{
    use HasFactory;

    protected $table = 'datasiswa'; // Nama tabel di database

    protected $fillable = [
        'name', 'email', 'phone', 'school', 'class'
    ];
}
