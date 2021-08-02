
<?php
  session_start();
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
  include_once('../setting/koneksi.php');
  include_once('../setting/system.php');
  $a=new koneksi();
  $db=$a->hubungkan();
  $sistem=new kontrols($db);
  // cek cokies dan buat session jiika ada 

    @$cookieId=$_COOKIE['id_akun'];
    @$sesion=$_SESSION['user_akun'];
    
    $cekafiliasi = $sistem->tampil_manual('select * from akun where username="'.$cookieId.'" and status="ok" ');
    foreach ($cekafiliasi as $value => $akun) {}
    
    if(empty($cookieId) || count($akun)<=0){
        
        echo '<script>
                  window.location.replace("https://member.remotebisnis.com/setting/function/proses_logout.php");
        </script>';

     }
  $filterTgl=date('j');
  $thn=date('Y');
  if($filterTgl>6){
    $semestert=1;
    $thnAjaran=($thn-1)."/".$thn;
  }else{
    $semestert=2;
    $thnAjaran=$thn."/".$thn+1;
  }
  // 
  // cek seting


  $cekafiliasioranglain = $sistem->tampil_manual('select * from akun where kode_afiliasi="'.$akun['afiliasi'].'"');
      foreach ($cekafiliasioranglain as $values => $akunafiliasi) {}
 
  $tbl="akun";
  $materi=$sistem->tampil_manual("select * from akun where type_akun='b' and status='ok' and afiliasi='".$akun['kode_afiliasi']."'");
  $nn=0;
  foreach ($materi as $key => $jml){
    $nn++;
  }

  $list=$sistem->tampil_manual("select * from akun where (type_akun='t' or status='') and afiliasi='".$akun['kode_afiliasi']."'");
  // $list=$sistem->tampil_manual("select * from akun where (type_akun='t' or status='') and afiliasi='".$akun['kode_afiliasi']."'");
  $nnx=0;
  foreach ($list as $key => $jml){
    $nnx++;
  }

  $notif=$sistem->tampil_manual(" select * from notifikasi order by id desc ");
  foreach ($notif as $key => $line){
    $sqlReadNotif=$sistem->tampil_manual("select * from read_notifikasi where username='".$cookieId."' and id_notifikasi=".$line['id']);
    foreach ($sqlReadNotif as $key => $xNotif){
     $cek = $xNotif['id'];
    }
    if (empty($cek)) {
      $jmlNotif++;
    }
    $cek = null;
  }

  function hp($nohp) {
     // kadang ada penulisan no hp 0811 239 345
     $nohp = str_replace(" ","",$nohp);
     // kadang ada penulisan no hp (0274) 778787
     $nohp = str_replace("(","",$nohp);
     // kadang ada penulisan no hp (0274) 778787
     $nohp = str_replace(")","",$nohp);
     // kadang ada penulisan no hp 0811.239.345
     $nohp = str_replace(".","",$nohp);
 
     // cek apakah no hp mengandung karakter + dan 0-9
     if(!preg_match('/[^+0-9]/',trim($nohp))){
         // cek apakah no hp karakter 1-3 adalah +62
         if(substr(trim($nohp), 0, 3)=='+62'){
             $hp = trim($nohp);
         }
         // cek apakah no hp karakter 1 adalah 0
         elseif(substr(trim($nohp), 0, 1)=='0'){
             $hp = '62'.substr(trim($nohp), 1);
         }
     }
     return $hp;
 }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Member Area RemoteBisnis</title>
  <link rel="shortcut icon" href="../img/logoer.png">
  <link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '515914853189009');
    fbq('trackCustom', 'memberVisit');
  </script>
  <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=515914853189009&ev=PageView&noscript=1"
  /></noscript>
  <style type="text/css">
    .img-mini{
      max-height: 60px;
      max-width: 60px;
    }
    .dataTables_paginate,.dataTables_filter{
      text-align: right;
    }
    .txtBlack tr,.txtBlack{
      color: #595757;
    }
    .cB{
      background: red;
    }
    .bga{
      background: #EBEBEB;
    }
    .skin-blue .sidebar-menu .treeview-menu>li.active>a{
      color: #00ffe7 !important
    }
    .w-100{
    	width: 100%
    }
    .mt-2{
    	margin-top: 5px;
    }
    .nav-tabs .active{
    	border-top-color: #F39C12 !important;
    }
    .b{
      font-weight: bold;
    }
    .main-header .sidebar-toggle.xx:before {
      content: '\f02c' !important;
    }
    .bg-green{
      background: #03502d;
    }
    #detail-upgrade span{
		color: #fff700;
		font-weight: bold;
		text-decoration: underline;
    }
    .f-15{
      font-size: 15px;
    }
    .h-u:hover{
      text-decoration: underline !important;
    }
    .c-primary{
      color:#c52730 !important
    }
    body{
      font-family: 'Poppins' !important
    }
    .slimScrollBar{
      background: rgb(212, 212, 212) !important;
      display: block !important;
      opacity: 1 !important;
    }
    .w-80{
      width: 80%;
    }
    .bg-message{
      padding: 10px;
      background: #ecf0f5;
      color: black;
    }
    .note{
      font-size: 11px;
      line-height: 19px;
    }
    @media only screen and (max-width: 600px){
      .sm-p-0{
        padding: 0px;
      }
      .sm-f-15{
        font-size: 15px !important
      }
    }
    .today{
        background:#eaeaea !important;
    }
    .cursor-pointer{
        cursor:pointer;
    }
    #for-free-h4 div div h4{
        font-size:20px !important;
    }
  </style>
