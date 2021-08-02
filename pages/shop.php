<?php 
  $jml = $sistem->tampil_manual('select count(id) as jml from atc where username="'.$cookieId.'"');
  foreach ($jml as $key => $value) {
    $jmlKeranjang = $value['jml'];
  }
?>
<div class="col-md-12">
  <!-- Custom Tabs -->
  <div class="nav-tabs-custom">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#hoodie" data-toggle="tab">HOODIE/JAKET</a></li>
      <li><a href="#shirt" data-toggle="tab">T-SHIRT</a></li>
      <li><a href="#mug" data-toggle="tab">MUG, BOTOL & TUMBLR</a></li>
      <li class="pull-right"><a href="?eRaport=<?= base64_encode('atc') ?>" class="text-muted"><i class="fa fa-shopping-cart"></i> <span class="label label-danger"><?php echo $jmlKeranjang ?></span></a></li>
    </ul>
    <div class="tab-content">
      <div id="notifatc" class="alert alert-success hide">
        <i class="fa fa-info"></i> Berhasil ditambahkan ke keranjang, tambahkan produk lain atau klik keranjang dan PESAN Sekarang.
      </div>
      <div class="tab-pane  " id="shirt">
        <b>Pilih Desain :</b>
        <div class="row">
          <?php 
            $tbl="produk";
            $data="*";
            $clm="type";
            $key='t';
            $mx=$sistem->tampil_data_where($tbl,$clm,$data,$key);
            $n=0;
            foreach ($mx as $key => $line):
          ?>
            <div class="col-md-3">
              <img src="https://s4.bukalapak.com/img/915246892/large/mock_up_kaos_depan_belakang_cdr_scaled.jpg" class="w-100">
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Size </b> <a class="pull-right"><?= $line['size'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Bahan</b> <a class="pull-right"><?= $line['bahan'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Rp</b> <a class="pull-right"><?= $line['rp'] ?>k</a>
                </li>
              </ul>
              <a href="#" onclick="return atc(<?= $line['id'] ?>,'<?= $cookieId ?>')" class="btn btn-sm btn-warning mt-2"><i class="fa fa-plus"></i> Keranjangkan</a>
            </div>
          <?php endforeach ?>
        </div>
      </div>
      <!-- batas produk -->
      <div class="tab-pane active" id="hoodie">
        <b>Pilih Desain Hoodie/Jaket:</b>
        <div class="row">
          <?php 
            $tbl="produk";
            $data="*";
            $clm="type";
            $key='h';
            $mx=$sistem->tampil_data_where($tbl,$clm,$data,$key);
            $n=0;
            foreach ($mx as $key => $line):
          ?>
            <div class="col-md-3">
              <img src="https://s4.bukalapak.com/img/915246892/large/mock_up_kaos_depan_belakang_cdr_scaled.jpg" class="w-100">
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Size </b> <a class="pull-right"><?= $line['size'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Bahan</b> <a class="pull-right"><?= $line['bahan'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Rp</b> <a class="pull-right"><?= $line['rp'] ?>k</a>
                </li>
              </ul>
              <a href="#" onclick="return atc(<?= $line['id'] ?>,'<?= $cookieId ?>')" class="btn btn-sm btn-warning mt-2"><i class="fa fa-plus"></i> Keranjangkan</a>
            </div>
          <?php endforeach ?>
        </div>
      </div>
      <!-- batas produk -->
      <div class="tab-pane  " id="mug">
          <b>Pilih Desain Mug dll:</b>
          <div class="row">
            <?php 
            $tbl="produk";
            $data="*";
            $clm="type";
            $key='m';
            $mx=$sistem->tampil_data_where($tbl,$clm,$data,$key);
            $n=0;
            foreach ($mx as $key => $line):
          ?>
            <div class="col-md-3">
              <img src="https://s4.bukalapak.com/img/915246892/large/mock_up_kaos_depan_belakang_cdr_scaled.jpg" class="w-100">
              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Size </b> <a class="pull-right"><?= $line['size'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Bahan</b> <a class="pull-right"><?= $line['bahan'] ?></a>
                </li>
                <li class="list-group-item">
                  <b>Rp</b> <a class="pull-right"><?= $line['rp'] ?>k</a>
                </li>
              </ul>
              <a href="#" onclick="return atc(<?= $line['id'] ?>,'<?= $cookieId ?>')" class="btn btn-sm btn-warning mt-2"><i class="fa fa-plus"></i> Keranjangkan</a>
            </div>
          <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
    <!-- /.tab-content -->
  </div>
  <!-- nav-tabs-custom -->
</div>
<script>
  
    function atc(id, username){
      $('#notifatc').addClass('hide');
      $.ajax({
        type: 'GET',
        url: "../setting/function/proses_tambah.php",
        data: {"id":id,"username":username,"type":'atc'},
        success: function(a) {
          $('#notifatc').removeClass('hide');
        }
      });
    }
  
</script>