<?php
session_start();
require_once '../config/koneksi.php';
include_once '../config/fungsi_indotgl.php';
require_once '../ben/class.ben.php'; 
$ben = new ben($pdo);
if(isset($_GET['b1_id']))
    {
      $id = $_GET['b1_id'];
      extract($ben->getID($id));  
    }
	 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print Detail B1</title>
<link rel="icon" type="image/jpg" href="../assets/images/logo_warna.jpg" />
<link href="../print.css" rel="stylesheet" type="text/css" media="print" />
<link rel="stylesheet" href="../assets/css/bootstrap.min.css" /></head>
<body>
<table width="90%" height="1737" border="0" align="center">
  <tr>
    <td height="21" colspan="5"><strong><?php echo $alamat_posko; ?></strong>
      <div align="right"></div></td><td width="11%">&nbsp;</td>
    <td colspan="2"><div align="right"><strong>FORM B 1</strong></div></td>
  </tr>
  
  <tr>
    <td height="21" colspan="8" valign="bottom"><div align="center"><strong>PENGELOLAAN DATA DAN INFORMASI PENANGGULANGAN KRISIS  KESEHATAN<br />AKIBAT BENCANA </strong></div></td>
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
    <td colspan="4"><div align="left"><strong>JUMLAH KORBAN </strong></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
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
    <td><div align="left">Jml  Penduduk Terancam</div></td>
    <td><div align="left">:</div></td>
    <td colspan="4"><table width="100%">
      <tr>
        <td width="17%" height="21"><div align="center"><?php echo $jumlah_penduduk_terancam; ?></div></td>
        <td width="22%">Jiwa</td>
        <td width="20%"><div align="center"><?php echo $jumlah_kk_1; ?></div></td>
        <td width="41%">KK</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td><div align="left">6.</div></td>
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
    <td><div align="left">7.</div></td>
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
    <td height="21">&nbsp;</td>
    <td colspan="4">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="21"><div align="center"><strong>F.</strong></div></td>
    <td colspan="4"><div align="left"><strong>FASILITAS UMUM</strong></div></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td><div align="left">1.</div></td>
    <td colspan="6"><div align="left">Akses  ke lokasi kejadian bencana : </div>      <div align="center"></div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6"><div align="left">
        <input type="checkbox" name="checkbox" value="checkbox" checked="checked" />
        <?php echo $akses_kelokasi; ?></div></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td><div align="left">2.</div></td>
    <td colspan="6"><div align="left">Jalur  komunikasi yang masih dapat digunakan :</div></td>
  </tr>
  <tr>
    <td height="21">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6"><div align="left"><?php echo $jalur_komunikasi; ?></div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td><div align="left">3.</div></td>
    <td colspan="6"><div align="left">Keadaan  jaringan listrik : </div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6"><div align="left">
      <input type="checkbox" name="checkbox2" value="Baik" <?php echo ($keadaan_listrik=='Baik')?'checked':''; ?> />
      Baik
    </div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6"><div align="left">
      <input type="checkbox" name="checkbox3" value="Terputus" <?php echo ($keadaan_listrik=='Terputus')?'checked':''; ?>  />
      Terputus
    </div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6"><div align="left">
      <input type="checkbox" name="checkbox4" value="Tidak Tersedia" <?php echo ($keadaan_listrik=='Tidak Tersedia')?'checked':''; ?> />
      Belum Tersedia 
    / Belum </div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7">&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7">&nbsp;</td>
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
        <td><div align="center"><?php if($rs=="Rusak"){ echo "<input type='checkbox' checked='checked' />"; }else{ echo "";} ?></div></td>
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
    <td>&nbsp;</td>
    <td colspan="6"><div align="left">
      <input type="checkbox" value="Cukup" <?php echo ($sumber_air=='Cukup')?'checked':''; ?> />
      Cukup
    </div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="6"><div align="left">
      <input type="checkbox" value="Tidak Cukup" <?php echo ($sumber_air=='Tidak Cukup')?'checked':''; ?> />
      Tidak Cukup 
    </div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7">&nbsp;</td>
  </tr>
  <tr>
    <td height="23"><div align="center"><strong>H.</strong></div></td>
    <td colspan="7"><div align="left"><strong>UPAYA PENANGGULANGAN YANG TELAH DILAKUKAN</strong><strong> </strong></div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td><div align="left">1.</div></td>
    <td colspan="6"><div align="left"><?php echo $upaya_dilakukan_1; ?></div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td><div align="left">2.</div></td>
    <td colspan="6"><div align="left"><?php echo $upaya_dilakukan_2; ?></div></td>
  </tr>
  <tr>
    <td height="22">&nbsp;</td>
    <td><div align="left">3.</div></td>
    <td colspan="6"><div align="left"><?php echo $upaya_dilakukan_3; ?></div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td><div align="left">4.</div></td>
    <td colspan="6"><div align="left"><?php echo $upaya_dilakukan_4; ?></div></td>
  </tr>
  
  <tr>
    <td height="23" colspan="8"><div align="left"><strong> LAIN - LAIN </strong></div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td colspan="7">&nbsp;</td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center"><strong>Tangerang</strong>,<strong> </strong><strong><?php echo tgl_indo($created_at); ?></strong></div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center"><strong>Pelapor</strong></div></td>
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
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center"><strong><u><?php echo $nama_pelapor; ?></u></strong></div></td>
  </tr>
  <tr>
    <td height="23">&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td colspan="3"><div align="center"><strong>NIP. <?php echo $nip; ?></strong></div></td>
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
              <?php $foto = '../ben/img_ben/'.$file_name1; ?>
              <img src="<?php  echo $foto; ?>"/></div>
          </div></td>
          <td><div align="center">
            <div align="center">
              <?php $foto2 = '../ben/img_ben/'.$file_name2; ?>
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
                <?php $foto3 = '../ben/img_ben/'.$file_name3; ?>
                <img src="<?php  echo $foto3; ?>"/></div>
          </div></td>
          <td><div align="center">
              <div align="center">
                <?php $foto4 = '../ben/img_ben/'.$file_name4; ?>
                <img src="<?php  echo $foto4; ?>" /></div>
          </div></td>
        </tr>
      </table>
    </div></td>
  </tr>
</table>
</body>
</html>