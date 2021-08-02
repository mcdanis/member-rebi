<?php 

	
	// $materi=$sistem->tampil_manual("select * from list_vidio where judul like '%$_GET['q']%' ");
	$galleries =$_GET['q'];
	$arr = explode(" ", $galleries);

	$sql = 'select * from list_vidio where';

	$lenght = count($arr);

	for ($i=0; $i<$lenght; $i++) {
	    if ($i == 0) {
	        $sql .=" judul like '%" . $arr[$i]. "%'";
	    } else {
	        $sql .=" or judul like '%" . $arr[$i]. "%'";
	    }
	}
    $materi=$sistem->tampil_manual($sql.' limit 30 ');

	$n=1;
 
?>
<style>
	@media only screen and (max-width: 600px) {
	    #flex{
	      grid-template-columns: 100% !important;
	    }
	    #flex2{
	      grid-template-columns: 100% !important;
	    }
	  }
</style>
<div class="box box-primary">

  <div class="box-header with-border">

    <h3 class="box-title"><i class="fa fa-play"></i> Hasil pencarion '<?= $_GET['q'] ?>' </h3>

  </div>

    <div class="box-body">
    	<div class="input-group margin col-md-7 col-sm-12">
			<input type="text" class="form-control" name="q" id="field_cari2" placeholder="tulis penggalan kata">
			<span class="input-group-btn">
			
			<button type="button" onclick="return cari2()" class="btn btn-primary"> Cari ..</button>
			</span>
		</div>
    	 
		<div style=" grid-template-columns: 50% 50%;display: grid;" id="flex2">

	    	<?php 
	    		foreach ($materi as $key => $data){
		    		$idline = $sistem->getSingleField('line_ecource','id',$data['id_line'])['id_master'];
	    			
		    		$master_ecourse = $sistem->getSingleField('master_ecource','id',$idline)['nama'];

			        echo '<div style="padding-left:15px;padding-right:15px;"><h3>'.$n++.'. '.$data['judul'].'</h3> Ada di : <b class="label label-info">'.$master_ecourse.'</b>';
			      	// if (!empty($idtypemenu)) {
			      		// if ($n<=18) {
							echo preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","<iframe width=\"100%\" height=\"215\" src=\"//www.youtube.com/embed/$1\" frameborder=\"0\" allowfullscreen></iframe>",$data['link']);
				      	// }else{
				      	// 	echo "<a href='#' data-toggle='modal' data-target='#update'><i style='font-size:140px' class='fa fa-lock'></i><br><span style='font-size:25px'>Buka Kunci</span></a>";
				      	// }
					// }else{
					// 	echo preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","<iframe width=\"100%\" height=\"215\" src=\"//www.youtube.com/embed/$1\" frameborder=\"0\" allowfullscreen></iframe>",$data['link']);
					// }
			      	echo '</div>';
			    }
	    	?>
	    </div>
    </div>
</div>