<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    static $author_list = [
        'Стив Макконел',
        'Михаил Фленов',
        'Метт Стаффер',
        'Дэвид Скляр',
        'Адам Трахтенберг',
        'Бэрон Шварц',
        'Вадим Ткаченоко',
        'Пётр Зайцев',
        'Ральф Джонсон',
        'Джон Влиссидес',
        'Ричард Хэлм',
        'Эрих Гамма'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$author_list as $list)
        {
            Author::create([
                'title' => $list,
            ]);
        }
    }
}
