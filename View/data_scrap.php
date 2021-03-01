<?php

use MongoDB\Database;

include('templates/header.php');
$db = $client->uploads->scrap;
$result = $db->find();
?>

<div class="w3-container w3-content">
	<h1 class="w3-opacity">Data Scrap</h1><hr>
	<div class="w3-panel">
		<a href="add_data" class="w3-btn w3-blue w3-round"><i class="fa fa-plus-circle"></i> Tambah Data</a>
		<!-- <button class="w3-btn w3-round w3-blue" onclick="document.getElementById('addModal').style.display='block'">Tambah Data </button> -->
	</div>
	<div class="w3-padding w3-card w3-section">
		<table id="myTable" class="display" style="width: 100%;">
			<thead>
				<tr>
					<td>ID</td>
					<td>Nama Kota</td>
					<td>Loc</td>
					<td></td>
					<td>Populations</td>
					<td>State</td>
					<td>Option</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach($result as $value){?>
				<tr>
					<td><?= $value['_id']; ?></td>
					<td><?= $value['city']; ?></td>
					<?php foreach($value['loc'] as $val){?>
					<td><?= $val; ?></td>
					<?php } ?>
					<td><?= $value['pop']; ?></td>
					<td><?= $value['state']; ?></td>
					<td>
						<a href="#" class="w3-btn w3-round w3-pale-green" onclick="document.getElementById('infoModal').style.display='block'"><i class="fa fa-info-circle"></i> Info</a>
						<!-- <a href="#" class="w3-btn w3-round w3-yellow"><i class="fa fa-edit"></i> Edit</a> -->
						<a href="<?php echo base_url().'Database/Connection?del_data='.$value['_id'];?>" class="w3-btn w3-round w3-red" 
						onclick="return confirm('Yakin Akan Menghapus Data <?= $value['city'];?> ?')"><i class="fa fa-trash"></i> Hapus</a>
					</td>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
	$(document).ready( function () {
		$('#myTable').DataTable();
	} );
</script>

<div class="w3-modal" id="infoModal">
	<div class="w3-modal-content">
		<div class="w3-container w3-card">
			<span onclick="document.getElementById('infoModal').style.display='none'"
			class="w3-btn w3-red w3-display-topright">&times;</span>
			<div class="w3-padding w3-center">
				<h2 class="w3-opacity">Info Data</h2><hr>
				<p>_id : <?= $value['_id'];?></p>
			</div>
		</div>
	</div>
</div>
<?php include('templates/footer.php'); ?>