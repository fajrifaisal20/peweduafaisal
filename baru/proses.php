<!DOCTYPE html>
<html>
<head>
	<title>Selamat bergabung</title>
</head>
<body>
	<h1>Selamat Bergabung!!</h1>
	<p>Anda terdaftar dengan identitas sebagai :</p> <br>
<table>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $_POST['nama_lengkap'] ?></td>
	</tr>
	<tr>
		<td>username</td>
		<td>:</td>
		<td><?php echo $_POST['username']
		 ?></td>
	</tr>
		<tr>
		<td>Alamat</td>
		<td>:</td>
		<td><?php echo $_POST['alamat'] ?></td>
	</tr>
	
</table>

</body>
</html>