<?php
session_start();
include_once '../config/koneksi.php';
include_once '../config/fungsi_indotgl.php';
include_once 'class.ben.php';
?>
<?php if ($_SESSION['s_level'] == 'administrator' ) { ?><?php } ?>
<div id="alert"></div>
<div class="row-fluid">
<h3 class="header smaller lighter blue">Daftar Bencana</h3>
	<div class="table-header">
		<a href="javascript:void(0)" onclick="tambahForm()" class="btn btn-primary" ><i class="icon-plus icon-white"></i>Insert Form B1</a>
	</div>

<table id="tabeldata" class="table table-striped table-bordered table-hover" width="100%">
	<thead>
		<tr>
			<th><div align="center">Form B1</div></th>
			<th><div align="center">Form B2</div></th>
			<th><div align="center">Form B3</div></th>
			<th><div align="center">Deskripsi</div></th>
			<th><div align="center">Lokasi Bencana</div></th>
			<th><div align="center">Tanggal</div></th>
			<th><div align="center">Posko</div></th>			
		</tr>
	</thead>
	<tbody>
		<?php
		$ses = $_SESSION['id_posko'];
		$ben = new ben($pdo);
		if ($_SESSION['s_level'] == 'administrator') {
			$query = "SELECT * FROM v_b1_posko GROUP BY b1_id";
		}else{
			$query = "SELECT * FROM v_b1_posko where id_posko = $ses  GROUP BY b1_id";
		}
		$ben->view($query);		
		?>
	</tbody>
</table>
