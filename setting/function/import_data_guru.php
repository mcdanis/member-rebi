<?php	
	$host = 'localhost'; // Nama hostnya
	$username = 'root'; // Username
	$password = ''; // Password (Isi jika menggunakan password)
	$database = 'db_raporsmk'; // Nama databasenya

	// Koneksi ke MySQL dengan PDO
	$pdo = new PDO('mysql:host='.$host.';dbname='.$database, $username, $password);

	require_once '../../plugins/PHPExcel/PHPExcel.php';


	$fileupload=$_FILES['ex']['name'];
	$tmpFileupload=$_FILES['ex']['tmp_name'];
	$filenew="";
	$type= pathinfo($fileupload);	
	// echo $tmpFileupload;
	$excelreader = new PHPExcel_Reader_Excel2007();
	$loadexcel = $excelreader->load($tmpFileupload); // Load file excel yang tadi diupload ke folder tmp
	if(isset($_POST['guru'])){
		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
		$sql = $pdo->prepare("INSERT INTO data_guru 
			(nama_guru,nip,jk,alamat_guru,telpon_guru,nuptk,nik,jenis_guru,t_lahir,tgl_lahir,email,flag_guru,agama) VALUES
			(:nama,:nip,:jk,:alamat,:tel,:nuptk,:nik,:jenis_guru,:t_lahir,:tgl_lahir,:email,:flag_guru,:agama)");
		$numrow = 1;

		foreach($sheet as $row){

			if($numrow > 1){
				if(!empty($row['A'])){ 
					$a=$row['A'];
				}else{ 
					$a="";
				}
				// 
				if(!empty($row['D'])){ 
					$d=$row['D'];
				}else{ 
					$d="";
				}
				if(!empty($row['C'])){ 
					$c=$row['C'];
				}else{ 
					$c="";
				}
				if(!empty($row['B'])){ 
					$b=$row['B'];
				}else{ 
					$b="";
				}
				// 
				if(!empty($row['E'])){ 
					$e=$row['E'];
				}else{ 
					$e="";
				}
				if(!empty($row['F'])){ 
					$f=$row['F'];
				}else{ 
					$f="";
				}
				if(!empty($row['G'])){ 
					$g=$row['G'];
				}else{ 
					$g="";
				}
				if(!empty($row['H'])){ 
					$h=$row['H'];
				}else{ 
					$h="";
				}
				// 
				if(!empty($row['I'])){ 
					$i=$row['I'];
				}else{ 
					$i="";
				}
				if(!empty($row['J'])){ 
					$j=$row['J'];
				}else{ 
					$j="";
				}
				if(!empty($row['K'])){ 
					$k=$row['K'];
				}else{ 
					$k="";
				}
				if(!empty($row['L'])){ 
					$l=$row['L'];
				}else{ 
					$l="";
				}
				if(!empty($row['M'])){ 
					$m=$row['M'];
				}else{ 
					$m="";
				}
				$on="on";
				$sql->bindParam(':nama', $a);
				$sql->bindParam(':nip', $b);
				$sql->bindParam(':jk', $c);
				$sql->bindParam(':alamat', $d);
				$sql->bindParam(':tel', $e);
				$sql->bindParam(':nuptk', $f);
				$sql->bindParam(':nik', $g);
				$sql->bindParam(':jenis_guru', $h);
				$sql->bindParam(':t_lahir', $i);
				$sql->bindParam(':tgl_lahir', $j);
				$sql->bindParam(':email', $k);
				$sql->bindParam(':flag_guru', $on);
				$sql->bindParam(':agama', $l);
				$sql->execute(); // Eksekusi query insert
				// if($sql->execute()){ // Eksekusi query insert

					$sqlx=$pdo->prepare("select id_guru from data_guru where 
										nama_guru='".$a."' and
										alamat_guru='".$d."' and 
										nik='".$g."' and 
										tgl_lahir='".$j."'
										");				
					$sqlx->execute();
					$mulai=$sqlx->fetchAll();
					foreach ($mulai as $key => $value) {
						$x=$value['id_guru'];
					}

					$gur="gur";
					$sqlxx=$pdo->prepare("insert into akun VALUES(?,?,?,?)");
					$sqlxx->bindParam(1,$g);
					$sqlxx->bindParam(2,$m);
					$sqlxx->bindParam(3,$x);
					$sqlxx->bindParam(4,$gur);
					$sqlxx->execute(); // Eksekusi query insert
				// }
			}
			
			$numrow++; // Tambah 1 setiap kali looping
		}
		
	}else{
		$sheet = $loadexcel->getActiveSheet()->toArray(null, true, true ,true);
		$sql = $pdo->prepare("INSERT INTO data_siswa 
			(
				nama_siswa, tempat_lahir, ttl, nis, jk, alamat_siswa, telpon_siswa, status_dalam_keluarga, agama, di_terima_di_kelas, tanggal_diterima, nama_ayah, nama_ibu, alamat_ortu, telepon_ortu, pekerjaan_ayah, pekerjaan_ibu, nama_wali, alamat_wali, telepon_wali, pekerjaan_wali, jumlah_saudara, anak_ke, sekolah_asal, nisn, angkatan, status
			) VALUES
			(:nama_siswa,:tempat_lahir,:ttl,:nis,:jk,:alamat_siswa,:telpon_siswa,
			:status_dalam_keluarga,:agama,:di_terima_di_kelas,:tanggal_diterima,:nama_ayah,
			:nama_ibu,:alamat_ortu,:telepon_ortu,:pekerjaan_ayah,:pekerjaan_ibu,:nama_wali,
			:alamat_wali,:telepon_wali,:pekerjaan_wali,:jumlah_saudara,:anak_ke,:sekolah_asal,:nisn,:angkatan,:status)
			");
		$numrow = 1;

		foreach($sheet as $row){

			if($numrow > 1){
				if(!empty($row['A'])){ 
					$a=$row['A'];
				}else{ 
					$a="";
				}
				// 
				if(!empty($row['D'])){ 
					$d=$row['D'];
				}else{ 
					$d="";
				}
				if(!empty($row['C'])){ 
					$c=$row['C'];
				}else{ 
					$c="";
				}
				if(!empty($row['B'])){ 
					$b=$row['B'];
				}else{ 
					$b="";
				}
				// 
				if(!empty($row['E'])){ 
					$e=$row['E'];
				}else{ 
					$e="";
				}
				if(!empty($row['F'])){ 
					$f=$row['F'];
				}else{ 
					$f="";
				}
				if(!empty($row['G'])){ 
					$g=$row['G'];
				}else{ 
					$g="";
				}
				if(!empty($row['H'])){ 
					$h=$row['H'];
				}else{ 
					$h="";
				}
				// 
				if(!empty($row['I'])){ 
					$i=$row['I'];
				}else{ 
					$i="";
				}
				if(!empty($row['J'])){ 
					$j=$row['J'];
				}else{ 
					$j="";
				}
				if(!empty($row['K'])){ 
					$k=$row['K'];
				}else{ 
					$k="";
				}
				if(!empty($row['L'])){ 
					$l=$row['L'];
				}else{ 
					$l="";
				}
				// 
				if(!empty($row['M'])){ 
					$m=$row['M'];
				}else{ 
					$m="";
				}
				if(!empty($row['N'])){ 
					$n=$row['N'];
				}else{ 
					$n="";
				}
				if(!empty($row['O'])){ 
					$o=$row['O'];
				}else{ 
					$o="";
				}
				if(!empty($row['P'])){ 
					$p=$row['P'];
				}else{ 
					$p="";
				}
				// 
				if(!empty($row['Q'])){ 
					$q=$row['Q'];
				}else{ 
					$q="";
				}
				if(!empty($row['R'])){ 
					$r=$row['R'];
				}else{ 
					$r="";
				}
				if(!empty($row['S'])){ 
					$s=$row['S'];
				}else{ 
					$s="";
				}
				if(!empty($row['T'])){ 
					$t=$row['T'];
				}else{ 
					$t="";
				}
				// 
				if(!empty($row['U'])){ 
					$u=$row['U'];
				}else{ 
					$u="";
				}
				if(!empty($row['V'])){ 
					$v=$row['V'];
				}else{ 
					$v="";
				}
				if(!empty($row['W'])){ 
					$w=$row['W'];
				}else{ 
					$w="";
				}
				if(!empty($row['X'])){ 
					$x=$row['X'];
				}else{ 
					$x="";
				}
				if(!empty($row['Y'])){ 
					$y=$row['Y'];
				}else{ 
					$y="";
				}
				if(!empty($row['Z'])){ 
					$z=$row['Z'];
				}else{ 
					$z="";
				}

				$on="Baru";
				$sql->bindParam(':nama_siswa', $a);
				$sql->bindParam(':nis', $d);
				$sql->bindParam(':ttl', $c);
				$sql->bindParam(':tempat_lahir', $b);
				$sql->bindParam(':jk', $e);
				$sql->bindParam(':alamat_siswa', $f);
				$sql->bindParam(':telpon_siswa', $g);
				$sql->bindParam(':status_dalam_keluarga', $h);
				$sql->bindParam(':agama', $i);
				$sql->bindParam(':di_terima_di_kelas', $j);
				$sql->bindParam(':tanggal_diterima', $k);
				$sql->bindParam(':nama_ayah', $l);
				$sql->bindParam(':nama_ibu', $m);
				$sql->bindParam(':alamat_ortu', $n);
				$sql->bindParam(':telepon_ortu', $o);
				$sql->bindParam(':pekerjaan_ayah', $p);
				$sql->bindParam(':pekerjaan_ibu', $q);
				$sql->bindParam(':nama_wali', $r);
				$sql->bindParam(':alamat_wali', $s);
				$sql->bindParam(':telepon_wali', $t);
				$sql->bindParam(':pekerjaan_wali', $u);
				$sql->bindParam(':jumlah_saudara', $v);
				$sql->bindParam(':anak_ke', $w);
				$sql->bindParam(':sekolah_asal', $x);
				$sql->bindParam(':nisn', $y);
				$sql->bindParam(':angkatan', $z);
				$sql->bindParam(':status', $on);
				$sql->execute(); // Eksekusi query insert
			}
			
			$numrow++; // Tambah 1 setiap kali looping
		}
	}

header('location: ../../pages/?eRaport=jadi'); // Redirect ke halaman awal

?>

