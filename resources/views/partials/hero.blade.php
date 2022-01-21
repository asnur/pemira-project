<section 	
  id="home"
  class="hero-1 bg-center bg-primary position-relative" 
  style="background-image: url('{{ asset('/images/hero-1-bg.png') }}');"
>
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
    </div> <!-- end row -->

    <!-- Modal -->
    <div class="modal fade bd-example-modal-lg" id="watchvideomodal" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
        <div class="modal-content home-modal">
          <div class="modal-header border-0">
            <button type="button" class="btn-close float-end" data-bs-dismiss="modal">
              <i class="mdi mdi-close"></i>
            </button>
          </div>
          <div class="ratio ratio-16x9">
            <center>
              <video style="width: 100%" controls>
                <source src="{{ asset('assets/pemira.mp4') }}" type="video/mp4">
                  Your browser does not support the video tag.
              </video>
            </center>
          </div>
        </div>
      </div>
    </div> <!-- end modal -->
  </div> <!-- end container -->
  
  <div class="hero-bottom-shape">
    <img 
      src="{{ asset('/images/hero-1-bottom-shape.png') }}" 
      alt="" 
      class="img-fluid d-block mx-auto" 
    />
  </div> <!-- end hero shape -->
</section>


<script>
  
</script>