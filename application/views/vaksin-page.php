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
      <div class="row justify-content-md-center" style="margin-top:-200px">
         <div>
            <h4 style="text-align:center">Apa itu Vaksinasi Covid-19?</h4>
         </div>   
      </div>
      <div class="row justify-content-lg-center" style="margin-top:25px">
         <div class="col-md-6">
				<img src="https://corona.jakarta.go.id/img/logo/img-vaksin.svg" style="height:400px; width:400px">
			</div>
         <div class="col-md-6" style="margin-top:50px">
				<p>
               <b style="color:blue">Vaksin adalah produk biologi yang berisi antigen</b> berupa mikroorganisme atau bagiannya atau zat yang dihasilkannya yang telah diolah sedemikian rupa sehingga aman, yang apabila diberikan kepada seseorang akan menimbulkan kekebalan spesifik secara aktif terhadap penyakit tertentu.
            </p>
            <p>
               <b style="color:blue">Vaksin bukanlah obat</b>, vaksin mendorong pembentukan kekebalan spesifik tubuh agar terhindar dari tertular virus ataupun kemungkinan sakit berat. Selama belum ada obat khusus untuk Covid-19, maka vaksin Covid-19 yang aman dan efektif serta perilaku 3M (memakai masker, mencuci tangan dengan sabun, dan menjaga jarak) adalah upaya perlindungan yang bisa kita lakukan agar terhindar dari Covid-19.
            </p>
            
			</div>
		</div>
   </div>
</section>

<section style="background-color:#D0EFFF">
   <div class="container">
      <div class="row justify-content-md-center">
         <div style="margin: 25 0 25 0px">
            <h3 style="text-align:center;color:blue">Vaksin Covid-19 Aman dan Ampuh</h3>
            <span>Vaksin yang sudah diedarkan sudah lulus uji klinis yang dilakukan oleh BPOM</span>
         </div>   
      </div>
   </div>
</section>

<section class="section">
   <div class="container">
      <div class="row justify-content-lg-center" style="margin-top:25px">
         <div class="col-md-6">
				<img src="<?= base_url('public/vaksin2.png') ?>" style="height:400px; width:400px">
			</div>
         <div class="col-md-6" style="margin-top:50px">
				<p>
               <b style="color:blue">Vaksin akan merangsang pembentukan kekebalan terhadap penyakit tertentu pada tubuh seseorang.</b><br>
               Setelah divaksin, tubuh akan mengingat virus atau bakteri pembawa penyakit, mengenali dan tahu cara melawannya.<br><br>
               Vaksinasi tidak hanya bertujuan untuk memutus rantai penularan penyakit, tetapi juga dalam jangka panjang untuk mengeliminasi bahkan membasmi penyakit itu sendiri.<br><br>
               Apabila seseorang tidak menjalani vaksinasi, maka ia tidak akan memiliki kekebalan spesifik terhadap suatu penyakit.
            </p>
            
			</div>
		</div>      
   </div>
</section>

<section style="background-color:#D0EFFF; height:400px">
   <div class="container">
      <div class="row justify-content-md-center">
         <div style="margin: 25 0 25 0px">
            <h3 style="text-align:center;color:blue">Tahapan Vaksinasi Covid-19</h3>
            <span>Tahapan vaksinasi Kota Jakarta Selatan</span>
         </div>
      </div>
      <div class="row justify-content-md-center">
         <div class="col-md-4" style="background-color:#236AB8; margin: 0 5 0 5px; border-radius:10px">
            <h5 style="color:white;margin-top:10px">Tahap 1</h5>
            <p style="color:white; margin-bottom:15px; text-align:justify">Tenaga kesehatan, tenaga penunjang, dan mahasiswa yang menjalani pendidikan profesi Kedokteran</p>
         </div>
         <div class="col-md-4" style="background-color:#236AB8; margin: 0 5 0 5px; border-radius:10px">
            <h5 style="color:white;margin-top:10px">Tahap 2</h5>
            <p style="color:white; margin-bottom:15px; text-align:justify">Petugas pelayan publik, TNI, Polri, dan pelayan publik lainnya, dan kelompok usia lanjut (>60tahun)</p>
         </div>
      </div>
      <div class="row justify-content-md-center">
         <div class="col-md-4" style="background-color:#236AB8; margin: 10 5 0 5px; border-radius:10px">
            <h5 style="color:white;margin-top:10px">Tahap 3</h5>
            <p style="color:white; margin-bottom:15px; text-align:justify">Masyarakat rentan dari aspek gespasial, sosial, dan ekonomi</p>
         </div>
         <div class="col-md-4" style="background-color:#236AB8; margin: 10 5 0 5px; border-radius:10px">
            <h5 style="color:white;margin-top:10px">Tahap 4</h5>
            <p style="color:white; margin-bottom:15px; text-align:justify">Masyarakat dan pelaku perekonomian lainnya dengan pendekatan kluster sesuai dengan ketersediaan vaksin</p>
         </div>
      </div>
   </div>
</section>

<section>
   <div class="container">
      <div class="row justify-content-md-center" style="margin-top:50px">
         <div>
            <h4 style="text-align:center">Efek Samping Covid-19</h4>
         </div>   
      </div>
      <div class="row justify-content-lg-center">
         <div class="col-md-6" style="margin-top:25px">
				<img src="<?= base_url('public/vaksin4.png') ?>" style="height:350px; width:350px; margin-left: 50px">
			</div>
         <div class="col-md-6" style="margin-top:50px">
				<p>
               <b style="color:blue">Secara umum, efek samping yang timbul dapat beragam, pada umumnya ringan dan bersifat sementara, dan tidak selalu ada, serta bergantung pada kondisi tubuh.</b>
            </p>
            <p>
               Efek samping ringan seperti demam dan nyeri otot atau ruam pada bekas suntikan adalah hal yang wajar namun tetap perlu dimonitor.<br><br>
               Melalui tahapan pengembangan dan pengujian vaksin yang lengkap, efek samping yang berat dapat terlebih dahulu terdeteksi sehingga dapat dievaluasi lebih lanjut. Manfaat vaksin jauh lebih besar dibandingkan risiko sakit karena terinfeksi bila tidak divaksin.
            </p>
            
			</div>
		</div>
   </div>
</section>

<!-- <section class="section-place">
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
</section> -->

<!-- Reuse section-footer in every page -->
<section class="section-footer">
	<hr>
	<div>
		<?php $this->load->view('layout/footer'); ?>
	</div>
</section>