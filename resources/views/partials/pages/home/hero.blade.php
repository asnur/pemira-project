<div class="py-5">
  <div class="container">
    <div class="row g-5 align-items-center">
      <div class="col-lg-8 order-lg-0 order-1" style="display: grid; gap: 30px;">
        <h1 class="fs-1 fw-bold">Selamat Datang di Website PEMIRA</h1>
        <p class="fs-5" style="line-height: 175%; color: #777;">
          PEMIRA atau Pemilihan Raya merupakan pesta demokrasi tahunan STT Terpadu Nurul Fikri untuk memilih
          dan menentukan: PRESMA ( Presiden Mahasiswa ) - WAPRESMA ( Wakil Presiden Mahasiswa ) dan Anggota DPM
          ( Dewan Perwakilan Mahasiswa ).
        </p>
        <div class="row g-3">
          <div class="col-lg-4">
            <a class="btn w-100 border-2 rounded-pill fw-bold text-white" style="background: #08679e; min-height: 44px;"
              href="{{ route('regis') }}">
              <i class="fa-solid fa-book"></i> Registrasi Ulang
            </a>
          </div>	
          <div class="col-lg-4">
            <a class="btn border w-100 border-2 rounded-pill fw-bold text-color" style="min-height: 44px;" href="#">
              <i class="fa-solid fa-play"></i> Apa Itu Pemira?
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 order-lg-1 order-0">
        <img src="{{ asset('/img/image-header.png') }}" class="img-fluid" />
      </div>
    </div>
  </div>
</div>