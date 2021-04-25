<!-- Dashboard divided in 3 section : Navbar, Header (Jumbotron), Data, Footer -->
<!-- Reuse section-navbar in every page -->
<section class="section-navbar">
	<div>
		<?php $this->load->view('layout/navbar'); ?>
	</div>
</section>

<!-- Only use on Dashboard page -->
<section class="section-header">
	<div class="jumbotron jumbotron-fluid jumbo-vaksin">
	</div>
</section>

<section class="section-vaksin">
   <div class="container">
      <div class="row justify-content-lg-center">
         <div class="col-md-6">
				<img src="https://corona.jakarta.go.id/img/logo/img-vaksin.svg" style="height:500px; width:500px; margin-top=25px">
			</div>
			<div class="col-md-6">
				<h1 style="margin-top:25px">Apa itu Vaksin Covid-19?</h1>
            <br>
				<p>
               <b>Vaksin adalah produk biologi yang berisi antigen</b> berupa mikroorganisme atau bagiannya atau zat yang dihasilkannya yang telah diolah sedemikian rupa sehingga aman, yang apabila diberikan kepada seseorang akan menimbulkan kekebalan spesifik secara aktif terhadap penyakit tertentu.
            </p>
            <p>
               <b>Vaksin adalah produk biologi yang berisi antigen</b> berupa mikroorganisme atau bagiannya atau zat yang dihasilkannya yang telah diolah sedemikian rupa sehingga aman, yang apabila diberikan kepada seseorang akan menimbulkan kekebalan spesifik secara aktif terhadap penyakit tertentu.
            </p>
            <p>
               <b>Vaksin adalah produk biologi yang berisi antigen</b> berupa mikroorganisme atau bagiannya atau zat yang dihasilkannya yang telah diolah sedemikian rupa sehingga aman, yang apabila diberikan kepada seseorang akan menimbulkan kekebalan spesifik secara aktif terhadap penyakit tertentu.
            </p>
			</div>
		</div>
   </div>
</section>

<section class="section-get-vaksin">
   <div class="container">
      <div class="row justify-content-md-center">
         <div style="margin: 25 0 25 0px">
            <h4>Bagaimana mendapatkan vaksin Covid-19?</h4>
			</div>   
      </div>
      <div class="row justify-content-md-center">
         <div style="margin: 25 0 25 0px">
         <img src="https://dinkes.acehprov.go.id/uploads/FB_IMG_1610377598409.jpg" style="height:600px; width:750px">
			</div>   
      </div>
      
   </div>
   
</section>

<section class="section-place">
   <div class="container">
		<div class="row justify-content-md-center">
			<div style="margin: 25 0 25 0px">
            <h4>Daftar Fasilitas Kesehatan Penyedian Vaksinasi Covid-19</h4>
			</div>
         <table class="table table-striped">
            <thead style="text-align:center">
               <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Fasilitas Kesehatan</th>
                  <th scope="col">Tipe</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Lokasi</th>
               </tr>
            </thead>
            <tbody style="text-align:center">
               <tr>
                  <th scope="row">1</th>
                  <td>Rumah Sakit Siloam</td>
                  <td>Rumah Sakit II</td>
                  <td>Jalan Garuda Pancasila Jakarta Selatan</td>
                  <td><a href="https://google.com/">Lihat</a></td>
               </tr>
               <tr>
                  <th scope="row">2</th>
                  <td>Rumah Sakit Bakti</td>
                  <td>Rumah Sakit I</td>
                  <td>Jalan Patimura Jakarta Selatan</td>
                  <td><a href="https://google.com/">Lihat</a></td>
               </tr>
               <tr>
                  <th scope="row">3</th>
                  <td>Puskesmas Jakarta Selatan</td>
                  <td>Puskesmas</td>
                  <td>Jalan Melon Barat Jakarta Selatan</td>
                  <td><a href="https://google.com/">Lihat</a></td>
               </tr>
            </tbody>
         </table>
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