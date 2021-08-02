<?php

class kontrols{

	public function __construct($db){

		$this->kon=$db;

	}
 
	function cekHakAkses($for,$now){
		// hak akses b,x
		if ($for=='b' && $now == 't') {
			echo "<script>alert('Upgrade Sekarang untuk bisa membuka halaman ini :) !');
		                  window.location.replace('https://member.remotebisnis.com');
		        </script>';";
		         
		}elseif($for=='x'){
			if ($now == 'danisaputraakatsuki@gmail.com' || $now == 'admin') {
				
			}else{
				echo "<script>alert('Upgrade Sekarang untuk bisa membuka halaman ini :) !');
		                  window.location.replace('https://member.remotebisnis.com');
		        </script>';";
			}
		}
		
	}
	function getNamaLengkap($email){
		$sql=(" select * from akun where username='$email'");

		$masuk=$this->kon->prepare($sql);

		$masuk->execute();

		$mulai=$masuk->fetchAll();

		foreach ($mulai as $value => $h) {
			return $h['nama_lengkap'];
		}
	}
	function updatePixel($customPixel, $username, $link){
		$sql=("insert into link_line (custom_pixel,username,id_link) values(?,?,?)");

		$masuk=$this->kon->prepare($sql);

		$masuk->bindparam(1,$customPixel);
		$masuk->bindparam(2,$username);
		$masuk->bindparam(3,$link);

		$masuk->execute();
 
	}
	function getHarga(){
		$sql=(" select * from price where id=1");

		$masuk=$this->kon->prepare($sql);

		$masuk->execute();

		$mulai=$masuk->fetchAll();

		foreach ($mulai as $value => $h) {
			return $h['harga'];
		}
	}
	function getHargaMurah(){
	    return 10;
	}
	function tampil_relasi_where_manual($tbl,$clm,$key,$where){

		$dataA=null;

		for ($i=0; $i <count($clm); $i++) { 

			$dataA=$dataA.''.$clm[$i].',';

		}

		$listCut=substr($dataA,0,strlen($dataA)-1);



		$dataB=null;

		for ($i=0; $i <count($key); $i++) { 

			$dataB=$dataB.''.$key[$i].',';

		}

		$listCutKey=substr($dataB,0,strlen($dataB)-1);



		$dataC=null;

		for ($i=0; $i <count($tbl); $i++) { 

			$dataC=$dataC.''.$tbl[$i].',';

		}

		$listCutTbl=substr($dataC,0,strlen($dataC)-1);





		$sql=(" select ".$listCut." from ".$listCutTbl." where ".$listCutKey." ".$where);

		$masuk=$this->kon->prepare($sql);

		$masuk->execute();

		$mulai=$masuk->fetchAll();

		return $mulai;

		// echo $sql;

	}



