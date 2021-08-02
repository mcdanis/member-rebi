<?php   
date_default_timezone_set('Asia/Jakarta');

  setlocale(LC_TIME, 'id_ID.utf8');
  $hariIni = new DateTime();

  $hari = strftime('%A, %d %B %Y', $hariIni->getTimestamp());

$sistem->cekHakAkses('x',$akun['username']);  
function str_replace_first($from, $to, $content){    
  $from = '/'.preg_quote($from, '/').'/';    return preg_replace($from, $to, $content, 1);  
}?>

<style type="text/css" media="screen">  li{

  margin: 10px;

  }

  ul{

    list-style: none  }

  .fa-trash{

    color: red  }

  .select2.select2-container{

    width: 100%;

    height: 100px;

    overflow: scroll;

  }

</style>

<div class="box box-primary">   

  <div class="alert alert-info" style="position: fixed; z-index: 999">      

    <a href="#maskBody" class="btn btn-sm btn-info">

      <i class="fa fa-arrow-circle-up">

      </i> Go Top

    </a>      

    <a href="#maskUser" class="btn btn-sm btn-info">Add Sub Menu/Users

    </a>      
<!-- 
    <a href="?eRaport=<?php echo base64_encode('list_prospek_new') ?>" class="btn btn-sm btn-info">xx

    </a> -->     
   <!--  <a href="?eRaport=<?php echo base64_encode('a') ?>" class="btn btn-sm btn-info">Template

    </a>  -->     

    <a href="#maskNotifikasi" class="btn btn-sm btn-info">Notifikasi

    </a>      

    <a href="#maskMenu" class="btn btn-sm btn-info">Membuat Menu

    </a>      

    <a href="#produk" class="btn btn-sm btn-info">

      <i class="fa fa-shopping-cart">

      </i> Tambah Produk

    </a>      

    <a href="#wa" class="btn btn-sm btn-info">

      <i class="fa fa-comment">

      </i> Broadcast WA

    </a>      

    <a href="#kritikan" class="btn btn-sm btn-info">

      <i class="fa fa-comment">

      </i> Kritik

    </a>    

  </div>   

  <div class="box-header with-border">      

    <h3 class="box-title">

      <i class="fa fa-graduation-cap">

      </i> E-Book

    </h3>   

  </div>   

  <div class="box-body" id="maskBody">              

    <?php if ($_GET['info']=='berhasil'): ?>          

    <div class="alert alert-success">            

      <i class="">

      </i> Proses berhasil !          

    </div>      

    <?php endif ?>         

    <section class="content">            

      <!-- isi konten -->            

      <section class="content-header">                             

        <ul class="mb-1 pl-3 pb-2">                  

          <?php                      $tbl="master_ecource";                                          $data="*";                                                           $materi=$sistem->tampil_data($tbl,$data);                                          $n=0;                     $nomor=1;                     foreach ($materi as $key => $datamaster):                  ?>                  

          <li>                                          

            <h3>                      

              <a href="#modl" onclick="return editname('<?= $datamaster['nama'] ?>',<?= $datamaster['id'] ?>,'master_ecource','id')">                         

                <i class="fa fa-pencil ic-w mr-1">

                </i>

                <?php echo $nomor++.'. '.$datamaster['nama'] ?>                       

              </a> - 

              <a onclick="javascript:return confirm('Anda Yakin Ingin menghapus akun ini ?')" href="../setting/function/proses_hapus_where.php?tbl=master_ecource&clm=id&id=<?= $datamaster['id'] ?>" title="">

                <i class="fa fa-trash">

                </i> Del..

              </a>

            </h3>                     

            <ul class="nested">                       

              <li>

                <a style="background: #009688;color: white;padding: 4px;border-radius: 5px;" href="#as" onclick="return addSubMenu('<?= $datamaster['id'] ?>','<?= $datamaster['nama'] ?>' )">

                  <i class="fa fa-plus">

                  </i> 

                  <?php echo $datamaster['nama'] ?>

                </a>

              </li>                        

              <?php                            $tbl="line_ecource";                                                      $data="*";                                                      $clm="id_master";                                                      $key=$datamaster['id'];                                                                                 $mx=$sistem->tampil_data_where($tbl,$clm,$data,$key);                                                      $n=0;                                                      foreach ($mx as $key => $line):                           ?>                        

              <li style="background: #e2e2e2; padding: 10px; width: 100%;height: 200px;overflow: scroll;">                           

                <h4>                              

                  <a href="#modl" onclick="return editname('<?= $line['nama'] ?>',<?= $line['id'] ?>,'line_ecource','id')">                                 

                    <i class="fa fa-pencil ic-w mr-1">

                    </i>

                    <?php echo $line['nama'] ?>                               

                  </a>                               - 

                  <a onclick="javascript:return confirm('Anda Yakin Ingin menghapus akun ini ?')" href="../setting/function/proses_hapus_where.php?tbl=line_ecource&clm=id&id=<?= $line['id'] ?>" title="">

                    <i class="fa fa-trash">

                    </i> Del..

                  </a>                            

                </h4>                           

                <ul class="nested" style="list-style: decimal;">                            

                  <?php if ($line['type']=='vidio'): ?>               

                  <li>

                    <a href="#as" style="background: #ff9800;color: white;padding: 4px;border-radius: 5px;" onclick="return addSubList('<?= $line['id'] ?>','<?= $line['nama'] ?>' )">

                      <i class="fa fa-plus">

                      </i> 

                      <?php echo $line['nama'] ?>

                    </a>

                  </li>                             

                  <?php endif ?>                              

                  <?php                                  if ($line['type']=='vidio') {                                                                      $tbl="list_vidio";                                                                      $data="*";                                                                      $clm="id_line";                                                                      $key=$line['id'];                                                                                                         $mx=$sistem->tampil_data_where($tbl,$clm,$data,$key);                                                                      $n=0;                                                                      foreach ($mx as $key => $list):                               ?>                                  

                  <li>

                    <?php echo $list['link']; ?> 

                    <b>(

                      <?php echo $list['judul']; ?>)

                    </b> - 

                    <a onclick="javascript:return confirm('Anda Yakin Ingin menghapus akun ini ?')" href="../setting/function/proses_hapus_where.php?tbl=list_vidio&clm=id&id=<?= $list['id'] ?>" title="">

                      <i class="fa fa-trash">

                      </i> Del..

                    </a>

                  </li>                              

                  <?php                                  endforeach;                                  }else{                                   $tbl="line_ecource";                                                                      $data="*";                                                                      $clm="id";                                                                      $key=$line['id'];                                                                      $materi=$sistem->tampil_data_where($tbl,$clm,$data,$key);                                                                      $n=0;                                                                      foreach ($materi as $key => $pdf){}                                     if ($handle = opendir($pdf['link'])) {                                       while (false !== ($entry = readdir($handle))) {                                           if ($entry != "." && $entry != "..") {                                     ?>                                      

                  <li>

                    <?= $entry ?>

                  </li>                                  

                  <?php                                      }                                     }                                     closedir($handle);                                    }                                  }                                 ?>                                                            

                </ul>                        

              </li>                                                

              <?php endforeach ?>                     

            </ul>                  

            <?php endforeach; ?>                  

          </li>                  

          <li>

            <a href="#as" onclick="return addMaster()" style=" background: #0097ff;color: white;padding: 4px;border-radius: 5px;">

              <i class="fa fa-plus">

              </i> Master Ecource

            </a>

          </li>               

        </ul>               

        <hr>               

        <h2 id="maskUser">USER MEMBER

        </h2>               

        <div class="table-responsive">          

          <table id="example1" class="table table-bordered table-hover table-striped">            

            <thead>             

              <tr class="d-flex">               

                <th>No

                </th>               

                <th>Username

                </th>                               

                <th class="col-1">Nama Lengkap

                </th>                                           

                <th>Group

                </th>               

                <th>Tahu

                </th>               

                <th>Fitur Keinginan

                </th>                

                <th>Sering Buka Email

                </th>                

                <th>Sering Menggunakan PC

                </th>                           

              </tr>           

            </thead>            

            <tbody>             

              <?php                 $no=1;                $tbl="akun";                $data="*";                $users=$sistem->tampil_data($tbl,$data);                foreach ($users as $value => $user):              ?>                

              <tr>                  

                <td>

                  <?= $no++ ?>

                </td>                 

                <td>                    

                  <?= $user['username'] ?> 

                  <a onclick="javascript:return confirm('Anda Yakin Ingin menghapus AKUN INI BAHAYA LHO ?')" href="../setting/function/proses_hapus_where.php?tbl=akun&clm=username&id=<?= $user['username'] ?>" title="">

                    <i class="fa fa-trash">

                    </i> hapus

                  </a>                    

                  <br>                    

                  <b>JK

                  </b> : 

                  <?= $user['jk'] ?>

                  <br>                    

                  <b>Usia

                  </b> : 

                  <?= $user['usia'] ?>

                  <br>                    

                  <b>Web

                  </b> : 

                  <?= $user['website'] ?>

                  <br>                    

                  <b>Join : 

                  </b> 

                  <?= $user['create_at'] ?>

                  <br>                    

                  <b>Pass : 

                  </b>

                  <?= $user['password'] ?>

                  <br>                    

                  <b>

                    <?= $user['kode_unik'] ?>

                  </b>                  

                </td>                 

                <td>

                  <u>

                    <?= $user['nama_lengkap'] ?>

                  </u>

                  <br>

                  <a target="_blank" href="https://wa.me/<?= str_replace_first('0','62',$user['nowa']); ?>&text">

                    <?= $user['password'] ?>

                  </a>

                  <br>

                  <?php echo $user['domisili']; if($user['status'] == ''): ?>
                  <a href="../setting/function/proses_tambah.php?username=<?= $user['username'] ?>&type=ok" class="btn btn-sm btn-primary">Ok kan</a>
                  <?php endif; ?>

                </td>                                                     

                <td>

                  <?= $user['grup'] ?>

                </td>                 

                <td>

                  <?= $user['tahu'] ?>

                </td>                 

                <td>

                  <?= $user['fitur_keinginan'] ?>

                </td>                  

                <td>

                  <?= $user['buka_email'] ?>

                </td>                  

                <td>

                  <?= $user['gadget'] ?>

                </td>                                   

                <!-- <td style="width: 70%">                      <form action="../setting/function/proses_update_user.php" method="post" onsubmit="javascript:return confirm('Yakin merubah akses ini ')">                       <input type="hidden" name="username" value="<?= $user['username'] ?>">                                <b><?php echo $jmlakses ?> Akses</b>                                <input type="checkbox" <?php echo ($user['type_akun'] == 'full') ? 'checked' : ''; ?> name="full"> Full                     <!- <button type="submit" class="pull-right btn-sm btn btn-success"><i class="fa fa-user"></i> Save <?= $user['username'] ?></button>                   </form>                 </td> -->               

              </tr>             

              <?php endforeach ?>           

            </tbody>          

          </table>        

        </div>       

        <hr>      

        <h3 id="maskNotifikasi">

          <i class="fa fa-bell">

          </i> Membuat Notifikasi

        </h3>      

        <form action="../setting/function/proses_tambah.php" method="post" >        

          <input type="hidden" name="type" value="notifikasi">        

          <input type="hidden" name="link" value="<?php echo base64_encode('teing') ?>">        

          <label>Headline

          </label>        

          <input type="text" name="headline" class="form-control">

          <br>        

          <label>Text

          </label>

          <br>        

          <textarea name="text" id="editor1" class="form-control">

          </textarea>

          <br>        

          <button class="btn-sm btn btn-danger btn-block">

            <i class="fa fa-send">

            </i> Post

          </button>      

        </form>      

        <table id="example2" class="table table-bordered table-hover table-striped">        

          <thead>          

            <tr>            

              <th>No

              </th>            

              <th>Headline

              </th>            

              <th>Text

              </th>            

              <th>

              </th>          

            </tr>        

          </thead>        

          <tbody>          

            <?php             $tbl="notifikasi";            $data="*";            $notif=$sistem->tampil_data($tbl,$data);            $n=1;            foreach ($notif as $key => $line):          ?>          

            <tr>            

              <td>

                <?php echo $n++ ?>

              </td>            

              <td>

                <?= $line['headline'] ?>

              </td>            

              <td>

                <?= $line['text'] ?>

              </td>            

              <td>              

                <a onclick="javascript:return confirm('Anda Yakin Ingin menghapus notifikasi ini ?')" href="../setting/function/proses_hapus_where.php?tbl=notifikasi&clm=id&id=<?= $line['id'] ?>" title="">

                  <i class="fa fa-trash">

                  </i> Del..

                </a>            

              </td>          

            </tr>          

            <?php endforeach; ?>        

          </tbody>      

        </table>      

        <h3 id="maskMenu">

          <i class="fa fa-list">

          </i> Membuat Menu

        </h3>      

        <form action="../setting/function/proses_tambah.php" method="post" >        

          <input type="hidden" name="type" value="menu">        

          <input type="hidden" name="link" value="<?php echo base64_encode('teing') ?>">        

          <label>Menu

          </label>        

          <input type="text" name="nama" class="form-control">

          <br>        

          <label>FontAwesome

          </label>        

          <input type="text" name="fa" class="form-control">

          <br>        

          <button class="btn-sm btn btn-danger btn-block">

            <i class="fa fa-send">

            </i> Add Menu

          </button>      

        </form>      

        <table id="example3" class="table table-bordered table-hover table-striped">        

          <thead>          

            <tr>            

              <th>No

              </th>            

              <th>Menu

              </th>            

              <th>Fa

              </th>            

              <th>

              </th>          

            </tr>        

          </thead>        

          <tbody>          

            <?php             $tbl="menu";            $data="*";            $menuShow=$sistem->tampil_data($tbl,$data);            $n=1;            foreach ($menuShow as $key => $menunya):          ?>          

            <tr>            

              <td>

                <?php echo $n++ ?>

              </td>            

              <td>

                <?= $menunya['nama'] ?>

              </td>            

              <td>

                <?= $menunya['fa'] ?>

              </td>            

              <td>              

                <a onclick="javascript:return confirm('Anda Yakin Ingin menghapus notifikasi ini ?')" href="../setting/function/proses_hapus_where.php?tbl=menu&clm=id&id=<?= $menunya['id'] ?>" title="">

                  <i class="fa fa-trash">

                  </i> Del..

                </a>            

              </td>          

            </tr>          

            <?php endforeach; ?>        

          </tbody>      

        </table>      

        <!-- menu batas -->      

        <h3 id="produk">

          <i class="fa fa-shopping-cart">

          </i> Tambah Produk

        </h3>      

        <form action="../setting/function/proses_tambah.php" method="post" >        

          <input type="hidden" name="type" value="produk">        

          <input type="hidden" name="link" value="<?php echo base64_encode('teing') ?>">        

          <label>Nama

          </label>        

          <input type="text" name="nama" class="form-control">

          <br>        

          <label>Rp

          </label>        

          <input type="text" name="rp" class="form-control">

          <br>        

          <label>Size

          </label>        

          <input type="text" name="size" class="form-control">

          <br>        

          <label>Bahan

          </label>        

          <input type="text" name="bahan" class="form-control">

          <br>        

          <label>Deskripsi

          </label>        

          <textarea type="text" name="deskripsi" class="form-control">

          </textarea>

          <br>        

          <label>Gambar

          </label>        

          <input type="text" name="gambar" class="form-control">

          <br>        

          <label>Type

          </label>        

          <select name="type_produk" class="form-control">          

            <option value="h">Hoodie

            </option>          

            <option value="t">T-SHIRT

            </option>          

            <option value="m">MUG

            </option>        

          </select>        

          <button class="btn-sm btn btn-danger btn-block">

            <i class="fa fa-send">

            </i> Add Menu

          </button>      

        </form>      

        <table id="example4" class="table table-bordered table-hover table-striped">        

          <thead>          

            <tr>            

              <th>No

              </th>            

              <th>Nama

              </th>            

              <th>Rp

              </th>            

              <th>Deskripsi

              </th>            

              <th>Lainya

              </th>            

              <th>

              </th>          

            </tr>        

          </thead>        

          <tbody>          

            <?php             $tbl="produk";            $data="*";            $produk=$sistem->tampil_data($tbl,$data);            $n=1;            foreach ($produk as $key => $menunya):          ?>          

            <tr>            

              <td>

                <?php echo $n++ ?>

              </td>            

              <td>

                <?= $menunya['nama'] ?>

              </td>            

              <td>

                <?= $menunya['rp'] ?>

              </td>            

              <td>

                <?= $menunya['deskripsi'] ?>

              </td>            

              <td>Bahan : 

                <?= $menunya['bahan'] ?>, Size : 

                <?php echo $menunya['size'] ?>

              </td>            

              <td>              

                <a onclick="javascript:return confirm('Anda Yakin Ingin menghapus notifikasi ini ?')" href="../setting/function/proses_hapus_where.php?tbl=menu&clm=id&id=<?= $menunya['id'] ?>" title="">

                  <i class="fa fa-trash">

                  </i> Del..

                </a>            

              </td>          

            </tr>          

            <?php endforeach; ?>        

          </tbody>      

        </table>      

        <!-- batas boradcast -->      

        <h3 id="wa">

          <i class="fa fa-comment">

          </i> Buat Pesan

        </h3>   

        <form action="../setting/function/proses_tambah.php" method="post" >      

          <input type="hidden" name="type" value="addLabel">      

          <input type="hidden" name="link" value="<?php echo base64_encode('teing') ?>">      

          <input type="text" name="label" class="form-control">     

          <button class="btn btn-sm btn-primary">Simpan

          </button>   

        </form>      

        <div class="nav-tabs-custom">        

          <ul class="nav nav-tabs">          

            <li class="active">

              <a href="#all" data-toggle="tab" aria-expanded="false">All

              </a>

            </li>  
            <li>

              <a href="#join_today" data-toggle="tab">JOIN TODAY

              </a>

            </li>        

            <li class="">

              <a href="#trial" data-toggle="tab" aria-expanded="true">Trial

              </a>

            </li>          

            <li>

              <a href="#full" data-toggle="tab">Full Akses

              </a>

            </li>          

            <li>

              <a href="#full_belum_tf" data-toggle="tab">Full Akses belum TF

              </a>

            </li>
                                       

          </ul>        

          <div class="tab-content">          

            <div class="tab-pane" id="join_today"> 
              <h3>Data yang join hari ini : <?=$hari?></h3>
              <table class="example1 table table-bordered table-hover table-striped">                   

                  <thead>                     

                    <tr>                       

                      <th>No

                      </th>                       

                      <th>                         

                        <input type="checkbox" id="checkAll">                       

                      </th>                       

                      <th>Username

                      </th>                       

                      <th>Nama Lengkap

                      </th>                       

                      <th>Nowa

                      </th>                     

                      <th>Afiliasi

                      </th>                     

                    </tr>                   

                  </thead>                   

                  <tbody>                    

                    <?php                      
                    $no=1;                      
                    foreach ($sistem->tampil_manual('select * from akun where create_at="'.$hari.'" ') as $value => $trial) {                    
                      ?>                     

                    <tr>                       

                      <td>

                        <?= $no++ ?>

                      </td>                       

                      <td>                         

                        <input type="checkbox" value="<?= $trial['username'] ?>" name="check[]" class="checkboxBelumTf">                       

                      </td>                       

                      <td>

                        <?= $trial['username'] ?>                         

                        <br>

                        <b>

                          <small>Teredukasi :

                          </small>

                        </b>

                        <br>                      

                        <?php foreach ($sistem->tampil_manual('select * from group_label where username="'.$trial['username'].'"') as $keys => $value): ?>                        

                        <span class="label label-success">

                          <?= $sistem->getSingleField('label_broadcast','id',$value['id_label'])['nama label'] ?>

                        </span> &nbsp;                      

                        <?php endforeach ?>                       

                      </td>                       

                      <td>

                        <?= $trial['nama_lengkap'] ?>

                      </td>                       

                      <td>

                        <?= $trial['nowa'] ?>

                      </td>                     

                      <td>

                        <?= $sistem->getSingleField('akun','kode_afiliasi',$trial['afiliasi'])['nama_lengkap'] ?>

                      </td>                     

                    </tr>                    

                    <?php                       }                    ?>                   

                  </tbody>                 

                </table>  
            </div>         
            <!-- batas join today -->
            <div class="tab-pane" id="full_belum_tf">            

              <form action="../setting/function/proses_umum.php" method="POST" onsubmit="javascript:return confirm('Yakin merubah akses ini ')">              

                <input type="hidden" name="type" value="broadcast">                

                <h3>Akun Full Akses tapi blum TF

                </h3>                

                <label>Masukan Judul/ket Label

                </label>                

                <select name="label" id="">                  

                  <?php                    $broadcast = $sistem->tampil_manual('select * from label_broadcast');                    foreach ($broadcast as $key => $value) {                  ?>                  

                  <option value="<?= $value['id'] ?>">

                    <?= $value['nama label'] ?>

                  </option>                

                  <?php } ?>                

                </select>                

                <button class="btn btn-sm btn-primary">Labeli

                </button>                

                <table class="example1 table table-bordered table-hover table-striped">                   

                  <thead>                     

                    <tr>                       

                      <th>No

                      </th>                       

                      <th>                         

                        <input type="checkbox" id="checkAll">                       

                      </th>                       

                      <th>Username

                      </th>                       

                      <th>Nama Lengkap

                      </th>                       

                      <th>Nowa

                      </th>                     

                      <th>Afiliasi

                      </th>                     

                    </tr>                   

                  </thead>                   

                  <tbody>                    

                    <?php                      $no=1;                      foreach ($sistem->tampil_manual('select * from akun where (type_akun="b" and status="") or pengajuan=1 order by date') as $value => $trial) {                    ?>                     

                    <tr>                       

                      <td>

                        <?= $no++ ?>

                      </td>                       

                      <td>                         

                        <input type="checkbox" value="<?= $trial['username'] ?>" name="check[]" class="checkboxBelumTf">                       

                      </td>                       

                      <td>

                        <?= $trial['username'] ?>                         

                        <br>

                        <b>

                          <small>Teredukasi :

                          </small>

                        </b>

                        <br>                      

                        <?php foreach ($sistem->tampil_manual('select * from group_label where username="'.$trial['username'].'"') as $keys => $value): ?>                        

                        <span class="label label-success">

                          <?= $sistem->getSingleField('label_broadcast','id',$value['id_label'])['nama label'] ?>

                        </span> &nbsp;                      

                        <?php endforeach ?>                       

                      </td>                       

                      <td>

                        <?= $trial['nama_lengkap'] ?>

                      </td>                       

                      <td>

                        <?= $trial['nowa'] ?>

                      </td>                     

                      <td>

                        <?= $sistem->getSingleField('akun','kode_afiliasi',$trial['afiliasi'])['nama_lengkap'] ?>

                      </td>                     

                    </tr>                    

                    <?php                       }                    ?>                   

                  </tbody>                 

                </table>                

              </form>          

            </div>          

            <div class="tab-pane" id="trial">                      

              <form action="../setting/function/proses_umum.php" method="POST" onsubmit="javascript:return confirm('Yakin merubah akses ini ')">              

                <input type="hidden" name="type" value="broadcast">              

                <h3>Akun Trial

                </h3>              

                <label>Masukan Judul/ket Label

                </label>              

                <select name="label" id="">                

                  <?php                                  

                  foreach ($broadcast as $key => $value) {                ?>                

                  <option value="<?= $value['id'] ?>">

                    <?= $value['nama label'] ?>

                  </option>                              

                  <?php } ?>              

                </select>              

                <button class="btn btn-sm btn-primary">Labeli

                </button>               

                <table id="example5" class="table table-bordered table-hover table-striped">                 

                  <thead>                   

                    <tr>                     

                      <th>No

                      </th>                     

                      <th>                       

                        <input type="checkbox" id="checkAllTrial">                     

                      </th>                     

                      <th>Username

                      </th>                     

                      <th>Nama Lengkap

                      </th>                     

                      <th>Nowa

                      </th>                     

                      <th>Afiliasi

                      </th>                   

                    </tr>                 

                  </thead>                 

                  <tbody>                  

                    <?php                    $no=1;                    foreach ($sistem->tampil_manual('select * from akun where type_akun="t" order by date') as $value => $trial) {                  ?>                   

                    <tr>                     

                      <td>

                        <?= $no++ ?>

                      </td>                     

                      <td>                       

                        <input type="checkbox" value="<?= $trial['username'] ?>" name="check[]" class="checkboxTrial">                                            

                      </td>                     

                      <td>

                        <?= $trial['username'] ?>                       

                        <br>

                        <b>

                          <small>Teredukasi :

                          </small>

                        </b>

                        <br>                      

                        <?php foreach ($sistem->tampil_manual('select * from group_label where username="'.$trial['username'].'"') as $keys => $value): ?>                        

                        <span class="label label-success">

                          <?= $sistem->getSingleField('label_broadcast','id',$value['id_label'])['nama label'] ?>

                        </span> &nbsp;                      

                        <?php endforeach ?>                     

                      </td>                     

                      <td>

                        <?= $trial['nama_lengkap'] ?>

                      </td>                     

                      <td>

                        <?= $trial['nowa'] ?>

                      </td>                     

                      <td>

                        <?= $sistem->getSingleField('akun','kode_afiliasi',$trial['afiliasi'])['nama_lengkap'] ?>

                      </td>                   

                    </tr>                  

                    <?php                     }                  ?>                 

                  </tbody>               

                </table>             

              </form>          

            </div>          

            <div class="tab-pane" id="full">            

              <form action="../setting/function/proses_umum.php" method="POST" onsubmit="javascript:return confirm('Yakin merubah akses ini ')">              

                <input type="hidden" name="type" value="broadcast">              

                <h3>Akun Full Akses

                </h3>              

                <label>Masukan Judul/ket Label

                </label>              

                <select name="label">                

                  <?php                  foreach ($broadcast as $key => $value) {                ?>                

                  <option value="<?= $value['id'] ?>">

                    <?= $value['nama label'] ?>

                  </option>                              

                  <?php } ?>              

                </select>              

                <button class="btn btn-sm btn-primary">Labeli

                </button>              

                <table class="example1 table table-bordered table-hover table-striped">                 

                  <thead>                   

                    <tr>                     

                      <th>No

                      </th>                     

                      <th>                       

                        <input type="checkbox" id="checkAllFull">                                          

                      </th>                     

                      <th>Username

                      </th>                     

                      <th>Nama Lengkap

                      </th>                     

                      <th>Nowa

                      </th>                     

                      <th>Afiliasi

                      </th>                   

                    </tr>                 

                  </thead>                 

                  <tbody>                  

                    <?php                    $no=1;                    foreach ($sistem->tampil_manual('select * from akun where type_akun="b" and status="ok" order by date') as $value => $trial) {                  ?>                   

                    <tr>                     

                      <td>

                        <?= $no++ ?>

                      </td>                     

                      <td>                       

                        <input type="checkbox" name="check[]" value="<?= $trial['username'] ?>" class="checkboxFull">                     

                      </td>                     

                      <td>                      

                        <?= $trial['username'] ?>

                        <br>

                        <b>

                          <small>Teredukasi :

                          </small>

                        </b>

                        <br>                      

                        <?php foreach ($sistem->tampil_manual('select * from group_label where username="'.$trial['username'].'"') as $keys => $value): ?>                        

                        <span class="label label-success">

                          <?= $sistem->getSingleField('label_broadcast','id',$value['id_label'])['nama label'] ?>

                        </span> &nbsp;                      

                        <?php endforeach ?>                     

                      </td>                     

                      <td>

                        <?= $trial['nama_lengkap'] ?><br>
                        <?= $trial['usia'] ?><br>
                        <?= $trial['domisili'] ?><br>
                        <?= $trial['tahu'] ?><br>


                      </td>                     

                      <td>

                        <?= $trial['nowa'] ?>

                      </td>                     

                      <td>

                        <?= $sistem->getSingleField('akun','kode_afiliasi',$trial['afiliasi'])['nama_lengkap'] ?>

                      </td>                                        

                    </tr>                  

                    <?php                     }                  ?>                 

                  </tbody>               

                </table>             

              </form>          

            </div>          

            <div class="tab-pane active" id="all">                        

              <form action="../setting/function/proses_tambah.php" method="post">              

                <label>Affiliasi

                </label>

                <br>              

                <input type="hidden" name="type" value="getcontact">              

                <input type="checkbox" id="semua" name="semua" value="all">

                <b>Semua

                </b>

                <br>              

                <label>Limit Perpage

                </label>              

                <input type="text" name="limit" class="form-control" id="limit">              

                <label>Type

                </label>              

                <select name="typeakun" id="typeakun" class="form-control">                

                  <option value="t">Trial

                  </option>                

                  <option value="f">FullAkses

                  </option>                

                  <option value="bt">Belum TF

                  </option>              

                </select>              

                <button type="submit" class="btn btn-primary">Buat

                </button>            

              </form>              

              <label>NoWA

              </label>

              <br>             

              <?php              $no=0;              $no3=0;              $no2='';              $tbl="akun";              $data="*";              $nowa="";              $nowa2="";              $nama="";              $nama2="";              $email="";              $users=$sistem->tampil_manual("select * from akun order by date");              foreach ($users as $value => $x):                 $no3++;              endforeach;              for ($i = 0; $i <=$no3 ; $i++) {                if ($i % 15 == 0) {            ?>              

              <a href="../setting/function/proses_tambah.php?type=txt&jenis=nowa&star=<?= $i ?>" class="btn btn-sm btn-primary loopDownload" data-url="../setting/function/proses_tambah.php?type=txt&jenis=nowa&star=<?= $i ?>">

                <i class="fa fa-download">

                </i> 

                <?= $i ?> 

              </a>            

              <?php }} ?>            

              <br>

              <label>Nama

              </label>

              <br>            

              <?php            for ($i = 0; $i <=$no3 ; $i++) {                if ($i % 15 == 0) {            ?>              

              <a href="../setting/function/proses_tambah.php?type=txt&jenis=nama&star=<?= $i ?>" class="btn btn-sm btn-primary loopDownload" data-url="../setting/function/proses_tambah.php?type=txt&jenis=nama&star=<?= $i ?>">

                <i class="fa fa-download">

                </i> 

                <?= $i ?> 

              </a>            

              <?php }} ?>            

              <br>            

              <?php              foreach ($users as $value => $user):                 if ($user['username']=='admin') {                                  }else{                  $nowa .=$user['nowa'].'&#13;&#10;';                  $nowa2 .=str_replace_first('0','62',$user['nowa']).'&#13;&#10;';                  $nama .='Rebi - '.ucwords($user['nama_lengkap']).'&#13;&#10;';                  $nama2 .=ucwords($user['nama_lengkap']).'&#13;&#10;';                  $email .=$user['username'].'&#13;&#10;';                  $no=$no+1;                  $no2.=$no.'&#13;&#10;';                }              endforeach;            ?>            

              <textarea name="" id="" rows="20" cols="30" ><?= $no2 ?></textarea>            

              <textarea name="" id="" rows="20" cols="30" ><?= $nowa2 ?></textarea>            

              <textarea name="" id="" rows="20" cols="30" ><?= $nowa ?></textarea>            

              <textarea name="" id="" rows="20" cols="30" ><?= $nama ?></textarea>            

              <textarea name="" id="" rows="20" cols="30" ><?= $nama2 ?></textarea>            

              <textarea name="" id="" rows="20" cols="40" ><?= $email ?></textarea>          

            </div>          

            <!-- /.tab-pane -->        

          </div>        

          <!-- /.tab-content -->      

        </div>            

        <!-- batas broadcase -->      

        <h3 id="kritikan">

          <i class="fa fa-comment">

          </i> Kritikan

        </h3>      

        <table id="example4" class="table table-bordered table-hover table-striped">        

          <thead>          

            <tr>            

              <th>No

              </th>            

              <th>Email

              </th>            

              <th>Kritik

              </th>          

            </tr>        

          </thead>        

          <tbody>          

            <?php             $tbl="kritik";            $data="*";            $kritikan=$sistem->tampil_data($tbl,$data);            $n=1;            foreach ($kritikan as $key => $menunya):          ?>          

            <tr>            

              <td>

                <?php echo $n++ ?>

              </td>            

              <td>

                <?= $menunya['username'] ?>

              </td>            

              <td>

                <?= $menunya['keterangan'] ?>

              </td>            

              <td>

                <?= $menunya['date'] ?>

              </td>          

            </tr>          

            <?php endforeach; ?>        

          </tbody>      

        </table>   

        </div>   

    </section>   

    </section>   

  </form>

