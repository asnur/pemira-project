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
                  <span>Your browser does not support the video tag.</span>
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
            <canvas id="chartRegisterUsers" role="img" aria-label="data mahasiswa sudah teregistrasi dan belum" ></canvas>
          </div>
        </div>
      </div>
    </div>
  </section>

  @push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
  <!---- @END__Daftar_Mahasiswa_Teregistrasi --->

  
  <!---- @START__Syarat_dan_Ketentuan--->
  <section class="section bg-white" id="features">
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


  <!---- @START__Get_In_Touch ---->
  <section class="section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <h2 class="fw-bold mb-4">Get in Touch</h2>
          <p class="text-muted mb-5">Ada Pertanyaan lebih lanjut ? bisa hubungi kami di :</p>
          <div>
            <form method="post" name="myForm" onsubmit="return validateForm()">
              <p id="error-msg"></p>
              <div id="simple-msg"></div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-4">
                    <label for="name" class="text-muted form-label">Name</label>
                    <input 
                      name="name" 
                      id="name" 
                      type="text" 
                      class="form-control"
                      placeholder="Enter name*"
                    />
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-4">
                    <label for="email" class="text-muted form-label">Email</label>
                    <input 
                      name="email" 
                      id="email" 
                      type="email" 
                      class="form-control"
                      placeholder="Enter email*"
                    />
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="mb-4">
                    <label for="subject" class="text-muted form-label">Subject</label>
                    <input 
                      type="text" 
                      class="form-control" 
                      id="subject" 
                      name="subject" 
                      placeholder="Enter Subject.." 
                    />
                  </div>

                  <div class="mb-4 pb-2">
                    <label for="comments" class="text-muted form-label">Message</label>
                    <textarea 
                      name="comments" 
                      id="comments" 
                      rows="4" 
                      class="form-control"
                      placeholder="Enter message..."
                    >
                    </textarea>
                  </div>

                  <button type="submit" id="submit" name="send" class="btn btn-primary">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
            @push("scripts")
              <script>
                function validateForm() {
                  var name = document.forms["myForm"]["name"].value;
                  var email = document.forms["myForm"]["email"].value;
                  var subject = document.forms["myForm"]["subject"].value;
                  var comments = document.forms["myForm"]["comments"].value;
                  document.getElementById("error-msg").style.opacity = 0;
                  document.getElementById('error-msg').innerHTML = "";
                  if (name == "" || name == null) {
                    document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*Please enter a Name*</div>";
                    fadeIn();
                    return false;
                  }
                  if (email == "" || email == null) {
                    document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*Please enter a Email*</div>";
                    fadeIn();
                    return false;
                  }
                  if (subject == "" || subject == null) {
                    document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*Please enter a Subject*</div>";
                    fadeIn();
                    return false;
                  }
                  if (comments == "" || comments == null) {
                    document.getElementById('error-msg').innerHTML = "<div class='alert alert-warning error_message'>*Please enter a Comments*</div>";
                    fadeIn();
                    return false;
                  }

                  var xhttp = new XMLHttpRequest();
                  xhttp.onreadystatechange = function () {
                    if (this.readyState == 4 && this.status == 200) {
                      document.getElementById("simple-msg").innerHTML = this.responseText;
                      document.forms["myForm"]["name"].value = "";
                      document.forms["myForm"]["email"].value = "";
                      document.forms["myForm"]["subject"].value = "";
                      document.forms["myForm"]["comments"].value = "";
                    }
                  };

                  xhttp.open("POST", "php/contact.php", true);
                  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                  xhttp.send("name=" + name + "&email=" + email + "&subject=" + subject + "&comments=" + comments);
                  return false;
                }
              </script>
            @endpush
          </div>
        </div>

        <div class="col-lg-5 ms-lg-auto">
          <div class="mt-5 mt-lg-0">
            <img 
              src="{{ asset('/images/contact.png') }}" 
              alt=""
              class="img-fluid d-block" 
            />
            <p class="text-muted mt-5 mb-3">
              <i class="me-2 text-muted icon icon-xs" data-feather="mail"></i>
              <span>info@nurulfikri.ac.id</span>
            </p>
            <p class="text-muted mb-3">
              <i class="me-2 text-muted icon icon-xs" data-feather="phone"></i>
              <a href="https://wa.me/6285382932485">+62 853-8293-2485</a>
            </p>
            <p class="text-muted mb-3">
              <i class="me-2 text-muted icon icon-xs" data-feather="map-pin"></i>
              <span>Jl. Raya Lenteng Agung No.20, RT.4/RW.1, Srengseng Sawah, Kec. Jagakarsa, Kota Jakarta Selatan, DKI Jakarta 12640</span>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---- @END__Get_In_Touch ---->

@endsection

