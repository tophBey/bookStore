@extends('dashboard.main')
@section('container')
<div class="row">
    <div class="col-lg-12">
        <h1 class="text-center mb-5">Daftar List Pengguna</h1>
           
        <table class="table">
            <thead class="table-dark ">
                <th>No</th>
                <th>Nama Pengguna</th>
                <th>Email</th>
                <th>No Handphone</th>
                <th>Profile</th>
            </thead>
            <tbody>
            @forelse ($users as $user )
            <tr >
                <td class="px-3 py-3">{{ $loop->iteration }}</td>
                <td class="px-3 py-3">{{ $user->name }}</td>
                <td class="px-3 py-3">{{ $user->email }}</td>
                <td class="px-3 py-3">{{ $user->phone_number }}</td>
                <td class="px-3 py-3"><img src="{{ Storage::url($user->avatar) }}" alt="" height="40" width="40"></td>
            </tr>
            @empty

            <tr>
                <td colspan="4"><p class="text-center fw-bold">Belum Ada Pengguna <i class="fa-brands fa-creative-commons-zero"></i></p></td>
            </tr>
                
            @endforelse
            </tbody>
        </table> 
        
        <div class="d-flex justify-content-center">

                 {{ $users->links() }}
        </div>
    </div>
</div>
@endsection