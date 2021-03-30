<?php 
	session_start();
	include_once '../../config/koneksi.php';
	require_once 'class.posko.php';
	$posko = new posko($pdo);
	if(!empty($_POST['id_posko'])){
		$id_posko		= $_POST['id_posko'];
		$alamat_posko	= $_POST['alamat_posko'];
		$keterangan 	= $_POST['keterangan'];
		$aktif			= $_POST['aktif'];
		$update_by		= $_SESSION['s_user'];
		if($posko->update($id_posko,$alamat_posko,$keterangan,$aktif,$update_by)){
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
		<legend>Edit Posko</legend>
		<span>
		<?php
		if(isset($sg) and $sg=='ok'){
			echo "
			<div class='alert $alert'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			$msg1
			</div>";
        	?>
        <div class="form-actions">
			<div class="controls">
				<button type="button" id="close" class="btn btn-primary" >Tutup</button>
			</div>
		</div>
		<?php }elseif(isset($sg) and $sg=='err')
		{
			echo "
			<div class='alert $alert'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			$msg2
			</div>"; 
		}
		else
		{
		if(isset($_GET['id_posko']))
		{
			$id = $_GET['id_posko'];
			extract($posko->getID($id));	
		} 
		?>
		</span>
		<div class="row-fluid">
			<div class="span9">
				<div class="control-group">
				<label class="control-label" for="id_posko" >ID posko</label>
					<div class="controls">
					<input type="text" id="id_posko" name="id_posko" value="<?php echo $id_posko; ?>" readonly="readonly">
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="alamat_posko" >Posko Kesehatan</label>
					<div class="controls">
					<textarea class="span12" id="alamat_posko" name="alamat_posko" value="<?php echo $alamat_posko; ?>" required><?php echo $alamat_posko; ?></textarea>
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="keterangan" >Keterangan</label>
					<div class="controls">
					<textarea class="span12" id="keterangan" name="keterangan" value="<?php echo $keterangan; ?>" ><?php echo $keterangan; ?></textarea>
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
		<div class="form-actions">
			<div class="span6">
				<div class="controls-group">
				<button type="submit" class="btn btn-primary">Edit</button>
				<button type="button" id="close" class="btn btn-primary" >Tutup</button>
				</div>
			</div>
			<div class="span6">
			<div class="control-group">
				<label class="control">Data Input :<?php echo "$created_by"; echo " - "; echo "$created_at"; ?> </label>
				<label class="control">Data Update :<?php echo "$update_by"; echo " - "; echo "$update_at"; ?> </label>
			</div>
		</div>
		<?php 
		}
		?>		
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