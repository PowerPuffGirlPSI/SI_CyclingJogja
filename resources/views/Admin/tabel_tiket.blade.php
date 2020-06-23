<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cycling Jogja Admin - Pemesanan Tiket</title>

  <!-- Custom fonts for this template -->
  <link href="/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/admin/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">Cycling Jogja Admin</div>
        </a>
    
        <!-- Divider -->
        <hr class="sidebar-divider my-0">
    
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
          <a class="nav-link" href="/admin/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
        </li>
    
        <!-- Divider -->
        <hr class="sidebar-divider">
    
        <!-- Heading -->
        <div class="sidebar-heading">
          Menu
        </div>
    
        <!-- Nav Item - Pages Collapse Menu -->
        <li class="nav-item active">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-table"></i>
            <span>Daftar Tabel</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Tabel:</h6>
              <a class="collapse-item" href="/admin/tabel_pengguna">Pengguna</a>
              <a class="collapse-item" href="/admin/tabel_event">Event</a>
              <a class="collapse-item" href="/admin/tabel_tiket">Pemesanan Tiket</a>
              <a class="collapse-item" href="/admin/tabel_penyewa">Penyewa Sepeda</a>
              <a class="collapse-item" href="/admin/tabel_sepeda">Sepeda</a>
              
            </div>
          </div>
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
        @include('include.topbar')
        <!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Pemesanan Tiket</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                            <th>No</th>
                            <th>Peserta</th>
                            <th>Event yang diikuti</th>
                            <th>Status Pemesanan</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Jumlah Pesanan</th>
                            <th>Nomor Transaksi Pemesanan</th>
                            <th>No Token</th>
                            <th>Update</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>No</th>
                            <th>Peserta</th>
                            <th>Event yang diikuti</th>
                            <th>Status Pemesanan</th>
                            <th>Tanggal Pemesanan</th>
                            <th>Jumlah Pesanan</th>
                            <th>Nomor Transaksi Pemesanan</th>
                            <th>No Token</th>
                            <th>Update</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
                   $no=1;
                  ?>
                  @foreach($pendaftars as $t)
                <tr>
                   <td>{{$no++}}</td>
                   <td>{{$t->id_user}}</td>
                   <td>{{$t->id_event}}</td>
                   <td>{{$t->status_pemesanan}}</td>
                   <td>{{$t->tgl_pemesanan}}</td>
                   <td>{{$t->jumlah_barang_pemesanan}}</td>
                   <td>{{$t->nomor_transaksi_pemesanan}}</td>
                   <td>{{$t->token}}</td>
                   <td>
                      <a href="/admin/hapus_tiket/{{ $t->id }}" class="btn btn-primary">Hapus</a>
                  </td>
                 </tr>
                 @endforeach
                  </tbody>
                </table>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
      
      <!-- Footer -->
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  @include('include.logoutmodal')

  <!-- Bootstrap core JavaScript-->
  <script src="/admin/vendor/jquery/jquery.min.js"></script>
  <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="/admin/js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="/admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="/admin/js/demo/datatables-demo.js"></script>

</body>

</html>
