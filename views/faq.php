<section class="section-navbar">
	<div>
		<?php $this->load->view('layout/navbar'); ?>
	</div>
</section>

<section class="section-header">
	<div class="jumbotron jumbotron-fluid jumbo">
      <h1 style="text-align:left; font-size:50px; margin-left:200px; width:800px; margin-top:150px; float:left">Pertanyaan yang sering ditanyakan terkait Covid-19</h1>
	</div>
</section>

<section class="section-data">
   <div class="container">
      <div class="row justify-content-lg-center">
         <div class="col-md-4" style="border-right:1px solid; border-right-color:grey;">
			   <h4 style="margin-top:25px">FAQ (Tanya Jawab)</h4>
            <br>
            <div>
               <ins style="color:blue; cursor: pointer;" onClick="faq1()">
                  Apakah Coronavirus dan COVID-19?
               </ins>
            </div>
            <br>
            <div>
               <ins style="color:blue; cursor: pointer;" onClick="faq2()">
                  Apakah gejala COVID-19?
               </ins>
            </div>
            <br>
            <div>
               <ins style="color:blue; cursor: pointer;" onClick="faq3()">
                  Apa itu Kasus Suspek, Probable, dan Konfirmasi?
               </ins>
            </div>
            <br>
            <div>
               <ins style="color:blue; cursor: pointer;" onClick="faq4()">
                  Apa saja persyaratan yang diperlukan untuk membuat SKIM?
               </ins>
            </div>
            <br>
            <div>
               <ins style="color:blue; cursor: pointer;" onClick="faq5()">
                  Apa yang dimaksud dengan Kontak Erat?
               </ins>
            </div>
            <br>
            <div>
               <ins style="color:blue; cursor: pointer;" onClick="faq6()">
                  Apa itu Pelaku Perjalanan, Discarded, Selesai Isolasi, dan Kasus Kematian?
               </ins>
            </div>
            <br>
            <div>
               <ins style="color:blue; cursor: pointer;" onClick="faq7()">
                  Seberapa bahaya COVID-19 ini?
               </ins>
            </div>
            <br>
            <div>
               <ins style="color:blue; cursor: pointer;" onClick="faq8()">
                  Berapa lama virus ini bertahan di permukaan benda?
               </ins>
            </div>
            <br>
            <div>
               <ins style="color:blue; cursor: pointer;" onClick="faq9()">
                  Apakah COVID-19 seperti SARS?
               </ins>
            </div>
            <br>
            <div>
               <ins style="color:blue; cursor: pointer;" onClick="faq10()">
                  Apa itu vaksin COVID-19?
               </ins>
            </div>
			</div>
         <div class="col-md-8">
            <div id="ans1" class="container">
               <div class="row">
			         <h3 style="margin-top:25px">Apakah Coronavirus dan COVID-19?</h3>
               </div>
               <br>
               <p>
                  Coronavirus Disease 2019 atau Covid-19 adalah penyakit baru yang dapat menyebabkan gangguan pernapasan dan radang paru.
                  Penyakit ini disebabkan oleh infeksi Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-CoV-2).
                  Gejala klinis yang muncul beragam, mulai dari seperti gejala flu biasa (batuk, pilek, nyeri tenggorok, nyeri otot, nyeri kepala) sampai yang berkomplikasi berat (pneumonia atau sepsis) atau bahkan tidak bergejala sama sekali.
               </p>
            </div>
            <div id="ans2" style="display:none;" class="container">
               <div class="row">
			         <h3 style="margin-top:25px">Apakah gejala COVID-19?</h3>
               </div>
               <br>
               <p>
                  Orang dengan Covid-19 memiliki berbagai gejala yang dilaporkan - mulai dari gejala ringan hingga penyakit parah. Gejala dapat muncul 2-14 hari setelah terpapar virus. Orang dengan gejala di bawah ini mungkin memiliki Covid-19:
                  <br><br>
                  - Demam atau kedinginan<br>
                  - Batuk<br>
                  - Napas pendek atau sulit bernapas<br>
                  - Kelelahan<br>
                  - Otot atau sakit tubuh<br>
                  - Sakit kepala<br>
                  - Kehilangan rasa atau bau baru<br>
                  - Sakit tenggorokan<br>
                  - Hidung tersumbat atau berair<br>
                  - Mual atau muntah<br>
                  - Diare<br><br>
                  Jika ada orang yang dalam 14 hari sebelum muncul gejala tersebut pernah melakukan perjalanan ke wilayah terjangkit atau pernah merawat/kontak erat dengan penderita Covid-19, maka orang tersebut akan diperiksa melalui pemeriksaan laboratorium lebih lanjut untuk memastikan diagnosisnya.
                  <br><br>
                  Jika ada gejala di atas DAN ada riwayat perjalanan ke wilayah terjangkit Covid-19 atau Anda terpapar dengan pasien positif Covid-19, hubungi Jakarta Tanggap Covid-19 Dinas Kesehatan DKI Jakarta di nomor 112 atau di nomor Whatsapp 081 112 112 112 atau 081 388 376 955 untuk mendapat arahan lebih lanjut.
                  <br>
               </p>
            </div>
            <div id="ans3" style="display:none;" class="container">
               <div class="row">
			         <h3 style="margin-top:25px">Apa itu Kasus Suspek, Probable, dan Konfirmasi?</h3>
               </div>
               <br>
               <p>
                  Menurut KMK No. HK.01.07-MENKES-413-2020 ttg Pedoman Pencegahan dan Pengendalian COVID-19, yang dimaksud dengan Kasus Suspek, Probable, dan Konfirmasi adalah sebagai berikut:
                  <br><br><br>
                  <b>Kasus Suspek</b>
                  <br><br>
                  Seseorang yang memiliki salah satu dari kriteria berikut:
                  <br><br>
                  a. Orang dengan Infeksi Saluran Pernapasan Akut (ISPA)* DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat perjalanan atau tinggal di negara/wilayah Indonesia yang melaporkan transmisi lokal**. 
                  <br><br>
                  b. Orang dengan salah satu gejala/tanda ISPA* DAN pada 14 hari terakhir sebelum timbul gejala memiliki riwayat kontak dengan kasus konfirmasi/probable Covid-19. Orang dengan ISPA berat/pneumonia berat yang membutuhkan perawatan di rumah sakit DAN tidak ada penyebab lain berdasarkan gambaran klinis yang meyakinkan.
                  <br><br>
                  Istilah Pasien Dalam Pengawasan (PDP) saat ini dikenal kembali dengan istilah kasus suspek. 
                  <br><br><br>
                  <b>Kasus Probable</b>
                  <br><br>
                  Kasus suspek dengan ISPA Berat/ARDS/meninggal dengan gambaran klinis yang meyakinkan Covid-19 DAN belum ada hasil pemeriksaan laboratorium RT-PCR.
                  <br><br><br>
                  <b>Kasus Konfirmasi</b>
                  <br><br>
                  Seseorang yang dinyatakan positif terinfeksi virus Covid-19 yang dibuktikan dengan pemeriksaan laboratorium RT-PCR. Kasus konfirmasi dibagi menjadi dua: 
                  <br><br>
                  a. Kasus konfirmasi dengan gejala (simptomatik)
                  <br><br>
                  b. Kasus konfirmasi tanpa gejala (asimptomatik)
                  <br><br>
                  Keterangan:
                  <br><br>
                  *ISPA yaitu demam (≥38oC) atau riwayat demam; dan disertai salah satu gejala/tanda penyakit pernapasan seperti: batuk/sesak nafas/sakit tenggorokan/pilek/pneumonia ringan hingga berat.  *ISPA yaitu demam (≥38oC) atau riwayat demam; dan disertai salah satu gejala/tanda penyakit pernapasan seperti: batuk/sesak nafas/sakit tenggorokan/pilek/pneumonia ringan hingga berat.
                  <br><br>
                  ** Negara/wilayah transmisi lokal adalah negara/wilayah yang melaporkan adanya kasus konfirmasi yang sumber penularannya berasal dari wilayah yang melaporkan kasus tersebut. Negara transmisi lokal merupakan negara yang termasuk dalam klasifikasi kasus klaster dan transmisi komunitas, dapat dilihat melalui situs https://www.who.int/emergencies/diseases/nov el-coronavirus-2019/situation-reports.
                  <br><br>
                  Wilayah transmisi lokal di Indonesia dapat dilihat melalui situs https://infeksiemerging.kemkes.go.id.
               </p>
            </div>
            <div id="ans4" style="display:none;" class="container">
               <div class="row">
			         <h3 style="margin-top:25px">Apa saja persyaratan yang diperlukan untuk membuat SIKM?</h3>
               </div>
               <br>
               <p>
                  Persyaratan Surat Izin Keluar-Masuk bagi <b>warga berdomisili Jakarta</b>:
                  <pre>
   1. Surat pengantar dari Ketua RT yang diketahui Ketua RW tempat tinggalnya
   2. Surat pernyataan sehat bermaterai
   3. Surat keterangan:
      - perjalanan dinas keluar Jabodetabek (untuk perjalanan sekali);
      - surat keterangan bekerja bagi pekerja yang tempat kerjanya berada di luar
         Jabodetabek (untuk perjalanan berulang); atau
      - surat keterangan memiliki usaha di luar Jabodetabek yang diketahui oleh
         pejabat berwenang (untuk perjalanan berulang)
   4. Pas foto berwarna
   5. Pindaian KTP
                  </pre>
                  Persyaratan Surat Izin Keluar-Masuk bagi <b>warga berdomisili Non-Jabodetabek</b>:
                  <pre>
   1. Surat keterangan dari kelurahan/desa asal
   2. Surat pernyataan sehat bermeterai
   3. Surat Keterangan Bekerja di DKI Jakarta dari tempat kerja
      (untuk perjalanan berulang)
   4. Surat Tugas/Undangan dari instansi/perusahaan tempat bekerja
      di Jakarta
   5. Surat jaminan bermeterai dari keluarga atau tempat kerja yang
      berada di Provinsi DKI Jakarta yang diketahui oleh Ketua RT
      setempat (untuk perjalanan sekali)
   6. Surat keterangan domisili tempat tinggal dari kelurahan di
      Jakarta untuk pemohon dengan alasan darurat
   7. Pas foto berwarna
   8. Pindaian KTP
                  </pre>
               </p>
            </div>
            <div id="ans5" style="display:none;" class="container">
               <div class="row">
			         <h3 style="margin-top:25px">Apa yang dimaksud dengan Kontak Erat?</h3>
               </div>
               <br>
               <p>
                  Menurut KMK No. HK.01.07-MENKES-413-2020 ttg Pedoman Pencegahan dan Pengendalian COVID-19, yang dimaksud dengan Kontak Erat adalah sebagai berikut:
                  <br><br>
                  Orang yang memiliki riwayat kontak dengan kasus probable atau konfirmasi Covid-19. Riwayat kontak yang dimaksud antara lain:
                  <br><br>
                  a. Kontak tatap muka/berdekatan dengan kasus probable atau kasus konfirmasi dalam radius 1 meter dan dalam jangka waktu 15 menit atau lebih. 
                  <br><br>
                  b. Sentuhan fisik langsung dengan kasus probable atau konfirmasi (seperti bersalaman, berpegangan tangan, dan lain-lain). 
                  <br><br>
                  c. Orang yang memberikan perawatan langsung terhadap kasus probable atau konfirmasi tanpa menggunakan APD yang sesuai standar. 
                  <br><br>
                  d. Situasi lainnya yang mengindikasikan adanya kontak berdasarkan penilaian risiko lokal yang ditetapkan oleh tim penyelidikan epidemiologi setempat.
                  <br><br>
                  Pada kasus probable atau konfirmasi yang bergejala (simptomatik), untuk menemukan kontak erat periode kontak dihitung dari 2 hari sebelum timbul gejala dan hingga 14 hari setelah timbul gejala.  
                  <br><br>
                  Pada kasus konfirmasi yang tidak bergejala (asimptomatik), untuk menemukan kontak erat periode kontak dihitung dari 2 hari sebelum dan 14 hari setelah tanggal pengambilan spesimen kasus konfirmasi.
               </p>
            </div>
            <div id="ans6" style="display:none;" class="container">
               <div class="row">
			         <h3 style="margin-top:25px">Apa itu Pelaku Perjalanan, Discarded, Selesai Isolasi, dan Kasus Kematian?</h3>
               </div>
               <br>
               <p>
                  Menurut KMK No. HK.01.07-MENKES-413-2020 ttg Pedoman Pencegahan dan Pengendalian COVID-19, yang dimaksud dengan Pelaku Perjalanan, Discarded, Selesai Isolasi, dan Kasus Kematian adalah sebagai berikut:
                  <br><br><br>
                  <b>Pelaku Perjalanan</b>
                  <br><br>
                  Seseorang yang melakukan perjalanan dari dalam negeri (domestik) maupun luar negeri pada 14 hari terakhir.
                  <br><br><br>
                  <b>Discarded</b>
                  <br><br>
                  Seseorang dikategorikan discarded apabila memenuhi salah satu kriteria berikut: 
                  <br><br>
                  a. Seseorang dengan status kasus suspek dengan hasil pemeriksaan RT-PCR 2 kali negatif selama 2 hari berturut-turut dengan selang waktu >24 jam. 
                  <br><br>
                  b. Seseorang dengan status kontak erat yang telah menyelesaikan masa karantina selama 14 hari.
                  <br><br><br>
                  <b>Selesai Isolasi</b>
                  <br><br>
                  Selesai isolasi apabila memenuhi salah satu kriteria berikut: 
                  <br><br>
                  a. Kasus konfirmasi tanpa gejala (asimtomatik) yang tidak dilakukan pemeriksaan follow up RT-PCR dengan ditambah 10 hari isolasi mandiri sejak pengambilan spesimen diagnosis konfirmasi. 
                  <br><br>
                  b. Kasus probable/kasus konfirmasi dengan gejala (simptomatik) yang tidak dilakukan pemeriksaan follow up RT-PCR dihitung 10 hari sejak tanggal onset dengan ditambah minimal 3 hari setelah tidak lagi menunjukkan gejala demam dan gangguan pernapasan. 
                  <br><br>
                  c. Kasus probable/kasus konfirmasi dengan gejala (simptomatik) yang mendapatkan hasil pemeriksaan follow up RT-PCR 1 kali negatif, dengan ditambah minimal 3 hari setelah tidak lagi menunjukkan gejala demam dan gangguan pernapasan. 
                  <br><br><br>
                  <b>Kematian</b>
                  <br><br>
                  Kematian Covid-19 untuk kepentingan surveilans adalah kasus konfirmasi/probable Covid-19 yang meninggal. 
               </p>
            </div>
            <div id="ans7" style="display:none;" class="container">
               <div class="row">
			         <h3 style="margin-top:25px">Seberapa bahaya COVID-19 ini?</h3>
               </div>
               <br>
               <p>
                  Seperti penyakit pernapasan lainnya, COVID-19 dapat menyebabkan gejala ringan termasuk pilek sakit tenggorokan, batuk, dan demam. Sekitar 80% kasus dapat pulih tanpa perlu perawatan khusus. Sekitar 1 dari setiap 6 orang mungkin akan menderita sakit yang parah, seperti disertai pneumonia atau kesulitan bernafas, yang biasanya muncul secara bertahap.
                  <br><br>
                  Walaupun angka kematian penyakit ini masih jarang, namun bagi orang yang berusia lanjut, dan orang-orang dengan kondisi medis yang sudah ada sebelumnya (seperti diabetes, tekanan darah tinggi dan penyakit jantung), mereka biasanya lebih rentan untuk gejala yang lebih parah. Orang yang mengalami demam, batuk, dan sulit bernapas harus segera mendapatkan pertolongan medis.
               </p>
            </div>
            <div id="ans8" style="display:none;" class="container">
               <div class="row">
			         <h3 style="margin-top:25px">Berapa lama virus ini bertahan di permukaan benda?</h3>
               </div>
               <br>
               <p>
                  Sampai saat ini belum diketahui dengan pasti berapa lama COVID-19 mampu bertahan di permukaan suatu benda, meskipun studi awal menunjukkan bahwa COVID-19 dapat bertahan hingga beberapa jam, tergantung jenis permukaan, suhu, atau kelembaban lingkungan.
                  <br><br>
                  Namun desinfektan sederhana dapat membunuh virus tersebut sehingga tidak mungkin menginfeksi orang lagi. Dan membiasakan cuci tangan dengan air dan sabun, atau handrub berbasis alkohol, serta hindari menyentuh mata, mulut atau hidung (segitiga wajah) lebih efektif melindungi diri Anda.
               </p>
            </div>
            <div id="ans9" style="display:none;" class="container">
               <div class="row">
			         <h3 style="margin-top:25px">Apakah COVID-19 seperti SARS?</h3>
               </div>
               <br>
               <p>
               SARS adalah coronavirus yang diidentifikasi pada tahun 2003 dan termasuk dalam keluarga besar virus yang sama dengan COVID-19, namun berbeda jenis virusnya. Gejalanya mirip dengan COVID-19, namun SARS lebih berat. SARS lebih mematikan tetapi tidak lebih infeksius (menular) dibanding COVID-19.
               </p>
            </div>
            <div id="ans10" style="display:none;" class="container">
               <div class="row">
			         <h3 style="margin-top:25px">Apa itu vaksin COVID-19?</h3>
               </div>
               <br>
               <p>
                  Vaksin adalah produk biologi yang berisi antigen berupa bagian mikroorganisme atau zat yang dihasilkannya yang telah diolah sedemikian rupa sehingga aman, yang apabila diberikan kepada seseorang akan menimbulkan kekebalan spesifik secara aktif terhadap penyakit tertentu.
                  <br><br><br>
                  <b>Apakah vaksin adalah obat Covid-19?</b>
                  <br><br>
                  Vaksin bukanlah obat. Vaksin mendorong pembentukan kekebalan spesifik tubuh agar terhindar dari penularan ataupun kemungkinan sakit berat. Selama belum ada obat yang definitif untuk Covid-19, maka vaksin Covid-19 yang aman dan efektif serta perilaku 3M (memakai masker, mencuci tangan dengan sabun, dan menjaga jarak) adalah upaya perlindungan yang bisa kita lakukan agar terhindar dari penyakit Covid-19.
                  <br><br><br>
                  <b>Apakah manfaat dari vaksin Covid-19?</b>
                  <br><br>
                  Sebagaimana manfaat dari vaksin lainnya, vaksin Covid-19 bermanfaat untuk memberi perlindungan tubuh agar tidak jatuh sakit akibat Covid-19 dengan cara menimbulkan atau menstimulasi kekebalan spesifik dalam tubuh dengan pemberian vaksin.
                  <br><br><br>
                  <b>Apakah vaksin Covid-19 dipastikan aman?</b>
                  <br><br>
                  Vaksin yang diproduksi massal sudah melewati proses yang panjang dan harus memenuhi syarat utama yakni: Aman, Ampuh, Stabil dan Efisien dari segi biaya.
               </p>
            </div>
         </div>
		</div>
   </div>
