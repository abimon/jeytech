<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category',
        'slag',
        'author',
        'path',
        'content',
        'tags',
        'cover',
        'except'
    ];
    public function comments(){
        return $this->hasMany(Comment::class, 'article_id', 'id');
    }
    public function likes(){
        return $this->hasMany(Like::class, 'article_id', 'id');
    }

}