	function tampil_relasi_3_tabel($key){

		$sql=(" select * from setup_mengajar,setup_pelajaran,setup_kelas,setup_pelajaran_line where setup_mengajar.id_pelajaran_line=setup_pelajaran_line.id_pelajaran_line and setup_mengajar.id_kelas=setup_kelas.id_kelas and setup_pelajaran.id_pelajaran=setup_pelajaran_line.id_pelajaran and setup_pelajaran_line.id_pelajaran_line=? group by setup_kelas.id_kelas

");

		$masuk=$this->kon->prepare($sql);

		$masuk->bindparam(1,$key);

		$masuk->execute();

		$mulai=$masuk->fetchAll();

		return $mulai;

	}
	function getSingleField($tbl,$field,$value){
		$sql=("select * from $tbl where $field='$value'");

		$masuk=$this->kon->prepare($sql);

		$masuk->execute();

		$mulai=$masuk->fetch();

		return $mulai;
	}
	function eksekusiShow($sql){
		$sql=($sql);

		$masuk=$this->kon->prepare($sql);

		$masuk->execute();

		$mulai=$masuk->fetch();

		return $mulai;
	}
	function getSingleField2($tbl,$field,$value,$field2,$value2){
		$sql=("select * from $tbl where $field='$value'");

		$masuk=$this->kon->prepare($sql);

		$masuk->execute();

		$mulai=$masuk->fetch();

		return $sql;
	}
 
	function eksekusi($key){

		$sql=($key);

		$masuk=$this->kon->prepare($sql);	

		$masuk->execute();

	}

	function tampil_manual($key){

		$sql=($key);

		$masuk=$this->kon->prepare($sql);	

		$masuk->execute();

		$mulai=$masuk->fetchAll();

		return $mulai;

	}

	function tampil_data_baru($tbl,$clm,$inisial){

		$sql=(" select max(".$clm.") as ".$inisial." from ".$tbl);

		$masuk=$this->kon->prepare($sql);

		$masuk->execute();

		$mulai=$masuk->fetchAll();

		return $mulai;

	}

	function tampil_relasi($tbl,$clm,$key,$lastkey,$data){

		$dataA=null;

		for ($i=0; $i <count($clm); $i++) { 

			$dataA=$dataA.''.$clm[$i].',';

		}

		$listCut=substr($dataA,0,strlen($dataA)-1);



		$dataB=null;

		for ($i=0; $i <count($key); $i++) { 

			$dataB=$dataB.''.$key[$i].',';

		}

		$listCutKey=substr($dataB,0,strlen($dataB)-1);



		$dataC=null;

		for ($i=0; $i <count($tbl); $i++) { 

			$dataC=$dataC.''.$tbl[$i].',';

		}

		$listCutTbl=substr($dataC,0,strlen($dataC)-1);



		if(($data==null) && ($lastkey==null)){

			$add="";

		}elseif($lastkey==null){

			$add=$data;

		}else{

			$add="and ".$lastkey."='".$data."'";

		}



		$sql=(" select ".$listCut." from ".$listCutTbl." where ".$listCutKey." ".$add);

		$masuk=$this->kon->prepare($sql);

		$masuk->execute();

		$mulai=$masuk->fetchAll();

		return $mulai;

		

	}

	function login($username,$password){

		$sql=(" select * from akun where username=? and password=? and status is not null");

		$masuk=$this->kon->prepare($sql);

		$masuk->bindparam(1,$username);

		$masuk->bindparam(2,$password);

		$masuk->execute();

		$mulai=$masuk->fetchAll();

		return $mulai;

	}

	function tampil_data($tbl,$data){

		$dataA=null;

		for ($i=0; $i <count($data); $i++) { 

			$dataA=$dataA.''.$data[$i].',';

		}

		$listCut=substr($dataA,0,strlen($dataA)-1);



		$sql=(" select ".$listCut." from ".$tbl);

		$masuk=$this->kon->prepare($sql);

		$masuk->execute();

		$mulai=$masuk->fetchAll();

		return $mulai;

	}

	function getDay($aff,$day){
		return $this->eksekusiShow('select count(username) as jml from akun where afiliasi="'.$aff.'" and create_at="'.$day.'"')['jml'];
	}
	function tampil_data_where($tbl,$clm,$data,$key){



		$dataA=null;

		for ($i=0; $i <count($data); $i++) { 

			$dataA=$dataA.''.$data[$i].',';

		}

		$listCut=substr($dataA,0,strlen($dataA)-1);



		$sql=(" select ".$listCut." from ".$tbl." where ".$clm."='".$key."'");

		$masuk=$this->kon->prepare($sql);

		$masuk->execute();

		$mulai=$masuk->fetchAll();

		return $mulai;

	}

	function sql($tbl,$clm,$data,$key){



		$dataA=null;

		for ($i=0; $i <count($data); $i++) { 

			$dataA=$dataA.''.$data[$i].',';

		}

		$listCut=substr($dataA,0,strlen($dataA)-1);



		$sql=(" select ".$listCut." from ".$tbl." where ".$clm."='".$key."'");

		$masuk=$this->kon->prepare($sql);

		$masuk->execute();

		$mulai=$masuk->fetchAll();

		return $sql;

	}

	function tampil_data_multi_wherex($tbl,$data,$key){

		$dataA=null;

		for ($i=0; $i <count($data); $i++) { 

			$dataA=$dataA.''.$data[$i].',';

		}

		$listCut=substr($dataA,0,strlen($dataA)-1);

		

		$where=null;

		for ($i=0; $i <count($key); $i++) { 

			$where=$where.''.$key[$i].' and ';

		}

		$listCutWhere=substr($where,0,strlen($where)-4);



		$dataTbl=null;

		for ($i=0; $i <count($tbl); $i++) { 

			$dataTbl=$dataTbl.''.$tbl[$i].',';

		}

		$listCutTbl=substr($dataTbl,0,strlen($dataTbl)-1);



		$sql=(" select ".$listCut." from ".$listCutTbl." where ".$listCutWhere);

		$masuk=$this->kon->prepare($sql);

		$masuk->execute();

		$mulai=$masuk->fetchAll();

		// return $mulai;

		echo $sql;

	}

	function tampil_data_multi_where($tbl,$data,$key){

		$dataA=null;

		for ($i=0; $i <count($data); $i++) { 

			$dataA=$dataA.''.$data[$i].',';

		}

		$listCut=substr($dataA,0,strlen($dataA)-1);

		

		$where=null;

		for ($i=0; $i <count($key); $i++) { 

			$where=$where.''.$key[$i].' and ';

		}

		$listCutWhere=substr($where,0,strlen($where)-4);



		$dataTbl=null;

		for ($i=0; $i <count($tbl); $i++) { 

			$dataTbl=$dataTbl.''.$tbl[$i].',';

		}

		$listCutTbl=substr($dataTbl,0,strlen($dataTbl)-1);



		$sql=(" select ".$listCut." from ".$listCutTbl." where ".$listCutWhere);

		$masuk=$this->kon->prepare($sql);

		$masuk->execute();

		$mulai=$masuk->fetchAll();

		return $mulai;

		

	}

	function rubah_data($tbl,$ubah,$data,$key){

		$clmn=null;

		$multiWhere=null;

		for ($ix=0; $ix <count($ubah); $ix++) { 

			$clmn=$clmn.''.$ubah[$ix].',';

		}

		for ($ix=0; $ix <count($data); $ix++) { 

			$multiWhere=$multiWhere.''.$data[$ix].'="'.$key[$ix].'" and ';

		}

		$listCut=substr($clmn,0,strlen($clmn)-1);	

		$listCutMulti=substr($multiWhere,0,strlen($multiWhere)-4);	



		// tidak ada where

		if($data==null || $key==null){

			$sm="";

		}else{

			$sm="=";

		}

		if($data==null && $key==null){

			$where='';

		}else{

			$where='where';

		}

		// batas tdk ada where

		$sql=("update ".$tbl." set ".$listCut." ".$where." ".$listCutMulti);

		$masuk=$this->kon->prepare($sql);

		// echo $sql;

		

		if($masuk->execute()){

			header('location:../../pages/?eRaport='.$this->link.'&msg=berhasil');
			// echo '<a href="../../pages/?eRaport='.$this->link.'">back</a>';
			// echo $sql;		

		}else{
			echo 'strings';

			header('location:../../pages/?eRaport='.$this->link);

			echo $sql;

		}

		

	}

	function rubah_akun_guru($sql){

		$sql=($sql);

		$masuk=$this->kon->prepare($sql);

		if($masuk->execute()){

			header('location:../../pages/?eRaport='.$this->link);

		}else{

			header('location:../../pages/?eRaport='.$this->link);

		}

	}

	function masukan_data($tbl,$clm,$data){

		$clmn=null;

		for ($ix=0; $ix <count($clm); $ix++) { 

			$clmn=$clmn.''.$clm[$ix].',';

		}



		$dataA=null;

		for ($i=0; $i <count($data); $i++) { 

			$dataA=$dataA.'"'.$data[$i].'",';

		}

		

		$listCut=substr($dataA,0,strlen($dataA)-1);		

		$listCutCol=substr($clmn,0,strlen($clmn)-1);		

		

		$sql=("insert into ".$tbl." (".$listCutCol.")

					values(".$listCut.")

		");

		// echo $sql;

		$masuk=$this->kon->prepare($sql);

		

		if($masuk->execute()){

			header('location:../../pages/?eRaport='.$this->link);			

		}else{

			header('location:../../pages/?eRaport='.$this->link);

		}

	}
	function masukan_data_luar_redirect($tbl,$clm,$data){

		$clmn=null;

		for ($ix=0; $ix <count($clm); $ix++) { 

			$clmn=$clmn.''.$clm[$ix].',';

		}



		$dataA=null;

		for ($i=0; $i <count($data); $i++) { 

			$dataA=$dataA.'"'.$data[$i].'",';

		}

		

		$listCut=substr($dataA,0,strlen($dataA)-1);		

		$listCutCol=substr($clmn,0,strlen($clmn)-1);		

		

		$sql=("insert into ".$tbl." (".$listCutCol.")

					values(".$listCut.")

		");

		// echo $sql;

		$masuk=$this->kon->prepare($sql);

		

		$masuk->execute();
		

	}

	public function link(){

		header('location:../../pages/?eRaport='.$this->link);	

	}

	public function hapus_satu_data($r=0){

		$sql=("delete from ".$this->tbl." where ".$this->clm." = :where");

		$masuk=$this->kon->prepare($sql);

		$masuk->bindparam(':where',$this->data);

		

		if($masuk->execute()){
			if ($r==0) {
				header('location:../../pages/?eRaport='.$this->link);			
			}

		}else{
			if ($r==0) {
				header('location:../../pages/?eRaport='.$this->link);
			}

		}

	}

}


  require_once("/home/remotebi/public_html/member/smtp/src/PHPMailer.php");
  require_once("/home/remotebi/public_html/member/smtp/src/SMTP.php");

  function kirimEmail($paramNamaPenerima,$emailpengirim,$namapengirim,$emailpenerima,$judulemail,$konten){

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    // $mail->SMTPDebug = 3;                               
    $namaPenerima='';
    if (!empty($paramNamaPenerima)) {
      $namaPenerima = $_POST['namaPenerima'];
    }

    $mail->isSMTP();                                   
    $mail->Host = 'mail.remotebisnis.com';
    $mail->SMTPAuth = true;
    $mail->Username = $emailpengirim;
    $mail->Password = 'Nckh*0318#';
    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;       

    $mail->From = $emailpengirim;
    $mail->FromName = $namapengirim;
    
    $mail->addAddress($emailpenerima, $namaPenerima);
    $mail->isHTML(true);
    $mail->Subject = $judulemail;
    $mail->Body = $konten;
    // $mail->AltBody = "This is the plain text version of the email content";

    if(!$mail->send()) {
        echo "Opps, terdapat kesalahan, mohon hubungi admain Rebi !";
        // echo "Mailer Error: " . $mail->ErrorInfo;
    }
  }

	// batas subrek mailchip

require('/home/remotebi/public_html/member/smtp/src/Mailchimp.php');    // You may have to modify the path based on your own configuration.
function subrekmc($email,$name){
	$api_key = "7ab4ab2a55dc3f6bb1da1ce37ed1e893-us1";
	$list_id = "bdfb06ead4";

	$Mailchimp = new Mailchimp( $api_key );
	$Mailchimp_Lists = new Mailchimp_Lists( $Mailchimp );

	try 
	{
	    $subscriber = $Mailchimp_Lists->subscribe(
	        $list_id,
	        array('email' => $email),      // Specify the e-mail address you want to add to the list.
	        array('FNAME' => $name, 'LNAME' => ''),   // Set the first name and last name for the new subscriber.
	        'text',    // Specify the e-mail message type: 'html' or 'text'
	        FALSE,     // Set double opt-in: If this is set to TRUE, the user receives a message to confirm they want to be added to the list.
	        TRUE       // Set update_existing: If this is set to TRUE, existing subscribers are updated in the list. If this is set to FALSE, trying to add an existing subscriber causes an error.
	    );
	} 
	catch (Exception $e) 
	{
	    echo "Caught exception: " . $e;
	}

	if ( ! empty($subscriber['leid']) )
	{
	    echo "Mohon tunggu !!....";
	}
	else
	{
	    echo "... add attempt failed.";
	    // echo "Subscriber add attempt failed.";
	}
}