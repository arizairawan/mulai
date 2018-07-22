<?php
include "koneksi.php";

$id = $_GET['id'];

$sql = "DELETE FROM siswa WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    //    echo "New record created successfully";
    header('location:index.php');
} else {
    echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>