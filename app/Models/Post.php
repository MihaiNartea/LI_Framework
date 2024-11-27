<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category_id',
        'published_at'
    ];


    public function category() {
        return $this->belongsTo(Category::class);
    }
}
