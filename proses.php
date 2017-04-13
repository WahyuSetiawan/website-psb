<?php

	include('koneksi.php');
	if(isset($_POST['login'])){

	$user = mysql_real_escape_string(htmlentities($_POST['username']));
	$pass = mysql_real_escape_string(htmlentities(md5($_POST['password'])));
 
	$sql = mysql_query("SELECT * FROM admin WHERE username='$user' AND password='$pass'") or die(mysql_error());

	
	if(mysql_num_rows($sql) == 0){
		echo '<script language="javascript">alert("Salah Coba Ulangi Lagi"); document.location="index.php";</script>';

	}else{
		$row = mysql_fetch_assoc($sql);
	if($row['level'] == 1){
		$_SESSION['user']=$user;
		echo '<script language="javascript">alert("Anda berhasil Login Admin!"); document.location="admin/index.php";</script>';
	}else{
		$_SESSION['user']=$user;
		echo '<script language="javascript">alert("Anda berhasil Login Panitia!"); document.location="panitia/index.php";</script>';
		}
	}
}
?>