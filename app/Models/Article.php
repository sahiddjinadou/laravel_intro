<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    //ajout
    /**
     * @use HasFactory<\Database\Factories\ArticleFactory>
     */
    use HasFactory;
    protected $fillable = ['title', 'body', 'user_id', 'image'];
}
