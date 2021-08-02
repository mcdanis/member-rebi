<?php 
    if (!$_COOKIE['rebi_lp_cookie']) {
        if (!$_GET['kaf']) {
            $valCookie = '39587434922';
        }else{
            $valCookie = $_GET['kaf'];
        }
        setcookie('rebi_lp_cookie',$valCookie,strtotime('+14 days'),"/");
    }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Registration Page Rebi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <script>
      !function(f,b,e,v,n,t,s)
      {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
      n.callMethod.apply(n,arguments):n.queue.push(arguments)};
      if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
      n.queue=[];t=b.createElement(e);t.async=!0;
      t.src=v;s=b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t,s)}(window, document,'script',
      'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '515914853189009');
      fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=515914853189009&ev=PageView&noscript=1"
    /></noscript>
  <style>
    .b{
      font-weight: bold !important
    }
    .red{
      color: red
    }
    .group-email input{
      border: 1px solid red;
    }
    .group-email p{
      font-style: italic;
      color: red;
      display: block !important;
      font-size: 12px;
    }
  </style>
</head>
<body class="hold-transition register-page" >
<div class="register-box">
  <div class="register-logo">
    <a href="https://member.remotebisnis.com"><b>Register</b>REBI</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Sudah Punya Akun ? <a href="https://member.remotebisnis.com">Login disini</a> <br><b>Isi lengkap field dibawah ini :)</b></p>
    <p>Miliki <b>55+ E-Course Premium + Bonus Ebook Eksklusif</b> Maka <b>SUKSES</b> Pasti didepan Mata</p>

    <form action="setting/function/proses_daftar.php" method="post">
      <input type="hidden" name="afiliasi" value="<?= $_GET['kaf'] ?>">

      <div class="form-group has-feedback">
        <div class="radio text-center">
            <input type='hidden' value='murah' name='murah'>
            <label class="b red hide">
              <input checked type="radio" name="type_akun" value="t"> Gratisan dulu ah
            </label>&nbsp;&nbsp;&nbsp;&nbsp;
   
        </div>
      </div>
      <div class="form-group has-feedback">
        <label>Nama Lengkap/Nama Keren Anda</label>
        <input name="nama" type="text" class="form-control" placeholder="*Nama Lengkap" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback" id="group-email">
        <label>Email Aktif</label>
        <input type="email" name="email" class="form-control" placeholder="*Konfirmasi akan di kirim ke email" required id="email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        <p class="hide">*Email sudah terdaftar, gunakan email lain !</p>
      </div>
      <div class="form-group has-feedback">
        <label>No WA Aktif <small>Free Ebook dan Tips lainya dikirim disini</small></label>
        <input type="text" name="nowa" class="form-control" placeholder="No WhatsApp Format Wajib pakai 0853xxxx" required>
        <span class="glyphicon glyphicon-book form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Domisili/Kota</label>
        <input type="text" name="domisili" class="form-control" placeholder="*Tempat anda tinggal saat ini" required>
        <span class="glyphicon glyphicon-flag form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <label>Website</label>
        <input type="text" name="web" class="form-control" placeholder="Website yang anda miliki (Opsional)">
        <span class="glyphicon glyphicon-globe form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <div class="radio">
          <label>
            <input type="radio" name="jk" value="L" checked=""> Laki-laki
          </label>
          <label>
            <input type="radio" name="jk" value="P"> Perempuan
          </label>
        </div>
      </div>
      <hr>
      <h4><b>Isi survey kecil-kecilan ini :)</b></h4>
      <div class="form-group has-feedback">
        <select name="usia" class="form-control" required>
          <option value="Tidak mengisi">Rentang Usia Anda</option>
          <option value="18-22">18-22</option>
          <option value="23-26">23-26</option>
          <option value="27-29">27-29</option>
          <option value="30-34">30-34</option>
          <option value="35-40">35-40</option>
          <option value="> 40">> 40</option>
        </select>
      </div>
      <div class="form-group has-feedback">
        <select name="grup" class="form-control" required>
          <option value=" ">Lebih nyaman grup mana untuk diskusi ?</option>
          <option value="WhatsApp">WhatsApp</option>
          <option value="Telegram">Telegram</option>
          <option value="Facebook">Facebook</option>
          <option value="Forum Website">Forum Website</option>
        </select>
      </div>
      <div class="form-group has-feedback">
        <select name="gadget" class="form-control" required>
          <option value=" ">Sering Menggunakan PC/Laptop ?</option>
          <option value="Tidak Punya">Tidak Punya</option>
          <option value="Jarang">Jarang</option>
          <option value="Sering">Sering</option>
        </select>
      </div>
      <div class="form-group has-feedback">
        <select name="tahu" class="form-control" required>
          <option value=" ">Tahu RemoteBisnis dari mana ?</option>
          <option value="Dari Grup/Teman di WhatsApp">Dari Grup/Teman di WhatsApp</option>
          <option value="Dari Grup/Teman di Telegram">Dari Grup/Teman di Telegram</option>
          <option value="Dari Grup/Teman Facebook">Dari Grup/Teman Facebook</option>
          <option value="Dari Website/Google">Dari Website/Google</option>
          <option value="Iklan Facebook">Iklan Facebook</option>
          <option value="Iklan Instagram">Iklan Instagram</option>
          <option value="Iklan Messager">Iklan Messager</option>
          <option value="Iklan di Game/Aplikasi">Iklan di Game/Aplikasi</option>
          <option value="Youtube">Youtube</option>
          <option value="Lainya">Lainya</option>
        </select>
      </div>
      <div class="form-group has-feedback">
        <select name="buka_email" class="form-control" required>
          <option value=" ">Seberapa sering buka Email ?</option>
          <option value="Sering">Sering</option>
          <option value="Kalo Ada Notif Email aja">Kalo Ada Notif Email aja</option>
          <option value="Kadang">Kadang</option>
          <option value="Jarang Sekali">Jarang Sekali</option>
        </select>
      </div>
      <div class="form-group has-feedback">
        <textarea name="fitur_keinginan" class="form-control" placeholder="Fitur/hal yang anda inginkan/ Curhatan Bisnis Anda"></textarea>
      </div>
      <div class="row">
         
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-danger btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

     
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="../plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
  $(document).ready(function(){
    $("form").keypress(function(e) {
      //Enter key
      if (e.which == 13) {
        return false;
      }
    });
    $('#email').focusout(function(){
      var email = $(this).val();
      $.ajax({
        type: 'GET',
        url: "setting/function/proses_umum.php",
        data: {
          email:email,
          type:'cek_email',
        },
        success: function(result) {
          if(result >= 1){
            $('button').addClass('hide');
            $('#group-email').addClass('group-email');
          }else{
            $('#group-email').removeClass('group-email');
            $('button').removeClass('hide');
          }
        }
      });
    });
  });
</script>
</body>
</html>
