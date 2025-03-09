@extends('frontend.category.main')
@section('container')
<div class="container py-5 mt-5">

  <form action="/produk">
    <div class="input-group mb-5">
        <input type="text" class="form-control" placeholder="Cari Buku" aria-label="Recipient's username" aria-describedby="button-addon2" name="name" value="{{ request('name') }}" autocomplete="off">
        <button class="btn btn-primary" type="submit" id="button-addon2">Search</button>
    </div>
  </form>

<h2 class="mb-3">Produk Buku <i class="fa-solid fa-newspaper"></i></h2>

@if($books->count())
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    @forelse ($books as $book )
    <div class="col">
      <div class="card shadow-sm">
      <!-- bd-placeholder-img card-img-top -->
      <!-- 225 -->
       <img src="{{ Storage::url($book->thumbnail) }}" alt="" height="270">
        <div class="card-body">
          <div class="d-flex justify-content-between">
           <h5>{{ $book->name }}</h5>
           <p class="fw-bold text-info">Rp. <span class="">{{number_format($book->price, 0, ',', '.')  }}</span></p>
           </div>
          <div class="mb-5">
            <p>Stock : {{ $book->stock }}</p>
            <p>Status : <span class="fw-bold bg-success bg-gradient py-1 px-2 text-light rounded">{{ $book->stock > 0 ? "Tersedia" : "Habis" }}</span></p>
          </div>
          <div class="d-flex justify-content-between align-items-center">
              <a href="" class="btn btn-md px-5 btn-primary" style="width: 49%;">Beli</a>
              <a href="{{ route('front.produk.detail', $book) }}" class="btn btn-md px-5 btn-info text-light" style="width: 49%;">Info</a>
          </div>
        </div>
      </div>
    </div>
    @empty
    <p class="text-center fw-bold">Belum Ada Buku Terbaru</p>
    @endforelse
  
</div>

@else
<p class="text-center fs-2 text-info">Buku <b>{{ request('name') }}</b> Tidak ditemukan</p>

    <div class="row justify-content-center mb-5 mx-auto">
        <div class="col-md-6">
            <div class="card text-bg-dark">
                <img src="https://images.unsplash.com/photo-1527467779599-34448b3fa6a7?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img" alt="404" width="250" height="450">
                <div class="card-img-overlay py-0 px-0">
                    <h5 class="card-title text-light gradient-background text-center py-2">404 Not Found</h5>
                </div>
            </div>
        </div>
    </div>
@endif
  
</div>
@endsection