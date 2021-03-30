<?php
session_start();
require_once '../config/koneksi.php';
include_once '../config/fungsi_indotgl.php';
require_once '../ben/class.b3.php'; 
$b3 = new b3($pdo);
if(isset($_GET['b1_id']))
    {
      $id = $_GET['b1_id'];
      extract($b3->getB3($id));  
    }
	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Detail Bancana</title>
<link rel="icon" type="image/jpg" href="../assets/images/logo_warna.jpg" />
<link href="../print.css" rel="stylesheet" type="text/css" media="print" />
<link rel="stylesheet" href="../assets/css/bootstrap.min.css" /></head>
<body>
<table width="90%" border="0" align="center">
  <tr>
    <td height="21" colspan="3"><strong><?php echo $alamat_posko; ?></strong></td>
    <td width="14%">&nbsp;</td>
    <td width="25%" colspan="2"><div align="right"><strong>FORM B 3 </strong></div></td>
  </tr>
  
  <tr>
    <td height="21" colspan="6" valign="bottom"><div align="center"><strong>LAPORAN PERKEMBANGAN </strong></div></td>
  </tr>
  
  <tr>
    <td height="21" colspan="6">&nbsp;</td>
  </tr>
  <tr>
    <td width="4%" height="21">&nbsp;</td>
    <td width="26%" valign="bottom">Tanggal/Bulan/Tahun </td>
    <td colspan="4"> : <?php echo tgl_indo($tgl); ?></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td valign="top">Jenis Bencana </td>
    <td colspan="4">: Banjir </td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td valign="top">Lokasi Bencana </td>
    <td colspan="4">: <?php echo "Kp. ".$lokasi_bencana." ".$nama_kel." ".$nama_kec." ".$kabupaten."-".$provinsi; ?></td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td valign="top">Waktu Bencana </td>
    <td colspan="4">: <?php echo $jam; ?></td>
  </tr>
  <tr>
    <td height="33"><div align="left"><strong>A.</strong></div></td>
    <td colspan="5"><div align="left"><strong>JUMLAH KORBAN </strong></div></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td colspan="5" valign="top"><table width="100%">
      <tr>
        <td width="27%">1. Meninggal </td>
        <td width="73%">: <?php echo $jumlah_meninggal; ?> Jiwa </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td colspan="5" valign="top"><table width="100%">
      <tr>
        <td width="27%">2. Hilang </td>
        <td width="73%">: <?php echo $jumlah_hilang; ?>  Jiwa </td>
      </tr>
    </table></td>
  </tr>
  
  <!--
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="left">a.Pegunungan</div></td>
    <td><div align="left">:</div></td>
    <td colspan="4"><div align="left"></div></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="left">b.Pulau/Kepulauan  </div></td>
    <td><div align="left">:</div></td>
    <td colspan="4"><div align="left"></div></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="left">c.Pantai</div></td>
    <td><div align="left">:</div></td>
    <td colspan="4"><div align="left"></div></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="left">d.Lain-lain</div></td>
    <td><div align="left">:</div></td>
    <td colspan="4"><div align="left">Pemukiman penduduk dilewati sungai kecil</div></td>
  </tr>
  -->
  
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%">
      <tr>
        <td width="27%">3. Luka Berat </td>
        <td width="73%">: <?php echo $jumlah_luka_berat; ?>  Jiwa </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%">
      <tr>
        <td width="27%">4. Luka Ringan </td>
        <td width="73%">: <?php echo $jumlah_luka_ringan; ?>  Jiwa </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%">
      <tr>
        <td width="27%">5. Pengungsi </td>
        <td width="73%">: <?php echo $jumlah_pengungsi; ?> Jiwa <?php echo $jumlah_kk_2; ?> KK </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%">
      <tr>
        <td width="27%">Lokasi Pengungsian </td>
        <td width="73%">: 1. <?php echo $lokasi_pengungsian_1; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%">
      <tr>
        <td width="27%">&nbsp;</td>
        <td width="73%">: 2. <?php echo $lokasi_pengungsian_2; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%">
      <tr>
        <td width="27%">&nbsp;</td>
        <td width="73%">: 3. <?php echo $lokasi_pengungsian_3; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5">Jumlah kelompok rentan pada pengungsi </td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%">
      <tr>
        <td width="11%">&nbsp;</td>
        <td width="16%">* Bayi </td>
        <td width="73%">:  <?php echo $bayi; ?> Jiwa </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%">
      <tr>
        <td width="11%">&nbsp;</td>
        <td width="16%">* Balita </td>
        <td width="73%">:  <?php echo $balita; ?> Jiwa </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%">
      <tr>
        <td width="11%">&nbsp;</td>
        <td width="16%">* Ibu Hamil </td>
        <td width="73%">:  <?php echo $ibu_hamil; ?> Jiwa </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%">
      <tr>
        <td width="11%">&nbsp;</td>
        <td width="16%">* Ibu menyusui </td>
        <td width="73%">:  <?php echo $ibu_menyusui; ?> Jiwa </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%">
      <tr>
        <td width="11%">&nbsp;</td>
        <td width="16%">* Lansia </td>
        <td width="73%">:  <?php echo $lansia; ?> Jiwa </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5">6. Jumlah Korban yang di rujuk ke </td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%">
      <tr>
        <td width="6%">&nbsp;</td>
        <td width="45%">* <?php echo $rujuk1; ?></td>
        <td width="49%">: Jumlah <?php echo $jml_rujuk1; ?> Jiwa </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%">
      <tr>
        <td width="6%">&nbsp;</td>
        <td width="45%">* <?php echo $rujuk2; ?></td>
        <td width="49%">: Jumlah <?php echo $jml_rujuk2; ?> Jiwa </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%">
      <tr>
        <td width="6%">&nbsp;</td>
        <td width="45%">* <?php echo $rujuk3; ?></td>
        <td width="49%">: Jumlah <?php echo $jml_rujuk3; ?> Jiwa </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%">
      <tr>
        <td width="6%">&nbsp;</td>
        <td width="45%">* <?php echo $rujuk4; ?></td>
        <td width="49%">: Jumlah <?php echo $jml_rujuk4; ?> Jiwa </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%">
      <tr>
        <td width="6%">&nbsp;</td>
        <td width="45%">* <?php echo $rujuk5; ?></td>
        <td width="49%">: Jumlah <?php echo $jml_rujuk5; ?> Jiwa </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="33"><div align="left"><strong>B.</strong></div></td>
    <td colspan="5"><div align="left"><strong>PERKEMBANGAN KONDISI KESEHATAN KORBAN </strong></div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5">1. Jumlah Korban </td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%" border="1" cellpadding="2" cellspacing="2">
      <tr>
        <td><div align="center">Fasilitas Kesehatan </div></td>
        <td><div align="center">Korban Masih di Rawat </div></td>
        <td><div align="center">Korban Meninggal </div></td>
        <td><div align="center">Korban Pulang </div></td>
        <td><div align="center">Korbandi Rujuk </div></td>
        <td><div align="center">Keterangan</div></td>
      </tr>
      <tr>
        <td><div align="center">( 1 ) </div></td>
        <td><div align="center">( 2 ) </div></td>
        <td><div align="center">( 3 ) </div></td>
        <td><div align="center">( 4 ) </div></td>
        <td><div align="center">( 5 ) </div></td>
        <td><div align="center">( 6 ) </div></td>
      </tr>
      <tr>
        <td><?php echo $rujuk1; ?></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"><?php echo $jml_rujuk1; ?></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><?php echo $rujuk2; ?></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"><?php echo $jml_rujuk2; ?></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><?php echo $rujuk3; ?></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"><?php echo $jml_rujuk3; ?></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><?php echo $rujuk4; ?></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"><?php echo $jml_rujuk4; ?></div></td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><?php echo $rujuk5; ?></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"></div></td>
        <td><div align="center"><?php echo $jml_rujuk5; ?></div></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5">2. Jenis Penyakit <strong>Rawat Jalan</strong> di Fasilitas Kesehatan       (RS, Puskesmas, Posko Kesehatan)</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%" border="1" cellspacing="5" cellpadding="2">
    
	  <tr>
        <td width="9%" rowspan="2"><div align="center">No.</div></td>
        <td width="31%" rowspan="2"><div align="center">Diagnosa</div></td>
        <td colspan="3"><div align="center">Umur</div></td>
        <td colspan="3"><div align="center">Sex</div></td>
        </tr>
      <tr>
        <td width="10%"><div align="center">0 - 5 th </div></td>
        <td width="10%"><div align="center"><u>&gt;</u> 5th</div></td>
        <td width="10%"><div align="center">Jumlah</div></td>
        <td width="10%"><div align="center">L</div></td>
        <td width="10%"><div align="center">P</div></td>
        <td width="10%"><div align="center">Jumlah</div></td>
      </tr>
      <tbody>
		<?php
			$query = "SELECT * FROM v_diagnosa where jenis_rawat = 'RJ' ";		
			$b3->b3($query);
		?>
	  </tbody>     
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><ol>3. Jenis Penyakit <strong>Rawat Inap</strong> di Fasilitas Kesehatan (RS,  Puskesmas, Posko Kesehatan) </td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%" border="1" cellspacing="5" cellpadding="2">
      <tr>
        <td width="9%" rowspan="2"><div align="center">No.</div></td>
        <td width="31%" rowspan="2"><div align="center">Diagnosa</div></td>
        <td colspan="3"><div align="center">Umur</div></td>
        <td colspan="3"><div align="center">Sex</div></td>
      </tr>
      <tr>
        <td width="10%"><div align="center">0 - 5 th </div></td>
        <td width="10%"><div align="center"><u>&gt;</u> 5th</div></td>
        <td width="10%"><div align="center">Jumlah</div></td>
        <td width="10%"><div align="center">L</div></td>
        <td width="10%"><div align="center">P</div></td>
        <td width="10%"><div align="center">Jumlah</div></td>
      </tr>
       <tbody>
		<?php
			$query = "SELECT * FROM v_diagnosa where jenis_rawat = 'RI' ";		
			$b3->b31($query);
		?>
	  </tbody>
    </table></td>
  </tr>
  <tr>
    <td height="23"><div align="left"><strong>C.</strong></div></td>
    <td colspan="5"><div align="left">
      <strong>Upaya  penanggulangan yg telah dilakukan </strong>
    </div></td>
  </tr>
  <?php 
      if($upaya_dilakukan_1<>""){
        $no = 1;
      }else{
        $no = "";
      }
      //================================
      if($upaya_dilakukan_2<>""){
        $no1 = 2;
      }else{
        $no1 = "";
      }
      //================================
      if($upaya_dilakukan_3<>""){
        $no2 = 3;
      }else{
        $no2 = "";
      }
      //================================
      if($upaya_dilakukan_4<>""){
        $no3 = 4;
      }else{
        $no3 = "";
      }
      //================================
      if($bantuan1<>""){
        $no4 = 1;
      }else{
        $no4 = "";
      }
      //================================
      if($bantuan2<>""){
        $no5 = 2;
      }else{
        $no5 = "";
      }
      //================================
      if($bantuan3<>""){
        $no6 = 3;
      }else{
        $no6 = "";
      }
      //================================
      if($bantuan4<>""){
        $no7 = 4;
      }else{
        $no7 = "";
      }
      //================================
      if($bantuan5<>""){
        $no8 = 5;
      }else{
        $no8 = "";
      }
      //================================
      if($rencana1<>""){
        $no9 = 1;
      }else{
        $no9 = "";
      }
      //================================
      if($rencana2<>""){
        $no10 = 2;
      }else{
        $no10 = "";
      }
      //================================
      if($rencana3<>""){
        $no11 = 3;
      }else{
        $no11 = "";
      }
      //================================
      if($rencana4<>""){
        $no12 = 4;
      }else{
        $no12 = "";
      }
      //================================
      if($rencana4<>""){
        $no13 = 5;
      }else{
        $no13 = "";
      }
      //================================

    ?>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><?php echo $no.". ".$upaya_dilakukan_1; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><?php echo $no1.". ".$upaya_dilakukan_2; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><?php echo $no2.". ".$upaya_dilakukan_3; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><?php echo $no3.". ".$upaya_dilakukan_4; ?></td>
  </tr>
  <tr>
    <td height="23"><div align="left"><strong>D.</strong></div></td>
    <td colspan="5"><div align="left"><strong>Bantuan segera yg diperlukan </strong></div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><?php echo $no4.". ".$bantuan1; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><?php echo $no5.". ".$bantuan2; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><?php echo $no6.". ".$bantuan3; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><?php echo $no7.". ".$bantuan4; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><?php echo $no8.". ".$bantuan5; ?></td>
  </tr>
  <tr>
    <td height="23"><div align="left"><strong>E.</strong></div></td>
    <td colspan="5"><div align="left"><strong>Rencana tindak lanjut </strong></div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><?php echo $no9.". ".$rencana1; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><?php echo $no10.". ".$rencana2; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><?php echo $no11.". ".$rencana3; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><?php echo $no12.". ".$rencana4; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><?php echo $no13.". ".$rencana5; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5"><table width="100%">
      <tr>
        <td width="37%">Mengetahui, </td>
        <td width="21%">&nbsp;</td>
        <td width="37%">Tangerang, <strong><?php echo tgl_indo(date('Y-m-d')); ?></strong></td>
        <td width="5%">&nbsp;</td>
      </tr>
      <tr>
        <td>Kepala Dinas </td>
        <td>&nbsp;</td>
        <td>Petugas yang melaporkan </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>( <strong><u><?php echo $kepala_dinas; ?></u></strong> )</td>
        <td>&nbsp;</td>
        <td>( <strong><u><?php echo $nama_pelapor; ?></u></strong> )</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>NIP. <?php echo $nip1; ?></strong></td>
        <td>&nbsp;</td>
        <td><strong>NIP. <?php echo $nip1; ?></strong></td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5">&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="5">&nbsp;</td>
  </tr>
  
  <tr>
    <td height="23" colspan="6"><div align="center">
      <table width="100%">
        <tr>
          <td><div align="center">
            <div align="center">
              <?php $foto = '../bencana/img_bencana/'.$file_name1; ?>
              <img src="<?php  echo $foto; ?>"/></div>
          </div></td>
          <td><div align="center">
            <div align="center">
              <?php $foto2 = '../bencana/img_bencana/'.$file_name2; ?>
              <img src="<?php  echo $foto2; ?>" /></div>
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td colspan="6"><div align="center">
      <table width="100%">
        <tr>
          <td><div align="center">
              <div align="center">
                <?php $foto3 = '../bencana/img_bencana/'.$file_name3; ?>
                <img src="<?php  echo $foto3; ?>"/></div>
          </div></td>
          <td><div align="center">
              <div align="center">
                <?php $foto4 = '../bencana/img_bencana/'.$file_name4; ?>
                <img src="<?php  echo $foto4; ?>" /></div>
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
</body>
</html>