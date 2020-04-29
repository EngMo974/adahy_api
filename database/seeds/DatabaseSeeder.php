<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\User::class, 20)->create();
        factory(\App\Type::class, 2)->create();
        factory(\App\Post::class, 50)->create();
        factory(\App\Store::class, 15)->create();
    }
}
