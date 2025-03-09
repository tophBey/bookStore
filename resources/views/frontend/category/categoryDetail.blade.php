@extends('frontend.category.main')
@section('container')

<div class="container py-5 mt-5">
    <h1 class="text-center mb-5 text-info">Buku berdasarkan kategori {{ $category->name }}</h1>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    
        @forelse ($category->book as $category )
        <div class="col">
            <div class="card shadow-sm">
            <!-- bd-placeholder-img card-img-top -->
            <!-- 225 -->
            <img src="{{ Storage::url($category->thumbnail) }}" alt="" height="270">
                <div class="card-body">
                <div class="d-flex justify-content-between">
                <h5>{{ $category->name }}</h5>
                <p class="fw-bold text-info">Rp. <span class="">{{number_format($category->price, 0, ',', '.')  }}</span></p>
                </div>
                <div class="mb-5">
                    <p>Stock : {{ $category->stock }}</p>
                    <p>Status : <span class="fw-bold bg-success bg-gradient py-1 px-2 text-light rounded">{{ $category->stock > 0 ? "Tersedia" : "Habis" }}</span></p>
                </div>
                <div class="d-flex justify-content-between align-items-center">
                    <a href="" class="btn btn-md px-5 btn-primary" style="width: 49%;">Beli</a>
                    <a href="{{ route('front.produk.detail', $category) }}" class="btn btn-md px-5 btn-info text-light" style="width: 49%;">Info</a>
                </div>
                </div>
            </div>
        </div>
        @empty
        <p class="text-center fw-bold">Belum Ada Buku Terbaru</p>
        @endforelse
    
    </div>
</div>
@endsection