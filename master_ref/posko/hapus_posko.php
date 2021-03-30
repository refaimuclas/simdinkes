<?php
	include_once '../../config/koneksi.php';
	include_once 'class.posko.php';
	$posko = new posko($pdo);
	$id = $_GET['id_posko'];
	$posko->delete($id);
	header('location:data_posko.php')
?>