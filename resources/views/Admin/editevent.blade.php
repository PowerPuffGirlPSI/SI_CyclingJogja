<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cycling Jogja Admin - Edit Event</title>

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
              <h6 class="m-0 font-weight-bold text-primary">Form Tambah Event</h6>
            </div>
            <div class="card-body">
                    
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tbody>
                            @foreach($events as $e)
                            <form action="/admin/update_event" method="post">
                         {{ csrf_field() }}
                                     <input type="hidden" name="id" value="{{ $e->id }}"> <br/>
                            <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Gambar Event</label>
                                    <div class="col-sm-5">
                                    <image src="{{ url('/images/'.$e->gambar_event) }}"></image>       
                                    </div>
                                  </div>
                                    <div class="form-group row">
                                            <label  class="col-sm-2 col-form-label">Nama Event</label>
                                            <div class="col-sm-5">
                                                    <input type="text" required="required" name="nama_event" value="{{ $e->nama_event }}" class="form-control">
                                            </div>
                                          </div>
                                    <div class="form-group row">
                                      <label  class="col-sm-2 col-form-label">Rincian Event</label>
                                      <div class="col-sm-5">
                                        <textarea class="form-control" required="required" name="rincian_event">{{ $e->rincian_event }}</textarea>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                           <label  class="col-sm-2 col-form-label">Waktu Pelaksanaan</label>
                                            <div class="col-sm-5">
                                                    <input type="text" required="required" name="waktu_pelaksanaan" value="{{ $e->waktu_pelaksanaan}}" class="form-control">
                                            </div>
                                          </div>
                                   <div class="form-group row">
                                            <label  class="col-sm-2 col-form-label">Titik Start</label>
                                            <div class="col-sm-5">
                                                    <input type="text" required="required" name="lokasi" value="{{ $e->lokasi}}" class="form-control">
                                            </div>
                                          </div>
                                     <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Rute</label>
                                      <div class="col-sm-5">
                                            <textarea class="form-control" required="required" name="rute">{{ $e->rute }}</textarea>
                                      </div>
                                    </div>  
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jarak</label>
                                            <div class="col-sm-5">
                                                    <input type="text" required="required" name="jarak" value="{{ $e->jarak}}" class="form-control">

                                            </div>
                                          </div>   
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Durasi</label>
                                            <div class="col-sm-5">
                                                    <input type="text" required="required" name="durasi" value="{{ $e->durasi}}" class="form-control">
                                            </div>
                                          </div>   
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Harga Tiket</label>
                                            <div class="col-sm-5">
                                                    <input type="text" required="required" name="harga_tiket" value="{{ $e->harga_tiket}}" class="form-control">
                                            </div>
                                          </div>   
                                     <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Kuota</label>
                                            <div class="col-sm-5">
                                                    <input type="text" required="required" name="kuota" value="{{ $e->kuota}}" class="form-control">
                                            </div>
                                          </div>   
                                   <input type="submit" value="Simpan Data" class="btn btn-primary" >
                                  </form>
                                  @endforeach
                      </tbody>
                  </thead>
                </table>
                
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
