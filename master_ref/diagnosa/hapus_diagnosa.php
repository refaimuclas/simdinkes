<?php
	include_once '../../config/koneksi.php';
	include_once 'class.diagnosa.php';
	$diagnosa_ = new diagnosa($pdo);
	$id = $_GET['id_diagnosa'];
	$diagnosa_->delete($id);
	header('location:data_diagnosa.php')
?>