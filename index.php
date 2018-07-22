<?php
include'koneksi.php';

$sql = "SELECT * from siswa";
$result = $conn->query($sql);

?>
<a href="tambah.php">Tambah Data</a>

<table border="1">
    <tr>
        <td>Id</td>
        <td>Nama</td>
        <td>NIS</td>
        <td>Alamat</td>
        <td>Telepon</td>
        <td>Tgl Lahir</td>
        <td>Delete</td>
        <td>Update</td>
    </tr>
 
    <?php
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_array()) {
            echo "<tr>";
            echo "<td>$row[id]</td>";
            echo "<td>$row[nama]</td>";
            echo "<td>$row[nis]</td>";
            echo "<td>$row[alamat]</td>";
            echo "<td>$row[telepon]</td>";
            echo "<td>$row[tgl_lahir]</td>";
            echo "<td> <a href='hapus.php?id=$row[id]'>Hapus</a>  </td>";
            echo "<td> <a href='update.php?id=$row[id]'>Update</a>  </td>";
            echo "</tr>";
        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
    
</table>