<?php

class koneksi{

	public function hubungkan(){

		$this->kon=null;

		try{

			$this->kon=new pdo('mysql:host=localhost;dbname=remotebi_memberarea;','remotebi_memberarea','Nckh*0318#');			

		}catch(PDOExeption $o){

			echo 'Koneksi Gagal lihat -> '.$o->getMessage();

		}return $this->kon;

	}

}

?>