</div>

</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  

  <div class="modal-dialog" role="document">    

    <div class="modal-content">     

      <form action="../setting/function/proses_tambah_ecource.php" method="post" accept-charset="utf-8">        

        <input type="hidden" name="link" value="<?= base64_encode('teing') ?>">       

        <input type="hidden" name="type" value="master">        

        <div class="modal-header">          

          <h3 class="modal-title" id="Labelmenu">Modal title

          </h3>       

        </div>        

        <div class="modal-body">          

          <select name="menu" class="form-control">            

            <?php              foreach ($menuShow as $key => $menunya){            ?>              

            <option value="<?php echo $menunya['id'] ?>">

              <?php echo $menunya['nama'] ?>

            </option>            

            <?php } ?>          

          </select>         

          <input type="text" name="judul" class="form-control" placeholder="nama menu">       

        </div>        

        <div class="modal-footer">          

          <button type="submit" class="btn btn-primary">

            <i class="fa fa-save">

            </i> Simpan

          </button>       

        </div>    

      </form>    

    </div>  

  </div>

</div>

<div class="modal fade" id="subMenu" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  

  <div class="modal-dialog" role="document">    

    <div class="modal-content">      

      <div class="modal-header">        

        <h3 class="modal-title" id="labelSubMenu">TAMBAH SUB MENU

        </h3>               

      </div>      

      <form action="../setting/function/proses_tambah_ecource.php" method="post" >        

        <div class="modal-body">      

          <input type="hidden" name="link" value="<?= base64_encode('teing') ?>">     

          <input type="hidden" name="type" value="sub">         

          <input type="hidden" id="idSubMenu" name="master">          

          <input type="text" name="nama" class="form-control" placeholder="Nama Sub">         

          <input type="text" name="dir" class="form-control" value="/home/remotebi/public_html/member/materi_master//ebook">          

          <select name="jenis" class="form-control">            

            <option value="vidio">vidio

            </option>           

            <option value="file">file

            </option>         

          </select>       

        </div>        

        <div class="modal-footer">                    

          <button type="submit" class="btn btn-primary">

            <i class="fa fa-save">

            </i> Simpan

          </button>       

        </div>    

      </form>    

    </div>  

  </div>

