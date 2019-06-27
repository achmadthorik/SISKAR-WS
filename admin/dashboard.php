<?php  include "layout/head.php"; ?>
<?php include "layout/nav.php"; ?>
<?php include "layout/header.php"; ?>
<?php  include "../koneksi.php"; 

?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
            <a href="add_masuk.php">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-download" ></i></div>
                  <div class="count" data-api>  


                      <?php
          $sqlCommand2 = "SELECT api FROM `api`"; 
          $query2 = mysqli_query($conn, $sqlCommand2); 
          $row1 = mysqli_fetch_row($query2);
          echo $row1[0];
          mysqli_free_result($query2); 

         
          // mysqli_close($v_koneksi);
          ?>

                  </div>
                  <h3>API</h3>
              
                </div>
              </div>
             </a>





             <!--surat keluar-->
            <div class="animated flipInY col-lg-3 col-md-3 col-sm-3 col-xs-6">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-upload"></i></div>
                  <div class="count">
                    <?php 
          include "../koneksi.php";
          $sqlCommand2 = "SELECT asap FROM api"; 
          $query2 = mysqli_query($conn, $sqlCommand2); 
          $row2 = mysqli_fetch_row($query2);
          echo $row2[0];
          mysqli_free_result($query2); 
          // mysqli_close($v_koneksi);
          ?></div>
                  <h3>ASAP</h3>
                  
                </div>
       </div>


       <div class="animated flipInY col-lg-6 col-md-3 col-sm-3 col-xs-6">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-upload"></i></div>
                  <div class="count">
                    <?php 
          include "../koneksi.php";
          $sqlCommand2 = "SELECT status FROM api"; 
          $query2 = mysqli_query($conn, $sqlCommand2); 
          $row3 = mysqli_fetch_row($query2);
          echo $row3[0];
          mysqli_free_result($query2); 
          // mysqli_close($v_koneksi);
          ?></div>
                  <h3>STATUS</h3>
                  
                </div>
       </div>
       
    </div>
<div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <a href="#"><span class="fa fa-bar-chart-o" style="font-size:30px"> </span></a>
                    <a href="admin/Chart_Print.php"><span class="fa fa-print pull-right" style="font-size:30px"></span></a>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

<!--Warning-->
 <?php 
          include "../koneksi.php";
          $sqlCommand2 = "SELECT waktu FROM api"; 
          $query2 = mysqli_query($conn, $sqlCommand2); 
          $row3 = mysqli_fetch_row($query2);
          //echo $row3[0];x_content
          mysqli_free_result($query2); 
          // mysqli_close($v_koneksi);
          ?>


          <?php 
         // echo $row1[0];
          //  if (@$row1[0] == 1 && @$row2[0] == 1 ) {
          if (@$row1[0] == 1) {
              ?>
               <div class="alert alert-warning"  style="background-color: #EB4D4B;">

                  <h1><i class="fa fa-warning"></i> Warning!</h1>TERJADI KEBAKARAN PADA PUKUL  <h2><?php echo $row3[0]; ?></h2>
               </div>
             <?php
          }


          else if(@$row1[0] == 0 && @$row2[0] == 1){
            ?>
               <div class="alert alert-warning">
                  <h1><i class="fa fa-warning"></i> Warning!</h1>TERDETEKSI ASAP PADA PUKUL <h2><?php echo $row3[0]; ?></h2>
               </div>
             <?php
          }
          else if(@$row1[0] == 0 && @$row2 == 0){
            ?>
             <div class="alert alert-warning"  style="background-color: #EB4D4B;" hidden="true">
                  <h1><i class="fa fa-warning"></i> Warning!</h1>TERDETEKSI ASAP PADA PUKUL <h2><?php echo $row3[0]; ?></h2>
            </div>
             <?php
          }
           ?>
          
          
           
<!--Warning-->
          <!--Page Tabel Ko-->
          <?php 
          include "Chart.php"; 
          ?>
        
          <!--Page tabel konte-->
          
          </div>
        </div>
       </div>
      
      </div>
      </div>

<script type="text/javascript">
  
</script>

        <?php include "layout/footer.php"; ?>