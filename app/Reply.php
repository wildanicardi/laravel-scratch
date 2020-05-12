<?php

namespace App;

use App\User;
use App\Conversation;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    protected $table = 'replies';
    protected $guarded = [];

    // public function getRouteKeyName()
    // {
    //     return 'slug';
    // }
    public function isBest()
    {
        return $this->id === $this->conversation->best_reply_id;
    }
    public function conversation()
    {
        return $this->belongsTo(Conversation::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
