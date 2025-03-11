@extends('frontend.category.main')
@section('container')
<div class="container py-5 mb-5 mt-5">


<h2>Keranjangku</h2>

@if (session()->has('cart'))
    <div class="alert alert-success" role="alert">
        {{ session('cart') }}
    </div>
@endif

@if (session()->has('delete'))
    <div class="alert alert-success" role="alert">
        {{ session('delete') }}
    </div>
@endif


@if($carts->count())
<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
    @forelse ($carts as $cart )
    <div class="col">
      <div class="card shadow-sm">
      <!-- bd-placeholder-img card-img-top -->
      <!-- 225 -->
       <img src="{{ Storage::url($cart->book->thumbnail) }}" alt="" height="270">
        <div class="card-body">
          <div class="d-flex justify-content-between">
           <h5>{{ $cart->book->name  }}</h5>
           <p class="fw-bold text-info">Rp. <span class="">{{number_format($cart->book->price, 0, ',', '.')  }}</span></p>
           </div>
          <div class="mb-5">
            <p>Stock : {{ $cart->book->stock }}</p>
            <p>Status : <span class="fw-bold bg-success bg-gradient py-1 px-2 text-light rounded">{{ $cart->book->stock > 0 ? "Tersedia" : "Habis" }}</span></p>
          </div>
          <div class="d-flex justify-content-between align-items-center">
              <a href="{{ route('front.payment',$cart->book) }}" class="btn btn-md px-5 btn-primary" style="width: 49%;">Beli</a>
              <a href="{{ route('front.produk.detail', $cart->book) }}" class="btn btn-md px-5 btn-info text-light" style="width: 49%;">Info</a>
              <form method="post" action="{{ route('frontend.cart.destroy', $cart->id) }}" style="width: 49%;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" style="width: 100%;" class="btn btn-md px-5 btn-outline-danger text-dark"><i class="fa-solid fa-trash"></i></button>
              </form>
          </div>
        </div>
      </div>
    </div>
    @empty
    <p class="text-center fw-bold">Belum Ada Buku Terbaru</p>
    @endforelse
  
</div>

<div class="d-flex justify-content-center">
        {{ $carts->links() }}
</div>

@else
<p class="text-center fs-2 text-info">Tidak ada list Keranjang </p>

    
@endif

</div>
@endsection