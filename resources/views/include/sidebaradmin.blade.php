<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cycling Jogja Admin - Laporan Sepeda</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
 <!-- Custom fonts for this template -->
  <link href="/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="/admin/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="/admin/vendor/chart.js/Chart.js"></script>
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
          <span>Dashboard</span>
        </a>
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

      <li class="nav-item active">
        <a class="nav-link" href="/admin/laporan_sepeda">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Laporan</span></a>
      </li>
          
      <li class="nav-item active">
        <a class="nav-link"  href="/admin/laporan_peserta">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Peserta Event</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link"  href="/admin/laporan_penyewa">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Penyewa Sepeda</span></a>
      </li>
      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
    </ul>
    <!-- End of Sidebar -->
