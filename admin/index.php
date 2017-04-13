<?php
include("header.php");
?>
Anda Masuk Sebagai &nbsp;<b><?php session_start();
echo $_SESSION['user'];
?></b>
<?php
include("footer.php");

include '../compute_saw/SawGenerate.php';
include '../compute_saw/SawCompute.php';

include './koneksi.php';

$result = mysql_query('select * from daftar');

while ($datasiswa = mysql_fetch_assoc($result)) {
    $idsiswa = $datasiswa['id_siswa'];

    $resultdetailbobot = mysql_query("select * from detail_bobot where id_siswa = '" . $idsiswa . "'");
    
    while($datadetailsiswa = mysql_fetch_assoc($resultdetailbobot)){
        $variblebobotsiswa[$idsiswa][$datadetailsiswa['id_bobot']] = $datadetailsiswa['value'];        
    }
}

$result = mysql_query('select * from bobot');

while($databobot = mysql_fetch_assoc($result)){
    $bobot[$databobot['id_bobot']]['status'] = $databobot['keterangan'];
    $bobot[$databobot['id_bobot']]['dp'] = $databobot['dropdown'];
    $bobot[$databobot['id_bobot']]['nilai'] = $databobot['nilai'];
}

$result = mysql_query('select * from sub_kriteria');

while($databobot = mysql_fetch_assoc($result)){
    $bobot[$databobot['id_bobot']]['subcriteria'][$databobot['id']]['min'] = $databobot['min'];
    $bobot[$databobot['id_bobot']]['subcriteria'][$databobot['id']]['max'] = $databobot['max'];
    $bobot[$databobot['id_bobot']]['subcriteria'][$databobot['id']]['nilai'] = $databobot['nilai'];
}

$saw  = new SawGenerate($variblebobotsiswa, $bobot, $subcriteria);

var_dump($saw->compute->return)
?>