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

<section class="section-peta">
<div class="container data">
    <div class="row justify-content-md-center">
        <h3 style="margin:20 20 20 20px">Kasus Covid-19 di Jakarta Selatan</h3>
    </div>
    <hr>
    <div class="row justify-content-md-center">    
        <div class="peta-psg">   
            <img src="<?= base_url('public/pesanggrahan.png') ?>" style="height:200px;width:150px">
            <div class="psg" style="width:200px;margin-left:200px;background-color:white;border-radius:10px">
                <p style="text-align:center">Kec. Pesanggrahan</p>
                <div class="row justify-content-around">
                    <div class="col-md-8">
                        <p style="text-align : left;font-size:16px; margin-left:5px">Total Kasus</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Pasien Aktif</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Rawat Inap</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Isolasi mandiri</p>
                    </div>
                    <div class="col-md-4">
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">1.500</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">300</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">164</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">136</p>
                    </div>
                </div>
            </div>
        </div> 
        <div class="peta-kbl">   
            <img src="<?= base_url('public/kebayoran lama.png') ?>" style="height:200px;width:150px">    
            <div class="kbl" style="width:200px;margin-left:200px;background-color:white;border-radius:10px">
                <p style="text-align:center">Kec. Kebayoran Lama</p>
                <div class="row justify-content-around">
                    <div class="col-md-8">
                        <p style="text-align : left;font-size:16px; margin-left:5px">Total Kasus</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Pasien Aktif</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Rawat Inap</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Isolasi mandiri</p>
                    </div>
                    <div class="col-md-4">
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">1.500</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">300</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">164</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">136</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="peta-kbb">   
            <img src="<?= base_url('public/kebayoran baru.png') ?>" style="height:145px;width:150px">    
            <div class="kbb" style="width:200px;margin-left:200px;background-color:white;border-radius:10px">
                <p style="text-align:center">Kec. Kebayoran Baru</p>
                <div class="row justify-content-around">
                    <div class="col-md-8">
                        <p style="text-align : left;font-size:16px; margin-left:5px">Total Kasus</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Pasien Aktif</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Rawat Inap</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Isolasi mandiri</p>
                    </div>
                    <div class="col-md-4">
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">1.500</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">300</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">164</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">136</p>
                    </div>
                </div>
            </div>
        </div> 
        <div class="peta-sbd">   
            <img src="<?= base_url('public/setiabudi.png') ?>" style="height:70px;width:150px">    
            <div class="sbd" style="width:200px;margin-left:200px;background-color:white;border-radius:10px">
                <p style="text-align:center">Kec. Setiabudi</p>
                <div class="row justify-content-around">
                    <div class="col-md-8">
                        <p style="text-align : left;font-size:16px; margin-left:5px">Total Kasus</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Pasien Aktif</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Rawat Inap</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Isolasi mandiri</p>
                    </div>
                    <div class="col-md-4">
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">1.500</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">300</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">164</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">136</p>
                    </div>
                </div>
            </div>
        </div>     
        <div class="peta-mpr">   
            <img src="<?= base_url('public/mampang prapatan.png') ?>" style="height:95px;width:150px;margin-left:-150px;margin-top:50px">    
            <div class="mpr" style="width:200px;margin-left:-350px;background-color:white;border-radius:10px">
                <p style="text-align:center">Kec. Mampang Prapatan</p>
                <div class="row justify-content-around">
                    <div class="col-md-8">
                        <p style="text-align : left;font-size:16px; margin-left:5px">Total Kasus</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Pasien Aktif</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Rawat Inap</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Isolasi mandiri</p>
                    </div>
                    <div class="col-md-4">
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">1.500</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">300</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">164</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">136</p>
                    </div>
                </div>
            </div>
        </div>  
        <div class="peta-mgr">   
            <img src="<?= base_url('public/manggarai.png') ?>" style="height:60px;width:200px">    
            <div class="mgr" style="width:200px;margin-left:-200px;background-color:white;border-radius:10px">
                <p style="text-align:center">Kec. Tebet</p>
                <div class="row justify-content-around">
                    <div class="col-md-8">
                        <p style="text-align : left;font-size:16px; margin-left:5px">Total Kasus</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Pasien Aktif</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Rawat Inap</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Isolasi mandiri</p>
                    </div>
                    <div class="col-md-4">
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">1.500</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">300</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">164</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">136</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="peta-pcr">   
            <img src="<?= base_url('public/pancoran.png') ?>" style="height:95px;width:200px;margin-left:-200px;margin-top:50px">    
            <div class="pcr" style="width:200px;margin-left:-400px;background-color:white;border-radius:10px">
                <p style="text-align:center">Kec. Pancoran</p>
                <div class="row justify-content-around">
                    <div class="col-md-8">
                        <p style="text-align : left;font-size:16px; margin-left:5px">Total Kasus</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Pasien Aktif</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Rawat Inap</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Isolasi mandiri</p>
                    </div>
                    <div class="col-md-4">
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">1.500</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">300</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">164</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">136</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="peta-psm">   
            <img src="<?= base_url('public/pasar minggu.png') ?>" style="height:55px;width:500px;margin-left:300px;margin-top:-55px">    
            <div class="psm" style="width:200px;margin-left:300px;background-color:white;border-radius:10px">
                <p style="text-align:center">Kec. Pasar Minggu</p>
                <div class="row justify-content-around">
                    <div class="col-md-8">
                        <p style="text-align : left;font-size:16px; margin-left:5px">Total Kasus</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Pasien Aktif</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Rawat Inap</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Isolasi mandiri</p>
                    </div>
                    <div class="col-md-4">
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">1.500</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">300</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">164</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">136</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-md-center">
        <div class="peta-cdk">   
            <img src="<?= base_url('public/cilandak.png') ?>" style="height:300px;width:325px">    
            <div class="cdk" style="width:200px;margin-left:300px;background-color:white;border-radius:10px">
                <p style="text-align:center">Kec. Cilandak</p>
                <div class="row justify-content-around">
                    <div class="col-md-8">
                        <p style="text-align : left;font-size:16px; margin-left:5px">Total Kasus</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Pasien Aktif</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Rawat Inap</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Isolasi mandiri</p>
                    </div>
                    <div class="col-md-4">
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">1.500</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">300</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">164</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">136</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="peta-jgk">   
            <img src="<?= base_url('public/jagakarsa.png') ?>" style="height:300px;width:475px">    
            <div class="jgk" style="width:200px;margin-left:200px;background-color:white;border-radius:10px">
                <p style="text-align:center">Kec. Jagakarsa</p>
                <div class="row justify-content-around">
                    <div class="col-md-8">
                        <p style="text-align : left;font-size:16px; margin-left:5px">Total Kasus</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Pasien Aktif</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Rawat Inap</p>
                        <p style="text-align : left;font-size:16px; margin-left:5px">Isolasi mandiri</p>
                    </div>
                    <div class="col-md-4">
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">1.500</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">300</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">164</p>
                        <p style="text-align : right;font-size:16px;color:red; margin-right:5px">136</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div class="row justify-content-around">
        <div class="col-md-3">
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
        <div class="col-md-3">
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
        <div class="col-md-3">
            <p style="text-align : center;font-size:16px">Total Meninggal</p>
            <h4 style="text-align : center">178.634</h4>
            <span><p style="text-align : center;font-size:12px">Indonesia: 1.051.093</p></span>
        </div>
        <div class="col-md-3">
            <p style="text-align : center;font-size:16px">Total Sembuh</p>
            <h4 style="text-align : center">56.912</h4>
            <span><p style="text-align : center;font-size:12px">Indonesia: 589.034</p></span>
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