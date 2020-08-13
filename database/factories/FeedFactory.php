<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Feed;
use Faker\Generator as Faker;

$factory->define(Feed::class, function (Faker $faker) {
    return [
        'feed_url' => $faker->unique()->url,
        'site_url' => $faker->unique()->url,
        'site_title' => $faker->sentence,
        'last_updated' => $faker->dateTimeThisMonth(),
    ];
});
