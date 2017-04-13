<?php
include('header.php');
?>
Pendaftaran
<table width="390" border="0">
  <tr>
    <td width="73">Nomer Pendaftaran</td>
    <td width="3">:</td>
    <td width="200"><input type="text" name="id" size="15"></td>
  </tr>
  <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama" size="30"></td>
  </tr>
  <tr>
    <td>Alamat</td>
    <td>:</td>
    <td><textarea  name="alamat"></textarea></td>
  </tr>
  <tr>
    <td>Nilai UN</td>
    <td>:</td>
    <td><input type="text" name="nilai_un" size="5"></td>
  </tr>
  <tr>
    <td>Nilai Raport</td>
    <td>:</td>
    <td><input type="text" name="nilai_raport" size="5"></td>
  </tr>
  <tr>
    <td>Tes Akademik</td>
    <td>:</td>
    <td><input type="text" name="akademik" size="5"></td>
  </tr>
  <tr>
    <td>Tes Psikologi</td>
    <td>:</td>
    <td><input type="text" name="psikologi" size="5"></td>
  </tr>
  <tr>
    <td>Tes Wawancara</td>
    <td>:</td>
    <td><input type="text" name="wawancara" size="5"></td>
  </tr>
  <tr>
    <td>Tes Jasmani</td>
    <td>:</td>
    <td><input type="text" name="jasmani" size="5"></td>
  </tr>
  <tr>
    <td>Prestasi Non Akademik</td>
    <td>:</td>
    <td><input type="text" name="prestasi" size="5"></td>
  </tr>
   <tr>
    <td><input type="submit" name="simpan" value="Simpan" /></td>
    <td></td>
    <td><input type="submit" name="batal" value="Batal" /></td>
  </tr>
  
</table>



<?php
include('footer.php');
?>