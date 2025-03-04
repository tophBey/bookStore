@extends('dashboard.main')
@section('container')
<div class="row">
    <div class="col-lg-12">
        <h1 class="text-center mb-5">List Kategori Buku</h1>
        <div class="d-flex w-full justify-content-end mb-4 px-4">
                <a href="{{ route('admin.category.create') }}" class="text-decoration-none py-2 px-3 bg-success rounded text-white">Tambah Kategori</a>
        </div>

         <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Kategori</th>
                    <th scope="col">Foto Kategori</th>
                    <th scope="col">Aksi</th>           
                </tr>
            </thead>
            <tbody class="table-group-divider">
            
            @forelse ( $categories as $category)
            <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $category->name }}</td>
                    <td><img src="{{ Storage::url($category->icon) }}" alt="" height="40" width="40"></td>
                    <td>
                        <a href="{{ route('admin.category.edit', $category) }}" class="btn btn-info">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                               
                        <form action="{{ route('admin.category.destroy', $category) }}" method="post" class="d-inline">
                                 @method('delete')
                                 @csrf  
                            <button type="submit" class="btn btn-danger border-0">
                                <i class="fa-solid fa-trash"></i>
                            </butto>
                        </form>
                    </td>
                </tr>
            @empty
            <tr>
                <td colspan="4"><p class="text-center fw-bold">Belum Ada Kategori Buku <i class="fa-brands fa-creative-commons-zero"></i></p></td>

            </tr>
            @endforelse
                
            </tbody>
        </table>             
    </div>
</div>
@endsection