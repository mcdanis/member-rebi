<style>
	.callout-default a{
		color: blue !important
	}
</style>
<?php $sistem->cekHakAkses('b',$akun['type_akun']); ?>
<div class="box box-danger">
  <div class="box-header with-border">
    <i class="fa fa-bullhorn"></i>

    <h3 class="box-title">NEWS & NOTIFIKASI</h3>
    
  </div>
  <!-- /.box-header -->
  <div class="box-body">
   <div class="nav-tabs-custom">
      <ul class="nav nav-tabs">
        <li class="active"><a href="#tab_1-1" data-toggle="tab" aria-expanded="false">Baru ...</a></li>
        <li class=""><a href="#tab_2-2" data-toggle="tab" aria-expanded="true">Telah dibaca</a></li>
         
      </ul>
      <div class="tab-content">
        <div class="tab-pane active" id="tab_1-1">
          <form action="../setting/function/proses_tambah.php" method="post" onsubmit="javascript:return confirm('Tandai semua telah dibaca ?')">
          	<input type="hidden" name="type" value="readAll">
          	<input type="hidden" name="username" value="<?php echo $cookieId ?>">
	          <small class="pull-right">
	          	<button type="submit" class="btn btn-sm btn-info" id="readAll"><i class="fa fa-adjust"></i> Tandai Telah dibaca semua</button>
	          </small>
          </form>
          <br>
          <br>
			<?php 
				foreach ($notif as $key => $line){
					$xNotif=null;
					$sqlReadNotif=$sistem->tampil_manual("select * from read_notifikasi where username='".$cookieId."' and id_notifikasi=".$line['id']);
					foreach ($sqlReadNotif as $key => $xNotif){
						$cek = $xNotif['id'];
					}
					  if (empty($cek)) {				  
			?>
				<div class="callout callout-default" style="border-left-color: #8be8ff; background:#e4faff; ">
					<h4><?php echo $line['headline'] ?></h4>
					<p><?php echo $line['text'] ?></p>
				</div>
			<?php } $cek = null; } ?>
        </div>
        <!-- /.tab-pane -->
        <div class="tab-pane " id="tab_2-2"> 
          <?php 
				foreach ($notif as $key => $line){
					$xNotif=null;
					$sqlReadNotif=$sistem->tampil_manual("select * from read_notifikasi where username='".$cookieId."' and id_notifikasi=".$line['id']);
					foreach ($sqlReadNotif as $key => $xNotif){
						$cek = $xNotif['id'];
					}
					  if (!empty($cek)) {
			?>
				<div class="callout callout-default" style="background: #f7f7f7">
					<h4><?php echo $line['headline'] ?></h4>
					<p><?php echo $line['text'] ?></p>
				</div>
			<?php } $cek = null; } ?>
        </div>
         
      </div>
      <!-- /.tab-content -->
    </div>
  </div>
  <!-- /.box-body -->
</div>
