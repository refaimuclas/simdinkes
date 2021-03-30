<?php 
	session_start();
	include_once '../config/koneksi.php';
	include_once '../config/fungsi_sqltgl.php';
	require_once '../ben/class.ben.php';
	$ben = new ben($pdo);
	if(isset($_GET['b1_id']))
		{
			$id = $_GET['b1_id'];
			extract($ben->getB2($id));	
		}
	
?>

<form name="multiform" id="multiform" class="form-horizontal" action="ben/multi-form-submit-edit-b2.php" method="POST" enctype="multipart/form-data">
	<div id="alert"></div>
	<fieldset>
		<legend>UPDATE FORM B2</legend>
		<div class="tabbable">
			<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
				

				<li class="active" >
					<a data-toggle="tab" href="#dropdown14">Form B2-1</a>
				</li>

				<li>
					<a data-toggle="tab" href="#dropdown16">Form B2-2</a>
				</li>
				<li>
					<a data-toggle="tab" href="#dropdown17">Form B2-3</a>
				</li>
				<li>
					<a data-toggle="tab" href="#dropdown18">Form B2-4</a>
				</li>
				<li>
					<a data-toggle="tab" href="#dropdown19">Form B2-5</a>
				</li>
				<li>
					<a data-toggle="tab" href="#dropdown20">Form B2-6</a>
				</li>
			</ul>

			<div class="tab-content">			

				<div id="dropdown14" class="tab-pane in active">				
					<div class="span6">
					<input type="hidden" id="b1_id" name="b1_id" value="<?php echo $b1_id; ?>" readonly="readonly" />
						<div class="control-group">
							<label class="control-label" for="input">Jumlah kelompok rentan pada pengungsi </label>
							<div class="controls">
								<input type="text" id="spinner19" name="bayi" /> Bayi <br />
								<input type="text" id="spinner20" name="balita" /> Balita <br />
								<input type="text" id="spinner21" name="ibu_hamil" /> Ibu Hamil <br />
								<input type="text" id="spinner22" name="ibu_menyusui" /> Ibu Menyusui <br />
								<input type="text" id="spinner23" name="lansia" /> Lansia
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Jumlah Korban yang di Rujuk Ke</label>
							<div class="controls">
								<input type="text" id="rujuk1" name="rujuk1" placeholder="Nama RS/Puskesmas" value="<?php echo $rujuk1; ?>" /><input type="text" id="spinner1" name="jml_rujuk1" /> Jiwa
								<input type="text" id="rujuk2" name="rujuk2" placeholder="Nama RS/Puskesmas" value="<?php echo $rujuk2; ?>" /><input type="text" id="spinner2" name="jml_rujuk2" /> Jiwa
								<input type="text" id="rujuk3" name="rujuk3" placeholder="Nama RS/Puskesmas" value="<?php echo $rujuk3; ?>"/><input type="text" id="spinner3" name="jml_rujuk3" /> Jiwa
								<input type="text" id="rujuk4" name="rujuk4" placeholder="NamaRS/Puskesmas" value="<?php echo $rujuk4; ?>"/><input type="text" id="spinner4" name="jml_rujuk4" /> Jiwa 
								<input type="text" id="rujuk5" name="rujuk5" placeholder="NamaRS/Puskesmas" value="<?php echo $rujuk5; ?>"/><input type="text" id="spinner5" name="jml_rujuk5" /> Jiwa
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="control-group">
							<label class="control-label" for="input">Sumber Air Bersih</label>
							<div class="controls">
								<input type="text" id="spinner24" name="sumur_gali" /> Sumur Gali <br />
								<input type="text" id="spinner25" name="spt" /> SPT <br />
								<input type="text" id="spinner26" name="pma" /> PMA <br />
								<input type="text" id="spinner27" name="pah" /> PAH <br />
								<input type="text" id="spinner28" name="perpipaan" /> Perpipaan <br />
								<input type="text" id="dll" name="dll1" placeholder="DLL"  value="<?php echo $dll1; ?>" /><input type="text" id="spinner29" name="jml_dll1" /> DLL
								<input type="text" id="dll2" name="dll2" placeholder="DLL"  value="<?php echo $dll2; ?>" /><input type="text" id="spinner30" name="jml_dll2" /> DLL
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Sarana Sanitasi dan Kesehatan Lingkungan </label>
							<div class="controls">
								<input type="text" id="spinner31" name="jamban_keluarga" />Jamban Keluarga<br />
								<input type="text" id="spinner32" name="mck" /> MCK <br />
								<input type="text" id="dll3" name="dll3" placeholder="DLL" value="<?php echo $dll3; ?>" /><input type="text" id="spinner33" name="jml_dll3" /> DLL
							</div>
						</div>	
					</div>
				</div>
				
				<div id="dropdown16" class="tab-pane">
					<label>KONDISI SANITASI DAN KESEHATAN LINGKUNGAN DI LOKASI PENAMPUNGAN PENGUNGSI</label>
					<hr />
					<div class="span5">
						<div class="control-group">
						<label class="control-label">Jenis Tempat Penampungan </label>
							<div class="controls">
								<label>
									<input name="jenis_bgn" type="radio" value="Bangunan Permanen" <?php echo ($jenis_bgn=='Bangunan Permanen')?'checked':''; ?> />
									<span class="lbl"> Bangunan Permanen</span>
								</label>
								<label>
									<input name="jenis_bgn" type="radio" value="Bangunan Darurat" <?php echo ($jenis_bgn=='Bangunan Darurat')?'checked':''; ?> />
									<span class="lbl"> Bangunan Darurat</span>
								</label>
							</div>
						</div>
						<div class="control-group">
						<label class="control-label">Kapasitas Penampungan Pengungsi </label>
							<div class="controls">
								<label>
									<input name="kap_bgn" type="radio" value="Memadai (min.10m3/or)"  <?php echo ($kap_bgn=='Memadai (min.10m3/or)')?'checked':''; ?> />
									<span class="lbl"> Memadai (min.10m3/or)</span>
								</label>
								<label>
									<input name="kap_bgn" type="radio" value="Tidak memadai" <?php echo ($kap_bgn=='Tidak memadai')?'checked':''; ?> />
									<span class="lbl"> Tidak memadai</span>
								</label>
							</div>
						</div>
						<div class="control-group">
						<label class="control-label">Kapasitas Penyediaan Air Bersih </label>
							<div class="controls">
								<label>
									<input name="kap_air" type="radio" value="Memadai (min.20L/or/hr)"  <?php echo ($kap_air=='Memadai (min.20L/or/hr)')?'checked':''; ?>/>
									<span class="lbl"> Memadai (min.20L/or/hr)</span>
								</label>
								<label>
									<input name="kap_air" type="radio" value="Tidak memadai" <?php echo ($kap_air=='Tidak memadai')?'checked':''; ?> />
									<span class="lbl"> Tidak memadai</span>
								</label>
							</div>
						</div>
						<div class="control-group">
						<label class="control-label">Sarana MCK</label>
							<div class="controls">
								<label>
									<input name="sarana_mck" type="radio" value="Memadai (min.20or/1mck)"  <?php echo ($sarana_mck=='Memadai (min.20or/1mck)')?'checked':''; ?>/>
									<span class="lbl"> Memadai (min.20or/1mck)</span>
								</label>
								<label>
									<input name="sarana_mck" type="radio" value="Tidak memadai" <?php echo ($sarana_mck=='Tidak memadai')?'checked':''; ?> />
									<span class="lbl"> Tidak memadai</span>
								</label>
							</div>
						</div>
					</div>
					<div class="span5">
						<div class="control-group">
						<label class="control-label">Tempat Pembuangan Sampah</label>
							<div class="controls">
								<label>
									<input name="tmp_smp" type="radio" value="Memadai (min 3m3/60 or)" <?php echo ($tmp_smp=='Memadai (min 3m3/60 or)')?'checked':''; ?> />
									<span class="lbl"> Memadai (min 3m3/60 or)</span>
								</label>
								<label>
									<input name="tmp_smp" type="radio" value="Tidak memadai" <?php echo ($tmp_smp=='Tidak memadai')?'checked':''; ?> />
									<span class="lbl"> Tidak memadai</span>
								</label>
							</div>
						</div>
						<div class="control-group">
						<label class="control-label">Sarana SPAL</label>
							<div class="controls">
								<label>
									<input name="sarana_spal" type="radio" value="Memadai (min 4m dr penampungan)" <?php echo ($sarana_spal=='Memadai (min 4m dr penampungan)')?'checked':''; ?> />
									<span class="lbl"> Memadai (min 4m dr penampungan)</span>
								</label>
								<label>
									<input name="sarana_spal" type="radio" value="Tidak memadai" <?php echo ($sarana_spal=='Tidak memadai')?'checked':''; ?>  />
									<span class="lbl"> Tidak memadai</span>
								</label>
							</div>
						</div>
						<div class="control-group">
						<label class="control-label">Penerangan</label>
							<div class="controls">
								<label>
									<input name="penerangan" type="radio" value="Ada" <?php echo ($penerangan=='Ada')?'checked':''; ?> />
									<span class="lbl"> Ada</span>
								</label>
								<label>
									<input name="penerangan" type="radio" value="Tidak Ada" <?php echo ($penerangan=='Tidak Ada')?'checked':''; ?> />
									<span class="lbl"> Tidak Ada</span>
								</label>
							</div>
						</div>
					</div>
				</div>
				<div id="dropdown17" class="tab-pane">
					<label>KESIAPAN LOGISTIK & BAHAN SANITASI</label>
					<hr />
					<div class="span5">
						<div class="control-group">
						<label class="control-label">Obat & Bahan Habis Pakai </label>
							<div class="controls">
							  <label>
									<input name="obat_hbs" type="radio" value="Tidak Ada" <?php echo ($obat_hbs=='Tidak Ada')?'checked':''; ?> />
									<span class="lbl">Tidak Ada  </span>								
									<input name="obat_hbs" type="radio" value="Kurang" <?php echo ($obat_hbs=='Kurang')?'checked':''; ?> />
								    <span class="lbl">Kurang </span>								
									<input name="obat_hbs" type="radio" value="cukup" <?php echo ($obat_hbs=='cukup')?'checked':''; ?> />
									<span class="lbl">Cukup </span>
								</label>
							</div>
						</div>
						<div class="control-group">
						<label class="control-label">Alat Kesehatan </label>
							<div class="controls">
							  <label>
									<input name="alkes" type="radio" value="Tidak Ada" <?php echo ($alkes=='Tidak Ada')?'checked':''; ?> />
									<span class="lbl">Tidak Ada  </span>								
									<input name="alkes" type="radio" value="Kurang" <?php echo ($alkes=='Kurang')?'checked':''; ?> />
								    <span class="lbl">Kurang </span>								
									<input name="alkes" type="radio" value="cukup" <?php echo ($alkes=='cukup')?'checked':''; ?> />
									<span class="lbl">Cukup </span>
								</label>
							</div>
						</div>
						<div class="control-group">
						<label class="control-label">Kaporit </label>
							<div class="controls">
							  <label>
									<input name="kaporit" type="radio" value="Tidak Ada" <?php echo ($kaporit=='Tidak Ada')?'checked':''; ?> />
									<span class="lbl">Tidak Ada  </span>								
									<input name="kaporit" type="radio" value="Kurang" <?php echo ($kaporit=='Kurang')?'checked':''; ?> />
								    <span class="lbl">Kurang </span>								
									<input name="kaporit" type="radio" value="cukup" <?php echo ($kaporit=='cukup')?'checked':''; ?> />
									<span class="lbl">Cukup </span>
								</label>
							</div>
						</div>
						<div class="control-group">
						<label class="control-label">PAC </label>
							<div class="controls">
							  <label>
									<input name="pac" type="radio" value="Tidak Ada" <?php echo ($pac=='Tidak Ada')?'checked':''; ?> />
									<span class="lbl">Tidak Ada  </span>								
									<input name="pac" type="radio" value="Kurang" <?php echo ($pac=='Kurang')?'checked':''; ?> />
								    <span class="lbl">Kurang </span>								
									<input name="pac" type="radio" value="cukup" <?php echo ($pac=='cukup')?'checked':''; ?> />
									<span class="lbl">Cukup </span>
								</label>
							</div>
						</div>
					</div>
					<div class="span5">
						<div class="control-group">
						<label class="control-label">Aquatab </label>
							<div class="controls">
							  <label>
									<input name="aquatab" type="radio" value="Tidak Ada" <?php echo ($aquatab=='Tidak Ada')?'checked':''; ?> />
									<span class="lbl">Tidak Ada  </span>								
									<input name="aquatab" type="radio" value="Kurang" <?php echo ($aquatab=='Kurang')?'checked':''; ?> />
								    <span class="lbl">Kurang </span>								
									<input name="aquatab" type="radio" value="cukup" <?php echo ($aquatab=='cukup')?'checked':''; ?> />
									<span class="lbl">Cukup </span>
								</label>
							</div>
						</div>
						<div class="control-group">
						<label class="control-label">Kantong Sampah </label>
							<div class="controls">
							  <label>
									<input name="kantong_sampah" type="radio" value="Tidak Ada" <?php echo ($kantong_sampah=='Tidak Ada')?'checked':''; ?> />
									<span class="lbl">Tidak Ada  </span>								
									<input name="kantong_sampah" type="radio" value="Kurang" <?php echo ($kantong_sampah=='Kurang')?'checked':''; ?> />
								    <span class="lbl">Kurang </span>								
									<input name="kantong_sampah" type="radio" value="cukup" <?php echo ($kantong_sampah=='cukup')?'checked':''; ?> />
									<span class="lbl">Cukup </span>
								</label>
							</div>
						</div>
						<div class="control-group">
						<label class="control-label">Repellent lalat </label>
							<div class="controls">
							  <label>
									<input name="repellent_lalat" type="radio" value="Tidak Ada" <?php echo ($repellent_lalat=='Tidak Ada')?'checked':''; ?> />
									<span class="lbl">Tidak Ada  </span>								
									<input name="repellent_lalat" type="radio" value="Kurang" <?php echo ($repellent_lalat=='Kurang')?'checked':''; ?> />
								    <span class="lbl">Kurang </span>								
									<input name="repellent_lalat" type="radio" value="cukup" <?php echo ($repellent_lalat=='cukup')?'checked':''; ?> />
									<span class="lbl">Cukup </span>
								</label>
							</div>
						</div>
						<div class="control-group">
						<label class="control-label">Ketersediaan Pangan </label>
							<div class="controls">
							  <label>
									<input name="ketersediaan_pangan" type="radio" value="Tidak Ada" <?php echo ($ketersediaan_pangan=='Tidak Ada')?'checked':''; ?> />
									<span class="lbl">Tidak Ada  </span>								
									<input name="ketersediaan_pangan" type="radio" value="Kurang" <?php echo ($ketersediaan_pangan=='Kurang')?'checked':''; ?> />
								    <span class="lbl">Kurang </span>								
									<input name="ketersediaan_pangan" type="radio" value="cukup" <?php echo ($ketersediaan_pangan=='cukup')?'checked':''; ?>  />
									<span class="lbl">Cukup </span>
								</label>
							</div>
						</div>
					</div>
				</div>
				<div id="dropdown18" class="tab-pane">
					<label>KESIAPAN LOGISTIK & BAHAN SANITASI</label>
					<hr />
					<div class="span5">
						<div class="control-group">
							<label class="control-label">Transportasi operasional pelayanan kesehatan</label>
								<div class="controls">
								  <label>
									<input name="transfort_pelayanan" type="radio" value="Tidak Ada" <?php echo ($transfort_pelayanan=='Tidak Ada')?'checked':''; ?> />
									<span class="lbl">Tidak Ada  </span>								
									<input name="transfort_pelayanan" type="radio" value="Kurang" <?php echo ($transfort_pelayanan=='Kurang')?'checked':''; ?> />
								    <span class="lbl">Kurang </span>								
									<input name="transfort_pelayanan" type="radio" value="cukup" <?php echo ($transfort_pelayanan=='cukup')?'checked':''; ?>  />
									<span class="lbl">Cukup </span>
								</label>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Alat Komunikasi</label>
								<div class="controls">
								  <label>
									<input name="alat_komunikasi" type="radio" value="Tidak Ada" <?php echo ($alat_komunikasi=='Tidak Ada')?'checked':''; ?> />
									<span class="lbl">Tidak Ada  </span>								
									<input name="alat_komunikasi" type="radio" value="Kurang" <?php echo ($alat_komunikasi=='Kurang')?'checked':''; ?> />
								    <span class="lbl">Kurang </span>								
									<input name="alat_komunikasi" type="radio" value="cukup" <?php echo ($alat_komunikasi=='cukup')?'checked':''; ?>  />
									<span class="lbl">Cukup </span>
								</label>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Sarana listrik untuk pelayanan kesehatan</label>
								<div class="controls">
								  <label>
									<input name="sarana_listrik" type="radio" value="Tidak Ada" <?php echo ($sarana_listrik=='Tidak Ada')?'checked':''; ?> />
									<span class="lbl">Tidak Ada  </span>								
									<input name="sarana_listrik" type="radio" value="Kurang" <?php echo ($sarana_listrik=='Kurang')?'checked':''; ?> />
								    <span class="lbl">Kurang </span>								
									<input name="sarana_listrik" type="radio" value="cukup" <?php echo ($sarana_listrik=='cukup')?'checked':''; ?>  />
									<span class="lbl">Cukup </span>
								</label>
							</div>
						</div>
					</div>
				</div>
				<div id="dropdown19" class="tab-pane">
					<div class="span6">
						<div class="control-group">
							<label class="control-label" for="input">Bantuan Yang Di Perlukan</label>
							<div class="controls">
								<input type="text" id="bantuan1" name="bantuan1" value="<?php echo $bantuan1; ?>" />
								<input type="text" id="bantuan2" name="bantuan2" value="<?php echo $bantuan2; ?>" />
								<input type="text" id="bantuan3" name="bantuan3" value="<?php echo $bantuan3; ?>" />
								<input type="text" id="bantuan4" name="bantuan4" value="<?php echo $bantuan4; ?>" />
								<input type="text" id="bantuan5" name="bantuan5" value="<?php echo $bantuan5; ?>" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Rencana Tindak Lanjut</label>
							<div class="controls">
								<input type="text" id="rencana1" name="rencana1" value="<?php echo $rencana1; ?>" />
								<input type="text" id="rencana2" name="rencana2" value="<?php echo $rencana2; ?>" />
								<input type="text" id="rencana3" name="rencana3" value="<?php echo $rencana3; ?>" />
								<input type="text" id="rencana4" name="rencana4" value="<?php echo $rencana4; ?>" />
								<input type="text" id="rencana5" name="rencana5" value="<?php echo $rencana5; ?>" />
							</div>
						</div>
					</div>
					<div class="span6">
						
						<div class="control-group">
							<label class="control-label" for="input">Nama Kepala Dinas kesehatan</label>
							<div class="controls">
								<input type="text" id="kepala_dinas" name="kepala_dinas" value="<?php echo $kepala_dinas; ?>" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Nip</label>
							<div class="controls">
								<input type="text" id="nip" name="nip1" value="<?php echo $nip1; ?>" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Ketinggian Air</label>
							<div class="controls">
								<input type="text" id="ketinggian_air" name="ketinggian_air" value="<?php echo $ketinggian_air; ?>" />
							</div>
						</div>
					</div>
				</div>
				<div id="dropdown20" class="tab-pane">
					<div class="span6">
						<div class="control-group">
							<label class="control-label" for="inputfoto" >Pilih Foto</label>
							<div class="controls">
								<input type="hidden" name="file1" value="<?php echo $file_name1; ?>" />
								<input type="file" name="file1" id="file1"/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputfoto" >Pilih Foto</label>
							<div class="controls">
								<input type="hidden" name="file2" value="<?php echo $file_name2; ?>"/>
								<input type="file" name="file2" id="file2"/>
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="control-group">
							<label class="control-label" for="inputfoto" >Pilih Foto</label>
							<div class="controls">
								<input type="hidden" name="file3" value="<?php echo $file_name3; ?>"/>
								<input type="file" name="file3" id="file3"/>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="inputfoto" >Pilih Foto</label>
							<div class="controls">
								<input type="hidden" name="file4" value="<?php echo $file_name4; ?>"/>
								<input type="file" name="file4" id="file4"/>
							</div>
						</div>
					</div>
					<hr />
					<div class="controls">
						<button type="submit" class="btn btn-primary" id="multi-post">Update</button>
						<button type="button" id="close" class="btn btn-primary" >Tutup</button>
					</div>
				</div>
			</div>
		</div>
		
		
		
	</fieldset>
