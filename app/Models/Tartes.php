<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tartes extends Model
{
    protected $fillable = ['titre', 'origine', 'ingredient', 'histoire', 'image' , 'video'];
}
