<div title="container-countdown" class="position-relative">
  <svg xmlns="http://www.w3.org/2000/svg" class="wave-header" viewBox="0 0 1440 320" style="transform: translateY(1px)">
    <path fill="#08679e" fill-opacity="1"
      d="M0,192L40,165.3C80,139,160,85,240,101.3C320,117,400,203,480,213.3C560,224,640,160,720,144C800,128,880,160,960,176C1040,192,1120,192,1200,197.3C1280,203,1360,213,1400,218.7L1440,224L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
    </path>
  </svg>
  <div class="d-grid bg-color" style="z-index: 1">
    <div class="container">
      <p class="fs-1 rounded-pill text-center p-3 m-auto px-5" id="demo"></p>
      <p class="fs-1 text-center mt-4 text-white"><i class="fa fa-paper-plane"></i> Menuju Pemira</p>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" class="wave-header" viewBox="0 0 1440 320">
    <path fill="#08679e" fill-opacity="1"
      d="M0,192L40,165.3C80,139,160,85,240,101.3C320,117,400,203,480,213.3C560,224,640,160,720,144C800,128,880,160,960,176C1040,192,1120,192,1200,197.3C1280,203,1360,213,1400,218.7L1440,224L1440,0L1400,0C1360,0,1280,0,1200,0C1120,0,1040,0,960,0C880,0,800,0,720,0C640,0,560,0,480,0C400,0,320,0,240,0C160,0,80,0,40,0L0,0Z">
    </path>
  </svg>
</div>
@push('scripts')
  <script>
    // Set the date we're counting down to
    let countDownDate = new Date("Mar 16, 2022 00:00:00").getTime();

    // Update the count down every 1 second
    let x = setInterval(function() {
      // Get today's date and time
      let now = new Date().getTime();

      // Find the distance between now and the count down date
      let distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      let days = Math.floor(distance / (1000 * 60 * 60 * 24));
      let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      let seconds = Math.floor((distance % (1000 * 60)) / 1000);

      // Output the result in an element with id="demo"
      document.getElementById("demo").innerHTML =
        days + "d " + hours + "h " + minutes + "m " + seconds + "s ";

      // If the count down is over, write some text
      if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
      }
    }, 1000);
  </script>
@endpush