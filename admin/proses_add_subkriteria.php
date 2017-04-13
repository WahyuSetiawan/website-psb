<?php
include './koneksi.php';

if (!isset($_POST['Simpan'])) {
    var_dump($_POST);

    if ($_POST['dropdown'] == 'Y') {
        mysql_query("insert into sub_kriteria (id_bobot, keterangan, nilai) values (" . $_POST['id'] . ",'" . $_POST['kondisi'] . "'," . $_POST['nilai'] . ")");
    } else {
        mysql_query("insert into sub_kriteria (id_bobot, `min`, kondisi, `max`, nilai) values (" . $_POST['id'] . "," . $_POST['min'] . ",'-'," . $_POST['max'] . "," . $_POST['nilai'] . ")") or exit(mysql_error());
    }
}
?> 
<script type="text/javascript">
    document.location.href = 'add_subkriteria.php?id=<?php echo $_POST['id'] ?>';
</script>