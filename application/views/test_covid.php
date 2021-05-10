<!-- Reuse section-navbar in every page -->
<section class="section-navbar">
   <div>
      <?php $this->load->view('layout/navbar'); ?>
   </div>
</section>

<!-- Only use on Dashboard page -->
<section class="section-header">
   <div class="jumbotron jumbotron-fluid jumbo">
      <h1 style="text-align : left; font-size:50px; width:500px; margin-left: 200px; margin-top: 50px; float: left;">Daftar Fasilitas Tempat Test Covid-19</h1>
   </div>
</section>

<section class="section-data" style="margin-bottom: 150px;">
   <div class="container data">
      <div class="row justify-content-lg-center">
         <div class="col-md-3" style="border-right:1px solid; border-right-color:grey;">
            <br>
            <div id="tab1" class="col detail-data" onClick="tab1()" style="color: white; cursor: pointer; margin-left: 10px; margin-right: 10px; margin-bottom: 10px; border:1px solid #DFDFE5; background: #236AB8;">
               <h2 style="text-align : center;font-size:24px; margin-top: 10px">TEST ANTIGEN</h2>
            </div>
            <div id="tab2" class="col detail-data" onClick="tab2()" style="color: white; cursor: pointer; margin-left: 10px; margin-right: 10px; margin-bottom: 10px; border:1px solid #DFDFE5; background: #989FA7;">
               <h2 style="text-align : center;font-size:24px; margin-top: 10px">TEST PCR</h2>
            </div>
            <div id="tab3" class="col detail-data" onClick="tab3()" style="color: white; cursor: pointer; margin-left: 10px; margin-right: 10px; margin-bottom: 10px; border:1px solid #DFDFE5; background: #989FA7;">
               <h2 style="text-align : center;font-size:24px; margin-top: 10px">TEST RAPID</h2>
            </div>
         </div>
         <div id="antigen" class="col-md-9">
            <br>
            <div class="row" style="margin-left: 10px; margin-right: 10px; border:1px solid #DFDFE5; height: 125px; width: 800px; box-shadow: 0px 4px 4px 3px #00000040; border-radius: 15px">
               <div class="col-md-2">
                  <img src="https://www.siloamhospitals.com/-/media/SHPR.jpeg" style="height: 93px; font-weight: 10; width: 93px; margin-top: 15px">
               </div>
               <div class ="col-md-7">
                  <h2 style="text-align : left; font-size:20px; margin-top: 15px">MRCCC Siloam Hospitals Semanggi</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">Test Antigen</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">Jl. Garisun Dalam No. 2-3, Semanggi, Jakarta Pusat</h2>
               </div>
               <div class ="col-md-3">
                  <h2 style="text-align : right; font-size:16px; margin-top: 15px">Biaya mulai dari</h2>
                  <h2 style="text-align : right; font-size:20px; margin-top: 10px; color: #236AB8;">Rp. 235.000</h2>
                  <a href="https://g.page/siloam-mrccc?share" target="_blank">
                     <button style="text-align : center; font-size:14px; margin-top: 10px; background: #236AB8; border-radius: 8px; width: 98px; float: right; color: white">
                        Lokasi
                     </button>
                  </a>
               </div>
            </div>
            <br>
            <div class="row" style="margin-left: 10px; margin-right: 10px; border:1px solid #DFDFE5; height: 125px; width: 800px; box-shadow: 0px 4px 4px 3px #00000040; border-radius: 15px">
               <div class="col-md-2">
                  <img src="https://bumamefarmasi.com/wp-content/uploads/2021/02/lokasi-tb-simatupang-pasar-minggu.jpg" style="height: 93px; font-weight: 10; width: 93px; margin-top: 15px">
               </div>
               <div class ="col-md-7">
                  <h2 style="text-align : left; font-size:20px; margin-top: 15px">Bumame Farmasi</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">Test Antigen</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">TB. Simatupang, Jakarta Selatan</h2>
               </div>
               <div class ="col-md-3">
                  <h2 style="text-align : right; font-size:16px; margin-top: 15px">Biaya mulai dari</h2>
                  <h2 style="text-align : right; font-size:20px; margin-top: 10px; color: #236AB8;">Rp. 220.000</h2>
                  <a href="https://goo.gl/maps/2PLiD9kFDjnsVzi2A" target="_blank">
                     <button style="text-align : center; font-size:14px; margin-top: 10px; background: #236AB8; border-radius: 8px; width: 98px; float: right; color: white">
                        Lokasi
                     </button>
                  </a>
               </div>
            </div>
            <br>
            <div class="row" style="margin-left: 10px; margin-right: 10px; border:1px solid #DFDFE5; height: 125px; width: 800px; box-shadow: 0px 4px 4px 3px #00000040; border-radius: 15px">
               <div class="col-md-2">
                  <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/w_667,h_431,c_fill,dpr_2.0/v1562052468/hospital_image/7ce5dea1326e_ucc.jpg.jpg" style="height: 93px; font-weight: 10; width: 93px; margin-top: 15px">
               </div>
               <div class ="col-md-7">
                  <h2 style="text-align : left; font-size:20px; margin-top: 15px">Universal Clinic Care Indonesia</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">Test Antigen</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">Jl. H. Rasuna Said, Jakarta Selatan</h2>
               </div>
               <div class ="col-md-3">
                  <h2 style="text-align : right; font-size:16px; margin-top: 15px">Biaya mulai dari</h2>
                  <h2 style="text-align : right; font-size:20px; margin-top: 10px; color: #236AB8;">Rp. 250.000</h2>
                  <a href="https://goo.gl/maps/MwUbgKngjC5M6o8D9" target="_blank">
                     <button style="text-align : center; font-size:14px; margin-top: 10px; background: #236AB8; border-radius: 8px; width: 98px; float: right; color: white">
                        Lokasi
                     </button>
                  </a>
               </div>
            </div>
         </div>
         <div id="pcr" style="display: none;" class="col-md-9">
            <br>
            <div class="row" style="margin-left: 10px; margin-right: 10px; border:1px solid #DFDFE5; height: 125px; width: 800px; box-shadow: 0px 4px 4px 3px #00000040; border-radius: 15px">
               <div class="col-md-2">
                  <img src="https://www.siloamhospitals.com/-/media/SHPR.jpeg" style="height: 93px; font-weight: 10; width: 93px; margin-top: 15px">
               </div>
               <div class ="col-md-7">
               <h2 style="text-align : left; font-size:20px; margin-top: 15px">MRCCC Siloam Hospitals Semanggi</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">Test PCR Swab</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">Jl. Garisun Dalam No. 2-3, Semanggi, Jakarta Pusat</h2>
               </div>
               <div class ="col-md-3">
                  <h2 style="text-align : right; font-size:16px; margin-top: 15px">Biaya mulai dari</h2>
                  <h2 style="text-align : right; font-size:20px; margin-top: 10px; color: #236AB8;">Rp. 900.000</h2>
                  <a href="https://g.page/siloam-mrccc?share" target="_blank">
                     <button style="text-align : center; font-size:14px; margin-top: 10px; background: #236AB8; border-radius: 8px; width: 98px; float: right; color: white">
                        Lokasi
                     </button>
                  </a>
               </div>
            </div>
            <br>
            <div class="row" style="margin-left: 10px; margin-right: 10px; border:1px solid #DFDFE5; height: 125px; width: 800px; box-shadow: 0px 4px 4px 3px #00000040; border-radius: 15px">
               <div class="col-md-2">
                  <img src="https://bumamefarmasi.com/wp-content/uploads/2021/02/lokasi-tb-simatupang-pasar-minggu.jpg" style="height: 93px; font-weight: 10; width: 93px; margin-top: 15px">
               </div>
               <div class ="col-md-7">
                  <h2 style="text-align : left; font-size:20px; margin-top: 15px">Bumame Farmasi</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">Test PCR Swab</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">TB. Simatupang, Jakarta Selatan</h2>
               </div>
               <div class ="col-md-3">
                  <h2 style="text-align : right; font-size:16px; margin-top: 15px">Biaya mulai dari</h2>
                  <h2 style="text-align : right; font-size:20px; margin-top: 10px; color: #236AB8;">Rp. 790.000</h2>
                  <a href="https://goo.gl/maps/2PLiD9kFDjnsVzi2A" target="_blank">
                     <button style="text-align : center; font-size:14px; margin-top: 10px; background: #236AB8; border-radius: 8px; width: 98px; float: right; color: white">
                        Lokasi
                     </button>
                  </a>
               </div>
            </div>
            <br>
            <div class="row" style="margin-left: 10px; margin-right: 10px; border:1px solid #DFDFE5; height: 125px; width: 800px; box-shadow: 0px 4px 4px 3px #00000040; border-radius: 15px">
               <div class="col-md-2">
                  <img src="https://res.cloudinary.com/dk0z4ums3/image/upload/w_667,h_431,c_fill,dpr_2.0/v1615883904/hospital_image/75f18377e34b_Pondok%20Indah%20Medical%20Centre.jpg.jpg" style="height: 93px; font-weight: 10; width: 93px; margin-top: 15px">
               </div>
               <div class ="col-md-7">
                  <h2 style="text-align : left; font-size:20px; margin-top: 15px">K-Lab@Pondok Indah Medical Centre</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">Test PCR Swab</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">Jl. Sekolah Kencana, Pondok Pinang, Jakarta Selatan</h2>
               </div>
               <div class ="col-md-3">
                  <h2 style="text-align : right; font-size:16px; margin-top: 15px">Biaya mulai dari</h2>
                  <h2 style="text-align : right; font-size:20px; margin-top: 10px; color: #236AB8;">Rp. 750.000</h2>
                  <a href="https://goo.gl/maps/R4XLVXPUksHyRorc9" target="_blank">
                     <button style="text-align : center; font-size:14px; margin-top: 10px; background: #236AB8; border-radius: 8px; width: 98px; float: right; color: white">
                        Lokasi
                     </button>
                  </a>
               </div>
            </div>
         </div>
         <div id="rapid" style="display: none;" class="col-md-9">
            <br>
            <div class="row" style="margin-left: 10px; margin-right: 10px; border:1px solid #DFDFE5; height: 125px; width: 800px; box-shadow: 0px 4px 4px 3px #00000040; border-radius: 15px">
               <div class="col-md-2">
                  <img src="https://www.siloamhospitals.com/-/media/SHPR.jpeg" style="height: 93px; font-weight: 10; width: 93px; margin-top: 15px">
               </div>
               <div class ="col-md-7">
               <h2 style="text-align : left; font-size:20px; margin-top: 15px">MRCCC Siloam Hospitals Semanggi</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">Rapid Test</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">Jl. Garisun Dalam No. 2-3, Semanggi, Jakarta Pusat</h2>
               </div>
               <div class ="col-md-3">
                  <h2 style="text-align : right; font-size:16px; margin-top: 15px">Biaya mulai dari</h2>
                  <h2 style="text-align : right; font-size:20px; margin-top: 10px; color: #236AB8;">Rp. 79.000</h2>
                  <a href="https://g.page/siloam-mrccc?share" target="_blank">
                     <button style="text-align : center; font-size:14px; margin-top: 10px; background: #236AB8; border-radius: 8px; width: 98px; float: right; color: white">
                        Lokasi
                     </button>
                  </a>
               </div>
            </div>
            <br>
            <div class="row" style="margin-left: 10px; margin-right: 10px; border:1px solid #DFDFE5; height: 125px; width: 800px; box-shadow: 0px 4px 4px 3px #00000040; border-radius: 15px">
               <div class="col-md-2">
                  <img src="https://cms.sehatq.com/cdn-cgi/image/f=auto/public/img/hospital_thumb/klinik-kimia-farma-srengseng-sawah-HCFC00002310.jpg" style="height: 93px; font-weight: 10; width: 93px; margin-top: 15px">
               </div>
               <div class ="col-md-7">
                  <h2 style="text-align : left; font-size:20px; margin-top: 15px">Klinik Kimia Farma Srengseng Sawah</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">Rapid Test</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">Srengseng Sawah, Jagakarsa, Jakarta Selatan</h2>
               </div>
               <div class ="col-md-3">
                  <h2 style="text-align : right; font-size:16px; margin-top: 15px">Biaya mulai dari</h2>
                  <h2 style="text-align : right; font-size:20px; margin-top: 10px; color: #236AB8;">Rp. 150.000</h2>
                  <a href="https://goo.gl/maps/bePGAvRKu92SdrgNA" target="_blank">
                     <button style="text-align : center; font-size:14px; margin-top: 10px; background: #236AB8; border-radius: 8px; width: 98px; float: right; color: white">
                        Lokasi
                     </button>
                  </a>
               </div>
            </div>
            <br>
            <div class="row" style="margin-left: 10px; margin-right: 10px; border:1px solid #DFDFE5; height: 125px; width: 800px; box-shadow: 0px 4px 4px 3px #00000040; border-radius: 15px">
               <div class="col-md-2">
                  <img src="https://mayapadahospital.com/images/hospital/MHJS.jpg" style="height: 93px; font-weight: 10; width: 93px; margin-top: 15px">
               </div>
               <div class ="col-md-7">
                  <h2 style="text-align : left; font-size:20px; margin-top: 15px">Drive Thru RS Mayapada</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">Rapid Test</h2>
                  <h2 style="text-align : left; font-size:16px; margin-top: 10px">Cilandak, Jakarta Selatan</h2>
               </div>
               <div class ="col-md-3">
                  <h2 style="text-align : right; font-size:16px; margin-top: 15px">Biaya mulai dari</h2>
                  <h2 style="text-align : right; font-size:20px; margin-top: 10px; color: #236AB8;">Rp. 185.000</h2>
                  <a href="https://goo.gl/maps/NasefMonjbdu4XAH7" target="_blank">
                     <button style="text-align : center; font-size:14px; margin-top: 10px; background: #236AB8; border-radius: 8px; width: 98px; float: right; color: white">
                        Lokasi
                     </button>
                  </a>
               </div>
            </div>
         </div>
      </div>
   </div>
   <br><br>
   <div style="text-align : center; height:40px; margin-right: 200px; float: right; font-weight: 600;">
      <u style="background: #FFFFFF; border: 1px solid #868686; box-sizing: border-box; border-radius: 4px 0px 0px 4px; width: 49px; text-decoration: none;">First</u>
      <u style="background: #FFFFFF; border: 1px solid #868686; box-sizing: border-box; border-radius: 0px; width: 49px; text-decoration: none;"><<</u>
      <u style="background: #FFFFFF; border: 1px solid #868686; box-sizing: border-box; border-radius: 0px; width: 49px; text-decoration: none;">1</u>
      <u style="background: #FFFFFF; border: 1px solid #868686; box-sizing: border-box; border-radius: 0px; width: 49px; text-decoration: none;">>></u>
      <u style="background: #FFFFFF; border: 1px solid #868686; box-sizing: border-box; border-radius: 0px 4px 4px 0px; width: 49px; text-decoration: none;">Last</u>
   </div>
