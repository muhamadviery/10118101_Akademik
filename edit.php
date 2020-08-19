<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
<h2>Edit Data Siswa SMK 12 Banjarnegara</h2>
<br/>
<a href="index.php"></a>
<br/>
<br/>
<h2>Edit Data Siswa</h2>	
<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM siswa where id='$id'");
while($d = mysqli_fetch_array($data)){
?>
<form method = "post" action="update.php">
<table>
		<tr>
		<td>Nama</td>
		<td>
		<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
		<input type="text" name="nama" value="<?php echo $d['nama']; ?>">
		</td>
		</tr>
		<tr>
		<td>Kelas</td>
		<td><input type="text" name="kelas" value="<?php echo $d['kelas']; ?>">
		</td>
		</tr>
		<tr>
		<td>Alamat</td>
		<td><textarea type = "text" name="alamat" value="<?php echo $d['alamat']; ?>">
		</textarea></td>
		</tr>
		<tr>
		<td></td>
		<tr><td><input type="submit" value="Simpan"></td>
		<td><input type="reset" value="Reset"></td>
		<td><input type="submit" value="Cancel"></td>
		</tr>
		</table>
		</form>
		<?php
	}
	?>
</body>

</html>
