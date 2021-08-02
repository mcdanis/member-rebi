<?php
 	include_once('../koneksi.php');
    include_once('../system.php');

    $a=new koneksi();
    $db=$a->hubungkan();
    $sistem=new kontrols($db);

	$sistem->tbl=$_GET['tbl'];
	$sistem->clm=$_GET['clm'];
	if (empty($_GET['link'])) {
		$link = base64_encode('teing');
	}else{
		$link = base64_encode($_GET['link']);
	}
	$sistem->link=$link;	
	$sistem->data=$_GET['id'];
	
	$sistem->hapus_satu_data();
 	

?>