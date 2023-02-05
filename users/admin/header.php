<?php 
  
  include "../../config/config.php";
  session_start();
  //berfungsi mengecek apakah user sudah login atau belum
  if($_SESSION['level']==""){
    header("location:../../index.php?alert=belum_login");
  }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin - Sistem MRP</title>

  <!-- <link rel="icon" href="../gambar/sistem/icon.png"> -->
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../../assets/template/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../assets/template/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../assets/template/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../../assets/template/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../../assets/template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="../../assets/template/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../../assets/template/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="../../assets/template/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../../assets/template/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="../../assets/template/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../../assets/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body class="hold-transition skin-blue sidebar-mini">

  <style>
    #table-datatable {
      width: 100% !important;
    }
    #table-datatable .sorting_disabled{
      border: 1px solid #f4f4f4;
    }
  </style>
  <div class="wrapper">

    <header class="main-header">
      <a href="index.php" class="logo">
        <span class="logo-mini">
          <b>
            <!-- <i class="fa fa-money"></i> -->
            <!-- <img src="../gambar/sistem/icon.png" alt="icon" width="24px" height="24px"> -->
            MRP
          </b> 
        </span>
        <span class="logo-lg"><b>Sistem</b> MRP</span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php 
                $id_user = $_SESSION['id'];
                $profil = mysqli_query($con,"SELECT * FROM user WHERE user_id='$id_user'");
                $profil = mysqli_fetch_assoc($profil);
                if($profil['user_foto'] == ""){ 
                ?>
                  <img src="../../assets/images/sistem/user.png" class="user-image">
                <?php }else{ ?>
                  <img src="../../assets/images/user/<?php echo $profil['user_foto'] ?>" class="user-image">
                <?php } ?>
                <span class="hidden-xs"><?php echo $_SESSION['nama']; ?> - <?php echo $_SESSION['level']; ?></span>
              </a>
            </li>
            <li>
              <a href="logout.php"><i class="fa fa-sign-out"></i> LOGOUT</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="main-sidebar">
      <section class="sidebar">
        <div class="user-panel">
          <div class="pull-left image">
            <?php 
            $id_user = $_SESSION['id'];
            $profil = mysqli_query($con,"SELECT * FROM user WHERE user_id='$id_user'");
            $profil = mysqli_fetch_assoc($profil);
            if($profil['user_foto'] == ""){ 
            ?>
              <img src="../../assets/images/sistem/user.png" class="img-circle">
            <?php }else{ ?>
              <img src="../../assets/images/user/<?php echo $profil['user_foto'] ?>" class="img-circle" style="max-height:45px">
            <?php } ?>
          </div>
          <div class="pull-left info">
            <p><?php echo $_SESSION['nama']; ?></p>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>

        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION</li>

          <li>
            <a href="index.php">
              <i class="fa fa-dashboard"></i> <span>DASHBOARD</span>
            </a>
          </li>

          <li>
            <a href="kalkulator.php">
              <i class="fa fa-dashboard"></i> <span>KALKULATOR BAHAN</span>
            </a>
          </li>

          <li>
            <a href="mrp.php">
              <i class="fa fa-folder"></i> <span>MRP</span>
            </a>
          </li>

          <li>
            <a href="mesin.php">
              <i class="fa fa-folder"></i> <span>MESIN JALAN</span>
            </a>
          </li>

          <li>
            <a href="order.php">
              <i class="fa fa-folder"></i> <span>ORDER KERJA</span>
            </a>
          </li>

          <li>
            <a href="gantipassword.php">
              <i class="fa fa-lock"></i> <span>GANTI PASSWORD</span>
            </a>
          </li>

          <li>
            <a href="logout.php">
              <i class="fa fa-sign-out"></i> <span>LOGOUT</span>
            </a>
          </li>
          
        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>
