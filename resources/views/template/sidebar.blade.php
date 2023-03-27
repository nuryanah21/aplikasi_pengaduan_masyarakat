        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-light navbar-light">
                @if (auth()->user()->level == "admin")
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <marquee class="text-primary">Halaman Admin | Layanan Pengaduan Masyarakat Online
                    </marquee>
                </a>
                @endif
                @if (auth()->user()->level == "petugas")
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <marquee class="text-primary">Halaman Petugas | Layanan Pengaduan Masyarakat Online
                    </marquee>
                </a>
                @endif
                @if (auth()->user()->level == "masyarakat")
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <marquee class="text-primary">Selamat Datang {{ Auth::user()->nama}} di Layanan Pegaduan Masyarakat Online
                    </marquee>
                </a>
                @endif
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('dashmin/img/profile.jpg') }}" alt=""
                            style="width: 40px; height: 40px;">
                        <div
                            class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1">
                        </div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ Auth::user()->nama}}</h6>
                        <span>{{ Auth::user()->level }}</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    @if (auth()->user()->level == "admin")
                    <a href="/dashboard" class="nav-item nav-link {{ e($__env->yieldContent('menu')) == 'dashboard' ? 'active' : '' }}"><i class="fa fa-home me-2"></i></i>Dashboard</a>
                    @endif
                    @if (auth()->user()->level == "petugas")
                    <a href="/dashboard" class="nav-item nav-link {{ e($__env->yieldContent('menu')) == 'dashboard' ? 'active' : '' }}"><i class="fa fa-home me-2"></i>Dashboard</a>
                    @endif
                    @if (auth()->user()->level == "admin")
                    <a href="/petugas" class="nav-item nav-link {{ e($__env->yieldContent('menu')) == 'petugas' ? 'active' : '' }}"><i class="fa fa-user me-2"></i>Petugas</a>
                    @endif
                    @if (auth()->user()->level == "masyarakat")
                    <a href="/masyarakat/create" class="nav-item nav-link {{ e($__env->yieldContent('menu')) == 'masyarakat/create' ? 'active' : '' }}"><i class="fa fa-table me-2"></i>Pengaduan</a>
                    @endif
                    @if (auth()->user()->level == "admin")
                    <a href="/pengaduan" class="nav-item nav-link {{ e($__env->yieldContent('menu')) == 'pengaduan' ? 'active' : '' }}"><i class="fa fa-table me-2"></i>Pengaduan</a>
                    @endif
                    @if (auth()->user()->level == "petugas")
                    <a href="/petugas/pengaduan" class="nav-item nav-link {{ e($__env->yieldContent('menu')) == 'pengaduan' ? 'active' : '' }}"><i class="fa fa-table me-2"></i>Pengaduan</a>
                    @endif
                    @if (auth()->user()->level == "masyarakat")
                    <a href="/masyarakat/laporanku" class="nav-item nav-link {{ e($__env->yieldContent('menu')) == 'laporanku' ? 'active' : '' }}"><i class="fa fa-file me-2"></i>Laporan Saya</a>
                    @endif
                </div>
            </nav>
        </div>
