@extends('dashboard.main')
@section('container')
<div class="container">
    <div class="row">
        <div class="col-lg-10 shadow-lg mx-auto">
            <div class="row">
                <div class="col-lg-6 py-2 mb-4">
                    <div class="d-flex" style="width: 100%;">
                        <div class="me-3">
                            <img class="rounded" src="{{ Storage::url($order->book->thumbnail) }}" width="250" height="250" alt="">
                        </div>
                        
                        <div class="mt-3">
                            <h3>{{ $order->book->name }}</h3>
                            <h6>Categori : {{ $order->book->category->name }}</h6>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 py-5">
                    <div class="d-flex justify-between">

                        @if ($order->is_paid)
                            <p class="btn btn-success text-light me-4 ms-5">Success</p>

                            <button type="button" class="btn btn-info text-light">Chat Admin</button>

                        @else
                            <p class="btn btn-warning text-light me-4 ms-5">waiting</p>
                            <button type="button" class="btn btn-info text-light">Chat Admin</button>

                        @endif
                    </div>
                </div>
                <hr>

                <div class="col-lg-6">
                    <div>
                       <p>Nama</p> 
                       <h5>{{ $order->user->name }}</h5>
                    </div>
                    <div>
                       <p>Email</p> 
                       <h5>{{ $order->user->email }}</h5>
                    </div>
                    <div>
                       <p>Phone</p> 
                       <h5>{{ $order->user->phone_number }}</h5>
                    </div>
                </div>
                <div class="col-lg-6 mb-4">
                    <div>
                       <p>Quantity</p> 
                       <h5>{{ $order->quantity }}</h5>
                    </div>
                    <div>
                       <p>Alamat</p> 
                       <h5>{{ $order->address }}</h5>
                    </div>
                    
                </div>
                <hr>

                <div class="col-lg-6">
                    <div>
                       <p>Total</p> 
                       <h5>Rp. {{number_format($order->total_amount, 0, ',', '.')  }}</h5>
                    </div>
                    <a href="{{ route('dashboard.myOrders') }}" class="btn btn-primary mt-5 px-5">Kembali</a>
                </div>

                <div class="col-lg-6 mb-4">
                    <div>
                       <p>Bukti Transfer</p> 
                       <a href="{{ Storage::url($order->proof) }}"  target="_blank">
                            <img class="rounded shadow-lg " src="{{ Storage::url($order->proof) }}" width="250" height="250" alt="">
                       </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection