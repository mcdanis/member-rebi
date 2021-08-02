<?php //$sistem->cekHakAkses('b',$akun['type_akun']); ?>

<?php 
// echo preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","<iframe width=\"420\" height=\"315\" src=\"//www.youtube.com/embed/$1\" frameborder=\"0\" allowfullscreen></iframe>",'https://www.youtube.com/watch?v=d-5J27ZXj0k');

  $tbl="line_ecource";

  $data="*";

  $clm="id";

  $key=$_GET['id'];

  $materi=$sistem->tampil_data_where($tbl,$clm,$data,$key);

  $n=0;

  foreach ($materi as $key => $data){}
  
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

    <h3 class="box-title"><i class="fa fa-graduation-cap"></i> Ecource : <?php echo $data['nama'] ?> </h3>

  </div>

    <div class="box-body">
      <!-- <h4 id="memuat"><i class="fa fa-spinner fa-spin"></i> Sedang Memuat</h4> -->
      <b style="color: green; font-style: italic;">Tunggu beberapa saat jika file/vidio tidak muncul, file/vidio membutuhkan waktu untuk diload :)</b>
      <p><i>*Disarankan membuka memberarea ini menggunakan PC/Laptop dan jika di Smartphone gunakan browser yang bagus(disarankan Chrome, Opera dll)</i></p>
      <label><i class="fa fa-folder"></i> <?php echo strtoupper($_GET['judul']) ?> <i class="fa fa-arrow-right"></i> <?php echo strtoupper($data['nama']) ?></label>
      <form action="../setting/function/proses_hapus_where.php" method="POST">
 
         <input type="hidden" name="tbl" value="data_guru">

        <input type="hidden" name="clm" value="id_guru">

         <section class="content sm-p-0">

     <!-- isi konten -->

            <section class="content-header sm-p-0"> 
              
            <?php $no=1; if ($data['type']=='file'): ?>
             
            <table id="example1" class="table table-bordered table-striped table-responsive">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Ebook</th>
                </tr>
              </thead>
               <tbody>
                        <?php 

                        $n=1;
                         if ($handle = opendir($data['link'])) {
                        while (false !== ($entry = readdir($handle))) {
                            if ($entry != "." && $entry != "..") {
                         
            ?>
                <tr>
                  <td><?= $no++; ?></td>
                  <td>
                    <a target="_blank" href='https://member.remotebisnis.com/<?= substr($data['link'],34,90).'/'.$entry ?>'>
                      <?php echo $entry ?>
                    </a>                      
                  </td>
                </tr>

        <?php    }
            }
            closedir($handle); 
          } ?>
      </tbody>
</table>
 

         
<?php 
  else:
?>
<div style=" grid-template-columns: 50% 50%;display: grid;" id="flex2">
<?php
      $tbl="list_vidio";

      $data="*";

      $clm="id_line";

      $key=$_GET['id'];

      $materi=$sistem->tampil_data_where($tbl,$clm,$data,$key);

      $n=1;
		$idxmenu=$sistem->tampil_data_where('master_ecource','id','*',$_GET['idx']);
		foreach ($idxmenu as $value => $idtyp) {
			$idtype = $idtyp['id_menu'];
		}
		$idmenu=$sistem->tampil_data_where('menu','id','*',$idtype);
		foreach ($idmenu as $value => $idtyp) {
			$idtypemenu = $idtyp['typ'];
		}

      foreach ($materi as $key => $data){
      	
        echo '<div style="padding-left:15px;padding-right:15px;"><h3 class="sm-f-15">'.$n++.'. '.$data['judul'].'</h3>';
      	if (!empty($idtypemenu)) {
      		// if ($n<=18) {
				$link = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","https://youtube.com/embed/$1",$data['link']);
			echo "<button type='button' class='btn btn-sm btn-primary' onclick='return loadVidio(`100%`,`215`,`".$link."`,".$n.")'><i class='fa fa-youtube-play'></i> Load Vidio</button><section id='panel".$n."'></section>";
	      	// }else{
	      	// 	echo "<a href='#' data-toggle='modal' data-target='#update'><i style='font-size:140px' class='fa fa-lock'></i><br><span style='font-size:25px'>Buka Kunci</span></a>";
	      	// }
		}else{
			$link = preg_replace("/\s*[a-zA-Z\/\/:\.]*youtube.com\/watch\?v=([a-zA-Z0-9\-_]+)([a-zA-Z0-9\/\*\-\_\?\&\;\%\=\.]*)/i","https://youtube.com/embed/$1",$data['link']);
      $mystring = $data['link'];

      if(strpos($mystring, 'remotebisnis') !== false){
        echo "<h4><a href='".$mystring."' target='_blank'>Ke Vidio ...</a></h4>";
      } else{
        echo "<button type='button' class='btn btn-sm btn-primary' onclick='return loadVidio(`100%`,`215`,`".$link."`,".$n.")'><i class='fa fa-youtube-play'></i> Load Vidio</button><section id='panel".$n."'></section>";
      }
			
		}
      	echo '</div>';

    
      }
  ?>

  </div>
<?php endif; ?>

      </section>

  

      <!-- batas panel jurusan -->

          <!-- batas ini konetsen get -->

    </section>

      </form>

    </div>

 

</div>

 