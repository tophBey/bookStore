@extends('dashboard.main')

@section('container')
<div class="row">
    <div class="col-lg-12">
        <h1 class="text-center mb-5">List Produk Buku</h1>
       
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
                    <td>{{ $book->category->name }} </td>
                    <td>{{ $book->author }} </td>
                    <td>Rp. {{number_format($book->price, 0, ',', '.')  }}</td>
                    <td>{{ $book->stock }}</td>
                    <td><img src="{{ Storage::url($book->thumbnail) }}" alt="" height="40" width="40"></td>
                    <td>
                        <a href="{{ route('admin.book.edit', $book) }}" class="btn btn-info">
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
                    <td colspan="8" class="text-center fw-bold">Belum ada Produk Buku</td>
                </tr>
            @endforelse
               
            </tbody>
        </table>
        
        <div class="d-flex justify-content-center">
            {{ $books->links() }}
        </div>
    </div>
</div>
    
@endsection