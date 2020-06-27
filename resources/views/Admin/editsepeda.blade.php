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
                            @foreach($sepedas as $s)
                            <form action="/admin/update_sepeda" method="post">
                         {{ csrf_field() }}
                                     <input type="hidden" name="id" value="{{ $s->id }}"> <br/>
                            <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Gambar Sepeda</label>
                                    <div class="col-sm-5">
                                    <image src="{{ url('/images/'.$s->gambar_sepeda) }}"></image>    
                                    </div>
                                  </div>
                                    <div class="form-group row">
                                            <label  class="col-sm-2 col-form-label">Jenis Sepeda</label>
                                            <div class="col-sm-5">
                                                    <input type="text" required="required" name="jenis" value="{{ $s->jenis }}" class="form-control">
                                            </div>
                                          </div>
                                    <div class="form-group row">
                                      <label  class="col-sm-2 col-form-label">Harga</label>
                                      <div class="col-sm-5">
                                        <textarea class="form-control" required="required" name="harga">{{ $s->harga }}</textarea>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                            <label  class="col-sm-2 col-form-label">Stok</label>
                                            <div class="col-sm-5">
                                                    <input type="text" required="required" name="stock" value="{{ $s->stock}}" class="form-control">
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
