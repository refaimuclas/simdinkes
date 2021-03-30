
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Document</title>
<link rel="icon" type="image/jpg" href="../assets/images/rs.jpg" />
<link href="../assets/css/print.css" rel="stylesheet" type="text/css" media="print" />
<link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
</style>
</head>
<?php
session_start();
include_once '../config/koneksi.php';
include_once 'class.bantuan.php';
?>
<body>
<div style="width:95%;margin:0 auto;">
<div class="row-fluid">
<h3 class="header smaller lighter blue">Daftar Bantuan</h3>

</div>
<table width="100%" border="1" align="Top" cellpadding="5" cellspacing="5" padding-top="0px">
	<thead>
		<tr align="center">
			<th width="50px">No</th>
			<th>Deskripsi</th>
			<th>QTY</th>
			<th>Satuan</th>
			<th>Keterangan</th>
			<th>Posko</th>
		</tr>
	</thead>
	<tbody>
		<?php
		$bantuan = new bantuan($pdo);		
		$id 	= $_SESSION['id_posko'];
		if ($_SESSION['s_level'] == 'administrator'){
			$query = 	"SELECT
						bantuan.id_bantuan,
						bantuan.deskripsi,
						bantuan.qty,
						bantuan.satuan,
						bantuan.keterangan,
						bantuan.id_posko,
						bantuan.created_by,
						bantuan.created_at,
						bantuan.update_by,
						bantuan.update_at,
						posko.alamat_posko,
						users.id_posko
						FROM
						bantuan
						INNER JOIN posko ON bantuan.id_posko = posko.id_posko
						INNER JOIN users ON users.id_posko = posko.id_posko ";	
		}else{
			$query = 	"	SELECT
						bantuan.id_bantuan,
						bantuan.deskripsi,
						bantuan.qty,
						bantuan.satuan,
						bantuan.keterangan,
						bantuan.id_posko,
						bantuan.created_by,
						bantuan.created_at,
						bantuan.update_by,
						bantuan.update_at,
						posko.alamat_posko,
						users.id_posko
						FROM
						bantuan
						INNER JOIN posko ON bantuan.id_posko = posko.id_posko
						INNER JOIN users ON users.id_posko = posko.id_posko
						WHERE
						users.id_posko = $id ";	
		}
		$bantuan->prin($query);
	?>
	</tbody>
</table>
<p></p>
<p><button class="style12" id="tombol" onclick="window.print()" ><i class="icon-print"></i>Print</button></p>
</div>
</body>
</html>