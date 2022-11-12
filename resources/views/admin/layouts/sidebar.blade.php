<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"> 
    <title>Track Record BK</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('gambar/trackrecordbklogo.jpeg') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('template/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('template/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">

    <style>
    .h {
        transition: ease-in-out 0.15s;
    }
    .h:hover {
        color: #EB1616;
        transition: ease-in-out 0.15s;
    }
    </style>
</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="{{ route('dashboard') }}" class="navbar-brand mb-3" style="display:flex;">
                <img src="{{ asset('gambar/trackrecordbklogo.jpeg') }}" width="50px"><h3 class="text-primary" style="margin-top:10px;">&nbsp;&nbsp;Track Record</h3>
                </a>
                <a href="{{ route('profil') }}" class="text-reset text-decoration-none">
                <div class="d-flex align-items-center ms-4 mb-4 h">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('foto') }}/{{ Auth::user()->foto }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                        <span>Admin</span>
                    </div>
                </div>
                </a>
                <div class="navbar-nav w-100">
                    <a href="{{ route('dashboard') }}" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-table me-2"></i> Data </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('peng') }}" class="dropdown-item">Data Pengunjung</a>
                            <a href="#2" class="dropdown-item">Data Konselor</a>
                            <a href="#3" class="dropdown-item" style="width:220px;">Data Laporan Keluhan</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Form</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{ route('penginput') }}" class="dropdown-item" style="width:230px;">Form Data Pengunjung</a>
                            <a href="{{ route('koninput') }}" class="dropdown-item" style="width:230px;">Form Data Konselor</a>
                            <a href="{{ route('jadinput') }}" class="dropdown-item" style="width:230px;">Form Jam Bertugas</a>
                            <a href="{{ route('katinput') }}" class="dropdown-item" style="width:230px;">Form Kategori Keluhan</a>
                        </div>
                    </div>
                    <a href="{{ route('jad') }}" class="nav-item nav-link" style="width:211px;"><i class="fa fa-keyboard me-2"></i>Jadwal Bertugas</a>
                    <a href="{{ route('cat') }}" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Catatan</a>
                    <a href="{{ route('adm') }}" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Admin</a>
                    <!-- <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> -->
                
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->