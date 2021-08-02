
<?php
include_once('../koneksi.php');
include_once('../system.php');

$a=new koneksi();
$db=$a->hubungkan();
$sistem=new kontrols($db);


$sistem->link=base64_encode('teing');
$tbl=$_POST['tbl'];
$data=array($_POST['clm']);
$key=array($_POST['id']);
$ubah=array(
				"nama='".$_POST['title']."'"
			);
$sistem->rubah_data($tbl,$ubah,$data,$key);

