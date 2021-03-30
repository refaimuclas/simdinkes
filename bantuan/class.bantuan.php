<?php

class bantuan
{
	private $db;
	
	function __construct($pdo)
	{
		$this->db = $pdo;
	}
	
	public function create($deskripsi,$qty,$satuan,$keterangan,$id_posko,$created_by)
	{
		try
		{
			$query = $this->db->prepare("INSERT INTO bantuan(deskripsi,qty,satuan,keterangan,id_posko,created_by) VALUES (:deskripsi, :qty, :satuan, :keterangan, :id_posko, :created_by)");			
			$query -> bindparam(":deskripsi",$deskripsi);
			$query -> bindparam(":qty",$qty);
			$query -> bindparam(":satuan",$satuan);
			$query -> bindparam(":keterangan",$keterangan);
			$query -> bindparam(":id_posko",$id_posko);
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
		$query = $this->db->prepare("SELECT * FROM bantuan where aktif = 'Y' ");	
		$query->execute();
		$row_count = $query->rowCount();
		echo $row_count;
	}

	public function count_not_aktif()
	{
		$query = $this->db->prepare("SELECT * FROM bantuan where aktif = 'N' ");	
		$query->execute();
		$row_count = $query->rowCount();
		echo $row_count;
	}

	public function getID($id)
	{
		$query = $this->db->prepare("SELECT * FROM bantuan WHERE id_bantuan=:id_bantuan");
		$query->execute(array(":id_bantuan"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}
	
	public function update($id_bantuan,$deskripsi,$qty,$satuan,$keterangan,$id_posko,$update_by)
	{
		try
		{
			$query=$this->db->prepare("UPDATE bantuan SET 	deskripsi		= :deskripsi,
															qty 			= :qty,
															satuan 			= :satuan,
															keterangan 		= :keterangan,
															id_posko		= :id_posko,
													   		update_by 		= :updated_by
													WHERE 	id_bantuan		= :id_bantuan ");
			$query -> bindparam(":deskripsi",$deskripsi);
			$query -> bindparam(":qty",$qty);
			$query -> bindparam(":satuan",$satuan);
			$query -> bindparam(":keterangan",$keterangan);
			$query -> bindparam(":id_posko",$id_posko);
			$query -> bindparam(":updated_by",$update_by);
			$query -> bindparam(":id_bantuan",$id_bantuan);
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
		$query = $this->db->prepare("DELETE FROM bantuan WHERE id_bantuan=:id_bantuan");
		$query->bindparam(":id_bantuan",$id);
		$query->execute();
		return true;
		/*
		}
		catch(PDOException $e)
		{
			echo "
			<div class='alert alert-error'>
			<button type='button' class='close' data-dismiss='alert'>&times;</button>
			Data masih di gunakan oleh username ( hapus / edit username yang masih menggunakan bantuan ini ....! )
			</div>";	
			return false;
		}
		*/
	}

	public function posko($query){
		$query = $this->db->prepare($query);
		$query->execute();
		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_posko]'>$row[alamat_posko]</option>";
		}
		
	}

	public function posko_1($query){
		$query = $this->db->prepare($query);
		$query->execute();
		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo $row['alamat_posko'];
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
                <td><?php print($row['deskripsi']); ?></td>
                <td><?php print($row['qty']); ?></td>
                <td><?php print($row['satuan']); ?></td>
                <td><?php print($row['keterangan']); ?></td>
                <td><?php print($row['alamat_posko']); ?></td>
                <td><div align="center">
                <?php echo "                
                <a href='javascript:void(0)' onclick=\"editData('$row[id_bantuan]')\" ><i class='icon-trash icon-pencil bigger-130'></i></i> </a>
                <a href='javascript:void(0)' onclick=\"deleteData('$row[id_bantuan]','$row[deskripsi]')\" ><i class='icon-trash icon-red bigger-130'></i></i> </a>
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
	                    "sSorting":[[2, "desc"]]
					});
				});
			</script><?php 
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
                	<td><div align="center" width="50px"><?php print($no); ?></div></td>
	                <td><?php print($row['deskripsi']); ?></td>
	                <td><?php print($row['qty']); ?></td>
	                <td><?php print($row['satuan']); ?></td>
	                <td><?php print($row['keterangan']); ?></td>
	                <td><?php print($row['alamat_posko']); ?></td>
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
