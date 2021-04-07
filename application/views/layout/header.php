<!DOCTYPE html>
<html>
     <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          
          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>" />
          <style type="text/css">
               body {
                    width: 95%;
                    margin: 0 auto;
               }

               .navbar-brand{
                    margin-left: 50px;
                    margin-right: 50px;
               }
               .nav-item{
                    margin-left : 20px;
                    margin-right: 20px;
               }
               .nav-link:link {
                    color: grey;
               }
               .nav-link:hover, .nav-link:active{
                    background-color : #D1F2EB ;
               }

               .jumbo{
                    background-image: url("public/jumbotron-city.jpg");
                    height: 500px;
                    color: #faf0f0;
                    text-shadow: 3px 2px rgb(99, 126, 151);
              }

              
               .data{
                    box-shadow: 5px 5px 5px 5px #F4F6F6;
                   border-radius:10px;
                   position:center;
                   width:75%;
                   margin-top: -200px;
                   background-color: white;
              }

              #title-wording-data{
                   text-align : center;
                   background-color: lightgrey;
                   border-radius:10px;
                   margin-top:50px;

              }

              .detail-data{
                   background-color:white;
                   box-shadow:2px 2px 2px 2px #F4F6F6;
                   border-radius:10px;
              }
              .data-row-2{
                    margin-top:20px;
                    margin-bottom:20px;
              }

               footer {
                    margin-top: 20px;
                    color: #999999;
                    text-align: center;
               }
          </style>
     </head>
<body>
     <nav class="navbar navbar-expand-lg navbar-dark>
		<div class="container">
			<a class="navbar-brand" href="<?= base_url('home') ?>">
               <img src="<?= base_url('public/logo.png') ?>" alt="Logo" width="50" height="50">
               </a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('home') ?>">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('contact') ?>">Peta Sebaran</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('faqs') ?>">Berita</a>
					</li>
                         <li class="nav-item">
						<a class="nav-link" href="<?= base_url('faqs') ?>">Peraturan</a>
					</li>
                         <li class="nav-item">
						<a class="nav-link" href="<?= base_url('faqs') ?>">Program</a>
					</li>
                         <li class="nav-item">
						<a class="nav-link" href="<?= base_url('vaksin') ?>">Vaksin</a>
					</li>
                         <li class="nav-item">
						<a class="nav-link" href="<?= base_url('faqs') ?>">Rumah Sakit</a>
					</li>
                         <li class="nav-item">
						<a class="nav-link" href="<?= base_url('faqs') ?>">Tes Covid</a>
					</li>
                         <li class="nav-item">
						<a class="nav-link" href="<?= base_url('faqs') ?>">Covid-19</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="jumbotron jumbotron-fluid jumbo">
	</div>
          <!-- Jquery dan Bootsrap JS -->
          <script src="<?= base_url('public/js/jquery.min.js') ?>"></script>
          <script src="<?= base_url('public/js/bootstrap.min.js') ?>"></script>
    </body>
     
    </html>