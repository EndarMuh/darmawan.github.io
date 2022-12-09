<html>
<head>
</head>

<style>
    table {
        border-collapse: collapse;
        border-spacing: 0;
        width: 100%;
    }

    th,td {
        text-align: left;
        padding: 16px;
    }

    tr:nth-child(even) {
        background-color: antiquewhite;
    }

    button {
        width: 60px;
        font-family: comic sans ms;
        height: 30px;
        border-radius: 8px;
    }
</style>

<body>
    <a href="index.html"><button>Back</button></a>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No Telp</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Aksi</th>
        </tr>
        <?php
        include "koneksi.php";

        $query = "SELECT * FROM pendaftaran";
        $result = mysqli_query($connect, $query);

        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <tr>
                    <td> <?php echo $row["id"] ?> </td>
                    <td> <?php echo $row["nama"] ?> </td>
                    <td> <?php echo $row["alamat"] ?> </td>
                    <td> <?php echo $row["tlp"] ?> </td>
                    <td> <?php echo $row["jk"] ?> </td>
                    <td> <?php echo $row["agama"] ?> </td>
                    <td>
                        <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="hapus.php?id=<?php echo $row['id']; ?>">Hapus</a>
                    </td>
                </tr>
        <?php
            }
        } else {
            echo "0 result";
        }
        ?>
    </table>
</body>

</html>