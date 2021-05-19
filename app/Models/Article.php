<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title', 'body'];
    use HasFactory; //no borrar esto, sirve para hacer los seeders, llama metodos de los seeders
}
