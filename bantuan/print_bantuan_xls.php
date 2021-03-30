<?php
session_start();
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/ms-excel"); 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data-bantuan.xls");
require_once '../config/koneksi.php';
require_once 'class.bantuan.php'; 
?>
<div class="row-fluid">
<h3 class="header smaller lighter blue">Daftar Bantuan</h3>
</div>
<table id="tabeldata" class="table table-striped table-bordered table-hover" width="100%">
	<thead>
		<tr align="center">
			<th width="50px">No</th>
			<th>Deskripsi</th>
			<th>QTY</th>
			<th>Satuan</th>
			<th>Keterangan</th>
			<th>Posko</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$bantuan = new bantuan($pdo);		
		$id 	= $_SESSION['id_posko'];
		if ($_SESSION['s_level'] == 'administrator'){
			$query = 	"SELECT
						bantuan.id_bantuan,
						bantuan.deskripsi,
						bantuan.qty,
						bantuan.satuan,
						bantuan.keterangan,
						bantuan.id_posko,
						bantuan.created_by,
						bantuan.created_at,
						bantuan.update_by,
						bantuan.update_at,
						posko.alamat_posko,
						users.id_posko
						FROM
						bantuan
						INNER JOIN posko ON bantuan.id_posko = posko.id_posko
						INNER JOIN users ON users.id_posko = posko.id_posko ";	
		}else{
			$query = 	"	SELECT
						bantuan.id_bantuan,
						bantuan.deskripsi,
						bantuan.qty,
						bantuan.satuan,
						bantuan.keterangan,
						bantuan.id_posko,
						bantuan.created_by,
						bantuan.created_at,
						bantuan.update_by,
						bantuan.update_at,
						posko.alamat_posko,
						users.id_posko
						FROM
						bantuan
						INNER JOIN posko ON bantuan.id_posko = posko.id_posko
						INNER JOIN users ON users.id_posko = posko.id_posko
						WHERE
						users.id_posko = $id ";	
		}
		$bantuan->prin($query);
	?>
	</tbody>
</table>
