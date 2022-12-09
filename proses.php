<?php 
    include "koneksi.php";

    $id=$_GET['id'];
    $nama=$_GET['nama'];
    $alamat=$_GET['alamat'];
    $tlp=$_GET['tlp'];
    $jk=$_GET['jk'];
    $agama=$_GET['agama'];

    $query = "UPDATE pendaftaran SET nama = '$nama', alamat = '$alamat', tlp = '$tlp', jk = '$jk', agama = '$agama'
            WHERE id = '$id'";
    $result = mysqli_query($connect, $query);

    if ($result) {
        echo "Berhasil update data ke database";
?>
<a href="selectTable.php">Lihat Data di Tabel</a>
<?php
    } else {
        echo "Gagal update data" . mysqli_error($connect);
    }
?>