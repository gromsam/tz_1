<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Book extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function authors()
    {
        return $this->belongsToMany(Author::class);
    }

    static function filter_by_author($author_id)
    {
        $book_ids = [];
        $author_book = DB::table('author_book')
            ->select('book_id')
            ->where('author_id', (int) $author_id)
            ->get();
        foreach($author_book as $book_id)
        {
            array_push($book_ids, $book_id->book_id);
        }

        return $book_ids;
    }

}
