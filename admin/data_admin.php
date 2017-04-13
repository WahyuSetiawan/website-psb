<?php
include("koneksi.php");
include("header.php");
?>
<h3 align="center">Data Admin</h3>
<table width="530" border="1" align="center">
    <tr bgcolor="#FFFF00">
        <td><div align="center">ID</div></td>
        <td><div align="center">Username</div></td>
        <td><div align="center">Password</div></td>
        <td><div align="center">Level</div></td>
        <td><div align="center">Action</div></td>
    </tr>
    <?php
    $query = mysql_query("select * from admin");
    while ($data = mysql_fetch_array($query)) {
        ?>
        <tr>

            <td align="center"><?php echo $data['id']; ?></td>
            <td align="center"><?php echo $data['username']; ?></td>
            <td align="center"><?php echo $data['password']; ?></td>
            <td align="center"><?php echo $data['level']; ?></td>
            <td><center><a href="deleteberita.php?id_berita=<?php echo $data['id_berita'] ?>"  title="Delete" onClick="return confirm('Apakah anda yakin akan menghapus data ini?')"><img src="delete.png" width="32" height="32"></a>&nbsp;<a href="updateberita.php?id_berita=<?php echo $data['id_berita'] ?>"  title="Update"><img src="edit.png" width="32" height="32"></a></td>

            </tr>
        <?php } ?>
</table>
<br>
<?php
include("footer.php");
?>