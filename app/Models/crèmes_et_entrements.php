<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class crèmes_et_entrements extends Model
{
    protected $fillable = ['titre', 'origine', 'ingredient', 'histoire', 'image' , 'video'];
}
