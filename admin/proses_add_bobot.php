<?php
include 'koneksi.php';

if (!isset($_POST['Simpan'])) {
    mysql_query("INSERT INTO `db_test_saw_school`.`bobot` (`kriteria`, `keterangan`, `nilai`) "
            . "VALUES ("
            . "'" . $_POST['kriteria'] . "', "
            . "'" . $_POST['keterangan'] . "', "
            . "" . $_POST['nilai'] . ");");
}
?>

<script type="text/javascript">
    document.location.href = "data_bobot.php"
</script>