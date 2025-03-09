@extends('frontend.payment.main')
@section('container')
<div class="col-lg-6 shadow-lg py-3">
    <img class="rounded" src="https://plus.unsplash.com/premium_photo-1681487870238-4a2dfddc6bcb?q=80&w=2960&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"  alt="" height="500" style="width: 100%;">
    <hr>
 </div>

<div class="col-lg-6 shadow-lg">
    <h2 class="text-center">Finish</h2>

    <div class="bg-success mx-auto mt-5 text-light" style="height: 300px; width: 300px; border-radius: 50%;">
        <p class="text-light  text-center fs-1" style="line-height: 300px;"><i class="fa-solid fa-check text-light fs-1"></i></p>
    </div>

    <div class="mt-3 mx-auto d-flex flex-column justify-content-center">
        <h5 class="text-center mb-3">Pembayaran berhasil</h5>
        <a href="{{ route('dashboard') }}" class="px-3 py-2 bg-success text-decoration-none text-light rounded mx-auto">Cek Pesanan Saya</a>
    </div>
</div>
@endsection