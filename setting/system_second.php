<?php
class kontrols{
	public function __construct($db){
		$this->kon=$db;
	}
	function tampil_relasi_where_manual($tbl,$clm,$key,$where){
		$dataA=null;
		for ($i=0; $i <count($clm); $i++) { 
			$dataA=$dataA.''.$clm[$i].',';
		}
		$listCut=substr($dataA,0,$dataA-1);

		$dataB=null;
		for ($i=0; $i <count($key); $i++) { 
			$dataB=$dataB.''.$key[$i].',';
		}
		$listCutKey=substr($dataB,0,$dataB-1);

		$dataC=null;
		for ($i=0; $i <count($tbl); $i++) { 
			$dataC=$dataC.''.$tbl[$i].',';
		}
		$listCutTbl=substr($dataC,0,$dataC-1);


		$sql=(" select ".$listCut." from ".$listCutTbl." where ".$listCutKey." ".$where);
		$masuk=$this->kon->prepare($sql);
		$masuk->execute();
		$mulai=$masuk->fetchAll();
		return $mulai;
	}

	function tampil_relasi_3_tabel($key){
		$sql=(" select * from setup_mengajar,setup_pelajaran,setup_kelas where
				setup_mengajar.id_pelajaran=setup_pelajaran.id_pelajaran and
				setup_mengajar.id_kelas=setup_kelas.id_kelas and setup_pelajaran.id_pelajaran=?");
		$masuk=$this->kon->prepare($sql);
		$masuk->bindparam(1,$key);
		$masuk->execute();
		$mulai=$masuk->fetchAll();
		return $mulai;
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
		$listCut=substr($dataA,0,$dataA-1);

		$dataB=null;
		for ($i=0; $i <count($key); $i++) { 
			$dataB=$dataB.''.$key[$i].',';
		}
		$listCutKey=substr($dataB,0,$dataB-1);

		$dataC=null;
		for ($i=0; $i <count($tbl); $i++) { 
			$dataC=$dataC.''.$tbl[$i].',';
		}
		$listCutTbl=substr($dataC,0,$dataC-1);

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
		$sql=(" select * from akun where username=? and password=?");
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
		$listCut=substr($dataA,0,$dataA-1);

		$sql=(" select ".$listCut." from ".$tbl);
		$masuk=$this->kon->prepare($sql);
		$masuk->execute();
		$mulai=$masuk->fetchAll();
		return $mulai;
	}
	function tampil_data_where($tbl,$clm,$data,$key){

		$dataA=null;
		for ($i=0; $i <count($data); $i++) { 
			$dataA=$dataA.''.$data[$i].',';
		}
		$listCut=substr($dataA,0,$dataA-1);

		$sql=(" select ".$listCut." from ".$tbl." where ".$clm."='".$key."'");
		$masuk=$this->kon->prepare($sql);
		$masuk->execute();
		$mulai=$masuk->fetchAll();
		return $mulai;
	}
	function tampil_data_multi_where($tbl,$data,$key){
		$dataA=null;
		for ($i=0; $i <count($data); $i++) { 
			$dataA=$dataA.''.$data[$i].',';
		}
		$listCut=substr($dataA,0,$dataA-1);
		
		$where=null;
		for ($i=0; $i <count($key); $i++) { 
			$where=$where.''.$key[$i].' and ';
		}
		$listCutWhere=substr($where,0,$where-4);

		$dataTbl=null;
		for ($i=0; $i <count($tbl); $i++) { 
			$dataTbl=$dataTbl.''.$tbl[$i].',';
		}
		$listCutTbl=substr($dataTbl,0,$dataTbl-1);

		$sql=(" select ".$listCut." from ".$listCutTbl." where ".$listCutWhere);
		$masuk=$this->kon->prepare($sql);
		$masuk->execute();
		$mulai=$masuk->fetchAll();
		return $mulai;
	}
	//BACK UP RUBAH_DATA
	/*function rubah_data($tbl,$ubah,$data,$key){
		$clmn=null;
		for ($ix=0; $ix <count($ubah); $ix++) { 
			$clmn=$clmn.''.$ubah[$ix].',';
		}

		$listCut=substr($clmn,0,$clmn-1);				
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
		$sql=("update ".$tbl." set ".$listCut." ".$where." ".$data."".$sm."'".$key."'");
		$masuk=$this->kon->prepare($sql);
		
		if($masuk->execute()){
			header('location:../../pages/?eRaport='.$this->link);			
		}else{
			header('location:../../pages/?eRaport='.$this->link);
		}
	}*/
	function rubah_data($tbl,$ubah,$data,$key){
		$clmn=null;
		$multiWhere=null;
		for ($ix=0; $ix <count($ubah); $ix++) { 
			$clmn=$clmn.''.$ubah[$ix].',';
		}
		for ($ix=0; $ix <count($data); $ix++) { 
			$multiWhere=$multiWhere.''.$data[$ix].'="'.$key[$ix].'" and ';
		}
		$listCut=substr($clmn,0,$clmn-1);	
		$listCutMulti=substr($multiWhere,0,$multiWhere-4);	

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
		
		$listCut=substr($dataA,0,$dataA-1);		
		$listCutCol=substr($clmn,0,$clmn-1);		
		
		$sql=("insert into ".$tbl." (".$listCutCol.")
					values(".$listCut.")
		");
		$masuk=$this->kon->prepare($sql);
		
		if($masuk->execute()){
			header('location:../../pages/?eRaport='.$this->link);			
		}else{
			header('location:../../pages/?eRaport='.$this->link);
		}
	}
	public function hapus_satu_data(){
		$sql=("delete from ".$this->tbl." where ".$this->clm." = :where");
		$masuk=$this->kon->prepare($sql);
		$masuk->bindparam(':where',$this->data);
		
		if($masuk->execute()){
			header('location:../../pages/?eRaport='.$this->link);			
		}else{
			header('location:../../pages/?eRaport='.$this->link);
		}
	}
}