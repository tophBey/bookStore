@extends('dashboard.main')
@section('container')
<div class="row">
    <div class="col-lg-6 mx-auto">
        <h1 class="text-center mb-5">Edit Buku Baru</h1>
        <form action="" method="post" class="mb-5">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Judul Buku</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan judul Buku">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Kategori Buku</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Author</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Nama Author">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Harga</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Harga">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Stok</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Masukan Stok Buku">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Foto Buku</label>
                    <input type="file" class="form-control" id="exampleFormControlInput1" placeholder="Masukan">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label fw-bold">Deskripsi</label>
                    <textarea placeholder="Deskripsi Buku" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Submit</button>
        </form>
    </div>
</div>    
@endsection