</head>
<body class="hold-transition skin-blue fixed sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <a href="?eRaport=<?php echo 'selamat';?>" class="logo">
      <span class="logo-mini"><b>REBI</b></span>
      <span class="logo-lg"><b>member.remote</b>bisnis.com</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <?php if ($akun['type_akun']=='t'): ?>
        <a href="#" data-toggle="modal" data-target="#update" class="sidebar-toggle xx pull-right" style="background:gold; color: black">
          Upgrade untuk Full Akses + Bonus
        </a>
      <?php endif ?>
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- <li>
            
              <input style="margin-top: 8px;" type="text" name="q" id="q" class="form-control" placeholder="cari e-course disini ">
             
          </li>
          <li>
              <button style="margin-top: 8px;" type="submit" id="searchsub" class="btn btn-primary"><i class="fa fa-search"></i></button>
          </li> -->
          <?php if ($cookieId == 'admin' || $cookieId=='danisaputraakatsuki@gmail.com'): ?>
          <li>
            <a href="?eRaport=<?php echo base64_encode('teing') ?>" > 
              <i class="fa fa-building"></i>
            </a>
          </li>
          <?php 
	      endif;
            if(empty($tData['gambar'])){
              $gambar="simple.png";
            }else{
              $gambar=$tData['gambar'];
            }
          ?>
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              
              <span class="hidden-xs"><?php echo $cookieId; ?></span>
            </a>
            <ul class="dropdown-menu">
              <li class="user-header">
                
                <p>
                  <?php echo $cookieId; ?>
                  <small>Aktif</small>
                </p>
              </li>

              <!-- Menu Footer-->
              <li class="user-footer">
               
                <div class="pull-right">
                  <a href="../setting/function/proses_logout.php" class="btn btn-default btn-flat">Keluar</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="../dist/img/logo.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $tagNama ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
    
      <ul class="sidebar-menu" data-widget="tree">
         
          <li class="">
            <a href="?eRaport=">
              <i class="fa fa-home"></i> <span>Home</span>

            </a> 
          </li>
           
          <?php if ($akun['type_akun'] != 't'): ?>
            <li>
              <a href="?eRaport=<?= base64_encode('list_prospek') ?>">
                <i class="fa fa-users"></i> Prospek/Lead Anda 
              </a>
            </li>
            <li>
              <a href="?eRaport=<?= base64_encode('news') ?>"><i class="fa fa-newspaper-o"></i> 
                News
                <?php 
                  if ($jmlNotif!==0) {
                ?>
                <span class="pull-right-container">
                  <span class="label label-danger pull-right"><?php echo $jmlNotif ?></span>
                </span>
                <?php } ?>
              </a>
            </li>
            <li class="">
              <a href="?eRaport=<?= base64_encode('guide') ?>">
                <i class="fa fa-map-signs"></i> <span>Panduan</span>
              </a>
            </li>
            <li>
              <a href="#kritik" data-toggle="modal" data-target="#cariecourse"><i class="fa fa-search"></i> Cari Vidio Ecourse</a>
            </li>
          <?php endif; if ($cookieId == 'admin'): ?>
	          <li>
	            <a href="?eRaport=<?= base64_encode('shop') ?>"><i class="fa fa-shopping-cart"></i> 
	              Merchandise Kami
	              <span class="pull-right-container">
	                <i class="fa fa-circle" style="color: red"></i>
	              </span>
	            </a>
	          </li>
          <?php endif ?>
          <li class="header">E-COURSE</li>
           <?php 
           if ($akun['type_akun'] == 't') {
              
              $materifree=$sistem->tampil_manual('select * from menu where luncurkan=1');
              foreach ($materifree as $key => $freemenu):  
        				$fa='fa-lock';
        				if ($freemenu['typ'] == 1) {
        					$fa=$freemenu['fa'];
        				}
            ?>
              <li class="treeview">
                <a href="#">
                  <i class="fa <?php echo $fa; ?>"></i> <span><?= $freemenu['nama'] ?></span>
                  <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                  </span>
                </a>
                 <ul class="treeview-menu dataMenu" >
                  <?php
                    $sql = "select * from master_ecource where id_menu=".$freemenu['id'];
                    $menuline=$sistem->tampil_manual($sql);
                    foreach ($menuline as $value => $namamenu):
                    	$url = '#';
		              	$falist='fa-lock';
		              	if ($freemenu['typ'] == 1) {
		              		$url = "?eRaport=".base64_encode('ecource')."&idx=".$namamenu['id'];
			              	$falist='fa-list';
		              	}

                  ?>
                    <li id="active<?= $namamenu['id'] ?>">
                      <a class="alink x" href="<?php echo $url ?>">
                        <i class="fa <?php echo $falist;  ?>"></i> <?= $namamenu['nama'] ?>
                      </a>
                    </li>
                  <?php endforeach ?>
                 </ul>
               </li>
            <?php 
              endforeach; 
              // show all for trial
            ?>

            <?php
              // batas show all
               }
            ?>
      	<?php 
  			$tbl="menu"; 
  			$data="*";
  			$n0=1;
  			$menuall=$sistem->tampil_data($tbl,$data);
  			foreach ($menuall as $key => $namamenuutama){
      	?>
        <li class="treeview" id="remove<?php echo $namamenuutama['id'] ?>">
          <a href="#">
            <i class="fa <?= $namamenuutama['fa'] ?>"></i> <span><?= $namamenuutama['nama'] ?></span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          
           <ul class="treeview-menu dataMenu" style="overflow-x: scroll;" id="menuul<?= $namamenuutama['id'] ?>">
            <?php if ($n0<=1): ?>
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-search" style="color: white"></i> <input type="text" class="mySearch" placeholder="Search.." title="Type in a category">
            <?php endif ?>
            
            <?php 
            	$n0++;
              $no=1;
              $noSub=0;
              $tbl="hak_akses";
              $data="*";
              $clm="username";
              $key=$cookieId;
              $materi=$sistem->tampil_data_where($tbl,$clm,$data,$key);
              foreach ($materi as $key => $tDataKl):
                $sql = "select * from master_ecource where id_menu=".$namamenuutama['id']." and id=".$tDataKl['id_master'];
                
        				$show=$sistem->tampil_manual($sql);
        				foreach ($show as $value => $namamenu) {
        					$nm= $namamenu['nama'];
                  $noSub++;
            ?>
              
              <li id="active<?= $tDataKl['id_master'] ?>">
                <a class="alink s" href="?eRaport=<?= base64_encode('ecource') ?>&idx=<?= $tDataKl['id_master'] ?>&menuul=<?= $namamenuutama['id'] ?>">
                  <i class="fa fa-list"></i> <?= $no++.'. '.$nm ?>
                </a>
              </li>
            <?php } endforeach ?>
                         
          </ul>
	      </li>
		<?php 
        if ($noSub<1) {
    ?>
      <style>
        #remove<?php echo $namamenuutama['id']; ?>{
          display: none
        }
      </style>
    <?php
        }
      } 
    ?>
    
    <li class="header">NAVIGASI LAINNYA</li>
    <?php if ($akun['type_akun'] != 't'): ?>
		<!-- <li class="treeview">
			<a href="#ook">
				<i class="fa fa-bug"></i> <span>Quick Hack</span>
				<span class="pull-right-container">
					<i class="fa fa-angle-left pull-right"></i>
				</span>
			</a>
			<ul class="treeview-menu dataMenu">
				<li>
					<a href="?eRaport=<?= base64_encode('asset') ?>&type=wa" title="">WA Sender</a>
				</li>
				<li>
					<a href="?eRaport=<?= base64_encode('asset') ?>&type=canva" title="">Desain Pake Canva</a>
				</li>
				<li>
					<a href="?eRaport=<?= base64_encode('asset') ?>&type=trelo" title="">Manage Pekerjaan</a> 
				</li>
			</ul>
		</li> -->
      
      <li class="treeview">
        <a href="#ook">
          <i class="fa fa-file-archive-o"></i> <span>Template & Asset</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu dataMenu">
          <li>
            <a href="?eRaport=<?= base64_encode('asset') ?>&type=ytlinkgold" title="">Link Vidio E-Course Gold</a>
          </li>
          <li>
            <a href="?eRaport=<?= base64_encode('asset') ?>&type=img" title="">Gambar Promosi</a>
          </li>
          <li>
            <a href="?eRaport=<?= base64_encode('asset') ?>&type=vidio" title="">Vidio Promosi</a>
          </li>
          <li>
            <a href="?eRaport=<?= base64_encode('asset') ?>&type=zip" title="">Template Desain</a>
          </li>
          <li>
            <a href="?eRaport=<?= base64_encode('asset') ?>&type=supplier" title="">Database Supplier</a>
          </li>
          <li>
            <a href="?eRaport=<?= base64_encode('asset') ?>&type=tools" title="">Tools/App</a>
          </li>
          
            <li>
              <a href="?eRaport=<?= base64_encode('asset') ?>&type=copy" title="">Copywriting</a>
            </li>          
        </ul>
      </li>
    <?php 
      endif;
      if ($akun['type_akun'] != 't'): 
    ?>
	    
	<?php endif ?>
		<li class="">
			<a href="?eRaport=<?= base64_encode('profile') ?>">
				<i class="fa fa-user"></i> <span>Profile</span>
			</a>
		</li>   
    <?php if ($akun['type_akun'] != 't'): ?>
      <li>
        <a href="#kritik" data-toggle="modal" data-target="#kritik">
          <i class="fa fa-comment"></i> <span>Beri Kritik/Saran</span>
        </a>
      </li>    
    <?php endif ?>
    	<li>
            <a href="../setting/function/proses_logout.php"><i class="fa fa-sign-out"></i> Keluar</a>
    	</li>
      </ul>
    </section> 
  </aside>
	<div class="modal fade" id="kritik" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	  	<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			</button>
		</div>
	    <div class="modal-content">
	    	<form action="../setting/function/proses_kritik.php" method="post" accept-charset="utf-8">
	    		<input type="hidden" name="link" value="<?= base64_encode('teing') ?>">
	    		<input type="hidden" name="type" value="master">
		      <div class="modal-header">
		        <h3 class="modal-title" id="Labelmenu"><i class="fa fa-comment"></i> Beri kami Kritik / Saran</h3>
		         
		      </div> 
		      <div class="modal-body">
		      	<label>Masukan Kritik dan Saran</label>
		      		<input type="hidden" name="username" value="<?= $akun['username'] ?>">
			        <textarea rows="10" cols="10" name="msg" class="form-control" placeholder="masukan kritik dan saran teman-teman dengan kata-kata yang sopan dan membangun, karena saran dan kritik semuanya akan sangat bermanfaat bagi pengembangan fitur untuk teman-teman sekalian."></textarea>
		      	 
		      </div>
		      <div class="modal-footer">
		        <button type="submit" class="btn btn-primary"><i class="fa fa-send"></i> Kirimkan</button>
		      </div>
		  </form>
	    </div>
	  </div>
	</div>
  <div class="modal fade" id="cariecourse" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
    </div>
      <div class="modal-content">
        
          <div class="modal-header">
            <h3 class="modal-title" id="Labelmenu"><i class="fa fa-search"></i> Tulis kata uncuk mencari Vidio E-Course</h3>
          </div> 
          <div class="modal-body">
            
              <small><i>*Cari dengan memasukan keyword :)</i></small>
              <input type="text" class="form-control" name="q" id="field_cari" placeholder="tulis penggalan kata">
          </div>
          <div class="modal-footer">
            <button type="button" onclick="return cari()" class="btn btn-primary"> Cari ..</button>
          </div>
      
      </div>
    </div>
  </div>
  <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true" style="font-size: 50px">&times;</span>
			</button>
        <div class="text-center">
          <br>
             
          <div class="alert alert-success hide" id="notifpengajuan">
              <h4><i>Segera ikuti langkah dibawah ini untuk mendapatkan FULL AKSES Memberarea & komisi 100%</i></h4>
              <h1 style="color: #a7540d;font-weight: bold;text-decoration: line-through;">Rp255.000</h1>
              <h3>CUMA</h3>
              <h2 class="bg-green">Rp<?= $sistem->getHarga() ?>.<span style="color: gold" class="pricelast"><?= $akun['kode_unik'] ?></span></h2> 
              <?= $akunafiliasi['note'] ?>
              <label style="font-size: 18px;">Konfirmasi Pembayaran ke Wa : <a href="https://wa.me/<?= hp($akunafiliasi['nowa']) ?>"><?= $akunafiliasi['nowa'] ?></a></label>
              <br>Terima kasih :)
              <br>
              <br>
              <a class="btn btn-sm btn-info" href="https://member.remotebisnis.com/invoice.php?kaf=<?= $akun['afiliasi'] ?>&type=b&price=<?= $akun['kode_unik'] ?>" target="_blank"><i class="fa fa-download"></i> Unduh Invoice</a>
            </div>
          <?php if ($akun['pengajuan'] == '1'): ?>
            <div class="alert alert-success" id="">
              <h4><i>Segera ikuti langkah dibawah ini untuk mendapatkan FULL AKSES Memberarea & komisi 100%</i></h4>
              <h1 style="color: #a7540d;font-weight: bold;text-decoration: line-through;">Rp249.000</h1>
              <h3>CUMA</h3>
              <h2 class="bg-green">Rp<?= $sistem->getHarga() ?>.<span style="color: gold" class="pricelast"><?= $akun['kode_unik'] ?></span></h2>
              <?= $akunafiliasi['note'] ?>
              <label style="font-size: 18px;">Konfirmasi Pembayaran ke Wa : <a href="https://wa.me/<?= hp($akunafiliasi['nowa']) ?>"><?= $akunafiliasi['nowa'] ?></a></label>
              <br>Terima kasih :)
              <br>
              <br>
              <a class="btn btn-sm btn-info" href="https://member.remotebisnis.com/invoice.php?kaf=<?= $akun['afiliasi'] ?>&type=b&price=<?= $akun['kode_unik'] ?>" target="_blank"><i class="fa fa-download"></i> Unduh Invoice</a>
            </div>
          <?php endif ?>
          <div class="alert alert-info">
          	<h3>Manfaat Upgrade Member</h3>
            <h3 class="text-center" style="font-style: italic;color: black;font-weight: bold;">"Tools REBI akan Menunjang <u>CITA-CITAMU</u> dengan income tambahan yang pantastis"</h3>
          	<div style="text-align: left;" id="detail-upgrade">
      				<i class="fa fa-check"></i> Satu satunya Penyedia Sistem untuk berjualan produk digital <span>tanpa ribet</span><br>
      				<i class="fa fa-check"></i> Cocok Untuk Kamu yang ingin belajar bisnis Digital mulai dari <span>Bisnis Online, Fb Ads ,IG Ads,Google Ads sampai mahir, dll</span><br>
      				<i class="fa fa-check"></i> Akses MemberArea <span>Selamanya</span> !<br>
      				<i class="fa fa-check"></i> E-Course yang bisa dipelajari & dijual kembali dengan <span>Komisi 100%</span><br>
      				<i class="fa fa-check"></i> Sekali Bayar<br>
      				<i class="fa fa-check"></i> Akses Materi <span>24 Jam</span><br>
      				<i class="fa fa-check"></i> Hemat Jutaan Untuk Membuat website dan sistem jualan produk digital<br>
      				<i class="fa fa-check"></i> Akses Grup Premium<br>
              <i class="fa fa-check"></i> Materi Update Berkala<br>
              <i class="fa fa-check"></i> Free Konten Ads<br>
              <i class="fa fa-check"></i> Free Tools & Tips Hack<br>
              <i class="fa fa-check"></i> Free Copywriting siap contek<br>
              <i class="fa fa-check"></i> Wa Broadcast Tools<br>
              <i class="fa fa-check"></i> 900++ Database Supplier dari semua jenis Produk<br>
      				<i class="fa fa-check"></i> Total <span>29 jenis E-Course dan 528+ Vidio E-Course, E-Book/Modul 200+</span> yang didapatkan<br>
          		<br><label style="font-size: 19px;">Lihat Manfaat lainya di <a target="_blank" href="https://member.remotebisnis.com/landing_page.php?kaf=<?php echo $akun['afiliasi'] ?>">Klik Disini</a></label><br>
          	</div>
          </div>
          <?php if ($akun['pengajuan'] != '1'): ?>
            <h1 style="color: #a7540d;font-weight: bold;text-decoration: line-through;">Rp255.000</h1>
              <h3>CUMA</h3>
            <h2>Rp<?= $sistem->getHarga() ?>.<span style="color: gold;font-weight: bold" class="pricelast"><?= $akun['kode_unik'] ?></span></h2> 
            <b>KLIK</b> <br>
            <a href="#goakses" onclick="return upgrade()" class="btn btn-lg btn-primary"><i class="fa fa-arrow-up"></i> <i class="fa fa-spin fa-spinner hide" id="loadingx"></i> Upgrade Sekarang</a><br>
          <?php endif ?>
          <br>
          <br>
        </div>
      </div>
    </div>
  </div>
  <div class="content-wrapper">
     <section class="content">
     <!-- isi konten -->
      <?php
        @$data=base64_decode($_GET['eRaport']);
        $file =isset($data) ? $data.'.php' : 'not_found';
        if (file_exists($file)){
          include_once($file);
        }else{  

          $tbl="setup_jurusan";
          $data="*";
          $tampilData=$sistem->tampil_data($tbl,$data);
      ?>
   
      <section class="content">
       
        <div class="box box-solid">
            <div class="box-header">
              <i class="glyphicon glyphicon-tasks"></i>
              <h3 class="box-title">Beranda</h3>
	            <?php if ($_GET['msg']=='berhasil'): ?>
		            <div class="alert alert-success">
		            	<i class=""></i> Proses berhasil !
		            </div>
	        	<?php endif ?>
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
          
              </div>
            </div>
            <div class="box-footer text-black">
 
              <div class="row">

                <div class="col-lg-12 col-xs-12">
                    <h2 style="text-align: center;">Selamat Datang, <?php echo $akun['nama_lengkap'] ?></h2>
                
                    <div class="text-center" id="for-free-h4">
                        <?php if ($akun['type_akun'] == 't'): ?>
                            <h3><i class="fa fa-warning"></i> Manfaat Berbisnis 'Affiliate' Bareng REBI <i class="fa fa-warning"></i></h3>
                            
                            <div class="col-md-6 col-sm-12" style="padding:3px;">
                                <div class="alert alert-success" style="border:6px dotted black">
                                    <h4><i class="fa fa-comment"></i> FREE TOOLS WA BROADCAST <br></h4>
                                    <p>
                                        Tahu kan susahnya kirim pesan ke banyak no WA ? dan dengan fitur ini kirim pesan kebanyak no WA makin Mudah
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12" style="padding:3px;">
                                <div class="alert alert-success" style="border:6px dotted black">
                                    <h4><i class="fa fa-list-o"></i> 900+ DATA SUPPLIER</h4>
                                    <p>Mau jualan Produk Fisik apa aja semua supplier ada di REBI, jadi mau jualan produk Digital atau Fisik semua ada di REBI</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12" style="padding:3px;">
                                <div class="alert alert-success" style="border:6px dotted black">
                                    <h4><i class="fa fa-code"></i> PASANG CODE PIXEL</h4>
                                    <p>
                                        Anda Bisa pasang Kode Pixel untuk setiap landingpage REBI, dengan kata lain landing page ber Referal Anda akan merekam semua aktivitas di Landingpage Rebi ke Pixel Anda
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12" style="padding:3px;">
                                <div class="alert alert-success" style="border:6px dotted black">
                                    <h4><i class="fa fa-check"></i> KOMISI 100%</h4>
                                    <p>
                                        Intinya jika ada member join via link afiliasi Anda 100% komisi untuk Anda dan Sudah Balik Modal deh, akses dapat selamanya & modal sudah balik
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12" style="padding:3px;">
                                <div class="alert alert-success" style="border:6px dotted black">
                                    <h4><i class="fa fa-user"></i> PRIVATE DEEP KONSULTASI</h4>
                                    <p>
                                        Konsultasi hingga teknis dalamnya? apapun seputar bisnis bisa Anda tanyakan disini full suport hampir 24 jam
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12" style="padding:3px;">
                                <div class="alert alert-success" style="border:6px dotted black">
                                    <h4><i class="fa fa-bookmark"></i> EBOOK PREMIUM</h4>
                                    <p>Saya pun sudah menyiapkan ebook premium yang bisa membantu Anda dalam Menunjang Bisnis Anda</p>
                                </div>
                            </div>
                             
                            
                            <div class="col-md-12 col-sm-12 text-center">
                                <h4 class="" style="
                                background: yellow;
                                padding: 5px;
                                color: black;
                                text-decoration:underline
                                ">Mau Join ?, Klik tombol Kuning di Pojok</h4>
                                <b>Manfaat REBI Lainya <a href="https://member.remotebisnis.com/landing_page_aff.php" target="_blank">lihat di halaman ini</a></b>
                                
                                <hr>
                                <b>HALAMAN MEMBER EKSKLUSIF</b>
                            </div>
                            
                        <?php endif; ?>
                        <img src="https://duniaundercover.files.wordpress.com/2021/07/screenshot_select-area_20210707203737.png" style="width:100%">
                        <?php if ($akun['type_akun'] == 't'): ?>
                            <p>Tampilan Full Akses Memberarea V2</p>
                            <iframe width="100%" height="413" src="https://www.youtube.com/embed/qdw61J6trWQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <?php endif; ?>
                    </div>
                 
                
                <hr>
                <!--<h3 style="text-align: center;">Apa yang ada di Full Akses Memberarea ?</h3>-->
                <!--<iframe width="100%" height="413" src="https://www.youtube.com/embed/7I7Bc3l3W-4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->

                <div class="alert alert-success">
                <i class="fa fa-warning"></i> *Disclaimer : <br> Semua E-Course di sini di embed dari youtube tetapi tidak public, jadi anda hanya bisa mengakses vidio E-Course melalui member area remotebisnis, dengan kata lain E-Course ini tidak bisa di Cari di Youtube,
                <br>
                <br>
                </div>
                
                <?php if ($akun['type_akun'] != 't'): ?>
                  <div class="alert alert-danger">
                  <i class="fa fa-warning"></i> *PENTING : <br> Pastikan <u>'Detail info Transfer' di menu <i class="fa fa-user"></i> <span>Profile</span></u> sudah terisi penuh
                  <br>
                  <br>
                  </div>
                	<div style="overflow-x: scroll;">
                    <h3>Siapapun yang daftar lewat link dibawah ini akan menjadi prospek anda :)</h3>
                    <?php $nx=1; foreach ($sistem->tampil_manual('select * from link') as $key => $value): $nx++ ?>
  	                  <h5><i class="fa fa-copy"></i> Copy Link <b><?= $value['nama'] ?>:</b> </h5>
  	                  <p class="bg-message note">
                       <?= $value['deskripsi'] ?>
                      </p>
                      <div class="input-group input-group-sm">
                            <span class="input-group-btn">
                              <button type="button" class="btn btn-danger btn-flat" onclick="return copy('id<?= $nx ?>')">Copy Link</button>
                            </span>
                        <input id="id<?= $nx ?>" type="text" class="form-control" value="<?= $value['url'] ?>?kaf=<?= $akun['kode_afiliasi'] ?>">
                      </div>
                      <br>
	                  <?php endforeach ?>
	                  <br>
	                  <br>
	                </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                  <div class="small-box bg-aqua">
                    <div class="inner">
                      <h3 class="totalrombel"><?= $nn ?></h3>
                      <p><b>Prospek</b></p>
                      <br>
                      <small>Orang yang sudah mendaftar E-course berbayar kepada anda</small>
                    </div>
                    <div class="icon">
                      <i class="fa fa-institution"></i>
                    </div>
                    <label></label>
                  </div>
                </div>
                <div class="col-lg-3 col-xs-6">
                  <a href="?eRaport=<?= base64_encode('list_prospek') ?>">
                    <div class="small-box bg-red">
                      <div class="inner">
                        <h3 class="totalrombel"><?= $nnx ?></h3>
                        <p><b>Mendaftar</b></p>
                        <br>
                        <small>Orang yang belum mendaftar E-course berbayar di anda</small>
                      </div>
                      <div class="icon">
                        <i class="fa fa-users"></i>
                      </div>
                      <label></label>
                    </div>
                  </a>
                </div>
                <div class="col-lg-10 col-xs-12 col-sm-12 col-md-10">
                  <hr>
                  <h4><i class="fa fa-users"></i> Join Komunitas biar bisa diskusi dan saling bantu 🧐</h4>
                  <label class="f-15">Grup Facebook <i class="fa fa-info-circle f-15" data-toggle="popover" title="Kenapa Grup FB" data-content="Semua orang punya FB, dan di FB lebih terstruktur jika ingin bertanya, lebih mudah untuk saling kutip, so lebih baik di FB grupnya :)"></i></label> : <br>
                  <a class="h-u label label-warning f-15" target="_blank" href="https://www.facebook.com/groups/4402165229807781"><i class="fa fa-facebook"></i> Grup Facebook</a> <br><br>
                  <label class="f-15">Subrek Youtube <i class="fa fa-info-circle f-15" data-toggle="popover" title="YouTube Channel" data-content="Subrek dan dapatkan vidio seputar bisnis Gratis"></i></label> : <br>
                  <a class="h-u label label-warning f-15" target="_blank" href="https://www.youtube.com/channel/UC9TI5Hf_cuGmOUL7SsUVu3w"><i class="fa fa-youtube"></i> Lihat Youtube</a> <br><br>
                  <label class="f-15">Cenel Telegram <i class="fa fa-info-circle f-15" data-toggle="popover" title="Telegram" data-content="Telegram lebih mudah digunakan dan kapasitas member bisa banyak jadi disini kita akan sharing ilmu bisnis :)"></i></label> : <br>
                  <a class="h-u  label label-warning f-15" target="_blank" href="http://t.me/rebi_mcdani"><i class="fa fa-telegram"></i> t.me/rebi_mcdani</a> <br><br>
                  <label class="f-15">Konsultasi Bisnis Anda, Gratis ke <i class="fa fa-info-circle f-15" data-toggle="popover" title="Konsultasi" data-content="Konsultasi kapanpun tentang bisnis kamu/bisa curhat juga hehhe"></i></label> : <br>
                  <a class="h-u  label label-warning f-15" target="_blank" href="http://wa.me/6283165724269"><i class="fa fa-comment"></i> 0831 6572 4269</a> <br><br>
                  Save juga no WA Admin REBI Official <b>0831-6572-4269</b> dan dapatkan ilmu praktis & motivasi bisnis Terupdate
                  <br>

                  

                </div>
              <?php endif ?>
                 
              </div>
                
            </div>
          </div> 
      </section>
      <!-- batas panel jurusan -->
      <?php } ?>
    <!-- batas ini konetsen get -->
    </section>
    <button data-toggle="modal" data-target="#mdlwa" style="z-index:21px;border:1px solid; position:fixed;right: 21px;background: red;bottom: 16px;padding: 10px;color: white;/* border-radius: 50%; */font-size: 18px;font-weight: bold;border-radius: 5px;"><i class="fa fa-whatsapp"></i> Bantuan..</button>
  </div>
  
   
  <!-- batas modal upload data guru -->
  <footer class="main-footer no-print">
    <div class="pull-right hidden-xs">
      <b>Version</b> 3
    </div>
    <strong>Copyright &copy;  <a href="#">Rebi v3</a>.</strong> All rights
    reserved.
  </footer>
