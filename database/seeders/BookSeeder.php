<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{

    static $books_list = [
        'Совершенный код',
        'PHP глазами хакера',
        'Laravel. Полное руководство',
        'PHP. Рецепты программирования',
        'MySQL по максимуму',
        'Паттерны объектно-ориентироаннного проектирования'
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$books_list as $list)
        {
            Book::create([
                'title' => $list,
            ]);
        }
    }
}
