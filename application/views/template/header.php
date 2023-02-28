<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ITBI | HMTF</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
    rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?= base_url('assets/') ?>lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/') ?>lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/') ?>css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
    class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-warning text-white d-none d-lg-flex">
    <div class="container py-3">
        <div class="d-flex align-items-center">
            <a href="index.html">
                <h2 class="text-white fw-bold m-0">ITBI</h2>
            </a>
            <div class="ms-auto d-flex align-items-center">
                <small class="ms-4"><i class="fa fa-map-marker-alt me-3"></i>Tandem hilir, Deliserdang</small>
                <small class="ms-4"><i class="fa fa-envelope me-3"></i>info@example.com</small>
                <small class="ms-4"><i class="fa fa-phone-alt me-3"></i>+6283138184144</small>
                <div class="ms-3 d-flex">
                    <a class="btn btn-sm-square btn-light text-warning rounded-circle ms-2" href=""><i
                        class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-light text-warning rounded-circle ms-2" href=""><i
                            class="fab fa-twitter"></i></a>
                            <a class="btn btn-sm-square btn-light text-warning rounded-circle ms-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Topbar End -->


            <!-- Navbar Start -->
            <div class="container-fluid bg-white sticky-top">
                <div class="container">
                    <nav class="navbar navbar-expand-lg bg-white navbar-light p-lg-0">
                        <a href="index.html" class="navbar-brand d-lg-none">
                            <h1 class="fw-bold m-0">ITBI</h1>
                        </a>
                        <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse"
                        data-bs-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarCollapse">
                        <div class="navbar-nav">
                            <a href="<?= base_url('app/') ?>" class="nav-item nav-link active">Home</a>
                            <!-- a href="about.html" class="nav-item nav-link">Tentang Kami</a> -->
                            <a href="<?= base_url('app/struktur_organisasi') ?>" class="nav-item nav-link">Struktur Organisasi</a>
                            <!--   <a href="project.html" class="nav-item nav-link">Akademik</a> -->
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Informasi</a>
                                <div class="dropdown-menu bg-light rounded-0 rounded-bottom m-0">
                                    <a href="#" class="dropdown-item">Jadwal Akademik</a>
                                    <a href="<?= base_url('app/prestasi') ?>" class="dropdown-item">Mahasiswa Berprestasi</a>
                                    <a href="<?= base_url('app/dosen') ?>" class="dropdown-item">Daftar Dosen</a>
                                    
                                </div>
                            </div>
                            <a href="<?= base_url('app/galeri') ?>" class="nav-item nav-link">Galery</a>
                        </div>
                        <div class="ms-auto d-none d-lg-block">
                           <!--  <a href="" class="btn btn-warning rounded-pill py-2 px-3">Get A Quote</a> -->
                       </div>
                   </div>
               </nav>
           </div>
       </div>
        <!-- Navbar End -->