<?php

class posko
{
	private $db;
	
	function __construct($pdo)
	{
		$this->db = $pdo;
	}
	
	public function create($alamat_posko,$keterangan,$aktif,$created_by)
	{
		try
		{
			$query = $this->db->prepare("INSERT INTO posko(alamat_posko,keterangan,aktif,created_by) VALUES (:alamat_posko, :keterangan, :aktif, :created_by)");			
			$query -> bindparam(":alamat_posko",$alamat_posko);
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
		$query = $this->db->prepare("SELECT * FROM posko where aktif = 'Y' ");	
		$query->execute();
		$row_count = $query->rowCount();
		echo $row_count;
	}

	public function count_not_aktif()
	{
		$query = $this->db->prepare("SELECT * FROM posko where aktif = 'N' ");	
		$query->execute();
		$row_count = $query->rowCount();
		echo $row_count;
	}

	public function getID($id)
	{
		$query = $this->db->prepare("SELECT * FROM posko WHERE id_posko=:id_posko");
		$query->execute(array(":id_posko"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	
	public function update($id_posko,$alamat_posko,$keterangan,$aktif,$update_by)
	{
		try
		{
			$query=$this->db->prepare("UPDATE posko SET 	alamat_posko	= :alamat_posko,
															keterangan 		= :keterangan,
															aktif 			= :aktif,
													   		update_by 		= :updated_by
													WHERE 	id_posko		= :id_posko ");
			$query -> bindparam(":alamat_posko",$alamat_posko);
			$query -> bindparam(":keterangan",$keterangan);
			$query -> bindparam(":aktif",$aktif);
			$query -> bindparam(":updated_by",$update_by);
			$query -> bindparam(":id_posko",$id_posko);
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
		$query = $this->db->prepare("DELETE FROM posko WHERE id_posko=:id_posko");
		$query->bindparam(":id_posko",$id);
		$query->execute();
		return true;
		/*
		}
		catch(PDOException $e)
		{
			echo "
			<div class='alert alert-error'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Data masih di gunakan oleh username ( hapus / edit username yang masih menggunakan posko ini ....! )
			</div>";	
			return false;
		}
		*/
	}

	public function select($query){
		$query = $this->db->prepare($query);
		$query->execute();
		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_posko]'>$row[alamat_posko]</option>";
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
                <td><div align="center" width="50px"><?php print($no); ?></div></td>
                <td><div align="center" width="50px"><?php print($row['id_posko']); ?></div></td>
                <td><?php print($row['alamat_posko']); ?></td>
                 <td><?php print($row['keterangan']); ?></td>
                <td><div align="center"><?php print($row['aktif']); ?></div></td>
                <td><div align="center">
                <?php echo "                
                <a href='javascript:void(0)' onclick=\"editData('$row[id_posko]')\" ><i class='icon-trash icon-pencil bigger-130'></i></i> </a>
                <a href='javascript:void(0)' onclick=\"deleteData('$row[id_posko]','$row[alamat_posko]')\" ><i class='icon-trash icon-red bigger-130'></i></i> </a>
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
	                <td align="center"><div align="center" width="50px"><?php print($row['id_posko']); ?></div></td>
	                <td><?php print($row['alamat_posko']); ?></td>
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
