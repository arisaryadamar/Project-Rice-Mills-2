<?php
$getuser = $this->session->userdata('session_user');
$getGrup = $this->session->userdata('session_grup');
?>
<html lang="en">
  <head>
    <title>RiceMills Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url('asset/home/fonts/icomoon/style.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('asset/home/css/bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/home/css/jquery-ui.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/home/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/home/css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('asset/home/css/owl.theme.default.min.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('asset/home/css/jquery.fancybox.min.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('asset/home/css/bootstrap-datepicker.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('asset/home/fonts/flaticon/font/flaticon.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('asset/home/css/aos.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('asset/home/css/style.css')?>">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border text-primary" role="status">
      <span class="sr-only">Loading...</span>
    </div>
  </div>


  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo"><a href="index.html" class="h3 mb-0">RICE MILLS<span class="text-primary"></span> </a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="#home-section" class="nav-link">Home</a></li>
                <li><a href="#menu-section" class="nav-link">Menu</a>
                <li><a href="#about-section" class="nav-link">About Us</a></li>
                <li><a href="#contact-section" class="nav-link">Contact</a></li>
                <li><a href="<?php echo base_url()?>Login/logout" ?class="nav-link">Log Out</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    <div class="site-blocks-cover overlay" style="background-image: url(<?php echo base_url('asset/home/images/background.jpg')?>);" data-aos="fade" id="home-section">

      <div class="container">
        <div class="row align-items-center justify-content-center">

          
          <div class="col-md-10 mt-lg-5 text-center">
            <div class="single-text owl-carousel">
              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">EFISIEN</h1>
                <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Meningkatkan produktivitas dan penghematan biaya</p>
                <div data-aos="fade-up" data-aos-delay="100">
                </div>
              </div>

              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">EFEKTIF</h1>
                <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Dapat mengontrol perusahaan di mana saja dan kapan saja</p>
              </div>

              <div class="slide">
                <h1 class="text-uppercase" data-aos="fade-up">MUDAH</h1>
                <p class="mb-5 desc"  data-aos="fade-up" data-aos-delay="100">Pendokumentasian menjadi lebih mudah</p>
              </div>

            </div>
          </div>
            
        </div>
      </div>

      <a href="#menu-section" class="mouse smoothscroll">
        <span class="mouse-icon">
          <span class="mouse-wheel"></span>
        </span>
      </a>
    </div>  


    <div class="site-section" id="menu-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">

          <?php  
            if($getGrup==1){ 
              
           echo '<div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="">
            <a href="'.base_url('pmsk/index').'"><img src="'.base_url('asset/home/images/masok.png').'" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4"></a>
          <a href="'.base_url('pmsk/index').'"><h3 class="card-title">PEMASOKAN</h3></a>
            <p>Padi dari pemasok.</p>
          </div>
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
          <a href="'.base_url('Penggilingan/index').'"><img src="'.base_url('asset/home/images/giling.png').'" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4"></a>
            <a href="'.base_url('Penggilingan/index').'"><h3 class="card-title">PENGGILINGAN</h3></a>
            <p>Padi yang digiling.</p>
          </div>
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
          <a href="'.base_url('Penjualan/index').'"><img src="'.base_url('asset/home/images/jual.png').'" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4"></a>
            <a href="'.base_url('Penjualan/index').'"><h3 class="card-title">PENJUALAN</h3></a>
            <p>Beras yang terjual.</p>
            </div>';}?>

            <?php
            if($getGrup==2){ 
           echo '<div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="">
            <a href="'.base_url('Pemasokan/index').'"><img src="'.base_url('asset/home/images/masok.png').'" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4"></a>
          <a href="'.base_url('Pemasokan/index').'"><h3 class="card-title">PEMASOKAN</h3></a>
            <p>Padi dari pemasok.</p>
          </div>
          <div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="100">
          <a href="'.base_url('Penggilingan/index').'"><img src="'.base_url('asset/home/images/giling.png').'" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4"></a>
            <a href="'.base_url('Penggilingan/index').'"><h3 class="card-title">PENGGILINGAN</h3></a>
            <p>Padi yang digiling.</p>
          </div>';}?>

            <?php
            if($getGrup==3){ 
           echo '<div class="col-md-4 text-center" data-aos="fade-up" data-aos-delay="200">
          <a href="'.base_url('Penjualan/index').'"><img src="'.base_url('asset/home/images/jual.png').'" alt="Free Website Template by Free-Template.co" class="img-fluid w-25 mb-4"></a>
            <a href="'.base_url('Penjualan/index').'"><h3 class="card-title">PENJUALAN</h3></a>
            <p>Beras yang terjual.</p>
            </div>';}?>

           
          </div>

        </div>

          </div>
    
    <div class="site-section cta-big-image" id="about-section">
      <div class="container">
        <div class="row mb-5 justify-content-center">
          <div class="col-md-8 text-center">
            <h2 class="section-title mb-3" data-aos="fade-up" data-aos-delay="">About Us</h2>
            <p class="lead" data-aos="fade-up" data-aos-delay="100">Merupakan Website internal untuk memanajemen PT Penggilingan Padi dalam melakukan pekerjaannya agar lebih mudah.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6 mb-5" data-aos="fade-up" data-aos-delay="">
            <figure class="circle-bg">
            <img src="<?php echo base_url('asset/home/images/PADII.jpg')?>" alt="Free Website Template by Free-Template.co" class="img-fluid">
            </figure>
          </div>
          <div class="col-lg-5 ml-auto" data-aos="fade-up" data-aos-delay="100">
            
            <h3 class="text-black mb-4">Rice Mills</h3>

            <p>Merupakan suatu sistem untuk memudahkan owner mengontrol manajemen dari penggilingan padinya. dimana terdapat 3 fitur utama yaitu pemasukan, penggilingan, dan penjualan.</p>

            <p>Dengan adanya website ini diharapkan dapat membantu mencatat semua data yang terdapat pada PT Internal.</p>
            
          </div>
        </div>    
        
      </div>  
    </div>
 
    <footer class="site-footer" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
             
              <h2 class="section-title mb-3">Contact</h2>
          </div>
        </div>
        <div class="row mb-5">
          
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-room d-block h2 text-primary"></span>
              <span>Politeknik Negeri Jember, Jawa Timur</span>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-4">
              <span class="icon-phone d-block h2 text-primary"></span>
              <a href="#">+628 560 773 9784</a>
            </p>
          </div>
          <div class="col-md-4 text-center">
            <p class="mb-0">
              <span class="icon-mail_outline d-block h2 text-primary"></span>
              <a href="#">ricemills185@gmail.com</a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 mb-5">
            </form>
          </div>
        </div>
       </div>
    </footer>

  </div> <!-- .site-wrap -->

  <script src="<?php echo base_url('asset/home/js/jquery-3.3.1.min.js')?>"></script>
  <script src="<?php echo base_url('asset/home/js/jquery-ui.js')?>"></script>
  <script src="<?php echo base_url('asset/home/js/popper.min.js')?>"></script>
  <script src="<?php echo base_url('asset/home/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('asset/home/js/owl.carousel.min.js')?>"></script>
  <script src="<?php echo base_url('asset/home/js/jquery.countdown.min.js')?>"></script>
  <script src="<?php echo base_url('asset/home/js/jquery.easing.1.3.js')?>"></script>
  <script src="<?php echo base_url('asset/home/js/aos.js')?>"></script>
  <script src="<?php echo base_url('asset/home/js/jquery.fancybox.min.js')?>"></script>
  <script src="<?php echo base_url('asset/home/js/jquery.sticky.js')?>"></script>
  <script src="<?php echo base_url('asset/home/js/isotope.pkgd.min.js')?>"></script>

  
  <script src="<?php echo base_url('asset/home/js/main.js')?>"></script>

  
  </body>
</html>