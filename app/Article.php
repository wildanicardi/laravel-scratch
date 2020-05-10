<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
}
