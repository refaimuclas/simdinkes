<script type="text/javascript">
	$(document).ready(function(){
		$("#data").load("ben/data_ben.php");
		$("#id-breadcrumbs").html("List Bencana");
	});
	
	function tambahForm(){
		$("#form-nest").css({display:"block"});
		$.ajax({
			type:"GET",
			url:"ben/tambah_ben.php",
			data:null,
			beforeSend:function(){
				$("#form").html("<img src='assets/images/ajax-loader.gif' />");
			},
			success:function(data){
				$('#form').html(data);
			}
		});
		$('#form').show("slow");
	}

	function tambah(b1_id){
		$("#form-nest").css({display:"block"});
		$.ajax({
			type:"GET",
			url:"ben/tambah_b3.php",
			data:"b1_id="+b1_id,
			beforeSend:function(){
				$("#form").html("<img src='assets/images/ajax-loader.gif' />");
			},
			success:function(data){
				$('#form').html(data);
			}
		});
		$('#form').show("slow");
	}

	function Rekap(){
		$.ajax({
			type:"POST",
			url:"ben/print_rekap_xls.php",
			data:thisPost,
			beforeSend:function(){
				$("#form").html("<img src='assets/images/ajax-loader.gif' />");
			},
			success:function(data){
				$("#form").html(data)
			}
		});
	}

	function modal(b1_id){
		$('#form-nest').css({display:"block"});
		$.ajax({
			type:"GET",
			url:"ben/modal.php",
			data:"b1_id="+b1_id,
			beforeSend:function(){
				$("#form").html();
			},
			success:function(data){
				$('#form').html(data);
			}
		});
		$('#form').show("slow");
	}

	
	
	function submitForm(url){
		var thisPost = $("#forms").serialize();
		$.ajax({
			type:"POST",
			url:url,
			data:thisPost,
			beforeSend:function(){
				$("#form").html("<img src='assets/images/ajax-loader.gif' />");
				$("#data").html("<img src='assets/images/ajax-loader.gif' />");
			},
			success:function(data){
				$('#form').html(data);
				$("#data").load("ben/data_ben.php");
			}
		});
		return false;
	}
	
	function deleteData(b1_id,lokasi_bencana){
		var pilih = confirm('Hapus '+lokasi_bencana+' dari daftar ??');
		if(pilih==true){
				$.ajax({
					type:"GET",
					url:'ben/hapus_ben.php',
					data:"b1_id="+b1_id,
					beforeSend:function(){
						$("#data").html("<img src='assets/images/ajax-loader.gif' />");
					},
					success:function(data){
						$('#data').html(data);
						$("#alert").html("<div id='alert' class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button>Data berhasil di hapus</div>");						
					}
				});
		}
	}

	function deleteDataB2(b1_id,lokasi_bencana){
		var pilih = confirm('Hapus '+' FROM B2 Deskripsi Bencana = '+lokasi_bencana+' dari daftar ??');
		if(pilih==true){
				$.ajax({
					type:"GET",
					url:'ben/hapus_b2.php',
					data:"b1_id="+b1_id,
					beforeSend:function(){
						$("#data").html("<img src='assets/images/ajax-loader.gif' />");
					},
					success:function(data){
						$('#data').html(data);
						$("#alert").html("<div id='alert' class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>&times;</button>Data berhasil di hapus</div>");						
					}
				});
		}
	}
	
	function deleteDataB3(b3_id,b1_id){
		var pilih = confirm('Hapus List Diagnosa B3 dari daftar ??');
		if(pilih==true){
				$.ajax({
					type:"GET",
					url:'ben/hapus_b3.php',
					data:"b3_id="+b3_id,

					success:function(){
						$.ajax({
							type:"GET",
							url:'ben/modal.php',
							data:"b1_id="+b1_id,			
							success:function(data){
							  	$('#form').html(data);	
							}
						});					
					}
				});
				
		}
	}

	function editData(b1_id){
		$.ajax({
			type:"GET",
			url:'ben/edit_ben.php',
			data:"b1_id="+b1_id,
			beforeSend:function(){
				$("#form-nest").css({display:"block"});
				$("#form").html("<img src='assets/images/ajax-loader.gif' />");
			},
			success:function(data){
				$('#form').html(data);
			}
		});
		$('#form').fadeIn(3000);
	}

	function editDataB2(b1_id){
		$.ajax({
			type:"GET",
			url:'ben/tambah_b2.php',
			data:"b1_id="+b1_id,
			beforeSend:function(){
				$("#form-nest").css({display:"block"});
				$("#form").html("<img src='assets/images/ajax-loader.gif' />");
			},
			success:function(data){
				$('#form').html(data);
			}
		});
		$('#form').fadeIn(3000);
	}

	function editDataB3(b1_id){
		$.ajax({
			type:"GET",
			url:'ben/tambah_b3.php',
			data:"b1_id="+b1_id,
			beforeSend:function(){
				$("#form-nest").css({display:"block"});
				$("#form").html("<img src='assets/images/ajax-loader.gif' />");
			},
			success:function(data){
				$('#form').html(data);
			}
		});
		$('#form').fadeIn(3000);
	}

	function editB3(b3_id){
		$.ajax({
			type:"GET",
			url:'ben/edit_b3.php',
			data:"b3_id="+b3_id,
			beforeSend:function(){
				$("#form-nest").css({display:"block"});
				$("#form").html("<img src='assets/images/ajax-loader.gif' />");
			},
			success:function(data){
				$('#form').html(data);
			}
		});
		$('#form').fadeIn(3000);
	}

	function editB2(b1_id){
		$.ajax({
			type:"GET",
			url:'ben/edit_b2.php',
			data:"b1_id="+b1_id,
			beforeSend:function(){
				$("#form-nest").css({display:"block"});
				$("#form").html("<img src='assets/images/ajax-loader.gif' />");
			},
			success:function(data){
				$('#form').html(data);
			}
		});
		$('#form').fadeIn(3000);
	}


	
	
	
</script>


<div id="form-nest" class="row-fluid" style="display:none">
	<div id="form" class="span12 well">
		
	</div>
</div>

<div class="row-fluid">
	<div id="data" class="span12 well">
		<img src='assets/images/ajax-loader.gif' />
	</div>
</div>