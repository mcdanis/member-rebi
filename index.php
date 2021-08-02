

<?php

  session_start();



  if(isset($_SESSION['id_akun'])){

    header('location:pages/?eRaport=selamat');

  }
  @$cookieId=$_COOKIE['id_akun'];

  if(!empty($cookieId)){
      echo '<script>
                window.location.replace("https://member.remotebisnis.com/pages?eRaport=good");
      </script>';
  }

?>

<!DOCTYPE html>

<html>

<head>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>Login</title>

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

  <link rel="shortcut icon" href="img/logoer.png">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <style>
    .border-red{
      border: 1px solid red !important
    }
  </style>
</head>

<body class="hold-transition register-page">

<div class="register-box">

  <div class="register-logo">

    <a href=""><b>Member</b>Rebi</a>

  </div>

  <div class="register-box-body">

    <p class="login-box-msg">Masuk Untuk Dapat Akses </p>
    <?php if ($_GET['msg']=='berhasil'): ?>
	    <div class="alert alert-success">
			<i class=""></i> Mohon Periksa email anda !
		</div>
    <?php endif ?>
    <?php if ($_GET['msg']=='gagal'): ?>
      <script>
        $('#username').val(<?= $_GET['username'] ?>);
      </script>
      <div class="alert alert-danger">
        <i class='fa fa-warning'></i> Username atau Password Salah, jika tidak ingat mohon hubungi Admin 
      </div>
    <?php endif ?>
    <form action="setting/function/proses_login.php" method="post">

      <div class="form-group has-feedback">

        <input type="text" id="username" class="form-control" placeholder="username" name="username" autofocus>

        <span class="glyphicon glyphicon-user form-control-feedback"></span>

      </div>

      <div class="form-group has-feedback">

        <input type="password" class="form-control" placeholder="Password" name="password">

        <span class="glyphicon glyphicon-lock form-control-feedback"></span>

      </div>

      <div class="row">

        <div class="col-xs-8">

          <div class="checkbox icheck">

            <label>

              <!--Dapatkan E-Course Fb ads dll Gratis <a href="https://member.remotebisnis.com/cfree.php" title="">Klik Disini</a>-->

            </label>

          </div>

          <div class="checkbox icheck">

            <label>

              Klik Jika <a href="#" onclick="return lupa()" title="">Lupa Password ?</a>

            </label>

          </div>

        </div>

        <!-- /.col -->

        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat" style="background: #c52730">Masuk</button>

        </div>

        <!-- /.col -->

      </div>

    </form>
 

    <!-- <div class="social-auth-links text-center">

      <p>- Kunjungi -</p>

      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Facebook</a>

      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Google+</a>

    </div> -->

  </div>
  <div class="register-box-body" id="lupa" style="display: none; background: #efefef">
    <h4>Masukan Email Anda !</h4>
    <form action="setting/function/proses_tambah.php" method="get" accept-charset="utf-8">
    	<input type="hidden" name="type" value="sendMail">
	    <input type="email" class="form-control" name="email" id="email" placeholder="email...">
	    <button class="btn btn-sm btn-danger btn-block">Kirim Password</button>
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
<?php if ($_GET['msg']=='gagal'): ?>
  $('#username').val('<?= $_GET['username'] ?>');
  $('input').addClass('border-red');
<?php endif; ?>
      
  $(function () {

    $('input').iCheck({

      checkboxClass: 'icheckbox_square-blue',

      radioClass: 'iradio_square-blue',

      increaseArea: '20%' // optional

    });

  });

</script>

</body>
<script>
  function lupa() {
    var x = document.getElementById("lupa");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
  
</script>
</html>

