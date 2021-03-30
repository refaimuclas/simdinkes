<?php
session_start();
require_once '../config/koneksi.php';
require_once 'class.bantuan.php';
require_once '../config/fungsi_sqltgl.php';
$bantuan = new bantuan($pdo);
if(!empty($_POST['deskripsi'])){
	$deskripsi 		= $_POST['deskripsi'];
	$qty 			= $_POST['qty'];
	$satuan 		= $_POST['satuan'];
	$keterangan 	= $_POST['keterangan'];
	$id_posko 		= $_POST['id_posko'];
	$created_by 	= $_SESSION['s_user'];
	if($bantuan->create($deskripsi,$qty,$satuan,$keterangan,$id_posko,$created_by)){
		$sg   = "ok";
		$msg1 = "Data telah ditambahkan";
		$alert='alert-success';
	}else{
		$g = "err";
		$msg2 = "Data tidak bisa dimasukan";
		$alert='alert-error';
	}
}

?>

<form id="forms" method="post" onSubmit="return submitForm('<?php echo $_SERVER['PHP_SELF']; ?>')" class="form-horizontal">
	<fieldset>
		<legend>Tambah Bantuan</legend>
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
		<div class="row-fluid">
			<div class="span6">
				<div class="control-group">
				<label class="control-label" for="deskripsi" >Deskripsi</label>
					<div class="controls">
					<textarea class="span12" id="deskripsi" name="deskripsi" required></textarea>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="qty" >Qty</label >
					<div class="controls">
						<input type="text" class="span5" id="qty" name="qty"/>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="satuan" >Satuan</label >
					<div class="controls">
						<input type="text" id="satuan" name="satuan"/>
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="keterangan" >Keterangan</label>
					<div class="controls">
					<textarea class="span12" id="keterangan" name="keterangan"></textarea>
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
			<div class="controls">
			<button type="submit" class="btn btn-primary">Tambah</button>
			<button type="button" id="close" class="btn btn-primary" >Tutup</button>
			</div>
		</div>
		
	</fieldset>
</form>

<script type="text/javascript">
	$(document).ready(function(){
		$("#close").click(function(){
			$("#form-nest").hide("slow");
		});
	});
</script>