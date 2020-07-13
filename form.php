<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="style.css">
<body>
	<center><h3>SILAHKAN MENGISI FORMULIR PENDAFTARAN <br>Pasien Rawat Jalan dr.xxxxxx</h3></center>
	


<div class="dft">
  <form action="proses.php" method="post" >
    <label>Nama Pasien</label>
    <input type="text" id="nama" name="nama" placeholder="Nama Pasien....">

    <label>Umur</label>
    <input type="text" id="umur" name="umur" placeholder="umur...........">
	<label>Jenis Kelamin</label>
    <div class="kelamin">
    	
	    <input type="radio" name="jeniskelamin" value="Laki-laki"/>Laki-laki
	   	<input type="radio" name="jeniskelamin" value="Perempuan"checked="checked"/>Perempuan
    </div>
    <label>Tanggal Kunjungan</label>
    <div class="tanggal">
    <input type="date" name="tanggal"></div>
      

   <label>Penyakit/keluhan yang dirasaskan</label>
    <input type="textarea" name="penyakit">
 
    <input type="submit" value="DAFTAR">
  </form>
</div>

<div class="footer">
		Copyright &copy; Alfikhaerin
	</div>
</body>
</html>
