<!-- Dashboard divided in 3 section : Navbar, Header (Jumbotron), Data, Footer -->
<!-- Reuse section-navbar in every page -->
<section class="section-navbar">
	<div>
		<?php $this->load->view('layout/navbar'); ?>
	</div>
</section>

<section class="section-header">
	<div class="jumbotron jumbotron-fluid jumbo-kampanye">
	</div>
</section>

<section>
<div class="container">
	<div class="row">
		<div class="col-md-10" style="margin-top:25px">
			<h1>Kampanye dan Program Pemerintah</h1>
			<span>"Vaksin covid-19 yang akan digunakan terbukti aman!" - Jokowi</span>
		</div>
		<div class="col-md-2">
		<img src="<?= base_url('public/satgas.png') ?>" style="height:100px; width:100px">
		<div>
	</div>
</div>
</section>
<hr>
<section>
	<div class="container">	
		<div class="row">
			<div class="col-md-10" style="margin-top:25px">
				<h6 style="text-align:right">Anda berada dalam zona aman sesuai lokasi anda di Menteng Dalam, Jakarta Selatan <br> Tetap ikuti protokal kesehatan, termasuk memakai masker</h6>
			</div>
			<div class="col-md-2">
				<img src="<?= base_url('public/check.png') ?>" style="height:75px; width:75px">
			<div>
		</div>
	<div>
</section>



<section>
<div class="container mt-5 mb-5">
	<div class="row">
		<div>
			<p><b>Sortir dari terbaru V</b></p>
			<ul class="timeline">
				<li>
					<a class="float-left">17 Februari 2021</a>
					<br>
					<h5>Indonesia Masuki Tahap Kedua Vaksinasi Covid-19</h5>
					<div class="row">
						<div class="col-md-2">
							<img src="<?= base_url('public/kampanye1.png') ?>" style="height:100px; width:150px">
						</div>
						<div class="col-md-10">
							<p>Indonesia mulai memasuki tahap kedua program vaksinasi Covid-19 yang menyasar warga lanjut usia (lansia) di atas 60 tahun dan pekerja publik.
							vaksinasi ini ditargetkan menyasar 38.513.446 orang yang diharapkan rampung divaksinasi pada Mei 2021.</p>
						</div>
					</div>
				</li>
				<li>
					<a class="float-left">13 Januari 2021</a>
					<br>
					<h5>Program Vaksinasi COVID-19 Resmi Dimulai</h5>
					<div class="row">
						<div class="col-md-2">
							<img src="<?= base_url('public/kampanye2.png') ?>" style="height:100px; width:150px">
						</div>
						<div class="col-md-10">
							<p>Pelaksanaan vaksinasi COVID-19 dimulai dengan vaksinasi pertama dilakukan pada Presiden RI Joko Widodo, serta sejumlah perwakilan dari berbagai latar belakang seperti tenaga kesehatan, pemuka agama, guru, dan lain-lain</p>
						</div>
					</div>
				</li>
				<li>
					<a class="float-left">25 April 2021</a>
					<br>
					<h5>Kartu Pra Kerja</h5>
					<div class="row">
						<div class="col-md-2">
							<img src="<?= base_url('public/kampanye3.png') ?>" style="height:100px; width:150px">
						</div>
						<div class="col-md-10">
							<p>Kartu pra-kerja adalah sebuah kartu yang digalangkan dalam rangka program pelatihan dan pembinaan warga negara Indonesia yang belum memiliki keterampilan.
 Awalnya pemerintah mengalokasikan Rp10 triliun. Kini naik menjadi Rp20 triliun. Program ini berlangsung selama 4 bulan.</p>
						</div>
					</div>
				</li>
				<li>
					<a class="float-left">31 Maret 2021</a>
					<br>
					<h5>Program Kartu Sembako</h5>
					<div class="row">
						<div class="col-md-2">
							<img src="<?= base_url('public/kampanye4.png') ?>" style="height:100px; width:150px">
						</div>
						<div class="col-md-10">
							<p>Di tengah kondisi virus corona, pemerintah kembali menaikkan nilai bantuan Kartu Sembako menjadi Rp2,4 juta/tahun atau Rp200.000 per bulan/keluarga. Bantuan ini akan disalurkan kepada 20 juta keluarga di Indonesia.</p>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div style="margin: 0 50 0 50%">
			<a href="#" class="btn btn-primary btn-md active" role="button" aria-pressed="true" style="border-radius:20px">Tampilkan Selanjutnya V</a>
		</div>
	</div>
</div>

</section>


<!-- Reuse section-footer in every page -->
<section class="section-footer">
	<hr>
	<div>
		<?php $this->load->view('layout/footer'); ?>
	</div>
</section>