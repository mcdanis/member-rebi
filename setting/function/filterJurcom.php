<?php 
		include_once('../koneksi.php');
		include_once('../system.php');

		$a=new koneksi();
		$db=$a->hubungkan();
		$sistem=new kontrols($db);

		$tbl=array("data_siswa ds"," setup_kelas sk","setup_list_siswa_kelas lsk");
		$data=array('ds.nama_siswa','sk.nama_kelas',"sk.id_kelas");
		$key=array(
		"sk.id_kelas=lsk.id_kelas",
		"lsk.id_siswa=ds.id_siswa",
		"ds.id_siswa='".$_POST['nilai']."'",
		);
		$tampilDataKelas=$sistem->tampil_data_multi_where($tbl,$data,$key);

		foreach ($tampilDataKelas as $key => $tDataKls) {
		?>
<option value="<?php echo $tDataKls['id_kelas']; ?>"><?php echo $tDataKls['nama_kelas']; ?></option>
<?php } ?>