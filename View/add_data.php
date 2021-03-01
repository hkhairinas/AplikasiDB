<?php 
include('templates/header.php');
?>
    <div class="w3-container">
        <div class="w3-content">
            <div class="w3-margin w3-padding w3-card">
                <h2 class="w3-opacity">Tambah Data</h2><hr>
    
                <form action="<?php echo base_url().'Database/Connection' ?>" method="get" id="form-mhs">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" id="nama" class="w3-input w3-border w3-round">    
                    <label for="nim">Nim</label>
                    <input type="text" name="nim" id="nim" class="w3-input w3-border w3-round">
                    <label for="tgl">Tanggal Lahir</label>
                    <input type="date" name="tgl" id="tgl" class="w3-input w3-border w3-round">
                    <button type="submit" name="addmhs" id="addmhs" value="addmhs" class="w3-btn w3-blue w3-round w3-section w3-block">Tambah</button>
                </form>
            </div>
        </div>
    </div>
<?php 
include('templates/footer.php');
?>