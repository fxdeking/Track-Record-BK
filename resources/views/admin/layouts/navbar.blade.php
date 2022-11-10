<!-- Content Start -->
<div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Cari" id='input' onkeyup='searchTable()'>
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Catatan</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0" style="max-height:165px;overflow-y: scroll;">
                        @if(count($catats)>0)
                        @foreach ($catats as $catat)
                                <div class="d-flex align-items-center" style="padding:0 15px 0 15px;width:250px;">
                                    
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">{{ $catat->nama }}</h6>
                                        <small>{{ $catat->catatan }}</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                        @endforeach
                        @else
                        <p class="bg-dark" style="text-align:center;">Tidak ada catatan.</p>
                        @endif
                            <a href="{{ route('catinput') }}" class="dropdown-item text-center">Tambah Catatan</a>
                            <a href="{{ route('cat') }}" class="dropdown-item text-center">Lihat Semua Catatan</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="{{ route('aboutus') }}" class="nav-link">
                            <i class="fa fa-user me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Tentang kami</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Profile updated</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">New user added</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Password changed</h6>
                                <small>15 minutes ago</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">See all notifications</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                                <img class="rounded-circle me-lg-2" src="{{ asset('foto') }}/{{ Auth::user()->foto }}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">{{ Auth::user()->name }}</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{ route('profil') }}" class="dropdown-item"> Profil </a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item">Keluar</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST">@csrf</form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->