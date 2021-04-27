<head>
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

	<p style="font-size:30px">Layanan Darurat<br></p>
	<span><img src="https://corona.jakarta.go.id/img/logo/pin.png" alt=""> Jalan Kesehatan No. 10 Jakarta Pusat<br></span>
	<span><img src="https://corona.jakarta.go.id/img/logo/phone-black.png" alt=""> 112, 0811-1211-2112, atau 0813-8837-6955</span>

	<div class="right">
				<p style="font-size:10px">Pengunjung Saat ini : <b>150</b> | Hari ini : <b>3,872</b> | Minggu ini : <b>9,570</b> | Total : <b>236,986</b></p>
			</div>

	<hr>
    <center>Copyright &copy; <?php echo date('Y'); ?>. Warganet.</center>
	<hr>	
</footer>
</body>
</html>