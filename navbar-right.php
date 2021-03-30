<?php
//session_start();
//require_once '../config/koneksi.php';
//require_once '../user/class.user.php';
?>

<!-- ==================================================================================================== -->
				<ul class="nav nav-list">
					<li>
						<a href="javascript:void(0)" onclick="swapContent('home')">
							<i class="icon-home"></i>
							<span class="menu-text"> Home </span>
						</a>
					</li>			
<!-- ==================================================================================================== -->
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-tasks"></i>
							<span class="menu-text"> Master </span>

							<b class="arrow icon-angle-down"></b>
						</a>
<!-- ==================================================================================================== -->
						<ul class="submenu">
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/user/user')">
									<i class="icon-double-angle-right"></i>
									User
								</a>
							</li>
<!-- ==================================================================================================== -->
							<?php if ($_SESSION['s_level'] == 'administrator' || $_SESSION['s_level'] == 'supervisor' ) { ?>
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/posko/posko')">
									<i class="icon-double-angle-right"></i>
									Posko
								</a>
							</li>
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/diagnosa/diagnosa')">
									<i class="icon-double-angle-right"></i>
									Diagnosa
								</a>
							</li>
<!-- ==================================================================================================== 
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/dokter/dokter')">
									<i class="icon-double-angle-right"></i>
									Dokter
								</a>
							</li>
<!-- ==================================================================================================== 
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/dokter_unit/dokter_unit')">
									<i class="icon-double-angle-right"></i>
									Dokter Unit
								</a>
							</li>
<!-- ====================================================================================================
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/pengirim_rujukan/pengirim_rujukan')">
									<i class="icon-double-angle-right"></i>
									Pengirim/Rujukan
								</a>
							</li>
						<?php } ?>
<!-- ==================================================================================================== 
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/perusahaan_penjamin/perusahaan_penjamin')">
									<i class="icon-double-angle-right"></i>
									Perusahaan Penjamin
								</a>
							</li>
<!-- ==================================================================================================== 
							<li>
								<a href="javascript:void(0)" onclick="swapContent('master_ref/kode_penjamin/kode_penjamin')">
									<i class="icon-double-angle-right"></i>
									Kode Penjamin
								</a>
							</li>
<!-- ==================================================================================================== 
							<li>
								<a href="#" class="dropdown-toggle">
									<i class="icon-tasks"></i>
									<span class="menu-text"> Referensi Wilayah </span>
									<b class="arrow icon-angle-down"></b>
								</a>
								<ul class="submenu">
									<li>
										<a href="javascript:void(0)" onclick="swapContent('master_ref/propinsi/propinsi')">
											<i class="icon-double-angle-right"></i>
											Propinsi
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" onclick="swapContent('master_ref/kabupaten/kabupaten')">
											<i class="icon-double-angle-right"></i>
											Kabupaten/Kota
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" onclick="swapContent('master_ref/kecamatan/kecamatan')">
											<i class="icon-double-angle-right"></i>
											Kecamatan
										</a>
									</li>
									<li>
										<a href="javascript:void(0)" onclick="swapContent('master_ref/kelurahan/kelurahan')">
											<i class="icon-double-angle-right"></i>
											Kelurahan
										</a>
									</li>
								</ul>
							</li>
<!-- ==================================================================================================== -->					
						</ul>
					</li>
					
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-edit"></i>
							<span class="menu-text"> Transaksi </span>
							<b class="arrow icon-angle-down"></b>
						</a>
<!-- ==================================================================================================== -->
						<ul class="submenu">
							
							<li>
								<a href="javascript:void(0)" onclick="swapContent('ben/ben')">
									<i class="icon-double-angle-right"></i>
									List Bencana
								</a>
							</li>
							
							<li>
								<a href="javascript:void(0)" onclick="swapContent('bantuan/bantuan')">
									<i class="icon-double-angle-right"></i>
									Bantuan
								</a>
							</li>
						
						</ul>
					</li>				
<!-- ==================================================================================================== 	-->		
					
					<li>
						<a href="#" class="dropdown-toggle">
							<i class="icon-list-alt"></i>
							<span class="menu-text"> Laporan </span>
							<b class="arrow icon-angle-down"></b>
						</a>

						
<!-- ==================================================================================================== -->
						
						<ul class="submenu">
							<li>
								<a href="javascript:void(0)" onclick="swapContent('ben/js_rekap')">
									<i class="icon-double-angle-right"></i>
									Rekap Laporan
								</a>
							</li>
							<!--
							<li>
								<a href="javascript:void(0)" onclick="swapContent('lap-pelkes/lap-pelkes')">
									<i class="icon-double-angle-right"></i>
									Pelayanan Kesehatan
								</a>
							</li>
							-->
						</ul>
					</li>
					
<!-- ==================================================================================================== -->					
					
<!-- ==================================================================================================== -->					
					<li>
						<a href="logout.php">
							<i class="icon-lock"></i>
							<span class="menu-text"> Logout </span>
						</a>
					</li>
				</ul><!--/.nav-list-->
<!-- ==================================================================================================== -->				