<?php
date_default_timezone_set('Asia/Jakarta');

  setlocale(LC_TIME, 'id_ID.utf8');
  $hariIni = new DateTime();

  $hari = strftime('%A, %d %B %Y', $hariIni->getTimestamp());
// IF GRATIS
//    EAMIL USERNAME & PASS KE USER
//    NOTIF ADA YG DAFTAR GRATIS KE AFILIASI
// 
// IF BERBAYAR 
//    EMAIL NOTIF HARUS BAYAR KE USERNYA
//    EMAIL ADA YG DAFTAR BERBAYAR KE AFILASI
//     ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL); 

 	include_once('../koneksi.php');
    include_once('../system.php');

    $a=new koneksi();
    $db=$a->hubungkan();
    $sistem=new kontrols($db);
    // TANBAH KONDISI STATUS JADI OK KALO TYPENYA TRIAL
    // KALO FULL ARAHKAN DI INFO UNTUK TRANSFER + KODE UNIK KE REK AFILIASI
  	$tbl="akun";
    $murah = 0;
    $status = null;
    if ($_POST['type_akun'] == 't') {
        $status = 'ok';
    }
    
    if($_POST['murah']){
        $status = null;
        $murah=1;
        $murahwalink = '<br><b style="background:yellow"><i>*Tapi Harap Transfer terlebih dahulu supaya akun bisa gunakan</i></b> dan <a href="https://api.whatsapp.com/send?phone=6283165724269&text=hallo%2C%20*Saya%20sudah%20join%20dan%20siap%20sukses%20dengan%20E-Course%20dari%20REBI*%2C%20saya%20mau%20transfer%2011%20rb%20nya">Klik disini untuk menghubungi admin</a>';
    }
    
    $afiliasi = $_COOKIE['rebi_lp_cookie'];
	// batas cek cookie kosong
	
	$akunAfiliasi = $sistem->tampil_manual('select * from akun where kode_afiliasi="'.$afiliasi.'"');
	foreach ($akunAfiliasi as $key => $akunAfiliasis){
		$emailafiliasi = $akunAfiliasis['username'];
	}
	if (empty($emailafiliasi)) {
        $afiliasi = '39587434922';
	}
	// batas cek cookie kosong
    if (empty($afiliasi) || $afiliasi == '') {
        $emailafiliasi = 'danisaputraakatsuki@gmail.com';
      // echo "afiliasi kosong";
        $afiliasi = '39587434922';
        // afiliasi master
        $note= '<p>Transfer sesuai nominal ke Kerekening :</p>

            <p><strong>AN (Atas Nama) : Dani S</strong></p>
            
            <p><strong>Kode Bank : <span class="marker">437 (Bank BNI Syariah)</span></strong></p>
            
            <p><strong>No Rek B : <span style="background-color:#ffff00">0916 7278 88</span></strong></p>
            
            <div style="background:#eeeeee; border:1px solid #cccccc; padding:5px 10px"><strong><img alt="" src="https://sales.nilamanihotels.com/wp-content/uploads/2019/04/Logo-Bank-BNI-PNG.png" style="height:13px; width:40px" />&nbsp;<img alt="" src="https://upload.wikimedia.org/wikipedia/id/8/89/Jenius-logo.png" style="height:18px; width:50px" /><img alt="" src="https://cdn.freebiesupply.com/logos/large/2x/bca-bank-central-asia-logo-png-transparent.png" style="height:16px; width:50px" />&nbsp;<img alt="" src="https://maximumlife-group.com/wp-content/uploads/2019/12/mandiri.png" style="height:32px; width:60px" /><img alt="" src="https://upload.wikimedia.org/wikipedia/commons/9/97/Logo_BRI.png" style="height:12px; width:50px" /></strong></div>
            
            <p>&nbsp;</p>
            ';
    }else{
      
      $akunAfiliasi = $sistem->tampil_manual('select * from akun where kode_afiliasi="'.$afiliasi.'"');
      foreach ($akunAfiliasi as $key => $akunAfiliasis){
        $emailafiliasi = $akunAfiliasis['username'];
        $note = $akunAfiliasis['note'];
      }

    }
    $kodeunik = rand(100,999);
    $type_akun=0;
    if($_POST['type_akun'] == 't'){
        $type_akun = 1;
    }
	$data=array($_POST['email'],$_POST['nowa'],$_POST['nama'],$_POST['nowa'],$_POST['domisili'],$_POST['web'],$_POST['jk'],$_POST['usia'],$_POST['grup'],$_POST['tahu'],$_POST['fitur_keinginan'],$afiliasi,rand(99,99999999999),$_POST['type_akun'],$status,$kodeunik,$_POST['gadget'],$hari,$_POST['buka_email']);
	$col=array("username","password","nama_lengkap","nowa","domisili","website","jk","usia","grup","tahu","fitur_keinginan","afiliasi","kode_afiliasi","type_akun","status","kode_unik","gadget","create_at","buka_email");
	$sistem->masukan_data_luar_redirect($tbl,$col,$data);//$sistem dari relasi
    if ($_POST['type_akun'] == 't') {
      // NOTIF KE USER KIRIM USERNAME PASSWORD
      $from = "info@remotebisnis.com";
      $to = $_POST['email'];
      $subject = "Daftar Remotebisnis";
      
      $message = '
          <div style="background:#f2f2f2;width:100%;font-family:sans-serif">
             <br>
             <br>
             <div style="width: 75%;margin: auto;background:white;border-radius:20px 20px">
                <br>
                <img src="https://remotebisnis.com/wp-content/uploads/2021/03/cropped-Picture1.png" style="width:30%;margin:auto">
                <br>
                <br>
                <img src="https://remotebisnis.com/wp-content/uploads/2021/03/LEARN-GROW-1-1.jpg" width="100%">
                <br>
                <div style="text-align:center">
                   <div style="text-align: center;padding-top:5px">
                      <h2 style="margin-bottom: 5px">Hallo, Kak</h2>
                      <span style="font-size: 20px">😇 Salam Kenal !</span>
                      <br><br>
                      <div style="padding: 20px;line-height: 25px;text-align: left">
                         Terima kasih telah bergabung di RemoteBisnis.com, Perkenalkan McDani,ST  dan saya adalah <b>Founder RemoteBisnis, Penulis Beberapa Blog, Seorang Programmer & Expert Generalist</b>. Tidak hanya itu saya juga seorang <b>Pebisnis dan Digital Marketer</b>.<br><br>
                         <b>Untuk mengakses E-Course gunakan akses dibawah ini :</b><br>
                         Username : '.$_POST['email'].'<br>Password : <i>'.$_POST['nowa'].'</i><br>
                        '.$murahwalink.'

                        <p>
                          <b>Join Chanel Telegram Rebi untuk Ilmu Digital Bisnis & Self Development lainya Gratis</b><br>
                          <a href="https://t.me/rebi_mcdani" target="_blank">https://t.me/rebi_mcdani</a>
                        </p>
                        <br>

                         <i><br><small>*harap rubah password setelah login</small></i>
                          
                            <table style="margin:auto;font-family: sans-serif">
                               <tr>
                                  <td class="text-button-orange" style="background:green;color:#ffffff;font-size:14px;line-height:18px;text-align:center;padding:10px 30px;border-radius:20px"><a href="https://member.remotebisnis.com/" target="_blank" class="link-white" style="color:#ffffff;text-decoration:none"><span class="link-white" style="color:#ffffff;text-decoration:none">Login member.remotebisnis.com</span></a></td>
                               </tr>
                            </table>
                            <br>

                            <i>*Klik/jadikan <span style="background:yellow">"IMPORTANCE MARKERS"<span> supaya materi-materi terbaru kami masuk ke E-mail utama anda</i>
                         </div>
                         <hr>
                         <div style="text-align:center;font-size:12px">
                            @remotebisnis | https://remotebisnis.com <br>
                            "Sukses Bersama Kami"
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>

      ';


      $headers = "From: REBI<info@remotebisnis.com>\r\n";
      $headers .= "Content-type: text/html\r\n";
      
      // mail($to,$subject,$message, $headers);
      subrekmc($to,$sistem->getNamaLengkap($to));
      kirimEmail('',$from,'REBI - BisnisDigital Makin Mudah',$to,$subject,$message);



      // NOTIF KE AFILIASI ADA DAFTAR GRATIS
      $from = "info@remotebisnis.com";
      $to = $emailafiliasi;
      $subject = "Ada Prospek baru TRIAL nih !";
      
      $message = '
          <div style="background:#f2f2f2;width:100%;font-family:sans-serif">
             <br>
             <br>
             <div style="width: 75%;margin: auto;background:white;border-radius:20px 20px">
                <br>
                <img src="https://remotebisnis.com/wp-content/uploads/2021/03/cropped-Picture1.png" style="width:30%;margin:auto">
                <br>
              
                <div style="text-align:center">
                   <div style="text-align: center;padding-top:5px">
                      <h2 style="margin-bottom: 5px">Hallo, Kak</h2>
                      <span style="font-size: 20px">Selamat, ada prospek baru nih sedang TRIAL</span>
                      <br><br>
                      <div style="padding: 20px;line-height: 25px;text-align: left">
                          
                         <p>Berikut detailnya :</p>
                         Nama : <b>'.$_POST['nama'].'</b><br>
                         Email : <b>'.$_POST['email'].'</b><br>
                         No Wa/Telp : <b>'.$_POST['nowa'].'</b><br>
                         Domisili : <b>'.$_POST['domisili'].'</b><br>
                         JK : <b>'.$_POST['jk'].'</b><br>
                                                      
                             
                         </div>
                         <hr>
                         <div style="text-align:center;font-size:12px">
                            @remotebisnis | https://remotebisnis.com <br>
                            "Sukses Bersama Kami"
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>

      ';


      $headers = "From: REBI - Prospek TRIAL <info@remotebisnis.com>\r\n";
      $headers .= "Content-type: text/html\r\n";
      
      // mail($to,$subject,$message, $headers);
	  kirimEmail('',$from,'REBI - BisnisDigital Makin Mudah',$to,$subject,$message);


    }else{
      // echo "berbayar";
      // NOTIF KE USER haarus tf ke ariliasi
      $from = "info@remotebisnis.com";
      $to = $_POST['email'];
      $subject = "Segera lakukan transfer untuk mendapatkan FULL akses";
      
      $message = '
          <div style="background:#f2f2f2;width:100%;font-family:sans-serif">
             <br>
             <br>
             <div style="width: 75%;margin: auto;background:white;border-radius:20px 20px">
                <br>
                <img src="https://remotebisnis.com/wp-content/uploads/2021/03/cropped-Picture1.png" style="width:30%;margin:auto">
                <br>
                <br>
                <img src="https://remotebisnis.com/wp-content/uploads/2021/03/LEARN-GROW-1-1.jpg" width="100%">
                <br>
                <div style="text-align:center">
                   <div style="text-align: center;padding-top:5px">
                      <h2 style="margin-bottom: 5px">Hallo, Kak</h2>
                      
                      <br><br>
                      <div style="padding: 20px;line-height: 25px;text-align: left">
                         Terima kasih telah bergabung di RemoteBisnis.com, Perkenalkan McDani,ST  dan saya adalah <b>Founder RemoteBisnis, Penulis Beberapa Blog, Seorang Programmer & Expert Generalist</b>. Tidak hanya itu saya juga seorang <b>Pebisnis dan Digital Marketer</b>.<br><br>
                         <b>Untuk mengakses E-Course Segera lakukan TRANSFER sebagai berikut:</b><br>
                          <h2>Senilai : Rp'.$sistem->getHarga().'.'.$kodeunik.'</h2>
                         
                         '.$note.'
                          <br>   
                          <p>
                          <b>Join Chanel Telegram Rebi untuk Ilmu Digital Bisnis & Self Development lainya Gratis</b><br>
                          <a href="https://t.me/rebi_mcdani" target="_blank">https://t.me/rebi_mcdani</a>
                        </p>
                        <br>

                            <br>
                            <i>*Klik/jadikan "IMPORTANCE MARKERS" supaya materi-materi terbaru kami masuk ke mail anda</i>
                            
                         </div>
                         <hr>
                         <div style="text-align:center;font-size:12px">
                            @remotebisnis | https://remotebisnis.com <br>
                            "Sukses Bersama Kami"
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>

      ';


      $headers = "From: REBI<info@remotebisnis.com>\r\n";
      $headers .= "Content-type: text/html\r\n";
      
      // mail($to,$subject,$message, $headers);
    subrekmc($to,$sistem->getNamaLengkap($to));
	  kirimEmail('',$from,'REBI - BisnisDigital Makin Mudah',$to,$subject,$message);



      // NOTIF KE AFILIASI ADA DAFTAR berbayar
      $from = "info@remotebisnis.com";
      $to = $emailafiliasi;
      $subject = "Wow!, Ada Prospek baru Siap Transfer nih !";
      
      $message = '
          <div style="background:#f2f2f2;width:100%;font-family:sans-serif">
             <br>
             <br>
             <div style="width: 75%;margin: auto;background:white;border-radius:20px 20px">
                <br>
                <img src="https://remotebisnis.com/wp-content/uploads/2021/03/cropped-Picture1.png" style="width:30%;margin:auto">
                <br>
              
                <div style="text-align:center">
                   <div style="text-align: center;padding-top:5px">
                      <h2 style="margin-bottom: 5px">Hallo, Kak</h2>
                      <span style="font-size: 20px">Selamat, ada prospek baru nih </span>
                      <br><br>
                      <div style="padding: 20px;line-height: 25px;text-align: left">
                          <p>Pastikan dia transfer ya ..</p>
                         <p>Berikut detailnya :</p>
                         Nama : <b>'.$_POST['nama'].'</b><br>
                         Email : <b>'.$_POST['email'].'</b><br>
                         No Wa/Telp : <b>'.$_POST['nowa'].'</b><br>
                         Domisili : <b>'.$_POST['domisili'].'</b><br>
                         JK : <b>'.$_POST['jk'].'</b><br>
                                                      
                          
                         </div>
                         <hr>
                         <div style="text-align:center;font-size:12px">
                            @remotebisnis | https://remotebisnis.com <br>
                            "Sukses Bersama Kami"
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>

      ';


      $headers = "From: REBI - Prospek<info@remotebisnis.com>\r\n";
      $headers .= "Content-type: text/html\r\n";
      
      // mail($to,$subject,$message, $headers);
	  kirimEmail('',$from,'REBI - BisnisDigital Makin Mudah',$to,$subject,$message);
    
    }



?>
<script>
	window.location.replace("https://member.remotebisnis.com/info.php?murah=<?= $murah ?>&id_akun=<?= $type_akun ?>&email=<?= $_POST['email'] ?>&price=<?= $kodeunik; ?>&type=<?= $_POST['type_akun']; ?>&kaf=<?= $_POST['afiliasi'] ?>");
</script>