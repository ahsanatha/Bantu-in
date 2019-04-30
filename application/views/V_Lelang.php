<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bantu.in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/aos.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/simple-sidebar.css">
</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">
        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>
        <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">
            <div class="container-fluid">
                <div class="d-flex align-items-center">
                    <div class="site-logo mr-auto w-25"><a href="<?php echo base_url(); ?>">Bantu.in</a></div>
                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                            </ul>
                        </nav>
                    </div>
                    <div class="ml-auto w-25">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul
                                class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                                <li class="cta"><span style="color:white"><?=$_SESSION['nama']?></span></li>
                                <li class="cta"><a href="<?php echo base_url('C_Main/logout'); ?>"
                                        class="nav-link"><span>Logout</span></a></li>
                            </ul>
                        </nav>
                        <a href="#"
                            class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span
                                class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>
        </header>
        <div class="intro-section single-cover" id="home-section">
            <div class="slide-1 " style="background-image: url('<?php echo base_url(); ?>assets/images/<?=$gambar?>');"
                data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="row justify-content-center align-items-center text-center">
                                <div class="col-lg-6">
                                    <h1 data-aos="fade-up" data-aos-delay="0"><?=$title?></h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex" id="wrapper">
            <div class="col-lg-4 col-md-6 mb-3 ">
                <div class="card h-100 m-5">
                    <a href="#"><img class="card-img-top" src="<?=base_url('assets\images\default.png')?>" alt=""></a>
                    <div class="card-body">
                        <h4 class="card-title">
                            <a href="#"><?=$info['nama']?></a>
                        </h4>
                        <h5>Gaji tertinggi saat ini :<br /> Rp 500.000/hari</h5>
                        <p class="card-text"><?=$info['deskripsi']?></p>
                    </div>
                    <div class="card-footer">
                        <small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 mt-5">
                <form>
                    <div class="form-group">
                        <label for="lelang">Nilai Lelang</label>
                        <input type="nummber" class="form-control" id="inputlelang" placeholder="Masukan nominal">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <div class="card text-center mt-2">
                        <div class="card-header">
                            Dionisio
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Rp 300.000 / hari</h5>
                            <p class="card-text">ini adalah pesan tambahan dari penguna
                            </p>
                            <?php if (($_SESSION['tipeUser'] == 'asisten') && ($_SESSION['idUser'] == $_GET['id'])) {?>
                            <a href="#" class="btn btn-danger">Delete</a>
                            <a href="#" class="btn btn-primary">Accept</a>
                            <?php } ?>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
                    <div class="card text-center mt-2">
                        <div class="card-header">
                            Hawkeye
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Rp 500.000 / hari</h5>
                            <p class="card-text">ini adalah pesan tambahan dari penguna
                            </p>
                            <?php if (($_SESSION['tipeUser'] == 'asisten') && ($_SESSION['idUser'] == $_GET['id'])) {?>
                            <a href="#" class="btn btn-danger">Delete</a>
                            <a href="#" class="btn btn-primary">Accept</a>
                            <?php } ?>
                        </div>
                        <div class="card-footer text-muted">
                            2 days ago
                        </div>
                    </div>
            </div>
            </form>

        </div> <!-- .site-wrap -->

        <script src="<?php echo base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/popper.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.stellar.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.countdown.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/aos.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.fancybox.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.sticky.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/main.js"></script>
</body>

</html>