<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCartRequest;
use App\Models\Book;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class CartController extends Controller
{
    public function show(){

        $cart = $cart = Cart::where('user_id', auth()->id())->get();

        $carts = Cart::orderByDesc('id')->where('user_id', auth()->id())->paginate(10);
        return view('frontend.cart.index', compact('carts','cart'));

    }

    public function addToCart(PostCartRequest $request, Book $book){

        // dd($book);

        $user = Auth::user();

        DB::transaction(function() use($request, $user){
            $validated = $request->validated();

            $validated["book_id"] = request('book_id');
            $validated['user_id'] = $user->id;

            Cart::create($validated);
        });

        return redirect()->route('frontend.cart')->with('cart', "Berhasil menambahkan ke keranjang");
    }

    public function deleteFromCart($id){
        $user = Auth::user();
        DB::transaction(function() use($id, $user){
            $cartItem = Cart::where('id', $id)->where('user_id', $user->id)->firstOrFail();

            $cartItem->delete();

        });

        return redirect()->route('frontend.cart')->with('delete', "berhasil menghapus");
    }
}
