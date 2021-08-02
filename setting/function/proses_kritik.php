<?php 
	include_once('../koneksi.php');
	include_once('../system.php');

	$a=new koneksi();
	$db=$a->hubungkan();
	$sistem=new kontrols($db);

 
	$sistem->link='&msg=berhasil';
	
	$tbl2="kritik";
	$col2=array(
		"username",
		"keterangan"
	);
	$data2=array(
		$_POST['username'],
		$_POST['msg']
	);
	$sistem->masukan_data($tbl2,$col2,$data2);
	