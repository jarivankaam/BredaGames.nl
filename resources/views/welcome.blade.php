@extends('layouts.app')

@section('hero')

<section class="section-hero flex justify-content-center align-items-center">
    <div class="content-wrapper ">
        <h2 class=" text center font size30 family title">BredaGames</h2>
        <p  class=" text center font size22 family title"> Your first stop to sell your old games</p>
    </div>
    <div class="hero-image">
        <img src="{{asset('/images/img.png')}}" alt="">
    </div>
</section>

@endsection

@section('usps')
    <section class="section-usps">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                    <div class="content-wrapper">
                        <p><i class="fa-brands fa-xbox green"></i>Official partner of XBox</p>
                    </div>

                </div>
                <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                    <div class="content-wrapper">
                        <p><i class="fa-solid fa-check green"></i>Certified buyer</p>
                    </div>
                </div>
                <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                    <div class="content-wrapper">
                        <p><i class="fa-brands fa-twitter blue"></i>Vind ons op twitter
                            @bredagamesNL</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


