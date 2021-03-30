<?php
session_start();
require_once '../config/koneksi.php';
include_once '../config/fungsi_sqltgl.php';
require_once 'class.ben.php';
$ben = new ben($pdo);
#echo "FILES =".json_encode($_FILES)."<br><br>";
if(!empty($_POST['b1_id'])){
	$b1_id 			 			= $_POST['b1_id'];
	$bayi 			 			= $_POST['bayi'];
	$balita			 			= $_POST['balita'];
	$ibu_hamil 		 			= $_POST['ibu_hamil'];
	$ibu_menyusui	 			= $_POST['ibu_menyusui'];
	$lansia 		 			= $_POST['lansia'];
	$rujuk1 		 			= $_POST['rujuk1'];
	$rujuk2 		 			= $_POST['rujuk2'];
	$rujuk3 		 			= $_POST['rujuk3'];
	$rujuk4 		 			= $_POST['rujuk4'];
	$rujuk5 		 			= $_POST['rujuk5'];
	$jml_rujuk1 		 		= $_POST['jml_rujuk1'];
	$jml_rujuk2 		 		= $_POST['jml_rujuk2'];
	$jml_rujuk3 		 		= $_POST['jml_rujuk3'];
	$jml_rujuk4 		 		= $_POST['jml_rujuk4'];
	$jml_rujuk5 		 		= $_POST['jml_rujuk5'];
	$sumur_gali 		 		= $_POST['sumur_gali'];
	$spt 		 				= $_POST['spt'];
	$pma 		 				= $_POST['pma'];
	$pah 		 				= $_POST['pah'];
	$perpipaan 		 			= $_POST['perpipaan'];
	$dll1 		 				= $_POST['dll1'];
	$dll2 		 				= $_POST['dll2'];
	$jml_dll1 		 			= $_POST['jml_dll1'];
	$jml_dll2 		 			= $_POST['jml_dll2'];
	$jamban_keluarga 			= $_POST['jamban_keluarga'];
	$mck 		 				= $_POST['mck'];
	$dll3 		 				= $_POST['dll3'];
	$jml_dll3 		 			= $_POST['jml_dll3'];
	$jenis_bgn 		 			= $_POST['jenis_bgn'];
	$kap_bgn 		 			= $_POST['kap_bgn'];
	$kap_air 		 			= $_POST['kap_air'];
	$sarana_mck 		 		= $_POST['sarana_mck'];
	$tmp_smp 		 			= $_POST['tmp_smp'];
	$sarana_spal 		 		= $_POST['sarana_spal'];
	$penerangan 		 		= $_POST['penerangan'];
	$obat_hbs 		 			= $_POST['obat_hbs'];
	$alkes 		 				= $_POST['alkes'];
	$kaporit 		 			= $_POST['kaporit'];
	$pac 		 				= $_POST['pac'];
	$aquatab 		 			= $_POST['aquatab'];		
	$kantong_sampah 		 	= $_POST['kantong_sampah'];	
	$ketersediaan_pangan 		= $_POST['ketersediaan_pangan'];	
	$repellent_lalat 		 	= $_POST['repellent_lalat'];
	$transfort_pelayanan	 	= $_POST['transfort_pelayanan'];
	$alat_komunikasi 		 	= $_POST['alat_komunikasi'];
	$sarana_listrik 		 	= $_POST['sarana_listrik'];
	$bantuan1 		 		 	= $_POST['bantuan1'];
	$bantuan2 		 		 	= $_POST['bantuan2']; 
	$bantuan3 		 		 	= $_POST['bantuan3'];
	$bantuan4 		 		 	= $_POST['bantuan4'];
	$bantuan5 		 		 	= $_POST['bantuan5'];
	$rencana1 		 		 	= $_POST['rencana1'];
	$rencana2 		 		 	= $_POST['rencana2'];
	$rencana3 		 		 	= $_POST['rencana3'];
	$rencana4 		 		 	= $_POST['rencana4'];
	$rencana5 		 		 	= $_POST['rencana5'];
	$kepala_dinas	 		 	= $_POST['kepala_dinas'];
	$nip1	 		 			= $_POST['nip1'];
	$ketinggian_air	 		 	= $_POST['ketinggian_air'];

	$file_name1      			= basename($_FILES["file1"]["name"]);
    $size_file1      			= $_FILES['file1']['size'];
    $type_file1      			= $_FILES['file1']['type'];
    $uploaddir1 				= '../ben/img_ben/';
    $alamatfile1 		 		= $uploaddir1 . $file_name1 ;
    move_uploaded_file($_FILES['file1']['tmp_name'], $alamatfile1);

    $file_name2      			= basename($_FILES["file2"]["name"]);
    $size_file2      			= $_FILES['file2']['size'];
    $type_file2      			= $_FILES['file2']['type'];
    $uploaddir2 				= '../ben/img_ben/';
    $alamatfile2 		 		= $uploaddir2 . $file_name2 ;
    move_uploaded_file($_FILES['file2']['tmp_name'], $alamatfile2);

    $file_name3      			= basename($_FILES["file3"]["name"]);
    $size_file3      			= $_FILES['file3']['size'];
    $type_file3      			= $_FILES['file3']['type'];
    $uploaddir3 				= '../ben/img_ben/';
    $alamatfile3 		 		= $uploaddir3 . $file_name3 ;
    move_uploaded_file($_FILES['file3']['tmp_name'], $alamatfile3);

    $file_name4      			= basename($_FILES["file4"]["name"]);
    $size_file4      			= $_FILES['file4']['size'];
    $type_file4      			= $_FILES['file4']['type'];
    $uploaddir4 				= '../ben/img_ben/';
    $alamatfile4 		 		= $uploaddir4 . $file_name4 ;
    move_uploaded_file($_FILES['file4']['tmp_name'], $alamatfile4);

	if($ben->createB2($b1_id,$bayi,$balita,$ibu_hamil,$ibu_menyusui,$lansia,$rujuk1,$rujuk2,$rujuk3,$rujuk4,$rujuk5,$jml_rujuk1,$jml_rujuk2,$jml_rujuk3,$jml_rujuk4,$jml_rujuk5,$sumur_gali,$spt,$pma,$pah,$perpipaan,$dll1,$dll2,$jml_dll1,$jml_dll2,$jamban_keluarga,$mck,$jml_dll3,$dll3,$jenis_bgn,$kap_bgn,$kap_air,$sarana_mck,$tmp_smp,$sarana_spal,$penerangan,$obat_hbs,$alkes,$kaporit,$pac,$aquatab,$kantong_sampah,$ketersediaan_pangan,$repellent_lalat,$transfort_pelayanan,$alat_komunikasi,$sarana_listrik,$bantuan1,$bantuan2,$bantuan3,$bantuan4,$bantuan5,$rencana1,$rencana2,$rencana3,$rencana4,$rencana5,$kepala_dinas,$nip1,$ketinggian_air,$file_name1,$file_name2,$file_name3,$file_name4)){
		$sg   = "ok";
		$msg1 = "Data telah ditambahkan";
		$alert='alert-success';
	}else{
		$g = "err";
		$msg2 = "Data tidak bisa dimasukan";
		$alert='alert-error';
	}
	if(isset($sg) and $sg=='ok'){
		echo "
		<div id='alert' class='alert $alert'>
		<button type='button' class='close' data-dismiss='alert'>&times;</button>
		$msg1
		</div>";
	}elseif(isset($sg) and $sg=='err'){
		echo "
		<div id='alert' class='alert $alert'>
		<button type='button' class='close' data-dismiss='alert'>&times;</button>
		$msg2
		</div>";}
}
?>