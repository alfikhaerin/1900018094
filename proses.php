<!DOCTYPE html>
<html>
<head>
	<title>pemberitahuan</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<?php 
$nama=$_POST['nama'];
$umur=$_POST['umur'];
$jeniskelamin=$_POST['jeniskelamin'];
$tanggal=$_POST['tanggal'];
$penyakit=$_POST['penyakit'];

$data="\n$nama|$umur|$jeniskelamin|$tanggal|$penyakit";

$fh=fopen("data.text","a");
fwrite($fh, $data);
fclose($fh);
echo '<a href="tampil.php">lihat list daftar <br></a>';
print("Data Anda telah Disimpan");
?>
</body>
 </html>