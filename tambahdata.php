<?php
include"koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];
$nis = $_POST['nis'];
$tgl_lahir = $_POST['tgl_lahir'];

$sql = "INSERT INTO siswa (nama, alamat, nis, telepon, tgl_lahir) VALUES ('$nama', '$alamat', '$nis','$telepon','$tgl_lahir')";

if ($conn->query($sql) === TRUE) {
//    echo "New record created successfully";
    header('location:index.php');
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>