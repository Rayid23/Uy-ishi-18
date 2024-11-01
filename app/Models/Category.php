<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'categories';

    protected $fillable = [
        'name', 'tr', 'status'
    ];

    public function posts(){
        return $this->hasMany(Post::class, 'cat_id', 'id');
    }
}
