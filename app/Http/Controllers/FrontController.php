<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){

        $books = Book::orderByDesc('id')->paginate(3);

        $categories = Category::orderByDesc('id')->get();

        return view('frontend.index', compact('categories', 'books'));
    }


    public function category(){

        $categories = Category::orderByDesc('id')->get();
        return view('frontend.category.index', compact('categories'));
    }

    public function produk(){
        $books = Book::orderByDesc('id')->paginate(10);

        return view('frontend.produk.index', compact('books'));
    }

    public function produkDetail(Book $book){
        
        return view('frontend.produk.produkDetail', compact('book'));

    }
}
