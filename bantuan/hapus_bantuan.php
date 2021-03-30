<?php
	include_once '../config/koneksi.php';
	include_once 'class.bantuan.php';
	$bantuan = new bantuan($pdo);
	$id = $_GET['id_bantuan'];
	$bantuan->delete($id);
	header('location:data_bantuan.php')
?>