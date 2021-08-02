<?php 
  date_default_timezone_set('Asia/Jakarta');

  setlocale(LC_TIME, 'id_ID.utf8');
  $hariIni = new DateTime();

  $hari = strftime('%A, %d %B %Y', $hariIni->getTimestamp());
  $jmlProspekHariIni = 0;

  $hariIni = $sistem->eksekusiShow('select count(username) as jml from akun where afiliasi="'.$akun['kode_afiliasi'].'" and create_at="'.$hari.'"');
  $allProspek = $sistem->eksekusiShow('select count(username) as jml from akun where afiliasi="'.$akun['kode_afiliasi'].'"');
  $totalClosingProfit = 0;
  $totalClosingProfits = $sistem->tampil_manual('select * from akun where afiliasi="'.$akun['kode_afiliasi'].'" and status="ok" and type_akun="b" ');
  foreach ($totalClosingProfits as $key => $value) {
    $totalClosingProfit += (int)$sistem->getHarga().''.$value['kode_unik'];
  }
  $jmlProspekHariIni = $hariIni['jml'];
  // echo 'select * from akun where afiliasi="'.$akun['kode_afiliasi'].'" and status="ok" and type_akun="b" ';
  // echo 'select count(username) as jml from akun where afiliasi="'.$akun['kode_afiliasi'].'" and create_at="'.$hari.'"';
  // echo 'select count(username) as jml, tahu from akun where afiliasi="'.$akun['kode_afiliasi'].'" group by tahu';
?>
<style>
  .f-25{
    font-size: 25px !important
  }
