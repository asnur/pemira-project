@section('content')
    <!-- Hero Start -->
    <section class="hero-2 bg-center bg-primary position-relative"
        style="background-image: url('<?php echo base_url(); ?>assets/images/hero-1-bg.png');" id="home">
        <div class="container">
            <div class="row align-items-center hero-content">
                <div class="col-lg-12">
                    <h3 class="text-white text-center display-4 font-weight-semibold mb-4 hero-1-title">Unduh Undangan</h3>


                </div>
            </div>
            <!-- end row -->


        </div>
        <!-- end hero shape -->
    </section>
    <!-- Hero End -->

    <!-- Team start -->
    <section class="section bg-light" id="team">
        <div class="container">
            <div class="row align-items-center hero-content">
                <div class="col-lg-12 text-center">
                    <h2 class="fw-bold">Pencarian data pemilih</h2>
                    <p class="text-muted">Silahkan isi form dibawah ini untuk mengecek datamu.</p>
                </div>
                <form method="post" id="cekdpt" action="<?php echo base_url('secure/cari_dpt'); ?>">
                    <p id="error-msg"></p>
                    <div id="simple-msg"></div>
                    <div class="row">

                        <div class="col-md-12">

                            <div class="mb-4 pb-2">
                                <label for="comments" class="text-muted form-label">NIM</label>
                                <input type="number" required="" class="form-control" id="subject" name="nim"
                                    placeholder="Masukkan Nim kamu disini">
                            </div>



                        </div>
                        <div class="col-lg-12">
                            <div class="mb-4">
                                <button style="width: 100%" type="submit" id="submit" name="send" class="btn btn-primary"><i
                                        class="mdi mdi-account-search"></i> Cari Data</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </section>
@endsection
