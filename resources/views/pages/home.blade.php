@extends('layouts.app')

@section('content')

  @include('../partials/hero')

  {{-- <section class="hero d-grid aligns-items-center bg-center nf-bg-primary pt-5 position-relative" style="background-image: url('{{ asset('images/hero-1-bg.png') }}')">
    <div class="container d-grid aligns-items-center">
      <div class="row align-items-center">
        <header class="col-lg-6 d-grid justify-content-center">
          <h1 class="text-white">
            E-PEMIRA <br>
            STTNF 2021-2022
          </h1>
          <p>Pemilihan Raya Online STT Terpadu Nurul Fikri 2021-2022</p>
          <div class="d-flex">
            <a href="#" class="btn">Mulai Voting</a>

          </div>
        </header>
        <picture class="col-lg-6 d-grid justify-content-center">
          <img
            class="logo-primary"
            src="{{ asset('images/logo.png') }}"
            alt=""
          />
        </picture>
      </div>
    </div>
    <div class="position-absolute bottom-0 w-100 border">
      <img
        class="w-100"
        src="{{ asset('images/hero-1-bottom-shape.png') }}"
        alt=""
      />
    </div>
  </section>

  <div data-aos="fade-down">
    <div class="card" style="width: 18rem;">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div> --}}
@endsection
