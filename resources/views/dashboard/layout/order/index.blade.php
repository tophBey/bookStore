@extends('dashboard.main')
@section('container')
<div class="row">
    <div class="col-lg-12">
        <h1 class="text-center mb-4">List Pesanan</h1>

        <table class="table">
            <thead class="table-dark ">
                <th>No</th>
                <th>Foto</th>
                <th>Nama Buku</th>
                <th>Customer</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Status</th>
                <th>Detail</th>
            </thead>
            <tbody>

            @forelse ( $orderBook as $order)
            <tr >
                    <td class="px-3 py-3">{{ $loop->iteration }}</td>
                    <td class="px-3 py-3"><img class="rounded" src="{{ Storage::url($order->book->thumbnail) }}" alt="" height="40" width="40"></td>
                    <td class="px-3 py-3">{{ $order->book->name }}</td>
                    <td class="px-3 py-3">{{ $order->user->name }}</td>
                    <td class="px-3 py-3">{{ $order->quantity }}</td>
                    <td class="px-3 py-3">Rp. {{number_format($order->total_amount, 0, ',', '.')  }}</td>
                    @if (!$order->is_paid)
                        <td class="px-3 py-3"><span class="badge rounded-pill text-bg-warning">Pending</span></td>
                        @else
                        <td class="px-3 py-3"><span class="badge rounded-pill text-bg-success">Success</span></td>
                        
                    @endif
                    <td class="px-3 py-3">
                        <a href="{{ route('dashboard.orders.detail', $order) }}" class="btn btn-info px-4 text-light">
                            Detail
                        </a>
                               
                    </td>
                </tr>
            @empty
            <tr>
                <td colspan="8"><p class="text-center fw-bold">Belum Ada Pesanan <i class="fa-brands fa-creative-commons-zero"></i></p></td>
            </tr>
            @endforelse
            
            
            </tbody>
        </table> 
        <div class="d-flex justify-content-center">
            {{ $orderBook->links() }}
        </div>
    </div>
</div>
@endsection