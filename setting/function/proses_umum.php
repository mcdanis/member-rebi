<?php 

	include_once('../koneksi.php');
	include_once('../system.php');

	$a=new koneksi();
	$db=$a->hubungkan();
	$sistem=new kontrols($db);
	
	if ($_GET['type'] == 'cek_email') {
		$hakakses=$sistem->tampil_manual(" select count(username) as total from akun where username='".$_GET['email']."'");
		foreach ($hakakses as $value => $ha){
			$hasil = $ha['total'];
		}

		echo $hasil;
	}elseif($_POST['type'] == 'wa'){
		$tbl = "akun";
		$data = "*";                 
		$users = $sistem->tampil_manual('select * from akun');
		$no=0;

		foreach ($users as $key => $value) {

		$no++;
		// $nowa = str_replace_first('0','62',$value['nowa']);
		// $content = str_replace('{nama}',explode(' ',$value['nama_lengkap'])[0],$msg);
		// echo "<a target='_blank' href='https://wa.me/".$nowa."?text=".urlencode($content)."'>$no. ".$value['nama_lengkap']." </a> <br>";
		echo $no.' '.$value['nowa']."<br>";

		}
	}elseif($_POST['type'] == 'broadcast'){
		$tbl="group_label";
		$col=array("username","id_label");
		for ($i=0; $i < count($_POST['check']); $i++){
			$data=array($_POST['check'][$i],$_POST['label']);
			$sistem->masukan_data_luar_redirect($tbl,$col,$data);//$sistem dari relasi
		}
		echo "<script>
	window.location.replace('../../pages/?eRaport=dGVpbmc=&info=berhasil');
</script>";
	}

	
