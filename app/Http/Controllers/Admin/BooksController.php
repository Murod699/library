<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\BooksCategory; 
use App\Models\Author;
use Image;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::all();
        return view('admin.books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category_list = $this->getTrueCategory();
        
        $authors =$this->getAllAuthor();
        // dd($authors->getAuthor()->name);
        return view('admin.books.create', compact('category_list', 'authors'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'book_name' => 'required|min:3|max:25',
            'cat_id' => 'required',
            'author_id' => 'required',
            'ISBN_number' => 'required',
            'book_img' => 'required|file|mimes:jpg,png,jpeg,webp'
        ]);
        
        //Upload image to storage

        $img_name = $request->file('book_img')->store('book_img', ['disk' => 'public']);
        $full_path = storage_path('app/public/'.$img_name);
        $full_thumb_path = storage_path('app/public/thumbs/'.$img_name);
        $thumb = Image::make($full_path);
        //proporsiya qilib qirqish
        // $thumb->resize(300, 300)->save($full_thumb_path);

        //Kvadrat qilib qirqish
        $thumb->fit(300,300, function($constraint){
             $constraint->aspectRatio();
        })->save($full_thumb_path);

        // Bazaga yozish
        Book::create([
            'book_name' => $request -> post('book_name'),
            'cat_id' => $request -> post('cat_id'),
            'author_id' => $request -> post('author_id'),
            'ISBN_number' => $request -> post('ISBN_number'),
            'book_img' => $img_name,
            'thumb' => 'thumbs/'.$img_name
        ]);
        return redirect()->route('books.index')
                         ->with('success', 'Yangi kitob qo`shildi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('admin.books.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')
                         ->with('delete', 'Kitob o`chirildi!');
    }

    private function getTrueCategory(){
        return BooksCategory::where('status', 1)->get();
    }
    private function getAllAuthor(){
        return Author::all();
    }
}
