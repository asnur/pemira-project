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
                  <img src="{{ asset('/img/logo.png') }}" alt="" class="logo-dark" height="150" />
                </a>
                <h3>LOGIN</h3>
                <p class="text-muted mt-2">Login Untuk memulai Voting</p>
              </div>
            </div>
            <div class="p-3">
              <form name="login_form" class="av-invalid">
                <div class="pesan"></div>
                <div class="mb-3">
                  <label for="nim" class="form-label">NIM</label>
                  <input 
                    name="nim" 
                    required
                    placeholder="Masukkan Nim anda" 
                    id="nim"
                    pattern="[0-9]{10}"
                    type="text" 
                    class="form-control" 
                  />
                </div>
                <div class="mb-3">
                  <label for="userpassword" class="form-label">Password</label>
                  <input 
                    name="password" 
                    minlength="4" 
                    required
                    placeholder="Masukkan password anda"
                    id="userpassword" 
                    type="password" 
                    class="form-control" 
                  />
                </div>
                <div class="d-grid mt-3">
                  <button type="submit" class="btn btn-primary btn-none">
                    Login
                  </button>
                </div>
              </form>
              <div class="d-flex justify-content-between mt-3">
                <a href="/" class="btn btn-light shadow-sm border" style="color: #333">Kembali ke Halaman Utama</a>
                <a href="/register" class="btn btn-primary text-white">Halaman Register</a>
              </div>
        
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @push('scripts')
    <script>
      const loginForm = document.forms['login_form'];
      loginForm.addEventListener('submit', async (event) => {
        event.preventDefault();

        try {
          const loginResponse = await axios.post('/api/login', {
            nim: loginForm['nim'].value,
            password: loginForm['password'].value,
          });

          console.log(loginResponse);
        } catch (error) {
          console.log({ loginErrors: error });
        }
      });
    </script>
  @endpush

  <!-- MASIH ADA SCRIPT YANG BELOM DI PANGGIL --->
@endsection