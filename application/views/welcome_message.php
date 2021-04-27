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
		<div class="row justify-content-around data-row-1" style="margin-left: 10px; margin-right: 10px">
          <div class="col detail-data" style="margin-left: 10px; margin-right: 10px; border:1px solid #DFDFE5;">
            <h4 style="text-align : center;font-size:16px; height: 50px; margin-top: 10px">Nasib Aktivis Antimasker di Tebet yang Kini Lemah Karena COVID-19</h4>
            <p style="text-align : center;font-size:16px; font-weight: 10;">Selasa, 06 Apr 2021 - 11:12 WIB</p>
            <center>
            <img src="https://akcdn.detik.net.id/community/media/visual/2021/04/05/aktivis-antimasker-banyuwangi-terpapar-covid-19_43.jpeg?w=700&q=90" style="height:150px; font-weight: 10; width:300px; margin-top=25px; margin-bottom: 20px"></center>
            <p id="like2" onclick="myFunction()" style="text-align: center;"> ❤️ 23 | 🔗 12 | 🔖 Bookmark </p>
            <a href= "https://news.detik.com/berita-jawa-timur/d-5521525/nasib-aktivis-antimasker-di-banyuwangi-yang-kini-lemah-karena-covid-19" style="text-align : right; font-family:helvetica; font-weight: 10; float: right; margin-bottom: 20px; border-radius: 25px; margin-left: 25px">Read more at Detik.com ></a>
          
          </div>
  
          <div class="col detail-data" style="margin-left: 10px; margin-right: 10px; border:1px solid #DFDFE5;">
            <h4 style="text-align : center;font-size:16px; height: 50px; margin-top: 10px">Kekisruhan Kedatangan Ratusan WN India, Masuk Indonesia untuk Hindari Tsunami Covid-19 di Negaranya</h4>
            <p style="text-align : center;font-size:16px; font-weight: 10;">Selasa, 06 Apr 2021 - 10:10 WIB</p>
            <center>
            <img src="https://asset.kompas.com/crops/hW3icOn9VYatrWCsrtcDnCT5KnY=/0x0:798x532/750x500/data/photo/2021/04/23/608298997337c.jpg" style="height:150px; font-weight: 10; width:300px; margin-top=25px; margin-bottom: 20px"></center>
            <p id="like3" onclick="myFunction2()" style="text-align: center;"> ❤️ 19 | 🔗 8 | 🔖 Bookmark </p>
            <a href= "https://megapolitan.kompas.com/read/2021/04/24/11122221/kekisruhan-kedatangan-ratusan-wn-india-masuk-indonesia-untuk-hindari?page=all" style="text-align : right; font-family:helvetica; font-weight: 10; float: right; margin-bottom: 20px; border-radius: 25px; margin-left: 25px">Read more at Kompas.com ></a>
          </div>
          <div class="col detail-data" style="margin-left: 10px; margin-right: 10px; border:1px solid #DFDFE5;">
            <h4 style="text-align : center;font-size:16px; height: 50px; margin-top: 10px">Jepang darurat COVID-19, Indonesia tetap bersiap untuk Olimpiade Tokyo</h4>
            <p style="text-align : center;font-size:16px; font-weight: 10;">Selasa, 06 Apr 2021 - 07:55 WIB</p>
            <center>
            <img src="https://img.antaranews.com/cache/800x533/2021/04/19/43C93F64-4835-4589-9AF3-D0E1F4B18D08.jpeg" style="height:150px; font-weight: 10; width:300px; margin-top=25px; margin-bottom: 20px"></center>
            <p id="like4" onclick="myFunction3()" style="text-align: center;"> ❤️ 16 | 🔗 6 | 🔖 Bookmark </p>
            <a href= "https://www.antaranews.com/berita/2119170/jepang-darurat-covid-19-indonesia-tetap-bersiap-untuk-olimpiade-tokyo" style="text-align : right; font-family:helvetica; font-weight: 10; float: right; margin-bottom: 20px; border-radius: 25px; margin-left: 25px">Read more at AntaraNews.com ></a>
          </div>
        </div> 
		</div><br>
		<a href="<?= site_url('berita') ?>" class="btn btn-primary btn-md active" role="button" aria-pressed="true" style="border-radius:20px; float: right; margin-right: 80px">Lebih Lanjut ></a><br><br><br>
	</div>
</section>


<!-- Reuse section-footer in every page -->
<section class="section-footer">
	<hr>
	<div>
		<?php $this->load->view('layout/footer'); ?>
	</div>
</section>