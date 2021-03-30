<?php 
	session_start();
	include_once '../config/koneksi.php';
	include_once '../config/fungsi_sqltgl.php';
	require_once '../ben/class.ben.php';
	$ben = new ben($pdo);
?>

<form name="multiform" id="multiform" class="form-horizontal" action="ben/multi-form-submit-edit.php" method="POST" enctype="multipart/form-data">
	<div id="alert"></div>	
	<fieldset>
		<legend>EDIT FROM B1</legend>
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
		if(isset($_GET['b1_id']))
		{
			$id = $_GET['b1_id'];
			extract($ben->getID($id));	
		} 
		?>
		</span>
		<div class="tabbable">
			<ul class="nav nav-tabs padding-12 tab-color-blue background-blue" id="myTab4">
				<li class="active">
					<a data-toggle="tab" href="#home4">Form B1-1</a>
				</li>

				<li>
					<a data-toggle="tab" href="#profile4">Form B1-2</a>
				</li>

				<li>
					<a data-toggle="tab" href="#dropdown14">Form B1-3</a>
				</li>
				<li>
					<a data-toggle="tab" href="#dropdown20">Form B1-4</a>
				</li>
			</ul>

			<div class="tab-content">
				<div id="home4" class="tab-pane in active">
					<!-- =========================================================== -->
					<div class="span6">
					<input type="hidden" id="b1_id" name="b1_id" value="<?php echo $b1_id; ?>" readonly="readonly" />
						<div class="control-group">
							<label class="control-label" for="inputdeskripsi">Deskripsi</label>
							<div class="controls">
								<textarea class="span12" id="deskripsi_bencana" name="deskripsi_bencana" required value="<?php echo $deskripsi_bencana; ?>"><?php echo $deskripsi_bencana; ?></textarea>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input" >Alamat</label>
							<div class="controls">
								<input type="text" id="lokasi_bencana" name="lokasi_bencana" value="<?php echo $lokasi_bencana; ?>" required />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Propinsi</label>
							<div class="controls">
								<input type="text" id="propinsi" name="propinsi" value="<?php echo $provinsi; ?>" readonly="readonly" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Kabupaten/Kota</label>
							<div class="controls">
								<input type="text" id="kabupaten" name="kabupaten" value="<?php echo $kabupaten; ?>" readonly="readonly" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Kecamatan</label>
							<div class="controls">
								<select name="kecamatan" id="kecamatan" required>
									<option value="<?php echo $id_kec; ?>"><?php echo $nama_kec; ?></option>
									<?php
									
										include_once '../config/koneksi.php';
										include_once 'class.ben.php';
										$ben = new ben($pdo);
										$ben->kecamatan();
									
									?>						
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Kelurahan</label>
							<div class="controls">
								<select name="kelurahan" id="kelurahan" required>
									<option value="<?php echo $id_kel; ?>"><?php echo $nama_kel; ?></option>													
								</select>
							</div>
						</div>
					</div>
					<div class="span6">
						<div class="control-group">
						<label class="control-label" for="input">Letak Geografi</label>
						<div class="controls">
							<input type="text" id="letak_geografi" name="letak_geografi" value="<?php echo $letak_geografi; ?>" />
						</div>
						</div>
						<div class="control-group">
							<label class="control-label">Hari</label>
							<div class="controls">
								<select name="hari" id="hari">
									<option value="<?php echo $hari; ?>"><?php echo $hari; ?></option>
									<option value="Senin">Senin</option>
									<option value="Selasa">Selasa</option>
									<option value="Rabu">Rabu</option>
									<option value="Kamis">Kamis</option>						
									<option value="Jumat">Jumat</option>
									<option value="Sabtu">Sabtu</option>
									<option value="Minggu">Minggu</option>
								</select>
							</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="inputtgl">Tanggal</label>
							<div class="controls" >								
								<input type="text" id="tgl" class="tanggal span4" name="tgl" data-date-format="dd-mm-yyyy" value="<?php echo tgl_sql1($tgl); ?>" />
								<i class="icon-calendar bigger-120"></i>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Jam</label>
							<div class="controls">
								<input type="text" id="jam" name="jam" value="<?php echo $jam ; ?>" />
							</div>
						</div>	
						<div class="control-group">
						<label class="control-label" for="input">Lokasi Pengungsian</label>
						<div class="controls">
							<input type="text" id="lokasi_pengungsian_1" name="lokasi_pengungsian_1" value="<?php echo $lokasi_pengungsian_1; ?>" />
							<input type="text" id="lokasi_pengungsian_2" name="lokasi_pengungsian_2" value="<?php echo $lokasi_pengungsian_2; ?>" />
							<input type="text" id="lokasi_pengungsian_3" name="lokasi_pengungsian_3" value="<?php echo $lokasi_pengungsian_3; ?>" />
						</div>
						</div>				
					</div>
					<!-- =========================================================== -->
				</div>

				<div id="profile4" class="tab-pane">
					<!-- ============================================================ -->
					<div class="span6">
						<div class="control-group">
						<label class="control-label" for="input">Jumlah Meninggal</label>
						<div class="controls">
							<!--<input type="text" id="jumlah_meninggal" name="jumlah_meninggal" />-->
							<input type="text" id="spinner6" name="jumlah_meninggal" />
						</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Jumlah Hilang</label>
							<div class="controls">
								<!--<input type="text" id="jumlah_hilang" name="jumlah_hilang" />-->
								<input type="text" id="spinner7" name="jumlah_hilang" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Jumlah Luka Berat</label>
							<div class="controls">
								<!--<input type="text" id="jumlah_luka_berat" name="jumlah_luka_berat" />-->
								<input type="text" id="spinner8" name="jumlah_luka_berat" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Jumlah Luka Ringan</label>
							<div class="controls">
								<!--<input type="text" id="jumlah_luka_ringan" name="jumlah_luka_ringan" />-->
								<input type="text" id="spinner9" name="jumlah_luka_ringan" />
							</div>
						</div>			
						<div class="control-group">
							<label class="control-label" for="input">Jumlah Penduduk Terancam</label>
							<div class="controls">
								<!--<input type="text" id="jumlah_penduduk_terancam" name="jumlah_penduduk_terancam" />-->
								<input type="text" id="spinner10" name="jumlah_penduduk_terancam" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Jumlah KK</label>
							<div class="controls">
								<!--<input type="text" id="jumlah_kk_1" name="jumlah_kk_1" />-->
								<input type="text" id="spinner11" name="jumlah_kk_1" />
							</div>
						</div>
						<div class="control-group">
						<label class="control-label" for="input">Jumlah Pengungsi</label>
						<div class="controls">
							<!--<input type="text" id="jumlah_pengungsi" name="jumlah_pengungsi" />-->
							<input type="text" id="spinner12" name="jumlah_pengungsi" />
						</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Jumlah KK</label>
							<div class="controls">
								<!--<input type="text" id="jumlah_kk_2" name="jumlah_kk_2" />-->
								<input type="text" id="spinner13" name="jumlah_kk_2" />
							</div>
						</div>
					</div>
					<div class="span6">
								
						<div class="control-group">
							<label class="control-label" for="input">Akses Kelokasi</label>
							<div class="controls">
								<input type="text" id="akses_kelokasi" name="akses_kelokasi" value="<?php echo $akses_kelokasi; ?>" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Jalur Komunikasi Yg Dapat Di gunakan</label>
							<div class="controls">
								<input type="text" id="jalur_komunikasi" name="jalur_komunikasi" value="<?php echo $jalur_komunikasi; ?>"  />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Keadaan Jaringan Listrik</label>
							<div class="controls">
								<select name="keadaan_listrik" id="keadaan_listrik">
									<option value="<?php echo $keadaan_listrik; ?>"><?php echo $keadaan_listrik; ?></option>
									<option value="Baik">Baik</option>
									<option value="Terputus">Terputus</option>
									<option value="Tidak Tersedia">Tidak Tersedia</option>						
									<option value="Dll">Dll</option>						
								</select>
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Upaya Yang di Lakukan</label>
							<div class="controls">
								<input type="text" id="upaya_dilakukan_1" name="upaya_dilakukan_1" value="<?php echo $upaya_dilakukan_1; ?>" />
								<input type="text" id="upaya_dilakukan_2" name="upaya_dilakukan_2" value="<?php echo $upaya_dilakukan_2; ?>" />
								<input type="text" id="upaya_dilakukan_3" name="upaya_dilakukan_3" value="<?php echo $upaya_dilakukan_3; ?>" />
								<input type="text" id="upaya_dilakukan_4" name="upaya_dilakukan_4" value="<?php echo $upaya_dilakukan_4; ?>" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label">Sumber Air Yang di Gunakan</label>
							<div class="controls">
								<select name="sumber_air" id="sumber_air">
									<option value="<?php echo $sumber_air; ?>"><?php echo $sumber_air; ?></option>
									<option value="Cukup">Cukup</option>
									<option value="Tidak Cukup">Tidak Cukup</option>						
								</select>
							</div>
						</div>
					</div>
					<!-- ============================================================ -->
				</div>

				<div id="dropdown14" class="tab-pane">
					
					<div class="span4">
					<label><strong>Kondisi Bangunan</strong> </label>
					<hr />
						<div class="control-group">
						<label class="control-label"><strong>RS</strong></label>
							<div class="controls">
							  <label>
									<input name="rs" type="radio" value="Rusak" <?php echo ($rs=='Rusak')?'checked':''; ?> />
									<span class="lbl">Rusak</span>								
									<input name="rs" type="radio" value="Tidak" <?php echo ($rs=='Tidak')?'checked':''; ?> />
								    <span class="lbl">Tidak</span>
								</label>
							</div>
						</div>
						<div class="control-group">
						<label class="control-label"><strong>Puskesmas</strong></label>
							<div class="controls">
							  <label>
									<input name="puskesmas" type="radio" value="Rusak" <?php echo ($puskesmas=='Rusak')?'checked':''; ?> />
									<span class="lbl">Rusak</span>								
									<input name="puskesmas" type="radio" value="Tidak" <?php echo ($puskesmas=='Tidak')?'checked':''; ?> />
								    <span class="lbl">Tidak</span>
								</label>
							</div>
						</div>
						<div class="control-group">
						<label class="control-label"><strong>Pustu</strong></label>
							<div class="controls">
							  <label>
									<input name="pustu" type="radio" value="Rusak" <?php echo ($pustu=='Rusak')?'checked':''; ?> />
									<span class="lbl">Rusak</span>								
									<input name="pustu" type="radio" value="Tidak" <?php echo ($pustu=='Tidak')?'checked':''; ?> />
								    <span class="lbl">Tidak</span>
								</label>
							</div>
						</div>
						<div class="control-group">
						<label class="control-label"><strong>Gudang Farmasi</strong></label>
							<div class="controls">
							  <label>
									<input name="gudang_farmasi" type="radio" value="Rusak" <?php echo ($gudang_farmasi=='Rusak')?'checked':''; ?> />
									<span class="lbl">Rusak</span>								
									<input name="gudang_farmasi" type="radio" value="Tidak" <?php echo ($gudang_farmasi=='Tidak')?'checked':''; ?> />
								    <span class="lbl">Tidak</span>
								</label>
							</div>
						</div>
						<div class="control-group">
						<label class="control-label"><strong>Polindes</strong></label>
							<div class="controls">
							  <label>
									<input name="polindes" type="radio" value="Rusak" <?php echo ($polindes=='Rusak')?'checked':''; ?> />
									<span class="lbl">Rusak</span>								
									<input name="polindes" type="radio" value="Tidak" <?php echo ($polindes=='Tidak')?'checked':''; ?> />
								    <span class="lbl">Tidak</span>
								</label>
							</div>
						</div>
					</div>
					<div class="span5">
					<label><strong>Fungsi Pelayanan</strong> </label>
					<hr />
						<div class="control-group" >
							<div class="controls">							 
									<input name="rs1" type="radio" value="Y" <?php echo ($rs1=='Y')?'checked':''; ?>  />
									<span class="lbl">Y</span>								
									<input name="rs1" type="radio" value="Tidak" <?php echo ($rs1=='Tidak')?'checked':''; ?> />
								    <span class="lbl">Tidak</span>								
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
							 
									<input name="puskesmas1" type="radio" value="Y" <?php echo ($puskesmas1=='Y')?'checked':''; ?>  />
									<span class="lbl">Y</span>								
									<input name="puskesmas1" type="radio" value="Tidak" <?php echo ($puskesmas1=='Tidak')?'checked':''; ?>/>
								    <span class="lbl">Tidak</span>
								</label>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
							  <label>
									<input name="pustu1" type="radio" value="Y" <?php echo ($pustu1=='Y')?'checked':''; ?> />
									<span class="lbl">Y</span>								
									<input name="pustu1" type="radio" value="Tidak" <?php echo ($pustu1=='Tidak')?'checked':''; ?>  />
								    <span class="lbl">Tidak</span>
								</label>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
							  <label>
									<input name="gudang_farmasi1" type="radio" value="Y" <?php echo ($gudang_farmasi1=='Y')?'checked':''; ?> />
									<span class="lbl">Y</span>								
									<input name="gudang_farmasi1" type="radio" value="Tidak" <?php echo ($gudang_farmasi1=='Tidak')?'checked':''; ?>  />
								    <span class="lbl">Tidak</span>
								</label>
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
							  <label>
									<input name="polindes1" type="radio" value="Y" <?php echo ($polindes1=='Y')?'checked':''; ?> />
									<span class="lbl">Y</span>								
									<input name="polindes1" type="radio" value="Tidak" <?php echo ($polindes1=='Tidak')?'checked':''; ?> />
								    <span class="lbl">Tidak</span>
								</label>
							</div>
						</div>
						
					</div>
				</div>
				
				<div id="dropdown20" class="tab-pane">
					<div class="span5">
						<div class="control-group">
							<label class="control-label" for="input">Nama Pelapor</label>
							<div class="controls">
								<input type="text" id="nama_pelapor" name="nama_pelapor" value="<?php echo $nama_pelapor; ?>" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Nip</label>
							<div class="controls">
								<input type="text" id="nip" name="nip" value="<?php echo $nip; ?>" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Puskesmas</label>
							<div class="controls">
								<input type="text" id="puskesmas5" name="puskesmas5" value="<?php echo $puskesmas5; ?>" />
							</div>
						</div>
						<div class="control-group">
							<label class="control-label" for="input">Jumlah Pusling</label>
							<div class="controls">
								<input type="text" id="jumlah_pusling" name="jumlah_pusling" value="<?php echo $jumlah_pusling; ?>"/>
							</div>
						</div>
						<div class="controls">
						<button type="submit" class="btn btn-primary" id="multi-post">Edit</button>
						<button type="button" id="close" class="btn btn-primary" >Tutup</button>
					</div>
					
					</div>

					<div class="span5">
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
					
				</div>
			</div>
		</div>
		<?php 
			}
		?>
		
		
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
	
	$('#spinner6').ace_spinner({value:'<?php echo $jumlah_meninggal; ?>',min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner7').ace_spinner({value:'<?php echo $jumlah_hilang; ?>',min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner8').ace_spinner({value:'<?php echo $jumlah_luka_berat; ?>',min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner9').ace_spinner({value:'<?php echo $jumlah_luka_ringan; ?>',min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner10').ace_spinner({value:'<?php echo $jumlah_penduduk_terancam; ?>',min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner11').ace_spinner({value:'<?php echo $jumlah_kk_1; ?>',min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner12').ace_spinner({value:'<?php echo $jumlah_pengungsi; ?>',min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
	.closest('.ace-spinner')
	.on('changed.fu.spinbox', function(){
		//alert($('#spinner1').val())
	});
	$('#spinner13').ace_spinner({value:'<?php echo $jumlah_kk_2; ?>',min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
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
//-------------------------------------------------------------------------------------------------------------------------------
var htmlobjek;
$(document).ready(function(){
  //apabila terjadi event onchange terhadap object <select id=propinsi>
  $("#kecamatan").change(function(){
    var kecamatan = $("#kecamatan").val();
    $.ajax({
        url: "ben/ambilkecamatan.php",
        data: "kecamatan="+kecamatan,
        cache: false,
        success: function(msg){
            $("#kelurahan").html(msg);
        }
    });
  });
});
</script>