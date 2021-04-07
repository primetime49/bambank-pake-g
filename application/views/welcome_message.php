<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Maju Bersama Bambang</title>

	<style type="text/css">
	</style>
</head>
<body>

<section class="section-header">
	<div>
		<?php $this->load->view('layout/header'); ?>
	</div>
</section>
<section class="section-data">
	<div>
		<?php $this->load->view('layout/data'); ?>
	</div>
</section>
<section class="section-footer">
	<hr>
	<div>
		<?php $this->load->view('layout/footer'); ?>
	</div>
</section>
</body>
</html>