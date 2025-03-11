<?php

namespace App\Http\Controllers;

use App\Http\Requests\PaymentStoreRequest;
use App\Http\Requests\StoreOrderChekoutRequest;
use App\Http\Requests\UpdateBookOrderRequest;
use App\Models\Book;
use App\Models\BookOrder;
use App\Models\Cart;
use App\Models\Category;
use App\Models\PackageBank;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class FrontController extends Controller
{
    public function index(){

        $books = Book::orderByDesc('id')->paginate(3);

        $cart = Cart::where('user_id', auth()->id())->get();

        $categories = Category::orderByDesc('id')->get();

        return view('frontend.index', compact('categories', 'books', 'cart'));
    }


    public function category(){

         $cart = Cart::where('user_id', auth()->id())->get();


        $categories = Category::orderByDesc('id')->paginate(10);
        return view('frontend.category.index', compact('categories', 'cart'));
    }

    public function categoryDetail(Category $category){

        return view('frontend.category.categoryDetail', compact('category'));
    }

    public function about(){

         $cart = Cart::where('user_id', auth()->id())->get();

        return view('frontend.about', compact('cart'));

    }

    public function produk(Request $request){

        $cart = Cart::where('user_id', auth()->id())->get();


        $books = Book::orderByDesc('id')->filters(request(['name']))->paginate(10)->withQueryString();
        return view('frontend.produk.index', compact('books','cart'));
    }

    public function produkDetail(Book $book){
        
        return view('frontend.produk.produkDetail', compact('book'));

    }


    public function payment(Book $book){
        return view('frontend.payment.index', compact('book'));
    }

    public function paymentStore(PaymentStoreRequest $request,Book $book){

        $user = Auth::user();
        $bank = PackageBank::orderByDesc('id')->first();
        $bookOrderId = null;

        DB::transaction(function() use($request, $book, $user, $bank, &$bookOrderId){

            $validated = $request->validated();


            $subTotal = $book->price * $validated['quantity'];
           

            $validated['user_id'] = $user->id;
            $validated['is_paid'] = false;
            $validated['address'] = request('address');
            $validated['quantity'] = request('quantity');
            $validated['proof'] = 'dummytrx.png';
            $validated['book_id'] = $book->id;
            $validated['package_bank_id'] = $bank->id;
            $validated['sub_total'] = $subTotal;
            $validated['total_amount'] = $subTotal;

            $bookOrder = BookOrder::create($validated);
            $bookOrderId = $bookOrder->id;

            // Hapus cart dengan kondisi tertentu (misalnya berdasarkan book_id)
            $cartItem = $book->cart()->where('book_id', $book->id)->first();
            if ($cartItem) {
                $cartItem->delete();
            }

        });

        if($bookOrderId){
            return redirect()->route('front.chooseBank', $bookOrderId);
        }else{
            return back()->withErrors('Failed to create Booking');
        }

    }


    public function chooseBank(Book $book, BookOrder $bookOrder){

        $banks = PackageBank::all();
        return view('frontend.payment.chooseBank', compact('banks', 'bookOrder'));
    }


    public function chooseBankStore(UpdateBookOrderRequest $request, BookOrder $bookOrder){

        $user = Auth::user();
        if($bookOrder->user_id != $user->id){
            abort(403);
        }

        DB::transaction(function () use($request, $bookOrder, $user) {
            $validated = $request->validated();

            $bookOrder->update([
                "package_bank_id" => $validated['package_bank_id']
            ]);
        });

        return redirect()->route('front.book_payment', $bookOrder->id);

    }

    public function bookPayment(BookOrder $bookOrder){

        return view('frontend.payment.bookPayment', compact('bookOrder'));
    }


    public function bookPaymentStore(StoreOrderChekoutRequest $request, BookOrder $bookOrder){


        $user = Auth::user();
        if($bookOrder->user_id != $user->id){
            abort(403);
        }

        DB::transaction(function() use($request, $bookOrder, $user){
            $validated = $request->validated();

            if($request->hasFile('proof')){
                $proofPath = $request->file('proof')->store('proofs', 'public');
                $validated['proof'] = $proofPath;
            }

            $bookOrder->update($validated);
        });

        return redirect()->route('front.finish',);

    }



    public function finish(){
        return view('frontend.payment.finish');
    }
}
