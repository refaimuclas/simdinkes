<?php
    session_start();
    // Fungsi header dengan mengirimkan raw data excel
    header("Content-type: application/ms-excel"); 
    // Mendefinisikan nama file ekspor "hasil-export.xls"
    header("Content-Disposition: attachment; filename=Rekap.xls");
    require_once '../config/koneksi.php';
    include_once '../config/fungsi_indotgl.php';
    require_once '../ben/class.b3.php'; 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style7 {color: #000000; font-weight: bold; }
.style8 {color: #000000; }
.style9 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>
</head>

<body>
<table width="100%" border="1">
<thead>
  <tr>
    <td colspan="31" align="center" valign="middle" bgcolor="#FFFFFF"><div align="center"><span class="style9">LAPORAN BANJIR <?php echo tgl_indo($_POST['tgl1'])." s/d  ".tgl_indo($_POST['tgl2']); ?> </span></div></td>
    </tr>
  <tr>
    <td rowspan="3" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">No</div></td>
    <td rowspan="3" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Tgl Kejadian </div></td>
    <td rowspan="3" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Kecamatan</div></td>
    <td rowspan="3" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Puskesmas</div></td>
    <td rowspan="3" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Desa</div></td>
    <td rowspan="3" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Lokasi</div></td>
    <td rowspan="3" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Deskripsi</div></td>
    <td colspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Jenis</div></td>
    <td rowspan="3" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Lokasi Posko </div></td>
    <td rowspan="3" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Kondisi</div></td>
    <td colspan="20" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Jumlah Korban </div></td>
  </tr>
  <tr>
    <td rowspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Pusling</div></td>
    <td rowspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Posko</div></td>
    <td rowspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Meninggal</div></td>
    <td rowspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Hilang</div></td>
    <td rowspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Luka Berat </div></td>
    <td rowspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Luka Ringan </div></td>
    <td colspan="7" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Penduduk Terancam </div></td>
    <td colspan="7" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style7">Pengungsi</div></td>
    <td rowspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style8"><strong>Rumah Terendam </strong></div>      
    <div align="center" class="style8"></div></td>
    <td rowspan="2" align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style8"><strong>Lokasi Pengungsi </strong></div></td>
  </tr>
  <tr>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style8"><strong>KK</strong></div></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style8"><strong>Jiwa</strong></div></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style8"><strong>Bumil</strong></div></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style8"><strong>Ibu Menyusui </strong></div></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><div align="center"><strong>Bayi</strong></div></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style8"><strong>Balita</strong></div></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style8"><strong>Lansia</strong></div></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style8"><strong>KK</strong></div></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style8"><strong>Jiwa</strong></div></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style8"><strong>Bumil</strong></div></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style8"><strong>Ibu Menyusui </strong></div></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style8"><strong>Bayi</strong></div></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style8"><strong>Balita</strong></div></td>
    <td align="center" valign="middle" bgcolor="#CCCCCC"><div align="center" class="style8"><strong>Lansia</strong></div></td>
  </tr>
  </thead>
    <tbody>
        <?php
        $tgl1 = $_POST['tgl1'];
        $tgl2 = $_POST['tgl2'];
        $b3 = new b3($pdo);       
        $query = "SELECT * FROM v_excel WHERE tgl BETWEEN '$tgl1' AND '$tgl2' ";       
        $b3->rekap($query);
    ?>
    </tbody>
  </tr>
</table>
</body>
</html>
