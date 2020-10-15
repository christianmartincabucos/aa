@extends('layouts.app')
@push('css')
<style>
    .slick-slide {
        /* margin-right: 15px !important; */
    }
</style>
@endpush
@section('content')
<div class="container-fluid">
    <div id="home">
        <div class="row">
            <div class="col-md-9 offset-md-1" style="margin-top: 2%">
                <div class="box">
                    <h3 class="ml-4">Anthony & Associates</h3>
                    <h4 class="ml-4">Research Market & Development</h4>
                </div>
            </div>
        </div>
        <!-- <div class="row"> -->
        <div class="p-0 mt-5 ml-5 mobile-ml">
            <div class="center">
                <div><img src="{{ asset('storage/jonathan.jpeg') }}" style="height:200px;width:370px;"></div>
                <div><img src="{{ asset('storage/austin-distel.jpeg') }}" style="height:200px;width:370px;"></div>
                <div><img src=" {{ asset('storage/carlos.jpeg') }}" style="height:200px"></div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1 mt-5">
                <p class="font-weight-bold">We offer insights regarding customer behavior,market viability <br>
                    of products and services, competitors monitoring, and <br>
                    industry trends. These can be applied to product<br> development, customer service, marketing campaigns, <br>
                    planning growth strategies, and more. </p>
                <p class="mt-3"><small><a class="text-muted">More about A&A</a></small></p>
            </div>
        </div>
    </div>
    <!-- </div> -->
    <div class="row">
        <div class="col-md-12" id="references">
            <div class="card mb-0 pb-5 rounded-0" style="background-color:#edecea;">
                <div class="card-body pl-5 py-5 ml-5 row mobile-ml">
                    <div class="col-md-6">
                        <p class="h2 my-5" style="color:#135040;">HOW WE WORK</p><br>
                        <p class="card-text">In-database</p>
                        <p class="card-text font-weight-bolder">Efficient graphs</p>
                        <p class="card-text">Average cost method</p>
                        <p class="card-text">Predict changes with minimal loss</p>
                        <p class="card-text">Information specific to the product or needs</p>
                    </div>
                    <div class="col-md-6 p-0 mx-0">
                    </div>
                </div>

            </div>
        </div>
        <div class="col-md-12 col-sm-12" id="about">
            <div class="card py-0 my-0 rounded-0" style="background-color: #135040;color:#fff;">
                <div class="d-flex justify-content-end">
                    <img class="card-img w-50 float-right img-about" src="{{ asset('storage/blake.jpeg') }}" alt="Card image" style="position:relative;margin-top: -28%;">
                </div>
                <div class="card-body pl-5 ml-5 pt-0 mt-0 mobile-ml">
                    <p class="h2 mb-5 mt-0 pt-5">Our team of expert and researchers can<br>
                        provide premium market intelligence reports<br> and services that will usher success for our<br>
                        partners
                    </p>

                    <div class="row pb-5 mb-5">
                        <div class="col-sm-2 pr-4 my-3">
                            <h4>E-commerce</h4>
                            <small>When you know your market, you’ve set your business up to lead, innovate and win.</small>
                        </div>
                        <div class="col-sm-2 pr-4 my-3">
                            <h4>Technology</h4>
                            <small>The New York Times reported that tech companies are currently dominating the stock market because they’ve become an indispensable facet of our everyday lives. </small>
                        </div>
                        <div class="col-sm-3 pr-4 my-3">
                            <h4>Service Industries</h4>
                            <small>We cater to all types of service-based businesses, from financial services to professional services, and everything in between. </small>
                        </div>
                        <div class="col-sm-3 pr-4 my-3">
                            <h4>Heavy Industries</h4>
                            <small>Whether your business is engaged in Energy, Manufacturing, Chemicals, Materials, Transportation, or Shipping, we will provide comprehensive findings and significant perspectives that are relevant to your growth strategies. </small>
                        </div>
                        <div class="col-sm-2 my-3">
                            <h4>Life Sciences</h4>
                            <small>Pharmaceutical and Life Sciences industry succeeds in today’s age of digitalization through the implementation of various IT solutions. </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12 col-sm-12" id="reviews">
            <div class="reviews">
                <!-- <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                    <div class="card-body pl-0 row">
                        <div class="col-sm-6">
                            <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                        </div>
                        <div class="col-sm-6">

                            <div class="d-flex justify-content-between w-42 pt-5 mt-5 px-5">
                                <img class="rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                <div class="ml-2 mt-2">
                                    <h6>Noel
                                        <small style="color:#135040;">Entrepreneur</small>
                                    </h6>
                                </div>

                            </div>
                            <p class="card-text mt-4 mx-5">I've got confidence to make better decisions, I know I have a great research agency on my side.</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="px-1"><i class="fas fa-long-arrow-alt-left fa-2x"></i></a>
                        <a class="px-1"><i class="fas fa-long-arrow-alt-right fa-2x"></i></a>
                    </div>
                </div>

                <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                    <div class="card-body pl-0 row">
                        <div class="col-sm-6">
                            <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                        </div>
                        <div class="col-sm-6">

                            <div class="d-flex justify-content-between w-25 pt-5 mt-5 px-5">
                                <img class="rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                <div class="ml-2 mt-2">
                                    <h6>Noel
                                        <small style="color:#135040;">Entrepreneur</small>
                                    </h6>
                                </div>

                            </div>
                            <p class="card-text mt-4 mx-5">I've got confidence to make better decisions, I know I have a great research agency on my side.</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <a class="px-1"><i class="fas fa-long-arrow-alt-left fa-2x"></i></a>
                        <a class="px-1"><i class="fas fa-long-arrow-alt-right fa-2x"></i></a>
                    </div>
                </div> -->

            </div>
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="d-flex justify-content-between w-42 pt-5 mt-5 px-5">
                                            <img class="rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <div class="ml-2 mt-2">
                                                <h6>Noel</h6>
                                                    <small style="color:#135040;">Entrepreneur</small>
                                            </div>

                                        </div>
                                        <p class="card-text mt-4 mx-5">I've got confidence to make better decisions, I know I have a great research agency on my side.</p>
                                    </div>
                                </div>
                                <!-- <div class="d-flex justify-content-center">
                                    <a class="px-1"><i class="fas fa-long-arrow-alt-left fa-2x"></i></a>
                                    <a class="px-1"><i class="fas fa-long-arrow-alt-right fa-2x"></i></a>
                                </div> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="d-flex justify-content-between w-42 pt-5 mt-5 px-5">
                                            <img class="rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <div class="ml-2 mt-2">
                                                <h6 class="">Kate</h6>
                                                    <small class="" style="color:#135040;">Beauty Retailer</small>
                                            </div>

                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            Long story short, their research gave life to my subscription service and we’ve reached our 800 subscriber milestone within the first 6 months. </p>
                                    </div>
                                </div>
                                <!-- <div class="d-flex justify-content-center">
                                    <a class="px-1"><i class="fas fa-long-arrow-alt-left fa-2x"></i></a>
                                    <a class="px-1"><i class="fas fa-long-arrow-alt-right fa-2x"></i></a>
                                </div> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="d-flex justify-content-between w-42 pt-5 mt-5 px-5">
                                            <img class="rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <div class="ml-2 mt-2">
                                                <h6 class="">Steven</h6>
                                                    <small class="" style="color:#135040;">Computer Hardware Dealer</small>
                                            </div>

                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            Their reports are like road maps. Just follow the data. </p>
                                    </div>
                                </div>
                                <!-- <div class="d-flex justify-content-center">
                                    <a class="px-1"><i class="fas fa-long-arrow-alt-left fa-2x"></i></a>
                                    <a class="px-1"><i class="fas fa-long-arrow-alt-right fa-2x"></i></a>
                                </div> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="d-flex justify-content-between w-42 pt-5 mt-5 px-5">
                                            <img class="rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <div class="ml-2 mt-2">
                                                <h6 class="">Howard</h6>
                                                    <small class="" style="color:#135040;">Toy Manufacturer</small>
                                            </div>

                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            You guys don’t just give statistics and hard facts, you’ve helped me make sense of that data to grow my business. </p>
                                    </div>
                                </div>
                                <!-- <div class="d-flex justify-content-center">
                                    <a class="px-1"><i class="fas fa-long-arrow-alt-left fa-2x"></i></a>
                                    <a class="px-1"><i class="fas fa-long-arrow-alt-right fa-2x"></i></a>
                                </div> -->
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">

                                        <div class="d-flex justify-content-between w-42 pt-5 mt-5 px-5">
                                            <img class="rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <div class="ml-2 mt-2">
                                                <h6 class="">Julian</h6>
                                                    <small class="" style="color:#135040;">CPA Consultant</small>
                                            </div>

                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            5. Anthony & Associates helped our company when we were in a deep slump back in 2017. They gave us a clear view of our company’s position in the market and convinced us that the best move was to calibrate our pricing structure and marketing plans. We bounced back and we’re doing much better.
                                        </p>
                                    </div>
                                </div>
                                <!-- <div class="d-flex justify-content-center">
                                    <a class="px-1"><i class="fas fa-long-arrow-alt-left fa-2x"></i></a>
                                    <a class="px-1"><i class="fas fa-long-arrow-alt-right fa-2x"></i></a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
            <!--  -->
        </div>
        <div class="col-md-12 col-sm-12">
            <div class="card-deck justify-content-center py-5">
                <div class="card rounded-0 col-md-3 offset-md-1 shadow-lg">
                    <div class="card-body d-flex flex-wrap align-content-center justify-content-center">
                        <p class="card-text">Plans for 2021</p>
                    </div>
                </div>
                <div class="card rounded-0 col-md-3 offset-md-1 shadow-lg p-0">
                    <img class="card-img-top" src="{{ asset('storage/austin.jpeg') }}" alt="Card image cap">

                    <div class="card-body">
                        <img class="d-inline rounded-circle" height="20" width="20" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <small class="d-inline" style="color:#135040;">Michael Moon | Oct 2020</small>
                        <h5 class="my-4">What's new in the market today? </h5>
                        <div class="d-flex justify-content-end">
                            <a style="transform: rotate(45deg);"><i class="fas fa-arrow-right fa-2x"></i></a>
                        </div>
                    </div>
                </div>
                <div class="card rounded-0 col-md-3 offset-md-1 shadow-lg p-0">
                    <img class="card-img-top" src="{{ asset('storage/profile.JPG') }}" style="height: 53%;" alt="Card image cap">

                    <div class="card-body">
                        <img class="d-inline rounded-circle" height="20" width="20" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered=" true">
                        <small class="d-inline" style="color:#135040;">Ashley Dunham | Oct 2020</small>
                        <h5 class="my-4">What's new in the market today? </h5>
                        <div class="d-flex justify-content-end">
                            <a style="transform: rotate(45deg);"><i class="fas fa-arrow-right fa-2x"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9 offset-md-1" style="margin-top: 2%">
                <div class="box m-4">
                    <h3>Let's find what works <br>for you</h3>
                    <img height="20" width="100" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                </div>
            </div>
        </div>
    </div>
</div>
@push('js')
<script>
    $(document).ready(function() {
        $('.reviews').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
        });
        $('.center').slick({
            centerMode: true,
            centerPadding: '20px',
            slidesToShow: 3,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        arrows: false,
                        centerMode: true,
                        centerPadding: '40px',
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
</script>
@endpush
@endsection
