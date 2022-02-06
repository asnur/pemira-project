@extends('layouts.app')

@section('content')
  <section 
    class="bg-account-pages vh-100 d-flex align-items-center bg-center position-relative"
    style="background-image: url('{{ asset('/images/auth-bg.png') }}');"
  >
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 col-xl-5">
          <div class="bg-white shadow">
            <div class="p-4">
              <div class="text-center mt-3">
                <a href="/">
                  <img 
                    src="{{ asset('/images/logo.png') }}" 
                    alt="" 
                    class="logo-dark" 
                    height="150" 
                  />
                </a>
                <h3>REGISTRASI ULANG</h3>
                <p class="text-muted mt-2">Masukkan Nim dan Email Aktif anda<br> untuk melakukan registrasi Ulang</p>
              </div>

              <!-- @START_Info_Registrasi -->
              <p id="messageRegistrasi" class="invisible p-2 rounded text-white bg-success text-center">...</p>
              <!-- @END_info_registrasi  -->

              <div class="p-3">
                <form name="register_form" method="POST" class="av-invalid">
                  @csrf
                  <div class="pesan"></div>
                  <div class="mb-3">
                    <label for="nim" class="form-label fw-bold">NIM</label>
                    <input 
                      name="nim" 
                      required
                      type="text"
                      {{-- pattern="[0-9]" --}}
                      placeholder="Masukkan Nim anda" 
                      id="nim"
                      class="form-control" 
                      {{-- oninvalid="validateNim()" --}}
                      onchange="deleteMessage()"
                    />
                    <small id="messageValidateNim" class="text-danger"></small>
                    
                    @push('scripts')
                      <script>
                        const validateNim = () => document.querySelector('#messageValidateNim').textContent = 'Pastikan NIM anda benar';

                        const deleteMessage = () => {
                          const nimInput = document.forms['register_form']['nim'];
                          const messageValidateNim = document.querySelector('#messageValidateNim');

                          nimInput.value.length === 0 ? messageValidateNim.textContent = '' : '';
                        };
                      </script>
                    @endpush
                  </div>

                  <div class="mb-3">
                    <label for="email" class="form-label fw-bold">Email</label>
                    <input 
                      name="email" 
                      required
                      placeholder="Masukkan email kampus" 
                      pattern=".+@student.nurulfikri.ac.id" 
                      placeholder="Masukkan Email anda" 
                      id="email"
                      type="email" 
                      class="form-control" 
                    />
                    <small class="text-muted">Gunakan email kampus <b>@student.nurulfikri.ac.id<b></small>
                  </div>
                  <div class="g-recaptcha"  data-callback="imNotARobot" data-sitekey="6LejB0saAAAAAGHy5AbJxfzDq7Fh4S7LnARB0yO5"></div>
                  <div class="d-grid mt-3">
                    <button  id="submit" type="submit" class="btn btn-primary btn-none">
                      Registrasi Ulang
                    </button>
                  </div>
                </form>

                @push('scripts')
                  <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.25.0/axios.min.js" integrity="sha512-/Q6t3CASm04EliI1QyIDAA/nDo9R8FQ/BULoUFyN4n/BDdyIxeH7u++Z+eobdmr11gG5D/6nPFyDlnisDwhpYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                  <script>
                    const registerForm = document.forms['register_form'];

                    registerForm.addEventListener('submit', (event) => {
                      event.preventDefault();
              
                      axios.post('/api/regis', {
                        nim: registerForm['nim'].value,
                        email: registerForm['email'].value,
                      })
                      .then((response) => {
                        const messageRegistrasi = document.querySelector('#messageRegistrasi');
                        
                        messageRegistrasi.classList.remove('invisible');
                        messageRegistrasi.textContent = 'Registrasi Ulang Berhasil';

                        console.log(response);
                      })
                      .then((response) => location.href = '/auth/login')
                      .catch((error) => console.error(error));
                    });
                  </script>
                @endpush
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- MASIH ADA SCRIPT YANG BELOM DI PANGGIL --->
@endsection