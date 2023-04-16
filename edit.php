<?php
    include('koneksi.php');
    $no=$_GET ['no'];
    $data=mysqli_query($koneksi,"SELECT * FROM data WHERE no='$no'");
    $isi=mysqli_fetch_array($data);
    ?>
<html>

<head>

</head>

<body>

    <h1>EDIT FORMULIR</h1>
    <form method="POST" action="update.php">
        <label>Nama : </label>
        <input name="nama" value="<?php echo $isi['nama']; ?>">
        <input name="no" value="<?php echo $no; ?>" hidden>
        <label></label>
        <br><br>
        <label>Email : </label>
        <input name="email" value="<?php echo $isi['email']; ?>">
        <br><br>
        <label>Nomor HP : </label>
        <input name="nomor" value="<?php echo $isi['nomor']; ?>">
        <br><br>
        <button type="submit">Simpan</button>

    </form>
</body>

</html>