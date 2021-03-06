<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="<?php echo base_url('asset/images/logo-labti.png'); ?>">
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title><?=$title?></title>

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
	<!-- CSS -->
	<link rel="stylesheet" href="<?=base_url('asset/css/linearicons.css'); ?>">
	<link rel="stylesheet" href="<?=base_url('asset/css/font-awesome.min.css'); ?>">
	<link rel="stylesheet" href="<?=base_url('asset/css/bootstrap.css'); ?>">
	<link rel="stylesheet" href="<?=base_url('asset/css/magnific-popup.css'); ?>">
	<link rel="stylesheet" href="<?=base_url('asset/css/nice-select.css'); ?>">
	<link rel="stylesheet" href="<?=base_url('asset/css/animate.min.css'); ?>">
	<link rel="stylesheet" href="<?=base_url('asset/css/owl.carousel.css'); ?>">
	<link rel="stylesheet" href="<?=base_url('asset/css/main.css'); ?>">
	<link rel="stylesheet" href="<?=base_url('asset/css/fontawesome/css/all.css'); ?>">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
<header id="header" id="home">
	<div class="container">
		<div class="row align-items-center justify-content-between d-flex">
			<div id="logo">
				<a href="<?=site_url();?>"><img src="<?=base_url('asset/images/logo-labti.png'); ?>" width="50px"/></a>
			</div>
			<nav id="nav-menu-container">
				<ul class="nav-menu align-items-center justify-content-between d-flex">
					<li class="<?php if($this->uri->segment(1)=="" || $this->uri->segment(1)=="profil"){echo "menu-active";}?>"><a href="http://ti.lab.gunadarma.ac.id/">Beranda</a></li>
					<li class="<?php if($this->uri->segment(1)=="tatatertib"){echo "menu-active";}?>"><a href="http://ti.lab.gunadarma.ac.id/tatatertib">Tata Tertib</a></li>
					<li class="<?php if($this->uri->segment(1)=="pelayanan"){echo "menu-active";}?>"><a href="http://ti.lab.gunadarma.ac.id/pelayanan">Pelayanan</a></li>
					<li class="<?php if($this->uri->segment(1)=="jadwal"){echo "menu-active";}?>"><a href="http://ti.lab.gunadarma.ac.id/jadwal">Jadwal</a></li>
					<li><a href="http://ti.lab.gunadarma.ac.id/praktikum/" target="_blank">Praktikum</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>