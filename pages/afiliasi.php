<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title"><i class="fa fa-graduation-cap"></i> Afiliasi</h3>
  </div>
    <div class="box-body">
      <form action="../setting/function/proses_hapus_where.php" method="POST">
        <div class="<?php echo @$classGuru;?> ">
           
          <h3>Link : https://remotebisnis.com/sdfsfeff</h3><br>
          <div class="btn-group">
             <a href="../dist/guru.xlsx" class="btn btn-success"><i class="fa fa-download"></i> Dapatkan Link Afiliasi</a>
            
          </div>
          <br>
          <br>
        </div>
          
        <?php
            $link=base64_encode("data_guru");
        ?>
        <input type="hidden" name="link" value="<?php echo $link;?>">
        <input type="hidden" name="tbl" value="data_guru">
        <input type="hidden" name="clm" value="id_guru">
         <section class="content">
     <!-- isi konten -->
            <section class="content-header">
        <h1>
          Navigasi
          <!-- <small>
            Filter Angkatan
          </small>
          <small>
            <select class="form-control select2" style="width: 100%;" name="angkatan">
                        <option value="2020/2021">2020/2021</option>
                        <option value="2019/2020">2019/2020</option>
                        <option value="2018/2019">2018/2019</option>
                        <option value="2017/2018">2017/2018</option>
                        <option value="2016/2017">2016/2017</option>
                        <option value="2015/2016">2015/2016</option>
                        <option value="2014/2015">2014/2015</option>
                        <option value="2013/2014">2013/2014</option>
                        <option value="2012/2013">2012/2013</option>
                        <option value="2011/2012">2011/2012</option>
                        <option value="2010/2011">2010/2011</option>
                        <option value="2009/2010">2009/2010</option>
                        <option value="2008/2009">2008/2009</option>
                        <option value="2007/2008">2007/2008</option>
                        <option value="2006/2007">2006/2007</option>
                        <option value="2005/2006">2005/2006</option>
                        <option value="2004/2005">2004/2005</option>
                        <option value="2003/2004">2003/2004</option>
                        <option value="2002/2003">2002/2003</option>
                        <option value="2001/2002">2001/2002</option>
                        <option value="2000/2001">2000/2001</option>
                        <option value="1999/2000">1999/2000</option>
                        </select>
          </small> -->
        </h1>
        <ol class="breadcrumb">
          <li><a href=""><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>
      <section class="content">
        <div class="row">
                <div class="col-lg-4 col-xs-6">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>0</h3>
                <p>Siswa/Siswi</p>
              </div>
              <div class="icon">  
                RPL              </div>
              <a href="?eRaport=ZGV0YWlsX2p1cnVzYW4=&amp;key=MQ==&amp;key2=Mg==" class="small-box-footer">
                Detail Info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
                    <div class="col-lg-4 col-xs-6">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>0</h3>
                <p>Siswa/Siswi</p>
              </div>
              <div class="icon">  
                TKJ              </div>
              <a href="?eRaport=ZGV0YWlsX2p1cnVzYW4=&amp;key=Mg==&amp;key2=MzY=" class="small-box-footer">
                Detail Info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
                    <div class="col-lg-4 col-xs-6">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>0</h3>
                <p>Siswa/Siswi</p>
              </div>
              <div class="icon">  
                TKR              </div>
              <a href="?eRaport=ZGV0YWlsX2p1cnVzYW4=&amp;key=Mw==&amp;key2=NzI=" class="small-box-footer">
                Detail Info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
                    <div class="col-lg-4 col-xs-6">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>0</h3>
                <p>Siswa/Siswi</p>
              </div>
              <div class="icon">  
                AP              </div>
              <a href="?eRaport=ZGV0YWlsX2p1cnVzYW4=&amp;key=NA==&amp;key2=Mzg=" class="small-box-footer">
                Detail Info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
                    <div class="col-lg-4 col-xs-6">
            <div class="small-box bg-aqua">
              <div class="inner">
                <h3>0</h3>
                <p>Siswa/Siswi</p>
              </div>
              <div class="icon">  
                TSM              </div>
              <a href="?eRaport=ZGV0YWlsX2p1cnVzYW4=&amp;key=NQ==&amp;key2=NDg=" class="small-box-footer">
                Detail Info <i class="fa fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
                  </div>
   
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