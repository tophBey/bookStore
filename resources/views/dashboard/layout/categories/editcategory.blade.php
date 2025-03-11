@extends('dashboard.main')

@section('container')
<div class="row">
    <div class="col-lg-6 mx-auto">
        <h1 class="text-center mb-5">Edit Kategori Buku</h1>
        <form action="{{ route('admin.category.update', $category) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Kategori</label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Masukan Nama Kategori" value="{{$category->name}}">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label fw-bold">Icon</label>
                <img src="{{ Storage::url($category->icon) }}" alt="" class="rounded-2xl object-cover w-[90px] d-block mb-3 h-[90px]" width="100" height="100">
                <input type="file" class="form-control" id="exampleFormControlInput1" name="icon" >
                <input type="hidden" name="oldImage" value="{{ $category->icon }}">

            </div>
            <button type="submit" class="btn btn-success px-5 mt-4">Update</button>
        </form>
    </div>
</div>
@endsection