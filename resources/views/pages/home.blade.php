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


  <!---- @START__Daftar_Mahasiswa_Teregistrasi --->
  <section class="section bg-white" id="features">
    <div class="container">
      <div data-aos="fade-down" class="row align-items-center mb-5">
        <div class="col-md-12 ms-md-auto order-1 order-md-2">
          <div class="container">
            <canvas id="chartRegisterUsers"></canvas>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.25.0/axios.min.js" integrity="sha512-/Q6t3CASm04EliI1QyIDAA/nDo9R8FQ/BULoUFyN4n/BDdyIxeH7u++Z+eobdmr11gG5D/6nPFyDlnisDwhpYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    axios.get('/api/countRegis').then((response) => {
      const registeredUsers = response.data.data.regis;
      const users2018 = registeredUsers[0];
      const users2019 = registeredUsers[1];
      const users2020 = registeredUsers[2];
      const users2021 = registeredUsers[3];


      const data = {
        labels: [ 
          users2018.tahun,
          users2019.tahun,
          users2020.tahun,
          users2021.tahun,
        ],
        datasets: [{
          label: 'My First dataset',
          backgroundColor: [
            'rgba(255, 99, 132, 1)',
            'rgba(54, 162, 235, 1)',
            'rgba(255, 206, 86, 1)',
            'rgba(75, 192, 192, 1)',
          ],
          borderColor: 'rgb(255, 99, 132)',
          data: [
            users2018.jumlah, 
            users2019.jumlah, 
            users2020.jumlah, 
            users2021.jumlah,
          ],
        }],
      };
      

      // INI YANG ASLI BIKIN BINGUNG, LAGI NGOPREK INI SI NANTI MAU DILANJUTIN
      const config = {
        type: 'bar',
        data: {
          labels: [
            users2018.tahun,
            users2019.tahun,
            users2020.tahun,
            users2021.tahun,
          ],
          datasets: [
            {
              label: 'Mahasiswa Angkatan 2018',
              backgroundColor: 'rgba(255, 99, 132, 1)',
              data: [users2018.jumlah],
            },
            {
              label: 'Mahasiswa Angkatan 2019',
              backgroundColor: 'rgba(54, 162, 235, 1)',
              data: [users2019.jumlah],
            },
            {
              label: 'Mahasiswa Angkatan 2020',
              backgroundColor: 'rgba(255, 206, 86, 1)',
              data: [users2020.jumlah],
            },
            {
              label: 'Mahasiswa Angakatan 2021',
              backgroundColor: 'rgba(75, 192, 192, 1)',
              data: [users2021.jumlah],
            }
          ],
        },
        options: {
          plugins: {
            title: {
              display: true,
              text: 'Data Mahasiswa yang Melakukan Registrasi'
            }
          }
        }
      };

      const chartRegisterUsers = new Chart(
        document.getElementById('chartRegisterUsers'),
        config,
      );
    });
  </script>
  <!---- @END__Daftar_Mahasiswa_Teregistrasi --->

  
  <!---- @START__Syarat_dan_Ketentuan--->
  <section class="section bg-light" id="features">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-7 text-center">
          <h2 class="fw-bold">Syarat Dan Ketentuan</h2>
          <p class="text-muted">Syarat & Ketentuan Ini Harus dibaca bersamaan dengan Kebijakan Privasi.</p>
        </div>
      </div>

      <div data-aos="fade-down" class="row align-items-center mb-5">
        <div class="col-md-5 order-2 order-md-1 mt-md-0 mt-5">
          <p class="text-muted mb-5">
            <ul>
              <li>Pemilihan Pasangan calon Ketua & Wakil BEM dilaksanakan secara LANGSUNG & TIDAK BOLEH DIWAKILKAN dengan mengedepankan prinsip-prinsip Rahasia, Umum, Bebas, jujur dan adil.</li>
              <li>Pemilih Merupakan mahasiswa aktif STT Terpadu Nurul FIkri Yang Telah Melakukan Registrasi Ulang pada waktu yang telah ditetapkan.</li>
              <li>Pemungutan Suara Secara Daring pada Web E-Pemira Dilakukan Pada Tanggal 13 Februari 2021 Pukul 07.00 Sampai Pukul 20.00</li>
              <li>Voting Akan ditutup pada tanggal 13 Februari 2021 pada pukul 21.00</li>
              <li>Pemilihan ini hanya dilakukan satu kali dan tidak dapat melakukan pemilihan ulang.</li>
              <li>Kandidat terpilih ditetapkan berdasarkan suara terbanyak hasil pemilihan.</li>
            </ul>
          </p>
        </div>

        <div class="col-md-6 ms-md-auto order-1 order-md-2">
          <div class="position-relative">
            <div class="ms-5 features-img">
              <img src="{{ asset('/images/features-1.png') }}" alt="" class="img-fluid d-block mx-auto rounded" />
            </div>
            <img src="{{ asset('/images/dot-img.png') }}" alt="" class="dot-img-left" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---- @END__Syarat_dan_Ketentuan ---->

@endsection

