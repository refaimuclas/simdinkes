<?php

class diagnosa
{
	private $db;
	
	function __construct($pdo)
	{
		$this->db = $pdo;
	}
	
	public function create($diagnosa,$keterangan,$aktif,$created_by)
	{
		try
		{
			$query = $this->db->prepare("INSERT INTO diagnosa(diagnosa,keterangan,aktif,created_by) VALUES (:diagnosa, :keterangan, :aktif, :created_by)");			
			$query -> bindparam(":diagnosa",$diagnosa);
			$query -> bindparam(":keterangan",$keterangan);
			$query -> bindparam(":aktif",$aktif);
			$query -> bindparam(":created_by",$created_by);
			$query->execute();
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
	}
	
	public function count_aktif()
	{
		$query = $this->db->prepare("SELECT * FROM diagnosa where aktif = 'Y' ");	
		$query->execute();
		$row_count = $query->rowCount();
		echo $row_count;
	}

	public function count_not_aktif()
	{
		$query = $this->db->prepare("SELECT * FROM diagnosa where aktif = 'N' ");	
		$query->execute();
		$row_count = $query->rowCount();
		echo $row_count;
	}

	public function getID($id)
	{
		$query = $this->db->prepare("SELECT * FROM diagnosa WHERE id_diagnosa=:id_diagnosa");
		$query->execute(array(":id_diagnosa"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	
	public function update($id_diagnosa,$diagnosa,$keterangan,$aktif,$update_by)
	{
		try
		{
			$query=$this->db->prepare("UPDATE diagnosa SET 	diagnosa 		= :diagnosa,
															keterangan 		= :keterangan,
															aktif 			= :aktif,
													   		update_by 		= :updated_by
													WHERE 	id_diagnosa		= :id_diagnosa ");
			$query -> bindparam(":diagnosa",$diagnosa);
			$query -> bindparam(":keterangan",$keterangan);
			$query -> bindparam(":aktif",$aktif);
			$query -> bindparam(":updated_by",$update_by);
			$query -> bindparam(":id_diagnosa",$id_diagnosa);
			$query -> execute();			
			return true;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
	}
	
	public function delete($id)
	{
		//try
		//{
		// code untuk hapus
		$query = $this->db->prepare("DELETE FROM diagnosa WHERE id_diagnosa=:id_diagnosa");
		$query->bindparam(":id_diagnosa",$id);
		$query->execute();
		return true;
		/*
		}
		catch(PDOException $e)
		{
			echo "
			<div class='alert alert-error'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Data masih di gunakan oleh username ( hapus / edit username yang masih menggunakan diagnosa ini ....! )
			</div>";	
			return false;
		}
		*/
	}

	public function select($query){
		$query = $this->db->prepare($query);
		$query->execute();
		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_diagnosa]'>$row[diagnosa]</option>";
		}
		
	}
	
	public function view($query)
	{
		$query = $this->db->prepare($query);
		$query->execute();
		$no = 1;
		if($query->rowCount()>0)
		{
			while($row=$query->fetch(PDO::FETCH_ASSOC))
			{
				?>
                <tr>
                <!--<td><div align="center" width="50px"><?php print($no); ?></div></td>-->
                <!--<td><div align="center" width="50px"><?php #print($row['id_diagnosa']); ?></div></td>-->
                <td><?php print($row['diagnosa']); ?></td>
                 <td><?php print($row['keterangan']); ?></td>
                <td><div align="center"><?php print($row['aktif']); ?></div></td>
                <td><div align="center">
                <?php echo "                
                <a href='javascript:void(0)' onclick=\"editData('$row[id_diagnosa]')\" ><i class='icon-trash icon-pencil bigger-130'></i></i> </a>
                <a href='javascript:void(0)' onclick=\"deleteData('$row[id_diagnosa]','$row[diagnosa]')\" ><i class='icon-trash icon-red bigger-130'></i></i> </a>
                ";?>
                </div>
                </td>
                </tr>
                <?php
                $no++;
			} ?>
			<script type="text/javascript" charset="utf-8">
				$(document).ready(function() {
					$('#tabeldata').dataTable( {
						"sPaginationType": "bootstrap",
	                    "sSorting":[[2, "desc"]],
	                    "iDisplayLength": 5,
	                    "aLengthMenu": [5, 10, 25, 50, 100 ],
					});
				});
			</script><?php 
		}
		else
		{
			?>
            <tr>
           		<td></td>
           		<td></td>
           		<td><strong>Tidak ada data...!!</strong></td>
            </tr>
            <?php
		}		
	}
	
	public function Prin($query)
	{
		$query = $this->db->prepare($query);
		$query->execute();
		$no = 1;
		if($query->rowCount()>0)
		{
			while($row=$query->fetch(PDO::FETCH_ASSOC))
			{
				?>
                <tr>
                	<td align="center"><div align="center" width="50px"><?php print($no); ?></div></td>
	                <!--<td align="center"><div align="center" width="50px"><?php #print($row['id_diagnosa']); ?></div></td>-->
	                <td><?php print($row['diagnosa']); ?></td>
	                <td><?php print($row['keterangan']); ?></td>
	                <td align="center"><div align="center" width="50px"><?php print($row['aktif']); ?></div></td>
                </tr>
                <?php
                $no++;
			} 
		}
		else
		{
			?>
            <tr>
           		<td></td>
           		<td><strong>Tidak ada data...!!</strong></td>
            </tr>
            <?php
		}		
	}
	
}
