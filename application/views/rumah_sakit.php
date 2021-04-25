<!-- Reuse section-navbar in every page -->
<section class="section-navbar">
  <div>
    <?php $this->load->view('layout/navbar'); ?>
  </div>
</section>

<!-- Only use on Dashboard page -->
<section class="section-header">
  <div class="jumbotron jumbotron-fluid jumbo">
    <h1 style="text-align : left;font-size:50px; width:500px; margin-left: 200px; margin-top: 50px; float: left">Daftar Rumah Sakit di DKI Jakarta</h1>
    <img src="https://cdn.icon-icons.com/icons2/1465/PNG/512/588hospital_100778.png" style="float: right; height:250px; width:250px; margin-right: 310px; margin-top: -20px">
  </div>
</section>

<section class="section-data">
  <div class="container data">
    <div class="row justify-content-md-center">
      <div class="col-auto">
        <div id="title-wording-data" style="background-color: #2073F3; color: white; margin-top: 15px; margin-bottom: 10px">
          <h4>Jakarta Selatan</h4>
        </div>
        <div class="row justify-content-around data-row-1">
          <div class="col detail-data" style="margin-left: 10px; margin-right: 10px; border:1px solid #DFDFE5;">
            <h2 style="text-align : center;font-size:24px; margin-top: 10px">Siloam Hospitals</h2>
            <marquee behavior="scroll" direction="left" behavior="alternate" scrollamount="3">
            <img src="https://www.siloamhospitals.com/-/media/Siloam/Images/Slider/Hospital-Jambi/Hospital-Jambi-1.jpg" style="height:200px; font-weight: 10; width:400px; margin-top=25px; margin-bottom: 20px">
            <img src="https://foto.wartaekonomi.co.id/files/arsip_foto_2020_10_02/siloam_142106_small.webp" style="height:200px; font-weight: 10; width:400px; margin-top=25px; margin-bottom: 20px">
            <img src="https://www.siloamhospitals.com/-/media/SHPR.jpeg" style="height:200px; font-weight: 10; width:400px; margin-top=25px; margin-bottom: 20px">
          </marquee>

            <a href= "https://g.page/siloam-mrccc?share" style="text-align : center; font-family:helvetica; border:1px solid #000; height:30px; font-weight: 10; width:100px; float: left; margin-bottom: 20px; border-radius: 25px;">Lokasi</a>
             <a href= "https://www.siloamhospitals.com" style="text-align : center; border:1px solid #000; height:30px; width:150px; font-weight: 10; font-family:helvetica; margin-bottom: 20px; margin-left: 10px; float: left; border-radius: 25px;">Website Resmi</a>
            <a ref= 'tel:622129962888' style="text-align : center; border:1px solid #000; font-family:helvetica; height:30px; width:200px; font-weight: 10; margin-left: 10px; float: left; border-radius: 25px;">Telepon: +622129962888</a>
          </div>
  
          <div class="col detail-data" style="margin-left: 10px; margin-right: 10px; border:1px solid #DFDFE5;">
            <h2 style="text-align : center;font-size:24px; margin-top: 10px">Rumah Sakit Pusat Pertamina</h2>
            <marquee behavior="scroll" direction="left" behavior="alternate" scrollamount="3">
            <img src="https://cdn.sindonews.net/dyn/620/content/2019/09/25/170/1442980/rumah-sakit-pertamina-beri-pengobatan-gratis-mahasiswa-korban-demo-di-dpr-6IP-thumb.jpg" style="height:200px; width:400px; margin-top=25px; margin-bottom: 20px">
            <img src="https://www.pertamina.com/Media/Image/post/Resmi-Dibuka,-RSPP-Extension-Dukung-Transisi-New-Normal.jpg" style="height:200px; width:400px; margin-top=25px; margin-bottom: 20px">
            <img src="http://www.rspp.co.id/images/berita/2.JPG" style="height:200px; width:400px; margin-top=25px; margin-bottom: 20px">
          </marquee>
             <a href= "https://goo.gl/maps/VzRhtkN3ooQueggF9" style="text-align : center; border:1px solid #000; height:30px; width:100px; font-weight: 10; font-family:helvetica; margin-bottom: 20px; float: left; border-radius: 25px;">Lokasi</a>
                 <a href= "http://www.rspp.co.id/index.php" style="text-align : center; border:1px solid #000; height:30px; width:150px; font-weight: 10; font-family:helvetica; margin-bottom: 20px; margin-left: 10px; float: left; border-radius: 25px;">Website Resmi</a>
            <a ref= 'tel:62217219000' style="text-align : center; border:1px solid #000; height:30px; width:200px; margin-left: 10px; float: left; font-family:helvetica; font-weight: 10;border-radius: 25px;">Telepon: +62217219000</a><br>
          </div>
        </div> <br>

           <p style="text-align : center; border:0.5px solid #000; height:23px; width:40px; font-family:helvetica; margin-bottom: 20px; float: right; font-weight: 10; border-radius: 5px;">Last</p>
           <p style="text-align : center; border:0.5px solid #000; height:23px; width:25px; font-family:helvetica; margin-bottom: 20px; float: right; font-weight: 10; border-radius: 5px;">>></p>
           <p style="text-align : center; border:0.5px solid #000; height:23px; width:25px; font-family:helvetica; margin-bottom: 20px; float: right; font-weight: 10; border-radius: 5px;">1</p>
           <p style="text-align : center; border:0.5px solid #000; height:23px; width:25px; font-family:helvetica; margin-bottom: 20px; float: right;  font-weight: 10; border-radius: 5px;"><<</p>
           <p style="text-align : center; border:0.5px solid #000; height:23px; width:40px; font-family:helvetica; margin-bottom: 20px; float: right; font-weight: 10;  border-radius: 5px;">First</p><br><br>

         

<!-- Reuse section-footer in every page -->
<section class="section-footer">
  <hr>
  <div>
    <?php $this->load->view('layout/footer'); ?>
  </div>
</section>