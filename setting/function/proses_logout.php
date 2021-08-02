<?php
	session_start();
	session_destroy();
	unset($_COOKIE['id_akun']);
	setcookie('id_akun',time()-604800,'/');
	
	setcookie('id_akun', '', 0, '/');

	header('location:../../');
?>