<!-- untuk uts uas -->
<!--popup wa-->
<div class="modal fade" id="mdlwa" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h3 class="modal-title" id="exampleModalLabel">Tanyakan Pertanyaan Anda !</h3>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <small>*Pertanyaan akan diredirect ke WhatsApp Admin REBI</small>
        <textarea class="form-control" id="q" placeholder="Masukan pertanyaan disini ..."></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-danger" onclick="return kirimWa()"><i class="fa fa-send"></i> Tanyakan</button>
      </div>
    </div>
  </div>
</div>
<!-- nowa edit -->
<div class="modal fade" id="mdlEditNoWa" tabindex="-1" role="dialog" >
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <b class="modal-title" id="exampleModalLabel">Edit No WhatsApp</b>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
        <form action="../setting/function/proses_tambah.php" method="post">
          <input type="hidden" value="editWa" name="type">
          <input type="hidden" value="profile" name="redirect">
          <input type="hidden" value="<?= $akun['nowa'] ?>" name="nowalama">
          <input type="hidden" value="<?= $akun['username'] ?>" name="username">
          <div class="modal-body">
            <p>
              <i><span class="c-primary">*</span>Yakin merubah no WhatsApp ?, merubah kontak whatsapp membuat calon prospek anda kesulitan menghubungi anda, pastsikan setelah ini anda memberitahu mereka</i>
            </p>
              No WhatsApp sekarang : <label><?= $akun['nowa'] ?></label>
              <input type="text" class="form-control" value="08" name="nowa">
              <i>Gunakan Format : 0852339xxxxx</i>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-danger" onclick="return msg('Yakin untuk merubah no WhatsApp ?')"><i class="fa fa-edit"></i> Rubah</button>
          </div>
        </form>
    </div>
  </div>
