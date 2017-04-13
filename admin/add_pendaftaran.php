<?php
include("header.php");
include 'koneksi.php';
?>
<h1>Tambah Data Pendaftaran</h1>
<form action="proses_add_daftar.php" method="post">
    <table width="390" border="0">
        <tr>
            <td width="73">Nomer Pendaftaran</td>
            <td width="3">:</td>
            <td width="200"><input type="text" name="id" size="15"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" size="30"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><textarea  name="alamat"></textarea></td>
        </tr>
        <?php
        $result = mysql_query('select * from bobot');

        while ($data = mysql_fetch_assoc($result)) {
            if ($data['dropdown'] == 'Y') {
                ?>
                <tr>
                    <td><?php echo $data['kriteria'] ?></td>
                    <td>:</td>
                    <td>
                        <select name="bobot[<?php echo $data['id_bobot'] ?>]">
                            <?php
                            $resultsubkriteria = mysql_query("select * from sub_kriteria where id_bobot = '" . $data['id_bobot'] . "'");
                            while ($datasubkriteria = mysql_fetch_assoc($resultsubkriteria)) {
                                ?> 
                                <option value="<?php echo $datasubkriteria['nilai']; ?>"><?php echo $datasubkriteria['keterangan'] ?></option>
                            <?php } ?>
                        </select>
                    </td>
                </tr>
                <?php
            } else {
                ?>
                <tr>
                    <td><?php echo $data['kriteria'] ?></td>
                    <td>:</td>
                    <td><input type="text" name="bobot[<?php echo $data['id_bobot'] ?>]" size="5"></td>
                </tr>
                <?php
            }
        }
        ?>

        <tr>
            <td><input type="submit" name="simpan" value="Simpan" /></td>
            <td></td>
            <td><input type="submit" name="batal" value="Batal" onclick="document.location.href = 'data_daftar.php'" /></td>
        </tr>
    </table>
</form>

<?php
include("footer.php");
?>