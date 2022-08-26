<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Absen Dulu</title>
    @stack('before-style')
    @include('includes.style')
    @stack('after-style')
</head>

<body class="sb-nav-fixed" onload="realtimeClock()">
    <nav class="sb-topnav navbar navbar-expand navbar-light">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="absensi"><img src="img/Judul.png" alt="Absen Dulu" width="180px"></a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i
                class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-light" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Absen Dulu</div>
                        <a class="nav-link" href="absensi">
                            <div class="sb-nav-link-icon"><i class="fas fa-home"></i></div>
                            Home
                        </a>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                            Account
                        </a>

                        @if (auth()->user()->level == "Admin")
                        <div class="sb-sidenav-menu-heading">Admin Panel</div>
                        <a class="nav-link" href="/add-user">
                            <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                            Tambah User
                        </a>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                            Data User
                        </a>
                        <a class="nav-link" href="index.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-file"></i></div>
                            Laporan Absensi
                        </a>
                        @endif

                        <a class="nav-link" href="{{ route('logout') }}">
                            <div class="sb-nav-link-icon"><i class="fa-solid fa-right-from-bracket"></i></div>
                            Logout
                        </a>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    {{ auth()->user()->name }} - {{ auth()->user()->no_pegawai }}
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                    @stack('before-content')
                    @yield('content')
                    @stack('after-content')

            </main>
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; Absen Dulu 2022</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    @stack('before-script')
    @include('includes.script')
    @stack('after-script')

    @include('sweetalert::alert')
</body>

</html>
