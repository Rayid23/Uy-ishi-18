<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'title', 'cat_id', 'description', 'content', 'image',
        'like', 'dislike', 'comment', 'view'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id', 'id');
    }

    public function view()
    {
        return $this->hasMany(View::class, 'view_id', 'id');
    }

    public function comment()
    {
        return $this->hasMany(Comment::class, 'comment_id', 'id');
    }

    public function likes()
    {
        return $this->hasMany(LikeOrDis::class, 'post_id', 'id');
    }
}
