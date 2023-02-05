<?php 
    include "header.php"; 
    include "../../config/config.php";
?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Kalkulator Plastik
      <small>Kalkulator Plastik</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-4">
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Kalkulator Plastik</h3>
          </div>
          <div class="box-body">
            <form action="kalkulator-plastik.php" method="post">
              <div class="form-group">
                <label>Ukuran Plastik</label>
                <select class="form-control" name="ukuran">
                    <option value=""> - Pilih Ukuran - </option>
                    <?php
                        // $data = mysqli_query($con, "SELECT ukuran FROM ukuran_plastik");
                        // while($d = mysqli_fetch_array($data)){
                    ?>
                  <option value="138 X 150"> 138 X 150 </option>
                  <option value="105 X 128"> 105 X 128 </option>
                  <option value="89 X 158"> 89 X 158 </option>
                    <?php //} ?>
                </select>
              </div>
              <div class="form-group">
                <label>Kebutuhan</label>
                <input type="text" class="form-control" placeholder="Masukkan Jumlah Kebutuhan .." name="kebutuhan" required="required">
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-sm btn-primary" name="hitung" value="Hitung">
                <a href="kalkulator-plastik.php" class="btn btn-sm btn-warning">Reset</a>
              </div>
            </form>
          </div>

        </div>
      </section>

      <section class="col-lg-6">
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Ukuran Plastik</h3>
          </div>
          <div class="box-body">
            
            <div class="table-responsive">
                <table class="table table-bordered table-striped" id="table-datatable">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Ukuran Plastik</th>
                            <th>Pcs / Kg</th>
                            <th>Kg</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td> 1 </td>
                            <td> 138 x 150 </td>
                            <td> 7 </td>
                            <td>
                            <?php 
                                if(isset($_POST['hitung'])){
                                    $ukuran = $_POST['ukuran'];
                                    $kebutuhan = $_POST['kebutuhan'];
                                    if($ukuran = "138 X 150"){
                                        $u1 = $kebutuhan / 7;
                                    }
                            ?>
                                <input type="text" name="u1" value="<?php echo $u1; ?>">
                            <?php } else { ?>
                                <input type="text">
                            <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 2 </td>
                            <td> 105 x 123 </td>
                            <td> 11 </td>
                            <td>
                            <?php 
                                if(isset($_POST['hitung'])){
                                    $ukuran = $_POST['ukuran'];
                                    $kebutuhan = $_POST['kebutuhan'];
                                    if($ukuran = "105 X 123"){
                                        $u2 = $kebutuhan / 11;
                                    }
                            ?>
                                <input type="text" name="u2" value="<?php echo $u2; ?>">
                            <?php } else { ?>
                                <input type="text">
                            <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td> 89 x 158 </td>
                            <td> 11 </td>
                            <td>
                            <?php 
                                if(isset($_POST['hitung'])){
                                    $ukuran = $_POST['ukuran'];
                                    $kebutuhan = $_POST['kebutuhan'];
                                    if($ukuran = "89 X 158"){
                                        $u3 = $kebutuhan / 11;
                                    }
                            ?>
                                <input type="text" name="u3" value="<?php echo $u3; ?>">
                            <?php } else { ?>
                                <input type="text">
                            <?php } ?>
                            </td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td> 64 x 81.5 </td>
                            <td> 27 </td>
                            <td> <input type="text" name="u4" value="<?php echo $u4; ?>"> </td>
                        </tr>
                        <tr>
                            <td> 5 </td>
                            <td> 64 x 103 </td>
                            <td> 49 </td>
                            <td> <input type="text" name="u5" value="<?php echo $u5; ?>"> </td>
                        </tr>
                        <tr>
                            <td> 6 </td>
                            <td> 54 x 100 </td>
                            <td> 29 </td>
                            <td> <input type="text" name="u6" value="<?php echo $u6; ?>"> </td>
                        </tr>
                        <tr>
                            <td> 7 </td>
                            <td> 52 x 88 </td>
                            <td> 36 </td>
                            <td> <input type="text" name="u7" value="<?php echo $u7; ?>"> </td>
                        </tr>
                        <tr>
                            <td> 8 </td>
                            <td> 52 x 71 </td>
                            <td> 42 </td>
                            <td> <input type="text" name="u8" value="<?php echo $u8; ?>"> </td>
                        </tr>
                        <tr>
                            <td> 9 </td>
                            <td> 51 x 46 </td>
                            <td> 70 </td>
                            <td> <input type="text" name="u9" value="<?php echo $u9; ?>"> </td>
                        </tr>
                        <tr>
                            <td> 10 </td>
                            <td> 47 x 35 </td>
                            <td> 113 </td>
                            <td> <input type="text" name="u10" value="<?php echo $u10; ?>"> </td>
                        </tr>
                    </tbody>
                </table>
            </div>

          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>

