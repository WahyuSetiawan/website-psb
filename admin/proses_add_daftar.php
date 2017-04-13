<?php
include 'koneksi.php';
echo '<pre>';
var_dump($_POST);
echo '</pre>';

if (isset($_POST['simpan'])) {
    mysql_query("insert into daftar (id_siswa, nama, alamat) values ('" . $_POST['id'] . "','" . $_POST['nama'] . "','" . $_POST['alamat'] . "')");

    $keybobot = array_keys($_POST['bobot']);

    for ($index = 0; $index < count($_POST['bobot']); $index++) {
        $sql = "insert into detail_bobot (id_bobot, id_siswa, `value`) values (" . $keybobot[$index] . "," . $_POST['id'] . "," . $_POST['bobot'][$keybobot[$index]] . ")";

        mysql_query($sql);
    }

    /* mysql_query("INSERT INTO `daftar` ("
      . "`nama`, "
      . "`alamat`, "
      . "`nilai_un`, "
      . "`nilai_raport`, "
      . "`tes_akademik`, "
      . "`tes_psikologi`, "
      . "`tes_wawancara`, "
      . "`tes_jasmani`, "
      . "`prestasi_non_akademik`"
      . ") VALUES ("
      . "'" . $_POST['nama'] . "', "
      . "'" . $_POST['alamat'] . "', "
      . "" . $_POST['nilai_un'] . ", "
      . "" . $_POST['nilai_raport'] . ", "
      . "" . $_POST['akademik'] . ", "
      . "" . $_POST['psikologi'] . ", "
      . "" . $_POST['wawancara'] . ", "
      . "" . $_POST['jasmani'] . ", "
      . "" . $_POST['prestasi'] . ");") or exit(mysql_error()); */
}
?>

<script type="text/javascript">
    document.location.href = 'data_daftar.php';
</script>