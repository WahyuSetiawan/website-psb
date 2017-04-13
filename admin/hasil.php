<?php
include("koneksi.php");
include("header.php");
?>
<h3 align="center">Data Hasil</h3>
<table width="530" border="1" align="center">
    <tr bgcolor="#FFFF00">
        <td><div align="center">ID</div></td>
        <td><div align="center">Min</div></td>
        <td><div align="center">Kondisi</div></td>
        <td><div align="center">Max</div></td>
        <td><div align="center">Keterangan</div></td>
        <td><div align="center">Id Daftar</div></td>
        <td><div align="center">Nilai</div></td>

    </tr>
    <?php
    $query = mysql_query("SELECT * FROM sub_kriteria,detail_bobot");
    while ($data = mysql_fetch_array($query)) {
    $id_bobot = $data['id_bobot'];
    $min = $data['min'];
    $kondisi = $data['kondisi'];
    $max = $data['max'];
    $keterangan = $data['keterangan'];
    $id_siswa = $data['id_siswa'];
    $value = $data['value'];


    if($value>=0 and $value <=20){
    $nilai = 60;
    }
    elseif($value>=21 and $value <=26){
    $nilai = 70;
    }
    elseif ($value>=27 and $value <=32) {
    $nilai = 80;
    }
    elseif ($value>=33 and $value <=40) {
    $nilai = 90;
    }
    elseif ($value>=41 and $value <=50) {
    $nilai = 100;
    }
    }
    
    
    ?>

    <tr>

        <td align="center"><?php echo $id_bobot; ?></td>
        <td align="center"><?php echo $min; ?></td>
        <td align="center"><?php echo $kondisi; ?></td>
        <td align="center"><?php echo $max ?></td>
        <td align="center"><?php echo $keterangan; ?></td>
        <td align="center"><?php echo $id_siswa; ?></td>
        <td align="center"><?php echo $nilai; ?></td>


    </tr>
    <?php  ?>
</table>

<br>
<?php
include("footer.php");
?>