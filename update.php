<?php
//koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];

//update data ke database
mysqli_query($koneksi,"update siswa set nama='$nama', kelas='$kelas',alamat='$alamat' where id='$id'");

//mengalihkan halaman kembali ke index.php
header ("location:index.php");

?>