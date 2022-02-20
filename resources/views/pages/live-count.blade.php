@extends('layouts.app')
@section('content')
<section class="hero-2 bg-center bg-primary position-relative" style="background-image: url('{{ asset('/images/hero-1-bg.png') }}');"
  id="home">
  <div class="container">
    <div class="row align-items-center hero-content">
      <div class="col-lg-12">
        <h3 class="text-white text-center display-4 font-weight-semibold mb-4 hero-1-title">Live Count</h3>
      </div>
    </div>
  </div>
</section>
  <section class="section bg-light" id="team">
    <div class="container">
      <div class="row align-items-center hero-content">
        <div class="col-md-6">
          <div id="live-count" ></div>
          <div class="row align-items-center hero-content">
            <div class="col-md-6 mt-5">
              <b>Mohamad Rizki Hanif : 1</b>
            </div>
            <div class="col-md-6 mt-5">
              <b>Kotak Kosong : 2 </b>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div id="live-vote" ></div>
        </div>
      </div>
    </div>
  </section>
@endsection