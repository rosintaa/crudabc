<?php
include('koneksi.php');
$nama=$_POST['nama'];
$email=$_POST['email'];
$nomor=$_POST['nomor'];

$submit=mysqli_query($koneksi,"INSERT INTO data (nama,email,nomor) VALUES ('$nama','$email','$nomor')");
header ("Location: read.php");
?>