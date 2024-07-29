<?php
require "functions.php";
//$conn = mysqli_connect("localhost", "root", "", "data_mahasiswa");
//cek apakah tombol submit ditekan atau belum
if ( isset($_POST["submit"])){
    //cek apakah data berhasil atau tidak
    // var_dump ($_POST);
    // $nama=$_POST["nama"];
    // $nama=$_POST["nama"];
    // $absen=$_POST["absen"];
    // $no_hp=$_POST["no_hp"];
    // $gambar=$_POST["gambar"];

    // $query = "insert into mahasiswa values ('', '$nama', '$absen', '$no_hp', '$gambar')";
    // mysqli_query($conn, $query);
    if(tambah($_POST) > 0){
    echo "
    <script>
    alert('data berhasil ditambahkan ! ');
    document.location.href = 'index.php';
    </script>
    ";
} else {
    echo "
    <script>
    alert('data gagal ditambahkan ! ');
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
    <title>Tambah data</title>
</head>
<body>
    <h1>Tambah data siswa</h1>

    <form action="" method="post">
        <ul>
            <!-- required berfungsi agar formnya wajib diisi -->
            <li>
                <label for="npm">npm : </label>
                <input type="text" name="npm" id="npm" required>
            </li>
            <li>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="email">Email : </label>
                <input type="text" name="email" id="email" required>
            </li>
            <li>
                <label for="program_studi">Program Studi : </label>
                <input type="text" name="program_studi" id="program_studi" required>
            </li>
            <li>
                <label for="gambar">Gambar : </label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>
    </form>
    



</body>
</html>