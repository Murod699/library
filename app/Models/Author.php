<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    public $table = 'authors';
    public $fillable = [
        'author_name'
    ];

    public function getAuthor(){
        return $this->hasMany(Book::class, 'author_id', 'id');
    }
}
