@extends("layouts.app")

@section("title", 'My NusaTour')

@section("content")
<main>
    <!-- Header -->
    <div class="jumbotron text-center">

        <h1>
            Explore the Beautiful World
            <br>
            As Easy One Click
        </h1>
        <p class="mt-3">
            You will see beautiful
            <br>
            Moment you never see before
        </p>

        <a href="#popular" class="btn btn-get-started px-4 mt-4">
            Get started
        </a>
    </div>
    <!-- Statistik -->
    <div class="container">
        <section class="row sec-stats justify-content-center">
            <div class="col-3 col-md-2 stats-detail">
                <h2>100K</h2>
                <p>Members</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>10</h2>
                <p>Countries</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>20K</h2>
                <p>Hotels</p>
            </div>
            <div class="col-3 col-md-2 stats-detail">
                <h2>100</h2>
                <p>Partners</p>
            </div>
        </section>
    </div>

    <!-- Wisata Popular -->
    <section class="section-popular text-center">
        <h2>Wisata Popular</h2>
        <p>Something can you visit</p>
        <p>only by one click</p>
    </section>
    <div class="section-popular-content" id="popular">
        <div class="container">
            <div class="row details-wisata-popular justify-content-center">
                @foreach($items as $item)
                <div class="col-md-3 col-sm-6 d-flex justify-content-center ">
                    <div class="card-travel text-center d-flex flex-column"
                        style="background: url('{{$item->galleries->count() ? Storage::url($item->galleries->first()->image) : ''  }}') no-repeat;">

                        <div class="travel-country">
                            {{$item->location}}
                        </div>
                        <div class="travel-tujuan">
                            {{$item->title}}
                        </div>
                        <div class="button justify-content-center mt-auto">
                            <a href="{{route('detail',$item->slug)}}" class="btn btn-card  px-3 ">Jump</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Partner -->
    <div class="container">
        <section class="section-partner">
            <div class="row section-partner-details">
                <div class="col-md-4 col-sm-5 partner-text">
                    <h2>Our Networks</h2>
                    <p>Company are trusted us</p>
                    <p>more than just a trip</p>
                </div>
                <div class="col-md-8 col-sm-7 partner-logo">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 img-partner">
                            <img src="/frontend/images/partner/ana.png" alt="">
                        </div>
                        <div class="col-md-3 col-sm-6 img-partner">
                            <img src="/frontend/images/partner/disney.png" alt="">
                        </div>
                        <div class="col-md-3 col-sm-6 img-partner">
                            <img src="/frontend/images/partner/shangri-la.png" alt="">
                        </div>
                        <div class="col-md-3 col-sm-6 img-partner">
                            <img src="/frontend/images/partner/visa.png" alt="">
                        </div>
                    </div>
                    <!-- <span>

                        </span>
                        <span>
                            <img src="./images/partner/disney.png" alt="">
                        </span>
                        <span>
                            <img src="./images/partner/shangri-la.png" alt="">
                        </span>
                        <span>
                            <img src="./images/partner/visa.png" alt="">
                        </span> -->
                </div>
            </div>
        </section>
    </div>

    <!-- Testimonial -->
    <section class="section-testi">
        <div class="judul">
            <h2>They Are Loving Us</h2>
            <p>Moments were giving them</p>
            <p>the best experience</p>
        </div>
        <section class="section-bg"></section>
    </section>

    <div class="container">
        <section class="section-testi-content">
            <div class="row section-testi-details">
                <div class="col-md-4 testi-detail">
                    <div class="card-testi">
                        <div class="img">
                            <img src="{{url('frontend/images/testimonial/1.jpg')}}" class="rounded-circle" width="150px"
                                height="150px" alt="">
                        </div>
                        <h2>Robert</h2>
                        <blockquote>Sangat luar biasa bisa menjelajah <br> bersama website ini, <br> lain kali
                            mungkin saya
                            akan
                            mencobanya lagi</blockquote>
                        <div class="card-footer">
                            Ubud, Bali
                        </div>
                    </div>
                </div>
                <div class="col-md-4 testi-detail">
                    <div class="card-testi">
                        <div class="img">
                            <img src="{{url('frontend/images/testimonial/3.jpg')}}" class="rounded-circle" width="150px"
                                height="150px" alt="">
                        </div>
                        <h2>Shayna</h2>
                        <blockquote>Wow sangat menyenangkan, fasilitasnya lengkap <br> respond pelayanannya cepat
                            dan tanggap ...</blockquote>
                        <div class="card-footer">
                            Malioboro
                        </div>
                    </div>
                </div>
                <div class="col-md-4 testi-detail">
                    <div class="card-testi">
                        <div class="img">
                            <img src="{{url('frontend/images/testimonial/2.jpg')}}" class="rounded-circle" width="150px"
                                height="150px" alt="">
                        </div>
                        <h2>Lewandowski</h2>
                        <blockquote>Website ini sangat membantu<br> saya sekeluarga sudah memakainya <br> lain kali
                            mungkin saya
                            akan
                            mencobanya lagi</blockquote>
                        <div class="card-footer">
                            Karimun Jawa
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <d class="row button-bawah">
            <div class="col-12 text-center">
                <a href="" class="btn btn-need-help px-4 mt-4 mx-1">
                    I Need Help
                </a>
                <a class="btn btn-warning btn-get-started px-4 mt-4 mx-1" href="{{route('register')}}">

                    Get Started




                </a>
            </div>
        </d iv>
    </div>











</main>
@endsection
