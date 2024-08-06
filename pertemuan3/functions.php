<?php
$conn = mysqli_connect("localhost", "root", "root", "data_mahasiswa");

function query($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $programstudi = htmlspecialchars($data["program_studi"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "INSERT INTO mahasiswa (npm, nama, email, program_studi, gambar)
              VALUES ('$npm', '$nama', '$email', '$programstudi', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data){
    global $conn;
    $id = htmlspecialchars($data["id"]); // Pastikan id diambil dari $data
    $npm = htmlspecialchars($data["npm"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $programstudi = htmlspecialchars($data["program_studi"]);
    $gambar = htmlspecialchars($data["gambar"]);

    $query = "UPDATE mahasiswa SET 
    npm = '$npm',
    nama = '$nama',
    email = '$email',
    program_studi = '$programstudi',
    gambar = '$gambar'
    WHERE id = $id"; // Penutup tanda kutip sudah benar

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa where id = $id");
    return mysqli_affected_rows($conn);
}

function cari1($cari){
    $query = "SELECT * FROM mahasiswa
    WHERE
    npm LIKE '%$cari%' OR
    nama LIKE '%$cari%' OR
    email LIKE '%$cari%' OR
    program_studi LIKE '%$cari%'";

    return query($query);
}
?>
