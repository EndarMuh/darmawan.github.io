<?php
    include "koneksi.php";

    $id=$_GET['id'];
    $nama=$_GET['nama'];
    $alamat=$_GET['alamat'];
    $tlp=$_GET['tlp'];
    $jk=$_GET['jk'];
    $agama=$_GET['agama'];

    $sql="INSERT INTO pendaftaran(id, nama, alamat, tlp, jk, agama)
            VALUES('$id','$nama','$alamat','$tlp','$jk','$agama')";

    if (mysqli_query($connect, $sql)){
        echo "Record berhasil ditambahkan";
    } else {
        echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
    }

    mysqli_close($connect);
?>        
<br>
<style>

    .back{
        width: 140px;
        font-family: comic sans ms;
        height: 30px;
        border-radius: 8px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .bck {
        width: 145px;
        font-family: comic sans ms;
        height: 30px;
        border-radius: 8px;
    }
</style>
<a href="index.html"><button class="back">Kembali ke Menu</button></a>
<br>
<a href="pendaftaran.html"><button class="bck">Pendaftaran kembali</button></a>
