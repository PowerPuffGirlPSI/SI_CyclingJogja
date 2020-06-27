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
  <div class="card">
  <br><br>
  <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/jogja.jpg');"></div>
<div class="row">
  <div class="col-md-1">
  </div>
  <div class="col-md-5">
    <img src="{{ url('/images/oracle.jpeg') }}">
  </div>
  <div class="col-md-5">
    <h2 class="card-title">Tentang Web Kami</h2>
    <p class="card-text"></p>
    <div class="features-icons-item mx-auto mb-0 mb-lg-3">
      <div class="features-icons-icon d-flex">
      Oracle. Merupakan sebuah tim yang terbentuk pada tahun 2019. Berdasarkan hasil kesepakatan dengan
      Dinas Pariwisata Provinsi DIY, kami berkesempatan untuk menciptakan sebuah aplikasi berbasis web dengan 
      label "Cycling Jogja". <br>
      Persentase pendapatan Provinsi DIY di sektor pariwisata masih tergolong fluktuatif. Hal ini akan memengaruhi
      stabilitas program pengembangan DIY. Sehingga Dinas Pariwisata Yogyakarta mencanangkan kebijakan kerja
      untuk meningkatkan promosi dan pemasaran pariwisata dengan meluncurkan program Cycling Jogja. <br>
      Cycling Jogja menyuguhkan suasana berwisata yang berbeda dengan fitur yang lengkap. Disetiap bulannya kami
      menyediakan rute perjalanan yang melalui tempat wisata, warung kuliner, dan acara yang sedang berlangsung pada
      bulan tersebut, beserta infomasinya secara lengkap. Menariknya, Cycling Jogja menyediakan fitur sewa sepeda
      dengan harga terjangkau dan dapat dipesan dimanapun dan kapanpun.<br>
      Cycling Jogja berkomitmen untuk menjadi mitra berwisata Anda yang menyenangkan dengan bersepeda.
      </div>
    </div>
  </div>
</div>
<br><br>
 
</div>
</div>
<section class="testimonials text-center bg-light">
  <div class="container">
    <br><br><br>
    <h2 class="mb-5">Tim PPG</h2>
    <div class="row">
      <div class="col-lg-3">
        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <img class="img-fluid rounded-circle mb-3" src="img/nabila.jpeg" alt="">
          <h5>Nabiilah Nuur Ainii</h5>
          <p class="font-weight-light mb-0">18523252</p>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <img class="img-fluid rounded-circle mb-3" src="img/dilfa.jpeg" alt="">
          <h5>Dilfa Salsabiela</h5>
          <p class="font-weight-light mb-0">18523054</p>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="testimonial-item mx-auto mb-5 mb-lg-0">
          <img class="img-fluid rounded-circle mb-3" src="img/sabil.jpeg" alt="">
          <h5>Salsabila</h5>
          <p class="font-weight-light mb-0">18523160</p>
        </div>
      </div>
      <div class="col-lg-3">
          <div class="testimonial-item mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3" src="img/avil.jpeg" alt="">
            <h5>Avilia Kusumaputeri N</h5>
            <p class="font-weight-light mb-0">18523174</p>
          </div>
        </div>
    </div>
  </div>
</section>


</div>
  @include('include.signup')
  @include('include.footer')
  @include('include.logoutmodal')

  <!-- Bootstrap core JavaScript -->
  <script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
