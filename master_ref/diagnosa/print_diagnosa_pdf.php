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
	include_once 'class.diagnosa.php';

	// Define relative path from this script to mPDF
	$nama_dokumen='Daftar Diagnosa'; //Beri nama file PDF hasil.
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
<?php
session_start();
include_once '../../config/koneksi.php';
include_once 'class.diagnosa.php';
?>
<body>

<div style="width:95%;margin:0 auto;">
<div class="row-fluid">
<h3 class="header smaller lighter blue">Daftar Diagnosa</h3>
</div>
<table width="100%" border="1" align="Top" cellpadding="5" cellspacing="5" padding-top="0px">
	<thead>
		<tr align="center">
			<th width="50px">No</th>
			<!--<th width="50px">ID</th>-->
			<th>diagnosa</th>
			<th>Keterangan</th>
			<th width="50px">Aktif</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$diagnosa = new diagnosa($pdo);		
		$query = "SELECT * FROM diagnosa";		
		$diagnosa->prin($query);
	?>
	</tbody>
</table>
<p></p>
<p>Tanggal <?php echo date('d-M-Y'); ?><br />
Jumlah diagnosa Aktif = <?php $diagnosa->count_aktif(); ?><br />
Jumlah diagnosa Tidak Aktif = <?php $diagnosa->count_not_aktif(); ?></p>
<p></p>
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