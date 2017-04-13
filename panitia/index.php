<?php
include("header.php");
?>
Anda Masuk Sebagai &nbsp;<b><?php session_start(); echo $_SESSION['user']; ?></b>
<?php
include("footer.php");
?>