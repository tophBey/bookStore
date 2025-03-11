 <div class="container">
          <h2 class="mb-3">Buku Terbaru <i class="fa-solid fa-newspaper"></i></h2>
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
                      <a href="{{ route('front.payment',$book) }}" class="btn btn-md px-5 btn-primary" style="width: 49%;">Beli</a>
                      <a href="{{ route('front.produk.detail', $book) }}" class="btn btn-md px-5 btn-info text-light" style="width: 49%;">Info</a>

                  @if (auth()->check())
                    @if ($cart->where('book_id', $book->id)->count() )
                        <a href="{{ route('frontend.cart') }}" style="width: 49%;"  class="btn  btn-outline-info text-dark"><i class="fa-solid fa-check"></i></a>
                      @else
                      <form method="post" action="{{ route('frontend.cart.store', $book) }}" style="width: 49%;">
                          @csrf
                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                            <button type="submit" style="width: 100%;" class="btn btn-md px-5 btn-outline-info text-dark"><i class="fa-solid fa-cart-shopping"></i></button>
                      </form>
                      @endif
                    @else
                    <form method="post" action="{{ route('frontend.cart.store', $book) }}" style="width: 49%;">
                          @csrf
                            <input type="hidden" name="book_id" value="{{ $book->id }}">
                            <button type="submit" style="width: 100%;" class="btn btn-md px-5 btn-outline-info text-dark"><i class="fa-solid fa-cart-shopping"></i></button>
                    </form>
                  @endif
                    
                  
                      
                    </div>
                  </div>
                </div>
              </div>
              @empty
              <p class="text-center fw-bold ">Belum Ada Buku Terbaru</p>
              @endforelse
            
            </div>
          </div>