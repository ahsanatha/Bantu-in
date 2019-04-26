<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bantu.in</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fonts/icomoon/style.css">
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
                    <div class="site-logo mr-auto w-25"><a href="#">Bantu.in</a></div>

                    <div class="mx-auto text-center">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                                <li><a href="#home-section" class="nav-link">Home</a></li>
                                <li><a href="#category-section" class="nav-link">Kategori</a></li>
                                <li><a href="#teachers-section" class="nav-link">Developers</a></li>
                                <li><a href="#feedback" class="nav-link">Feedback</a></li>

                            </ul>
                        </nav>
                    </div>

                    <div class="ml-auto w-25">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul
                                class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                                <li class="cta"><a href="<?php echo base_url('C_Main/signin'); ?>"
                                        class="nav-link"><span>Sign In</span></a></li>
                                <li class="cta"><a href="<?php echo base_url('C_Main/signup'); ?>"
                                        class="nav-link"><span>Sign Up</span></a></li>
                            </ul>
                        </nav>
                        <a href="#"
                            class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span
                                class="icon-menu h3"></span></a>
                    </div>
                </div>
            </div>

        </header>

        <div class="intro-section" id="home-section">

            <div class="slide-1" style="background-image: url('<?php echo base_url(); ?>assets/images/maid.jpg');"
                data-stellar-background-ratio="0.5">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <div class="row align-items-center">
                                <div class="col-lg-6 mb-4">
                                    <h1 data-aos="fade-up" data-aos-delay="100"></h1>
                                    <p class="mb-4" data-aos="fade-up" data-aos-delay="200">Peran pekerja rumah sangat
                                        penting dalam kehidupan sehari-hari. Semakin banyak wanita yang menjadi wanita
                                        karier dan sibuk dengan pekerjaan sendiri sehingga kebutuhan akan tenaga kerja
                                        yang profesional sangat tinggi. Basik asisten rumah tangga, perawat, ataupun
                                        babysitter. Berdasarkan hal tersebut, makan kami tertarik untuk menbuat suatu
                                        aplikasi berbasis web yang akan menjembatani antara orang yang membutuhkan
                                        pekerjaan dengan orang yang membutuhkan jasa pekerja.</p>

                                </div>


                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="site-section courses-title" id="category-section">
            <div class="container">
                <div class="row mb-5 justify-content-center">
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="">
                        <h2 class="section-title">Kategori</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="site-section courses-entry-wrap" data-aos="fade-up" data-aos-delay="100">
            <div class="container">
                <div class="row">

                    <div class="owl-carousel col-12 nonloop-block-14">

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="course-single.html"><img
                                        src="<?php echo base_url(); ?>assets/images/baby_sitter.jpg" alt="Image"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <div class="meta"></div>
                                <h3><a href="#">Baby Sitter</a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="course-single.html"><img src="<?php echo base_url() ?>assets/images/nurse.jpg"
                                        alt="Image" class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <div class="meta"></div>
                                <h3><a href="#">Suster</a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                            </div>
                        </div>

                        <div class="course bg-white h-100 align-self-stretch">
                            <figure class="m-0">
                                <a href="course-single.html"><img
                                        src="<?php echo base_url() ?>assets/images/asisten.jpg" alt="Image"
                                        class="img-fluid"></a>
                            </figure>
                            <div class="course-inner-text py-4 px-4">
                                <div class="meta"></div>
                                <h3><a href="#">Asisten Rumah Tangga</a></h3>
                                <p>Lorem ipsum dolor sit amet ipsa nulla adipisicing elit. </p>
                            </div>
                            <div class="d-flex border-top stats">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-7 text-center">
                    <button class="customPrevBtn btn btn-primary m-1">Prev</button>
                    <button class="customNextBtn btn btn-primary m-1">Next</button>
                </div>
            </div>
        </div>
    </div>



    <div class="site-section" id="teachers-section">
        <div class="container">

            <div class="row mb-5 justify-content-center">
                <div class="col-lg-7 mb-5 text-center" data-aos="fade-up" data-aos-delay="">
                    <h2 class="section-title">Our Developers</h2>
                </div>
            </div>

            <div class="row">

                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="teacher text-center">
                        <img src="<?php echo base_url() ?>assets/images/dion.jpg" alt="Image"
                            class="img-fluid w-50 rounded-circle mx-auto mb-4">
                        <div class="py-2">
                            <h3 class="text-black">Dionisio Febrianto</h3>
                            <p class="position">Programmer</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus
                                enim iusto tempora, adipisci at provident.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="teacher text-center">
                        <img src="<?php echo base_url() ?>assets/images/atta.jpg" alt="Image"
                            class="img-fluid w-50 rounded-circle mx-auto mb-4">
                        <div class="py-2">
                            <h3 class="text-black">Ahsan Athallah</h3>
                            <p class="position">Data Scientist</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus
                                enim iusto tempora, adipisci at provident.</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="teacher text-center">
                        <img src="<?php echo base_url() ?>assets/images/almer.jpg" alt="Image"
                            class="img-fluid w-50 rounded-circle mx-auto mb-4">
                        <div class="py-2">
                            <h3 class="text-black">Almer Fandriyanto</h3>
                            <p class="position">Programmer</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus
                                enim iusto tempora, adipisci at provident.</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="teacher text-center">
                        <img src="<?php echo base_url() ?>assets/images/felia.jpg" alt="Image"
                            class="img-fluid w-50 rounded-circle mx-auto mb-4">
                        <div class="py-2">
                            <h3 class="text-black">Felia Novitasari</h3>
                            <p class="position">Programmer</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Porro eius suscipit delectus
                                enim iusto tempora, adipisci at provident.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section bg-image overlay"
        style="background-image: url('<?php echo base_url(); ?>assets/images/maid.jpg');">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-md-8 text-center testimony">
                    <h3 class="mb-4">(HR. Muslim)</h3>
                    <blockquote>
                        <p>&ldquo; Allah akan menolong seorang hamba, selama hamba itu senantiasa menolong saudaranya
                            &rdquo;</p>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>







    <div class="site-section bg-light" id="feedback">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-7">



                    <h2 class="section-title mb-3">Feedback</h2>
                    <p class="mb-5">Kirimkan feedback agar Bantu-in lebih baik lagi</p>

                    <form method="post" data-aos="fade">
                        <div class="form-group row">
                            <div class="col-md-6 mb-3 mb-lg-0">
                                <input type="text" class="form-control" placeholder="First name">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control" placeholder="Last name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-12">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea class="form-control" id="" cols="30" rows="10"
                                    placeholder="Write your message here."></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">

                                <input type="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill"
                                    value="Send Message">
                            </div>
                        </div>

                    </form>
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