<style>
	u{
		color: red
	}
</style>
<div class="box box-primary">
	<div class="box-header with-border">
	  <h3 class="box-title"><?= $akun['nama_lengkap'] ?></h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		<?php if ($_GET['msg']=='berhasil'): ?>
		            <div class="alert alert-success">
		            	<i class=""></i> Proses Berhasil
		            </div>
	        	<?php endif ?>


		<?php //if ($cookieId == 'admin' || $cookieId=='danisaputraakatsuki@gmail.com'): ?>
			<div style="padding: 10px;">
				<?php 
				  	if ($akun['type_akun'] != 't'): 
				?>
		    	<form action="../setting/function/proses_tambah.php" method="post">
		    		<input type="hidden" name="username" value="<?= $cookieId ?>">
		    		<input type="hidden" name="type" value="pixel">
		    		<input type="hidden" name="redirect" value="profile">
					<h3 class="c-primary"><i class="fa fa-code"></i> Pixel Setup</h3>
					<b>Business settings -> Data sources -> Pixels -> Pilih Pixel -> Copy ID</b>
					<strong>PIXEL</strong>
					<input type="text" value="<?= $sistem->getSingleField('akun','username',$akun['username'])['pixel'] ?>" class="form-control" name="pixel" placeholder="Masukan kode pixel anda disini eg: 1272635126351723" style="border:1px solid blue">
					<?php $nx=1; foreach ($sistem->tampil_manual('select * from link') as $key => $value): ?>
						<hr>
						<strong class="c-primary"><?= $nx++.'. '.$value['nama'] ?></strong><br>
						<small><?= $value['note'] ?></small>
						<input type="text" disabled class="form-control" value="<?= $value['url'].'?kaf='.$akun['kode_afiliasi'] ?>">
						<strong>Custom Event</strong><br>
						<small>Contoh: fbq('trackCustom', 'eventSaya'); fbq('track', 'AddToCart'); <u>jangan lupa ';' </u>.</small>
						<textarea name="custom_pixel[]" class="form-control" placeholder="(Opsional) masukan custom event sesuai kebutuhan"><?php foreach ($sistem->tampil_manual("select * from link_line where id_link=".$value['id']." and username='".$akun['username']."'") as $key => $cp){echo $cp['custom_pixel'];}?></textarea>
						<input type="hidden" name="id_link[]" value="<?= $value['id'] ?>">
					<?php endforeach ?>
					<hr>
					<button type="submit" class="btn-sm btn btn-danger">Simpan Setup Pixel</button>
					<br>
					<hr>
				 </form>
				<?php endif; ?>
			</div>
		<?php //endif ?>
	  <strong><i class="fa fa-book margin-r-5"></i> No WhatsApp : <?= $akun['nowa'] ?></strong> 
	  <?php if ($akun['type_akun']=='b'): ?>
		  <a href="#modaleditnomorwa" data-toggle="modal" data-target="#mdlEditNoWa"><i class="fa fa-pencil"></i> Ubah</a>
	  <?php endif ?>
