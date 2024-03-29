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
              <h6 class="m-0 font-weight-bold text-primary">Data Event</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                            <th>No</th>
                            <th>Soal</th>
                            <th>Opsi A</th>
                            <th>Opsi B</th>
                            <th>Opsi C</th>
                            <th>Opsi D</th>
                            <th>Jawaban Benar</th>
                            <th>Update</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>No</th>
                            <th>Soal</th>
                            <th>Opsi A</th>
                            <th>Opsi B</th>
                            <th>Opsi C</th>
                            <th>Opsi D</th>
                            <th>Jawaban Benar</th>
                            <th>Update</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
                    $no=1;
                  ?>
                        @foreach($soal as $so)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{ $so->soal}}</td>
                            <td>{{ $so->opsi_a}}</td>
                            <td>{{ $so->opsi_b}}</td>
                            <td>{{ $so->opsi_c}}</td>
                            <td>{{ $so->opsi_d}}</td>
                            <td>{{ $so->jawaban_benar}}</td>
                            <td>
                                <a href="/admin/hapus_soal/{{ $so->id }}" class="btn btn-primary">Hapus</a>
                                <a href="/admin/edit_soal/{{ $so->id }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                  </tbody>
                </table>
                <a href="/admin/tambah_soal" class="btn btn-primary">Tambah</a>
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
