<?php

class ben
{
	private $db;
	
	function __construct($pdo)
	{
		$this->db = $pdo;
	}

	public function createB2($b1_id,$bayi,$balita,$ibu_hamil,$ibu_menyusui,$lansia,$rujuk1,$rujuk2,$rujuk3,$rujuk4,$rujuk5,$jml_rujuk1,$jml_rujuk2,$jml_rujuk3,$jml_rujuk4,$jml_rujuk5,$sumur_gali,$spt,$pma,$pah,$perpipaan,$dll1,$dll2,$jml_dll1,$jml_dll2,$jamban_keluarga,$mck,$jml_dll3,$dll3,$jenis_bgn,$kap_bgn,$kap_air,$sarana_mck,$tmp_smp,$sarana_spal,$penerangan,$obat_hbs,$alkes,$kaporit,$pac,$aquatab,$kantong_sampah,$ketersediaan_pangan,$repellent_lalat,$transfort_pelayanan,$alat_komunikasi,$sarana_listrik,$bantuan1,$bantuan2,$bantuan3,$bantuan4,$bantuan5,$rencana1,$rencana2,$rencana3,$rencana4,$rencana5,$kepala_dinas,$nip1,$ketinggian_air)
	{
		try
		{
			$query = $this->db->prepare("INSERT INTO b2(b1_id,bayi,balita,ibu_hamil,ibu_menyusui,lansia,rujuk1,rujuk2,rujuk3,rujuk4,rujuk5,jml_rujuk1,jml_rujuk2,jml_rujuk3,jml_rujuk4,jml_rujuk5,sumur_gali,spt,pma,pah,perpipaan,dll1,dll2,jml_dll1,jml_dll2,jamban_keluarga,mck,jml_dll3,dll3,jenis_bgn,kap_bgn,kap_air,sarana_mck,tmp_smp,sarana_spal,penerangan,obat_hbs,alkes,kaporit,pac,aquatab,kantong_sampah,ketersediaan_pangan,repellent_lalat,transfort_pelayanan,alat_komunikasi,sarana_listrik,bantuan1,bantuan2,bantuan3,bantuan4,bantuan5,rencana1,rencana2,rencana3,rencana4,rencana5,kepala_dinas,nip1,ketinggian_air) VALUES (:b1_id, :bayi, :balita, :ibu_hamil, :ibu_menyusui, :lansia, :rujuk1, :rujuk2, :rujuk3, :rujuk4, :rujuk5, :jml_rujuk1, :jml_rujuk2, :jml_rujuk3, :jml_rujuk4, :jml_rujuk5, :sumur_gali, :spt, :pma, :pah, :perpipaan, :dll1, :dll2, :jml_dll1, :jml_dll2, :jamban_keluarga, :mck, :jml_dll3, :dll3, :jenis_bgn, :kap_bgn, :kap_air, :sarana_mck, :tmp_smp, :sarana_spal, :penerangan, :obat_hbs, :alkes, :kaporit, :pac, :aquatab, :kantong_sampah, :ketersediaan_pangan, :repellent_lalat, :transfort_pelayanan, :alat_komunikasi, :sarana_listrik, :bantuan1, :bantuan2, :bantuan3, :bantuan4, :bantuan5, :rencana1, :rencana2, :rencana3, :rencana4, :rencana5, :kepala_dinas, :nip1, :ketinggian_air )");
			$query->bindparam("b1_id",$b1_id);
			$query->bindparam("bayi",$bayi);
			$query->bindparam("balita",$balita);
			$query->bindparam("ibu_hamil",$ibu_hamil);
			$query->bindparam("ibu_menyusui",$ibu_menyusui);
			$query->bindparam("lansia",$lansia);
			$query->bindparam("rujuk1",$rujuk1);
			$query->bindparam("rujuk2",$rujuk2);
			$query->bindparam("rujuk3",$rujuk3);
			$query->bindparam("rujuk4",$rujuk4);
			$query->bindparam("rujuk5",$rujuk5);
			$query->bindparam("jml_rujuk1",$jml_rujuk1);
			$query->bindparam("jml_rujuk2",$jml_rujuk2);
			$query->bindparam("jml_rujuk3",$jml_rujuk3);
			$query->bindparam("jml_rujuk4",$jml_rujuk4);
			$query->bindparam("jml_rujuk5",$jml_rujuk5);
			$query->bindparam("sumur_gali",$sumur_gali);
			$query->bindparam("spt",$spt);
			$query->bindparam("pma",$pma);
			$query->bindparam("pah",$pah);
			$query->bindparam("perpipaan",$perpipaan);
			$query->bindparam("dll1",$dll1);
			$query->bindparam("dll2",$dll2);
			$query->bindparam("jml_dll1",$jml_dll1);
			$query->bindparam("jml_dll2",$jml_dll2);
			$query->bindparam("jamban_keluarga",$jamban_keluarga);
			$query->bindparam("mck",$mck);
			$query->bindparam("jml_dll3",$jml_dll3);
			$query->bindparam("dll3",$dll3);
			$query->bindparam("jenis_bgn",$jenis_bgn);
			$query->bindparam("kap_bgn",$kap_bgn);
			$query->bindparam("kap_air",$kap_air);
			$query->bindparam("sarana_mck",$sarana_mck);
			$query->bindparam("tmp_smp",$tmp_smp);
			$query->bindparam("sarana_spal",$sarana_spal);
			$query->bindparam("penerangan",$penerangan);
			$query->bindparam("obat_hbs",$obat_hbs);
			$query->bindparam("alkes",$alkes);
			$query->bindparam("kaporit",$kaporit);
			$query->bindparam("pac",$pac);
			$query->bindparam("aquatab",$aquatab);
			$query->bindparam("kantong_sampah",$kantong_sampah);
			$query->bindparam("ketersediaan_pangan",$ketersediaan_pangan);
			$query->bindparam("repellent_lalat",$repellent_lalat);
			$query->bindparam("transfort_pelayanan",$transfort_pelayanan);
			$query->bindparam("alat_komunikasi",$alat_komunikasi);
			$query->bindparam("sarana_listrik",$sarana_listrik);
			$query->bindparam("bantuan1",$bantuan1);
			$query->bindparam("bantuan2",$bantuan2);
			$query->bindparam("bantuan3",$bantuan3);
			$query->bindparam("bantuan4",$bantuan4);
			$query->bindparam("bantuan5",$bantuan5);
			$query->bindparam("rencana1",$rencana1);
			$query->bindparam("rencana2",$rencana2);			
			$query->bindparam("rencana3",$rencana3);
			$query->bindparam("rencana4",$rencana4);
			$query->bindparam("rencana5",$rencana5);
			$query->bindparam("kepala_dinas",$kepala_dinas);
			$query->bindparam("nip1",$nip1);
			$query->bindparam("ketinggian_air",$ketinggian_air);
			$query->execute();
			return true;
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();
			return false;
		}
	}
	
