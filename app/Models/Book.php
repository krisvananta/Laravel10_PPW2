<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $table = 'books'; // untuk inisiasi tabel apa yang akan digunakan pada model ini

    protected $dates = ['date_published'];

    protected $fillable = [
        'title',
        'author',
        'date_published',
        'price',
    ];
}


