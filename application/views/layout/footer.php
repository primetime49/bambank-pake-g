<head>
    <!-- Link Sosmed -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<style>
		.center {
		text-align: center;
		}
	</style>

	<style>
		.right {
		text-align: right;
		}
	</style>

	<style>
		.left {
		text-align: left;
		}
	</style>

	<style>
		.bawah {
		font-size: 20px;
		font-weight: bold;
		color: #D26363;
		}
	</style>

	<style>
		.bawahdua {
		font-size: 15px;
		color: #D26363;
		}
	</style>
	
	<style>
		.fa {	
		font-size: 30px;
		width: 60px;
		text-align: center;
		}

		/* Add a hover effect if you want */
		.fa:hover {
		opacity: 5;
		}

		/* Set a specific color for each brand */

		.fa-facebook {
		color: black;
		}

		.fa-instagram {
		color: black;
		}

		.fa-twitter {
		color: black;
		}
	</style>
</head>

<footer id="footer-desktop">
    <div class="left">
        <div class="row">
			<nav class="navbar navbar-expand-lg navbar-dark>
			<div class="container">
				<a class="navbar-brand" href="<?= base_url('home') ?>">
				<img src="<?= base_url('public/logo5.png') ?>" alt="Logo" width="100" height="100">
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
							<a class="nav-link" href="<?= base_url('faqs') ?>">Covid-19</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
    </div>

	<div class="right">
		<a href="#" class="fa fa-twitter"></a>
		<a href="#" class="fa fa-instagram"></a>
		<a href="#" class="fa fa-facebook"></a>
	</div>

	<p class="bawah">Layanan Darurat</p>
	<div class="bawahdua">
		<span ><img src="<?= base_url('public/pin.png') ?>" alt="" width="15" height="15"> 112 </span>
		<span ><img src="<?= base_url('public/pin.png') ?>" alt="" width="15" height="15"> 0811-1211-2112 </span>
		<span ><img src="<?= base_url('public/pin.png') ?>" alt="" width="15" height="15"> 0813-8837-6955 </span>
	</div>

	<div class="right">
		<p style="font-size:10px">Pengunjung Saat ini : <b>150</b> | Hari ini : <b>3,872</b> | Minggu ini : <b>9,570</b> | Total : <b>236,986</b></p>
	</div>

	<hr>
    <center>Copyright &copy; <?php echo date('Y'); ?>. Warganet.</center>
	<hr>	
</footer>
</body>
</html>