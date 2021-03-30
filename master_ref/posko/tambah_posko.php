<?php
session_start();
require_once '../../config/koneksi.php';
require_once 'class.posko.php';
require_once '../../config/fungsi_sqltgl.php';
$posko = new posko($pdo);
if(!empty($_POST['alamat_posko'])){
	$alamat_posko	= $_POST['alamat_posko'];
	$keterangan 	= $_POST['keterangan'];
	$aktif 			= $_POST['aktif'];
	$created_by 	= $_SESSION['s_user'];
	if($posko->create($alamat_posko,$keterangan,$aktif,$created_by)){
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
		<legend>Tambah Posko</legend>
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
				<label class="control-label" for="alamat_posko" >Posko Kesehatan</label>
					<div class="controls">
					<textarea class="span12" id="alamat_posko" name="alamat_posko" required></textarea>
					</div>
				</div>
				<div class="control-group">
				<label class="control-label" for="keterangan" >Keterangan</label>
					<div class="controls">
					<textarea class="span12" id="keterangan" name="keterangan"></textarea>
					</div>
				</div>
				<div class="control-group">
				<label class="control-label">Aktif</label>
					<div class="controls">
						<label>
							<input name="aktif" type="radio" value="Y" checked />
							<span class="lbl"> Y</span>
						</label>
						<label>
							<input name="aktif" type="radio" value="N" />
							<span class="lbl"> N</span>
						</label>
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