	public function create($deskripsi_bencana,$lokasi_bencana,$propinsi,$kabupaten,$kecamatan,$kelurahan,$letak_geografi,$hari,$tgl,$jam,$jumlah_meninggal,$jumlah_hilang,$jumlah_luka_berat,$jumlah_luka_ringan,$jumlah_penduduk_terancam,$jumlah_pengungsi,$lokasi_pengungsian_1,$lokasi_pengungsian_2,$lokasi_pengungsian_3,$akses_kelokasi,$jalur_komunikasi,$keadaan_listrik,$rs,$puskesmas,$pustu,$gudang_farmasi,$polindes,$rs1,$puskesmas1,$pustu1,$gudang_farmasi1,$polindes1,$sumber_air,$upaya_dilakukan_1,$upaya_dilakukan_2,$upaya_dilakukan_3,$upaya_dilakukan_4,$nama_pelapor,$nip,$jumlah_kk_1,$jumlah_kk_2,$file_name1,$file_name2,$file_name3,$file_name4,$id_posko,$created_by,$puskesmas5,$jumlah_pusling)
	{
		try
		{
			$query = $this->db->prepare("INSERT INTO b1(deskripsi_bencana,lokasi_bencana,provinsi,kabupaten,id_kec,id_kel,letak_geografi,hari,tgl,jam,jumlah_meninggal,jumlah_hilang,jumlah_luka_berat,jumlah_luka_ringan,jumlah_penduduk_terancam,jumlah_pengungsi,lokasi_pengungsian_1,lokasi_pengungsian_2,lokasi_pengungsian_3,akses_kelokasi,jalur_komunikasi,keadaan_listrik,rs,puskesmas,pustu,gudang_farmasi,polindes,rs1,puskesmas1,pustu1,gudang_farmasi1,polindes1,sumber_air,upaya_dilakukan_1,upaya_dilakukan_2,upaya_dilakukan_3,upaya_dilakukan_4,nama_pelapor,nip,jumlah_kk_1,jumlah_kk_2,file_name1,file_name2,file_name3,file_name4,id_posko,created_by,puskesmas5,jumlah_pusling) VALUES(:deskripsi_bencana, :lokasi_bencana, :propinsi, :kabupaten, :kecamatan, :kelurahan, :letak_geografi, :hari, :tgl, :jam, :jumlah_meninggal, :jumlah_hilang, :jumlah_luka_berat, :jumlah_luka_ringan, :jumlah_penduduk_terancam, :jumlah_pengungsi, :lokasi_pengungsian_1, :lokasi_pengungsian_2, :lokasi_pengungsian_3, :akses_kelokasi, :jalur_komunikasi, :keadaan_listrik, :rs, :puskesmas, :pustu, :gudang_farmasi, :polindes, :rs1, :puskesmas1, :pustu1, :gudang_farmasi1, :polindes1, :sumber_air, :upaya_dilakukan_1, :upaya_dilakukan_2, :upaya_dilakukan_3, :upaya_dilakukan_4, :nama_pelapor, :nip, :jumlah_kk_1, :jumlah_kk_2, :file_name1, :file_name2, :file_name3, :file_name4, :id_posko, :created_by, :puskesmas5, :jumlah_pusling)");
			$query->bindparam(":deskripsi_bencana",$deskripsi_bencana);
			$query->bindparam(":lokasi_bencana",$lokasi_bencana);
			$query->bindparam(":propinsi",$propinsi);
			$query->bindparam(":kabupaten",$kabupaten);
			$query->bindparam(":kecamatan",$kecamatan);
			$query->bindparam(":kelurahan",$kelurahan);
			$query->bindparam(":letak_geografi",$letak_geografi);
			$query->bindparam(":hari",$hari);
			$query->bindparam(":tgl",$tgl);
			$query->bindparam(":jam",$jam);
			$query->bindparam(":jumlah_meninggal",$jumlah_meninggal);
			$query->bindparam(":jumlah_hilang",$jumlah_hilang);
			$query->bindparam(":jumlah_luka_berat",$jumlah_luka_berat);
			$query->bindparam(":jumlah_luka_ringan",$jumlah_luka_ringan);
			$query->bindparam(":jumlah_penduduk_terancam",$jumlah_penduduk_terancam);
			$query->bindparam(":jumlah_pengungsi",$jumlah_pengungsi);
			$query->bindparam(":lokasi_pengungsian_1",$lokasi_pengungsian_1);
			$query->bindparam(":lokasi_pengungsian_2",$lokasi_pengungsian_2);
			$query->bindparam(":lokasi_pengungsian_3",$lokasi_pengungsian_3);
			$query->bindparam(":akses_kelokasi",$akses_kelokasi);
			$query->bindparam(":jalur_komunikasi",$jalur_komunikasi);
			$query->bindparam(":keadaan_listrik",$keadaan_listrik);
			$query->bindparam(":rs",$rs);
			$query->bindparam(":puskesmas",$puskesmas);
			$query->bindparam(":pustu",$pustu);
			$query->bindparam(":gudang_farmasi",$gudang_farmasi);
			$query->bindparam(":polindes",$polindes);
			$query->bindparam(":rs1",$rs1);
			$query->bindparam(":puskesmas1",$puskesmas1);
			$query->bindparam(":pustu1",$pustu1);
			$query->bindparam(":gudang_farmasi1",$gudang_farmasi1);
			$query->bindparam(":polindes1",$polindes1);
			$query->bindparam(":sumber_air",$sumber_air);
			$query->bindparam(":upaya_dilakukan_1",$upaya_dilakukan_1);
			$query->bindparam(":upaya_dilakukan_2",$upaya_dilakukan_2);
			$query->bindparam(":upaya_dilakukan_3",$upaya_dilakukan_3);
			$query->bindparam(":upaya_dilakukan_4",$upaya_dilakukan_4);
			$query->bindparam(":nama_pelapor",$nama_pelapor);
			$query->bindparam(":nip",$nip);
			$query->bindparam(":jumlah_kk_1",$jumlah_kk_1);
			$query->bindparam(":jumlah_kk_2",$jumlah_kk_2);
			$query->bindparam(":file_name1",$file_name1);
			$query->bindparam(":file_name2",$file_name2);
			$query->bindparam(":file_name3",$file_name3);
			$query->bindparam(":file_name4",$file_name3);
			$query->bindparam(":id_posko",$id_posko);
			$query->bindparam(":created_by",$created_by);
			$query->bindparam(":puskesmas5",$puskesmas5);
			$query->bindparam(":jumlah_pusling",$jumlah_pusling);
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
		$query = $this->db->prepare("SELECT * FROM ben where aktif = 'Y' ");	
		$query->execute();
		$row_count = $query->rowCount();
		echo $row_count;
	}

	public function kecamatan(){
		$query = $this->db->prepare(" SELECT * FROM wilayah_kecamatan WHERE id_kab = 3603 ORDER BY nama_kec ");
		$query->execute();
		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_kec]'>$row[nama_kec]</option>";
		}
		
	}

	public function kelurahan($query){
		$query = $this->db->prepare($query);
		$query->execute();
		echo "<option>-- Pilih Kelurahan --</option>";
		while($row=$query->fetch(PDO::FETCH_ASSOC)){
			echo "<option value='$row[id_kel]'>$row[nama_kel]</option>";
		}
		
	}

	public function count_not_aktif()
	{
		$query = $this->db->prepare("SELECT * FROM ben where aktif = 'N' ");	
		$query->execute();
		$row_count = $query->rowCount();
		echo $row_count;
	}

	public function getID($id)
	{
		$query = $this->db->prepare("SELECT * FROM v_edit_b1 WHERE b1_id = :b1_id ");
		$query->execute(array(":b1_id"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}

	public function getIDPrintB2($id)
	{
		$query = $this->db->prepare("SELECT * FROM v_print_b2 WHERE b1_id = :b1_id ");
		$query->execute(array(":b1_id"=>$id));
		$editRow=$query->fetch(PDO::FETCH_ASSOC);
		return $editRow;
	}

	public function getB2($id)
	{
			$query = $this->db->prepare("SELECT * FROM b2 WHERE b1_id = :b1_id ");
			$query->execute(array(":b1_id"=>$id));
			$editRow=$query->fetch(PDO::FETCH_ASSOC);
			if($query->rowCount()>0)
			{
			return $editRow;
			}
			echo "
				<div id='alert' class='alert alert-danger'>
				<button type='button' class='close' data-dismiss='alert'>&times;</button>
				Blm ada Data
				</div>";
			$data = '0';
			return false;
	}
	
	public function update($b1_id,$deskripsi_bencana,$lokasi_bencana,$propinsi,$kabupaten,$kecamatan,$kelurahan,$letak_geografi,$hari,$tgl,$jam,$jumlah_meninggal,$jumlah_hilang,$jumlah_luka_berat,$jumlah_luka_ringan,$jumlah_penduduk_terancam,$jumlah_pengungsi,$lokasi_pengungsian_1,$lokasi_pengungsian_2,$lokasi_pengungsian_3,$akses_kelokasi,$jalur_komunikasi,$keadaan_listrik,$rs,$puskesmas,$pustu,$gudang_farmasi,$polindes,$rs1,$puskesmas1,$pustu1,$gudang_farmasi1,$polindes1,$sumber_air,$upaya_dilakukan_1,$upaya_dilakukan_2,$upaya_dilakukan_3,$upaya_dilakukan_4,$nama_pelapor,$nip,$jumlah_kk_1,$jumlah_kk_2,$file_name1,$file_name2,$file_name3,$file_name4,$id_posko,$update_by,$puskesmas5,$jumlah_pusling)
	{
		try
		{
			$query=$this->db->prepare("UPDATE b1 	SET 	deskripsi_bencana 			= :deskripsi_bencana,
															lokasi_bencana 				= :lokasi_bencana,
															provinsi 					= :propinsi,
															kabupaten 					= :kabupaten,
															id_kec  					= :kecamatan,
															id_kel 						= :kelurahan,
															letak_geografi 				= :letak_geografi,
															hari 						= :hari,
															tgl 						= :tgl,
															jam 						= :jam,
															jumlah_meninggal 			= :jumlah_meninggal,
															jumlah_hilang 				= :jumlah_hilang,
															jumlah_luka_berat 			= :jumlah_luka_berat,
															jumlah_luka_ringan 			= :jumlah_luka_ringan,
															jumlah_penduduk_terancam 	= :jumlah_penduduk_terancam,
															jumlah_pengungsi 			= :jumlah_pengungsi,
															lokasi_pengungsian_1 		= :lokasi_pengungsian_1,
															lokasi_pengungsian_2 		= :lokasi_pengungsian_2,
															lokasi_pengungsian_3 		= :lokasi_pengungsian_3,
															akses_kelokasi 				= :akses_kelokasi,
															jalur_komunikasi 			= :jalur_komunikasi,
															keadaan_listrik 			= :keadaan_listrik,
															rs 							= :rs,
															puskesmas 					= :puskesmas,
															pustu 						= :pustu,
															gudang_farmasi 				= :gudang_farmasi,
															polindes 					= :polindes,
															rs1 						= :rs1,
															puskesmas1 					= :puskesmas1,
															pustu1 						= :pustu1,
															gudang_farmasi1 			= :gudang_farmasi1,
															polindes1 					= :polindes1,
															sumber_air 					= :sumber_air,
															upaya_dilakukan_1 			= :upaya_dilakukan_1,
															upaya_dilakukan_2 			= :upaya_dilakukan_2,
															upaya_dilakukan_3 			= :upaya_dilakukan_3,
															upaya_dilakukan_4 			= :upaya_dilakukan_4,
															nama_pelapor 				= :nama_pelapor,
															nip 						= :nip,
															jumlah_kk_1 				= :jumlah_kk_1,
															jumlah_kk_2 				= :jumlah_kk_2,
															file_name1 					= :file_name1,
															file_name2 					= :file_name2,
															file_name3 					= :file_name3,
															file_name4 					= :file_name4,
															id_posko 					= :id_posko,
															update_by 					= :update_by,
															puskesmas5 					= :puskesmas5,
															jumlah_pusling 				= :jumlah_pusling
 													WHERE 	b1_id						= :b1_id ");
			$query->bindparam(":b1_id",$b1_id);
			$query->bindparam(":deskripsi_bencana",$deskripsi_bencana);
			$query->bindparam(":lokasi_bencana",$lokasi_bencana);
			$query->bindparam(":propinsi",$propinsi);
			$query->bindparam(":kabupaten",$kabupaten);
			$query->bindparam(":kecamatan",$kecamatan);
			$query->bindparam(":kelurahan",$kelurahan);
			$query->bindparam(":letak_geografi",$letak_geografi);
			$query->bindparam(":hari",$hari);
			$query->bindparam(":tgl",$tgl);
			$query->bindparam(":jam",$jam);
			$query->bindparam(":jumlah_meninggal",$jumlah_meninggal);
			$query->bindparam(":jumlah_hilang",$jumlah_hilang);
			$query->bindparam(":jumlah_luka_berat",$jumlah_luka_berat);
			$query->bindparam(":jumlah_luka_ringan",$jumlah_luka_ringan);
			$query->bindparam(":jumlah_penduduk_terancam",$jumlah_penduduk_terancam);
			$query->bindparam(":jumlah_pengungsi",$jumlah_pengungsi);
			$query->bindparam(":lokasi_pengungsian_1",$lokasi_pengungsian_1);
			$query->bindparam(":lokasi_pengungsian_2",$lokasi_pengungsian_2);
			$query->bindparam(":lokasi_pengungsian_3",$lokasi_pengungsian_3);
			$query->bindparam(":akses_kelokasi",$akses_kelokasi);
			$query->bindparam(":jalur_komunikasi",$jalur_komunikasi);
			$query->bindparam(":keadaan_listrik",$keadaan_listrik);
			$query->bindparam(":rs",$rs);
			$query->bindparam(":puskesmas",$puskesmas);
			$query->bindparam(":pustu",$pustu);
			$query->bindparam(":gudang_farmasi",$gudang_farmasi);
			$query->bindparam(":polindes",$polindes);
			$query->bindparam(":rs1",$rs1);
			$query->bindparam(":puskesmas1",$puskesmas1);
			$query->bindparam(":pustu1",$pustu1);
			$query->bindparam(":gudang_farmasi1",$gudang_farmasi1);
			$query->bindparam(":polindes1",$polindes1);
			$query->bindparam(":sumber_air",$sumber_air);
			$query->bindparam(":upaya_dilakukan_1",$upaya_dilakukan_1);
			$query->bindparam(":upaya_dilakukan_2",$upaya_dilakukan_2);
			$query->bindparam(":upaya_dilakukan_3",$upaya_dilakukan_3);
			$query->bindparam(":upaya_dilakukan_4",$upaya_dilakukan_4);
			$query->bindparam(":nama_pelapor",$nama_pelapor);
			$query->bindparam(":nip",$nip);
			$query->bindparam(":jumlah_kk_1",$jumlah_kk_1);
			$query->bindparam(":jumlah_kk_2",$jumlah_kk_2);
			$query->bindparam(":file_name1",$file_name1);
			$query->bindparam(":file_name2",$file_name2);
			$query->bindparam(":file_name3",$file_name3);
			$query->bindparam(":file_name4",$file_name3);
			$query->bindparam(":id_posko",$id_posko);
			$query->bindparam(":update_by",$update_by);
			$query->bindparam(":puskesmas5",$puskesmas5);
			$query->bindparam(":jumlah_pusling",$jumlah_pusling);
			$query->execute();			
			return true;	
		}
		catch(PDOException $e)
		{
			echo $e->getMessage();	
			return false;
		}
	}
	
	public function updateB2($b1_id,$bayi,$balita,$ibu_hamil,$ibu_menyusui,$lansia,$rujuk1,$rujuk2,$rujuk3,$rujuk4,$rujuk5,$jml_rujuk1,$jml_rujuk2,$jml_rujuk3,$jml_rujuk4,$jml_rujuk5,$sumur_gali,$spt,$pma,$pah,$perpipaan,$dll1,$dll2,$jml_dll1,$jml_dll2,$jamban_keluarga,$mck,$dll3,$jml_dll3,$jenis_bgn,$kap_bgn,$kap_air,$sarana_mck,$tmp_smp,$sarana_spal,$penerangan,$obat_hbs,$alkes,$kaporit,$pac,$aquatab,$kantong_sampah,$repellent_lalat,$ketersediaan_pangan,$transfort_pelayanan,$alat_komunikasi,$sarana_listrik,$bantuan1,$bantuan2,$bantuan3,$bantuan4,$bantuan5,$rencana1,$rencana2,$rencana3,$rencana4,$rencana5,$kepala_dinas,$nip1,$ketinggian_air,$file_name1,$file_name2,$file_name3,$file_name4)
	{
		try
		{
			$query=$this->db->prepare("UPDATE b2 SET 	bayi 				= :bayi,
														balita 				= :balita,
														ibu_hamil			= :ibu_hamil,
														ibu_menyusui        = :ibu_menyusui,
														lansia 				= :lansia,
														rujuk1 				= :rujuk1,
														rujuk2 				= :rujuk2,
														rujuk3 				= :rujuk3,
														rujuk4 				= :rujuk4,
														rujuk5 				= :rujuk5,
														jml_rujuk1 			= :jml_rujuk1,
														jml_rujuk2 			= :jml_rujuk2,
														jml_rujuk3 			= :jml_rujuk3,
														jml_rujuk4 			= :jml_rujuk4,
														jml_rujuk5 			= :jml_rujuk5,
														sumur_gali 			= :sumur_gali,
														spt 				= :spt,
														pma 				= :pma,
														pah 				= :pma,
														perpipaan 			= :perpipaan,
														dll1 				= :dll1,
														dll2 				= :dll2,
														jml_dll1 			= :jml_dll1,
														jml_dll2 			= :jml_dll2,
														jamban_keluarga 	= :jamban_keluarga,
														mck 				= :mck,
														dll3 				= :dll3,
														jml_dll3 			= :jml_dll3,
														jenis_bgn 			= :jenis_bgn,
														kap_bgn 			= :kap_bgn,
														kap_air 			= :kap_air,
														sarana_mck 			= :sarana_mck,
														tmp_smp 			= :tmp_smp,
														sarana_spal 		= :sarana_spal,
														penerangan 			= :penerangan,
														obat_hbs 			= :obat_hbs,
														alkes 				= :alkes,
														kaporit 			= :kaporit,
														pac 				= :pac,
														aquatab 			= :aquatab,
														kantong_sampah 		= :kantong_sampah,
														repellent_lalat 	= :repellent_lalat,
														ketersediaan_pangan = :ketersediaan_pangan,
														transfort_pelayanan = :transfort_pelayanan,
														alat_komunikasi 	= :alat_komunikasi,
														sarana_listrik 		= :sarana_listrik,
														bantuan1 			= :bantuan1,
														bantuan2 			= :bantuan2,
														bantuan3 			= :bantuan3,
														bantuan4 			= :bantuan4,
														bantuan5 			= :bantuan5,
														rencana1 			= :rencana1,
														rencana2 			= :rencana2,
														rencana3 			= :rencana3,
														rencana4 			= :rencana4,
														rencana5 			= :rencana5,
														kepala_dinas 		= :kepala_dinas,
														nip1 				= :nip1,
														ketinggian_air 		= :ketinggian_air,
														file_name1 			= :file_name1,
														file_name2 			= :file_name2,
														file_name3 			= :file_name3,
														file_name4 			= :file_name4
												WHERE 	b1_id 				= :b1_id");
			
			$query->bindparam(":bayi",$bayi);
			$query->bindparam(":balita",$balita);
			$query->bindparam(":ibu_hamil",$ibu_hamil);
			$query->bindparam(":ibu_menyusui",$ibu_menyusui);
			$query->bindparam(":lansia",$lansia);
			$query->bindparam(":rujuk1",$rujuk1);
			$query->bindparam(":rujuk2",$rujuk2);
			$query->bindparam(":rujuk3",$rujuk3);
			$query->bindparam(":rujuk4",$rujuk4);
			$query->bindparam(":rujuk5",$rujuk5);
			$query->bindparam(":jml_rujuk1",$jml_rujuk1);
			$query->bindparam(":jml_rujuk2",$jml_rujuk2);
			$query->bindparam(":jml_rujuk3",$jml_rujuk3);
			$query->bindparam(":jml_rujuk4",$jml_rujuk4);
			$query->bindparam(":jml_rujuk5",$jml_rujuk5);
			$query->bindparam(":sumur_gali",$sumur_gali);
			$query->bindparam(":spt",$spt);
			$query->bindparam(":pma",$pma);
			$query->bindparam(":pah",$pah);
			$query->bindparam(":perpipaan",$perpipaan);
			$query->bindparam(":dll1",$dll1);
			$query->bindparam(":dll2",$dll2);
			$query->bindparam(":jml_dll1",$jml_dll1);
			$query->bindparam(":jml_dll2",$jml_dll2);
			$query->bindparam(":jamban_keluarga",$jamban_keluarga);
			$query->bindparam(":mck",$mck);
			$query->bindparam(":jml_dll3",$jml_dll3);
			$query->bindparam(":dll3",$dll3);
			$query->bindparam(":jenis_bgn",$jenis_bgn);
			$query->bindparam(":kap_bgn",$kap_bgn);
			$query->bindparam(":kap_air",$kap_air);
			$query->bindparam(":sarana_mck",$sarana_mck);
			$query->bindparam(":tmp_smp",$tmp_smp);
			$query->bindparam(":sarana_spal",$sarana_spal);
			$query->bindparam(":penerangan",$penerangan);
			$query->bindparam(":obat_hbs",$obat_hbs);
			$query->bindparam(":alkes",$alkes);
			$query->bindparam(":kaporit",$kaporit);
			$query->bindparam(":pac",$pac);
			$query->bindparam(":aquatab",$aquatab);
			$query->bindparam(":kantong_sampah",$kantong_sampah);
			$query->bindparam(":ketersediaan_pangan",$ketersediaan_pangan);
			$query->bindparam(":repellent_lalat",$repellent_lalat);
			$query->bindparam(":transfort_pelayanan",$transfort_pelayanan);
			$query->bindparam(":alat_komunikasi",$alat_komunikasi);
			$query->bindparam(":sarana_listrik",$sarana_listrik);
			$query->bindparam(":bantuan1",$bantuan1);
			$query->bindparam(":bantuan2",$bantuan2);
			$query->bindparam(":bantuan3",$bantuan3);
			$query->bindparam(":bantuan4",$bantuan4);
			$query->bindparam(":bantuan5",$bantuan5);
			$query->bindparam(":rencana1",$rencana1);
			$query->bindparam(":rencana2",$rencana2);
			$query->bindparam(":rencana3",$rencana3);
			$query->bindparam(":rencana4",$rencana4);
			$query->bindparam(":rencana5",$rencana5);
			$query->bindparam(":kepala_dinas",$kepala_dinas);
			$query->bindparam(":nip1",$nip1);
			$query->bindparam(":b1_id",$b1_id);
			$query->bindparam(":file_name1",$file_name1);
			$query->bindparam(":file_name2",$file_name2);
			$query->bindparam(":file_name3",$file_name3);
			$query->bindparam(":file_name4",$file_name4);
			$query->bindparam(":ketinggian_air",$ketinggian_air);
			$query->execute();
			
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
		$query = $this->db->prepare("DELETE FROM b1 WHERE b1_id = :b1_id ");
		$query->bindparam(":b1_id",$id);
		$query->execute();
		return true;
	}

	public function deleteB2($id)
	{
		$query = $this->db->prepare("DELETE FROM b2 WHERE b1_id = :b1_id ");
		$query->bindparam(":b1_id",$id);
		$query->execute();
		return true;
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
                
                <td><div class="center"><?php 
                	echo "
						<div class='btn-group'>
							<a class='btn btn-small dropdown-toggle' data-toggle='dropdown' href='#'><i class='icon-ok-circle' ></i> Detail B1 <span class='caret'></span></a>
				          	 <ul class='dropdown-menu' role='menu' aria-labelledby='dLabel'>

				          	    <li><a href='javascript:void(0)' onclick=\"editData('$row[b1_id]')\" >
				          	    <i class='icon-pencil'></i> Edit Data</a></li>
					
								<li><a href='../simdinkes/ben/print_detail_bencana_b1.php?b1_id=$row[b1_id]' target='_blank'>
				   				<i class='icon-print'></i> Print B1</a></li>

								"; ?>
								<?php  if ($row['b2_id']==''){ echo "	
				            	<li><a href='javascript:void(0)' onclick=\"deleteData('$row[b1_id]','$row[lokasi_bencana]')\" >
				            	<i class='icon-trash'></i> Hapus Data</a></li> "; } else { echo "

							</ul>
				        </div>	
					 "; } ?>
					 </div>
                </td>
                
                <td><div class="center"><?php 
                	echo "
						<div class='btn-group'>
							<a class='btn btn-small dropdown-toggle' data-toggle='dropdown' href='#'><i class='icon-ok-circle' ></i> Detail B2 <span class='caret'></span></a>
				          	 <ul class='dropdown-menu' role='menu' aria-labelledby='dLabel'>
				          	 "; ?>
				          	 	<?php if ($row['b2_id']==''){ echo "
				          	 	<li><a href='javascript:void(0)' onclick=\"editDataB2('$row[b1_id]')\" >
				          	    <i class='icon-plus'></i> Insert From B2</a></li> "; } else { echo " 

				          	    <li><a href='javascript:void(0)' onclick=\"editB2('$row[b1_id]')\" >
				          	    <i class='icon-pencil'></i> Update From B2</a></li>
				          	    
				            	<li><a href='javascript:void(0)' onclick=\"deleteDataB2('$row[b1_id]','$row[lokasi_bencana]')\" >
				            	<i class='icon-trash'></i> Hapus Data</a></li>
				            	
				   				<li><a href='../simdinkes/ben/print_detail_bencana_b2.php?b1_id=$row[b1_id]' target='_blank' >
				   				<i class='icon-print'></i> B2</a></li>
				   				   			 	
							</ul>
				        </div>	
					 "; } ?>
					 </div>
                </td>
                <td><div class="center"><?php 
                	echo "
						<div class='btn-group'>
							<a class='btn btn-small dropdown-toggle' data-toggle='dropdown' href='#'><i class='icon-ok-circle' ></i> Detail B3 <span class='caret'></span></a>
				          	 <ul class='dropdown-menu' role='menu' aria-labelledby='dLabel'>
				          	 "; ?>
				          	 	<?php if ($row['b3_id']==''){ echo "
				          	 	<li><a href='javascript:void(0)' onclick=\"modal('$row[b1_id]')\" >
				          	    <i class='icon-plus'></i> Insert From B3</a></li> "; } else { echo " 


				          	    <li><a href='javascript:void(0)' onclick=\"modal('$row[b1_id]')\" >
				          	    <i class='icon-file'></i> From B3</a></li>
				            	
				   				<li><a href='../simdinkes/ben/print_detail_bencana_b3.php?b1_id=$row[b1_id]' target='_blank' >
				   				<i class='icon-print'></i> B3</a></li>
				   				   			 	
							</ul>
				        </div>	
					 "; } ?>
                	</div>
                </td>
                <td><?php print($row['deskripsi_bencana']); ?></td>
                <td><?php print($row['lokasi_bencana']." Desa ".$row['nama_kel']." Kec. ".$row['nama_kec']." Kab. Tangeang - Banten"); ?></td>
                <td><?php print(tgl_indo($row['tgl'])); ?></td>
                <td><?php print($row['alamat_posko']); ?></td>
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
/*


$b1_id,$bayi,$balita,$ibu_hamil,$ibu_menyusui,$lansia,$rujuk1,$rujuk2,$rujuk3,$rujuk4,$rujuk5,$jml_rujuk1,$jml_rujuk2,$jml_rujuk3,$jml_rujuk4,$jml_rujuk5,$sumur_gali,$spt,$pma,$pah,$perpipaan,$dll1,$dll2,$jml_dll1,$jml_dll2,$jamban_keluarga,$mck,$dll3,$jml_dll3,$jenis_bgn,$kap_bgn,$kap_air,$sarana_mck,$tmp_smp,$sarana_spal,$penerangan,$obat_hbs,$alkes,$kaporit,$pac,$aquatab,$kantong_sampah,$repellent_lalat,$ketersediaan_pangan,$transfort_pelayanan,$alat_komunikasi,$sarana_listrik,$bantuan1,$bantuan2,$bantuan3,$bantuan4,$bantuan5,$rencana1,$rencana2,$rencana3,$rencana4,$rencana5,$kepala_dinas,$nip1,$file_name1,$file_name2,$file_name3,$file_name4
*/