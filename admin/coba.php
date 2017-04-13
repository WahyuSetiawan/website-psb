<?php
include 'koneksi.php';
<?php
    $query = mysql_query("select id_siswa, value from detail_bobot where id_bobot");
    while ($data = mysql_fetch_array($query)) {
        ?>
?>
