<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Entry;
use Faker\Generator as Faker;

$factory->define(Entry::class, function (Faker $faker) {
    return [
        'feed_id' => 2,
        'date_published' => $faker->dateTime(),
        'date_updated' => $faker->dateTimeThisMonth(),
        'entry_url' => $faker->unique()->url,
        'entry_title' => $faker->sentence,
        'entry_teaser' => $faker->paragraph(2),
        'entry_content' => $faker->realText(),
    ];
});
