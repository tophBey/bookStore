<div class="d-flex flex-column flex-shrink-0 p-3 bg-dark" style="width: 280px; min-height: 100vh;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
              <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
              <span class="fs-4 text-white">My Dashboard</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }} text-white" aria-current="page">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"></use></svg>
                  Home
                </a>
              </li>
              <li>
                <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }} text-white link-body-emphasis">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"></use></svg>
                  Dashboard
                </a>
              </li>
              <li>
                <a href="#" class="nav-link {{ request()->is('dashboard') ? 'order' : '' }} text-white link-body-emphasis">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"></use></svg>
                  Orders
                </a>
              </li>
              <li>
                <a href="{{ route('admin.category.index') }}" class="nav-link {{ request()->is('dashboard/category') ? 'active' : '' }} text-white link-body-emphasis">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                  Category
                </a>
              </li>
              <li>
                <a href="{{route('admin.book.index')}}" class="nav-link {{ request()->is('book') ? 'active' : '' }} text-white  link-body-emphasis">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                  Book
                </a>
              </li>
              <li>
                <a href="../banks/banks.html" class="nav-link {{ request()->is('payment') ? 'active' : '' }}  text-white  link-body-emphasis">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"></use></svg>
                  Payment
                </a>
              </li>
              <li>
                <a href="#" class="nav-link {{ request()->is('customer') ? 'active' : '' }} text-white link-body-emphasis">
                  <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"></use></svg>
                  Customers
                </a>
              </li>
            </ul>
            <hr>
            <div class="dropdown">
              <a href="#" class="d-flex text-white align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong class="text-white">mdo</strong>
              </a>
              <ul class="dropdown-menu text-small shadow">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
              </ul>
            </div>
</div>