<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="icon" href="{{ asset('images/book.jpg') }}">

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">   
    <title>About</title>
</head>
<body>
    @include('partial.sidebar')

    <section class="gradient-background mt-12 pt-5">
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
        </main>
    </section>

    <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold text-body-emphasis">Tentang Kami</h1>
        <div class="col-lg-6 mx-auto">
            <p class="lead mb-4">Selamat datang di Bookshop, tempat di mana cerita dimulai!
            Kami adalah sebuah toko buku yang berdedikasi untuk menyediakan koleksi buku berkualitas dari berbagai genre dan penulis. Mulai dari novel fiksi, buku pengembangan diri, hingga buku anak-anak, kami percaya bahwa setiap halaman memiliki potensi untuk menginspirasi, mendidik, dan membawa Anda ke dunia yang baru.</p>
           
        </div>
        <div class="overflow-hidden" style="max-height: 30vh;">
            <div class="container px-5">
                <img src="https://images.unsplash.com/photo-1574201258426-78c3f56d066a?q=80&w=2940&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
            </div>
        </div>
    </div>

    @include('partial.feature')

    @include('partial.footer')
</body>
</html>