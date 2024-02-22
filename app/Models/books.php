<?php

namespace App\Models;

use App\Models\books;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class books extends Model
{
    use HasFactory;
    protected $fillable = [
        'judul',
        'penulis',
        'tahun_terbit',
        'foto',
    ];
}

