<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //
    protected $table = 'articles';


    protected $fillable = [
        'name', 'slug', 'description', 'fulldescription', 'username', 'hit', 'status', 'tags' , 'images' , 'category'
    ];
   }
