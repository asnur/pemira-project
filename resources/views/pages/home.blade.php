@extends('layouts.app')

@section('content')
  <!---  @START__Hero -->
  <section 	
    id="home"
    class="hero-1 bg-center bg-primary position-relative" 
    style="background-image: url('{{ asset('/images/hero-1-bg.png') }}');"
  >
    <!---- @START__Hero__Container --->
    <div class="container">
      <div class="row align-items-center hero-content">
        <div class="col-lg-5">
          <h1 class="text-white display-4 font-weight-semibold mb-4 hero-1-title">
            E-PEMIRA STTNF 2020-2021
          </h1>
          <p class="text-white-70 mb-4 mb-lg-5">
            Pemilihan raya Online STT Terpadu Nurul Fikri 2020-2021
          </p>
          <a href="#" class="btn btn-lg btn-light rounded-pill me-2">
            Mulai Voting
          </a>
          <div class="d-inline-block magic-hover magic-hover__square " data-bs-toggle="modal" data-bs-target="#watchvideomodal">
            <a href="javascript: void(0);" class="video-play-icon text-white">
              <span class="play-icon-circle me-2">
                <i class="icon-sm icon" data-feather="play"></i>
              </span>
              <span class="">Apa itu pemira ?</span>
            </a>
          </div>
        </div>
        <div data-aos="fade-down" class="blu col-lg-6 col-sm-10 mx-auto ms-lg-auto me-lg-0">
          <div class="mt-lg-0 mt-4">
            <img 
              src="{{ asset('/images/logo.png') }}" 
              style="width: 100%" 
              alt="" 
              class="img-md-responsive" 
            />
          </div>
        </div>
      </div>

      <!-- @START__Hero__Modal -->
      <div class="modal fade bd-example-modal-lg" id="watchvideomodal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
          <div class="modal-content home-modal">
            <div class="modal-header border-0">
              <button type="button" class="btn-close float-end" data-bs-dismiss="modal">
                <i class="mdi mdi-close"></i>
              </button>
            </div>
            <div class="ratio ratio-16x9">
                <video style="width: 100%" controls>
                  <source src="{{ asset('assets/pemira.mp4') }}" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
          </div>
        </div>
      </div> 
      <!-- @END__Hero__Modal -->
    </div> 
    <!-- @END__Hero__Container -->

    <!-- @START__Hero__Shape -->
    <div class="hero-bottom-shape">
      <img 
        src="{{ asset('/images/hero-1-bottom-shape.png') }}" 
        alt="" 
        class="img-fluid d-block mx-auto" 
      />
    </div> 
    <!-- @END__Hero__Shape -->
  </section>
  <!---- @END__Hero -->


  <!-- @START__Tata_Cara_Pemilihan -->
  <section class="section container" id="services">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-7 text-center">
        <h2 class="fw-bold">Tata Cara Pemilihan</h2>
        <p class="text-muted">Tata Cara Pemilihan Harap dibaca dengan seksama.</p>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-3">
        <div class="service-box text-center px-4 py-5 position-relative mb-4">
          <div data-aos="fade-down" class="service-box-content p-4">
            <div class="icon-mono service-icon avatar-md mx-auto mb-4">
              <i class="" data-feather="log-in"></i>
            </div>
            <h4 class="mb-3 font-size-22">Registrasi Ulang</h4>
            <p class="text-muted mb-0">Registrasi Ulang untuk mengaktifkan akun</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="service-box text-center px-4 py-5 position-relative mb-4">
          <div data-aos="fade-down" class="service-box-content p-4">
            <div class="icon-mono service-icon avatar-md mx-auto mb-4">
              <i class="" data-feather="log-in"></i>
            </div>
            <h4 class="mb-3 font-size-22">Login</h4>
            <p class="text-muted mb-0">Login menggunakan akun yang sudah diberikan via email</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="service-box text-center px-4 py-5 position-relative mb-4">
          <div data-aos="fade-down" class="service-box-content p-4">
            <div class="icon-mono service-icon avatar-md mx-auto mb-4">
              <i class="" data-feather="user-check"></i>
            </div>
            <h4 class="mb-3 font-size-22">Memilih Kandidat</h4>
            <p class="text-muted mb-0">Pilih kandidat yang ingin anda pilih.</p>
          </div>
        </div>
      </div>

      <div class="col-lg-3">
        <div class="service-box text-center px-4 py-5 position-relative mb-4">
          <div data-aos="fade-down" class="service-box-content p-4">
            <div class="icon-mono service-icon avatar-md mx-auto mb-4">
              <i class="" data-feather="server"></i>
            </div>
            <h4 class="mb-3 font-size-22">Terima Bukti Pemilihan</h4>
            <p class="text-muted mb-0">Kamu akan dikirimkan email bukti kamu telah memilih kandidat.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---- @END__Tata_Cara_Pemilihan --->

  <section class="section bg-light" id="features">
    <div class="container">
      <div data-aos="fade-down" class="row align-items-center mb-5">
        <div class="col-md-12 ms-md-auto order-1 order-md-2">
          <div id="live-pemilih" ></div>
        </div>
      </div>
    </div>
  </section>


  <div class="container">
    <canvas id="myChart"></canvas>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    const labels = [
      'January',
      'February',
      'March',
      'April',
      'May',
      'June',
    ];
  
    const data = {
      labels: labels,
      datasets: [{
        label: 'My First dataset',
        backgroundColor: 'rgb(255, 99, 132)',
        borderColor: 'rgb(255, 99, 132)',
        data: [0, 10, 5, 2, 20, 30, 45],
      }]
    };
  
    const config = {
      type: 'line',
      data: data,
      options: {}
    };
  </script>

  <script>
    const myChart = new Chart(
      document.getElementById('myChart'),
      config
    );
  </script>
@endsection

