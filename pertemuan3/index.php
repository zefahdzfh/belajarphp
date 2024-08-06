<?php
require "functions.php";

if (isset($_POST["cari1"])) {
    $keyword = $_POST["cari"];
    $mahasiswa = cari1($keyword);
} else {
    $mahasiswa = query("SELECT * FROM mahasiswa");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }
        h1 {
            margin-top: 20px;
            font-size: 24px;
            color: #333;
        }
        a {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #218838;
        }
        form {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        input[type="text"] {
            padding: 10px;
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 5px 0 0 5px;
            outline: none;
        }
        button {
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            outline: none;
        }
        button:hover {
            background-color: #0056b3;
        }
        table {
            width: 80%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #f8f8f8;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 10px;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
        }
        .btn-blue {
            background-color: #007bff;
        }
        .btn-blue:hover {
            background-color: #0056b3;
        }
        .btn-red {
            background-color: #dc3545;
        }
        .btn-red:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <form action="" method="post">
        <input type="text" name="cari" size="30" autofocus placeholder="Search" autocomplete="off">
        <button type="submit" name="cari1">Cari!</button>
    </form>

    <table>
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NPM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Program Studi</th>
        </tr>

        <?php $i=1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-blue">Ubah</a>
                <a href="hapus.php?id=<?= $row["id"]; ?>" class="btn btn-red" onclick="return confirm('Yakin?');">Hapus</a>
            </td>
            <td><img src="images/<?= $row["gambar"]; ?>" width="50px" alt=""></td>
            <td><?= $row["npm"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["program_studi"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>
