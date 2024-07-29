<?php
require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");
?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>data mahasiswa</title>
</head>
<body>
    <h1>daftar mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>no</th>
            <th>aksi</th>
            <th>nama</th>
            <th>absen</th>
            <th>nomor</th>
            <th>gambar</th>
        </tr>

        <?php $i=1; ?>
        <?php foreach( $mahasiswa as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a>
                <a href="hapus.php?id=<?= $row["id"];?>" onclick = "return confirm('yakin?');">Hapus</a>
            </td>
            <td><?= $row["nama"] ?></td>
            <td><?= $row["absen"] ?></td>
            <td><?= $row["no_hp"] ?></td>
            <td>
                <img src="images/<?= $row["gambar"]; ?>" width="50px" alt="">
            </td>
        </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
        </table>
</body>
</html>