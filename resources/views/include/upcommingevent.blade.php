
    <div class="container">

      <!-- Page Heading -->
      <h3 class="my-4">Event Yang Telah Berlalu
        <small></small>
      </h3>

      <!-- Project One -->
      <div class="card">
        <br><br>
      @foreach($events as $q)
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-6">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src="{{ url('/images/'.$q->gambar_event) }}" alt="Card image cap">
          </a>
        </div>
        <div class="col-md-4">
        <h2 class="card-title">{{ $q->nama_event}}</h2>
        <p class="card-text">{{ $q->rincian_event}} </p>
        <div class="features-icons-item mx-auto mb-0 mb-lg-3">
          <div class="features-icons-icon d-flex">
            <table>
              <tr>  
                <td><i class="far fa-calendar m-auto text primary" style="color:#F38230;"></i></td>
                <td> </td>
                <td><h6>{{ $q->waktu_pelaksanaan}}</h6></td>
              </tr>
              <tr>  
                  <td><i class="fas fa-biking m-auto text primary" style="color:#F38230;"></i></td>
                  <td> </td>
                  <td><h6>{{ $q->rute}}</h6></td>
                </tr>
                <tr>  
                  <td><i class="fas fa-route m-auto text primary" style="color:#F38230;"></i></td>
                  <td> </td>
                  <td><h6>{{ $q->jarak}}</h6></td>
                </tr>
          
                    <td><i class="fas fa-ticket-alt m-auto text primary" style="color:#F38230;"></i></td>
                    <td> </td>
                    <td><h6>{{ $q->harga_tiket}}</h6></td>
                  </tr>
            </table>
          </div>
          </div>
          <!--<a href="/pemesanan/{{ $q->id}}" class="btn btn-primary" style="background-color:#F38230; border-color:#F38230">Gabung</a>-->
        </div>
      </div>
      <br><br>
        @endforeach
      </div>
     
      <br>
      <br>
      <br>
      <section class="showcase">
        <div class="container-fluid p-0">
          <div class="row no-gutters">
    
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/sepeda.jfif');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
              <h2>Tahukah Anda?</h2>
              <p class="lead mb-0">Selain meningkatan suasa hati, bersepeda juga dapat mencegah penyakit jantung.
                Bersepeda sejauh 20 mil dalam seminggu dapat mengurangi resiko terkena penyakit jantung koroner sebesar 50 persen. Sementara itu bersepeda juga bisa menghilangkan kerutan tanda-tanda penuaan.</p>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-lg-6 text-white showcase-img" style="background-image: url('img/pantai1.jpg');"></div>
            <div class="col-lg-6 my-auto showcase-text">
              <h2>Pantai Nglambor</h2>
              <p class="lead mb-0">Di Yogya juga terdapat pantai yang bisa untuk snorkeling asyik lho, tempatnya di pantai nglambor. Tidak seperti pantai selatan lainnya, disini terdapat laguna dengan air yang cukup tenang. Kekayaan alam disini bisa kita nikmati sambil snorkeling. Selain itu, terdapat juga berbagai spot unik dan asyik untuk berfoto. Anda juga bisa menyeberang ke pulau kecil menggunakan jembatan tali, sambil uji nyali! Destinasi wisata Jogja yang satu ini wajib anda kunjungi.</p>
            </div>
          </div>
          <div class="row no-gutters">
            <div class="col-lg-6 order-lg-2 text-white showcase-img" style="background-image: url('img/mangunan.jpg');"></div>
            <div class="col-lg-6 order-lg-1 my-auto showcase-text">
              <h2>Kebun Buah Mangunan</h2>
              <p class="lead mb-0">Kebun Buah Mangunan menawarkan pemandangan alam yang indah sekali. Menjadi salah satu tempat hits di Jogja, pengunjung pun berdatangan kesini karena daya tariknya. Salah satu ciri khasnya; view kabut yang indah, mengular membungkus dataran. Dan semuanya bisa anda nikmati dari ketinggian.</p>
            </div>
          </div>
        </div>
      </section>
    

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