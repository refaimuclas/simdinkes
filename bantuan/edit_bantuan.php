<?php 
	session_start();
	include_once '../config/koneksi.php';
	require_once 'class.bantuan.php';
	$bantuan = new bantuan($pdo);
	if(!empty($_POST['id_bantuan'])){
		$id_bantuan		= $_POST['id_bantuan'];
		$deskripsi 		= $_POST['deskripsi'];
		$qty 			= $_POST['qty'];
		$satuan 		= $_POST['satuan'];
		$keterangan 	= $_POST['keterangan'];
		$id_posko 		= $_POST['id_posko'];
		$update_by		= $_SESSION['s_user'];
		if($bantuan->update($id_bantuan,$deskripsi,$qty,$satuan,$keterangan,$id_posko,$update_by)){
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
		<legend>Edit Bantuan</legend>
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
		if(isset($_GET['id_bantuan']))
		{
			$id = $_GET['id_bantuan'];
			extract($bantuan->getID($id));	
		} 
		?>
		</span>
		<div class="row-fluid">
			<div class="span9">
				<input type="hidden" id="id_bantuan" name="id_bantuan" value="<?php echo $id_bantuan; ?>" readonly="readonly">
		
				<div class="control-group">
				<label class="control-label" for="deskripsi" >Deskripsi</label>
					<div class="controls">
					<textarea class="span12" id="deskripsi" name="deskripsi" value="<?php echo $deskripsi; ?>" required><?php echo $deskripsi; ?></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="qty" >Qty</label >
					<div class="controls">
						<input type="text" class="span5" id="qty" value="<?php echo $qty; ?>" name="qty"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="satuan" >Satuan</label >
					<div class="controls">
						<input type="text" id="satuan" name="satuan" value="<?php echo $satuan; ?>"/>
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="keterangan" >Keterangan</label>
					<div class="controls">
					<textarea class="span12" id="keterangan" name="keterangan" value="<?php echo $keterangan; ?>"><?php echo $keterangan; ?></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="id_posko" >Posko</label>
					<div class="controls">
					<select name="id_posko" id="id_posko" readonly="readonly">						
						<?php						
							$c = $_SESSION['id_posko'];
							$query = "SELECT * FROM posko where id_posko='$c' ";		
							$bantuan->posko($query);
						?>
					</select>
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