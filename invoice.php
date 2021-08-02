<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL); 
date_default_timezone_set('Asia/Jakarta');

    include_once('setting/koneksi.php');
    include_once('setting/system.php');
    
    $a=new koneksi();
    $db=$a->hubungkan();
    $sistem=new kontrols($db);

	ob_start();

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
<style>
    .b{
        font-weight: bold;
    }
    #tableinfo td{
        padding: 5px
    }
    #tabledetail td{
        padding-top: 10px;
    }
    #tabledetail{
        font-size: 18px; font-weight: bold;
    }
    #tablelist td{
        font-weight: bold;
        padding-top: 15px;
        padding-bottom: 7px;
        border-bottom: 1px solid #E0E0E0

    }
    #tablelist th{
        font-size: 17px;
        color: #e62e00;
    }
    #tablelist{
        border-top: 2px solid #e62e00;
        padding-top: 10px;
    }
    h1,.cf{
        color: #e62e00
    }
    .color-ash{
        color: #6F6F6F
    }
    .b{
        font-weight: bold
    }
</style>
<div style=" color: black; display: flex;">
    <label class="b">RemoteBisnis.com | E-Course</label>
    <h1>INVOICE : #inv<?=$_GET['price'] ?></h1>
    <label class="color-ash b">Tanggal Pesanan : <?= date('d F Y') ?></label>
    <hr style="border: 1px dashed red">

</div>
 
<h5 class="color-ash">Detail</h5>
 <?php if ($_GET['type'] == 'b' && !empty($_GET['kaf'])): ?>
    <h2>Rp<?=$sistem->getHarga();?>.<span class="cf"><?= $_GET['price'] ?></span></h2>
    <div style="background: #F3F3F3;border-radius: 5px;padding: 5px;">
        <?php
          $tbl="akun";
          $data="*";
          $clm="kode_afiliasi";
          $key=$_GET['kaf'];

          $materi=$sistem->tampil_data_where($tbl,$clm,$data,$key);
          foreach ($materi as $key => $data){
            $note = $data['note'];
        $nowa = $data['nowa'];
          }
          echo preg_replace("/<img[^>]+\>/i", "",$note);
        ?>
    <label style="font-size: 18px;">Konfirmasi Pembayaran ke Wa : <a class="gold-color" href="https://wa.me/<?= hp($nowa) ?>">klik <?= $nowa ?></a></label>

    </div>
   <hr>
    Mohon Tunggu Akun Anda Segera Aktif :)
<?php elseif ($_GET['type'] == 'b' && empty($_GET['kaf'])): ?>
    <div style="background: #F3F3F3;border-radius: 5px;padding: 5px;">
  <h2>Rp<?=$sistem->getHarga();?>.<span class="cf"><?= $_GET['price'] ?></span></h2>
  <?php 
    $cadmin = $sistem->tampil_manual('select * from akun where username="admin"');
    foreach ($cadmin as $value => $admin) {}
  ?>
  <?php echo preg_replace("/<img[^>]+\>/i", "",$admin['note']) ?>

         
        <label style="font-size: 15px;">Konfirmasi Pembayaran ke Wa : <?= $admin['nowa'] ?></label>

        <p>Terima kasih :)</p>

    </div>
<?php endif; ?>
<br>
<br>
 
<br>
<br>
 
<hr style="border: 1px dashed #AAAAAA">
<div style="width: 680px; color: #787878; text-align: center;">
     
    <h4>TRANSFER SESUAI NOMINAL </h4>
    <br>

    <hr style="border: 1px dashed #AAAAAA">
    <b style="color: black">@RemoteBisnis by @mcdani.saputra</b><br><br>
    <i>*Download Invoice ini sebagai bukti</i>

</div>
<?php 
	$content = ob_get_clean();

	require '../wp-content/themes/newspaperss/html2pdf_v/vendor/autoload.php';
	use Spipu\Html2Pdf\Html2Pdf;
	$html2pdf = new Html2Pdf('P','A4','fr', true, 'UTF-8', array(15, 15, 15, 15), false); 
	$html2pdf->writeHTML($content);
	$html2pdf->output('Inv-Ecourse-RemoteBisnis.pdf');
?>