<?php
session_start();
require_once '../config/koneksi.php';
include_once '../config/fungsi_indotgl.php';
require_once '../ben/class.ben.php'; 
$ben = new ben($pdo);
if(isset($_GET['b1_id']))
    {
      $id = $_GET['b1_id'];
      extract($ben->getIDPrintB2($id));  
    }
	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Detail B2</title>
<link rel="icon" type="image/jpg" href="../assets/images/logo_warna.jpg" />
<link href="../print.css" rel="stylesheet" type="text/css" media="print" />
<link rel="stylesheet" href="../assets/css/bootstrap.min.css" /></head>
<body>
<table width="90%" height="3446" border="0" align="center">
  <tr>
    <td height="21" colspan="5"><strong>UPT  Puskesmas Kronjo</strong>      <div align="right"></div></td>
    <td width="11%">&nbsp;</td>
    <td colspan="2"><div align="right"><strong>FORM B 2</strong></div></td>
  </tr>
  
  <tr>
    <td height="21" colspan="8" valign="bottom"><div align="center">
      <p align="center"><strong>LAPORAN PENILAIAN KEBUTUHAN CEPAT KESEHATAN </strong><strong> </strong></p>
    </div></td>
  </tr>
  
  <tr>
    <td width="4%" height="21"><div align="center"><strong>A.</strong></div></td>
    <td colspan="2" valign="bottom"><strong>JENIS BENCANA</strong></td>
    <td width="1%">&nbsp;</td>
    <td width="33%">&nbsp;</td>
    <td>&nbsp;</td>
    <td width="11%">&nbsp;</td>
    <td width="11%">&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td colspan="2" valign="top"><strong>Banjir</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="23"><div align="center"><strong>B.</strong></div></td>
    <td colspan="4"><strong>DESKRIPSI BENCANA</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="42">&nbsp;</td>
    <td colspan="7"><div align="left"><?php echo $deskripsi_bencana; ?></div></td>
  </tr>
  
  <tr>
    <td height="21">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21"><div align="center"><strong>C.</strong></div></td>
    <td colspan="4"><strong>LOKASI BENCANA</strong></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td width="2%"><div align="left">1.</div></td>
    <td width="27%"><div align="left">Dusun</div></td>
    <td><div align="left">:</div></td>
    <td colspan="4"><div align="left"><?php echo $lokasi_bencana; ?></div></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td><div align="left">2.</div></td>
    <td><div align="left">Desa/Kelurahan</div></td>
    <td><div align="left">:</div></td>
    <td colspan="4"><div align="left"><?php echo $nama_kel; ?></div></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td><div align="left">3.</div></td>
    <td><div align="left">Kecamatan</div></td>
    <td><div align="left">:</div></td>
    <td colspan="4"><div align="left"><?php echo $nama_kec; ?></div></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td><div align="left">4.</div></td>
    <td><div align="left">Kabupaten</div></td>
    <td><div align="left">:</div></td>
    <td colspan="4"><div align="left"><?php echo $kabupaten; ?></div></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td><div align="left">5.</div></td>
    <td><div align="left">Propinsi</div></td>
    <td><div align="left">:</div></td>
    <td colspan="4"><div align="left"><?php echo $provinsi; ?></div></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td><div align="left">6.</div></td>
    <td><div align="left">Letak  Geografi </div></td>
    <td><div align="left">:</div></td>
    <td colspan="4"><?php echo $letak_geografi; ?></td>
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
    <td height="21">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21"><div align="center"><strong>D.</strong></div></td>
    <td colspan="4"><div align="left"><strong>WAKTU KEJADIAN</strong></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td colspan="2"><div align="left">Hari</div></td>
    <td>:</td>
    <td><div align="left"><?php echo $hari; ?></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td colspan="2"><div align="left">Tanggal</div></td>
    <td>:</td>
    <td><div align="left"><?php echo tgl_indo($tgl); ?></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td colspan="2"><div align="left">Pukul</div></td>
    <td>:</td>
    <td><div align="left"><?php echo $jam; ?></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21"><div align="center"><strong>E.</strong></div></td>
    <td colspan="4"><div align="left"><strong>JUMLAH PENDUDUK YANG TERANCAM </strong></div></td>
    <td><?php echo $jumlah_penduduk_terancam; ?> Jiwa</td>
    <td><?php echo $jumlah_kk_1; ?> KK </td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21"><div align="center"><strong>F.</strong></div></td>
    <td colspan="7"><strong>JUMLAH KORBAN</strong></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td><div align="left">1.</div></td>
    <td><div align="left">Meninggal</div></td>
    <td><div align="left">:</div></td>
    <td colspan="4"><table width="100%">
      <tr>
        <td width="17%"><div align="center"><?php echo $jumlah_meninggal; ?></div></td>
        <td width="83%"><div align="left">Jiwa</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td><div align="left">2.</div></td>
    <td><div align="left">Hilang</div></td>
    <td><div align="left">:</div></td>
    <td colspan="4"><table width="100%">
      <tr>
        <td width="17%" height="21"><div align="center"><?php echo $jumlah_hilang; ?></div></td>
        <td width="83%"><div align="left">Jiwa</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td><div align="left">3.</div></td>
    <td><div align="left">Luka  Berat</div></td>
    <td><div align="left">:</div></td>
    <td colspan="4"><table width="100%">
      <tr>
        <td width="17%"><div align="center"><?php echo $jumlah_luka_berat; ?></div></td>
        <td width="83%"><div align="left">Jiwa</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td><div align="left">4.</div></td>
    <td><div align="left">Luka  Ringan</div></td>
    <td><div align="left">:</div></td>
    <td colspan="4"><table width="100%">
      <tr>
        <td width="17%"><div align="center"><?php echo $jumlah_luka_ringan; ?></div></td>
        <td width="83%"><div align="left">Jiwa</div></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td height="21">&nbsp;</td>
    <td><div align="left">5.</div></td>
    <td><div align="left">Pengungsi</div></td>
    <td><div align="left">:</div></td>
    <td colspan="4"><table width="100%">
      <tr>
        <td width="17%"><div align="center"><?php echo $jumlah_pengungsi; ?></div></td>
        <td width="22%">Jiwa</td>
        <td width="20%"><div align="center"><?php echo $jumlah_kk_2; ?></div></td>
        <td width="41%">KK</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td><div align="left">Lokasi  Pengungsian</div></td>
    <td><div align="left">:</div></td>
    <td colspan="4"><div align="left">
      <table width="100%">
        <tr>
          <td width="3%" height="21"><div align="left">1.</div></td>
          <td width="97%"><?php echo $lokasi_pengungsian_1; ?></td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4"><table width="100%">
      <tr>
        <td width="3%" height="21"><div align="left">2.</div></td>
        <td width="97%"><?php echo $lokasi_pengungsian_2; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="4"><table width="100%">
      <tr>
        <td width="3%" height="21"><div align="left">3.</div></td>
        <td width="97%"><?php echo $lokasi_pengungsian_3; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6"><div align="left">Jumlah kelompok  rentan pada pengungsi </div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6"><div align="left">
      <table width="100%">
        <tr>
          <td width="33%">Bayi</td>
          <td width="34%">: <?php echo $bayi; ?> Jiwa </td>
          <td width="33%">&nbsp;</td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6"><div align="left">
      <table width="100%">
        <tr>
          <td width="33%">Balita</td>
          <td width="34%">: <?php echo $balita; ?> Jiwa </td>
          <td width="33%">&nbsp;</td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6"><div align="left">
      <table width="100%">
        <tr>
          <td width="33%">Ibu Hamil</td>
          <td width="34%">: <?php echo $ibu_hamil; ?> Jiwa </td>
          <td width="33%">&nbsp;</td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6"><div align="left">
      <table width="100%">
        <tr>
          <td width="33%">Ibu Menyusui</td>
          <td width="34%">: <?php echo $ibu_menyusui; ?> Jiwa </td>
          <td width="33%">&nbsp;</td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6"><div align="left">
      <table width="100%">
        <tr>
          <td width="33%">Lansia</td>
          <td width="34%">: <?php echo $lansia; ?> Jiwa </td>
          <td width="33%">&nbsp;</td>
        </tr>
      </table>
    </div></td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td><div align="left">6.</div></td>
    <td colspan="6"><div align="left">Jumlah Korban Yang di Rujuk Ke : </div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6"><table width="100%">
      <tr>
        <td width="41%"><?php echo $rujuk1; ?></td>
        <td width="25%">Jumlah</td>
        <td width="3%">:</td>
        <td width="31%"><?php echo $jml_rujuk1; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6"><table width="100%">
      <tr>
        <td width="41%"><?php echo $rujuk2; ?></td>
        <td width="25%">Jumlah</td>
        <td width="3%">:</td>
        <td width="31%"><?php echo $jml_rujuk2; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6"><table width="100%">
      <tr>
        <td><?php echo $rujuk3; ?></td>
        <td>Jumlah</td>
        <td>:</td>
        <td><?php echo $jml_rujuk3; ?></td>
      </tr>
      <tr>
        <td><?php echo $rujuk4; ?></td>
        <td>Jumlah</td>
        <td>:</td>
        <td><?php echo $jml_rujuk4; ?></td>
      </tr>
      <tr>
        <td width="41%"><?php echo $rujuk5; ?></td>
        <td width="25%">Jumlah</td>
        <td width="3%">:</td>
        <td width="31%"><?php echo $jml_rujuk5; ?></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td height="23"><div align="center"><strong>G.</strong></div></td>
    <td colspan="7"><div align="left"><strong>SARANA       KESEHATAN YANG RUSAK</strong> </div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td><div align="left">1.</div></td>
    <td colspan="6"><div align="left">Jumlah dan Jenis Fasilitas Kesehatan</div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6"><table width="100%" border="1" cellpadding="5" cellspacing="2">
      <tr>
        <td width="45%" rowspan="2"><div align="center">Sarana Kesehatan</div></td>
        <td colspan="2"><div align="center">Kondisi  Bangunan</div></td>
        <td colspan="2"><div align="center">Fungsi Pelayanan</div></td>
        </tr>
      <tr>
        <td width="13%"><div align="center">Rusak</div></td>
        <td width="15%"><div align="center">Tidak</div></td>
        <td width="13%"><div align="center">Ya</div></td>
        <td width="14%"><div align="center">Tidak</div></td>
      </tr>
      <tr>
        <td><div align="left">a. RS </div></td>
        <td><div align="center">
          <?php if($rs=="Rusak"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
        <td><div align="center">
          <?php if($rs=="Tidak"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
        <td><div align="center">
          <?php if($rs1=="Y"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
        <td><div align="center">
          <?php if($rs1=="Tidak"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="left">b. Puskesmas</div></td>
        <td><div align="center">
          <?php if($puskesmas=="Rusak"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
        <td><div align="center">
          <?php if($puskesmas=="Tidak"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
        <td><div align="center">
          <?php if($puskesmas1=="Y"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
        <td><div align="center">
          <?php if($puskesmas1=="Tidak"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="left">c. Pustu</div></td>
        <td><div align="center">
          <?php if($pustu=="Rusak"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
        <td><div align="center">
          <?php if($pustu=="Tidak"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
        <td><div align="center">
          <?php if($pustu1=="Y"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
        <td><div align="center">
          <?php if($pustu1=="Tidak"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="left">d. Gudang Farmasi</div></td>
        <td><div align="center">
          <?php if($gudang_farmasi=="Rusak"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
        <td><div align="center">
          <?php if($gudang_farmasi=="Tidak"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
        <td><div align="center">
          <?php if($gudang_farmasi1=="Y"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
        <td><div align="center">
          <?php if($gudang_farmasi1=="Tidak"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
      </tr>
      <tr>
        <td><div align="left">e. Polindes</div></td>
        <td><div align="center">
          <?php if($polindes=="Rusak"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
        <td><div align="center">
          <?php if($polindes=="Tidak"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
        <td><div align="center">
          <?php if($polindes1=="Y"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
        <td><div align="center">
          <?php if($polindes1=="Tidak"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?>
        </div></td>
      </tr>
    </table></td>
  </tr>
  
  <tr>
    <td height="23">&nbsp;</td>
    <td><div align="left">.2.</div></td>
    <td colspan="6"><div align="left">Sumber air bersih yang digunakan :</div></td>
  </tr>
  
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%">&nbsp;</td>
        <td width="27%">a. Sumur Gali </td>
        <td width="46%"> : <?php echo $sumur_gali; ?> Buah </td>
        <td width="25%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%">&nbsp;</td>
        <td width="27%">b. SPT</td>
        <td width="46%"> : <?php echo $pma; ?> Buah </td>
        <td width="25%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td>&nbsp;</td>
        <td>c. PMA </td>
        <td>: <?php echo $spt; ?> Buah </td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="2%">&nbsp;</td>
        <td width="27%">d. PAH</td>
        <td width="46%"> : <?php echo $pah; ?> Buah </td>
        <td width="25%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%">&nbsp;</td>
        <td width="27%">e. Perpipaan</td>
        <td width="46%"> : <?php echo $perpipaan; ?> Buah </td>
        <td width="25%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%">&nbsp;</td>
        <td width="27%">f. Dll ( <?php echo $dll1; ?> ) </td>
        <td width="46%"> : <?php echo $jml_dll1; ?> Buah </td>
        <td width="25%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td>&nbsp;</td>
        <td><?php echo $dll2; ?></td>
        <td>: <?php echo $jml_dll2; ?> Buah</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="3">Sarana  Sanitasi dan Kesehatan Lingkungan</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>a. Jamban keluarga </td>
        <td>: <?php echo $jamban_keluarga; ?> Buah</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>b. MCK </td>
        <td>: <?php echo $mck; ?> Buah</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td width="2%">&nbsp;</td>
        <td width="27%">c. Dll ( <?php echo $dll3; ?> ) </td>
        <td width="46%">: <?php echo $jml_dll3; ?> Buah</td>
        <td width="25%">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23"><div align="center"><strong>H.</strong></div></td>
    <td colspan="7"><div align="left"><strong>FASILITAS UMUM </strong></div></td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td colspan="7">1. Akses Kejadian Bencana </td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%">&nbsp;</td>
        <td width="98%"><input type="checkbox" name="checkbox" value="checkbox" checked="checked" />
          <?php echo $akses_kelokasi; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7">2. Jalur  komunikasi yang masih dapat digunakan :</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%">&nbsp;</td>
        <td width="98%"><?php echo $jalur_komunikasi; ?></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7">3. Keadaan Jaringan Listrik </td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%">&nbsp;</td>
        <td width="98%"><div align="left">
          <input type="checkbox" name="checkbox2" value="Baik" <?php echo ($keadaan_listrik=='Baik')?'checked':''; ?> />
          Baik</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%" height="22">&nbsp;</td>
        <td width="98%"><input type="checkbox" name="checkbox3" value="Terputus" <?php echo ($keadaan_listrik=='Terputus')?'checked':''; ?>>
Terputus </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%" height="22">&nbsp;</td>
        <td width="98%"><input type="checkbox" name="checkbox4" value="Tidak Tersedia" <?php echo ($keadaan_listrik=='Tidak Tersedia')?'checked':''; ?> />
Belum  tersedia/belum</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td colspan="7"><strong>I. KONDISI SANITASI       DAN KESEHATAN LINGKUNGAN DI LOKASI PENAMPUNGAN PENGUNGSI</strong></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%" border="1">
      <tr>
        <td width="5%"><div align="center">No</div></td>
        <td width="32%"><div align="center">Jenis Fasilitas </div></td>
        <td colspan="2"><div align="center">Kondisi</div></td>
        </tr>
      <tr>
        <td><div align="center">1.</div></td>
        <td>Jenis tempat penampungan </td>
        <td width="31%"><table width="100%">
          <tr>
            <td width="16%"><input type="checkbox" name="checkbox5" <?php echo ($jenis_bgn=='Bangunan Permanen')?'checked':''; ?> />
              <label for="checkbox"></label></td>
            <td width="84%">Bangunan permanen</td>
          </tr>
        </table></td>
        <td width="32%"><table width="100%">
          <tr>
            <td width="16%"><input type="checkbox" name="checkbox52526" <?php echo ($jenis_bgn=='Tidak memadai')?'checked':''; ?> />
                <label for="checkbox"></label></td>
            <td width="84%">Tidak Memadai </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><div align="center">2.</div></td>
        <td>Kapasitas penampungan pengungsi </td>
        <td><table width="100%">
          <tr>
            <td width="16%"><input type="checkbox" name="checkbox52" <?php echo ($kap_bgn=='Memadai (min.10m3/or)')?'checked':''; ?> />
                <label for="checkbox"></label></td>
            <td width="84%">Memadai (min.10m3/or)</td>
          </tr>
        </table></td>
        <td><table width="100%">
          <tr>
            <td width="16%"><input type="checkbox" name="checkbox52525" <?php echo ($kap_bgn=='Tidak memadai')?'checked':''; ?> />
                <label for="checkbox"></label></td>
            <td width="84%">Tidak Memadai </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><div align="center">3.</div></td>
        <td>Kapasitas penyediaan air bersih</td>
        <td><table width="100%">
          <tr>
            <td width="16%"><input type="checkbox" name="checkbox522" <?php echo ($kap_air=='Memadai (min.20L/or/hr)')?'checked':''; ?> />
                <label for="checkbox"></label></td>
            <td width="84%">Memadai (min.20L/or/hr)</td>
          </tr>
        </table></td>
        <td><table width="100%">
          <tr>
            <td width="16%"><input type="checkbox" name="checkbox52524" <?php echo ($kap_air=='Tidak memadai')?'checked':''; ?> />
                <label for="checkbox"></label></td>
            <td width="84%">Tidak Memadai </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><div align="center">4.</div></td>
        <td>Sarana MCK</td>
        <td><table width="100%">
          <tr>
            <td width="16%"><input type="checkbox" name="checkbox523" <?php echo ($sarana_mck=='Memadai (min.20or/1mck)')?'checked':''; ?> />
                <label for="checkbox"></label></td>
            <td width="84%">Memadai (min.20or/1mck)</td>
          </tr>
        </table></td>
        <td><table width="100%">
          <tr>
            <td width="16%"><input type="checkbox" name="checkbox52523" <?php echo ($sarana_mck=='Tidak memadai')?'checked':''; ?> />
                <label for="checkbox"></label></td>
            <td width="84%">Tidak Memadai </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><div align="center">5.</div></td>
        <td>Tempat pembuangan sampah</td>
        <td><table width="100%">
          <tr>
            <td width="16%"><input type="checkbox" name="checkbox524" <?php echo ($tmp_smp=='Memadai (min 3m3/60 or)')?'checked':''; ?> />
                <label for="checkbox"></label></td>
            <td width="84%">Memadai (min 3m3/60 or)</td>
          </tr>
        </table></td>
        <td><table width="100%">
          <tr>
            <td width="16%"><input type="checkbox" name="checkbox52522" <?php echo ($tmp_smp=='Tidak memadai')?'checked':''; ?> />
                <label for="checkbox"></label></td>
            <td width="84%">Tidak Memadai </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td><div align="center">6.</div></td>
        <td>Sarana SPAL</td>
        <td><table width="100%">
          <tr>
            <td width="16%"><input type="checkbox" name="checkbox525" <?php echo ($sarana_spal=='Memadai (min 4m dr penampungan)')?'checked':''; ?> />
                <label for="checkbox"></label></td>
            <td width="84%">Memadai (min 4m dr penampungan)</td>
          </tr>
        </table></td>
        <td><table width="100%">
          <tr>
            <td width="16%"><input type="checkbox" name="checkbox5252" <?php echo ($sarana_spal=='Tidak memadai')?'checked':''; ?> />
                <label for="checkbox"></label></td>
            <td width="84%">Tidak Memadai </td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td height="37"><div align="center">7.</div></td>
        <td>Penerangan</td>
        <td><table width="100%">
          <tr>
            <td width="16%"><input type="checkbox" name="checkbox526" <?php echo ($penerangan=='Ada')?'checked':''; ?> />
                <label for="checkbox"></label></td>
            <td width="84%">Ada</td>
          </tr>
        </table></td>
        <td><table width="100%">
          <tr>
            <td width="16%"><input type="checkbox" name="checkbox5262" <?php echo ($penerangan=='Tidak Ada')?'checked':''; ?> />
                <label for="checkbox"></label></td>
            <td width="84%">Tidak Ada</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><strong>J. KESIAPAN LOGISTIK </strong></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7">1. Obat dan Bahan Habis Pakai :    </td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%" height="22">&nbsp;</td>
        <td width="98%"><input type="checkbox" name="checkbox32" value="Terputus" <?php echo ($obat_hbs=='Tidak Ada')?'checked':''; ?> />          
          Tidak Ada </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%" height="25">&nbsp;</td>
        <td width="98%"><input type="checkbox" name="checkbox33" value="Terputus" <?php echo ($obat_hbs=='Kurang')?'checked':''; ?> />
        Kurang</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%" height="22">&nbsp;</td>
        <td width="98%"><input type="checkbox" name="checkbox34" value="Terputus" <?php echo ($obat_hbs=='cukup')?'checked':''; ?> />
        Cukup</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td colspan="7">2. Alat Kesehatan: </td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%" height="22">&nbsp;</td>
        <td width="98%"><input type="checkbox" name="checkbox322" value="Terputus" <?php echo ($alkes=='Tidak Ada')?'checked':''; ?> />          
          Tidak Ada </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%" height="25">&nbsp;</td>
        <td width="98%"><input type="checkbox" name="checkbox332" value="Terputus" <?php echo ($alkes=='Kurang')?'checked':''; ?> />
          Kurang</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%" height="22">&nbsp;</td>
        <td width="98%"><input type="checkbox" name="checkbox342" value="Terputus" <?php echo ($alkes=='cukup')?'checked':''; ?> />
          Cukup</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td colspan="7">3. Bahan Sanitasi : </td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="5%">&nbsp;</td>
        <td width="20%">a. Kaporit </td>
        <td width="1%"><input type="checkbox" name="checkbox5253" <?php echo ($kaporit=='Tidak Ada')?'checked':''; ?> /></td>
        <td width="20%"><div align="left">Tidak Ada </div></td>
        <td width="1%"><input type="checkbox" name="checkbox5254" <?php echo ($kaporit=='Kurang')?'checked':''; ?> /></td>
        <td width="20%"><div align="left">Kurang</div></td>
        <td width="1%"><input type="checkbox" name="checkbox52542" <?php echo ($kaporit=='cukup')?'checked':''; ?> /></td>
        <td width="20%"><div align="left">Cukup</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="5%">&nbsp;</td>
        <td width="20%">b. PCA </td>
        <td width="1%"><input type="checkbox" name="checkbox52532" <?php echo ($kaporit=='Tidak Ada')?'checked':''; ?> /></td>
        <td width="20%"><div align="left">Tidak Ada </div></td>
        <td width="1%"><input type="checkbox" name="checkbox52543" <?php echo ($kaporit=='Kurang')?'checked':''; ?> /></td>
        <td width="20%"><div align="left">Kurang</div></td>
        <td width="1%"><input type="checkbox" name="checkbox525422" <?php echo ($kaporit=='cukup')?'checked':''; ?> /></td>
        <td width="20%"><div align="left">Cukup</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="5%">&nbsp;</td>
        <td width="20%">c. Aquatab </td>
        <td width="1%"><input type="checkbox" name="checkbox52533" <?php echo ($kaporit=='Tidak Ada')?'checked':''; ?> /></td>
        <td width="20%"><div align="left">Tidak Ada </div></td>
        <td width="1%"><input type="checkbox" name="checkbox52544" <?php echo ($kaporit=='Kurang')?'checked':''; ?> /></td>
        <td width="20%"><div align="left">Kurang</div></td>
        <td width="1%"><input type="checkbox" name="checkbox525423" <?php echo ($kaporit=='cukup')?'checked':''; ?> /></td>
        <td width="20%"><div align="left">Cukup</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="5%">&nbsp;</td>
        <td width="20%">d. Kantong Sampah </td>
        <td width="1%"><input type="checkbox" name="checkbox52534" <?php echo ($kaporit=='Tidak Ada')?'checked':''; ?> /></td>
        <td width="20%"><div align="left">Tidak Ada </div></td>
        <td width="1%"><input type="checkbox" name="checkbox52545" <?php echo ($kaporit=='Kurang')?'checked':''; ?> /></td>
        <td width="20%"><div align="left">Kurang</div></td>
        <td width="1%"><input type="checkbox" name="checkbox525424" <?php echo ($kaporit=='cukup')?'checked':''; ?> /></td>
        <td width="20%"><div align="left">Cukup</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="5%">&nbsp;</td>
        <td width="20%">e. Repellent lalatt </td>
        <td width="1%"><input type="checkbox" name="checkbox52535" <?php echo ($kaporit=='Tidak Ada')?'checked':''; ?> /></td>
        <td width="20%"><div align="left">Tidak Ada </div></td>
        <td width="1%"><input type="checkbox" name="checkbox52546" <?php echo ($kaporit=='Kurang')?'checked':''; ?> /></td>
        <td width="20%"><div align="left">Kurang</div></td>
        <td width="1%"><input type="checkbox" name="checkbox525425" <?php echo ($kaporit=='cukup')?'checked':''; ?> /></td>
        <td width="20%"><div align="left">Cukup</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7">4. Kesediaan Pangan : </td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%" height="22">&nbsp;</td>
        <td width="98%"><input type="checkbox" name="checkbox3222" value="Tidak Ada" <?php echo ($ketersediaan_pangan=='Tidak Ada')?'checked':''; ?> />
          Tidak Ada </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%" height="22">&nbsp;</td>
        <td width="98%"><input type="checkbox" name="checkbox3223" value="Kurang" <?php echo ($ketersediaan_pangan=='Kurang')?'checked':''; ?> />
          Kurang </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="2%" height="22">&nbsp;</td>
        <td width="98%"><input type="checkbox" name="checkbox3224" value="Cukup" <?php echo ($alkes=='Cukup')?'checked':''; ?> />
          Cukup </td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7">&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><strong>K. SARANA  PENDUKUNG PELAYANAN KESEHATAN</strong></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7">1. Transportasi  operasional pelayanan kesehatan</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="1%">&nbsp;</td>
        <td width="1%"><input type="checkbox" name="checkbox525342" <?php echo ($transfort_pelayanan=='Tidak Ada')?'checked':''; ?> /></td>
        <td width="2%"><div align="left">Tidak Ada </div></td>
        <td width="1%"><input type="checkbox" name="checkbox525452" <?php echo ($transfort_pelayanan=='Kurang')?'checked':''; ?> /></td>
        <td width="2%"><div align="left">Kurang</div></td>
        <td width="1%"><input type="checkbox" name="checkbox5254242" <?php echo ($transfort_pelayanan=='cukup')?'checked':''; ?> /></td>
        <td width="10%"><div align="left">Cukup</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7">2.   Alat Komunikasi</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="1%">&nbsp;</td>
        <td width="1%"><input type="checkbox" name="checkbox5253422" <?php echo ($alat_komunikasi=='Tidak Ada')?'checked':''; ?> /></td>
        <td width="2%"><div align="left">Tidak Ada </div></td>
        <td width="1%"><input type="checkbox" name="checkbox5254522" <?php echo ($alat_komunikasi=='Kurang')?'checked':''; ?> /></td>
        <td width="2%"><div align="left">Kurang</div></td>
        <td width="1%"><input type="checkbox" name="checkbox52542422" <?php echo ($alat_komunikasi=='cukup')?'checked':''; ?> /></td>
        <td width="10%"><div align="left">Cukup</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7">2. Sarana Listrrik untuk pelayanan kesehatan   </td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><table width="100%">
      <tr>
        <td width="1%">&nbsp;</td>
        <td width="1%"><input type="checkbox" name="checkbox52534222" <?php echo ($sarana_listrik=='Tidak Ada')?'checked':''; ?> /></td>
        <td width="2%"><div align="left">Tidak Ada </div></td>
        <td width="1%"><input type="checkbox" name="checkbox52545222" <?php echo ($sarana_listrik=='Kurang')?'checked':''; ?> /></td>
        <td width="2%"><div align="left">Kurang</div></td>
        <td width="1%"><input type="checkbox" name="checkbox525424222" <?php echo ($sarana_listrik=='cukup')?'checked':''; ?> /></td>
        <td width="10%"><div align="left">Cukup</div></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><strong>L. </strong><strong>UPAYA       PENANGGULANGAN YANG TELAH DILAKUKAN </strong> </td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
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
    <td colspan="7"><?php echo $no.". ".$upaya_dilakukan_1; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><?php echo $no1.". ".$upaya_dilakukan_2; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><?php echo $no2.". ".$upaya_dilakukan_3; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><?php echo $no3.". ".$upaya_dilakukan_4; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><strong>M. </strong><strong>BANTUAN YANG       DIPERLUKAN</strong> </td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><?php echo $no4.". ".$bantuan1; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><?php echo $no5.". ".$bantuan2; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><?php echo $no6.". ".$bantuan3; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><?php echo $no7.". ".$bantuan4; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><?php echo $no8.". ".$bantuan5; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><strong>N. RENCANA TINDAK       LANJUT</strong> </td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><?php echo $no9.". ".$rencana1; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><?php echo $no10.". ".$rencana2; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><?php echo $no11.". ".$rencana3; ?></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><?php echo $no12.". ".$rencana4; ?></td>
  </tr>
  
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7"><?php echo $no13.". ".$rencana5; ?></td>
  </tr>
  
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="2"><div align="center"><strong>Tangerang</strong>,<strong> </strong><strong><?php echo tgl_indo(date('Y-m-d')); ?></strong></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center"><strong>Mengetahui</strong></div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="2"><div align="center"><strong>Pelapor</strong></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center"><strong>Kepala Dinas Kesehatan</strong> </div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="2"><div align="center"><strong><u><?php echo $nama_pelapor; ?></u></strong></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center"><strong><u><?php echo $kepala_dinas; ?></u></strong></div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="2"><div align="center"><strong>NIP. <?php echo $nip; ?></strong></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center"><strong>NIP. <?php echo $nip1; ?></strong></div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td height="23" colspan="8"><div align="center">
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
    <td colspan="8"><div align="center">
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