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
