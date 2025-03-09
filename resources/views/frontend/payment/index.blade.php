@extends('frontend.payment.main')
@section('container')
<div class="col-lg-6 shadow-lg py-3">
    <img class="rounded" src="{{ Storage::url($book->thumbnail) }}" alt="" height="400" style="width: 100%;">
    <div class="d-flex mt-4 justify-content-between pr-4">
        <h4>{{ $book->name }}</h4>
        <p class="fw-bold text-info">Rp. <span class="">{{number_format($book->price, 0, ',', '.')  }}</span></p>
    </div>
    <hr>

    <h6>Deskripsi Buku</h6>
    <div class="mb-5">
        <p>{{ $book->description }}</p>
    </div>

    <a href="{{ route('front.produk') }}" class="text-decoration-none py-2 px-5 text-light bg-info rounded">Kembali</a>
 </div>

<div class="col-lg-6 shadow-lg">
    <h2 class="text-center">Checkout Page</h2>

    <h5>Quantity Buku</h5>
    <form action="{{ route('front.payment.store',$book) }}" method="post">
        @csrf
    <div class="d-flex justify-content-between bg-secondary px-1 py-3 rounded mb-3">
        <div class="">
            <h6 class="text-light">{{ $book->name }}</h6>
        </div>

        <div class="flex">
            <button  type="button" id="remove-quantity" class="bg-danger rounded border-0 text-light ms-2 "><i class="fa-solid fa-minus"></i></button>
            <span id="quantity" class="fw-bold text-lg ms-2 text-light me-2">1</span>
            <input type="hidden" name="quantity" id="quantity_input" value="1" />
            <input type="hidden" name="price" id="bookPrice" value="{{$book->price}}" />

            <button type="button"  id="add-quantity" class="bg-info rounded border-0 text-light me-2"><i class="fa-solid fa-plus"></i></button>
        </div>
    </div>

            <h5>Detail Pengguna</h5>
    <div class="d-flex justify-content-between bg-secondary px-2 py-3 rounded mb-3">
        <div class="">
                    <h6 class="text-light">Nama : </h6>
                    <h6 class="text-light">No HP : </h6>
                    <h6 class="text-light">Email :  </h6>

        </div>

        <div class="flex flex-column justify-content-end align-items-end">
            <h6 class="text-light fw-bold text-end">{{ auth()->user()->name }}</h6>
            <h6 class="text-light fw-bold text-end">{{ auth()->user()->phone_number }} </h6>
            <h6 class="text-light fw-bold text-end">{{ auth()->user()->email }}</h6>
        </div>
    </div>

    <h5 class="mb-3">Isi Alamat</h5>
    <div class="mb-3">
        <textarea placeholder="Masukan Alamat" class="form-control" name="address" id="exampleFormControlTextarea1" rows="3" required></textarea>
            @error('address')
                <small class="invalid-feedback mb-1">{{ $message }}</small>
            @enderror
            @error('quantity')
                <small class="invalid-feedback mb-1">{{ $message }}</small>
            @enderror
    </div>
    <div class="d-flex justify-content-between bg-dark px-2 py-3 rounded mb-3">
        <div class="">
            <p class="text-warning fw-bold">TOTAL</p>
            <h5 id="grandtotal" class="text-warning fw-bold">Rp. 1000.000 </h5>
        </div>

       <div class="flex flex-column justify-content-end align-items-end">
        <!-- klo udah a nya di hapus ganti ke button -->
            <button type="submit" class="bg-primary text-light border-0 rounded px-5 py-3 mt-2">Next</button>
        </div>
    </div>
    </form>
</div>

@endsection


@push('bookPayment')
    <script src="{{ asset('js/payment.js') }}"></script>
@endpush