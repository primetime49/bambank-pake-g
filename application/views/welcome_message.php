<!-- Dashboard divided in 3 section : Navbar, Header (Jumbotron), Data, Footer -->
<!-- Reuse section-navbar in every page -->
<section class="section-navbar">
	<div>
		<?php $this->load->view('layout/navbar'); ?>
	</div>
</section>

<!-- Only use on Dashboard page -->
<section class="section-header">
	<div class="jumbotron jumbotron-fluid jumbo">
	</div>
</section>

<!-- Only use on Dashboard page -->
<section class="section-data">
	<div class="container data">
		<div class="row justify-content-md-center">
			<div class="col-md-6">
				<div id="title-wording-data">
					<p>Vaksinasi Covid-19 Jakarta Selatan</p>
				</div>
				<div class="row justify-content-around data-row-1">
					<div class="col-5 detail-data">
						<p style="text-align : center;font-size:16px">Total Vaksinasi</p>
						<h4 style="text-align : center">178.634</h4>
						<span><p style="text-align : center;font-size:12px">Indonesia: 1.051.093</p></span>
					</div>
					<div class="col-5 detail-data">
						<p style="text-align : center;font-size:16px">Tenaga Kesahatan</p>
						<h4 style="text-align : center">56.912</h4>
						<span><p style="text-align : center;font-size:12px">Indonesia: 589.034</p></span>
					</div>
				</div>

				<div class="row justify-content-around data-row-2">
					<div class="col-5 detail-data">
						<p style="text-align : center;font-size:16px">Lanjut Usia</p>
						<h4 style="text-align : center">99.088</h4>
						<span><p style="text-align : center;font-size:12px">Indonesia: 1.051.093</p></span>
					</div>
					<div class="col-5 detail-data">
						<p style="text-align : center;font-size:16px">Pelayanan Publik</p>
						<h4 style="text-align : center">99.000</h4>
						<span><p style="text-align : center;font-size:12px">Indonesia: 589.034</p></span>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div id="title-wording-data">
					<p>Kasus Positif Covid-19 Hari Ini</p>
				</div>
				<div class="row justify-content-around data-row-1">
					<div class="col-5 detail-data">
						<p style="text-align : center;font-size:16px">Total Kasus Positif</p>
						<div class="row">
							<div class="col-md-6" style="margin:0 0 0 30px">
								<h4 style="text-align : center">7.767</h4>
							</div>
							<div class="col-md-6" style="margin:0 0 0 -30px">
								<span style="font-size:8pt"><img src="<?= base_url('public/arrow-down.png') ?>">-127</span>
							</div>
						</div>
						<span><p style="text-align : center;font-size:12px">Indonesia: 1.051.093</p></span>
					</div>
					<div class="col-5 detail-data">
						<p style="text-align : center;font-size:16px">Orang Dirawat</p>
						<div class="row">
							<div class="col-md-6" style="margin:0 0 0 30px">
								<h4 style="text-align : center">56.912</h4>
							</div>
							<div class="col-md-6" style="margin:0 0 0 -30px">
								<span style="font-size:8pt"><img src="<?= base_url('public/arrow-up.png') ?>">+17</span>
							</div>
						</div>
						<span><p style="text-align : center;font-size:12px">Indonesia: 589.034</p></span>
					</div>
				</div>
				<div class="row justify-content-around data-row-2">
					<div class="col-5 detail-data">
						<p style="text-align : center;font-size:16px">Total Meninggal</p>
						<h4 style="text-align : center">178.634</h4>
						<span><p style="text-align : center;font-size:12px">Indonesia: 1.051.093</p></span>
					</div>
					<div class="col-5 detail-data">
						<p style="text-align : center;font-size:16px">Total Sembuh</p>
						<h4 style="text-align : center">56.912</h4>
						<span><p style="text-align : center;font-size:12px">Indonesia: 589.034</p></span>
					</div>
				</div>
			</div>
		</div>
		<hr>
		<div class="row" style="margin-bottom: 50px">
			<div class="col-md-6">
				<h4 style="text-align:center">Grafik Covid-19 Jakarta Selatan</h4>
				<div class="justify-content-md-center">
					<img src="<?= base_url('public/grafik.png') ?>" style="height : 300px; width : 500px; margin-bottom: 50px">
				</div>
			</div>
			
			<div class="col-md-6">
				<h4 style="text-align:center">Grafik Covid-19 Nasional</h4>
				<div class="justify-content-md-center">
					<img src="<?= base_url('public/grafik.png') ?>" style="height : 300px; width : 500px; margin-bottom: 50px">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="section-program">
	<div class="container">
		<div class="row justify-content-lg-center">
			<div class="col-md-6">
				<h1 style="margin-top:25px">Menuju Kota Sejahtera</h1>
				<h3>Bambank Pake G</h3>
				<p>Program yang akan membuat sejahtera warga kota Jakarta Selatan Program yang akan membuat sejahtera warga kota Jakarta Selatan Program yang akan membuat sejahtera warga kota Jakarta Selatan Program yang akan membuat sejahtera warga kota Jakarta Selatan</p>
				<a href="#" class="btn btn-primary btn-md active" role="button" aria-pressed="true" style="border-radius : 20px">SELENGKAPNYA</a>
			</div>
			<div class="col-md-6">
				<img src="<?= base_url('public/profil-program.png') ?>" style="height:500px; width:500px; margin-top=25px">
			</div>
		</div>
	</div>
