<?php
include ("koneksi.php");
include("header.php");
?>
<h3>Tambah Bobot</h3>
<form action="proses_add_bobot.php" method="post" name="input">
    <table>
        <tr>
            <td>Kriteria</td>
            <td>: <input type="text" name="kriteria" required> </td>
        </tr>
        <tr>
            <td>Keterangan</td>
            <td>:
                <input type="radio"  name="keterangan" value="benefit" selected="true"><label>Benefit</label>
                <input type="radio"  name="keterangan" value="cost"><label>Cost</label>                              
            </td>
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
</form>
<iframe width=174 height=189 name="gToday:normal:asset/normal.js" id="gToday:normal:asset/normal.js" src="asset/ipopeng.htm" scrolling="no" frameborder="0" style="visibility:visible; z-index:999; position:absolute; top:-500px; left:-500px;">
</iframe>
<h4 align="center">Data Pembobotan</h4>
<table align="center" border="2">
    <thead>
        <tr bgcolor="#FFFF00">
            <td align="center">Id Bobot</th>
            <td align="center">Kriteria</th>
            <td align="center">Keterangan</th>
            <td align="center">Nilai</th>
            <td align="center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = mysql_query("select * from bobot");
        while ($data = mysql_fetch_array($query)) {
            ?>	
            <tr bgcolor="white">
                <td align="center">
                    <?php echo $data['id_bobot']; ?>	
                </td>
                <td>
                    <?php echo $data['kriteria']; ?>
                </td>
                <td align="center">
                    <?php echo $data['keterangan']; ?>
                </td>
                <td align="center">
                    <?php echo $data["nilai"]; ?>
                </td>
                <td align="center">
                    <a href="add_subkriteria.php?id=<?php echo $data['id_bobot'] ?>"  title="Sub Kriteria">
                        <img src="add.png" width="32" height="32"
                    </a>
                    <a href="deleteberita.php?id_berita=<?php echo $data['id_berita'] ?>"  title="Delete" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')">
                        <img src="delete.png" width="32" height="32"
                    </a>
                    <a href="updateberita.php?id_berita=<?php echo $data['id_berita'] ?>"  title="Update">
                        <img src="edit.png" width="32" height="32">
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<br>

</body>
</html>
<?php
include("footer.php");
?>