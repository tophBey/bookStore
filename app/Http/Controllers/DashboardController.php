<?php

namespace App\Http\Controllers;

use App\Models\BookOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.layout.dashboard');
    }


    public function orders(){

        $orderBook = BookOrder::orderByDesc('id')->with(['book','user'])->paginate(10);
        return view('dashboard.layout.order.index', compact('orderBook'));
    }

    public function ordersDetail(BookOrder $order){
        return view('dashboard.layout.order.detail', compact('order'));
    }

    public function update(BookOrder $order){

        DB::transaction(function() use($order){
            $order->update([
                'is_paid' => true
            ]);
        });
        return redirect()->route('dashboard.orders');

    }


    public function myOrders(){

        $user = Auth::user();

        $orderBook = BookOrder::orderByDesc('id')->where('user_id', $user->id)->with(['book','user'])->paginate(10);

        return view('dashboard.layout.myOrder.index', compact('orderBook'));
    }

    public function myOrdersDetail(BookOrder $order){

        return view('dashboard.layout.myOrder.detail', compact('order'));
    }
}
