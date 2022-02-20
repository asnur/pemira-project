@extends('layouts.app')
@section('content')

  <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4  col-xl-4" style="">
    <div class="card m-b-30 border-0" >

        <h5 class="card-header ">
            <div class="text-center">
                <h4>Sabiq</h4>
                <p class="text-muted">0110220153</p>

            </div>
        </h5>
        <div class="card-body  text-center">
            <img style="border-color: black" src="https://awsimages.detik.net.id/community/media/visual/2019/02/19/42393387-9c5c-4be4-97b8-49260708719e.jpeg?w=750&q=90" alt="" class=" mx-auto d-block mb-5 w-50">
        </div>

        <div class="card-footer text-muted ">
            <div class="text-center">
                <div class="row">
                <div class="col-12">
                    <button href=""" id="profile" class="btn btn-raised btn-info btn-lg btn-block">VISI & MISI</button>
                </div>
                <div class="col-12">
                    <button id="vote" class="btn btn-raised btn-success btn-lg btn-block"> <i class="fa fa-check-square-o"></i> VOTE</button>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection