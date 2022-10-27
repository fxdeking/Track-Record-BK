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

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('template/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('template/css/style.css') }}" rel="stylesheet">
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
                <a href="#" class="navbar-brand mx-4 mb-3">
                <link href="{{ asset('gambar/trackrecordbklogo.jpeg') }}" rel="icon">
                    <h3 class="text-primary">Track Record</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="{{ asset('template/img/user.jpg') }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">{{ Auth::user()->name }}</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="#" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Beranda</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-table me-2"></i> Data </a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#1" class="dropdown-item">Data Pengunjung</a>
                            <a href="#2" class="dropdown-item">Data Konselor</a>
                            <a href="#3" class="dropdown-item">Data Laporan Keluhan</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Form</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="#1" class="dropdown-item">Form Data Pengunjung</a>
                            <a href="#2" class="dropdown-item">Form Data Konselor</a>
                            <a href="#3" class="dropdown-item">Form Data Laporan Keluhan</a>
                            <a href="#4" class="dropdown-item">Form Jam Bertugas</a>
                            <a href="#5" class="dropdown-item">Form Kategori Keluhan</a>
                        </div>
                    </div>
                    <a href="{{ asset('template/form.html') }}" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Jadwal Bertugas</a>
                    <a href="#6" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Catatan</a>
                    <!-- <a href="table.html" class="nav-item nav-link"><i class="fa fa-laptop me-2"></i>Tables</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Charts</a> -->
                
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->