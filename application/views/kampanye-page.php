<!-- Dashboard divided in 3 section : Navbar, Header (Jumbotron), Data, Footer -->
<!-- Reuse section-navbar in every page -->
<section class="section-navbar">
	<div>
		<?php $this->load->view('layout/navbar'); ?>
	</div>
</section>

<section class="section-header">
	<div class="jumbotron jumbotron-fluid jumbo-program">
		<h1 style="margin: 50 0 0 100px">Program Bambang, M.T.I</h1>
	</div>
</section>

<section>
<div class="container">
	<div class="row justify-content-md-center">
		<div class="col-md-6" style="margin-top:25px; text-align:center">
			<img src="<?= base_url('public/profil.jpeg') ?>" style="height:400px; width:400px">	
		</div>
		<div class="col-md-6" style="text-align:center; margin-top:150px">
			<span style="color:blue; text-align:center">The Bambang Campaign Team</span>
			<h1 style="color:blue; text-align: center">Bambang, M.T.I.</h1>
			<span style="position: center">Dari Jakarta untuk Jakarta. Hidup Jakarta Selatan Sehat dan Cerdas</span>
		<div>
	</div>
</div>
</section>

<section style="margin-top:50px">
	<div class="container">
		<div class="row justify-content-md-center">
			<div class="col-md-8">
				<h4><b>Bambang, M.T.I</b></h4>
				<p style="text-align:justify"><b style="color:blue">Bambang, M.T.I.,</b> lulusan Universitas Indonesia dengan predikat Summa Cumlaude. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis hendrerit risus, nec congue leo finibus tincidunt. Pellentesque lobortis mauris quis lorem dignissim, vitae ornare neque condimentum. Quisque sit amet aliquam nibh. Donec congue ante semper ligula tristique, vel aliquet dolor euismod. Vivamus sed ipsum vel turpis commodo interdum. Vivamus eget euismod urna, et posuere risus. Quisque pretium augue ut pellentesque interdum. Curabitur in tempus felis. Duis ex libero, condimentum in nunc vitae, rutrum placerat tellus. Maecenas maximus scelerisque neque, vel vulputate ligula vehicula ut. Cras eu gravida magna.
				</p>
			</div>
			<div class="col-md-1">
				<div style="height:250px; width:1px ;background:black"></div>
			</div>
			<div class="col-md-3" style="margin-left:-50px">
				<p>Program Bambang M.T.I<p>
				<a href="">Visi dan Misi Bambang, M.T.I</a>
				<br><a href="">Program 1 Tahun Menjabat</a>
				<br><a href="">Program 3 Tahun Menjabat</a>
				<br><a href="">Program 5 Tahun Menjabat</a>
				<br><a href="">Bambang Pemersatu Jakarta</a>	
			</div>
		</div>
	</div>
</section>

<section>
	<div class="container">
		<div class="row">
			<div class="col-md-8" style="margin-top:25px">
				<div class="row">
					<div class="col-md-1">
						<div style="height:75px; width:10px ;background:blue"></div>
					</div>
					<div class="col-md-11" style="margin-left:-25px">
						<h2 style="color:blue">Hidup itu mudah kenapa harus susah</h2>
						<span>Bambang, 25 April 2021</span>
					</div>
				</div>
				<br>
				<img style="margin-top:25px" src="<?= base_url('public/kampanye-news.jpeg') ?>" style="height:400px; width:400px">
				<br>
				<span><a href="">Bambang dengan ibu-ibu Pasar Jagakarsa</a></span>
				<br>
				<p style="text-align:justify; margin-top:25px">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent sagittis hendrerit risus, nec congue leo finibus tincidunt. Pellentesque lobortis mauris quis lorem dignissim, vitae ornare neque condimentum. Quisque sit amet aliquam nibh. Donec congue ante semper ligula tristique, vel aliquet dolor euismod. Vivamus sed ipsum vel turpis commodo interdum. Vivamus eget euismod urna, et posuere risus. 

</p>
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