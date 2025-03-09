<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="{{ asset('images/book.jpg') }}">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <title>BookShop</title>
</head>

<body class="overflow-x-hidden">

    @include('partial.sidebar')
  <!-- Title -->
  <section id="title" class="gradient-background mt-12 pt-5">
    <main>
        <section class="py-5 text-center min-h-screen container">
          <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto mt-20">
              <img src="{{ asset('images/book.jpg') }}" alt="" width="140" class="rounded">
              <h1 class="fw-bold">Bookshop</h1>
              <p class="lead text-body-secondary fw-bold text-light">Buka halaman pertama, dan biarkan dunia baru menyapa. Temukan petualangan, ilmu, dan inspirasi di setiap buku kami.</p>
              <p>
                <a href="{{ route('front.produk') }}" class="btn btn-primary my-2">Beli Sekarang</a>
                <a href="{{ route('front.category') }}" class="btn btn-secondary my-2">Cari Kategori</a>
              </p>
            </div>
          </div>
        </section>

     
       
        <div class="album py-5 bg-body-tertiary">

        <div class="container ">
          <div class="row">
            <div class="col-lg-6">
              <img class="rounded shadow-lg" src="{{ asset('images/book.jpg') }}" alt="" width="400" height="400">
            </div>
            <div class="col-lg-6">
                <h2 class="text-center mb-4">Tentang Kami</h2>
                <p class="fs-4 text-secondary">Selamat datang di Bookshop, tempat di mana cerita dimulai!
                  Kami adalah sebuah toko buku yang berdedikasi untuk menyediakan koleksi buku berkualitas dari berbagai genre dan penulis. Mulai dari novel fiksi, buku pengembangan diri, hingga buku anak-anak, kami percaya bahwa setiap halaman memiliki potensi untuk menginspirasi, mendidik, dan membawa Anda ke dunia yang baru.</p>
            </div>
          </div>
        </div>

        <hr class="mt-5">
        <div class="row mb-5">
              <h2 class="m-5">Kategori Buku <i class="fa-solid fa-book"></i></h2>

              <div class="col-lg-12 px-5 mx-2">
              @forelse ($categories as $category)
                <a href="" class="btn btn-outline-info "><img src="{{ Storage::url($category->icon) }}" alt="" class="rounded" width="40" height="40">  {{ $category->name }}</a>
              @empty
                <p class="text-center fw-bold">Belum Ada Kategori Terbaru</p>
              @endforelse
              </div>
        </div>

        

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
                      <a href="" class="btn btn-md px-5 btn-primary" style="width: 49%;">Beli</a>
                      <a href="{{ route('front.produk.detail', $book) }}" class="btn btn-md px-5 btn-info text-light" style="width: 49%;">Info</a>
                    </div>
                  </div>
                </div>
              </div>
              @empty
              <p class="text-center fw-bold ">Belum Ada Buku Terbaru</p>
              @endforelse
            
            </div>
          </div>
        </div>

    <div class="row bg-light g-4 py-5 row-cols-1 row-cols-lg-3 border">

      <div class="col d-flex align-items-start">
        <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"></use></svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Terpercaya</h3>
          <p>Semua buku kami adalah produk asli dan berkualitas. informasi yang akurat, serta pengalaman berbelanja yang nyaman dan aman</p>
          <a href="{{ route('front.produk') }}" class="btn btn-primary">
            Coba Sekarang
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"></use></svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Lengkap</h3>
          <p>Koleksi kami mencakup buku dari berbagai kategori dan untuk segala usia, sehingga Anda dapat menemukan banyak bakat luar biasa dari dalam negeri</p>
          <a href="{{ route('front.produk') }}" class="btn btn-primary">
            Coba Sekarang
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square text-body-emphasis d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"></use></svg>
        </div>
        <div>
          <h3 class="fs-2 text-body-emphasis">Pelayanan Ramah</h3>
          <p>Tim kami selalu siap membantu Anda dengan rekomendasi terbaik, Temukan buku favorit Anda di Bookshop</p>
          <a href="{{ route('front.produk') }}" class="btn btn-primary">
            Coba Sekarang
          </a>
        </div>
      </div>
    </div>
      
    </main>
  </section>

  
  
  
 
  
  @include('partial.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>