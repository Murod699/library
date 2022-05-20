<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Book;

class BooksCategory extends Model
{
    use HasFactory;
    const STATUS_ACTIVE = 1;
    const STATUS_INACTIVE = 0;
    public $table = 'bookscategory';
    public $fillable = [
        'name',
        'status'
    ];
    public function scopeActive(){
        return $this->where('status', '=', self::STATUS_ACTIVE)->latest();
    }
    public function getBook(){
        return $this->belongsTo(Book::class, 'cat_id', 'id');
    }
}
