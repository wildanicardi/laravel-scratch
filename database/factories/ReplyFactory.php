<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\User;
use App\Reply;
use App\Conversation;
use Faker\Generator as Faker;

$factory->define(Reply::class, function (Faker $faker) {
    return [
        'user_id' => factory(\App\User::class),
        'conversation_id' => factory(\App\Conversation::class),
        'title' => $faker->sentence(),
    ];
});
