@extends('layouts.app')
@section('content')
  <!---- @START_Hero --->
  <section 
    id="home"
    class="hero-1 bg-center bg-primary position-relative" 
    style="background-image: url('{{ asset('/images/hero-1-bg.png') }}');"
  >
    <div class="container">
      <div class="row align-items-center hero-content">
        <div class="col-lg-12">
          <h1 class="text-white display-4 font-weight-semibold mb-4 hero-1-title">DATA KANDIDAT</h1>
        </div>
      </div>
    </div>
    <div class="hero-bottom-shape">
      <img src="{{ asset('/images/hero-1-bottom-shape.png') }}" alt="" class="img-fluid d-block mx-auto" />
    </div>
  </section>
  <!---- @START_Hero --->

  <!---- @START_Kandidat ---->
  <section class="section bg-light" id="team">
    <div class="container">
      <div class="row justify-content-center mb-4">
        <div class="col-lg-7 text-center">
          <h2 class="fw-bold">Kandidat Ketua & Wakil Ketua BEM</h2>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
            <div class="position-relative overflow-hidden">
              <img src="{{ asset('/images/team/1.jpg') }}" alt="" class="img-fluid d-block mx-auto" />
              <ul class="list-inline p-3 mb-0 team-social-item">
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm"
                    data-feather="facebook"></i></a>
                </li>
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm"
                    data-feather="twitter"></i></a>
                </li>
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm"
                    data-feather="instagram"></i></a>
                </li>
              </ul>
            </div>
            <div class="p-4">
              <h5 class="font-size-19 mb-1">1</h5>
              <p class="text-muted text-uppercase font-size-14 mb-0">1</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
            <div class="position-relative overflow-hidden">
              <img src="{{ asset('/images/team/2.jpg') }}" alt="" class="img-fluid d-block mx-auto" />
              <ul class="list-inline p-3 mb-0 team-social-item">
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm"
                    data-feather="facebook"></i></a>
                </li>
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm"
                    data-feather="twitter"></i></a>
                </li>
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm"
                    data-feather="instagram"></i></a>
                </li>
              </ul>
            </div>
            <div class="p-4">
              <h5 class="font-size-19 mb-1">2</h5>
              <p class="text-muted text-uppercase font-size-14 mb-0">2</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
            <div class="position-relative overflow-hidden">
              <img src="{{ asset('/images/team/3.jpg') }}" alt="" class="img-fluid d-block mx-auto" />
              <ul class="list-inline p-3 mb-0 team-social-item">
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm"
                    data-feather="facebook"></i></a>
                </li>
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm"
                    data-feather="twitter"></i></a>
                </li>
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm"
                    data-feather="instagram"></i></a>
                </li>
              </ul>
            </div>
            <div class="p-4">
              <h5 class="font-size-19 mb-1">3</h5>
              <p class="text-muted text-uppercase font-size-14 mb-0">3</p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-sm-6">
          <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
            <div class="position-relative overflow-hidden">
              <img src="{{ asset('/images/team/4.jpg') }}" alt="" class="img-fluid d-block mx-auto" />
              <ul class="list-inline p-3 mb-0 team-social-item">
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm"
                    data-feather="facebook"></i></a>
                </li>
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm"
                    data-feather="twitter"></i></a>
                </li>
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm"
                    data-feather="instagram"></i></a>
                </li>
              </ul>
            </div>
            <div class="p-4">
              <h5 class="font-size-19 mb-1">4</h5>
              <p class="text-muted text-uppercase font-size-14 mb-0">4</p>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="container mt-5">
      <div class="row justify-content-center mb-4">
        <div class="col-lg-7 text-center">
          <h2 class="fw-bold">Kandidat Ketua & Wakil Ketua Senada</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6">
          <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
            <div class="position-relative overflow-hidden">
              <img src="{{ asset('/images/team/1.jpg') }}" alt="" class="img-fluid d-block mx-auto" />
              <ul class="list-inline p-3 mb-0 team-social-item">
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm"
                    data-feather="facebook"></i></a>
                </li>
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm"
                    data-feather="twitter"></i></a>
                </li>
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm"
                    data-feather="instagram"></i></a>
                </li>
              </ul>
            </div>
            <div class="p-4">
              <h5 class="font-size-19 mb-1">1</h5>
              <p class="text-muted text-uppercase font-size-14 mb-0">1</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
            <div class="position-relative overflow-hidden">
              <img src="{{ asset('/images/team/2.jpg') }}" alt="" class="img-fluid d-block mx-auto" />
              <ul class="list-inline p-3 mb-0 team-social-item">
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm"
                    data-feather="facebook"></i></a>
                </li>
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm"
                    data-feather="twitter"></i></a>
                </li>
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm"
                    data-feather="instagram"></i></a>
                </li>
              </ul>
            </div>
            <div class="p-4">
              <h5 class="font-size-19 mb-1">2</h5>
              <p class="text-muted text-uppercase font-size-14 mb-0">2</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
            <div class="position-relative overflow-hidden">
              <img src="{{ asset('/images/team/3.jpg') }}" alt="" class="img-fluid d-block mx-auto" />
              <ul class="list-inline p-3 mb-0 team-social-item">
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm"
                    data-feather="facebook"></i></a>
                </li>
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm"
                    data-feather="twitter"></i></a>
                </li>
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm"
                    data-feather="instagram"></i></a>
                </li>
              </ul>
            </div>
            <div class="p-4">
              <h5 class="font-size-19 mb-1">3</h5>
              <p class="text-muted text-uppercase font-size-14 mb-0">3</p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="team-box mt-4 position-relative overflow-hidden rounded text-center shadow">
            <div class="position-relative overflow-hidden">
              <img src="{{ asset('/images/team/4.jpg') }}" alt="" class="img-fluid d-block mx-auto" />
              <ul class="list-inline p-3 mb-0 team-social-item">
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-primary"><i class="icon-sm"
                    data-feather="facebook"></i></a>
                </li>
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-info"><i class="icon-sm"
                    data-feather="twitter"></i></a>
                </li>
                <li class="list-inline-item mx-3">
                  <a href="javascript: void(0);" class="team-social-icon h-danger"><i class="icon-sm"
                    data-feather="instagram"></i></a>
                </li>
              </ul>
            </div>
            <div class="p-4">
              <h5 class="font-size-19 mb-1">4</h5>
              <p class="text-muted text-uppercase font-size-14 mb-0">4</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---- @END_Kandidat ---->
@endsection