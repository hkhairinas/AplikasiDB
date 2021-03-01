<footer class="w3-card footer w3-container">
	&copy; 2020 - AplikasiDB
</footer>

<script type="text/javascript">
$(function(){
	$("#form-mhs").submit(function(event){
		event.preventDefault();
		$.ajax({
			url: '../Database/Connection',
			type: 'POST',
			dataType: 'html',
			data: {nama: $('#nama').val(), nim: $('#nim').val(), tgl: $('#tgl').val(), addmhs: $('#addmhs').val()},
		})
		.done(function(data){
			// alert(data);
			if(data == 'ok'){
				swal({
					title: "Yeay!",
					text: "Tambah Data Sukses!",
					type: "success",
					icon: "success"
				}).then(function() {
					window.location = "mahasiswa";
				});
			} else {
				swal("Sorry!", "Tambah Data Gagal!", "error");
			}
		})
		.fail(function(){
			console.log("Error");
		})
		.always(function(){
			console.log("complete");
		});
	});
});

$(function(){
	$("#form-dsn").submit(function(event){
		event.preventDefault();
		$.ajax({
			url: '../Database/Connection',
			type: 'POST',
			dataType: 'html',
			data: {nama: $('#nama').val(), nip: $('#nip').val(), tgl: $('#tgl').val(), adddsn: $('#adddsn').val()},
		})
		.done(function(data){
			// alert(data);
			if(data == 'ok'){
				swal({
					title: "Yeay!",
					text: "Tambah Data Sukses!",
					type: "success",
					icon: "success"
				}).then(function() {
					window.location = "dosen";
				});
			} else {
				swal("Sorry!", "Tambah Data Gagal!", "error");
			}
		})
		.fail(function(){
			console.log("Error");
		})
		.always(function(){
			console.log("complete");
		});
	});
});
</script>

</body>
</html>