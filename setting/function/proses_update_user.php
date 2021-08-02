
<?php
include_once('../koneksi.php');
include_once('../system.php');

$a=new koneksi();
$db=$a->hubungkan();
$sistem=new kontrols($db);
$type='';
if ($_POST['full']==true) {
	$type = 'full';
}
	$sistem->link='';
	$tbl='akun';
	$data=array('username');
	$key=array($_POST['username']);
	$ubah=array(
					"type_akun='$type'"
				);
	$sistem->rubah_data($tbl,$ubah,$data,$key);

$tbl="hak_akses";
$sistem->tbl=$tbl;
$sistem->clm='username';	
$sistem->link='';	
$sistem->data=$_POST['username'];

$sistem->hapus_satu_data();


foreach ($_POST['akses'] as $key) {
	

	$data=array($_POST['username'],$key);
	$col=array("username","id_master");
	$sistem->masukan_data($tbl,$col,$data);//$sistem dari relasi


}
echo '<a href="../../pages/?eRaport='.base64_encode('teing').'">back</a>';
