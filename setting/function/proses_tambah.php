<?php
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);
 	include_once('../koneksi.php');
    include_once('../system.php');

    $a=new koneksi();
    $db=$a->hubungkan();
    $sistem=new kontrols($db);
 
	$sistem->link=$_POST['link'];

	  function str_replace_first($from, $to, $content){
	    $from = '/'.preg_quote($from, '/').'/';

	    return preg_replace($from, $to, $content, 1);
	  }

	if ($_GET['type']=='ok') {
	    $tbl="akun";
		$data=array("username");
		$key=array($_GET['username']);
		
		$ubah=array(
			"status='ok'"
		);
		$sistem->rubah_data($tbl,$ubah,$data,$key);
	}
	
	if ($_POST['type']=='notifikasi') {
		$tbl="notifikasi";
		$data=array($_POST['headline'],$_POST['text']);
		$col=array("headline","text");
		$sistem->masukan_data($tbl,$col,$data);//$sistem dari relasi
	}elseif($_POST['type']=='wa'){
		// $msg = $_POST['msg'];
		$tbl = "akun";
		$data = "*";                 
		$users = $sistem->tampil_manual('select * from akun');
		$no=0;
		 
		foreach ($users as $key => $value) {
			 
				$no++;
				// $nowa = str_replace_first('0','62',$value['nowa']);
				// $content = str_replace('{nama}',explode(' ',$value['nama_lengkap'])[0],$msg);
				// echo "<a target='_blank' href='https://wa.me/".$nowa."?text=".urlencode($content)."'>$no. ".$value['nama_lengkap']." </a> <br>";
				echo $no.' '.$value['nowa']."<br>";
			 
		}
		
		
		 
		
	
	}elseif($_GET['type']=='atc'){
		$tbl="atc";
		$data=array($_GET['id'],$_GET['username']);
		$col=array("id_produk","username");
		$sistem->masukan_data($tbl,$col,$data);//$sistem dari relasi
	}elseif($_POST['type']=='produk'){
		$tbl="produk";
		$data=array($_POST['nama'],$_POST['size'],$_POST['bahan'],$_POST['rp'],$_POST['deskripsi'],$_POST['type_produk'],$_POST['gambar']);
		$col=array('nama', 'size', 'bahan', 'rp', 'deskripsi', 'type', 'gambar');
		$sistem->masukan_data($tbl,$col,$data);//$sistem dari relasi
	}elseif($_POST['type']=='pass'){
		$tbl="akun";
		$data=array("username");
		$key=array($_POST['username']);
		$sistem->link=$_POST['link'];
		$ubah=array(
						"password='".$_POST['passBaru']."'"
					);
		$sistem->rubah_data($tbl,$ubah,$data,$key);
	}elseif($_POST['type']=='menu'){
		$tbl="menu";
		$data=array($_POST['nama'],$_POST['fa']);
		$col=array("nama","fa");
		$sistem->masukan_data($tbl,$col,$data);//$sistem dari relasi
	}elseif($_POST['type']=='readAll'){
		$tbl="notifikasi";
		$data="*";
		$jmlNotif=0;
		$notif=$sistem->tampil_data($tbl,$data);
		foreach ($notif as $key => $value) {
			$tblRead="read_notifikasi";
			$data=array($_POST['username'],$value['id']);
			$col=array("username","id_notifikasi");
			$sistem->masukan_data($tblRead,$col,$data);//$sistem dari relasi
		}
	}
	if ($_POST['type']=='getcontact') {
	    // var_dump($_POST);

	    if($_POST['typeakun']=='t'){
	        $filter = "where (type_akun='t' or status='')";
	    }elseif($_POST['typeakun']=='f'){
	        $filter = "where type_akun='b' and status='ok' ";
	    }else{
	        $filter = "where (type_akun='b' and status='') ";
	    }
	        
	    
	    if($_POST['semua']){
	        $filter .= '';
	    }else{
	        $filter .="and afiliasi='39587434922'";
	    }
	    
        $no3=0;
        $sql="select * from akun $filter";
        $data=$sistem->tampil_manual("select * from akun $filter ");
        foreach ($data as $value => $x): 
            $no3++;
        endforeach;
        // echo $sql;
        for ($i = 0; $i <=$no3 ; $i++) {
            if ($i % $_POST['limit'] == 0) {
                echo '<a href="?sql='.$sql.'&type=txt&jenis=nowa&star='.$i.'&limit='.$_POST['limit'].'"><i class="fa fa-download"></i> NOWA '.$i.'</a><br>';
                echo '<a href="?sql='.$sql.'&type=txt&jenis=nama&star='.$i.'&limit='.$_POST['limit'].'"><i class="fa fa-download"></i> NAMA LENGKAP '.$i.'</a><br>';
                echo "<hr>";
            }
        }
        echo $sql;
    
	    
	   // foreach($data as $key =>$show){
	   //     echo $show['nama_lengkap']."<br>";
	   // }
	}
	if ($_GET['type']=='sendMail') {
		
		$password = $sistem->getSingleField('akun','username',$_GET['email'])['password'];
		
		$from = "info@remotebisnis.com";
	    $subject = "ini password anda, jangan sampe lupa lagi ya !";
	    $message = '<div style="background:#f2f2f2;width:100%;font-family:sans-serif">
	           <br>
	           <br>
	           <div style="width: 75%;margin: auto;background:white;border-radius:20px 20px">
	              <br>
	              <img src="https://remotebisnis.com/wp-content/uploads/2021/03/cropped-Picture1.png" style="width:30%;margin:auto">
	              <br>
	               
	              <div style="text-align:center">
	                 <div style="text-align: center;padding-top:5px">
	                    <h2 style="margin-bottom: 5px">Ini password nya !!</h2>
	                    <br><br>
	                    <div style="padding: 20px;line-height: 25px;text-align: left">
	                       
	                        Demi keamanan hapus email ini jika kaka merasa sudah ingat<br>
	                        Password : <small>'.$password.'</small> <br>                        
	                          <br>
	                         
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
	    
	    // $headers .= "Content-type: text/html\r\n";
		

	    kirimEmail('',$from,'Konfirmasi Password ',$_GET['email'],$subject,$message);

	    echo '<script type="text/javascript">
          window.location = "https://member.remotebisnis.com?msg=berhasil";
      </script>';
	}

	if ($_POST['type']=='addLabel') {
		$sistem->eksekusi("INSERT INTO `label_broadcast`(`id`, `nama label`) VALUES ('','".$_POST['label']."')");
		echo '<script type="text/javascript">
          window.location = "https://member.remotebisnis.com/pages/?eRaport=dGVpbmc=#wa";
      </script>';
	}
	if ($_POST['type']=='pixel') {
		$sistem->eksekusi("update akun set pixel='".$_POST['pixel']."' where username='".$_POST['username']."'");
		// echo "update akun set pixel='".$_POST['pixel']."' where username='".$_POST['username']."'";
		$sistem->tbl='link_line';
		$sistem->clm='username';	
		$sistem->link=base64_encode('profile');
		$sistem->data=$_POST['username'];
		$sistem->hapus_satu_data(1); 
		for ($i=0; $i < count($_POST['id_link']) ; $i++) { 
			$sistem->updatePixel($_POST['custom_pixel'][$i],$_POST['username'],$_POST['id_link'][$i]);
		}

	}
	
	if ($_POST['type']=='note') {
		$tbl="akun";
		$data=array("username");
		$key=array($_POST['username']);
		$sistem->link=base64_encode($_POST['link']);
		$ubah=array(
						"note='".$_POST['text']."'",
						"auto_chat_trial='".$_POST['pct']."'",
						"auto_chat_full='".$_POST['pcf']."'"
					);
		$sistem->rubah_data($tbl,$ubah,$data,$key);
		echo "ssss";
	}

	if($_GET['type']=='txt'){
		$star=$_GET['star'];
		$limitnya=15;
		if($_GET['limit']){
		    $limitnya = $_GET['limit'];
		}
		if ($_GET['jenis']=='nowa') {
			$filename = 'nowa-'.$star.'-limit_'.$limitnya;
		}else{
			$filename = 'NAMA_LENGKAP-'.$star.'-limit_'.$limitnya;
		}
		$handle = fopen($filename.".txt", "w");
		$arrNowa=array();
		$show = $sistem->tampil_manual($_GET['sql']." order by date limit $star,$limitnya");
		// $show = $sistem->tampil_manual("select * from akun order by date limit $star,$limitnya");
		foreach ($show as $value => $data) {
			// array_push($arrNowa, $data['nowa']);
        	// if(!empty(array_search($data['nowa'], $arrNowa))){
				if ($data['username']=='admin') {
	                  
	            }else{

					if ($_GET['jenis']=='nowa') {
						
						fwrite($handle, str_replace_first('0','62',$data['nowa'])."\n");
					}else{
	            							
						fwrite($handle, $data['nama_lengkap']."\n");
				// 		echo $data['nama_lengkap'].'<br>';
					}
            	}
			// }
		}
// 		echo $_GET['sql']."order by date limit ".$star.",".$limitnya;
		fclose($handle);

		header('Content-Type: application/octet-stream');
		header('Content-Disposition: attachment; filename='.basename($filename.'.txt'));
		header('Expires: 0');
		header('Cache-Control: must-revalidate');
		header('Pragma: public');
		header('Content-Length: ' . filesize($filename.'.txt'));
		readfile($filename.'.txt');
		exit;
	}
	if($_POST['type']=='ajukan'){
		$tbl="akun";
		$data=array("username");
		$key=array($_POST['username']);
		$sistem->link='';
		
		$ubah=array(
						"pengajuan='1'",
					);
		$sistem->rubah_data($tbl,$ubah,$data,$key);


		$from = "info@remotebisnis.com";


	    $subject = "Anda member yang mau upgrade nih ! ";
	    $message = '<div style="background:#f2f2f2;width:100%;font-family:sans-serif">
	           <br>
	           <br>
	           <div style="width: 75%;margin: auto;background:white;border-radius:20px 20px">
	              <br>
	              <img src="https://remotebisnis.com/wp-content/uploads/2021/03/cropped-Picture1.png" style="width:30%;margin:auto">
	              <br>
	               
	              <div style="text-align:center">
	                 <div style="text-align: center;padding-top:5px">
	                    <h2 style="margin-bottom: 5px">Selamat, Ada member mau upgrade</h2>
	                    
	                    <br><br>
	                    <div style="padding: 20px;line-height: 25px;text-align: left">
	                       
	                        Berikut detail akunya :<br>
	                        Nama : '.$_POST['nama_lengkap'].' <br>
	                        Email/username : '.$_POST['username'].'<br> 

	                        
	                          <br>
	                          <i>*jika sudah transfer anda bisa meng Approvenya di member area https://member.remotebisnis.com</i> 
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
	    
	    // $headers .= "Content-type: text/html\r\n";
		

	    kirimEmail('',$from,'REBI <'.$from.'>',$_POST['username_referaldia'],$subject,$message);
	}
	if($_POST['type']=='readAll'){
		echo "<script>
	window.location.replace('../../pages/?eRaport=bmV3cw==');
</script>";
	}
	if ($_POST['type'] == 'editWa') {
		$tbl="histori_edit_nomor";
		$data=array($_POST['username'],$_POST['nowa']);
		$col=array("username","no_wa");
		$sistem->masukan_data($tbl,$col,$data);//$sistem dari relasi


		$tbl="akun";
		$data=array("username");
		$key=array($_POST['username']);
		$ubah=array(
			"nowa='".$_POST['nowa']."'"
		);
		$sistem->rubah_data($tbl,$ubah,$data,$key);
	}
	if($_POST['redirect']=='profile'){
		echo "<script>
			window.location.replace('../../pages/?eRaport=cHJvZmlsZQ==&msg=berhasil');
		</script>";
	}
