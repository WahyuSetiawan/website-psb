<?php
include("header.php");
include 'koneksi.php';
?>
<h1>Data Pendaftaran</h1> 
<button onclick="document.location.href = 'add_pendaftaran.php'">Add Pendaftaran</button><br><br>
<table width="730" border="1" align="center">
    <tr>
        <td><div align="center">No. Daftar</div></td>
        <td><div align="center">Nama</div></td>
        <td><div align="center">Alamat</div></td>
        <?php
        $resultbobot = mysql_query('select * from bobot');

        while ($databobot = mysql_fetch_assoc($resultbobot)) {
            ?>
            <td><div align="center"><?php echo $databobot['kriteria'] ?></div></td>
            <?php
        }
        ?>

        <td><div align="center">Action</div></td>
    </tr>
    <?php
    $hasil = mysql_query('SELECT * FROM `daftar`') or exit(mysql_error());

    while ($data = mysql_fetch_assoc($hasil)) {
        ?>
        <tr>
            <td><?php echo $data['id_siswa'] ?></td>
            <td><?php echo $data['nama'] ?></td>
            <td><?php echo $data['alamat'] ?></td>
            <?php
            $resultbobot = mysql_query('select * from bobot');

            while ($databobot = mysql_fetch_assoc($resultbobot)) {
                $resultdata = mysql_query("select * from detail_bobot where id_bobot = '" . $databobot['id_bobot'] . "' and id_siswa = '" . $data['id_siswa'] . "'");

                $checkdropdown = mysql_query("select * from bobot where id_bobot = '" . $databobot['id_bobot'] . "'");

                if (mysql_fetch_assoc($checkdropdown)['dropdown'] == 'N') {
                    ?>
                    <td><?php echo mysql_fetch_assoc($resultdata)['value'] ?></td>
                    <?php
                } else {
                    $resultdropdownketerangan = mysql_query("select * from sub_kriteria where id = '" . mysql_fetch_assoc($resultdata)['value'] . "'");
                    ?><td><?php echo mysql_fetch_assoc($resultdropdownketerangan)['keterangan'] ?></td><?php
                }
            }
            ?>
            <td>
                <button>Edit</button>
                <button>Delete</button>
            </td>
        </tr>
        <?php
    }
    ?>
</table>
<br>
<?php
include("footer.php");
