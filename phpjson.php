<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "sekolah";


$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sqlopsi = "SELECT * from siswa";
$opsiquery = $conn->query($sqlopsi);

$response = array();

while($opsilist = $opsiquery->fetch_array()){
    $h['nis'] = $opsilist["nis"];
    $h['nama'] = $opsilist["nama"];
    $h['alamat'] = $opsilist["alamat"];

    array_push($response, $h);
}
echo json_encode($response);
?>