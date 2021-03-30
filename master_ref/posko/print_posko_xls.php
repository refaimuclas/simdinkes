<?php
session_start();
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/ms-excel"); 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data-Posko.xls");
require_once '../../config/koneksi.php';
require_once '../posko/class.posko.php'; 
?>
<div class="row-fluid">
<h3 class="header smaller lighter blue">Daftar posko</h3>
</div>
<table id="tabeldata" class="table table-striped table-bordered table-hover" width="100%" border="1">
	<thead>
		<tr align="center">
			<th width="50px">ID</th>
			<th>Posko</th>
			<th>Keterangan</th>
			<th width="50px">Aktif</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$posko = new posko($pdo);		
		$query = "SELECT * FROM posko";		
		$posko->view($query);
	?>
	</tbody>
</table>
<p></p>
<p>Tanggal <?php echo date('d-M-Y'); ?><br />
Jumlah Posko Aktif = <?php $posko->count_aktif(); ?><br />
Jumlah Posko Tidak Aktif = <?php $posko->count_not_aktif(); ?></p>
<p></p>