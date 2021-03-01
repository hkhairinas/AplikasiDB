<?php
include('view/templates/header.php');
?>

<div class="w3-container w3-content">
	<h1 class="w3-opacity">Selamat Datang di Aplikasi Database</h1><hr>
	<a href="view/data_scrap" class="w3-btn w3-blue w3-round"><i class="fa fa-table"></i> Data Scrapping</a>
	<a href="view/scrap" class="w3-btn w3-blue w3-round"><i class="fa fa-download"></i> Start Scrapping Data</a>
	<fieldset>
		<legend>Upload Data</legend>
		<form action="Database/Connection" method="post" enctype="multipart/form-data">
			<input id="file_input" type="file" name="file" value="" required>
			<button type="submit" name="upload" class="w3-btn w3-blue w3-round" onclick="return confirm('Anda Akan Menghapus data yang sudah ada sebelumnya. Ok?')"><i class="fa fa-upload"></i> Upload Data</button>
		</form>
	</fieldset>
	<hr>
	<p class="w3-opacity">*Data yang diupload harus berupa JSON / XML</p>
</div>
<?php include('view/templates/footer.php') ?>