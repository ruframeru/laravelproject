<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href="{{ asset('tampilan/https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html') }} " target="_blank">
        <img src="{{ asset('tampilan/assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Argon Dashboard 2</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link {{ request()->is('Dashboard') ? 'active' : '' }}" href="{{ _('Dashboard') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        @if (Auth::user()->role == 'admin') 
          <li class="nav-item">
            <a class="nav-link {{ request()->is('Siswa') ? 'active' : '' }}" href="{{ _('Siswa') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-calendar-grid-58 text-warning text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Data Siswa</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->is('Guru') ? 'active' : '' }}" href="{{ _('Guru') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-credit-card text-success text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Data Guru</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="{{ _('Kelas') }}">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-app text-info text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Data Kelas</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="./pages/rtl.html">
              <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-world-2 text-danger text-sm opacity-10"></i>
              </div>
              <span class="nav-link-text ms-1">Data Mapel</span>
            </a>
          </li>
        @endif
        {{-- <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li> --}}
        <li class="nav-item">
          <a class="nav-link " href="./pages/profile.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
      </ul>
    </div>
    <div class="sidenav-footer mx-3 ">
        <div class="card card-plain shadow-none" id="sidenavCard">
          <img class="w-30 border-radius-lg shadow-sm" src="{{ asset('tampilan/assets/img/team-1.jpg') }}" alt="sidebar_illustration">
          <div class="card-body text-center p-3 w-100 pt-0">
            <div class="docs-info">
              <h6 class="mb-0">{{ Auth::user()->name }}</h6>
              <p class="text-xs font-weight-bold mb-0"></p>
            </div>
          </div>
        </div>
        <a href="" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
        <a class="btn btn-primary btn-sm mb-0 w-100" href="{{ route('logout') }}" type="button"
        onclick="event.preventDefault();
        document.getElementById('logout-form').submit();">
        {{ _('Logout') }}
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
        </a>
      </div>
  </aside>
