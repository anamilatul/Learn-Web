<html>
<head>Halaman Saran</head>
<body>
	<h1>Halaman Saran dari Pengunjung Website</h1>
<?php
	if (isset($_GET['submit'])) {
		if(isset($_GET['facebook'])){$fb="Punya";}else{$fb="Tidak Punya";}
		if(isset($_GET['twitter'])){$tw="Punya";}else{$tw="Tidak Punya";}
		if(isset($_GET['instagram'])){$ig="Punya";}else{$ig="Tidak Punya";}
		if(isset($_GET['path'])){$pt="Punya";}else{$pt="Tidak Punya";}
		echo"<table border=1>
		<tr><td>Nama Lengkap</td><td>:".$_GET['nama_lengkap']."</td></tr>
		<tr><td>Jenis Kelamin</td><td>:".$_GET['jenis_kelamin']."</td></tr>
		<tr><td>Alamat Tinggal</td><td>:".$_GET['alamat']."</td></tr>
		<tr><td>Email</td><td>:".$_GET['email']."</td></tr>
		<tr><td colspan=2>Sosial Media</td></tr>
		<tr><td>Facebook</td><td>:".$fb."</td></tr>
		<tr><td>Twitter</td><td>:".$tw."</td></tr>
		<tr><td>Instagram</td><td>:".$ig."</td></tr>
		<tr><td>Path</td><td>:".$pt."</td></tr>
		<tr><td>Mengetahui Web ini dari</td><td>:".$_GET['info']."</td></tr>
		<tr><td>Pesan</td><td>:</td></tr>
		<tr><td colspan=2>".$_GET['pesan']."</td></tr>
	</table>";
	}else{
		echo"<h2>Halaman ini tidak bisa dipanggil secara langsung</h2>";
	}
?>
	

</body>
</html>