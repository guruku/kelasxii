<?php 
include 'config.php';
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="css/xii.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
</head>
<body>
  <section class="hero is-fullheight" style="background:url('img/header.jpg');background-size: cover;">
    <!-- Hero head: will stick at the top -->
    <div class="hero-head">
      <header class="navbar">
        <div class="container">
          <div class="navbar-brand">
            <a class="navbar-item">
              <img src="https://bulma.io/images/bulma-type-white.png" alt="Logo">
            </a>
            <span class="navbar-burger burger" data-target="navbarMenuHeroC">
              <span></span>
              <span></span>
              <span></span>
            </span>
          </div>
          <div id="navbarMenuHeroC" class="navbar-menu putuhteks">
            <div class="navbar-end">
              <a class="navbar-item is-active">
                Home
              </a>
              <a class="navbar-item">
                Ucapan
              </a>
              <a class="navbar-item">
                Galeri
              </a>
              <a class="navbar-item">
                Juara
              </a>
            </div>
          </div>
        </div>
      </header>
    </div>

    <!-- Hero content: will be in the middle -->
    <div class="hero-body">
      <div class="container has-text-centered">
        <h2 class="subtitle">
          FROM 2015 TO 2018
        </h2>
        <h1 class="title">
          CONGORO 23
        </h1>
        <button class="semi-transparent-button"><img src="drop.png"></button>
      </div>
    </div>

    <!-- Hero footer: will stick at the bottom -->
    <style type="text/css"></style>
  </section>
  <section class="hero is-fullheight">
    <p class="red">UCAPAN</p>
    <div class="hero-body">

      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="title1">WEB DESIGN</div><br>
            <div class="subtitle12">MUFTI NAMA PANJANG</div><br>
            <div class="subtitle1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            </div><br>
            <div class="card">
              <div class="imgterbaru" style="background:url('img/panggih.jpg');background-size: cover;"></div></div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="gambar" style="background:url('img/web1.jpg');background-size: cover;"></div></div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <section class="hero is-fullheight">

        <div class="hero-body">

          <div class="container">
            <div class="row">
              <div class="col-md-6">
               <div class="card">
                <div class="gambar" style="background:url('img/mufti2.jpg');background-size: cover;" ></div></div>
              </div>
              <div class="col-md-6">

                <div class="title1">IT SOFTWARE</div><br>
                <div class="subtitle12">MUFTI NAMA PANJANG</div><br>
                <div class="subtitle1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                </div><br>
                <div class="card">
                  <div class="imgterbaru1" style="background:url('img/mufti.jpg');background-size: cover;"></div></div>

                </div>
              </div>

            </div>
          </div>
        </section>
        <section class="hero is-fullheight">

          <div class="hero-body">

            <div class="container">
              <div class="row">
                <div class="col-md-6">
                  <div class="title1">DESIGN GRAFIS</div><br>
                  <div class="subtitle12">ALWI </div><br>
                  <div class="subtitle1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                  </div><br>
                  <div class="card">
                    <div class="imgterbaru" style="background:url('img/ALWI.jpg');background-size: cover;"></div></div>
                  </div>
                  <div class="col-md-6">
                    <div class="card">
                      <div class="gambar" style="background:url('img/alwi1.jpg');background-size: cover;" ></div></div>
                    </div>
                  </div>

                </div>
              </div>
            </section>
            <section class="hero is-fullheight">

              <div class="hero-body">

                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                     <div class="card">
                     <div class="gambar" style="background:url('img/hanan2.jpg');background-size: cover;" ></div></div>
                    </div>
                    <div class="col-md-6">

                      <div class="title1">IT SOFTWARE</div><br>
                      <div class="subtitle12">MUFTI NAMA PANJANG</div><br>
                      <div class="subtitle1">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                      </div><br>
                      <div class="card">
                        <div class="imgterbaru1" style="background:url('img/hanan.jpg');background-size: cover;"></div></div>

                      </div>
                    </div>

                  </div>
                </div>
              </section>
<?php

if(isset($_GET['halaman']))
    {
        if ($_GET['halaman']=='web')
        {
            include 'kejuaraan.php';
        }
         if ($_GET['halaman']=='animasi')
        {
            include 'animasi.php';
        }
         if ($_GET['halaman']=='design')
        {
            include 'design.php';
        }
         if ($_GET['halaman']=='it')
        {
            include 'it.php';
        }
}
 else
    {
        include 'kejuaraan.php';
    }

  ?>

              <section class="hero blackin">

                <div class="container">
                  <div class="padingatasbawah">
                    <div class="row">
                      <div class="col-md-4"><p class="putihteks">2018 © Sampis Studio. All rights reserved.</p></div>
                      <div class="col-md-4"><p class="tengah">Telkom School<p></div>
                      <div class="col-md-4"></div>
                    </div>

                  </div>
                </div>
                <div class="row ">
                 <div class="col-md-12 item padingatasbawah10"> <p class="tengah">Designed with <img src="img/lope.png"> by: DedeqImoet</p></div>
               </div>
             </section>


             <script type="text/javascript">
              document.addEventListener('DOMContentLoaded', function () {

  // Get all "navbar-burger" elements
  var $navbarBurgers = Array.prototype.slice.call(document.querySelectorAll('.navbar-burger'), 0);

  // Check if there are any navbar burgers
  if ($navbarBurgers.length > 0) {

    // Add a click event on each of them
    $navbarBurgers.forEach(function ($el) {
      $el.addEventListener('click', function () {

        // Get the target from the "data-target" attribute
        var target = $el.dataset.target;
        var $target = document.getElementById(target);

        // Toggle the class on both the "navbar-burger" and the "navbar-menu"
        $el.classList.toggle('is-active');
        $target.classList.toggle('is-active');

      });
    });
  }

});
</script>
</body>
</html>