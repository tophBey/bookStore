@extends('dashboard.main')

@section('container')
<div class="row">
    <div class="col-lg-6 mx-auto">
        <h1 class="text-center mb-5">Tambah Kategori Buku</h1>
        <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Kategori</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Masukan Nama Kategori">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Icon</label>
                <input type="file" class="form-control" id="exampleFormControlInput1" name="icon" >
            </div>
                <button type="submit" class="btn btn-success px-5 mt-4">Submit</button>
        </form>
    </div>
</div>
@endsection