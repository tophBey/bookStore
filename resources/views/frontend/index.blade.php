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

        

         @include('partial.content');

      </div>

      @include('partial.feature')
      
    </main>
  </section>

  @include('partial.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>