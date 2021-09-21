<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Viande extends Model
{
    protected $fillable = ['titre', 'origine', 'ingredient', 'histoire', 'image' , 'video'];
}
