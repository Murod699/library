<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\BooksCategory;
use App\Models\Author;

class Book extends Model
{
    use HasFactory;
    public $table = 'books';
    public $fillable = [
        'book_name',
        'cat_id',
        'author_id',
        'ISBN_number',
        'book_img',
        'thumb'
    ];

    public function getCategory(){
        return $this->hasOne(BooksCategory::class, 'id', 'cat_id');
    }

    public function getAuthor(){
        return $this->hasOne(Author::class, 'id', 'author_id');
    }
}
