<?php 
require_once($_SERVER['DOCUMENT_ROOT'].'/AplikasiDB/Vendor/base.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/AplikasiDB/Vendor/autoload.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/AplikasiDB/Database/Connection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Aplikasi Database</title>
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'Assets/css/w3.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'Assets/css/myStyle.css'; ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'Assets/css/datatables.min.css'; ?>">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
	<!-- javascript -->
	<script type="text/javascript" src="<?php echo base_url().'Assets/jquery/dist/jquery.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'Assets/js/datatables.min.js'?>"></script>
	<script type="text/javascript" src="<?php echo base_url().'Assets/sweetalert/dist/sweetalert.min.js'?>"></script>
	
</head>
<body>
	<!-- navigation -->
	<nav>
		<div class="w3-bar w3-card w3-white w3-padding">
			<a href="#" class="w3-button w3-hover-none w3-bar-item navbar-brand">AplikasiDB</a>
			<a href="/AplikasiDB" class="w3-button w3-bar-item w3-hover-none w3-hover-text-grey"><i class="fa fa-home"></i> Beranda</a>
			<!-- <button class="w3-right w3-btn w3-blue w3-round-small" onclick="document.getElementById('modal-login').style.display='block'"><i class="fas fa-sign-in-alt"></i> Login</button> -->
		 	<!-- <a href="logout" class="w3-opacity w3-bar-item w3-button w3-round w3-hover-red w3-right"><i class="fa fa-sign-out"></i> Logout</a> -->
		</div>
	</nav>
	<!-- end navigation -->