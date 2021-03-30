
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
			<th>Diagnosa</th>
			<th>Keterangan</th>
			<th width="50px">Aktif</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$diagnosa = new diagnosa($pdo);		
		$query = "SELECT * FROM diagnosa order by aktif desc";		
		$diagnosa->prin($query);
	?>
	</tbody>
</table>
<p></p>
<p>Tanggal <?php echo date('d-M-Y'); ?><br />
Jumlah diagnosa Aktif = <?php $diagnosa->count_aktif(); ?><br />
Jumlah diagnosa Tidak Aktif = <?php $diagnosa->count_not_aktif(); ?></p>
<p></p>
<p><button class="style12" id="tombol" onclick="window.print()" ><i class="icon-print"></i>Print</button></p>
</div>
</body>
</html>