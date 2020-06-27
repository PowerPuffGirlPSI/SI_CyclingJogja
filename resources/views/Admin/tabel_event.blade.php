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
                            <th>Gambar Event</th>
                            <th>Nama Event</th>
                            <th>Rincian</th>
                            <th>Waktu Pelaksanaan</th>
                            <th>Titik Start</th>
                            <th>Rute</th>
                            <th>Jarak</th>
                            <th>Durasi</th>
                            <th>Harga Tiket</th>
                            <th>Kuota</th>
                            <th>Update</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                    <th>No</th>
                            <th>Gambar Event</th>
                            <th>Nama Event</th>
                            <th>Rincian</th>
                            <th>Waktu Pelaksanaan</th>
                            <th>Titik Start</th>
                            <th>Rute</th>
                            <th>Jarak</th>
                            <th>Durasi</th>
                            <th>Harga Tiket</th>
                            <th>Kuota</th>
                            <th>Update</th>
                    </tr>
                  </tfoot>
                  <tbody>
                  <?php
                    $no=1;
                  ?>
                        @foreach($events as $e)
                        <tr>
                            <td>{{$no++}}</td>
                            <td><img width="150px" src="{{ url('/images/'.$e->gambar_event) }}"></td>
                            <td>{{ $e->nama_event}}</td>
                            <td>{{ $e->rincian_event}}</td>
                            <td>{{ $e->waktu_pelaksanaan}}</td>
                            <td>{{ $e->lokasi}}</td>
                            <td>{{ $e->rute}}</td>
                            <td>{{ $e->jarak}}</td>
                            <td>{{ $e->durasi}}</td>
                            <td>{{ $e->harga_tiket}}</td>
                            <td>{{ $e->kuota}}</td>

                            <td>
                                <a href="/admin/hapus_event/{{ $e->id }}" class="btn btn-primary">Hapus</a>
                                <a href="/admin/edit_event/{{ $e->id }}" class="btn btn-primary">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                  </tbody>
                </table>
                <a href="/admin/tambah_event" class="btn btn-primary">Tambah</a>
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