</section>

<section class="section-news">
	<div class="container">
		<div class="row" >
			<h4 style="margin-top:25px">Kabar Hari Ini</h4>	
		</div>
		<div class="row">
			<div class="col-sm" style="background:white; margin : 10 10 10 0px">
				<img src="<?= base_url('public/profil-program.png') ?>" style="height:200px; width:200px">
				<p style="text-align : justify;font-size:16px">Kecamatan jagakarsa menyelenggarakan vaksinasi covid</p>
				<div class="row justify-content-md-center" style="margin-bottom: 10px">
					<div class="col col-lg-2">
						<span style="font-size:8pt"><img src="<?= base_url('public/arrow-up.png') ?>">28</span>
					</div>
					<div class="col col-lg-2">
						<span style="font-size:8pt"><img src="<?= base_url('public/arrow-up.png') ?>">28</span>
					</div>
					<div class="col col-lg-2">
						<span style="font-size:8pt"><img src="<?= base_url('public/arrow-up.png') ?>">28</span>
					</div>
				</div>
			</div>
			<div class="col-sm" style="background:white; margin : 10 10 10 10px">
				<img src="<?= base_url('public/profil-program.png') ?>" style="height:200px; width:200px">
				<p style="text-align : justify;font-size:16px">Kecamatan jagakarsa menyelenggarakan vaksinasi covid</p>
				<div class="row justify-content-md-center" style="margin-bottom: 10px">
					<div class="col col-lg-2">
						<span style="font-size:8pt"><img src="<?= base_url('public/arrow-up.png') ?>">28</span>
					</div>
					<div class="col col-lg-2">
						<span style="font-size:8pt"><img src="<?= base_url('public/arrow-up.png') ?>">28</span>
					</div>
					<div class="col col-lg-2">
						<span style="font-size:8pt"><img src="<?= base_url('public/arrow-up.png') ?>">28</span>
					</div>
				</div>
			</div>
			<div class="col-sm" style="background:white; margin : 10 0 10 10px">
				<img src="<?= base_url('public/profil-program.png') ?>" style="height:200px; width:200px">
				<p style="text-align : justify;font-size:16px">Kecamatan jagakarsa menyelenggarakan vaksinasi covid</p>
				<div class="row justify-content-md-center" style="margin-bottom: 10px">
					<div class="col col-lg-2">
						<span style="font-size:8pt"><img src="<?= base_url('public/arrow-up.png') ?>">28</span>
					</div>
					<div class="col col-lg-2">
						<span style="font-size:8pt"><img src="<?= base_url('public/arrow-up.png') ?>">28</span>
					</div>
					<div class="col col-lg-2">
						<span style="font-size:8pt"><img src="<?= base_url('public/arrow-up.png') ?>">28</span>
					</div>
				</div>
			</div>
		</div>
		<a href="#" class="btn btn-primary btn-md active" role="button" aria-pressed="true" style="border-radius:20px; margin: 10 0 10 0px">SELENGKAPNYA</a>
	</div>
</section>


<!-- Reuse section-footer in every page -->
<section class="section-footer">
	<hr>
	<div>
		<?php $this->load->view('layout/footer'); ?>
	</div>
</section>