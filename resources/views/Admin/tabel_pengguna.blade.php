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
              <h6 class="m-0 font-weight-bold text-primary">Data Pengguna</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Jenis Kelamin</th>
                      <th>Nomor HP</th>
                      <th>Tanggal Lahir</th>
                      <th>Riwayat</th>
                      <th>Email</th>
                      <th>Tanggal Dibuat</th>
                      <th>Tanggal Update</th>
                      <th>Update</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Nomor HP</th>
                            <th>Tanggal Lahir</th>
                            <th>Riwayat</th>
                            <th>Email</th>
                            <th>Tanggal Dibuat</th>
                            <th>Tanggal Update</th>
                            <th>Update</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
                  $no=1;
                  ?>
                        @foreach($users as $u)
                        <tr>
                            <td>{{ $no++}}</td>
                            <td>{{ $u->nama }}</td>
                            <td>{{ $u->jenis_kelamin}}</td>
                            <td>{{ $u->nomor_hp}}</td>
                            <td>{{ $u->tanggal_lahir}}</td>
                            <td>{{ $u->riwayat}}</td>
                            <td>{{ $u->email}}</td>
                            <td>{{ $u->created_at}}</td>
                            <td>{{ $u->updated_at}}</td>
                            <td>
                             
                                <a href="/admin/hapus_pengguna/{{ $u->id }}" class="btn btn-primary">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                  </tbody>
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
