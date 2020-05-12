<?php

namespace App\Providers;

use App\User;
use App\Conversation;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //authorization conversation
        // Gate::define('update-conversation', function (User $user, Conversation $conversation) {
        //     // return true;
        //     return $conversation->user->is($user);
        // });

        // user abilty role
        // Gate::before(function ($user, $ability) {
        //     return $user->abilities()->contains($ability);
        // });
    }
}
