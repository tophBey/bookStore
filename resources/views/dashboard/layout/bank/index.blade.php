@extends('dashboard.main')
@section('container')
<div class="row">
    <div class="col-lg-12">
        <h1 class="text-center mb-5">List Metode Pembayaran</h1>
            <div class="d-flex w-full justify-content-end mb-4 px-4">
                <a href="{{ route('admin.bank.create') }}" class="text-decoration-none py-2 px-3 bg-success rounded text-white">Tambah Pembayaran</a>
            </div>

        <table class="table">
            <thead class="table-dark">
                <th>No</th>
                <th>Nama Payment</th>
                <th>Nama Akun</th>
                <th>No Payment</th>
                <th>Logo Payment</th>
                <th>Aksi</th>
            </thead>
            <tbody>
            @forelse ($banks as $bank )
            <tr >
                    <td class="px-3 py-3">{{ $loop->iteration }}</td>
                    <td class="px-3 py-3">{{ $bank->bank_name }}</td>
                    <td class="px-3 py-3">{{ $bank->bank_account_name }}</td>
                    <td class="px-3 py-3">{{ $bank->bank_account_number }}</td>
                    <td class="px-3 py-3"><img src="{{ Storage::url($bank->logo) }}" alt="" height="40" width="40"></td>
                    <td class="px-3 py-3">
                        <a href="{{ route('admin.bank.edit', $bank) }}" class="btn btn-info">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                               
                        <form action="{{ route('admin.bank.destroy',$bank) }}" method="post" class="d-inline">
                             @csrf
                             @method('delete')
                             
                            <button type="submit" class="btn btn-danger border-0">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>       
                    </td>
                </tr>
            @empty

            <tr>
                <td colspan="6"><p class="text-center fw-bold">Belum Ada Metode Pembayaran <i class="fa-brands fa-creative-commons-zero"></i></p></td>
            </tr>
                
            @endforelse
              
            </tbody>
        </table>                
    </div>
</div>
@endsection