<?php
include'koneksi.php';

$sql = "SELECT * from siswa WHERE id = $_GET[id]";
$result = $conn->query($sql);
$row = $result->fetch_array();
?>



<h3>Form Update Data</h3>
<form action="updatedata.php" method="post">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    Nama
    <input type="text" name="nama" required placeholder="Nama Lengkap" value="<?php echo $row['nama']; ?>">
    <br>
    
    NIS
    <input type="text" name="nis" required placeholder="NIS" value="<?php echo $row['nis']; ?>">
    <br>
    
    Telepon
    <input type="text" name="telepon" required placeholder="Telepon" value="<?php echo $row['telepon']; ?>">
    <br>
    
    Alamat
    <input type="text" name="alamat" required placeholder="Alamat" value="<?php echo $row['alamat']; ?>">
    <br>
    
    Tgl Lahir
    <input type="date" name="tgl_lahir" required placeholder="Tgl Lahir" value="<?php echo $row['tgl_lahir']; ?>">
    <br>
    
    <input type="submit" value="Simpan">
</form>