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
                            @foreach($pendaftar as $p)
                            <form action="/admin/update_pendaftar" method="post">
                         {{ csrf_field() }}
                                     <input type="hidden" name="id" value="{{ $p->id }}"> <br/>
                                    <div class="form-group row">
                                            <label  class="col-sm-2 col-form-label">id_user</label>
                                            <div class="col-sm-5">
                                            {{ $p->id_user }}
                                            </div>
                                          </div>
                                    <div class="form-group row">
                                      <label  class="col-sm-2 col-form-label">id_event</label>
                                      <div class="col-sm-5">
                                      {{ $p->id_event }}
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                            <label  class="col-sm-2 col-form-label">Token</label>
                                            <div class="col-sm-5">
                                            {{ $p->token }}       
                                            </div>
                                          </div> 
                                          <div class="form-group row">
                                            <label  class="col-sm-2 col-form-label">Status Pemesanan</label>
                                            <div class="col-sm-5">
                                            <input type="text" required="required" name="status_pemesanan" value="{{ $p->status_pemesanan }}">     
                                            </div>
                                          </div> 
                                          <div class="form-group row">
                                            <label  class="col-sm-2 col-form-label">Tanggal Pemesanan</label>
                                            <div class="col-sm-5">
                                            {{ $p->created_at }}       
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
