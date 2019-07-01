<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php include "../koneksi.php";
$query = "SELECT * FROM api order by id desc";
$result=$conn->query($query);
?>

 <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> LAPORAN <small>Data Sensor</small></h3>
              </div>
         
            </div>

            <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><a href="#"><i class="fa fa-plus"></i> Laporan Data Sensor </a></h2>

                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>ID</th>

                          <th>API</th>
                          <th>ASAP</th>
                          <th>STATUS</th>
                          <th>WAKTU</th>
                          

                        </tr>
                      </thead>


                      <tbody>
            <?php $i=0;
            while($r=mysqli_fetch_array($result))
            {
              $id = $r['0'];
              $api = $r['1'];
              $asap = $r['2'];
              $status = $r['3'];
              $waktu = $r['4'];
            
              ?>

                        <tr>
            <td><?php echo $id ?></td>

            <td><?php echo $api ?></td>
            <td><?php echo $asap ?></td>
             <td><?php echo $status ?></td>
              <td><?php echo $waktu ?></td>


            <?php $i++; } ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
      </div>
    </div>
    </div>

<?php include "layout/footer.php"; ?>
