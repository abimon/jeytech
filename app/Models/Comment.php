<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable = [
        'article_id',
        'name',
        'email',
        'comment_id',
        'comment'
    ];
    public function likes(){
        return $this->hasMany(Like::class, 'article_id', 'id');
    }
    public function article() {
        return $this->belongsTo(Article::class, 'article_id', 'id');
    }
}
