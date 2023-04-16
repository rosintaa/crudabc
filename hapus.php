<?php
include('koneksi.php');

$no=$_GET['no'];
$hapus=mysqli_query($koneksi,"DELETE FROM data WHERE no='$no'");

header ("Location: read.php");
?>