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
  <br>
   <h3>Tiket Pemesanan Event</h3>
        <br>
        @foreach($tiket as $t)
          <div class="tiket-card">
            <div class="card-oren">
            </div>
            <div class="nama-pengguna">{{$t->nama}}</div>
            <div class="harga-tiket"> Harga Tiket : {{$t->harga_tiket}} </div>
            <div class="nama-event">{{$t->nama_event}}</div>
            <div class="token">{{$t->token}}</div>
          </div>
          <br>
          @endforeach
          <br>
    </div>


<br>
<br>
<br>

<div class="container">
  <h3>Tiket Penyewaan Sepeda</h3>
    <br>
    @foreach($tiketsepeda as $datas)
      <div class="tiket-card">
        <div class="card-oren">
        </div>
        <div class="nama-pengguna">{{$datas->nama}}</div>
        <div class="harga-tiket"> Harga Sepeda : {{$datas->harga}} </div>
        <div class="jenis-sepeda">{{$datas->jenis}}</div>
        <div class="nama-event">{{$datas->nama_event}}</div>
        <div class="token">{{$datas->token}}</div>
      </div>
      <br>
      @endforeach
      <br>
</div>
</div>

<br>
<br>
<br>



<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      
      <div class="card-body">
          <form method="POST" action="/editprofil">
              @method('patch')
              @csrf

        <div class="modal-body">
        

          <div class="form-group">
            <label for="nama" class="col-form-label">Nama</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ Auth::user()->nama }}" autocomplete="nama" autofocus>

            @error('nama')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
          </div>

            <div class="form-group">
                <label for="jenis_kelamin" class="col-form-label">Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control @error('jenis_kelamin') is-invalid @enderror">
                        <option value="L" autocomplete="jenis_kelamin" autofocus>Laki-laki</option>
                        <option value="P"autocomplete="jenis_kelamin" autofocus>Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
    
                <div class="form-group">
                    <label for="nomor_hp" class="col-form-label">Nomor Telepon</label>
                    <input type="text" class="form-control @error('nomor_hp') is-invalid @enderror" name="nomor_hp" value="{{ Auth::user()->nomor_hp }}" autocomplete="nomor_hp" autofocus>

                    @error('nomor_hp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>

                  <div class="form-group">
                      <label for="tanggal_lahir" class="col-form-label">Tanggal Lahir</label>
                      <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir" value="{{ Auth::user()->tanggal_lahir }}" autocomplete="tanggal_lahir" autofocus>

                      @error('tanggal_lahir')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-form-label">Email</label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>

       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batalkan</button>
        <button type="submit" class="btn btn-primary" style="background-color: #F38230; border:#F38230">Update</button>

       </form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
</div>




@include('include.upcommingevent')
@include('include.signup')
@include('include.footer')
@include('include.logoutmodal')

  <!-- Bootstrap core JavaScript -->
  <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
