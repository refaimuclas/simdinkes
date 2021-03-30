
<?php
session_start();
include_once '../config/koneksi.php';
include_once '../config/fungsi_indotgl.php';
include_once 'class.ben.php';
?>
<div id="alert"></div>
<div class="row-fluid">
<h3 class="header smaller lighter blue">Rekap Laporan Banjir</h3>
	<div class="table-header">		
	</div>

<form id="forms" method="post" action="ben/print_rekap_xls.php" class="form-horizontal">
<div class="control-group">
<label class="control-label" for="inputtgl">Dari Tanggal</label>
	<div class="controls" >								
		<input type="text" id="tgl" class="tanggal span3" name="tgl1" data-date-format="yyyy-mm-dd" />
		<i class="icon-calendar bigger-120"></i>
	</div>
</div>
<div class="control-group">
<label class="control-label" for="inputtgl">Sampai Tanggal</label>
	<div class="controls" >								
		<input type="text" id="tgl" class="tanggal span3" name="tgl2" data-date-format="yyyy-mm-dd" />
		<i class="icon-calendar bigger-120"></i>
	</div>
</div>
<div class="controls">
	<button type="submit" class="btn btn-primary"><i class="icon-download icon-white"></i><i></i>Download</button>
</div>
</form>
<script type="text/javascript">
	$(document).ready(function(){
		$(".chzn-select").chosen();
		$(".tanggal").datepicker({
				dateFormat: "yyyy-mm-dd",
	            changeMonth: true,
	            changeYear: true,
				yearRange: '1970:2050',
				autoclose: true,
				todayHighlight: true,
		});
	});
</script>
