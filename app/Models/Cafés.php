<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cafés extends Model
{
    protected $fillable = ['titre', 'origine', 'ingredient', 'histoire', 'image' , 'video'];
}
