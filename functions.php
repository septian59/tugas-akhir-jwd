<?php

//koneksi
$conn = mysqli_connect('localhost', 'root', '', 'dbakhir');


function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}


function tambah($data)
{
    global $conn;
    $nama = htmlspecialchars($data['nama']);
    $jenis = htmlspecialchars($data['jenis']);

    $query = "INSERT INTO user(nama, jenis) VALUES('$nama', '$jenis')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM user WHERE id_user = $id");

    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    global $conn;
    $id = $data["id"];
    $nama = htmlspecialchars($data['nama']);
    $jenis = htmlspecialchars($data['jenis']);

    $query = "UPDATE user SET 
    nama = '$nama', 
    jenis = '$jenis'
    WHERE id_user = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
