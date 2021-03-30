<?php
session_start();
require_once '../config/koneksi.php';
include_once '../config/fungsi_sqltgl.php';
require_once 'class.ben.php';
$ben = new ben($pdo);
#echo "FILES =".json_encode($_FILES)."<br><br>";
#echo "FILES =".json_encode($_POST)."<br><br>";
if(!empty($_POST['deskripsi_bencana'])){
	$b1_id 						= $_POST['b1_id'];
	$deskripsi_bencana 			= $_POST['deskripsi_bencana'];
	$lokasi_bencana 			= $_POST['lokasi_bencana'];
	$propinsi 		 			= $_POST['propinsi'];
	$kabupaten 		 			= $_POST['kabupaten'];
	$kecamatan 		 			= $_POST['kecamatan'];
	$kelurahan 		 			= $_POST['kelurahan'];
	$letak_geografi 			= $_POST['letak_geografi'];
	$hari 						= $_POST['hari'];
	$tgl 						= tgl_sql($_POST['tgl']);
	$jam 		 				= $_POST['jam'];
	$jumlah_meninggal 			= $_POST['jumlah_meninggal'];	
	$jumlah_hilang 		 		= $_POST['jumlah_hilang'];
	$jumlah_luka_berat 			= $_POST['jumlah_luka_berat'];
	$jumlah_luka_ringan 		= $_POST['jumlah_luka_ringan'];
	$jumlah_penduduk_terancam 	= $_POST['jumlah_penduduk_terancam'];
	$jumlah_pengungsi 		 	= $_POST['jumlah_pengungsi'];	
	$lokasi_pengungsian_1 		= $_POST['lokasi_pengungsian_1'];
	$lokasi_pengungsian_2 		= $_POST['lokasi_pengungsian_2'];
	$lokasi_pengungsian_3 		= $_POST['lokasi_pengungsian_3'];
	$akses_kelokasi 			= $_POST['akses_kelokasi'];
	$jalur_komunikasi 			= $_POST['jalur_komunikasi'];
	$keadaan_listrik 			= $_POST['keadaan_listrik'];
	$rs 						= $_POST['rs'];
	$puskesmas 					= $_POST['puskesmas'];
	$pustu 						= $_POST['pustu'];
	$gudang_farmasi 			= $_POST['gudang_farmasi'];
	$polindes 					= $_POST['polindes'];
	$rs1 						= $_POST['rs1'];
	$puskesmas1 				= $_POST['puskesmas1'];
	$pustu1 					= $_POST['pustu1'];
	$gudang_farmasi1 			= $_POST['gudang_farmasi1'];
	$polindes1 					= $_POST['polindes1'];
	$sumber_air 				= $_POST['sumber_air'];
	$upaya_dilakukan_1 			= $_POST['upaya_dilakukan_1'];
	$upaya_dilakukan_2 			= $_POST['upaya_dilakukan_2'];
	$upaya_dilakukan_3 			= $_POST['upaya_dilakukan_3'];
	$upaya_dilakukan_4 			= $_POST['upaya_dilakukan_4'];
	$nama_pelapor 				= $_POST['nama_pelapor'];
	$nip 			 			= $_POST['nip'];
	$jumlah_kk_1 	 			= $_POST['jumlah_kk_1'];		
	$jumlah_kk_2 	 			= $_POST['jumlah_kk_2'];
	$id_posko 		 			= $_SESSION['id_posko'];		
	$update_by 	 	 			= $_SESSION['s_user'];
	$puskesmas5	 				= $_POST['puskesmas5'];
	$jumlah_pusling	 			= $_POST['jumlah_pusling'];

	if ($_FILES['file1']['name'] == ""){
		$file_name1 	= $_POST['file1'];
	}else{
		$file_name1      			= basename($_FILES["file1"]["name"]);
	    $size_file1      			= $_FILES['file1']['size'];
	    $type_file1      			= $_FILES['file1']['type'];
	    $uploaddir1 				= '../bencana/img_bencana/';
	    $alamatfile1 		 		= $uploaddir1 . $file_name1 ;
	    move_uploaded_file($_FILES['file1']['tmp_name'], $alamatfile1);
	}

	if ($_FILES['file2']['name'] == ""){
		$file_name2 	= $_POST['file2'];
	}else{
	    $file_name2      			= basename($_FILES["file2"]["name"]);
	    $size_file2      			= $_FILES['file2']['size'];
	    $type_file2      			= $_FILES['file2']['type'];
	    $uploaddir2 				= '../bencana/img_bencana/';
	    $alamatfile2 		 		= $uploaddir2 . $file_name2 ;
	    move_uploaded_file($_FILES['file2']['tmp_name'], $alamatfile2);
	}

	if ($_FILES['file3']['name'] == ""){
		$file_name3 	= $_POST['file3'];
	}else{
	    $file_name3      			= basename($_FILES["file3"]["name"]);
	    $size_file3      			= $_FILES['file3']['size'];
	    $type_file3      			= $_FILES['file3']['type'];
	    $uploaddir3 				= '../bencana/img_bencana/';
	    $alamatfile3 		 		= $uploaddir3 . $file_name3 ;
	    move_uploaded_file($_FILES['file3']['tmp_name'], $alamatfile3);
	}


	if ($_FILES['file4']['name'] == ""){
		$file_name4 	= $_POST['file4'];
	}else{	
	    $file_name4      			= basename($_FILES["file4"]["name"]);
	    $size_file4      			= $_FILES['file4']['size'];
	    $type_file4      			= $_FILES['file4']['type'];
	    $uploaddir4 				= '../bencana/img_bencana/';
	    $alamatfile4 		 		= $uploaddir4 . $file_name4 ;
	    move_uploaded_file($_FILES['file4']['tmp_name'], $alamatfile4);
	}
    

	if($ben->update($b1_id,$deskripsi_bencana,$lokasi_bencana,$propinsi,$kabupaten,$kecamatan,$kelurahan,$letak_geografi,$hari,$tgl,$jam,$jumlah_meninggal,$jumlah_hilang,$jumlah_luka_berat,$jumlah_luka_ringan,$jumlah_penduduk_terancam,$jumlah_pengungsi,$lokasi_pengungsian_1,$lokasi_pengungsian_2,$lokasi_pengungsian_3,$akses_kelokasi,$jalur_komunikasi,$keadaan_listrik,$rs,$puskesmas,$pustu,$gudang_farmasi,$polindes,$rs1,$puskesmas1,$pustu1,$gudang_farmasi1,$polindes1,$sumber_air,$upaya_dilakukan_1,$upaya_dilakukan_2,$upaya_dilakukan_3,$upaya_dilakukan_4,$nama_pelapor,$nip,$jumlah_kk_1,$jumlah_kk_2,$file_name1,$file_name2,$file_name3,$file_name4,$id_posko,$update_by,$puskesmas5,$jumlah_pusling)){		
		$sg   = "ok";
		$msg1 = "Data telah di Edit";
		$alert='alert-success';
	}else{
		$g = "err";
		$msg2 = "Data gagal di edit";
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