
<?php
	include_once '../config/koneksi.php';
	include_once 'class.pasien.php';
	$prov 	= $_GET['id_prov'];
	$pasien = new pasien($pdo);
	$query 	= " SELECT * FROM wilayah_kabupaten WHERE id_prov = $prov ORDER BY nama_kab ";
	$pasien->kabupaten($query);
?>