<?php
include("header.php");
?>
<form action="proses.php" method="post"> 
<table width="200" border="0">
  <tr>
    <td>Username</td>
    <td>:</td>
    <td><input type="text" name="username" /></td>
  </tr>
  <tr>
    <td>Passsword</td>
    <td>:</td>
    <td><input type="password" name="password"/></td>
  </tr>
 
</table>
<table>
<tr><td><input type="submit" name="login" value="Login" /></td></tr>
</table>
</form>
<?php
include("footer.php");
?>