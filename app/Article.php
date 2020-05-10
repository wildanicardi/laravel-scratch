<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Tag;

class Article extends Model
{
    protected $table = 'articles';
    protected $guarded = [];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
    public function path()
    {
        return route('articles.show', $this);
    }
    public function users()
    {
        return $this->belongsTo(User::class);
    }
    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }
}
