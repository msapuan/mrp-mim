<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>


  <section class="content">

    <div class="row">

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <p>Kalkulator Bahan Penolong/Pembantu</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="kalkulator.php" class="small-box-footer">Masuk <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-blue">
          <div class="inner">
            <p>MRP</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="mrp.php" class="small-box-footer">Masuk <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-orange">
          <div class="inner">
            <p>Mesin Jalan Tiap Bulan</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="mesin.php" class="small-box-footer">Masuk <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-black">
          <div class="inner">
            <p>Order Kerja Produksi</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="order.php" class="small-box-footer">Masuk <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

    </div>

    <!-- /.row -->
    <!-- Main row -->
    <div class="row">

      <section class="col-lg-4">

        <!-- Calendar -->
        <div class="box box-solid bg-default-gradient">
          <div class="box-header">
            <i class="fa fa-calendar"></i>
            <h3 class="box-title">Kalender</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body no-padding">
            <!--The calendar -->
            <div id="calendar" style="width: 100%"></div>
          </div>
          <!-- /.box-body -->
        </div>
        

      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->

  </section>

</div>

















<?php include 'footer.php'; ?>