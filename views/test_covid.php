<section class="section-navbar">
	<div>
		<?php $this->load->view('layout/navbar'); ?>
	</div>
</section>

<section class="section-place">
   <div class="container">
		<div class="row justify-content-md-center">
			<div style="margin: 25 0 25 0px">
            <h4>Daftar Fasilitas Tempat Test Covid-19</h4>
			</div>
         <table class="table table-striped">
            <thead style="text-align:center">
               <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama Fasilitas Kesehatan</th>
                  <th scope="col">Tipe</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Harga</th>
                  <th scope="col">Lokasi</th>
               </tr>
            </thead>
            <tbody style="text-align:center">
               <tr>
                  <th scope="row">1</th>
                  <td>Nayya Clinic Jakarta</td>
                  <td>Rapid Test</td>
                  <td>Cilandak</td>
                  <td>200.000</td>
                  <td><a href="https://google.com/">Lihat</a></td>
               </tr>
               <tr>
                  <th scope="row">2</th>
                  <td>BioTest</td>
                  <td>Rapid Test</td>
                  <td>Petogogan</td>
                  <td>200.000</td>
                  <td><a href="https://google.com/">Lihat</a></td>
               </tr>
               <tr>
                  <th scope="row">3</th>
                  <td>OMNI Hospitals</td>
                  <td>Antigen</td>
                  <td>Pulo Gadung</td>
                  <td>800.000</td>
                  <td><a href="https://google.com/">Lihat</a></td>
               </tr>
               <tr>
                  <th scope="row">4</th>
                  <td>Prodia</td>
                  <td>Antigen</td>
                  <td>Rasuna Said</td>
                  <td>800.000</td>
                  <td><a href="https://google.com/">Lihat</a></td>
               </tr>
            </tbody>
         </table>
		</div>
	</div>
</section>

<section class="section-footer">
	<hr>
	<div>
		<?php $this->load->view('layout/footer'); ?>
	</div>
</section>