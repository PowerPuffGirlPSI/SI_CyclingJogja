

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cycling Jogja Admin - Laporan</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
  <link href="/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="/admin/css/sb-admin-2.min.css" rel="stylesheet">
  <link href="/admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <script src="/admin/vendor/chart.js/Chart.js"></script>
  <style>
    .card-header{
      background-color: rgba(249, 105, 14, 1);
    }
  </style>
</head>

<body id="page-top">

  <div id="wrapper">

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin/dashboard">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Cycling Jogja Admin</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item">
        <a class="nav-link" href="/admin/dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Menu
      </div>
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

      <li class="nav-item active">
        <a class="nav-link" href="/admin/laporan_sepeda">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Laporan</span></a>
      </li>
          
      <li class="nav-item active">
        <a class="nav-link"  href="/admin/laporan_peserta">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Peserta Event</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link"  href="/admin/laporan_penyewa">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Penyewa Sepeda</span></a>
      </li>


      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>
      </ul>
    <div class="container">
       <div class="col-md-12">
        <!-- LAPORAN TIKET-->
        <div id="acara">
          <div class="card">
            <div class="card-header">
            <a class="text-white ">
              Peminat berdasarkan acara
            </a>
            </div>
            <div class="card-body">
              <div class="chart-container">
                <div class="bar-chart-container">
                  <canvas id="bar-chart" style="display: block; width: 400px; height: 100px;" width="400" height="100" class="chartjs-render-monitor cc_cursor"></canvas>
                </div>
              </div> 
            </div>
          </div>
        </div>
        
        <script>
          $(function(){
            var cData = JSON.parse(`<?php echo $chart_data; ?>`);
            var ctx = $("#bar-chart");
              //bar chart data
            var data = {
              labels: cData.label,
                datasets: [
                  {
                    label: "Peminat",
                    data: cData.data,
                    backgroundColor: [
                      'rgba(255, 206, 86)',
                      'rgba(255, 206, 86)',
                      'rgba(255, 206, 86)',
                      'rgba(255, 206, 86)',
                      'rgba(255, 206, 86)',
                      'rgba(255, 206, 86)',
                      'rgba(255, 206, 86)',
                    ],
                    borderColor: [
                      'rgba(255, 206, 86)',
                      'rgba(255, 206, 86)',
                      'rgba(255, 206, 86)',
                      'rgba(255, 206, 86)',
                      'rgba(255, 206, 86)',
                      'rgba(255, 206, 86)',
                      'rgba(255, 206, 86)',
                    ],
                    borderWidth: [1, 1, 1, 1, 1,1,1]
                  }
                ]
            };

            var options = {
              responsive: true,
              title: {
                display: true,
                position: "top",
                text: "",
                fontSize: 18,
                fontColor: "#111"
              },
              legend: {
                display: true,
                position: "bottom",
                labels: {
                fontColor: "#333",
                fontSize: 16
                }
              }
            };

            var chart= new Chart(ctx, {
              type: "bar",
              data: data,
              options: options
            });
        
          });
        </script>
      </div>

      <!-- chart 2 -->
      <div class="col-md-12" style="margin-top:50px">
          <!-- LAPORAN SEPEDA -->
        <div id="sepeda">
          <div class="card">
            <div class="card-header">
            <a class="text-white ">
              Peminat sepeda berdasarkan jenis
            </a>
            </div>
            <div class="card-body">
              <div class="chart-container">
                <div class="pie-chart-container">
                  <canvas id="pie-chart-1" style="display: block; width: 400px; height: 100px;" width="400" height="100" class="chartjs-render-monitor cc_cursor"></canvas>
                </div>
              </div> 
            </div>
          </div>
      </div>

        <script>
          $(function(){
            var cData1 = JSON.parse(`<?php echo $chart_data1; ?>`);
            var ctx1 = $("#pie-chart-1");
        
              //pie chart data
            var data1 = {
              labels: cData1.label1,
                datasets: [
                  {
                    label: "Users Count",
                    data: cData1.data1,
                    backgroundColor: [
                      'rgba(255, 206, 86)',
                      'rgba(241, 90, 34, 1)',
                      'rgba(75, 192, 192)',
                      'rgba(54, 162, 235)',
                      'rgba(153, 102, 255)',
                      'rgb(192, 192, 102)',
                      'rgba(255, 159, 64)',
                    ],
                    borderColor: [
                      'rgba(255, 206, 86)',
                      'rgba(241, 90, 34, 1)',
                      'rgba(75, 192, 192)',
                      'rgba(54, 162, 235)',
                      'rgba(153, 102, 255)',
                      'rgb(192, 192, 102)',
                      'rgba(255, 159, 64)',
                    ],
                    borderWidth: [1, 1, 1, 1, 1,1,1]
                  }
                ]
            };

            var options = {
              responsive: true,
              title: {
                display: true,
                position: "top",
                text: "",
                fontSize: 18,
                fontColor: "#111"
              },
              legend: {
                display: true,
                position: "bottom",
                labels: {
                fontColor: "#333",
                fontSize: 16
                }
              }
            };

            var chart1 = new Chart(ctx1, {
              type: "pie",
              data: data1,
              options: options
            });
        
          });
        </script>
        
      </div>

      <!-- chart 3 -->
      <div class="col-md-12" style="margin-top:50px">

       <!-- LAPORAN PENDAPATAN -->
       <div id="pendapatan">
        <div class="card">
          <div class="card-header">
          <a class="text-white ">
            Pendapatan tiket per acara
          </a>
          </div>
          <div class="card-body">
            <div class="chart-container">
              <div class="line-chart-container">
                <canvas id="line-chart-3" style="display: block; width: 400px; height: 100px;" width="400" height="100" class="chartjs-render-monitor cc_cursor"></canvas>
              </div>
            </div> 
          </div>
        </div>
      </div>

        <script>
          $(function(){
            var cData2 = JSON.parse(`<?php echo $chart_data2; ?>`);
            var ctx2 = $("#line-chart-3");
        
              //line chart data
            var data2 = {
              labels: cData2.label2,
                datasets: [
                  {
                    label: "Pendapatan",
                    data: cData2.data2,
                    backgroundColor:'rgba(255, 206, 86)',
                    borderColor:'rgba(255)',
                    borderWidth: [15, 15, 15, 15, 15,15,15],
                    fill: true,
                  }
                ]
            };

            var options = {
              responsive: true,
              title: {
                display: true,
                position: "top",
                text: "",
                fontSize: 18,
                fontColor: "#111"
              },
              legend: {
                display: true,
                position: "bottom",
                labels: {
                fontColor: "#333",
                fontSize: 16
                }
              }
            };

            var chart2 = new Chart(ctx2, {
              type: "line",
              data: data2,
              options: options
            });
        
          });
        </script>
      </div>

    </div>

  </div>


  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  @include('include.logoutmodal')

  <script src="/admin/vendor/jquery/jquery.min.js"></script>
  <script src="/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <script src="/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  <script src="/admin/js/sb-admin-2.min.js"></script>

  <script src="/admin/vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="/admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <script src="/admin/js/demo/datatables-demo.js"></script>
  <script src="/admin/js/demo/chart-pie-demo.js "></script>
  <script src="/admin/js/demo/chart-bar-demo.js"></script>


</body>

</html>