
<?php
	include_once '../config/koneksi.php';
	include_once 'class.ben.php';
	$kec = $_GET['kecamatan'];
	$ben 	= new ben($pdo);
	$query 	= " SELECT * FROM wilayah_desa WHERE id_kec = $kec ORDER BY nama_kel ";
	$ben->kelurahan($query);
?>