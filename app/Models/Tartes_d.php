<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Tartes_d extends Model
{
    protected $fillable = ['titre', 'origine', 'ingredient', 'histoire', 'image' , 'video'];
}
