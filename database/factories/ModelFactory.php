<?php

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(Brackets\AdminAuth\Models\AdminUser::class, function (Faker\Generator $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'activated' => true,
        'forbidden' => $faker->boolean(),
        'language' => 'en',
        'deleted_at' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
    ];
});/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Category::class, function (Faker\Generator $faker) {
    return [
        'category' => $faker->sentence,
        'active' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'account_types_id' => $faker->randomNumber(5),
        
        
    ];
});

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'firstname' => $faker->sentence,
        'lastname' => $faker->sentence,
        'email_verified_at' => $faker->dateTime,
        'email' => $faker->email,
        'password' => bcrypt($faker->password),
        'remember_token' => null,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'phone' => $faker->sentence,
        'birthday' => $faker->date(),
        'chapters_id' => $faker->randomNumber(5),
        
        
    ];
});

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Chapter::class, function (Faker\Generator $faker) {
    return [
        'chapter' => $faker->sentence,
        'description' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\GivingChannel::class, function (Faker\Generator $faker) {
    return [
        'channel' => $faker->sentence,
        'active' => $faker->boolean(),
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'description' => $faker->sentence,
        
        
    ];
});

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\GivingRecord::class, function (Faker\Generator $faker) {
    return [
        'amount' => $faker->randomFloat,
        'currency' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'giving_channel_id' => $faker->randomNumber(5),
        'accounts_id' => $faker->randomNumber(5),
        
        
    ];
});

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\AccountType::class, function (Faker\Generator $faker) {
    return [
        'type' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        
        
    ];
});

/** @var  \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Models\Account::class, function (Faker\Generator $faker) {
    return [
        'acc_number' => $faker->sentence,
        'created_at' => $faker->dateTime,
        'updated_at' => $faker->dateTime,
        'account_type_id' => $faker->randomNumber(5),
        'account_status_id' => $faker->randomNumber(5),
        
        
    ];
});