</form>
<script type="text/javascript">
//-----------------------------------------------------------------------------------------------------------
$(document).ready(function(){
	$("#close").click(function(){
		$("#form-nest").hide("slow");
	});
	$(".chzn-select").chosen();
	$(".tanggal").datepicker({
			dateFormat: "dd-mm-yy",
            changeMonth: true,
            changeYear: true,
			yearRange: '1970:2050',
			autoclose: true,
			todayHighlight: true,
	});
	$('#spinner1').ace_spinner({value:<?php echo $jml_rujuk1; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner2').ace_spinner({value:<?php echo $jml_rujuk2; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner3').ace_spinner({value:<?php echo $jml_rujuk3; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner4').ace_spinner({value:<?php echo $jml_rujuk4; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner5').ace_spinner({value:<?php echo $jml_rujuk5; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner6').ace_spinner({value:0,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner7').ace_spinner({value:0,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner8').ace_spinner({value:0,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner9').ace_spinner({value:0,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner10').ace_spinner({value:0,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner11').ace_spinner({value:0,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner12').ace_spinner({value:0,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner13').ace_spinner({value:0,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner14').ace_spinner({value:0,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner15').ace_spinner({value:0,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner16').ace_spinner({value:0,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner17').ace_spinner({value:0,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner18').ace_spinner({value:0,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner19').ace_spinner({value:<?php echo $bayi; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner20').ace_spinner({value:<?php echo $balita; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner21').ace_spinner({value:<?php echo $ibu_hamil; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner22').ace_spinner({value:<?php echo $ibu_menyusui; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner23').ace_spinner({value:<?php echo $lansia; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner24').ace_spinner({value:<?php echo $sumur_gali; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner25').ace_spinner({value:<?php echo $spt; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner26').ace_spinner({value:<?php echo $pma; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner27').ace_spinner({value:<?php echo $pah; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner28').ace_spinner({value:<?php echo $perpipaan; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner29').ace_spinner({value:<?php echo $jml_dll1; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner30').ace_spinner({value:<?php echo $jml_dll2; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner31').ace_spinner({value:<?php echo $jamban_keluarga; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner32').ace_spinner({value:<?php echo $mck; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner33').ace_spinner({value:<?php echo $jml_dll3; ?>,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});


});
//----------------------------------------------------------------------------------------------------------
$(function() {
        $("#file").change(function() {
            $("#message").empty(); // To remove the previous error message
            var file = this.files[0];
            var imagefile = file.type;
            var match= ["image/jpeg","image/png","image/jpg"];
            if(!((imagefile==match[0]) || (imagefile==match[1]) || (imagefile==match[2])))
            {
                $('#previewing').attr('src','noimage.png');
                $("#message").html("<p id='error'>Mohon Pilih File dengan benar</p>"+"<h4>Catatan</h4>"+"<span id='error_message'>Only jpeg, jpg and png Images type allowed</span>");
                return false;
            }else{
                var reader = new FileReader();
                reader.onload = imageIsLoaded;
                reader.readAsDataURL(this.files[0]);
            }
        });
    });
    function imageIsLoaded(e) {
        $("#file").css("color","#FFFFFF");
        $('#image_preview').css("display", "block");
        $('#previewing').attr('src', e.target.result);
        $('#previewing').attr('width', '250px');
        $('#previewing').attr('height', '230px');
    };
//-------------------------------------------------------------------------------------------------------------
$(document).ready(function(){
 function getDoc(frame) {
     var doc = null;     
     // IE8 cascading access check
     try {
         if (frame.contentWindow) {
             doc = frame.contentWindow.document;
         }
     } catch(err) {
     }
     if (doc) { // successful getting content
         return doc;
     }
     try { // simply checking may throw in ie8 under ssl or mismatched protocol
         doc = frame.contentDocument ? frame.contentDocument : frame.document;
     } catch(err) {
         // last attempt
         doc = frame.document;
     }
     return doc;
 }
$("#multiform").submit(function(e){
	$("#multi-msg").html("<img src='assets/images/ajax-loader.gif'/>");
	var formObj = $(this);
	var formURL = formObj.attr("action");
if(window.FormData !== undefined)  // for HTML5 browsers
//	if(false)
	{	
		var formData = new FormData(this);
		$.ajax({
        	url: formURL,
	        type: 'POST',
			data:  formData,
			mimeType:"multipart/form-data",
			contentType: false,
    	    cache: false,
        	processData:false,
        	beforeSend:function(){
				$("#multiform").html("<img src='assets/images/ajax-loader.gif' />");
				$("#data").html("<img src='assets/images/ajax-loader.gif' />");
			},
			success: function(data, textStatus, jqXHR)
		    {
				$("#multiform").html(data);
				$("#data").load("ben/data_ben.php");
		    },
		  	error: function(jqXHR, textStatus, errorThrown) 
	    	{
				$("#alert").html('<pre><code class="prettyprint">AJAX Request Failed<br/> textStatus='+textStatus+', errorThrown='+errorThrown+'</code></pre>');
	    		
	    	} 	        
	   });
        e.preventDefault();
        e.unbind();
   }
   else  //for olden browsers
	{
		//generate a random id
		var  iframeId = 'unique' + (new Date().getTime());

		//create an empty iframe
		var iframe = $('<iframe src="javascript:false;" name="'+iframeId+'" />');

		//hide it
		iframe.hide();

		//set form target to iframe
		formObj.attr('target',iframeId);

		//Add iframe to body
		iframe.appendTo('body');
		iframe.load(function(e)
		{
			var doc = getDoc(iframe[0]);
			var docRoot = doc.body ? doc.body : doc.documentElement;
			var data = docRoot.innerHTML;
			$("#multiform").html(data);
			$("#data").load("ben/data_ben.php");
		});
	
	}

});
});
jQuery(function($) {
	$('#myTab[data-toggle="tab"]').on('shown.bs.tab', function (e) {
		//if($(e.target).attr('href') == "#home") doSomethingNow();
	});
});
</script>