@extends('frontend.payment.main')
@section('container')
<div class="col-lg-6 shadow-lg py-3">
    <img class="rounded" src="https://plus.unsplash.com/premium_photo-1675055730240-96a4ed84e482?q=80&w=2160&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="" height="660" style="width: 100%;">
    <hr>
 </div>

<div class="col-lg-6 shadow-lg">
    <h2 class="text-center">Checkout Page</h2>

    <h5>Transfer Ke</h5>
    <div class="d-flex flex-column justify-content-between bg-secondary px-2 py-3 rounded mb-3">
        <h6 class="text-light">Nama Pembayaran</h6>
        <div class="d-flex ">
            <div class=" bg-light rounded me-3">
                <img class="rounded" src="{{ Storage::url($bookOrder->bank->logo) }}" alt="" class="" width="40" height="40">
            </div>
            <p class="text-light fw-bold ">{{ $bookOrder->bank->bank_name }}</p>
        </div>
        <hr class="mb-4 text-light">

        <h6 class="text-light">Nama Akun Pembayaran</h6>
        <div class="d-flex ">
            <div class=" bg-light rounded me-3">
                <img class="rounded" src="{{ Storage::url($bookOrder->bank->logo) }}" alt="" class="" width="40" height="40">
            </div>
            <p class="text-light fw-bold ">{{ $bookOrder->bank->bank_account_name }}</p>
        </div>

        <hr class="mb-4 text-light">

        <h6 class="text-light">Nomor Akun Pembayaran</h6>
        <div class="d-flex ">
            <div class=" bg-light rounded me-3">
                <img class="rounded" src="{{ Storage::url($bookOrder->bank->logo) }}" alt="" class="" width="40" height="40">
            </div>
            <p class="text-light fw-bold ">{{ $bookOrder->bank->bank_account_number }}</p>
        </div>

        <hr class="mb-4 text-light">

    <form action="{{ route('front.book_payment.store',$bookOrder) }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="d-flex flex-column">
            <h5 class="mb-3 text-light">Upload Bukti Transfer </h5>
            <p class="text-light">Setelah Transfer mohon untuk mengirim bukti transfer untuk konfirmasi pesanan</p>
            <div class="mb-3">
                <input type="file" name="proof" class="form-control">
                    @error('description')
                        <small class="invalid-feedback mb-1">{{ $message }}</small>
                    @enderror
            </div>
        </div>
    
    </div>

   

   

    <div class="d-flex justify-content-between bg-dark px-2 py-3 rounded mb-3">
        <div class="">
            <p class="text-warning fw-bold">TOTAL</p>
            <h5 class="text-warning fw-bold">Rp. {{ $bookOrder->total_amount }} </h5>
        </div>

       <div class="flex flex-column justify-content-end align-items-end">
  
            <button type="submit" class="bg-primary text-light border-0 rounded px-5 py-3 mt-2">Checkout</button>
        </div>
    </div>
    </form>
</div>
@endsection