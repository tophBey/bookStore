@extends('dashboard.main')

@section('container')
<div class="row">
    <div class="col-lg-12">
        <h1 class="text-center mb-5">List Produk Buku</h1>
        <!-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li class="text-dark">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
        @endif -->

        <div class="d-flex w-full justify-content-end mb-4 px-4">
            <a href="{{ route('admin.book.create') }}" class="text-decoration-none py-2 px-3 bg-success rounded text-white">Tambah Produk</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Judul</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Nama Author</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>            
                </tr>
            </thead>
            <tbody class="table-group-divider">

            @forelse ( $books as $book)
            <tr>
                    <th >{{ $loop->iteration }}</th>
                    <td>{{ $book->name }}</td>
                    <td>Test </td>
                    <td>{{ $book->author }} </td>
                    <td>Rp. {{ $book->price }}</td>
                    <td>{{ $book->stock }}</td>
                    <td><img src="{{ Storage::url($book->thumbnail) }}" alt="" height="40" width="40"></td>
                    <td>
                        <a href="" class="btn btn-info">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                               
                        <form action="{{ route('admin.book.destroy', $book->id) }}" method="post" class="d-inline" enctype="multipart/form-data">
                            @method('delete')
                            @csrf 
                            <button type="submit" class="btn btn-danger border-0">
                                    <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td>Belum ada Produk Buku</td>
                </tr>
            @endforelse
               
            </tbody>
        </table>                
    </div>
</div>
    
@endsection