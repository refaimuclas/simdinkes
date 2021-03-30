		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="#" class="brand">
						<small>
							<!--<i class="icon-leaf"></i>-->
							SISTEM INFORMASI DINAS KESEHATAN ( MODUL BANJIR )
						</small>
					</a><!--/.brand-->
					
					<ul class="nav ace-nav pull-right">
						<li class="grey">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-tasks"></i>
								 Master ref
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-ok"></i>
									3 Master Data Referensi
								</li>

								<li>
									<a  href="javascript:void(0)" onclick="swapContent('master_ref/user/user')">
										<div class="clearfix">
											<span class="pull-left"> User</span>
										</div>
									</a>
								</li>
								
								<li>
									<a href="javascript:void(0)" onclick="swapContent('master_ref/posko/posko')">
										<div class="clearfix">
											<span class="pull-left">Posko</span>
										</div>
									</a>
								</li>
								
								<li>
									<a href="javascript:void(0)" onclick="swapContent('master_ref/diagnosa/diagnosa')">
										<div class="clearfix">
											<span class="pull-left">Diagnosa</span>
										</div>
									</a>
								</li>
								<!--
								<li>
									<a href="javascript:void(0)" onclick="swapContent('diagnosa/diagnosa')">
										<div class="clearfix">
											<span class="pull-left">Penyakit</span>
										</div>
									</a>
								</li>

								<li>
									<a href="javascript:void(0)" onclick="swapContent('kecelakaan/kecelakaan')">
										<div class="clearfix">
											<span class="pull-left">Jenis Kecelakaan</span>
										</div>
									</a>
								</li>
								<!-- ============================================================
								<li>
									<a href="javascript:void(0)" onclick="swapContent('golongan/golongan')">
										<div class="clearfix">
											<span class="pull-left">Golongan</span>
										</div>
									</a>
								</li>

								<li>
									<a href="javascript:void(0)" onclick="swapContent('eselon/eselon')">
										<div class="clearfix">
											<span class="pull-left">Eselon</span>
										</div>
									</a>
								</li>
								<li>
									<a href="javascript:void(0)" onclick="swapContent('jabatan/jabatan')">
										<div class="clearfix">
											<span class="pull-left">Jabatan</span>
										</div>
									</a>
								</li>
								-->
							</ul>
						</li>

						<li class="purple">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-edit"></i>
								 Transaksi
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-ok"></i>
									2 Transaksi
								</li>

								<li>
									<a href="javascript:void(0)" onclick="swapContent('ben/ben')">
										<div class="clearfix">
											<span class="pull-left">
												List Bencana
											</span>											
										</div>
									</a>
								</li>

								<li>
									<a href="javascript:void(0)" onclick="swapContent('bantuan/bantuan')">
										<div class="clearfix">
											<span class="pull-left">
												Bantuan
											</span>											
										</div>
									</a>
								</li>							
							</ul>
						</li>
						
						<li class="green">	
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<i class="icon-list-alt"></i>
								Laporan
							</a>

							<ul class="pull-right dropdown-navbar dropdown-menu dropdown-caret dropdown-closer">
								<li class="nav-header">
									<i class="icon-ok"></i>
									1 Laporan
								</li>
								
								<li>
									<a href="javascript:void(0)" onclick="swapContent('ben/js_rekap')">
										<div class="clearfix">
											<span class="pull-left">Rekap Laporan</span>
										</div>
									</a>									
								</li>
								<!--
								<li>
									<a href="javascript:void(0)" onclick="swapContent('lap-pelkes/lap-pelkes')">
										<div class="clearfix">
											<span class="pull-left">Pelayanan Kesehatan</span>
										</div>
									</a>									
								</li>
								-->
							</ul>
						</li>
						-->
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<?php $foto = 'master_ref/user/img_user/'.$_SESSION['foto_user']; ?>
								<img class="nav-user-photo" src="<?php  echo $foto;?>" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $_SESSION['s_nama']?>
								</span>

								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
								<li>								
									<a  href="javascript:void(0)" onclick="swapContent('user/user')" > 
										<i class="icon-user"></i>
										Profile
									</a>
								</li>
							
								<li class="divider"></li>

								<li>
									<a href="logout.php">
										<i class="icon-off"></i>
										Logout
									</a>
								</li>
							</ul>
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>