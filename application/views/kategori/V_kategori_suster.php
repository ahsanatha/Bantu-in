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
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="" class="nav-link"><span>Sign Out</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>
      
    </header>

    <div class="intro-section single-cover" id="home-section">
      
      <div class="slide-1 " style="background-image: url('<?php echo base_url(); ?>assets/images/nurse.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6">
                  <h1 data-aos="fade-up" data-aos-delay="0">Suster</h1>
                </div>

                
              </div>
            </div>
            
          </div>

        </div>
      </div>
    </div>

    <div class="d-flex" id="wrapper">

          <!-- Sidebar -->
          <div class="bg-light border-right" id="sidebar-wrapper">
            <div class="list-group list-group-flush">
              <a href="<?php echo site_url('C_Customer/kategori_asis');?>" class=" font-weight-bold list-group-item list-group-item-action bg-light">Asisten Rumah Tangga</a>
              <a href="<?php echo site_url('C_Customer/kategori_suster');?>" class="font-weight-bold list-group-item list-group-item-action active">Suster</a>
              <a href="<?php echo site_url('C_Customer/kategori_baby');?>" class="font-weight-bold list-group-item list-group-item-action bg-light">Baby Sitter</a>
            </div>
          </div>
          <!-- isi -->
      <div class="m-5">
        <div class="row">
          <div class="">
            <div class="mb-5">
              <div class="row">
              <!-- isi -->
              <?php foreach ($asistens as $key => $asisten): ?>    
              <div class="card m-3" style="width: 18rem;">
                <img class="card-img-top" src="<?php echo base_url(); ?>assets/images/<?php echo $asisten['gambar'] ?>" alt="Card image cap">
                <div class="card-body">
                  <h5 class="card-title"><?php echo $asisten['nama']; ?></h5>
                  <p class="card-text">Tanggal Lahir : <?php echo $asisten['tglLahir']; ?></p>
                  <p class="card-text">Alamat        : <?php echo $asisten['alamat']; ?></p>
                  <p class="card-text">Nomor Telepon : <?php echo $asisten['nomorTelpon']; ?></p>
                  <p class="card-text">Instansi      : <?php echo $asisten['instansi']; ?></p>
                  <p class="card-text"><?php echo $asisten['deskripsi']; ?></p>
                </div>
                
                  <a href="#" class="btn btn-primary">Lelang</a>
              </div>

              <?php endforeach; ?>

            </div>
          </div>
          
        </div>
      </div>
    </div>
    
    

    
     

  
    
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