<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="{{ asset('images/book.jpg') }}">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>Detail</title>
</head>
<body>

    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8 col-md-6 mx-auto shadow-lg py-2">
                <div class=" mb-4 bg-body-tertiary rounded-3" class=" overflow-hidden" style=" height: 400px ;">
                    <img class="rounded" src="{{ Storage::url($book->thumbnail) }}" alt="" height="400" width="100%">
                </div>
                <div class="d-flex justify-content-between mb-5">
                    <h2 class="">{{ $book->name }}</h2>
                    <p class="fw-bold text-info">Rp. <span class="">{{number_format($book->price, 0, ',', '.')  }}</span></p>
                </div>

                <hr>

                <h4>Deskripsi Buku</h4>
                <div class="">
                    <p>Status : <span class="fw-bold bg-success bg-gradient py-1 px-2 text-light rounded">{{ $book->stock > 0 ? "Tersedia" : "Habis" }}</span></p>
                    <p>Stock : <span class="fw-bold">{{ $book->stock }}</span></p>
                    <p>{{ $book->description }}</p>
                </div>
                <div class="d-flex">
                    <a href="{{ route('front.produk') }}" class="btn btn-md px-5  btn-outline-info" style="width: 50%;">Kembali</a>
                    <a href="{{ route('front.payment', $book) }}" class="btn btn-md px-5 btn-primary" style="width: 50%;">Beli</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>