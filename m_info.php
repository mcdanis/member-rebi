<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL); 
  include_once('setting/koneksi.php');
  include_once('setting/system.php');
  $a=new koneksi();
  $db=$a->hubungkan();
  $sistem=new kontrols($db);

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
  function str_replace_first($from, $to, $content){
    $from = '/'.preg_quote($from, '/').'/';

    return preg_replace($from, $to, $content, 1);
  }

  $thisUrl = 'https://'. $_SERVER['HTTP_HOST'] . explode('?', $_SERVER['REQUEST_URI'], 2)[0];
  $pixel = $sistem->getSingleField('akun','kode_afiliasi',$_COOKIE['rebi_lp_cookie'])['pixel'];
  $thisUsername = $sistem->getSingleField('akun','kode_afiliasi',$_COOKIE['rebi_lp_cookie'])['username'];
  if ($_GET['kaf']) {
      $pixel = $sistem->getSingleField('akun','kode_afiliasi',$_GET['kaf'])['pixel'];
      $thisUsername = $sistem->getSingleField('akun','kode_afiliasi',$_GET['kaf'])['username'];
  }
  $customPixel = $sistem->eksekusiShow("select * from link_line where username='".$thisUsername."' and id_link='5' ")['custom_pixel'];
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Proses Registration Rebi Berhasil</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
      
      <?php if($pixel): ?>
        fbq('init','<?= $pixel ?>');
        <?= $customPixel ?>

      <?php endif; ?>

      fbq('track', 'Purchase');
    </script>
     
  <style>
  	.marker{
  		color: gold
  	}
    .gold-color{
      color: gold !important;
    }
  </style>
</head>
<body class="hold-transition lockscreen" style="background: white !important">
  <?php 
      $tbl="akun";
      $data="*";
      $clm="kode_afiliasi";
      $key=$_COOKIE['rebi_lp_cookie'];

      $materi=$sistem->tampil_data_where($tbl,$clm,$data,$key);
      foreach ($materi as $key => $data){
        
        $nowanyadmin = $data['nowa'];
        $pct = $data['auto_chat_trial'];
        $pcf = $data['auto_chat_full'];
        $nowa = $data['nowa'];
        $note = $data['note'];

      }
   ?>
<!-- Automatic element centering -->
<div class="lockscreen-wrapper">
  <div class="lockscreen-logo">
    <a href="../../index2.html"><b>Proses</b>Berhasil</a>
  </div>
  <!-- User name -->
  
  <div class="lockscreen-name alert alert-info">
    <i class="fa fa-2x fa-info-circle"></i><br>
    <br>
    <?php if ($_GET['type'] == 'b'): ?>
      <a href="https://member.remotebisnis.com/invoice.php?price=<?= $_GET['price'] ?>&type=<?=$_GET['type']?>&kaf=<?=$_COOKIE['rebi_lp_cookie']?>" class="btn btn-sm btn-success btn-block" target="_blank"><i class="fa fa-download"></i> UNDUH INVOICE</a>
      <br>
	    <h2>Rp<?=$sistem->getHarga();?>.<span style="color: gold"><?= $_GET['price'] ?></span></h2>
	    <div style="background: #0096bb;border-radius: 5px;padding: 5px;">
		    <?php
		      
		      echo $note;


		    ?>
        <label style="font-size: 18px;">Untuk mempercepat akses anda klik link ke Wa berikut : <br><a target="_blank" class="gold-color" href="https://wa.me/<?= str_replace_first('0','62',$nowanyadmin); ?>?text=<?= urlencode($pcf) ?>, Transfer senilai %2ARp<?= $sistem->getHarga().'.'.$_GET['price'] ?>%2A%0Aini email saya <?=$_GET['email'] ?>">klik <?= $nowanyadmin ?></a></label>

	    </div>
	   <hr>
	    Mohon Tunggu Akun Anda Segera Aktif :)
    
    <?php else:

          
          
        ?>
    	<br>
		<div style="background: #0096bb;border-radius: 5px;padding: 5px; font-size: 15px;">
			Selamat Anda telah bergabung <br> 
      <span>Untuk Akses ke memberarea akan segera kami kirim ke <u>Email</u> Anda, Mohon tunggu beberapa saat.</span>
      <br>
      <br>
      <script type="text/javascript">
          window.location = "https://wa.me/<?= str_replace_first('0','62',$nowanyadmin); ?>?text=<?= urlencode($pct) ?> berikut email saya *<?= $_GET['email'] ?>*";
      </script>
		</div>
    <?php endif ?>
      <i>*Mohon cek di folder SPAM, jika email kami tidak ditemukan</i>

  </div>

  <!-- START LOCK SCREEN ITEM -->
  <div class="lockscreen-item">
 

  </div>
 
  <div class="text-center">
    <a href="https://member.remotebisnis.com">Login ?</a>
  </div>
  <div class="lockscreen-footer text-center">
    Copyright &copy; <b><a href="https://adminlte.io" class="text-black">Memberarea Remotebisnis</a></b><br>
    All rights reserved
  </div>
</div>
 
</body>
</html>