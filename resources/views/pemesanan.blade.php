<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Cycling Jogja</title>

  <!-- Bootstrap core CSS -->
<link href="{{url('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{url('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet">
  <link href="{{url('vendor/simple-line-icons/css/simple-line-icons.css')}}" rel="stylesheet" type="text/css">
  <link href="{{url('https://fonts.googleapis.com/css')}}"family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->
  <link href="{{url('css/landing-page.min.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/css/custom.css') }}">

<script src="https://kit.fontawesome.com/9845349ab7.js" crossorigin="anonymous"></script>

</head>

<body>
  @include('include.navigation')
  @include('include.header')
  @include('include.icongrid')



    <div class="container">
       
        <div class="col-md-12">
                <div class="profile-content">
                    <h3>Pemesanan Tiket
                      </h3>
                    <div class="row">
                    <div class="card mb-4">
                        <img class="card-img-top" src="{{ url('/images/'.$event[0]->gambar_event) }}" alt="Card image cap">
                        <div class="card-body">
                          <h2 class="card-title">{{ $event[0]->nama_event}}</h2>
                          <p class="card-text">{{ $event[0]->waktu_pelaksanaan}}</p>
                          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                              <div class="features-icons-icon d-flex">
                              <!-- <input type="number" name="id_event" required="required"> -->
                                <table>
                                  <tr>  
                                   <td><h6>Nama</h6></td>
                                   <td>:</td>
                                    <td><h6>{{$user[0]->nama}}</h6></td>
                                  </tr>
                                  <tr>  
                                      <td><h6>No Telepon</h6></td>
                                      <td>:</td>
                                      <td><h6>{{$user[0]->nomor_hp}}</h6></td>
                                    </tr>
                                    <tr>  
                                        <td><h6>Harga Tiket</h6></td>
                                        <td>:</td>
                                        <td><h6>{{ $event[0]->harga_tiket}}</h6></td>
                                      </tr>
                                      
                                </table>
                              </div>
                          <a href="/homepage" class="btn btn-primary" style="background-color:#F38230; border-color:#F38230">Batalkan</a>
                          <a href="/pesan_tiket/{{$event[0]->id}}" class="btn btn-primary" style="background-color:#F38230; border-color:#F38230">Pesan</a>
                            </form>
                        </div>
                      </div>
                </div>
        </div>
      </div>
    </div>
    
</div>

  @include('include.upcommingevent')
  <!-- Call to Action -->
  @include('include.signup')
  @include('include.footer')
  @include('include.logoutmodal')

  <!-- Bootstrap core JavaScript -->
  <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
