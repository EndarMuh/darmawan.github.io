<html>
    <head>
    </head>
    <body>
        <?php
            include "koneksi.php";
            $id = $_GET['id'];
            $query = "SELECT * FROM pendaftaran WHERE id = '$id'";
            $result = mysqli_query($connect, $query);
        ?>
        <form action = "proses.php" method="GET">
        <table>
                <?php
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                    <tr>
                        <td> Id: </td>
                        <td> <input type="text" name="id" value="<?php echo $row['id']; ?>"></td>
                    </tr>
                    <tr>
                        <td> Nama: </td>
                        <td> <input type="text" name="nama" value="<?php echo $row['nama']; ?>"> </td>
                    </tr>
                    <tr>
                        <td> Alamat: </td>
                        <td> <textarea type="text" name="alamat" rows="5" cols="24"><?php echo $row['alamat']; ?></textarea> </td>
                    </tr>
                    <tr>
                        <td> No Telp: </td>
                        <td> <input type="number" name="tlp" value="<?php echo $row['tlp']; ?>"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>
                            <input type="radio" name="jk" value="Laki-laki"> Laki-Laki
                            <input type="radio" name="jk" value="Perempuan"> Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>
                            <fieldset>
                                <select class="form-control dropdown" id="agama" name="agama">
                                    <option value="" selected="selected" disabled="disabled" value="<?php echo $row['agama']; ?>"
                                    >-- select one --</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Protestan">Protestan</option>
                                    <option value="Katolik">Katolik</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                    <option value="Hindu">Hindu</option>
                                </select>
                            </fieldset>
                        </td>
                    </tr>
                    <tr>
                        <td><button type="submit">Save</button></td>
                    </tr>
                <?php
                    }
                ?>
            </form>
        </table>
    </body>
</html>