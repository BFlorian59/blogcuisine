<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biscuis_moelleux extends Model
{
    protected $fillable = ['titre', 'origine', 'ingredient', 'histoire', 'image' , 'video'];
}
