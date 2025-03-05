@extends('dashboard.main')
@section('container')
<div class="row">
    
    <div class="col-lg-6 mx-auto">
        <h1 class="text-center mb-5">Edit Buku </h1>
        <form action="{{ route('admin.book.update', $book) }}" method="post" class="mb-5" enctype="multipart/form-data">
            @csrf
            @method('PUT')

                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Judul Buku</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="name" placeholder="Masukan judul Buku" required value="{{ $book->name }}">
                    @error('name')
                        <small class="invalid-feedback mb-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Kategori Buku</label>
                    <select name="category_id" class="form-select" aria-label="Default select example">
                        <option selected>Open this select menu</option>
                        @foreach ($categories as $category ) 
                        <!-- <option value="{{ $category->id }}">{{ $category->name }}</option> -->
                            @if(old('category_id', $book->category_id) == $category->id)
                                <option value="{{$category->id}}" selected>{{ $category->name }}</option>

                            @else
                                <option value="{{$category->id}}" >{{ $category->name }}</option>
                            @endif
                        @endforeach 
                        
                    </select>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Nama Author</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" name="author" placeholder="Masukan Nama Author" value="{{ $book->author }}" required>
                    @error('author')
                        <small class="invalid-feedback mb-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Harga</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" name="price" min="1" placeholder="Masukan Harga" value="{{ $book->price }}" required>
                    @error('price')
                        <small class="invalid-feedback mb-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Stok</label>
                    <input type="number" class="form-control" id="exampleFormControlInput1" min="1" name="stock" placeholder="Masukan Stok Buku" value="{{ $book->stock }}" required >
                    @error('stock')
                        <small class="invalid-feedback mb-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label fw-bold">Foto Buku</label>
                    <img src="{{Storage::url($book->thumbnail)}}" alt="" class="rounded d-block mb-3" width="120" height="100">
                    <input type="file" class="form-control" id="exampleFormControlInput1" name="thumbnail" placeholder="Masukan">
                    @error('thumbnail')
                        <small class="invalid-feedback mb-1">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label fw-bold">Deskripsi</label>
                    <textarea placeholder="Deskripsi Buku" class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"  required>{{ $book->description }}</textarea>
                    @error('description')
                        <small class="invalid-feedback mb-1">{{ $message }}</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success px-5">Update</button>
        </form>
    </div>
</div>    
@endsection