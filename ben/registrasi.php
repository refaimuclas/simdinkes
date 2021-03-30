<?php 
	session_start();
	include_once '../config/koneksi.php';
	require_once 'class.reg.php';
	$reg = new reg($pdo);
	if(isset($_GET['mr']))
		{
			$id = $_GET['mr'];
			extract($reg->getID($id));	
		} 
	if(!empty($_POST['mr'])){
		$mr				= $_POST['mr'];
		$poli 			= $_POST['poli'];
		$tgl_reg 		= tgl_sql($_POST['tgl_reg']);
		$penjamin		= $_POST['penjamin'];
		$diagnosa		= $_POST['diagnosa'];
		$update_by		= $_SESSION['s_user'];
		if($reg->createreg($mr,$poli,$tgl_reg,$penjamin,$diagnosa,$update_by)){
			$sg   = "ok";
			$msg1 = "Data Berhasil Di Update";
			$alert='alert-success';
		}else{
			$g = "err";
			$msg2 = "Data Gagal Di Update";
			$alert='alert-error';
		}
	}
?>

<form id="forms" method="post" onSubmit="return submitForm('<?php echo $_SERVER['PHP_SELF']; ?>')" class="form-horizontal">
	<fieldset>
		<div class="modal-header">
        <button type="button" class="close" id="close1" data-dismiss="modal">&times;</button>
        <h4 class="blue bigger">Registrasi</h4>
     	</div>
		<span>
		 <?php
		if(isset($sg) and $sg=='ok'){
			echo "
			<div class='alert $alert'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			$msg1
			</div>";
		}elseif(isset($sg) and $sg=='err'){
			echo "
			<div class='alert $alert'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			$msg2
			</div>";}
		?>
		</span>
		 <div class="modal-content">
			<div class="span9">
				<div class="control-group">
				<label class="control-label" for="id_reg" >ID reg</label>
					<div class="controls">
					<input type="text" id="id_reg" name="id_reg" value="<?php echo $id_reg; ?>" readonly="readonly">
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="nama_reg" >Nama</label>
					<div class="controls">
					<input type="text" id="nama_reg" name="nama_reg" value="<?php echo $nama_reg; ?>">
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="alamat_reg" >Alamat</label>
					<div class="controls">
					<textarea class="span12" id="alamat_reg" name="alamat_reg" value="<?php echo $alamat_reg; ?>" ><?php echo $alamat_reg; ?></textarea>
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="telp_reg" >Telp</label>
					<div class="controls">
					<input type="text" id="telp_reg" name="telp_reg" value="<?php echo $telp_reg; ?>">
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="bidang_keahlian" >Bidang Keahlian</label>
					<div class="controls">
					<input type="text" id="bidang_keahlian" name="bidang_keahlian" required value="<?php echo $bidang_keahlian; ?>">
					</div>
				</div>				
				<div class="control-group">
					<label class="control-label">Aktif</label>
					<div class="controls">
						<label>
							<input name="aktif" type="radio" value="Y" <?php echo ($aktif=='Y')?'checked':''; ?> />
							<span class="lbl"> Y</span>
						</label>
						<label>
							<input name="aktif" type="radio" value="N" <?php echo ($aktif=='N')?'checked':''; ?> />
							<span class="lbl"> N</span>
						</label>
					</div>
				</div>
			</div>							
		</div>
		<div class="modal-footer">
	      <button type="submit" class="btn btn-primary" ><i class="icon-plus icon-white"></i>Tambah</button>
	      <?php echo "
	        <a href='javascript:void(0)' onclick='modal($id)' class='btn btn-primary' ><i class='icon-close icon-white'></i>Tutup</a> "; ?>
	    </div>	
	</fieldset>
</form>
<script type="text/javascript">
	$(document).ready(function(){
		$("#close").click(function(){
			$("#form-nest").hide("slow");
		});
		$(".chzn-select").chosen();
	});	
</script>