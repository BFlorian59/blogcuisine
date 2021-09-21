<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Smoothies extends Model
{
    protected $fillable = ['titre', 'origine', 'ingredient', 'histoire', 'image' , 'video'];
}
