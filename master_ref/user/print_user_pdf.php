<?php
/* 
	-- --------------------------------------------------------
	-- --------------------------------------------------------
	-- Nama File : cetak-laporan.php  
	-- Author    : AKSINDOTAMA 
	-- Email     : aksindotamagroup@gmail.com
	-- Website   : www.aksindotama.com 
	-- Copyright [c] 2016 AKSINDOTAMA 
	*/

	session_start();
	include_once '../../config/koneksi.php';
	include_once 'class.user.php';

	// Define relative path from this script to mPDF
	$nama_dokumen='Daftar User Login'; //Beri nama file PDF hasil.
	define('../../assets/MPDF57/');
	include("../../assets/MPDF57/mpdf.php");
	$mpdf=new mPDF('utf-8', 'A4'); // Create new mPDF Document

	//Beginning Buffer to save PHP variables and HTML tags
	ob_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Document</title>
<link rel="icon" type="image/jpg" href="../../assets/images/rs.jpg" />
<link href="../../assets/css/print.css" rel="stylesheet" type="text/css" media="print" />
<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
</style>
</head>
<body>
<div style="width:95%;margin:0 auto;">
<div class="row-fluid">
<h3 class="header smaller lighter blue">Daftar User Login</h3>
</div>
<table width="100%" border="1" align="Top" cellpadding="5" cellspacing="5" padding-top="0px">
	<thead>
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Nama Lengkap</th>
			<th>Email</th>
			<th>No.Telp.</th>
			<th>Posko</th>
			<th>Level</th>
			<th>Aktif</th>
		</tr>
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
		$user->prin($query);
	?>
	</tbody>
</table>
</div>
</body>
</html>

<?php

	$html = ob_get_contents(); //Proses untuk mengambil hasil dari OB..
	ob_end_clean();
	//Here convert the encode for UTF-8, if you prefer the ISO-8859-1 just change for $mpdf->WriteHTML($html);
	$mpdf->WriteHTML(utf8_encode($html));
	$mpdf->Output($nama_dokumen.".pdf" ,'I');
	exit;
	
?>