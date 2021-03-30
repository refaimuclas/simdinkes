 <?php
  session_start();
  include_once '../config/koneksi.php';
  include_once '../config/fungsi_indotgl.php';
  include_once '../ben/class.b3.php';
  $b3 = new b3($pdo);
  if(isset($_GET['b1_id']))
    {
      $id = $_GET['b1_id'];
      extract($b3->getID($id));  
    }else{
      $id = $_POST['b1_id'];
      extract($b3->getID($id));
    }

  if(!empty($_POST['b1_id'])){
    $b1_id          = $_POST['b1_id'];
    $jenis_rawat    = $_POST['jenis_rawat'];
    $id_diagnosa    = $_POST['id_diagnosa'];
    $jml_l          = $_POST['jml_l'];
    $jml_p          = $_POST['jml_p'];
    $jml_0          = $_POST['jml_0'];
    $jml_5          = $_POST['jml_5'];
    $created_by     = $_SESSION['s_user'];
    if($b3->createB3($b1_id,$jenis_rawat,$id_diagnosa,$jml_l,$jml_p,$jml_0,$jml_5,$created_by)){
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
    <div class="modal-header">
        <button type="button" class="close" id="close1" data-dismiss="modal">&times;</button>
        <h4 class="blue bigger">Tambah Diagnosa Form B3</h4>
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
        <div class="control-group">
        <label class="control-label" for="bencana_id" >ID B1</label>
          <div class="controls">
            <input type="text" id="b1_id" name="b1_id" value="<?php echo $b1_id; ?>" readonly="readonly " />
          </div>
        </div>
        <div class="control-group">
        <label class="control-label">Jenis Rawat</label>
          <div class="controls">
            <label>
              <input name="jenis_rawat" type="radio" value="RJ" checked />
              <span class="lbl"> Rawat Jalan </span>
              <input name="jenis_rawat" type="radio" value="RI" />
              <span class="lbl"> Rawat Inap</span>
            </label>
          </div>
        </div>
        <div class="control-group">
          <label class="control-label" for="id_diagnosa" >Diagnosa</label>
          <div class="controls">
          <select name="id_diagnosa" id="id_diagnosa" required class="chzn-select" data-placeholder="Pilih Diagnosa.............">
            <option value=""></option>            
            <?php            
              require_once '../master_ref/diagnosa/class.diagnosa.php';
              $diag = new diagnosa($pdo);          
              $query = "SELECT * FROM diagnosa where aktif='Y' ";
              $diag->select($query);  
            ?>
          </select>
          </div>
        </div>
        <div class="control-group">
              <label class="control-label" for="input">Jumlah Penderita</label>
              <div class="controls">
                <input type="text" id="spinner1" name="jml_l" /> Laki - Laki <br />
                <input type="text" id="spinner2" name="jml_p" /> Perempuan <br />
                <input type="text" id="spinner3" name="jml_0" /> Umur 0-5 Tahun<br />
                <input type="text" id="spinner4" name="jml_5" /> Umur >= 5 Tahun <br />
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

    $(".chzn-select").chosen();
    $('#spinner1').ace_spinner({value:0,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
    .closest('.ace-spinner')
    .on('changed.fu.spinbox', function(){
      //alert($('#spinner1').val())
    });
    $('#spinner2').ace_spinner({value:0,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
    .closest('.ace-spinner')
    .on('changed.fu.spinbox', function(){
      //alert($('#spinner1').val())
    });
    $('#spinner3').ace_spinner({value:0,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
    .closest('.ace-spinner')
    .on('changed.fu.spinbox', function(){
      //alert($('#spinner1').val())
    });
    $('#spinner4').ace_spinner({value:0,min:0,max:200,step:1, btn_up_class:'btn-info' , btn_down_class:'btn-info'})
    .closest('.ace-spinner')
    .on('changed.fu.spinbox', function(){
      //alert($('#spinner1').val())
    });
  });
</script>