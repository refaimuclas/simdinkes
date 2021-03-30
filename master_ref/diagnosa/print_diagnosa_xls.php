<?php
session_start();
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/ms-excel"); 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data-diagnosa.xls");
require_once '../../config/koneksi.php';
require_once '../diagnosa/class.diagnosa.php'; 
?>
<div class="row-fluid">
<h3 class="header smaller lighter blue">Daftar Diagnosa</h3>
</div>
<table id="tabeldata" class="table table-striped table-bordered table-hover" width="100%" border="1">
	<thead>
		<tr align="center">
			<th width="50px">No</th>
			<th>Diagnosa</th>
			<th>Keterangan</th>
			<th width="50px">Aktif</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$diagnosa = new diagnosa($pdo);		
		$query = "SELECT * FROM diagnosa";		
		$diagnosa->view($query);
	?>
	</tbody>
</table>
<p></p>
<p>Tanggal <?php echo date('d-M-Y'); ?><br />
Jumlah diagnosa Aktif = <?php $diagnosa->count_aktif(); ?><br />
Jumlah diagnosa Tidak Aktif = <?php $diagnosa->count_not_aktif(); ?></p>
<p></p>