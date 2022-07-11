  <!-- ========== Left Sidebar Start ========== -->
  <div class="left side-menu side-menu-dark">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Menu</li>
                            <li>
                                <a href="<?=base_url('')?>backsite/admin/index" class="waves-effect">
                                    <i class="mdi mdi-home"></i> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-email"></i><span> Data Master <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span></a>
                                <ul class="submenu">
                                    <li><a href="<?=base_url('')?>backsite/admin/data_guru">Data Guru</a></li>
                                    <li><a href="<?=base_url('')?>backsite/admin/data_siswa">Data Siswa</a></li>
									<li><a href="<?=base_url('')?>backsite/admin/data_laptop_siswa">Data Laptop Siswa</a></li>
									<li><a href="<?=base_url('')?>backsite/admin/data_laptop_peminjaman">Data Laptop Pinjaman</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-buffer"></i> <span> Transaksi <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span> </a>
                                <ul class="submenu">
                                    <li><a href="ui-alerts.html">Pengambilan Laptop Siswa</a></li>
                                    <li><a href="ui-buttons.html">Peminjaman Laptop</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-black-mesa"></i> <span> Laporan <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span> </span> </a>
                                <ul class="submenu">
                                    <li><a href="components-lightbox.html">Riwayat Peminjaman</a></li>
                                    <li><a href="components-rangeslider.html">Riwayat Pengambilan</a></li>

                                </ul>
                            </li> 
                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
 <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title"><?=$page?></h4>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item active"> SMKS Al Mahrusiyah </li>
                                    </ol>
            
                                    <div class="state-information d-none d-sm-block">
                                        <div class="state-graph">
											<button type="button" class="btn btn-outline-light waves-effect">10</button>
                                            <div class="info">Laptop Siswa</div>
                                        </div>
                                        <div class="state-graph">
											<button type="button" class="btn btn-outline-light waves-effect">11</button>
                                            <div class="info">Laptop Pinjaman</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->
