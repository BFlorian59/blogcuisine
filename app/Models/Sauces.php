<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sauces extends Model
{
    protected $fillable = ['titre', 'origine', 'ingredient', 'histoire', 'image' , 'video'];
}
