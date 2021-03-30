<?php
session_start();
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/ms-excel"); 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Data-User.xls");
require_once '../../config/koneksi.php';
require_once '../user/class.user.php'; 
?>
<div class="row-fluid">
<h3 class="header smaller lighter blue">Daftar User</h3>
</div>
<table id="tabeldata" class="table table-striped table-bordered table-hover" width="100%" border="1">
	<thead>
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Nama Lengkap</th>
			<th>Email</th>
			<th>No.Telp.</th>
			<th>Unit Layanan</th>
			<th>Level</th>
			<th>Aktif</th>
	</thead>
	<tbody>
	<?php
		$user = new user($pdo);
		if ($_SESSION['s_level'] == 'administrator'){
			$query = "SELECT 	users.username,
								users.`password`,
								users.nama_lengkap,
								users.email,
								users.no_telp,
								users.`level`,
								users.aktif,
								users.foto_user,
								users.id_posko,
								users.created_by,
								users.created_at,
								users.update_by,
								users.update_at,
								posko.alamat_posko
								FROM
								users
								INNER JOIN posko ON users.id_posko = posko.id_posko";	
		}else{			
			$query = "SELECT 	users.username,
								users.`password`,
								users.nama_lengkap,
								users.email,
								users.no_telp,
								users.`level`,
								users.aktif,
								users.foto_user,
								users.id_posko,
								users.created_by,
								users.created_at,
								users.update_by,
								users.update_at,
								posko.alamat_posko
								FROM
								users
								INNER JOIN posko ON users.id_posko = posko.id_posko
								WHERE username ='$_SESSION[s_user]'";	
		}		
		$user->view($query);
	?>
	</tbody>
</table>