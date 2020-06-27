@include('include.sidebaradmin')

    
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
                      <form action="/admin/store_event" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Gambar Event</label>
                                    <div class="col-sm-5">
                                      <input type="file" name="gambar_event" required="required" class="form-control">
                                    </div>
                                  </div>
                                    <div class="form-group row">
                                            <label  class="col-sm-2 col-form-label">Nama Event</label>
                                            <div class="col-sm-5">
                                              <input type="text" name="nama_event" required="required" class="form-control">
                                            </div>
                                          </div>
                                    <div class="form-group row">
                                      <label  class="col-sm-2 col-form-label">Rincian Event</label>
                                      <div class="col-sm-5">
                                        <textarea class="form-control" name="rincian_event" required="required"></textarea>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                            <label  class="col-sm-2 col-form-label">Waktu Pelaksanaan</label>
                                            <div class="col-sm-5">
                                                    <input type="date" name="waktu_pelaksanaan" required="required" class="form-control">
                                            </div>
                                          </div>
                                     <div class="form-group row">
                                      <label class="col-sm-2 col-form-label">Rute</label>
                                      <div class="col-sm-5">
                                            <textarea class="form-control" name="rute" required="required"></textarea>
                                      </div>
                                    </div>  
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Jarak</label>
                                            <div class="col-sm-5">
                                              <input type="text" name="jarak" required="required" class="form-control">
                                            </div>
                                          </div>   
                                    <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Harga Tiket</label>
                                            <div class="col-sm-5">
                                              <input type="text" name="harga_tiket" required="required" class="form-control">
                                            </div>
                                          </div>   
                                   <input type="submit" value="Simpan Data" class="btn btn-primary" >
                                  </form>
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
