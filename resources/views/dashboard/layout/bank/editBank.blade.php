@extends('dashboard.main')
@section('container')
<div class="row">
    <div class="col-lg-6 mx-auto">
        <h1 class="text-center mb-5">Edit Pembayaran</h1>

        <form action="{{ route('admin.bank.update', $bank) }}" method="post" class="mb-5" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Pembayaran</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="bank_name" placeholder="Masukan Nama Pembayaran" value="{{ $bank->bank_name }}" required>
            </div>
                       
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Akun</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="bank_account_name" placeholder=" Nama Akun Pembayaran" value="{{ $bank->bank_account_name }}" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Nomor Pembayaran</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="bank_account_number" placeholder="Nomor Pembayaran" value="{{ $bank->bank_account_number }}" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Foto Logo Pembayaran</label>
                <img src="{{ Storage::url($bank->logo) }}" alt="" class="rounded-2xl object-cover w-[90px] d-block mb-3 h-[90px]" width="120" height="120" >
                <input type="file" class="form-control" id="exampleFormControlInput1" name="logo" placeholder="">
                <input type="hidden" name="oldImage" value="{{ $bank->logo }}">

            </div>       
                <button type="submit" class="btn btn-success px-5">Update</button>
        </form>
    </div>
</div>
@endsection