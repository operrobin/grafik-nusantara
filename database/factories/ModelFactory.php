<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'activated' => true,
        'created_at' => $faker->dateTime,
        'deleted_at' => null,
        'email' => $faker->email,
        'first_name' => $faker->firstName,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'last_name' => $faker->lastName,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\CollectionType::class, static function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime,
        'deleted_at' => null,
        'description' => $faker->sentence,
        'name' => $faker->firstName,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\CollectionCategory::class, static function (Faker\Generator $faker) {
    return [
        'created_at' => $faker->dateTime,
        'deleted_at' => null,
        'description' => $faker->sentence,
        'name' => $faker->firstName,
        'type_id' => $faker->sentence,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Collection::class, static function (Faker\Generator $faker) {
    return [
        'category_id' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'created_when' => $faker->sentence,
        'created_who' => $faker->sentence,
        'description' => $faker->sentence,
        'image_path' => $faker->sentence,
        'name' => $faker->firstName,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Journal::class, static function (Faker\Generator $faker) {
    return [
        'content' => $faker->text(),
        'created_at' => $faker->dateTime,
        'published_at' => $faker->dateTime,
        'tags' => $faker->sentence,
        'title' => $faker->sentence,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Config::class, static function (Faker\Generator $faker) {
    return [
        'name' => $faker->firstName,
        'type' => $faker->sentence,
        'content' => $faker->text(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});
