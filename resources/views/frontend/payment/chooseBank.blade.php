@extends('frontend.payment.main')
@section('container')
<div class="col-lg-6 shadow-lg py-3">
    <img class="rounded" src="https://plus.unsplash.com/premium_photo-1675055730240-96a4ed84e482?q=80&w=2160&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" height="500" style="width: 100%;">
   
    <hr>


    <a href="{{ route('front.produk') }}" class="text-decoration-none py-2 px-5 text-light bg-info rounded">Kembali</a>
 </div>

<div class="col-lg-6 shadow-lg">
    <h2 class="text-center">Checkout Page</h2>

    <h5>Metode Pembayaran</h5>


    <form action="{{ route('front.chooseBank.store', $bookOrder) }}" method="post">
    @csrf
    @method('PATCH')
    @foreach ($banks as $bank )
    <div class="d-flex justify-content-between bg-secondary px-1 py-3 rounded mb-3">
        <div class="d-flex ">
            <div class=" bg-light rounded me-3">
                <img src="{{ Storage::url($bank->logo) }}" alt="" class="" width="40" height="40">
            </div>
            <p class="text-light fw-bold ">{{ $bank->bank_name }} Transfer</p>
        </div>
       
        <div class="form-check me-4">
            <input class="form-check-input" value="{{$bank->id}}" type="radio" name="package_bank_id" id="{{$bank->id}}">
           
        </div>
    </div>
    @endforeach

   

    <div class="d-flex justify-content-between bg-dark px-2 py-3 rounded mb-3">
        <div class="">
            <p class="text-warning fw-bold">TOTAL</p>
            <h5 class="text-warning fw-bold">Rp. 1000.000 </h5>
        </div>

       <div class="flex flex-column justify-content-end align-items-end">
  
            <button type="submit" class="bg-primary text-light border-0 rounded px-5 py-3 mt-2">Next</button>
        </div>
    </div>
    </form>
</div>
@endsection