<!DOCTYPE html>
<html>
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          
          <!-- Title Tab Chrome -->
	     <title>Maju Bersama Bambang</title>
          
          <!-- IMPORTANT!!! Calling Bootstrap CSS -->
          <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>" />

          <!-- Layout CSS. Put your styling code in this file -->
          <link rel="stylesheet" href="<?= base_url('public/css/layout.css') ?>">
     </head>
     <body>
          <nav class="navbar navbar-expand-lg navbar-dark">
               <div class="container">
                    <a class="navbar-brand" href="<?= site_url('') ?>">
                    <img src="<?= base_url('public/logo.png') ?>" alt="Logo" width="50" height="50">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                         <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Manage your page with Navbar-->
                    <div class="collapse navbar-collapse" id="navbarNav">
                         <ul class="navbar-nav">
                              <!-- Just call name route in routes.php. Example : site_url('name of route')-->
                              <li class="nav-item">
                                   <a class="nav-link" href="<?= site_url('') ?>">Home</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="<?= site_url('contact') ?>">Peta Sebaran</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="<?= site_url('berita') ?>">Berita</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="<?= site_url('peraturan') ?>">Peraturan</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="<?= site_url('peraturan') ?>">Program</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="<?= site_url('vaksin') ?>">Vaksin</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="<?= site_url('rumah-sakit') ?>">Rumah Sakit</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="<?= site_url('tes-covid') ?>">Tes Covid</a>
                              </li>
                              <li class="nav-item">
                                   <a class="nav-link" href="<?= site_url('covid19') ?>">Covid-19</a>
                              </li>
                         </ul>
                    </div>
               </div>
          </nav>

          <!-- IMPORTANT!!! Calling Jquery dan Bootsrap JS -->
          <script src="<?= base_url('public/js/jquery.min.js') ?>"></script>
          <script src="<?= base_url('public/js/bootstrap.min.js') ?>"></script>
    </body>
</html>