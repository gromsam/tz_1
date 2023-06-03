<?php

namespace Database\Seeders;

//use Database\Factories\AuthorSeeder;
//use Database\Factories\BookFactory;
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
        $this->call(BookSeeder::class);
        $this->call(AuthorSeeder::class);
        $this->call(AuthorBookSeeder::class);
    }
}
