<!DOCTYPE html>
<html>
<head>
	<title>PASIEN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="badan">
		<h1 align="center">DAFTAR PASIEN</h1>
		<table width="100%" style="border-collapse:collapse;" border="1">
			<tr>
				<th>Nama</th>
				<th>Umur</th>
				<th>Jenis Kelamin</th>
				<th>Tanggal</th>
				<th>Penyakit</th>
			</tr>
			<?php 
				echo "<head><title>Pasien Rawat Jalan</head></title>";
				$fp = fopen("data.text", "r");
			?>
			<?php while ($isi = fgets($fp,1000)) 
			{
				$pisah = explode ("|", $isi);
				?>
				<tr>
					<th><?php echo"$pisah[0]"; ?></th>
					<th><?php echo"$pisah[1]"; ?></th>
					<th><?php echo"$pisah[2]"; ?></th>
					<th><?php echo"$pisah[3]"; ?></th>
					<th><?php echo"$pisah[4]"; ?></th>
					
				</tr>
			<?php } ?>
		</table>
		<button class="tombol"><a align="center" href="form-daftar.php">Kembali Ke Menu Awal</a>
	</div>
</body>
</html>
