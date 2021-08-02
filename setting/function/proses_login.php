<?php
	session_start();
	include_once('../koneksi.php');
    include_once('../system.php');
    $a=new koneksi();
    $db=$a->hubungkan();
    $sistem=new kontrols($db);
		unset($_COOKIE['id_akun']);
	setcookie('id_akun',time()-604800,'/');
	
	setcookie('id_akun', '', 0, '/');
	$user=$_POST['username'];
	$ps=$_POST['password'];
	$tampilData=$sistem->login($user,$ps);
	foreach ($tampilData as $key => $tData) {}
	// var_dump($user.' '.$tData['username'].' - '.$ps.' '.$tData['password']);
	if(($user==$tData['username'])and($ps==$tData['password']) and $tData['status']=='ok'){
		
		$_SESSION['user_akun']=$tData['username'];
		$_SESSION['id_akun']=$tData[0];
		
		// if($_POST['cookies']){
			setcookie('id_akun',$tData['username'],time()+604800,"/");
		// }
		// echo $_COOKIE['id_akun'];
		header('location:../../pages/?eRaport=selamat datang');
		// echo $_SESSION['user_akun'];
	}else{
		header('location:../../?msg=gagal&username='.$_POST['username']);
		// echo 'kk';
	}
?>