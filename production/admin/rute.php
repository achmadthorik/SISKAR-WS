<?php include "konek.php"; 
	$query = "SELECT * FROM RUTE";
	$result=$koneksi->query($query);
?>
<div class="col-md-12 col-sm-12 col-xs-12">
	<div class="x_panel">
	  <div class="x_title">
	  <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bs-example-modal-lg" style="float:right">Tambah</button>
		<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
			<div class="modal-dialog modal-lg">
			  <div class="modal-content">

				<div class="modal-header">
				  <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span>
				  </button>
				  <h4 class="modal-title" id="myModalLabel">Modal title</h4>
				</div>
				<div class="modal-body">
				  <h4>Text in a modal</h4>
				  <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				  <p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				  <button type="button" class="btn btn-primary">Save changes</button>
				</div>

			  </div>
			</div>
	  </div>
		<h2>Table Rute</h2>
		<div class="clearfix"></div>
	  </div>
	  <div class="x_content">
		<table id="datatable" class="table table-striped table-bordered">
		  <thead>
			<tr>
			  <th>Id Rute</th>
			  <th>Id Transportation</th>
			  <th>Depart at</th>
			  <th>Arrival at</th>
			  <th>Rute from</th>
			  <th>Rute to</th>
			  <th>Price</th>
			  <th>Edit</th>
			  <th>Hapus</th>
			</tr>
		  </thead>
		  <tbody>
			<?php
				while($r=mysqli_fetch_array($result)){
					$id_customer = $r['0'];
					$name = $r['1'];
					$address = $r['2'];
					$phone = $r['3'];
					$gender = $r['4'];
					?>
					<tr>
						<td><?php echo $id_customer ?></td>
						<td><?php echo $name ?></td>
						<td><?php echo $address ?></td>
						<td><?php echo $phone ?></td>
						<td><?php echo $gender ?></td>
						<td align="center"><a data-toggle='modal' data-target='.bs-example-modal-lg' href='edit_user.php?edit_user=$user_id&USER=$judul&PASS=$pass&LEVEL=$level&NAMA_USER=$nama'><span class='fa fa-pencil'></span></a></td>
						<td><a href=\"delete_user.php?hapus_user=$id_user\" onClick=\"return confirm('Apakah Anda benar-benar mau menghapus semua data user?')\"><center><i class='glyphicon glyphicon-trash'></center></a></span></td>
					</tr>
					<?php
				}
			?>
		  </tbody>
		</table>
	  </div>
	</div>
</div>