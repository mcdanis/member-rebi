<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Daftar Akun</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href=""><b>E</b>Raport</a>
  </div>
  <div class="register-box-body">
    <p class="login-box-msg">Daftar Akun</p>
    <?php
      $link=base64_encode("berhasil");
    ?>

    <form action="setting/function/proses_tambah_akun.php" method="post">
      <div class="form-group has-feedback nis">
        <input type="hidden" class="form-control" name="link" value="<?php echo $link ?>">
        <input type="number" class="form-control" id="nis" placeholder="Nis" required name="nis" onkeyup="return cekUser()"  onkeyup="return cekUser()" >
        <span class="glyphicon glyphicon-barcode form-control-feedback"></span>
        <span class="help-block tdkNis hide ">* Nis Tidak Ada</span>
        <span class="help-block sudahDaf hide">* NIS Sudah memiliki Akun</span>
      </div>
      <div class="form-group has-feedback username">
        <input type="text" class="form-control" placeholder="Username" name="username" id="username" required onkeyup="return cekUserName()">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <span class="help-block help-block1 hide"> * Username sudah di gunakan</span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required id="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback er">
        <input type="password" class="form-control" placeholder="Ulangi Password" name="ulangi_password" required id="ulangi_password">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        <span class="help-block hide pass">Password Tidak sama</span>
      </div>
      <div class="row">
        <div class="col-xs-8">
            <a href="index.php">Punya Akun ?</a>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block">Daftarkan</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
  </div>
  <!-- /.form-box -->
</div> 
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
  $(document).ready(function(){
    $("#ulangi_password").keyup(function(){
      var pass=$("#password").val();
      if($(this).val()==pass){
        // $(this).css({"background":"#FFFFFF"});
        $(".pass").addClass("hide");
        $(".er").removeClass("has-error");
        $(".pass").addClass("btn-flat");
        $(".pass").removeClass("disabled");

      }else{
        // $(this).css({"background":"#E39898"});
        $(".pass").removeClass("btn-flat");
        $(".pass").addClass("disabled");
        $(".er").addClass("has-error");
        $(".pass").removeClass("hide");
      }
    });
  });
  function cekUser(){
    var nama=$("#nis").val();
    var clm="nis";
    var tbl="data_siswa";

    $.ajax({
      type: 'POST',
      url: "setting/function/proses_cekuser.php",
      data: {"nama":nama,"clm":clm,"tbl":tbl},
      success: function(a) {
        // alert(a);
        if(a==0){
          $(".nis").addClass("has-error");
          $(".tdkNis").removeClass("hide");
        }else if(a==3){
          $(".nis").addClass("has-error");
          $(".tdkNis").addClass("hide");
          $(".sudahDaf").removeClass("hide");
        }else if(a==1){
          $(".nis").removeClass("has-error");
          $(".tdkNis").addClass("hide");
          $(".sudahDaf").addClass("hide");
        }
      }
    });
  } 
  function cekUserName(){
    var clm="username";
    var tbl="akun";
    
    var nama=$("#username").val();

    $.ajax({
      type: 'POST',
      url: "setting/function/proses_cekuser.php",
      data: {"nama":nama,"clm":clm,"tbl":tbl},
      success: function(a) {
        if(a==1){
          $(".username").addClass("has-error");
          $(".help-block1").removeClass("hide");
        }else{
          $(".username").removeClass("has-error");
          $(".help-block1").addClass("hide");
        }
      }
    });
  }
</script>
</body>
</html>
