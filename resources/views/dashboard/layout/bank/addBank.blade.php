@extends('dashboard.main')
@section('container')
<div class="row">
    <div class="col-lg-6 mx-auto">
        <h1 class="text-center mb-5">Tambah Pembayaran</h1>

        <form action="{{ route('admin.bank.store') }}" method="post" class="mb-5" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Pembayaran</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="bank_name" placeholder="Masukan Nama Pembayaran" required>
            </div>
                       
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Akun</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="bank_account_name" placeholder=" Nama Akun Pembayaran" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Nomor Pembayaran</label>
                <input type="number" class="form-control" id="exampleFormControlInput1" name="bank_account_number" placeholder="Nomor Pembayaran" required>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Foto Logo Pembayaran</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" name="logo" placeholder="" required>
            </div>       
                <button type="submit" class="btn btn-success px-5">Submit</button>
        </form>
    </div>
</div>
@endsection