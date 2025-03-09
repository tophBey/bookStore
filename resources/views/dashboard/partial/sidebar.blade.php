<div class="d-flex flex-column flex-shrink-0 p-3 gradient-background" style="width: 280px; min-height: 100vh;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
              <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
              <span class="fs-4 text-white">My Dashboard</span>
            </a>
            <hr>
            <ul class="nav nav-pills flex-column mb-auto">
              <li class="nav-item">
                <a href="{{ route('home') }}" class="nav-link {{ request()->is('home') ? 'active' : '' }} text-white" aria-current="page">
                <i class="fa-solid fa-house bi pe-none me-2"></i>                  Home
                </a>
              </li>
              <li>
                <a href="{{ route('dashboard') }}" class="nav-link {{ request()->is('dashboard') ? 'active' : '' }} text-white link-body-emphasis">
                <i class="fa-solid fa-gauge bi pe-none me-2"></i>
                  <span class=""> Dashboard</span>
                </a>
              </li>
              <li>
                <a href="#" class="nav-link {{ request()->is('dashboard') ? 'order' : '' }} text-white link-body-emphasis">
                <i class="fa-solid fa-bag-shopping bi pe-none me-2"></i>
                  My Orders
                </a>
              </li>
              @role('super_admin')
              <li>
                <a href="{{ route('admin.category.index') }}" class="nav-link {{ request()->is('dashboard/category') ? 'active' : '' }} text-white link-body-emphasis">
                <i class="fa-solid fa-list bi pe-none me-2"></i> 
                  Category
                </a>
              </li>
              <li>
                <a href="{{route('admin.book.index')}}" class="nav-link {{ request()->is('dashboard/book') ? 'active' : '' }} text-white  link-body-emphasis">
                <i class="fa-solid fa-book bi pe-none me-2"></i>                  Book
                </a>
              </li>
              <li>
                <a href="{{ route('admin.bank.index') }}" class="nav-link {{ request()->is('dashboard/bank') ? 'active' : '' }}  text-white  link-body-emphasis">
                <i class="fa-solid fa-money-bill-1-wave pe-none me-2"></i>                  Payment
                </a>
              </li>
              @endrole
              <li>
                <form method="post" action="{{ route('logout') }}" class="nav-link {{ request()->is('customer') ? 'active' : '' }} text-white link-body-emphasis">
                  @csrf
                  <button type="submit" class="bg-transparent text-white border border-0"> <i class="fa-solid fa-right-from-bracket pe-none me-2"></i>
                  Logout</button>
                </form>
                
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