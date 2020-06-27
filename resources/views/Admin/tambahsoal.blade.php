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
                      <form action="/admin/store_soal" method="post" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                            <label  class="col-sm-2 col-form-label">Soal</label>
                                            <div class="col-sm-5">
                                            <textarea class="form-control" name="soal" required="required"></textarea>
                                            </div>
                                          </div>
                                    <div class="form-group row">
                                      <label  class="col-sm-2 col-form-label">Opsi A</label>
                                      <div class="col-sm-5">
                                        <textarea class="form-control" name="opsi_a" required="required"></textarea>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label  class="col-sm-2 col-form-label">Opsi B</label>
                                      <div class="col-sm-5">
                                        <textarea class="form-control" name="opsi_b" required="required"></textarea>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label  class="col-sm-2 col-form-label">Opsi C</label>
                                      <div class="col-sm-5">
                                        <textarea class="form-control" name="opsi_c" required="required"></textarea>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label  class="col-sm-2 col-form-label">Opsi D</label>
                                      <div class="col-sm-5">
                                        <textarea class="form-control" name="opsi_d" required="required"></textarea>
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label  class="col-sm-2 col-form-label">Jawaban Benar</label>
                                      <div class="col-sm-5">
                                      <select name="jawaban_benar">
                                            <option value="a">A</option>
                                            <option value="b">B</option>
                                            <option value="c">C</option>
                                            <option value="d">D</option>
                                        </select>
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
