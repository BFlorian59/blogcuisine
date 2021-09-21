<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pâtes extends Model
{
    protected $fillable = ['titre', 'origine', 'ingredient', 'histoire', 'image' , 'video'];
}
