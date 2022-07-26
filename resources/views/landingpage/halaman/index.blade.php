@extends('landingpage.layout.TampilanLandingpage')
@section('content')


<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up" class="aos-init aos-animate">Analisis Sentiment Terhadap Kesehatan Mental Selama Pandemi</h1>
                <!-- <h4 data-aos="fade-up"></h4> -->
                <h6 class="mt-3" style="line-height: 180%;" data-aos="fade-up" data-aos-delay="400">Ini adalah web analisis sentiment terhadap kesehatan mental selama pandemi covid-19 berlangsung</h6>
                <div data-aos="fade-up" data-aos-delay="800" class="aos-init aos-animate">
                    <a href="#about" class="btn-get-started scrollto">Get Started</a>
                </div>
                <!-- <div data-aos="fade-up" data-aos-delay="800">
                    <a href="#about" class="btn-get-started scrollto"><i class="fas fa-phone-alt"></i> Mulai</a>
                </div> -->
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
                <img src="asset/img/sentiment.png" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <section id="clients" class="clients clients">
      <div class="container">

        <div class="row">

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-1.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-2.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in" data-aos-delay="100">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-3.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in" data-aos-delay="200">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-4.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in" data-aos-delay="300">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-5.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in" data-aos-delay="400">
          </div>

          <div class="col-lg-2 col-md-4 col-6">
            <img src="assets/img/clients/client-6.png" class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in" data-aos-delay="500">
          </div>

        </div>

      </div>
    </section>
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Tentang Kami</h2>
            </div>

            <div class="row content">
                <div class="col-lg-6 " data-aos="fade-up" data-aos-delay="150">
                    <img src="asset/img/sentiment-icon.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-lg-6 mt-5 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
                    <p>
                        E - Sentiment Analysis
                    </p>
                    <ul>
                        <li><i class="ri-check-double-line"></i> Website ini ..</li>
                        <!-- <li><i class="ri-check-double-line"></i> Website kami menyediakan penyewaan atau melakukan
                            kontrak jasa tenaga kerja dengan perusahaan outsourcing</li> -->
                    </ul>
                   
                </div>
            </div>

        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Statistik</h2>
                <p>..</p>
            </div>

            
            <!-- <div class="row">
                {{-- @foreach ($jasa as $jasa) --}}
                <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mt-3 mb-lg-0">
                    <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                        <div class="icon"><i class="fas fa-user-shield"></i></div>
                        <h4 class="title"><a href="">abc</a></h4>
                        <p class="description">apa aja</p>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div> -->

        </div>
    </section><!-- End Services Section -->


    <!-- ======= Team Section ======= -->
    <section id="team" class="team section-bg">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>Data Sentiment</h2>
                <p>...</p>
            </div>

            <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                            <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Tanggal</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">Tweet</th>
                                <th class="text-center">Kategori</th>
                            </tr>
                            </thead>
                            <tbody>
                            {{--@foreach($training as $trainings)--}}
                            <tr>
                                <td class="text-center">1</td>
                                <td class="text-center">27/07/2020</td>
                                <td class="text-center">XX</td>
                                <td class="text-center">Aku menyukai bunga</td>
                                <td class="text-center">Happiness</td>
                            </tr>
                            {{--@endforeach--}}
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
            </div> <!-- end row -->

        </div>
    </section><!-- End Team Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
    <div class="container">

<div class="section-title aos-init aos-animate" data-aos="fade-up">
  <h2>Masukan</h2>
</div>

<div class="row">

  <div class="col-lg-4 col-md-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
    <div class="contact-about">
      <h3>eDeteksiEmosi</h3>
      <p>Teks : </p>
      <p>Sentiment : </p>
      <!-- <div class="social-links">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div> -->
    </div>
  </div>

  <div class="col-lg-3 col-md-6 mt-4 mt-md-0 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
    <!-- <div class="info">
      <div>
        <i class="ri-map-pin-line"></i>
        <p>A108 Adam Street<br>New York, NY 535022</p>
      </div>

      <div>
        <i class="ri-mail-send-line"></i>
        <p>info@example.com</p>
      </div>

      <div>
        <i class="ri-phone-line"></i>
        <p>+1 5589 55488 55s</p>
      </div>

    </div> -->
  </div>

  <div class="col-lg-5 col-md-12 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
    <form action="f{{route('store')}}" method="post" role="form" class="php-email-form">
      <div class="form-group">
        <textarea class="form-control" name="opini" rows="5" placeholder="Text ..." required></textarea>
      </div>
      <div class="text-center"><button type="submit">Predict</button></div>
    </form>
  </div>

</div>

</div>
        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

@endsection
