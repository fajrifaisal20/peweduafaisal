<!DOCTYPE html>
<html>
<head>
	<title>Registrasi</title>
</head>
<body>
	<?php $kabupaten=
	[
		[
			"id"=>1,
			"nama_kab"=>"pontianak"
		],
		[	
			"id"=>2,
			"nama_kab"=>"mempawah"
		],
		[	
			"id"=>3,
			"nama_kab"=>"sintang"
		]

	];
	?>
<form method="POST" action="proses.php">
	<table>
	<h1>REGISTRASI</h1>

	<tr>
		<td>Username:</td>
		<td><input type="text" name="username"></td>
	</tr>
	<tr>
		<td>Password:</td>
		<td><input type="text" name="password"></td>
	</tr>
	<tr>
		<td>Nama:</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>No.hp:</td>
		<td><input type="text" name="no_hp"></td>
	</tr>
	<tr>
		<td>Alamat:</td>
		<td><textarea name="alamat"></textarea></td>
	</tr>
	<tr>
		<td>kabupaten:</td>
		<td>
		<select name="kabupaten">
			<!-- <?php foreach ($kabupaten as $kab): 
			?>
			 --><option value="<?php echo $kab['id'];?>">
				<?php echo $kab['nama_kab']; ?>
			</option>
			// <!-- <?php endforeach ?> -->
		</select>
	</td>

		</tr>
	<tr>
		<td>jenis kelamin:</td>
		<td><input type="radio" name="">pria</td>
		<td><input type="radio" name="">wanita</td>
		
	</tr>
	<td>prodi pilihan:</td>
	<td>
		<input type="checkbox" name="">Sistem Informasi<br>
		<input type="checkbox" name="">Sistem Komputer<br>
		<input type="checkbox" name="">Sistem Informatika<br>
	</td>
	<tr>
		<td><input type="submit" value="simpan"></td>
	</tr>
</td>
</td>
</select>
</form>
</body>
</table>
</html>