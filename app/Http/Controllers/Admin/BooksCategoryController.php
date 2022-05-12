<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BooksCategory;

class BooksCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = BooksCategory::all();
        return view('admin.category.index', compact('types') );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.addcategory');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cat = $request->validate([
            'name' => 'required|min:3|max:10',
            'status' =>'required'
        ]);

        BooksCategory::create([
            'name' => $cat['name'],
            'status' => $cat['status']
        ]);
        return redirect()->route('category.index')->with('success', 'Yangi toifa qo`shildi!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $types = BooksCategory::findOrFail($id);
        return view('admin.category.edit', compact('types'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = BooksCategory::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'status' => 'required'
        ]);
        $data -> update([
            'name' => $request->post('name'),
            'status' => $request->post('status')
        ]);

        return redirect()->route('category.index')->with('success', 'Toifa tahrirlandi!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cat = BooksCategory::findOrFail($id);
        $cat->delete();
        return redirect()->route('category.index')->with('delete', 'Toifa o`chirildi!');
    }
}
