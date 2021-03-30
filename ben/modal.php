<div id="form" class="modal" tabindex="-1" >
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<a href="javascript:void(0)" onclick="swapContent('ben/ben')">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				</a>
				<h4 class="blue bigger">List Diagnosa Form B3</h4>
			</div>

			<div class="modal-body">
			<?php
			session_start();
			include_once '../config/koneksi.php';
			include_once '../config/fungsi_indotgl.php';
			include_once 'class.b3.php';
			?>
			<?php if ($_SESSION['s_level'] == 'administrator' ) { ?><?php } ?>
	        <table id="tabeldata" class="table table-striped table-bordered table-hover" width="100%">
				<thead>
					<tr>
						<th><div align="center">Diagnosa</div></th>
						<th><div align="center">Jenis Rawat</div></th>
						<th><div align="center">L</div></th>
						<th><div align="center">P</div></th>
						<th><div align="center">0-5th</div></th>
						<th><div align="center">> 5th</div></th>
						<th><div align="center">Aksi</div></th>			
					</tr>
				</thead>
				<tbody>
					<?php
					$id = $_GET['b1_id'];
					$b3 = new b3($pdo);
					$query = "SELECT * FROM v_diagnosa where b1_id = $id ";
					$b3->view($query);		
					?>
				</tbody>
			</table>

			<div class="modal-footer">
				
				<?php echo "
				<a href='javascript:void(0)' onclick='editDataB3($id)' class='btn btn-primary' ><i class='icon-plus icon-white'></i>Tambah</a> "; ?>
				<a href="javascript:void(0)" onclick="swapContent('ben/ben')" class="btn btn-primary"> Tutup</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">

</script>