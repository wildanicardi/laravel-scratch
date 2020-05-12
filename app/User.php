<?php

namespace App;

use App\Reply;
use App\Article;
use App\Project;
use App\Conversation;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    /**
     * Route notifications for the Nexmo channel.
     *
     * @param  \Illuminate\Notifications\Notification  $notification
     * @return string
     */
    public function routeNotificationForNexmo($notification)
    {
        return '';
    }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function article()
    {
        return $this->hasMany(Article::class);
    }
    public function project()
    {
        return $this->hasMany(Project::class);
    }
    public function conversations()
    {
        return $this->hasMany(Conversation::class);
    }
    public function repliy()
    {
        return $this->hasMany(Reply::class);
    }
}
