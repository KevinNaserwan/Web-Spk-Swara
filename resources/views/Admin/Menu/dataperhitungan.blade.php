<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SPK SWARA</title>
</head>

<body>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SPK Swara</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

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
            <li class="nav-item">
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
                <a class="nav-link collapsed" href="/dataalternatif">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span>Data Alternatif</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/datapenilaian">
                    <i class="fa fa-th-large" aria-hidden="true"></i>
                    <span>Data Penilaian</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="/dataperhitungan">
                    <i class="fa fa-calculator"></i>
                    <span>Data Perhitungan</span>
                </a>
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="/dataakhir">
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
                    <div class=" row items-center justify-content-between">
                        <h1 class="h3 mb-2 text-gray-800"> <i class="fa fa-calculator ml-3 mr-2"></i>Data Perhitungan
                        </h1>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <div class=" row justify-content-between align-items-center px-3">
                                <h6 class="m-0 font-weight-bold text-success">Bobot Preferensi <span>(W)</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead class=" bg-success text-white">
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Kriteria</th>
                                            <th>Nama Kriteria</th>
                                            <th>Bobot Awal</th>
                                            <th>Bobot Swara</th>
                                            <th>Jenis</th>s
                                        </tr>
                                    </thead>
                                    @php
                                        $sum = $kriteria->pluck('number')->sum();
                                        $count = $kriteria->count();
                                        $average = $count > 0 ? $sum / $count : 0;

                                        // Calculate $sumQi once before the loop
                                        $previousKj = 1;
                                        $sumQi = 0;
                                        foreach ($kriteria as $item) {
                                            $Qi = $previousKj / (($item->number - 1) / $average + 1);
                                            $previousKj = $Qi;
                                            $sumQi += $Qi;
                                        }
                                    @endphp
                                    <tbody>
                                        @php
                                            $previousKj = 1; // Initialize a variable to store the previous value of Kj
                                        @endphp
                                        @foreach ($kriteria as $index => $item)
                                            <tr>
                                                <td>{{ $index + 1 }}</td>
                                                <td> {{ $item->kriteria->kode }}</td>
                                                <td> {{ $item->kriteria->nama }}</td>
                                                <td> {{ $item->kriteria->bobot }}</td>
                                                {{-- Calculate Qi based on the division of 1 by the current Kj --}}
                                                {{-- Calculate Qi based on the division of 1 by the current Kj --}}
                                                @php
                                                    $Qi = $previousKj / (($item->number - 1) / $average + 1);
                                                    $previousKj = $Qi;
                                                @endphp
                                                <td>
                                                    {{-- Use the fixed $sumQi value for calculating Wi --}}
                                                    @php
                                                        $Wi = $Qi / $sumQi;
                                                    @endphp
                                                    {{ $Wi }}
                                                </td>
                                                <td> {{ $item->kriteria->jenis }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <div class=" row justify-content-between align-items-center px-3">
                                <h6 class="m-0 font-weight-bold text-success">Matriks Keputusan <span>(X)</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead class=" bg-success text-white">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Alternatif</th>
                                            @foreach ($kriteria2 as $item)
                                                <th>{{ $item->kode }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($nilai as $namaAlternatif => $items)
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $namaAlternatif }}</td>
                                                @foreach ($items as $index => $item)
                                                    <td>{{ $item->nilai }}</td>
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <div class=" row justify-content-between align-items-center px-3">
                                <h6 class="m-0 font-weight-bold text-success">Matriks Ternormalisasi <span>(R)</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead class=" bg-success text-white">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Alternatif</th>
                                            @foreach ($kriteria2 as $item)
                                                <th>{{ $item->kode }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($nilai as $namaAlternatif => $items)
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $namaAlternatif }}</td>
                                                @foreach ($nilai3 as $index => $item)
                                                    @if (isset($items[$index]))
                                                        <td>{{ $items[$index]->nilai / $item }}</td>
                                                    @else
                                                        <td>Undefined</td>
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <div class=" row justify-content-between align-items-center px-3">
                                <h6 class="m-0 font-weight-bold text-success">Matriks Normalisasi Terbobot</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead class=" bg-success text-white">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Alternatif</th>
                                            @foreach ($kriteria2 as $item)
                                                <th>{{ $item->kode }}</th>
                                            @endforeach
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $sum = $kriteria->pluck('number')->sum();
                                            $count = $kriteria->count();
                                            $average = $count > 0 ? $sum / $count : 0;

                                            // Calculate $sumQi once before the loop
                                            $previousKj = 1;
                                            $sumQi = 0;
                                            foreach ($kriteria as $item) {
                                                $Qi = $previousKj / (($item->number - 1) / $average + 1);
                                                $previousKj = $Qi;
                                                $sumQi += $Qi;
                                            }
                                        @endphp
                                        @php
                                            $previousKj = 1; // Initialize a variable to store the previous value of Kj
                                        @endphp

                                        @foreach ($kriteria as $index => $item)
                                            @php
                                                $Qi = $previousKj / (($item->number - 1) / $average + 1);
                                                $previousKj = $Qi;
                                                $Wi = $Qi / $sumQi;
                                            @endphp
                                            @php
                                                $wiValues[$index] = $Wi; // Store the Wi values in an array for later use
                                            @endphp
                                        @endforeach

                                        @foreach ($nilai as $namaAlternatif => $items)
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $namaAlternatif }}</td>
                                                {{-- Uncomment the following lines for debugging --}}
                                                {{-- <td>{{ dd($wiValues) }}</td> --}}
                                                {{-- <td>{{ dd($nilai2) }}</td> --}}
                                                {{-- @foreach ($kriteria2 as $index => $item)
                                                    <td>{{ $wiValues[$index] }}</td>
                                                @endforeach --}}
                                                @foreach ($nilai3 as $index => $item)
                                                    @if (isset($items[$index]))
                                                        <td>{{ $items[$index]->nilai / $item / ($wiValues[$index] ?? 1) }}
                                                        </td>
                                                    @else
                                                        <td>Undefined</td>
                                                    @endif
                                                @endforeach
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4 mt-4">
                        <div class="card-header py-3">
                            <div class=" row justify-content-between align-items-center px-3">
                                <h6 class="m-0 font-weight-bold text-success">Menghitung Nilai Yi</h6>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead class=" bg-success text-white">
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Alternatif</th>
                                            <th>Maximum ({{ $benefit }})</th>
                                            <th>Minimum ({{ $cost }})</th>
                                            <th>Yi = Max - Min</th>
                                        </tr>
                                    </thead>
                                    {{-- @foreach ($nilai3 as $index => $item)
                                            @php
                                                // Skip calculation for indices 4 and 5
                                                if ($index == 3 || $index == 4) {
                                                    continue;
                                                }

                                                $result1 = $items[$index]->nilai / $item / ($wiValues[$index] ?? 1);
                                                $total1 += $result1; // Menambahkan hasil ke variabel total
                                            @endphp
                                        @endforeach --}}

                                    @foreach ($nilai as $namaAlternatif => $items)
                                        @php
                                            $total = 0;
                                            $total1 = 0; // Set total ke 0 di awal setiap iterasi
                                        @endphp
                                        @foreach ($nilai3 as $index => $item)
                                            @if (isset($items[$index]))
                                                @php
                                                    $result = $items[$index]->nilai / $item / ($wiValues[$index] ?? 1);
                                                    $total += $result; // Menambahkan hasil ke variabel total
                                                @endphp
                                            @else
                                                <td>Undefined</td>
                                            @endif
                                        @endforeach
                                        @foreach ($nilai3 as $index => $item)
                                            @if ($index != 3 && $index != 4)
                                                @if (isset($items[$index]))
                                                    @php
                                                        $result1 = $items[$index]->nilai / $item / ($wiValues[$index] ?? 1);
                                                        $total1 += $result1; // Menambahkan hasil ke variabel total
                                                    @endphp
                                                @else
                                                    <td>Undefined</td>
                                                @endif
                                            @endif
                                        @endforeach
                                        <tr>
                                            <td>1</td>
                                            <td>{{ $namaAlternatif }}</td>
                                            <td>{{ $total1  }}</td>
                                            <td>{{ $total - $total1 }}</td>
                                            <td>{{ $total1 - ($total - $total1)}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus"
                                        aria-hidden="true"></i>
                                    Tambah Purna Jual</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="namasubkriteria" class="  font-weight-bolder">Nama Sub
                                            Kriteria</label>
                                        <input type="text" class="form-control" id="namasubkriteria"
                                            placeholder="Masukkan Nama Sub Kriteria">
                                    </div>
                                    <div class="form-group">
                                        <label for="nilai" class=" font-weight-bolder">Nilai</label>
                                        <input type="number" class="form-control" id="nilai"
                                            placeholder="Masukkan Nilai">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-icon-split">
                                    <span class="text"><i class="fa fa-spinner mr-2 pt-1" aria-hidden="true"></i>
                                        Reset</span>
                                </button>
                                <button type="submit" class="btn btn-success btn-icon-split">
                                    <span class="text"><i class="fa fa-plus mr-2 pt-1" aria-hidden="true"></i>
                                        Simpan</span>
                                </button>
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

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>