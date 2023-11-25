    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fa fa-flask"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SPK SWARA</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link" href="/">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Master Data
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="/datakriteria">
                    <i class="fa fa-archive"></i>
                    <span>Data Kriteria</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/datasub">
                    <i class="fa fa-th-large"></i>
                    <span>Data Sub Kriteria</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span>Data Alternatif</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fa fa-th-large" aria-hidden="true"></i>
                    <span>Data Penilaian</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fa fa-calculator"></i>
                    <span>Data Perhitungan</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fa fa-th-large"></i>
                    <span>Data Hasil Akhir</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">


            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class=" row items-center justify-content-between mb-4">
                        <h1 class="h3 mb-2 text-gray-800"> <i class="fa fa-archive ml-3 mr-2"></i>Data Kriteria</h1>
                        <div class=" mr-2">
                            <a href="/datakriteria" class="btn btn-secondary btn-icon-split">
                                <span class="icon text-white-50">
                                    <i class="fas fa-arrow-left"></i>
                                </span>
                                <span class="text">Kembali</span>
                            </a>
                        </div>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-success"><i class="fa fa-plus mr-2 pt-1"
                                    aria-hidden="true"></i>Tambah Data Kriteria</h6>
                        </div>
                        <div class="card-body">
                            <form action="" enctype="multipart/form-data">
                                <div class=" row">
                                    <div class="form-group col-6">
                                        <label for="Kode Kriteria" class=" font-weight-bolder">Kode Kriteria</label>
                                        <input type="text" class="form-control" id="Kode Kriteria"
                                            placeholder="Masukkan Kode Kriteria">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="namakriteria" class="  font-weight-bolder">Nama Kriteria</label>
                                        <input type="text" class="form-control" id="namakriteria"
                                            placeholder="Masukkan Nama Kriteria">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="bobotawal" class=" font-weight-bolder">Bobot Kriteria Awal</label>
                                        <input type="number" class="form-control" id="bobotawal"
                                            placeholder="Masukkan Bobot Awal">
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="jenis" class=" font-weight-bolder">Jenis Kriteria</label>
                                        <select class="form-control" id="jenis">
                                          <option>Cost</option>
                                          <option>Benefit</option>
                                        </select>
                                      </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-header py-3">
                            <div class="">
                                <a href="/tambahdata" class="btn btn-success btn-icon-split">
                                    <span class="text"><i class="fa fa-plus mr-2 pt-1" aria-hidden="true"></i>
                                        Simpan</span>
                                </a>
                                <a href="#" class="btn btn-primary btn-icon-split">
                                    <span class="text"><i class="fa fa-spinner mr-2 pt-1" aria-hidden="true"></i>
                                        Reset</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->
