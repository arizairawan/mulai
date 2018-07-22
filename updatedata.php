<?php
include"koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$nis = $_POST['nis'];
$tgl_lahir = $_POST['tgl_lahir'];

$sql = "UPDATE siswa SET nama = '$nama', nis = '$nis', alamat = '$alamat', telepon = '$telepon', tgl_lahir = '$tgl_lahir' WHERE id = '$id' ";

if ($conn->query($sql) === TRUE) {
    //    echo "New record created successfully";
    header('location:index.php');
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>