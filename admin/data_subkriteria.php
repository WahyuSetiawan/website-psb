<?php
include ("koneksi.php");
include("header.php");
?>

<h4 align="center">Data Sub Kriteria</h4>
<table align="center" border="1">
    <thead>
        <tr bgcolor="#FFFF00">

            <td align="center">Id Bobot</th>
            <td align="center">Keterangan</th>
            <td align="center">Min</th>
            <td align="center">Kondisi</th>
            <td align="center">Max</th>
            <td align="center">Nilai</th>
            <td align="center">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $query = mysql_query("select * from sub_kriteria");
        while ($data = mysql_fetch_array($query)) {
            ?>	
            <tr bgcolor="white">

                <td align="center">
                    <?php echo $data['id_bobot']; ?>
                </td>

                <td><?php echo $data['keterangan']; ?>
                </td>
                <td align="center">
                    <?php echo $data['min']; ?>
                </td>
                <td align="center">
                    <?php echo $data['kondisi']; ?>
                </td>
                <td align="center">
                    <?php echo $data['max']; ?>
                </td>
                <td align="center">
                    <?php echo $data["nilai"]; ?>
                </td>
                <td><center><a href="deleteberita.php?id_berita=<?php echo $data['id_berita'] ?>"  title="Delete" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')"><img src="delete.png" width="32" height="32"></a>&nbsp;<a href="updateberita.php?id_berita=<?php echo $data['id_berita'] ?>"  title="Update"><img src="edit.png" width="32" height="32"></a></td>
            </tr>
        <?php } ?>
        </tbody>
</table>
<br>
<?php
include("footer.php");
?>