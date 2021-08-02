<?php 

	include_once('../koneksi.php');
    include_once('../system.php');

    $a=new koneksi();
    $db=$a->hubungkan();
    $sistem=new kontrols($db);
	
	$satukan = explode(" ",$_GET['q']);

	$hasil = $sistem->tampil_manual();
