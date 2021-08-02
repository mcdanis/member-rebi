<?php //$sistem->cekHakAkses('b',$akun['type_akun']); ?>

<?php 

  $tbl="master_ecource";

  $data="*";

  $clm="id";

  $key=$_GET['idx'];

  $materi=$sistem->tampil_data_where($tbl,$clm,$data,$key);

  foreach ($materi as $key => $tDataKl){}

?>
<style>
  @media only screen and (max-width: 600px) {
    .content-header{
      grid-template-columns: 50% 50% !important;
    }
  }
</style>
<div class="box box-primary">

  <div class="box-header with-border">

    <h2 class="box-title"><i class="fa fa-graduation-cap"></i> E-COURSE : <?= $tDataKl['nama'] ?></h2>

  </div>

    <div class="box-body">

      <form action="../setting/function/proses_hapus_where.php" method="POST">
 

          

        <?php

            $link=base64_encode("data_guru");

            

            print_r($x);



        ?>

        <input type="hidden" name="link" value="<?php echo $link;?>">

        <input type="hidden" name="tbl" value="data_guru">

        <input type="hidden" name="clm" value="id_guru">

         <section class="content">

     <!-- isi konten -->

          <section class="content-header" style="grid-template-columns: 30% 30% 30%; display: grid">
              <?php 

                $tbl="line_ecource";

                $data="*";

                $clm="id_master";

                $key=$_GET['idx'];

                $materi=$sistem->tampil_data_where($tbl,$clm,$data,$key);

                $n=0;

                foreach ($materi as $key => $data):

              ?>
              <div style="padding: 3px;text-align: center;">
                  <a href="?eRaport=<?= base64_encode('list') ?>&idx=<?= $_GET['idx'] ?>&judul=<?= $tDataKl['nama'] ?>&id=<?php echo $data['id'] ?>" title="">
                    <i style="font-size: 100px" class="fa fa-folder"></i> <br> <h3 style="margin-top: 0px"><?php echo strtoupper($data['nama']) ?></h3>
                  </a>            
              </div>

              <?php endforeach ?>
            
            
          </section>

  

      <!-- batas panel jurusan -->

          <!-- batas ini konetsen get -->

    </section>

      </form>

    </div>

 

</div>

<script type="text/javascript">
 
  function cekMengajar(nilai){

    var idGuru=$("#idGuru"+nilai).attr("data-id");

    $.ajax({

      type: 'POST',

      url: "../setting/function/proses_cek_mengajar_js_where.php",

      data: {"id_guru":idGuru},

      success: function(a) {

        $(".list").html(a);

      }

    });

    // $('#examplex').DataTable();

  }

  function o(){

    $("#example1").DataTable().destroy();

  }

</script>