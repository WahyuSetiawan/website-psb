<?php
include ("koneksi.php");
include("header.php");

$result = mysql_query("select dropdown, id_bobot from bobot where id_bobot = '" . $_GET['id'] . "'");
$data = mysql_fetch_assoc($result);
?>
<h3>Tambah Bobot</h3>
<form action="proses_add_subkriteria.php" method="post" name="input">
    <?php
    if ($data['dropdown'] == 'Y') {
        ?>
        <table>
            <input type="hidden" name="id" value="<?php echo $data['id_bobot'] ?>">
            <input type="hidden" name="dropdown" value="<?php echo $data['dropdown'] ?>">
            <tr>
                <td>Kondisi</td>
                <td>: <input type="text" name="kondisi"></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td>: <input type="text" name="nilai"></td>
            </tr>
            <tr>
                <td><input size="100px" type="submit" name="tambah" class="btn btn-default" value="Simpan"/></td>

            </tr>
        </table>
        <?php
    } else {
        ?>
        <table>
            <input type="hidden" name="id" value="<?php echo $data['id_bobot'] ?>">
            <input type="hidden" name="dropdown" value="<?php echo $data['dropdown'] ?>">
            <tr>
                <td>Min</td>
                <td>: 
                    <input type="text"  name="min" />           
                </td>
            </tr>
            <tr>
                <td>Max</td>
                <td>: <input type="text" name="max"></td>
            </tr>
            <tr>
                <td>Nilai</td>
                <td>: <input type="text" name="nilai"></td>
            </tr>
            <tr>
                <td>
                    <input size="100px" type="submit" name="tambah" class="btn btn-default" value="Simpan"/>
                </td>
            </tr>
        </table>
        <?php
    }
    ?> 

</form>

<iframe width=174 height=189 name="gToday:normal:asset/normal.js" id="gToday:normal:asset/normal.js" src="asset/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>

<h4 align="center">Data Sub Kriteria</h4>

<?php
if ($data['dropdown'] == 'Y') {
    ?>
    <table align="center" border="2">
        <thead>
            <tr bgcolor="#FFFF00">
      
                <td align="center">Keterangan</th>
                <td align="center">Nilai</th>
                <td align="center">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysql_query("select * from sub_kriteria where id_bobot = '".$_GET['id']."'");
            while ($data = mysql_fetch_array($query)) {
                ?>	
                <tr bgcolor="white">
                   
                    <td>
                        <?php echo $data['keterangan']; ?>
                    </td>
                    <td align="center">
                        <?php echo $data['nilai']; ?>
                    </td>
                    <td>
                        <a href="deleteberita.php?id_berita=<?php echo $data['id_berita'] ?>"  title="Delete" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                            <img src="delete.png" width="32" height="32">
                        </a>
                        <a href="updateberita.php?id_berita=<?php echo $data['id_berita'] ?>"  title="Update">
                            <img src="edit.png" width="32" height="32">
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
} else {
    ?>
    <table align="center" border="2">
        <thead>
            <tr bgcolor="#3399CC">
                <td>Id</th>
                <td>Min</th>
                <td>Kondisi</th>
                <td>Max</th>
                <td>Nilai</th>
                <td>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query = mysql_query("select * from sub_kriteria where id_bobot = '".$_GET['id']."'");
            while ($data = mysql_fetch_array($query)) {
                ?>	
                <tr bgcolor="white">
                    <td>	
                    </td>
                    <td>
                        <?php echo $data['min']; ?>
                    </td>

                    <td><?php echo $data['kondisi']; ?></td>
                    <td>
                        <?php echo $data['max']; ?>
                    </td>
                    <td>
                        <?php echo $data["nilai"]; ?>
                    </td>
                    <td>
                        <a href="deleteberita.php?id_berita=<?php echo $data['id_berita'] ?>"  title="Delete" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                            <img src="img/delete.png" width="32" height="32">
                        </a>&nbsp;
                        <a href="updateberita.php?id_berita=<?php echo $data['id_berita'] ?>"  title="Update">
                            <img src="img/update.png" width="32" height="32">
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php
}
?> 
<br>

<?php
include("footer.php");
?>