</section>

<!-- Reuse section-footer in every page -->
<section class="section-footer">
   <div>
      <?php $this->load->view('layout/footer'); ?>
   </div>
</section>

<script>
   var type1 = document.getElementById("tab1");
   var type2 = document.getElementById("tab2");
   var type3 = document.getElementById("tab3");
   var antigen = document.getElementById("antigen");
   var pcr = document.getElementById("pcr");
   var rapid = document.getElementById("rapid");

   function tab1() {
      type1.style.backgroundColor = '#236AB8';
      type2.style.backgroundColor = '#989FA7';
      type3.style.backgroundColor = '#989FA7';

      antigen.style.display = "block";
      pcr.style.display = "none";
      rapid.style.display = "none";
   }

   function tab2() {
      type1.style.backgroundColor = '#989FA7';
      type2.style.backgroundColor = '#236AB8';
      type3.style.backgroundColor = '#989FA7';

      antigen.style.display = "none";
      pcr.style.display = "block";
      rapid.style.display = "none";
   }

   function tab3() {
      type1.style.backgroundColor = '#989FA7';
      type2.style.backgroundColor = '#989FA7';
      type3.style.backgroundColor = '#236AB8';

      antigen.style.display = "none";
      pcr.style.display = "none";
      rapid.style.display = "block";
   }
</script>