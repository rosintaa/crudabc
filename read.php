<html>

<head>

</head>

<body>
    <h1>Menampilkan Data</h1>
    <p>Tabel :</p>
    <table border="1">

        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Nomor HP</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('koneksi.php');
            $data=mysqli_query($koneksi,"SELECT * FROM data");
            $no=0;
           while( $isi=mysqli_fetch_array($data)){
            $no++;
            ?>
            <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $isi['nama']?></td>
                <td><?php echo $isi['email']; ?></td>
                <td><?php echo $isi['nomor']; ?></td>
                <td>
                    <a href="index.php">Tambah</a>
                    <a href="edit.php?no= <?php echo $isi['no']; ?>">Edit</a>
                    <a href="hapus.php?no= <?php echo $isi['no']; ?>"> Hapus </a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>