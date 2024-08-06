<?php
require "functions.php";

$id = $_GET["id"];
var_dump($id);

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "
        <script>
        alert('data berhasil diubah ! ');
        document.location.href = 'index.php';
        </script>
        ";
    } else {
        echo "
        <script>
        alert('data gagal diubah ! ');
        document.location.href = 'index.php';
        </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }
        h1 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        form ul {
            list-style-type: none;
            padding: 0;
        }
        form li {
            margin-bottom: 15px;
        }
        form label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        form input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        form button {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color: #28a745;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        form button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Ubah Data Mahasiswa</h1>
        <form action="" method="post">
            <ul>
                <input type="hidden" name="id" id="id" value="<?= $mhs["id"]; ?>">
                <li>
                    <label for="npm">NPM :</label>
                    <input type="text" name="npm" id="npm" required value="<?= $mhs["npm"]; ?>">
                </li>
                <li>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
                </li>
                <li>
                    <label for="email">Email :</label>
                    <input type="text" name="email" id="email" required value="<?= $mhs["email"]; ?>">
                </li>
                <li>
                    <label for="program_studi">Program Studi :</label>
                    <input type="text" name="program_studi" id="program_studi" required value="<?= $mhs["program_studi"]; ?>">
                </li>
                <li>
                    <label for="gambar">Gambar :</label>
                    <input type="text" name="gambar" id="gambar" value="<?= $mhs["gambar"]; ?>">
                </li>
                <li>
                    <button type="submit" name="submit">Ubah Data!</button>
                </li>
            </ul>
        </form>
    </div>
</body>
</html>
