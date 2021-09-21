<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Gâteaux_maison extends Model
{
    protected $fillable = ['titre', 'origine', 'ingredient', 'histoire', 'image' , 'video'];
}