</section>

<section class="section-footer">
	<hr>
	<div>
		<?php $this->load->view('layout/footer'); ?>
	</div>
</section>

<script>
   var a = document.getElementById("ans1");
   var b = document.getElementById("ans2");
   var c = document.getElementById("ans3");
   var d = document.getElementById("ans4");
   var e = document.getElementById("ans5");
   var f = document.getElementById("ans6");
   var g = document.getElementById("ans7");
   var h = document.getElementById("ans8");
   var i = document.getElementById("ans9");
   var j = document.getElementById("ans10");

   function faq1() {
      a.style.display = "block";
      b.style.display = "none";
      c.style.display = "none";
      d.style.display = "none";
      e.style.display = "none";
      f.style.display = "none";
      g.style.display = "none";
      h.style.display = "none";
      i.style.display = "none";
      j.style.display = "none";
   }

   function faq2() {
      a.style.display = "none";
      b.style.display = "block";
      c.style.display = "none";
      d.style.display = "none";
      e.style.display = "none";
      f.style.display = "none";
      g.style.display = "none";
      h.style.display = "none";
      i.style.display = "none";
      j.style.display = "none";
   }

   function faq3() {
      a.style.display = "none";
      b.style.display = "none";
      c.style.display = "block";
      d.style.display = "none";
      e.style.display = "none";
      f.style.display = "none";
      g.style.display = "none";
      h.style.display = "none";
      i.style.display = "none";
      j.style.display = "none";
   }
   
   function faq4() {
      a.style.display = "none";
      b.style.display = "none";
      c.style.display = "none";
      d.style.display = "block";
      e.style.display = "none";
      f.style.display = "none";
      g.style.display = "none";
      h.style.display = "none";
      i.style.display = "none";
      j.style.display = "none";
   }

   function faq5() {
      a.style.display = "none";
      b.style.display = "none";
      c.style.display = "none";
      d.style.display = "none";
      e.style.display = "block";
      f.style.display = "none";
      g.style.display = "none";
      h.style.display = "none";
      i.style.display = "none";
      j.style.display = "none";
   }
   
   function faq6() {
      a.style.display = "none";
      b.style.display = "none";
      c.style.display = "none";
      d.style.display = "none";
      e.style.display = "none";
      f.style.display = "block";
      g.style.display = "none";
      h.style.display = "none";
      i.style.display = "none";
      j.style.display = "none";
   }

   function faq7() {
      a.style.display = "none";
      b.style.display = "none";
      c.style.display = "none";
      d.style.display = "none";
      e.style.display = "none";
      f.style.display = "none";
      g.style.display = "block";
      h.style.display = "none";
      i.style.display = "none";
      j.style.display = "none";
   }
   
   function faq8() {
      a.style.display = "none";
      b.style.display = "none";
      c.style.display = "none";
      d.style.display = "none";
      e.style.display = "none";
      f.style.display = "none";
      g.style.display = "none";
      h.style.display = "block";
      i.style.display = "none";
      j.style.display = "none";
   }

   function faq9() {
      a.style.display = "none";
      b.style.display = "none";
      c.style.display = "none";
      d.style.display = "none";
      e.style.display = "none";
      f.style.display = "none";
      g.style.display = "none";
      h.style.display = "none";
      i.style.display = "block";
      j.style.display = "none";
   }

   function faq10() {
      a.style.display = "none";
      b.style.display = "none";
      c.style.display = "none";
      d.style.display = "none";
      e.style.display = "none";
      f.style.display = "none";
      g.style.display = "none";
      h.style.display = "none";
      i.style.display = "none";
      j.style.display = "block";
   }
</script>