<?php
	include_once '../config/koneksi.php';
	include_once 'class.ben.php';
	$ben = new ben($pdo);
	$id = $_GET['b1_id'];
	$ben->delete($id);
	header('location:data_ben.php')
?>