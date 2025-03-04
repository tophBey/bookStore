<nav class="fixed-top navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid ">
          <a class="navbar-brand" href="{{ route('home') }}">Bookshop</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="route{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Category</a>
              </li>
            </ul>

            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="{{ route('login') }}" class="text-decoration-none text-dark"><i class="fa-solid fa-right-to-bracket"></i> Login</a></li>
            </ul>
          </div>
        </div>
    </nav>