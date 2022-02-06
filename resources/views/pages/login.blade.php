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
                <img src="{{ asset('/images/logo.png') }}" alt="" class="logo-dark" height="150" />
              </a>
              <p class="text-muted mt-2">Login Untuk memulai Voting</p>
              <div class="alert alert-danger" role="alert">
                VOTING TELAH DITUTUP
              </div>
            </div>
            <div class="p-3">
              <form id="loginForm" action="" method="POST" class="av-invalid">
                <div class="pesan"></div>
                <div class="mb-3">
                  <label for="nim" class="form-label">NIM</label>
                  <input 
                    name="nim" 
                    required="" 
                    placeholder="Masukkan Nim anda" 
                    id="nim"
                    type="number" 
                    class="form-control" 
                    value="" 
                  />
                </div>
                <div class="mb-3">
                  <label for="userpassword" class="form-label">Password</label>
                  <input 
                    name="password" 
                    minlength="4" 
                    required="" 
                    placeholder="Masukkan password anda"
                    id="userpassword" 
                    type="password" 
                    class="form-control" 
                    value="" 
                  />
                </div>
                <div class="d-grid mt-3">
                  <button type="submit" class="btn btn-primary btn-none">
                    Login
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  @push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.25.0/axios.min.js" integrity="sha512-/Q6t3CASm04EliI1QyIDAA/nDo9R8FQ/BULoUFyN4n/BDdyIxeH7u++Z+eobdmr11gG5D/6nPFyDlnisDwhpYA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
      axios.post('/api/login', {

      }).then((response) => {

      }).catch((response) => {

      });
    </script>
  @endpush

  <!-- MASIH ADA SCRIPT YANG BELOM DI PANGGIL --->
@endsection