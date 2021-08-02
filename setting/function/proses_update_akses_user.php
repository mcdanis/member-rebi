
<?php
  // ini_set('display_errors', 1);
  // ini_set('display_startup_errors', 1);
  // error_reporting(E_ALL);
  include_once('../koneksi.php');
  include_once('../system.php');


$a=new koneksi();
$db=$a->hubungkan();
$sistem=new kontrols($db);
 
$tbl="hak_akses";
$sistem->tbl=$tbl;
$sistem->clm='username';	
$sistem->link='';	
$sistem->data=$_POST['username'];

$sistem->hapus_satu_data();

if ($_POST['all']) {
	$hakakses=$sistem->tampil_manual("select * from master_ecource where type=1");
	foreach ($hakakses as $value => $ha){
		// $sql = "select * from hak_akses where username='".$_POST['my']."' and id_master=".$ha['id'];
		// $show=$sistem->tampil_manual($sql);
		// foreach ($show as $value => $akses) {}
		// $selected='';
		// if ($akses['id_master']==$ha['id']) {
			$tbl="hak_akses";
			$data=array($_POST['username'],$ha['id']);
			$col=array("username","id_master");
			$sistem->masukan_data($tbl,$col,$data);
		// echo $akses['id_master'].' - '.$ha['id'].' '.$sql.'<br> ';
			// echo "string";
		// } 
	}
}else{
	foreach ($_POST['akses'] as $key) {
		

		$data=array($_POST['username'],$key);
		$col=array("username","id_master");
		$sistem->masukan_data($tbl,$col,$data);//$sistem dari relasi


	}
}

$sistem->link=base64_encode('list_prospek');
$tbl='akun';
$data=array('username');
$key=array($_POST['username']);
$ubah=array(
				"status='ok'",
				"pengajuan=''",
				"type_akun='b'"
			);
$sistem->rubah_data($tbl,$ubah,$data,$key);
// send mail
 $from = "info@remotebisnis.com";
    $to = $_POST['username'];
    $subject = "Kini Akun anda telah full akses :) ";
    $message = '<div style="background:#f2f2f2;width:100%;font-family:sans-serif">
           <br>
           <br>
           <div style="width: 75%;margin: auto;background:white;border-radius:20px 20px">
              <br>
              <img src="https://remotebisnis.com/wp-content/uploads/2021/03/cropped-Picture1.png" style="width:30%;margin:auto">
              <br>
               
              <div style="text-align:center">
                 <div style="text-align: center;padding-top:5px">
                    <h2 style="margin-bottom: 5px">Selamat 🥳</h2>
                    <span style="font-size: 20px">Akun Anda kini telah FULL AKSES</span>
                    <br><br>
                    <div style="padding: 20px;line-height: 25px;text-align: left">
                       Akun anda sudah di verifikasi, Nikmatilah fitur di member.remotebisnis.com
                        <br>
                        <b>Untuk mengakses E-Course gunakan akses dibawah ini :</b><br>
                         Username : '.$_POST['username'].'<br>Password : <i>'.$_POST['password'].'</i><br>
                        Join juga ke Grup BARU Member Area REBI <a href="https://www.facebook.com/groups/4402165229807781">https://www.facebook.com/groups/4402165229807781</a>
                        <br>
                        <p>
                          <b>Join Chanel Telegram Rebi untuk Ilmu Digital Bisnis & Self Development lainya Gratis</b><br>
                          <a href="https://t.me/rebi_mcdani" target="_blank">https://t.me/rebi_mcdani</a>
                        </p>
                        <br>
                          <table style="margin:auto;font-family: sans-serif">
                             <tr>
                                <td class="text-button-orange" style="background:green;color:#ffffff;font-size:14px;line-height:18px;text-align:center;padding:10px 30px;border-radius:20px"><a href="https://member.remotebisnis.com/" target="_blank" class="link-white" style="color:#ffffff;text-decoration:none"><span class="link-white" style="color:#ffffff;text-decoration:none">Login</span></a></td>
                             </tr>
                          </table>
                          <br>
                          
                          <!-- <i>*Tunggu E-book lainya ya, kami akan kirim secara berkala "GRATIS"</i> -->
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
        </div>';
    $headers = "From: Selamat !!<info@remotebisnis.com>\r\n";
    // $headers .= "Content-type: text/html\r\n";
    
    
    kirimEmail('',$from,'REBI <'.$from.'>',$to,$subject,$message);

// 
?>
<script>
	 window.location.replace('../../pages/?eRaport=<?php echo base64_encode('list_prospek') ?>&msg=berhasil');
</script>
