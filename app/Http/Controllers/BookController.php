<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;



class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::orderByDesc('id')->paginate(10);

        return view('dashboard.layout.produk.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::orderByDesc('id')->paginate(10);

        return view('dashboard.layout.produk.addProduk', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBookRequest $request)
    {
        DB::transaction(function() use($request){
            $validated = $request->validated();


            if($request->hasFile('thumbnail')){
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails/' . date('Y/m/d'), 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            $validated['slug'] = Str::slug($validated['name']);


            $book = Book::create($validated);

            
        });

        return redirect()->route('admin.book.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        $categories = Category::orderByDesc('id')->paginate(10);

        return view('dashboard.layout.produk.editProduk', compact('book', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBookRequest $request, Book $book)
    {
        DB::transaction(function() use($request, $book){
            $validated = $request->validated();


            if($request->hasFile('thumbnail')){
                $thumbnailPath = $request->file('thumbnail')->store('thumbnails/' . date('Y/m/d'), 'public');
                $validated['thumbnail'] = $thumbnailPath;
            }

            $validated['slug'] = Str::slug($validated['name']);


            $book->update($validated);

        });

        return redirect()->route('admin.book.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $book)
    {
        DB::transaction(function() use($book){
            $book->delete();
        });

        return redirect()->route('admin.book.index');
    }
}
