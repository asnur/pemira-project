@extends("layouts.app")

@section("content")
  <section 
    class="bg-account-pages vh-100 d-flex align-items-center bg-center position-relative"
    style="background-image: url('{{ asset("/images/auth-bg.png") }}')"
  >
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
          <div class="bg-white shadow">
            <div class="p-4">
              <div class="text-center mt-3">
                <a href="/">
                  <img 
                    src="{{ asset("/img/logo.png") }}" 
                    alt="" 
                    class="logo-dark" 
                    height="150" 
                  />
                </a>
                <h3>REGISTRASI ULANG</h3>
                <p class="text-muted mt-2">Masukkan Nim dan Email Aktif anda<br> untuk melakukan registrasi Ulang</p>
              </div>

              <!-- @START_Info_Registrasi -->
              <div id="messageRegistrasi"  class="d-none justify-content-center w-100 rounded">
                <div class="spinner-border mx-auto" role="status">
                  <span class="visually-hidden">Loading...</span>
                </div>
              </div>
              <!-- @END_info_registrasi  -->

              <div class="p-3">
                <form name="register_form" method="POST" class="av-invalid">
                  @csrf
                  <div class="mb-3">
                    <label for="nim" class="form-label fw-bold">NIM</label>
                    <input 
                      name="nim" 
                      required
                      type="text"
                      pattern="[0-9]{10}"
                      placeholder="Masukkan Nim anda" 
                      id="nim"
                      class="form-control" 
                    />
                    <small id="messageValidateNim" class="d-none fw-normal invalid-feedback">
                      Pastikan NIM benar
                    </small>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <small class="text-muted" style="font-size: 12px">Gunakan email kampus <b>@student.nurulfikri.ac.id<b></small>
                    <input 
                      name="email" 
                      required
                      placeholder="Masukkan email kampus" 
                      pattern=".+@student.nurulfikri.ac.id" 
                      placeholder="Masukkan Email anda" 
                      type="email" 
                      class="form-control" 
                      aria-describedby="inputGroupPrepend3"
                      disabled
                    />
                    <small id="messageValidateEmail" class="d-none fw-normal invalid-feedback">
                      Pastikan isi dan gunakan email kampus nurulfikri
                    </small>
                  </div>
                  <div class="g-recaptcha"  data-callback="imNotARobot" data-sitekey="6LejB0saAAAAAGHy5AbJxfzDq7Fh4S7LnARB0yO5"></div>
                  <div class="d-grid mt-3">
                    <input name="submit" value="Registrasi Ulang" type="submit" class="btn btn-primary btn-none" disabled>
                  </div>
                </form>
                <div class="d-flex justify-content-between mt-3">
                  <a href="/" class="btn btn-light shadow-sm border" style="color: #333">Kembali ke Halaman Utama</a>
                  <a href="/login" class="btn btn-primary text-white">Halaman Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @push("scripts")
    <script>
      const registerForm = document.forms["register_form"];

      // When Form Submited
      registerForm.addEventListener("submit", async (event) => {
        event.preventDefault();
        try {
          const messageRegistrasi = document.querySelector("#messageRegistrasi");
          messageRegistrasi.classList.remove("d-none");
          messageRegistrasi.classList.add("d-grid");

          const registerResponse = await axios.post("/api/regis", {
            nim: registerForm["nim"].value,
            email: registerForm["email"].value,
          });

          switch (registerResponse.data.message) {
            case "Email has Already Use Or Register": {
              messageRegistrasi.classList.add("bg-warning");
              messageRegistrasi.innerHTML = `<p class="p-2 m-0 text-dark text-center">Email Telah digunakan atau teregistrasi</p>`;
              break;
            }

            case `Email has Update for NIM ${registerForm["nim"].value}`: {
              messageRegistrasi.classList.add("d-none");
              messageRegistrasi.innerHTML = `
                <p class="p-2 m-0 text-white text-center">Registrasi NIM ${registerForm["nim"].value} telah berhasil</p>
              `;

              // Sweet Alert
              Swal.fire({
                title: 'Registrasi Berhasil',
                text:  `
                  NIM ${registerForm["nim"].value} telah teregistrasi
                  Mohon cek email ${registerForm["email"].value}
                `,
                icon: 'success',
                confirmButtonText: 'Cool'
              });
              break;
            }
          }

          console.log({ messageRegister: registerResponse });
        } catch (error) { 
          console.log({ registerErrors: error });
        }
      });

      // check nim is exist or not
      registerForm["nim"].addEventListener("keyup", async () => {
        try {
          const checkNimResponse = await axios.post("/api/checkNim", { nim: registerForm["nim"].value });

          if (checkNimResponse.data.status.toLowerCase() === "success") { 
            registerForm["nim"].classList.remove("is-invalid")
            registerForm["email"].removeAttribute("disabled");
            registerForm["submit"].removeAttribute("disabled");
            document.querySelector("#messageValidateNim").classList.add("d-none")
          } 
        } catch (error) {
          if (error) { 
            registerForm["nim"].classList.add("is-invalid")
            registerForm["email"].setAttribute("disabled", "true"); 
            registerForm["submit"].setAttribute("disabled", "true");
            document.querySelector("#messageValidateNim").classList.remove("d-none")
          }
        }
      });

      // When Email Invalid
      registerForm["email"].addEventListener("invalid", () => {
        registerForm["email"].classList.add("is-invalid");
        document.querySelector("#messageValidateEmail").classList.remove("d-none");
      });


    </script>
  @endpush
@endsection