</div>

<div class="modal fade" id="editname" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  

  <div class="modal-dialog" role="document">    

    <div class="modal-content">      

      <div class="modal-header">        

        <h3 class="modal-title" id="titleEdit">Edit Nama

        </h3>               

      </div>      

      <form action="../setting/function/proses_edit_name.php" method="post" >       

        <div class="modal-body">      

          <input type="hidden" name="link" value="<?= base64_encode('teing') ?>">     

          <input type="hidden" name="id" id="idname">     

          <input type="hidden" name="clm" id="clm">     

          <input type="hidden" name="tbl" id="tbl">     

          <input type="text" class="form-control" name="title" id="valtitle">       

        </div>        

        <div class="modal-footer">                    

          <button type="submit" class="btn btn-primary">

            <i class="fa fa-save">

            </i> Simpan

          </button>       

        </div>    

      </form>    

    </div>  

  </div>

</div>

<div class="modal fade" id="subList" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">  

  <div class="modal-dialog" role="document">    

    <div class="modal-content">     

      <form action="../setting/function/proses_tambah_ecource.php" method="post" >        

        <div class="modal-header">          

          <h3 class="modal-title" id="labelSubList">TAMBAH SUB LIST

          </h3>                 

        </div>        

        <div class="modal-body">          

          <input type="hidden" name="link" value="<?= base64_encode('teing') ?>">     

          <input type="hidden" name="type" value="list">          

          <input type="hidden" id="idSubList" name="master">          

          <div class="ytlast">            

            <h4>1.

            </h4>           

            <input type="text" name="judul[]" class="form-control" placeholder="Judul">           

            <input type="text" name="yt[]" class="form-control">            

            <hr>          

          </div>          

          <hr>          

          <button type="button" onclick="return addRow()" class="btn-sm btn btn-warning">

            <i class="fa fa-plus">

            </i>

          </button>       

        </div>        

        <div class="modal-footer">                    

          <button type="submit" class="btn btn-primary">

            <i class="fa fa-save">

            </i> Simpan

          </button>       

        </div>       

        </div>    

    </div>

  </div>

  <script type="text/javascript">   

    var n=1;

    $(function () {

      CKEDITOR.replace('editor1')  

      $('.textarea').wysihtml5()  

    });   

    $(document).ready(function() {           

      $('.treeview').mdbTreeview();    

    });   

    function addRow(){    

      n++;

      $('.ytlast:last').after('<div class="ytlast"><h4>'+n+'.</h4><input type="text" name="judul[]" class="form-control" placeholder="Judul"><input type="text" name="yt[]" class="form-control"><hr></div>');   

    }   

    function addMaster(){    

      $('#exampleModal').modal('show');   

    }  

    function addSubMenu(id,title){    

      $('#labelSubMenu').text('Tambahkan Sub Menu '+title);    

      $('#idSubMenu').val(id);    

      $('#subMenu').modal('show');   

    }

    function addSubList(id,title){    

      $('#labelSubList').text('Tambahkan Sub List Materi '+title);    

      $('#idSubList').val(id);    

      $('#subList').modal('show');   

    }  

    function editname(title,id,tbl,clm){    

      $('#idname').val(id);    

      $('#tbl').val(tbl);    

      $('#clm').val(clm);    

      $('#titleEdit').text(title);    

      $('#valtitle').text(title);    

      $('#editname').modal('show');   

    }

    function checkAll(){   }   

    function check(){    

      jQuery('.loopDownload').each(function() {        

        var currentElement = $(this);        

        var aff = $('#saya').val();        

        var trial = $('#trial').val();        

        var full = $('#full').val();        

        var urlnya = currentElement.data('url');        

        currentElement.attr('url',urlnya+'&aff='+aff+'&trial='+trial+'&full='+full);    

      });   

    }

    </script>

