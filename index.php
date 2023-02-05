<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Login | SISTEM MRP</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/template/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/template/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/template/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/template/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/template/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <!-- <link href="assets/images/logo_lpd.png" rel="icon">
  <link href="assets/images/logo_lpd.png" rel="apple-touch-icon"> -->

  <style type="text/css">
    body {
      background-color: #03533D;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="login-box text-center">

      <!-- <h3 style="margin: 0; color: #fff;">HALAMAN LOGIN</h3> -->
      <h3 style="color: #F3C206; font-weight: bold;">Sistem MRP</h3>

      <br/>

      <?php 
      if(isset($_GET['alert'])){
        if($_GET['alert'] == "gagal"){
          echo "<div class='alert alert-danger'>LOGIN GAGAL! USERNAME DAN PASSWORD SALAH!</div>";
        }else if($_GET['alert'] == "logout"){
          echo "<div class='alert alert-success'>ANDA TELAH BERHASIL LOGOUT</div>";
        }else if($_GET['alert'] == "belum_login"){
          echo "<div class='alert alert-warning'>ANDA HARUS LOGIN UNTUK MENGAKSES DASHBOARD</div>";
        }
      }
      ?>

      <div class="login-box-body">

      <p class="login-box-msg text-bold">LOGIN</p>

      <form action="aksi_login.php" method="POST">
        
        <div class="form-group has-feedback">
          <input type="text" class="form-control" placeholder="Username" name="username" required="required" autocomplete="off">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>

        <div class="form-group has-feedback">
          <input type="password" class="form-control" placeholder="Password" name="password" required="required" autocomplete="off">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>

        <div class="row">
          <div class="col-xs-offset-8 col-xs-4">
            <button type="submit" class="btn btn-success btn-block btn-flat">MASUK</button>
          </div>
        </div>

      </form>

    </div>
  </div>
</div>


<script src="assets/template/bower_components/jquery/dist/jquery.min.js"></script>
<script src="assets/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>