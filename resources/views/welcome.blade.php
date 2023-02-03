@extends('layouts.app')
<div class="content">
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
                            <p class="text center font size22"><i class="fa-brands fa-xbox green xbox"></i>Official partner of XBox</p>
                        </div>

                    </div>
                    <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                        <div class="content-wrapper">
                            <p class="text center font size22"><i class="fa-solid fa-check green"></i>Certified buyer</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 col-md-12 col-sm-12">
                        <div class="content-wrapper">
                            <p class="text center font size22"><i class="fa-brands fa-twitter blue"></i>Find us on Twitter
                                @bredagamesNL</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endsection
    @section('text-media')
            <section class="section-text-media">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-9 col-md-12 col-sm-12">
                            <div class="image-wrapper">
                                <img src="{{asset('images/img_3.png')}}" alt="">
                            </div>
                        </div>
                        <div class="col-12 col-lg-3 col-md-12 col-sm-12">
                            <div class="content-wrapper">
                                <div class="text center font size22">
                                    <h3>Wat is BredaGames?
                                        Koper van oude spellen</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ex metus, imperdiet eget nunc vel, gravida interdum justo. In est sem, convallis vel porta sed, sagittis sed urna. Sed non hendrerit enim. Vestibulum ultricies volutpat eros, vitae accumsan metus pellentesque id. Nulla nec mi quis dui congue suscipit. Ut tristique pharetra eros, eget vulputate quam tempus at. Etiam viverra molestie turpis, a posuere lectus imperdiet ut. Sed ut erat sit amet nulla vulputate ultrices. Pellentesque pharetra interdum bibendum. Aliquam erat volutpat. Mauris et pellentesque ipsum. Curabitur quis pellentesque turpis, et lacinia dolor. Nulla et sem viverra lacus ullamcorper aliquet at non nibh. Donec a justo metus. Integer nec tincidunt sem.</p>
                                    <div class="button cta">
                                        <a href="/create">Verkoop je spellen</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
    @endsection
    @section('action-banner')
            <section class="section-action-banner flex justify-content-center align-items-center">
                <div class="content-wrapper ">
                    <h2 class=" text center font size30 family title">Hebben wij uw interresse gewekt?
                    </h2>
                    <p  class=" text center font size22 family title"> Neem dan nu contact met ons op!</p>
                    <br>
                    <div class="button cta">
                        <a href="/create">Verkoop je spellen</a>
                    </div>
                </div>
                <div class="hero-image">
                    <img src="{{asset('/images/img_4.png')}}" alt="">
                </div>
            </section>
    @endsection
    @section('footer')

        <footer>
            <section class="section-footer">
                <div class="container flex">
                    <div class="info ">
                        <p><i class="fa-solid fa-user"></i>BredaGames</p>
                        <p><i class="fa-solid fa-map-pin"></i>straatnaam 123
                            1234 ab breda </p>
                        <p><i class="fa-solid fa-phone"></i>+31 06 123456</p>
                        <p><i class="fa-solid fa-envelope-open-text"></i>info@bredagames.nl</p>
                    </div>
                    <div class="image-wrapper">
                        <img src="{{asset('images/img_2.png')}}" alt="">
                    </div>
                </div>

            </section>
        </footer>
    @endsection

</div>
