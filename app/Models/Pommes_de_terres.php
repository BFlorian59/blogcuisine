<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pommes_de_terres extends Model
{
    protected $fillable = ['titre', 'origine', 'ingredient', 'histoire', 'image' , 'video'];
}
