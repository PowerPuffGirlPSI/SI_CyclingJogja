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
              <h6 class="m-0 font-weight-bold text-primary">Data Penyewa Sepeda</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                            <th>No</th>
                            <th>Peserta</th>
                            <th>Sepeda yang disewa</th>
                            <th>Kondisi</th>
                            <th>Status</th>
                            <th>Status Penyewaan</th>
                            <th>Kondisi Kembali Penyewaan</th>
                            <th>No Token</th>
                            <th>Tanggal Pesan</th>
                            <th>Update</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                            <th>No</th>
                            <th>Peserta</th>
                            <th>Sepeda yang disewa</th>
                            <th>Kondisi</th>
                            <th>Status</th>
                            <th>Status Penyewaan</th>
                            <th>Kondisi Kembali Penyewaan</th>
                            <th>No Token</th>
                            <th>Tanggal Pesan</th>
                            <th>Update</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
                   $no=1;
                  ?>
                  @foreach($penyewa as $p)
                <tr>
                   <td>{{$no++}}</td>
                   <td>{{$p->id_user}}</td>
                   <td>{{$p->id_sepeda}}</td>
                   <td>{{$p->kondisi}}</td>
                   <td>{{$p->status}}</td>
                   <td>{{$p->status_penyewaan}}</td>
                   <td>{{$p->kondisi_kembali_penyewaan}}</td>
                   <td>{{$p->token}}</td>
                   <td>{{$p->created_at}}</td>
                   <td>
                      <a href="/admin/edit_penyewa/{{ $p->id }}" class="btn btn-primary">Edit</a>
                      <a href="/admin/hapus_penyewa/{{ $p->id }}" class="btn btn-primary">Hapus</a>
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
