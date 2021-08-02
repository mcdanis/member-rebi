  <!-- <link rel="stylesheet" href="../../bower_components/select2/dist/css/select2.min.css"> -->

<?php
 	include_once('../koneksi.php');
    include_once('../system.php');

    $a=new koneksi();
    $db=$a->hubungkan();
    $sistem=new kontrols($db);

    function str_replace_first($from, $to, $content){
		$from = '/'.preg_quote($from, '/').'/';

		return preg_replace($from, $to, $content, 1);
	}

	$tbl="akun";
	$data="*";
	$clm="username";
	$key=$_POST['username'];
	$tampilData=$sistem->tampil_data_where($tbl,$clm,$data,$key);
	foreach ($tampilData as $key => $d) {}
    
    $textnya='Hallo%20kak%2C%20akses%20sudah%20kami%20kirim%20ke%20email%20mohon%20tunggu%20beberapa%20saat%20ya%2C%20jika%20tidak%20ditemukan%20mohon%20buka%20di%20folder%20spam%20juga%0A%0AUntuk%20login%20member%20area%20bisa%20kunjungi%0A%0Ahttps%3A%2F%2Fmember.remotebisnis.com%0A%0Ajangan%20ketinggalan%20tips%20dan%20trik%20praktis%20bisnis%20di%20WA%20Story%20saya%20%26%20Free%20Ebook%20lainya%20so%2C%20jangan%20lupa%20save%20biar%20kita%20makin%20akrab%0A%0A*Semoga%20kaka%20sehat%20selalu%20%26%20diberi%20kelancaran%20terus%2C%20aminnn*';
    if ($d['pengajuan']==1 || ($d['type_akun']=='b' && $d['status'] =='')){
        $textnya = 'Hallo%20kak%2C%20kaka%20sudah%20daftar%20Remotebisnis.com%2C%20langkah%20yang%20tepat%2C%201%20langkah%20lagi%20kaka%20bisa%20merasakan%20full%20akses%20memberarea%20REBI%2C%20dan%20merasakan%20income%20dari%20affiliate%20REBI%0A%0ASegera%20lakukan%20ransfer%20senilai%20yang%20tertera%20saat%20di%20email%20ya%20kak%0A%0ASupaya%20Akun%20kaka%20bisa%20cepat%20Full%20Akses%0A%0AKalo%20ada%20kendala%20Apapun%20jangan%20sungkan%20untuk%20bilang%20ya%20kak%0A%0A*untuk%20detail%20lainya%20bisa%20dilihat%20di%20akun%20memberarea%20kaka*';
    }

?>
<style type="text/css" media="screen">
.select2.select2-container{
	width: 100%;
    height: 100px;
    overflow: scroll;
	}
</style>
<div class="box box-primary">
	<div class="box-header with-border">
	  <h3 class="box-title"><?= $d['nama_lengkap'] ?></h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
	    <small>Klik link nomor WhatsApp dibawah untuk melakukan follow up</small><br>
	  <strong><i class="fa fa-book margin-r-5"></i> No WA : <a target="_blank" href="https://wa.me/<?= str_replace_first('0','62',$d['nowa']) ?>?text=<?= $textnya ?>">Chat WA <?= $d['nowa'] ?></a></strong>
	  <p class="text-muted">
	    <?= $d['username'] ?>
	  </p>

	  <hr>

	  <strong><i class="fa fa-map-marker margin-r-5"></i> Domisili</strong>

	  <p class="text-muted"><?= $d['domisili'] ?></p>

	  <hr>

	  <strong><i class="fa fa-globe margin-r-5"></i> Web</strong>

	  <p>
	    <a href="https://<?= $d['website'] ?>" target='_blank'>
		    <span class="label label-primary"><?= $d['website'] ?></span>
	    </a>
	  </p>

	  <hr>
	  <!-- <label>Pilih Akses</label><br> -->
      <form action="../setting/function/proses_update_akses_user.php" method="post" accept-charset="utf-8">
			<input type="hidden" value="<?php echo $d['username'] ?>" name="username">
			<input type="hidden" value="<?php echo $_POST['id_akun'] ?>" name="my">
			<input type="hidden" value="<?php echo $d['password'] ?>" name="password">
		  <!-- <select name="akses[]" multiple class="select2 " style="width: 100%; width: 100%;height: 100px;overflow: scroll;"> -->
		  	<?php 
				// $no=1;
				// $jmlakses=0;
				// $tbl="master_ecource";
				// $data="*";
				// $hakakses=$sistem->tampil_data($tbl,$data);
				// foreach ($hakakses as $value => $ha){
				
				// 	$sql = "select * from hak_akses where username='".$_POST['id_akun']."' and id_master=".$ha['id'];
				// 	$show=$sistem->tampil_manual($sql);
				// 	foreach ($show as $value => $akses) {}
	 
				// 	if ($akses['id_master']==$ha['id']) {
				// 		// selected
				// 		$sql = "select count(id) as total from hak_akses where username='".$_POST['username']."' and id_master=".$akses['id_master'];
				// 		$showakses=$sistem->tampil_manual($sql);
				// 		// echo $sql;
				// 		foreach ($showakses as $value => $akses2) {}
				// 		// echo $akses2['username'].'xxxx<br>';
				// 		if ($akses2['total']>=1) {
				// 			$selected = 'selected';
				// 		}else{
				// 			$selected='';
				// 		}
				// 		// selected
				// 		echo '<option value="'.$ha['id'].'" '.$selected.' >'.$ha['nama'].'</option>';
				// 		$jmlakses++;
				// 	}
				// }
				?>
		  <!-- </select> -->
		  <div class="hide">
			  <input type="checkbox" checked name="all"> Akses Full
		  </div>
		  <?php if ($d['pengajuan']==1 || ($d['type_akun']=='b' && $d['status'] =='')): ?>
				 <button class="btn btn-sm btn-success btn-block" onclick="return msg('Yakin Pengguna ini sudah transfer dengan benar ?')">
				 	<i class="fa fa-check-square"></i> Approv ...
				 </button>
				 <small style="color: red"><i>klik Approv jika <b>sdr.<?php echo $d['nama_lengkap'] ?></b> sudah transfer dengan bernar sesuai Nominal </i></small>
		  <?php endif ?>
		</form>
	</div>
	<!-- /.box-body -->
</div>
<script src="../../bower_components/select2/dist/js/select2.full.min.js"></script>

<script>
	  $(function () {
     $('.select2').select2();
 });
</script>