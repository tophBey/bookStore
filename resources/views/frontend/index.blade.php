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
                <a href="#" class="btn btn-primary my-2">Main call to action</a>
                <a href="#" class="btn btn-secondary my-2">Secondary action</a>
              </p>
            </div>
          </div>
        </section>

       
        <div class="album py-5 bg-body-tertiary">

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
      
      </main>
  </section>

  <!-- Features -->
  <section id="features">
    <div class="container mt-5">
      <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="col d-flex align-items-start">
          <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <svg xmlns="http://www.w3.org/2000/svg" height="30" fill="currentColor" class="bi bi-check2-circle"
            viewBox="0 0 16 16">
            <path
              d="M2.5 8a5.5 5.5 0 0 1 8.25-4.764.5.5 0 0 0 .5-.866A6.5 6.5 0 1 0 14.5 8a.5.5 0 0 0-1 0 5.5 5.5 0 1 1-11 0z" />
            <path
              d="M15.354 3.354a.5.5 0 0 0-.708-.708L8 9.293 5.354 6.646a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l7-7z" />
            </svg>
          </div>
          <div>
            <h3 class="fs-2 text-body-emphasis">Easy to use.</h3>
            <p>So easy to use, even your dog could do it.</p>
           
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <svg xmlns="http://www.w3.org/2000/svg" height="30" fill="currentColor" class="bi bi-mortarboard" viewBox="0 0 16 16">
              <path d="M8.211 2.047a.5.5 0 0 0-.422 0l-7.5 3.5a.5.5 0 0 0 .025.917l7.5 3a.5.5 0 0 0 .372 0L14 7.14V13a1 1 0 0 0-1 1v2h3v-2a1 1 0 0 0-1-1V6.739l.686-.275a.5.5 0 0 0 .025-.917l-7.5-3.5ZM8 8.46 1.758 5.965 8 3.052l6.242 2.913L8 8.46Z"/>
              <path d="M4.176 9.032a.5.5 0 0 0-.656.327l-.5 1.7a.5.5 0 0 0 .294.605l4.5 1.8a.5.5 0 0 0 .372 0l4.5-1.8a.5.5 0 0 0 .294-.605l-.5-1.7a.5.5 0 0 0-.656-.327L8 10.466 4.176 9.032Zm-.068 1.873.22-.748 3.496 1.311a.5.5 0 0 0 .352 0l3.496-1.311.22.748L8 12.46l-3.892-1.556Z"/>
              </svg>
          </div>
          <div>
            <h3 class="fs-2 text-body-emphasis">Elite Clientele.</h3>
            <p>We have all the dogs, the greatest dogs.</p>
           
          </div>
        </div>
        <div class="col d-flex align-items-start">
          <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
            <svg xmlns="http://www.w3.org/2000/svg" height="30" fill="currentColor" class="bi bi-arrow-through-heart"
              viewBox="0 0 16 16">
            <path fill-rule="evenodd"
                d="M2.854 15.854A.5.5 0 0 1 2 15.5V14H.5a.5.5 0 0 1-.354-.854l1.5-1.5A.5.5 0 0 1 2 11.5h1.793l.53-.53c-.771-.802-1.328-1.58-1.704-2.32-.798-1.575-.775-2.996-.213-4.092C3.426 2.565 6.18 1.809 8 3.233c1.25-.98 2.944-.928 4.212-.152L13.292 2 12.147.854A.5.5 0 0 1 12.5 0h3a.5.5 0 0 1 .5.5v3a.5.5 0 0 1-.854.354L14 2.707l-1.006 1.006c.236.248.44.531.6.845.562 1.096.585 2.517-.213 4.092-.793 1.563-2.395 3.288-5.105 5.08L8 13.912l-.276-.182a21.86 21.86 0 0 1-2.685-2.062l-.539.54V14a.5.5 0 0 1-.146.354l-1.5 1.5Zm2.893-4.894A20.419 20.419 0 0 0 8 12.71c2.456-1.666 3.827-3.207 4.489-4.512.679-1.34.607-2.42.215-3.185-.817-1.595-3.087-2.054-4.346-.761L8 4.62l-.358-.368c-1.259-1.293-3.53-.834-4.346.761-.392.766-.464 1.845.215 3.185.323.636.815 1.33 1.519 2.065l1.866-1.867a.5.5 0 1 1 .708.708L5.747 10.96Z" />
            </svg>
          </div>
          <div>
            <h3 class="fs-2 text-body-emphasis">Guaranteed to work.</h3>
            <p>Find the love of your dog's life or your money back.</p>
           
          </div>
        </div>
      </div>
  
    </div>

   
  </section>
  <!-- Testimonial -->
  <section id="testimonial">

    <div class="my-5">
      <div class="p-5 text-center bg-body-tertiary">
        <div class="container py-5">
          <h2 class="text-body-emphasis">"I no longer have to sniff other dogs for love. I've found the hottest Corgi on TinDog. Woof."</h2>
          <img class="profile-img mt-5" src="./images/dog-img.jpg" alt="dog image">
          <p class="col-lg-8 mx-auto lead">
            Pebbles, New York
          </p>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-sm-12">
              <img src="./images/techcrunch.png" alt="techcrunch" height="30">
            </div>
            <div class="col-lg-3 col-sm-12">
              <img src="./images/mashable.png" alt="mashable" height="30">
            </div>
            <div class="col-lg-3 col-sm-12">
              <img src="./images/bizinsider.png" alt="bizinsider" height="30">
            </div>
            <div class="col-lg-3 col-sm-12">
              <img src="./images/tnw.png" alt="tnw" height="30">
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- Pricing -->
  <section id="pricing">
    <div class="container">

      <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h2 class="display-4 fw-normal text-body-emphasis">A Plan for Every Dog's Needs</h2>
        <p class="fs-5 text-body-secondary">Simple and affordable price plans for you and your dog.</p>
      </div>

      <div class="row row-cols-1 row-cols-md-3 mb-3 text-center">
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Chihuahua</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$0<small class="text-body-secondary fw-light">/mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>5 Matches Per Day</li>
                <li>10 Messages Per Day</li>
                <li>Unlimited App Usage</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-outline-dark">Sign up for free</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm">
            <div class="card-header py-3">
              <h4 class="my-0 fw-normal">Labrador</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$15<small class="text-body-secondary fw-light">/mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Unlimited Matches</li>
                <li>Unlimited Messages</li>
                <li>Unlimited App Usage</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-dark">Get started</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card mb-4 rounded-3 shadow-sm border-primary">
            <div class="card-header py-3 text-bg-dark border-dark">
              <h4 class="my-0 fw-normal">Mastiff</h4>
            </div>
            <div class="card-body">
              <h1 class="card-title pricing-card-title">$29<small class="text-body-secondary fw-light">/mo</small></h1>
              <ul class="list-unstyled mt-3 mb-4">
                <li>Pirority Listing</li>
                <li>Unlimited Matches & Messages</li>
                <li>Unlimited App Usage</li>
              </ul>
              <button type="button" class="w-100 btn btn-lg btn-dark">Contact us</button>
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </section>
  <!-- Footer -->
  
  @include('partial.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>