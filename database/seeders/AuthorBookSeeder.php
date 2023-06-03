<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorBookSeeder extends Seeder
{
    static $list_autorbooks = [
        [
            'author_id' => 1,
            'book_id' => 1,
        ],
        [
            'author_id' => 2,
            'book_id' => 2,
        ],
        [
            'author_id' => 3,
            'book_id' => 3,
        ],
        [
            'author_id' => 4,
            'book_id' => 4,
        ],
        [
            'author_id' => 5,
            'book_id' => 4,
        ],
        [
            'author_id' => 6,
            'book_id' => 5,
        ],
        [
            'author_id' => 7,
            'book_id' => 5,
        ],
        [
            'author_id' => 8,
            'book_id' => 5,
        ],
        [
            'author_id' => 9,
            'book_id' => 6,
        ],
        [
            'author_id' => 10,
            'book_id' => 6,
        ],
        [
            'author_id' => 11,
            'book_id' => 6,
        ],
        [
            'author_id' => 12,
            'book_id' => 6,
        ]
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::$list_autorbooks as $list) {
            DB::table('author_book')->insert([
                'author_id' => $list['author_id'],
                'book_id' => $list['book_id']
            ]);
        }
    }
}
