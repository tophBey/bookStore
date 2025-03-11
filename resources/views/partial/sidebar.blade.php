<nav class="fixed-top navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid ">
          <a class="navbar-brand" href="{{ route('home') }}">Bookshop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link {{ request()->is('about') ? 'active' : '' }}" aria-current="page" href="{{ route('about') }}">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('produk') ? 'active' : '' }}"" href="{{ route('front.produk') }}">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('kategori') ? 'active' : '' }}" href="{{ route('front.category') }}">Kategori</a>
              </li>
              @auth
              <li class="nav-item">
                <a class="nav-link " href="{{ route('dashboard') }}">Dashboard</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('cart') ? 'active' : '' }}" href="{{ route('frontend.cart') }}">Cart({{ $cart->where('user_id',auth()->id())->count() }}) <i class="fa-solid fa-cart-shopping"></i></a>
              </li>
              
            </ul>

            <ul class="navbar-nav ms-auto">
              <li class="nav-item"><img src="{{ Storage::url( auth()->user()->avatar )}}" alt="broken" width="30" height="30" class="rounded-circle"> {{ auth()->user()->name }}</li>
            </ul>
            @else
            </ul>            
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{ route('login') }}" class="text-decoration-none text-dark"><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>
            </ul>
            @endauth  
          </div>
        </div>
    </nav>