</style>
<section class="content" style="height: auto !important; min-height: 0px !important;">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3 id="profit" class="f-25">..</h3>

              <p>Potensi Profit</p>
            </div>
            <div class="icon">
              
              <i class="ion ion-pie-graph"></i>

            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3 class="f-25">Rp<?php echo number_format($totalClosingProfit) ?></h3>

              <p>Total Closing Profit</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3 class="f-25"><?php echo $jmlProspekHariIni ?></h3>

              <p>Lead Hari Ini</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="row">
        <!-- Left col -->
        <section class="col-lg-7 connectedSortable ui-sortable">
          <!-- Custom tabs (Charts with tabs)-->
          <div class="nav-tabs-custom" style="cursor: move;">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs pull-right ui-sortable-handle">
              <li class="active"><a href="#revenue-chart" data-toggle="tab">Sumber Trafic</a></li>
              <li><a href="#sales-chart" data-toggle="tab">Usia</a></li>
              <li><a href="#domisilis" data-toggle="tab">Domisili</a></li>
              <li class="pull-left header"><i class="fa fa-inbox"></i> Grafik</li>
            </ul>
            <div class="tab-content no-padding">
              <small><i>*Grafik dibawah ini diakumulasi dari seluruh Calon prospek &amp; Prospek</i></small>
              <!-- Morris chart - Sales -->
              <div class="chart tab-pane active" id="revenue-chart" style="overflow-y: scroll !important; position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 10px;">
                <?php 
                  foreach ($sistem->tampil_manual('select count(username) as jml, tahu from akun where afiliasi="'.$akun['kode_afiliasi'].'" group by tahu') as $key => $value): 
                  $percent = round(($value['jml']*100)/$allProspek['jml'],2);
                  // echo $value['jml'].'-'.$allProspek['jml'];
                  ?>
              <!-- round($number * ($total / 100),2);  -->
                  <label><?php echo $value['tahu'].' <u>'.$percent.'%</u>' ?></label>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                <?php endforeach ?>
              </div>
              <div class="chart tab-pane" id="domisilis" style="position: relative; padding: 10px">
                <?php 
                  foreach ($sistem->tampil_manual('select count(username) as jml, domisili from akun where afiliasi="'.$akun['kode_afiliasi'].'" group by domisili order by jml desc') as $key => $value): 
                ?>
                  <span class="badge badge-secondary"><?php echo $value['domisili'] ?> (<?php echo $value['jml'] ?>)</span> 
                <?php endforeach ?>
              </div>
              <div class="chart tab-pane" id="sales-chart" style="position: relative; padding: 10px">
                <?php 
                  foreach ($sistem->tampil_manual('select count(username) as jml, usia from akun where afiliasi="'.$akun['kode_afiliasi'].'" group by usia') as $key => $value): 
                  $percent = round(($value['jml']*100)/$allProspek['jml'],2);
                  // echo $value['jml'].'-'.$allProspek['jml'];
                  ?>
              <!-- round($number * ($total / 100),2);  -->
                  <label>Usia <?php echo $value['usia'].' > <u class="c-primary" >'.$percent.'%</u>' ?></label>
                  <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: <?php echo $percent ?>%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                <?php endforeach ?>
              </div>
            </div>
          </div>
          <!-- /.nav-tabs-custom -->
 
        </section>
        <section class="col-lg-5 connectedSortable ui-sortable">

          <!-- Map box -->
          <div class="box box-solid bg-light-blue-gradient" style="background: white !important">
            <div class="box-header ui-sortable-handle c-primary">
              <!-- tools box -->
              <div class="pull-right box-tools">
                <!-- <h5 id="loading" class="hide "><i class="fa fa-spin fa-spinner "></i> Mohon Tunggu ...</h5> -->
                
              </div>
              <!-- /. tools -->

              <i class="fa fa-clone"></i>

              <h3 class="box-title">
                Catatan Lainya
              </h3>
            </div>
            <div class="box-body" style="color: black">
               <span class="label label-success"><i class="fa fa-arrow-up"></i> Siap Transfer</span> <small>= Orang yang daftar Ecourse tapi belum transfer</small><br>
                <span class="label label-info">Trial</span> <small>= Orang Yang Daftar &amp; memilih 'Gratis dulu' </small><br>
                <br>
                
                Investasi Rebi Sekarang <span class="label label-primary">Rp<?php echo '199.000' ?></span><br>
                <small><i>*Nominal Investasi diatas 100% untuk Anda, jadi pastikan No Rek Terisi di Menu Profile</i></small>
                <br>
                <h4><label class="label label-success">L/P : <span id="totalLp">..</span></label></h4>
                <hr>
                <h4><label class="label label-success" id="totalTrial">...</label> </h4>
                <h4><label class=" label label-info" id="totalSiap">...</label> </h4>
            </div>
            <!-- /.box-body-->
             
          </div>
          <!-- /.box -->
 
        </section>
 
      </div>
      <!-- /.row (main row) -->

     </section>
    <section class="content">
    <!-- isi konten -->
      <div class="box box-danger">
        <div class="box-header with-border">
          <h3 class="box-title"><i class="fa fa-users"></i> LIST PROSPEK YANG ANDA MILIKI</h3>
          <h3 id="loading" class="hide"><i class=" fa fa-spinner fa-spin"></i> Loading...</h3>

        </div>
        <div class="box-body"><i>*Klik Nama Calon Prospek (CP) untuk melihat detail info &amp; <u>APPROVE</u> Jika CP sudah Transfer kepada Anda</i>
          <hr>
          <table class="table table-bordered table-striped example1">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Domisili</th>
                <th>L/P</th>
                <th>Status</th>
                <th>Tanggal Join</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                $estimasiProfit = 0;
                $tl=0;
                $tp=0;

                $ost=0;
                $ot=0;
                $no=1; foreach ($sistem->tampil_manual('select * from akun where afiliasi="'.$akun['kode_afiliasi'].'"') as $key => $value):
                $estimasiProfit+=(int)$sistem->getHarga().''.$value['kode_unik'];
                if ($value['jk']=='L') {
                  $tl++;
                }else{
                  $tp++;
                }
              ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td>
                  <a href="#edit" onclick="return detail('<?= $value['username'] ?>')">
                    <span class="label label-primary">Aksi..</span> <?php echo $value['nama_lengkap'] ?>
                  </a>
                </td>
                <td><a href="mailto:<?php echo $value['username'] ?>"><?php echo $value['username'] ?></a></td>
                <td><?php echo $value['domisili'] ?></td>
                <td><?php echo $value['jk'] ?></td>
                <td>
                  
                  <?php
                    // jika status kosong dan type akun b, berarti daftar langsung belum tf,dia bukan trial mengajukan
                    if( (($value['status']==null || $value['status']=='' || empty($value['status'])) && $value['type_akun']=='b') || 
                        $value['status']=='ok' && $value['pengajuan']=='1'
                      ){
                      echo '<span class="label label-success"><i class="fa fa-arrow-up"></i> Siap Transfer </span> | <label>Rp '.$sistem->getHarga().'.<span style="color: #E0BF0D">'.$value['kode_unik'].'</span></label>';
                      $ost++;
                    }elseif($value['status']=='ok' && $value['type_akun']=='t'){
                      // jika akun type t and status ok
                      echo '<span class="label label-info">Trial</span>';    
                      $ot++;
                    }elseif($value['status']=='ok' && $value['type_akun']=='b'){
                      echo '<span class="label label-danger">Full Akses</span>';    

                    }
                  ?>
                  
                    
                </td>
                <td><?php echo $value['create_at'] ?></td>
              </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
      <div class="modal fade" id="detail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <form action="../setting/function/proses_tambah_ecource.php" method="post" accept-charset="utf-8">
              <input type="hidden" name="link" value="dGVpbmc=">
              <input type="hidden" name="type" value="master">
              <div class="modal-header">
                <h3 class="modal-title" id="Labelmenu">Detail</h3>
              </div>
              <div class="modal-body" id="bodyDetail">
              </div>
       
          </form>
          </div>
        </div>
      </div>
    </section>
     <script>
        document.getElementById("profit").innerHTML = 'Rp<?php echo number_format($estimasiProfit) ?>';
        
        document.getElementById("totalLp").innerHTML = '<?php echo $tl.' / '.$tp?>';
        document.getElementById("totalTrial").innerHTML = '<?= $ot ?> Orang Trial';
        document.getElementById("totalSiap").innerHTML = '<?= $ost ?> Orang Siap Transfer';
          
        function detail(username){
          $('#loading').removeClass('hide');
          var my = '<?= $akun['username'] ?>';
          $.ajax({
            type: 'POST',
            url: "../setting/function/proses_tampil_detail_user.php",
            data: {"username":username,"id_akun":my},
            success: function(a) {
              $("#bodyDetail").html(a);
              $('#detail').modal('show');
            $('#loading').addClass('hide');
            }
          });
        }
     </script>