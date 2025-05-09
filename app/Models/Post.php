<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','content','category_id','author_id','image','status'];

    public function category() { return $this->belongsTo(Category::class); }

    public function author()   { return $this->belongsTo(User::class, 'author_id'); }
    
    public function tags()     { return $this->belongsToMany(Tag::class); }
}
