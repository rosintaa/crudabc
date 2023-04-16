<?php
include('koneksi.php');
$no=$_POST['no'];
$nama=$_POST['nama'];
$email=$_POST['email'];
$nomor=$_POST['nomor'];
$update=mysqli_query($koneksi,"UPDATE DATA set nama='$nama',email='$email',nomor='$nomor' WHERE no='$no'" );

header ("Location: read.php");
?>