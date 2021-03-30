<?php

class b3
{
	private $db;
	
	function __construct($pdo)
	{
		$this->db = $pdo;
	}

	public function createB3($b1_id,$jenis_rawat,$id_diagnosa,$jml_l,$jml_p,$jml_0,$jml_5,$created_by)
	{
		try
		{
			$query = $this->db->prepare("INSERT INTO b3(b1_id,id_diagnosa,jenis_rawat,jml_l,jml_p,jml_0,jml_5,created_by) VALUES (:b1_id, :id_diagnosa, :jenis_rawat, :jml_l, :jml_p, :jml_0, :jml_5, :created_by)");
			$query->bindparam(":b1_id",$b1_id);
			$query->bindparam(":id_diagnosa",$id_diagnosa);
			$query->bindparam(":jenis_rawat",$jenis_rawat);
			$query->bindparam(":jml_l",$jml_l);
			$query->bindparam(":jml_p",$jml_p);
			$query->bindparam(":jml_0",$jml_0);
			$query->bindparam(":jml_5",$jml_5);
			$query->bindparam(":created_by",$created_by);
			$query->execute();
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}
	}

	public function getID($id)
	{
		$query = $this->db->prepare("SELECT * FROM v_edit_b1 WHERE b1_id = :b1_id ");
		$query->execute(array(":b1_id"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}

	public function getB3($id)
	{
		$query = $this->db->prepare("SELECT * FROM v_b3 WHERE b1_id = :b1_id ");
		$query->execute(array(":b1_id"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}

	public function getEditB3($id)
	{
		$query = $this->db->prepare("SELECT * FROM v_edit_b3 WHERE b3_id = :b3_id ");
		$query->execute(array(":b3_id"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}

	public function getEditB3B1($id)
	{
		$query = $this->db->prepare("SELECT * FROM v_edit_b3 WHERE b1_id = :b1_id ");
		$query->execute(array(":b1_id"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}

	
	
	public function updateB3($b3_id,$b1_id,$jenis_rawat,$id_diagnosa,$jml_l,$jml_p,$jml_0,$jml_5,$update_by)
	{
		try
		{
			$query=$this->db->prepare("UPDATE b3 	SET 	b1_id 		= :b1_id,
															jenis_rawat = :jenis_rawat,
															id_diagnosa = :id_diagnosa,
															jml_l		= :jml_l,
															jml_p 		= :jml_p,
															jml_0 		= :jml_0,
															jml_5 		= :jml_5,
															update_by 	= :update_by
													WHERE 	b3_id		= :b3_id ");
			$query->bindparam(":b1_id",$b1_id);
			$query->bindparam(":b3_id",$b3_id);
			$query->bindparam(":jenis_rawat",$jenis_rawat);
			$query->bindparam(":id_diagnosa",$id_diagnosa);
			$query->bindparam(":jml_l",$jml_l);
			$query->bindparam(":jml_p",$jml_p);
			$query->bindparam(":jml_0",$jml_0);
			$query->bindparam(":jml_5",$jml_5);
			$query->bindparam(":update_by",$update_by);
			$query->execute();			
			return true;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
	}
	
	

	public function deleteB3($b3_id)
	{
		$query = $this->db->prepare("DELETE FROM b3 WHERE b3_id = :b3_id ");
		$query->bindparam(":b3_id",$b3_id);
		$query->execute();
		return true;
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
	                <td><?php print($row['diagnosa']); ?></td>
	                <td><?php print($row['jenis_rawat']); ?></td>
	                <td><div align="center"><?php print($row['jml_l']); ?></div></td>
	                <td><div align="center"><?php print($row['jml_p']); ?></div></td>
	                <td><div align="center"><?php print($row['jml_0']); ?></div></td>
	                <td><div align="center"><?php print($row['jml_5']); ?></div></td>
	                <td><div align="center">
	                <?php echo "                
	                <a href='javascript:void(0)' onclick=\"editB3('$row[b3_id]')\" ><i class='icon-pencil'></i></a>
	                <a href='javascript:void(0)' onclick=\"deleteDataB3('$row[b3_id]','$row[b1_id]')\" ><i class='icon-trash icon-red bigger-130'></i></i> </a>
	                ";?>
	                </div>
                </tr>
                <?php
                $no++;
			} ?>
			<script type="text/javascript" charset="utf-8">
				$(document).ready(function() {
					$('#tabeldata').dataTable( {
						"sPaginationType": "bootstrap",
	                    "sSorting":[[2, "desc"]],
	                    "iDisplayLength": 4,
	                    "aLengthMenu": [4, 10, 25, 50, 100 ],
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
                	<td><div class="center"></div></td> 
	                <td><?php ?></td>
	                <td><?php ?></td>
	                <td><?php ?></td>
	                <td><?php ?></td>
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

	public function b3($query)
	{
		$query = $this->db->prepare($query);
		$query->execute();
		$no = 1;
		$total = 0;
		$total1 = 0;
		$total3 = 0;
		$total4 = 0;
		$rt=0;
		$rt1=0;
		if($query->rowCount()>0)
		{
			while($row=$query->fetch(PDO::FETCH_ASSOC))
			{
				$jml1=$row['jml_0'];
				$jml2=$row['jml_5'];
				$jml3=$jml1+$jml2;
				$jml4=$row['jml_l'];
				$jml5=$row['jml_p'];
				$jml6=$jml4+$jml5;
				?>
                <tr>
                	<td><div align="center"><?php print($no);?></div></td>
                	<td><?php print($row['diagnosa']); ?></td>
					<td><div align="center"><?php print($row['jml_0']); ?></div></td>
					<td><div align="center"><?php print($row['jml_5']); ?></div></td>
					<td><div align="center"><?php print($jml3); ?></div></td>
					<td><div align="center"><?php print($row['jml_l']); ?></div></td>
					<td><div align="center"><?php print($row['jml_p']); ?></div></td>
					<td><div align="center"><?php print($jml6); ?></div></td>
                </tr>
                <?php
                $no++;
				$total += $row['jml_0'];
				$total1 += $row['jml_5'];
				$rt +=$jml3;
				$total3 += $row['jml_l'];
				$total4 += $row['jml_p'];
				$rt1 +=$jml6;
				
			} ?>
			 <tr>
				<td colspan="2"><div align="right">Jumlah</div></td>
				<td><div align="center"><?php echo $total; ?></div></td>
				<td><div align="center"><?php echo $total1; ?></div></td>
				<td><div align="center"><?php echo $rt;   ?></div></td>
				<td><div align="center"><?php echo $total3; ?></div></td>
				<td><div align="center"><?php echo $total4; ?></div></td>
				<td><div align="center"><?php echo $rt1;  ?></div></td>
			  </tr>
			 <?php
		}
		else
		{
			?>
             <tr>
				<td></td>
           		<td>Belum ada Data</td>
            </tr>
            <?php
		}		
	}
	
	public function b31($query)
	{
		$query = $this->db->prepare($query);
		$query->execute();
		$no = 1;
		$total = 0;
		$total1 = 0;
		$total3 = 0;
		$total4 = 0;
		$rt=0;
		$rt1=0;
		if($query->rowCount()>0)
		{
			while($row=$query->fetch(PDO::FETCH_ASSOC))
			{
				$jml1=$row['jml_0'];
				$jml2=$row['jml_5'];
				$jml3=$jml1+$jml2;
				$jml4=$row['jml_l'];
				$jml5=$row['jml_p'];
				$jml6=$jml4+$jml5;
				?>
                <tr>
                	<td><div align="center"><?php print($no);?></div></td>
                	<td><?php print($row['diagnosa']); ?></td>
					<td><div align="center"><?php print($row['jml_0']); ?></div></td>
					<td><div align="center"><?php print($row['jml_5']); ?></div></td>
					<td><div align="center"><?php print($jml3); ?></div></td>
					<td><div align="center"><?php print($row['jml_l']); ?></div></td>
					<td><div align="center"><?php print($row['jml_p']); ?></div></td>
					<td><div align="center"><?php print($jml6); ?></div></td>
                </tr>
                <?php
                $no++;
				$total += $row['jml_0'];
				$total1 += $row['jml_5'];
				$rt +=$jml3;
				$total3 += $row['jml_l'];
				$total4 += $row['jml_p'];
				$rt1 +=$jml6;
				
			} ?>
			 <tr>
				<td colspan="2"><div align="right">Jumlah</div></td>
				<td><div align="center"><?php echo $total; ?></div></td>
				<td><div align="center"><?php echo $total1; ?></div></td>
				<td><div align="center"><?php echo $rt;   ?></div></td>
				<td><div align="center"><?php echo $total3; ?></div></td>
				<td><div align="center"><?php echo $total4; ?></div></td>
				<td><div align="center"><?php echo $rt1;  ?></div></td>
			  </tr>
			 <?php
		}
		else
		{
			?>
            <tr>
				<td></td>
           		<td>Belum ada Data</td>
            </tr>
            <?php
		}		
	}

	public function rekap($query)
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
                	<td><div align="center"><?php print($no);?></div></td>
				    <td><?php print(tgl_indo($row['tgl'])); ?></td>
				    <td><?php print($row['nama_kec']); ?></td>
				    <td><?php print($row['puskesmas5']); ?></td>
				    <td><?php print($row['nama_kel']); ?></td>
				    <td><?php print($row['lokasi_bencana']); ?></td>
				    <td><?php print($row['ketinggian_air']); ?></td>
				    <td><?php print($row['jumlah_pusling']); ?></td>
				    <td><?php print(count($row['id_posko'])); ?></td>
				    <td><?php print($row['alamat_posko']); ?></td>
				    <td>&nbsp;</td>
				    <td><div align="center"><?php print($row['jumlah_meninggal']); ?></div></td>
				    <td><div align="center"><?php print($row['jumlah_hilang']); ?></div></td>
				    <td><div align="center"><?php print($row['jumlah_luka_berat']); ?></div></td>
				    <td><div align="center"><?php print($row['jumlah_luka_ringan']); ?></div></td>
				    <td><div align="center"><?php print($row['jumlah_kk_1']); ?></div></td>
				    <td><div align="center"><?php print($row['jumlah_penduduk_terancam']); ?></div></td>
				    <td><div align="center"><?php print($row['ibu_hamil']); ?></div></td>
				    <td><div align="center"><?php print($row['ibu_menyusui']); ?></div></td>
				    <td><div align="center"><?php print($row['bayi']); ?></div></td>
				    <td><div align="center"><?php print($row['balita']); ?></div></td>
				    <td><div align="center"><?php print($row['lansia']); ?></div></td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td>&nbsp;</td>
				    <td><?php print($row['lokasi_pengungsian_1'].", ".$row['lokasi_pengungsian_2'].", ".$row['lokasi_pengungsian_3']); ?></td>                	
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
           		<td>Belum ada Data</td>
            </tr>
            <?php
		}		
	}
	
}