<form action="../setting/function/proses_tambah.php" method="post" accept-charset="utf-8">
	  <p class="text-muted">
	    <?= $akun['username'] ?>
	  </p>

	  <hr>

	  <strong><i class="fa fa-map-marker margin-r-5"></i> Domisili</strong>

	  <p class="text-muted"><?= $akun['domisili'] ?></p>

	  <hr>

	  <strong><i class="fa fa-globe margin-r-5"></i> Web</strong>

	  <p>
	    <span class="label label-primary"><?= $akun['website'] ?></span>
	  </p>

	  <hr>
 
	  <strong><i class="fa fa-key margin-r-5"></i> Password</strong>
	  <p>
	  	<a href="#" data-toggle="modal" data-target="#mdlpass"><i class="fa fa-pencil"></i> Ubah Password</a>
	  </p>

	  <hr>
 <?php 
	  	if ($akun['type_akun'] != 't'): 
  ?>
	  <strong><i class="fa fa-comments-o margin-r-5"></i> Pesan Cepat Untuk Pengguna Trial</strong>
	  <p style="font-size: 12px; font-style: italic; ">*Pesan ini otomatis akan mengarah ke No Wa anda sebagai Autofill Text to WA <u>untuk user yang sudah registrasi member Trial/Gratis</u></p>
	  <p>
	  	<b>tebal</b> = gunakan *...* untuk menebalkan text di WhatsApp<br>
	  	<i>miring</i> = gunakan _..._ untuk memiringkan text di WhatsApp<br>
	  	<span style="text-decoration: line-through;">coret</span> = gunakan ~...~ untuk coret text di WhatsApp<br>
	  </p>
	  <p>
	  	<button type="button" class="btn-sm btn-warning" onclick="return templateTrial()">Template teks</button>
	  	<textarea name="pct" rows="6" class="form-control" id="textTemplateTrial"><?= $akun['auto_chat_trial'] ?></textarea>
	  </p>

	  <hr>
 
	  <strong><i class="fa fa-comments margin-r-5"></i> Pesan Cepat Untuk Pengguna Full Akses</strong>
	  <p style="font-size: 12px; font-style: italic; ">*Pesan ini otomatis akan mengarah ke No WA Anda sebagai Autofill Text to Wa <u>untuk user yang sudah registrasi member full akses</u></p>
	  <p>
	  	<b>tebal</b> = gunakan *...* untuk menebalkan text di WhatsApp<br>
	  	<i>miring</i> = gunakan _..._ untuk memiringkan text di WhatsApp<br>
	  	<span style="text-decoration: line-through;">coret</span> = gunakan ~...~ untuk coret text di WhatsApp<br>
	  </p>
	  <p>
	  	<button type="button" class="btn-sm btn-warning" onclick="return templateFull()">Template teks</button>
	  	<textarea  id="textTemplateFull" name="pcf" rows="6" class="form-control"><?= $akun['auto_chat_full'] ?></textarea>
	  </p>

	  

	  <hr>
	  <?php 
	endif;
	  	if ($akun['type_akun'] != 't'): 

	  		if (strlen($akun['note'])>1) {
	  			$notenya = $akun['note'];
	  		}else{
	  			$notenya = '<p>Transfer sesuai nominal ke Kerekening :</p>

					<p><strong>AN (Atas Nama) : ... </strong></p>

					<p><strong>Kode Bank A : <span class="marker">... ....</span></strong></p>

					<p><strong>No Rek A : <span class="marker">... ....</span></strong></p>

					<div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><strong><img alt="" src="https://sales.nilamanihotels.com/wp-content/uploads/2019/04/Logo-Bank-BNI-PNG.png" style="height:13px; width:40px" />&nbsp;<img alt="" src="https://upload.wikimedia.org/wikipedia/id/8/89/Jenius-logo.png" style="height:18px; width:50px" /><img alt="" src="https://cdn.freebiesupply.com/logos/large/2x/bca-bank-central-asia-logo-png-transparent.png" style="height:16px; width:50px" />&nbsp;<img alt="" src="https://maximumlife-group.com/wp-content/uploads/2019/12/mandiri.png" style="height:32px; width:60px" /><img alt="" src="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_BRI.png" style="height:12px; width:50px" /></strong></div>

					<p>Terima Kasih :)</p>';
	  		}
	  ?>

		  <strong><i class="fa fa-credit-card"></i> Detail info Transfer</strong><br>
		  <small><i>Text ini akan ditampilkan untuk arahan Transaksi/Transfer, masukan seperti NO REKENING dan catatan lainya sesuai kebutuhan</i></small><br>
			
				<input type="hidden" name="link" value="profile">
	    		<input type="hidden" name="type" value="note">
	    		<input type="hidden" name="username" value="<?= $cookieId ?>">
			  
				<textarea id="editor1" name="text" rows="10" cols="80">
					<?php echo $notenya; ?>
				</textarea>
		<?php endif ?>
		<button class="btn btn-sm btn-danger"> <i class="fa fa-save"></i> Simpan perubahan </button>
			</form>

	</div>
	<!-- /.box-body -->
</div>

<div class="modal fade" id="mdlpass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form action="../setting/function/proses_tambah.php" method="post" accept-charset="utf-8" onsubmit="return cek()">
    		<input type="hidden" name="link" value="profile">
    		<input type="hidden" name="type" value="pass">
    		<input type="hidden" name="username" value="<?= $cookieId ?>">
	        <div class="modal-header">
	          <h3 class="modal-title" id="labelSubList">Password</h3>
	        </div>
	        <div class="modal-body" id="bodySearch">
	        	<label>Password Sekarang</label>
	        	<input type="password" class="form-control" name="passLama">
	        	<input type="hidden" class="form-control" name="passLamaHidden" value="<?= $akun['password'] ?>">
	        	<label>Password Baru</label>
	        	<input type="password" class="form-control" name="passBaru">
	        	<!-- <label>Ulangi Password Baru</label>
	        	<input type="password" class="form-control" name="ulangiPassBaru"> -->
	        </div>
	        <div class="modal-footer">
	          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
	        </div>
    	</form>
    </div>
<!-- untuk uts uas -->
  <div class="control-sidebar-bg"></div>
</div> 
<script>
	function templateTrial(){
		$('#textTemplateTrial').val('Hallo kak,\nSaya sudah daftar sebagai Member Remotebisnis,\nMohon kirim Aksesnya ya kak supaya saya bisa login ke member area :),');
	}
	function templateFull(){
		$('#textTemplateFull').val('Hallo kak,\nSaya sudah daftar sebagai Member E-Course Remotebisnis.\nMohon tunggu konfirmasi pembayaranya dari saya ya :)');
	}
	function cek(){
		var passLamaHidden = $("input[name='passLamaHidden']").val();
		var passLama = $("input[name='passLama']").val();
		var passBaru = $("input[name='passBaru']").val();
		// var ulangiPassBaru = $("input[name='ulangiPassBaru']").val();

		if (passLama == passLamaHidden) {
			return true;
		}else{
			
			alert('Maaf, Password Lama tidak benar !');
			// console.log(passLama+' '+passLamaHidden);
			return false;
		}

		// if(passBaru == ulangiPassBaru){
		// 	return true;
		// }else{
		// 	alert('Maaf, Mohon Periksa Password baru dan Ulangi Password Baru !');
		// 	return false;

		// }
	}
</script>