</div>
<!--popup wa-->
<div class="modal fade" id="mdlSearch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
          <h3 class="modal-title" id="labelSubList">Hasil pencarian</h3>
           
        </div>
        <div class="modal-body" id="bodySearch">
           
        </div>
        <div class="modal-footer">
          
          <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
        </div>
   
    </div>
<!-- untuk uts uas -->
  <div class="control-sidebar-bg"></div>
</div> 



<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script> 
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>

<!-- jQuery 3 -->

<script src="../bower_components/js/tooltip.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.js"></script>
<!-- SlimScroll -->
<script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../bower_components/fastclick/lib/fastclick.js"></script>

<script src="../bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="../bower_components/select2/dist/js/select2.full.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>

<script>
  var nilaiL=0;
  var nilaiLx=0;
  function msg(x){
  	var s=confirm(x);
  	if(s==true){
  		return true;
  	}
  	return false;
  }
  function cari(){
    
    window.location = "https://member.remotebisnis.com/pages/?eRaport=<?= base64_encode('hasil_pencarian') ?>&q="+$('#field_cari').val();

  }
  function cari2(){
    
    window.location = "https://member.remotebisnis.com/pages/?eRaport=<?= base64_encode('hasil_pencarian') ?>&q="+$('#field_cari2').val();

  }
  function upgrade(){
  	$('#loadingx').removeClass('hide');
    var username_referaldia = '<?= $akunafiliasi['username']; ?>';
    var nama_lengkap = '<?= $akun['nama_lengkap']; ?>';
    
    $.ajax({
      type: 'POST',
      url: "../setting/function/proses_tambah.php",
      data: {
        "username":'<?= $cookieId ?>',
        "type":'ajukan',
        "nama_lengkap":nama_lengkap,
        
        "username_referaldia":username_referaldia,
      },
      success: function(a) {
        $('#notifpengajuan').removeClass('hide');
	  	$('#loadingx').addClass('hide');
        
        // $('#pricelast').text(a);
      }
    });
  }
  $(function () {
    <?php if($_GET['idx']): ?>
      $('#menuul<?=$_GET['menuul']?>').css('display','block');
      $('#remove<?=$_GET['menuul']?>').addClass('menu-open'); 
    <?php endif; ?>
    $('#active<?= $_GET['idx'] ?>').addClass('active');

    $('[data-toggle="tooltip"]').tooltip()

     $('.select2').select2();

    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    })  

   
    $('#example1').DataTable();
    $('.example1').DataTable({
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
    $('#example2').DataTable({
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
    $('#example3').DataTable({
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
    $('#example4').DataTable({
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
    $('#example5').DataTable({
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
    $('#example6').DataTable({
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]]
    });
  })
// document.getElementById("sharelink").addEventListener("click", function() {
//     copyToClipboard('https://member.remotebisnis.com/daftar.php?kaf=<?= $akun['kode_afiliasi'] ?>');
// });
$(function () {
  $("#checkAll").click(function(){
      $('.checkboxBelumTf:checkbox').not(this).prop('checked', this.checked);
  });
  $("#checkAllTrial").click(function(){
      $('.checkboxTrial:checkbox').not(this).prop('checked', this.checked);
  });
  $("#checkAllFull").click(function(){
      $('.checkboxFull:checkbox').not(this).prop('checked', this.checked);
  });
  $('#searchsub').on('click',function(){
    $.ajax({
      type: 'GET',
      url: "../setting/function/proses_search.php",
      data: {"q":$('#q').val()},
      success: function(a) {
        $('#mdlSearch').modal();
      }
    });
  });
   $(".mySearch").on("keyup", function () {
    if (this.value.length > 0) {   
      $(".dataMenu li").hide().filter(function () {
        return $(this).text().toLowerCase().indexOf($(".mySearch").val().toLowerCase()) != -1;
      }).show(); 
    }  
    else { 
      $(".dataMenu li").show();
    }
  }); 

});
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
 
});
   $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
  function copy(id) {
    const area = document.querySelector('#'+id);
    area.select();
    document.execCommand('copy')
  }
  function returnId(url, id){
    $('#'+id).attr('src',url);
    alert(id+' '+url);
  }
  function loadVidio(width,height,url,id){
    $('#panel'+id).html('<iframe width="'+width+'" height="'+height+'" src="'+url+'" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
  }
  function kirimWa(){
    window.open("http://wa.me/6283165724269?text="+$('#q').val(), '_blank');
  }
</script>
<script type="text/javascript" src="../build/js/scriptMe.js"></script>
</body>
</html>
