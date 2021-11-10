<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Book;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author1 = Author::create(['name'=>'aam amirudin']);
        $author2 = Author::create(['name'=>'salim a fillah']);
        $author3 = Author::create(['name'=>'m fauzi adhim']);

        $book1 = Book::create(['tittle'=>'kupinang kau dengan bismilah','amount'=>3,
        'author_id'=>$author1->id]);
        $book2 = Book::create(['tittle'=>'jalan para pejuang','amount'=>2,
        'author_id'=>$author2->id]);
        $book3 = Book::create(['tittle'=>'seminggu belajar laravel','amount'=>3,
        'author_id'=>$author3->id]);
        $book4 = Book::create(['tittle'=>'menyelami buku laravel','amount'=>4,
        'author_id'=>$author3->id]);
    }
}
