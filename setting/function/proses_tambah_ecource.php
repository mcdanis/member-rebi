<?php
 	include_once('../koneksi.php');
    include_once('../system.php');

    $a=new koneksi();
    $db=$a->hubungkan();
    $sistem=new kontrols($db);
 
	$sistem->link=$_POST['link'];

	if ($_POST['type']=='master') {
		$tbl="master_ecource";
		$data=array($_POST['judul'],$_POST['menu']);
		$col=array("nama","id_menu");
		$sistem->masukan_data($tbl,$col,$data);//$sistem dari relasi
	}elseif($_POST['type']=='sub'){
		$tbl="line_ecource";
		$data=array($_POST['master'],$_POST['nama'],$_POST['dir'], $_POST['jenis']);
		$col=array("id_master","nama","link","type");
		$sistem->masukan_data($tbl,$col,$data);//$sistem dari relasi

	}else{
		$tbl="list_vidio";
		for ($i = 0; $i < count($_POST['judul']); $i++) {
			$data=array($_POST['yt'][$i],$_POST['judul'][$i],$_POST['master']);
			// echo $_POST['yt'][$i].'<br>';
			// echo $_POST['judul'][$i].'<br><br><br>';
			$col=array("link","judul","id_line");
			$sistem->masukan_data($tbl,$col,$data);//$sistem dari relasi
		}

	}
