<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{

       //ajout
    /**
     * @use HasFactory<\Database\Factories\CommentFactory>
     */
    use HasFactory;

    protected $fillable = [
        'comment',
        'user_id',
        'article_id'
    ];
}
