<?php
session_start();
require_once '../../config/koneksi.php';
require_once 'class.user.php';
$user = new user($pdo);
#echo "FILES =".json_encode($_FILES)."<br><br>";
if(!empty($_POST['username'])){
	$password 		= md5($_POST['password']);
	$username 		= $_POST['username'];
	$nama_lengkap 	= $_POST['nama_lengkap'];
	$email 			= $_POST['email'];
	$no_telp		= $_POST['no_telp'];
	$level 			= $_POST['level'];
	$id_posko		= $_POST['id_posko'];
	$aktif			= "Y";
	$created_by		= $_SESSION['s_user'];
	$file_name      = basename($_FILES["file"]["name"]);
    $size_file      = $_FILES['file']['size'];
    $type_file      = $_FILES['file']['type'];
    $uploaddir 		= '../user/img_user/';
    $alamatfile 	= $uploaddir . $file_name ;
    move_uploaded_file($_FILES['file']['tmp_name'], $alamatfile);	
	if($user->create($username,$password,$nama_lengkap,$email,$no_telp,$level,$aktif,$file_name,$id_posko,$created_by)){
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