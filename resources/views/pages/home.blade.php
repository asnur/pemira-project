@extends('layouts.app')
@section('content')
  <!-- @START__HERO -->
  <div class="w-100 jumbutron">
    <div class="container jumbutron-content">
      <div class="row">
        <div class="col-md-8">
          <h1 class="fs-1">Selamat Datang di Website Pemira</h1>
          <p class="fs-5 mt-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime,
            minus rem ullam ea nulla veritatis! Et error officiis, cum hic
            dignissimos reiciendis quas doloremque voluptates labore harum
            obcaecati consequatur doloribus.
          </p>
          <a
            class="btn btn-lg border-2 rounded-pill fw-bold text-white"
            style="background: #08679e;"
            href="#"
          >
            <i class="fa-solid fa-book"></i> Registrasi Ulang
          </a>
          <a
            class="btn btn-lg border mx-3 border-2 rounded-pill fw-bold text-color"
            href="#"
          >
            <i class="fa-solid fa-play"></i> Apa Itu Pemira?
          </a>
        </div>
        <div class="col-md-4">
          <img src="{{ asset('/img/image-header.png') }}" class="w-100" />
        </div>
      </div>
    </div>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      class="wave-header"
      viewBox="0 0 1440 320"
    >
      <path
        fill="#08679e"
        fill-opacity="1"
        d="M0,192L40,165.3C80,139,160,85,240,101.3C320,117,400,203,480,213.3C560,224,640,160,720,144C800,128,880,160,960,176C1040,192,1120,192,1200,197.3C1280,203,1360,213,1400,218.7L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"
      ></path>
    </svg>
    <div class="countdown">
      <span class="fs-1 rounded-pill p-3 px-5" id="demo"></span><br /><br />
      <span class="fs-1 text-center w-100 mt-4 text-white"
        ><i class="fa fa-paper-plane"></i> Menuju Pemira</span
      >
    </div>
    <svg
      xmlns="http://www.w3.org/2000/svg"
      class="wave-header"
      viewBox="0 0 1440 320"
    >
      <path
        fill="#08679e"
        fill-opacity="1"
        d="M0,192L40,165.3C80,139,160,85,240,101.3C320,117,400,203,480,213.3C560,224,640,160,720,144C800,128,880,160,960,176C1040,192,1120,192,1200,197.3C1280,203,1360,213,1400,218.7L1440,224L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z"
      ></path>
    </svg>
  </div>
  @push('scripts')
    <script>
      // Set the date we're counting down to
      let countDownDate = new Date("Mar 16, 2022 00:00:00").getTime();

      // Update the count down every 1 second
      let x = setInterval(function () {
        // Get today's date and time
        let now = new Date().getTime();

        // Find the distance between now and the count down date
        let distance = countDownDate - now;

        // Time calculations for days, hours, minutes and seconds
        let days = Math.floor(distance / (1000 * 60 * 60 * 24));
        let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Output the result in an element with id="demo"
        document.getElementById("demo").innerHTML =
          days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

        // If the count down is over, write some text
        if (distance < 0) {
          clearInterval(x);
          document.getElementById("demo").innerHTML = "EXPIRED";
        }
      }, 1000);
    </script>
  @endpush
  <!-- @END__HERO -->


  <!-- @START__LANGKAH_LANGKAH_VOTING -->
  <div class="guide mb-5" id="guide">
    <div class="container">
      <h1 class="fw-bold text-color mt-5 mb-5 text-center">Langkah Langkah Voting</h1>
      <div class="row align-items-center justify-content-center">
        <div class="col-lg-2 text-center step d-flex align-items-center p-0">
          <div class="card step-guide h-100 border-0">
            <div class="card-body p-0">
              <img src="{{ asset('/img/Mobile login-pana.png') }}" class="img-guide  w-100"  />
              <h4 class="text-color mt-2 fw-bold">Daftar Ulang</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-1 d-flex align-items-center">
          <div class="foot-path"></div>
        </div>
        <div class="col-lg-2 text-center step d-flex align-items-center p-0">
          <div class="card step-guide border-0">
            <div class="card-body p-0">
              <img
                src="{{ asset('/img/Reset password-bro.png') }}"
                class="img-guide w-100"
              />
              <h4 class="text-color mt-2 fw-bold">Login</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-1 d-flex align-items-center">
          <div class="foot-path"></div>
        </div>
        <div class="col-lg-2 text-center step d-flex align-items-center p-0">
          <div class="card step-guide border-0">
            <div class="card-body p-0">
              <img src="{{ asset('/img/Voting-bro.png') }}" class="img-guide w-100" />
              <h4 class="text-color mt-2 fw-bold">Voting</h4>
            </div>
          </div>
        </div>
        <div class="col-lg-1 d-flex align-items-center">
          <div class="foot-path"></div>
        </div>
        <div class="col-lg-2 text-center step p-0 d-flex align-items-center">
          <div class="card step-guide border-0">
            <div class="card-body p-0">
              <img src="{{ asset('/img/Done-pana.png') }}" class="img-guide w-100" />
              <h4 class="text-color mt-2 fw-bold">Selesai</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- @END__LANGKAH_LANGKAH_VOTING -->

  <hr class="container" />
  <br />
  <br />
  <br />

  <section class="section bg-white" id="features">
    <div class="container">
      <div class="row">
  <!---- @START__DAFTAR_MAHASISWA_TEREGISTRASI_ATAU_TIDAK --->
        <div class="col-lg-8">
          <div data-aos="fade-down" class="d-flex justfiy-content-center align-items-center">
              <canvas id="chartRegisterUsers" role="img" aria-label="data mahasiswa sudah teregistrasi dan tidak" ></canvas>
          </div>
        </div>

        @push('scripts')
          <script>
            axios.get('/api/countRegis').then((response) => {
              // index untuk angkatan
              const users2018 = 0;
              const users2019 = 1;
              const users2020 = 2;
              const users2021 = 3;
              
              console.log({ countRegis: response });
      
              const registeredUsers = response.data.data.regis;
              const unregisteredUsers = response.data.data.no_regis;
      
              console.log({ registeredUsers })
      
              // untuk cek apakah value user tahun === index user tahun dan jika salah beri default value 0
              const validateRegisteredUserYear = (year, index) => {
                if (registeredUsers[index] === undefined) { return 0; }
                if (registeredUsers[index].tahun === year) { return registeredUsers[index].jumlah; }
              };
      
              const chartRegisterUsers = new Chart(document.getElementById('chartRegisterUsers'), {
                type: 'bar',
                data: {
                  labels: [
                    2018, 2019, 2020, 2021
                  ],
                  datasets: [
                    {
                      label: 'Telah Teregistrasi',
                      backgroundColor: [
                        'rgba(54, 162, 235, 1)', 
                      ],
                      data: [
                        validateRegisteredUserYear(2018, users2018),
                        validateRegisteredUserYear(2019, users2019),
                        validateRegisteredUserYear(2020, users2020),
                        validateRegisteredUserYear(2021, users2021),
                      ],
                    },
                    {
                      label: 'Belum Teregistrasi',
                      backgroundColor: ['rgba(54, 162, 235, 0.5)'],
                      data: [
                        unregisteredUsers[users2018].jumlah,
                        unregisteredUsers[users2019].jumlah,
                        unregisteredUsers[users2020].jumlah,
                        unregisteredUsers[users2021].jumlah,
                      ],
                    },
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
              });
            });
          </script>
        @endpush
  <!---- @END__DAFTAR_MAHASISWA_TEREGISTRASI_ATAU_TIDAK --->
        
  <!---- @START__LIVE_COUNTING --->
        <div class="col-lg-4">
          <div data-aos="fade-down" class="border d-flex justify-content-center align-items-center mb-5">
            <canvas id="chartVotingSementara" aria-label="chart voting sementara"></canvas>
          </div>
        </div>

        @push('scripts')
          <script>
            axios.get('/api/countVoting').then((response) => {
              console.log({ countVoting: response.data.data });

              const kandidat = response.data.data;

              const chartVotingSementara = new Chart(document.getElementById('chartVotingSementara'), {
                type: 'doughnut',
                data: {
                  labels: [
                    'Kandidat 1',
                    'Kandidat 2',
                  ],
                  datasets: [{
                    label: 'Hasil Vote',
                    data: [kandidat[0].jumlah_suara, kandidat[1].jumlah_suara],
                    backgroundColor: [
                      'rgb(255, 99, 132)',
                      'rgb(54, 162, 235)',
                    ],
                    hoverOffset: 4
                  }]
                },
                options: {
                  // scales: {
                  //   yAxes: [{
                  //     ticks: {
                  //       fontSize: 40
                  //     }
                  //   }]
                  // },
                  plugins: {
                    title: {
                      display: true,
                      text: 'Data Mahasiswa yang Melakukan Registrasi'
                    },
                  },
                },
              });
              // // kandidat 1
              // document.querySelector('#hasilVoteKandidat1').textContent = kandidat[0].jumlah_suara;

              // // kandidat 2
              // document.querySelector('#hasilVoteKandidat2').textContent = kandidat[1].jumlah_suara;
            });
          </script>
        @endpush
  <!---- @END__LIVE_COUNTING ---->
      </div>
    </div>
  </section>

<div class="container">
  <div class="row">
    <div class="col-md-4">
      <img src="{{ asset('img/Bullet journal-pana.png') }}" class="w-100">
    </div>
    <div class="col-md-8 my-5">
      <h2 class="text-color fw-bold">Cek Daftar Pemilih Tetap</h2>
      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Impedit obcaecati officia hic mollitia, fugit commodi maxime, iure dolore similique optio qui quaerat, laborum exercitationem sint ex. Reiciendis ipsa sint velit?</p>
      <div class="row">
        <div class="col-md-8">
          <input type="number" class="form-control p-2 px-4 rounded-pill" placeholder="Masukan NIM">
        </div>
        <div class="col-md-4">
          <button class="btn btn-block rounded-pill bg-color p-2 text-white px-4"><i class="fa fa-paper-plane"></i> Cek</button>
        </div>
      </div>
    </div>
  </div>
</div>

  <hr class="container" />
  <br />
  <br />
  <br />

  <!-- @START__SYARAT_DAN_KETENTUAN -->
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="text-color fw-bold text-center">Syarat & Ketentuan</h2>
        <ol class="mt-5 text-justify">
          <li>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore,
            ex eos vero consequatur dolorum sequi fugiat porro, officia
            laboriosam, cum asperiores repellendus maiores distinctio animi.
            Vero error enim eius quaerat.
          </li>
          <li>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore,
            ex eos vero consequatur dolorum sequi fugiat porro, officia
            laboriosam, cum asperiores repellendus maiores distinctio animi.
            Vero error enim eius quaerat.
          </li>
          <li>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore,
            ex eos vero consequatur dolorum sequi fugiat porro, officia
            laboriosam, cum asperiores repellendus maiores distinctio animi.
            Vero error enim eius quaerat.
          </li>
          <li>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore,
            ex eos vero consequatur dolorum sequi fugiat porro, officia
            laboriosam, cum asperiores repellendus maiores distinctio animi.
            Vero error enim eius quaerat.
          </li>
          <li>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Labore,
            ex eos vero consequatur dolorum sequi fugiat porro, officia
            laboriosam, cum asperiores repellendus maiores distinctio animi.
            Vero error enim eius quaerat.s
          </li>
        </ol>
      </div>
      <div class="col-md-6">
        <img src="{{ asset('/img/Accept terms-pana.png') }}" class="w-100" />
      </div>
    </div>
  </div>
  <!-- @END__SYARAT_DAN_KETENTIAN -->

  <br />
  <hr class="container" />
  <br />
  <br />
  <br />

  <!-- @START__HUBUNGI_KAMI -->
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img src="{{ asset('/img/Texting-amico.png') }}" class="w-100" />
      </div>
      <div class="col-md-8">
        <h2 class="text-center text-color fw-bold mb-4">Hubungi Kami</h2>
        <div class="row">
          <div class="col-md-6">
            <label class="mb-2 fw-bold">Nama</label>
            <input
              type="text"
              class="form-control"
              placeholder="Masukan Nama Lengkap"
            />
          </div>
          <div class="col-md-6">
            <label class="mb-2 fw-bold">NIM</label>
            <input
              type="number"
              class="form-control"
              placeholder="Masukan NIM"
            />
          </div>
          <div class="col-md-12 mt-2 mb-2">
            <label class="mb-2 fw-bold">Email</label>
            <input
              type="email"
              class="form-control"
              placeholder="Masukan Email"
            />
          </div>
          <div class="col-md-12 mt-2 mb-2">
            <label class="mb-2 fw-bold">Pesan</label>
            <textarea
              rows="5"
              placeholder="Masukan Pesan"
              class="form-control"
            ></textarea>
            <button type="submit" class="btn btn-md bg-color text-white mt-4">
              <i class="fa fa-paper-plane"></i> Kirim
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-12 mt-5">
        <div class="row text-center mt-5">
          <div class="col-md-4">
            <a href="" class="sosmed-link"
              ><i class="fa-brands fa-instagram"></i> kprsttnf</a
            >
          </div>
          <div class="col-md-4">
            <a href="" class="sosmed-link"
              ><i class="fa-solid fa-envelope"></i> admin@pemirasttnf.com</a
            >
          </div>
          <div class="col-md-4">
            <a href="" class="sosmed-link"
              ><i class="fa-brands fa-whatsapp"></i> 0895611952367</a
            >
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- @END__HUBUNGI_KAMI -->

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
  ></scripts>
  <script src="assets/js/countdown.js"></script>
  <script type="text/javascript">
    window.$crisp = [];
    window.CRISP_WEBSITE_ID = "5e6c2451-b3d6-4db8-adab-1163292d7bbe";
    (function () {
      d = document;
      s = d.createElement("script");
      s.src = "https://client.crisp.chat/l.js";
      s.async = 1;
      d.getElementsByTagName("head")[0].appendChild(s);
    })();
  </script>
@endsection