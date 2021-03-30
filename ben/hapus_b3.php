<?php
	include_once '../config/koneksi.php';
	include_once 'class.b3.php';
	$b3 = new b3($pdo);
	$id = $_GET['b3_id'];
	$b3->deleteB3($id);
?>