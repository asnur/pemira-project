<div id="preloader">
  <div id="status">
    <div class="spinner">
      <div class="bounce1"></div>
      <div class="bounce2"></div>
      <div class="bounce3"></div>
    </div>
  </div>
</div>

@push('scripts')
  <script>
    window.onload = setTimeout(() => {
      document.getElementById('preloader').style.visibility = 'hidden';
      document.getElementById('preloader').style.opacity = '0';
    }, 350);
  </script>
@endpush