@extends('layouts.app')
@push('css')
<style>

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
            <div class="col-md-9 offset-md-3 mt-5 ml-5 mobile-ml">
                <p class="font-weight-bold ml-5 pl-5 mobile-ml">We offer insights regarding customer behavior,market viability <br>
                    of products and services, competitors monitoring, and <br>
                    industry trends. These can be applied to product<br> development, customer service, marketing campaigns, <br>
                    planning growth strategies, and more. </p>
                <p class="mt-3 ml-5 pl-5 mobile-ml"><small><a href="#about" class="text-muted">More about A&A</a></small></p>
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
            <div class="bd-example">
                <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                    <!-- <ol class="carousel-indicators">
                        <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="6"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="7"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="8"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="9"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="10"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="11"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="12"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="13"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="14"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="15"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="16"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="17"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="18"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="19"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="20"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="21"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="22"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="23"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="24"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="25"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="26"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="27"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="28"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="29"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="30"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="31"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="32"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="33"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="34"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="35"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="36"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="37"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="38"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="39"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="40"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="41"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="42"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="43"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="44"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="45"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="46"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="47"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="48"></li>
                        <li data-target="#carouselExampleCaptions" data-slide-to="49"></li>

                    </ol> -->
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">Noel<br>
                                                <small style="color:#135040;">Entrepreneur (IL)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">I've got confidence to make better decisions, I know I have a great research agency on my side.</p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">Kate<br>
                                                <small style="color:#135040;">Beauty Retailer (CA)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            Long story short, their research gave life to my subscription service and we’ve reached our 800 subscriber milestone within the first 6 months. </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">Steven<br>
                                                <small style="color:#135040;">Computer Hardware Dealer (WI)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            Their reports are like road maps. Just follow the data. </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">Howard<br>
                                                <small style="color:#135040;">Toy Manufacturer (OH) </small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            You guys don’t just give statistics and hard facts, you’ve helped me make sense of that data to grow my business. </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">Julian<br>
                                                <small style="color:#135040;">CPA Consultant (CA)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            Anthony & Associates helped our company when we were in a deep slump back in 2017. They gave us a clear view of our company’s position in the market and convinced us that the best move was to calibrate our pricing structure and marketing plans. We bounced back and we’re doing much better.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Owen
                                                <br>
                                                <small style="color:#135040;">Head Software Engineer (DC)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            We managed to carve out a unique competitive edge for our inventory management software thanks to their services.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Stefen
                                                <br>
                                                <small style="color:#135040;">IT Consultant (MA)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            I’m glad we partnered with you guys as as soon as we did.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Joseph
                                                <br>
                                                <small style="color:#135040;">Corporate Service Manager (KS)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            They’ve identified problems and opportunities for our clients so we could create better initiatives for their needs.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Walter
                                                <br>
                                                <small style="color:#135040;">HR Director (NC)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            Accurate analytics that were relevant to the objectives of our corporation.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Amy
                                                <br>
                                                <small style="color:#135040;">Marketing Director (NY)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            We really like that their research made use of a wide variety of data sources.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Claire
                                                <br>
                                                <small style="color:#135040;">Sales Officer (DC)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            We’ve been so impressed by their comprehensive client profiling.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Edward
                                                <br>
                                                <small style="color:#135040;">Senior Vice President of Industrial Analytics (IL)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            We’d really like to thank your research and development team. They’ve done a lot to help us gather quality market information and improve our operations even through all these changes.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Manager
                                                <br>
                                                <small style="color:#135040;">Senior Operations Fred (FL) </small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            Reliable studies with reliable solutions.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Johnathan
                                                <br>
                                                <small style="color:#135040;">Automotive Operations Supervisor (MI)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            The research they presented were well-gathered and of high-standard.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Tina
                                                <br>
                                                <small style="color:#135040;">Logistics Manager (AR)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            Your market research is one of the key reasons why we’re still ultra competitive in our industry.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Lisa
                                                <br>
                                                <small style="color:#135040;">Movement Disorders Specialist (FA)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            Because of your market studies we were able to anticipate and create strategies that catered to the growth of PD’s therapeutic market value in the next couple of years.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                William
                                                <br>
                                                <small style="color:#135040;">Patient and Caregiver Marketing Director (GA)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            Their findings formed the core of our best marketing strategies to date.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Sara
                                                <br>
                                                <small style="color:#135040;">Tourism Marketing Manager (NY)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            We’re thrilled that our holiday campaign drew 8 millions hits online. Job well done! We won’t hesitate to work with you again for the next one.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Jackie
                                                <br>
                                                <small style="color:#135040;">Apparel Retailer (CA)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            We’ve been able to sell 60% more designs just in the past 5 months because we found out exactly how to appeal to our core customers.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Jeff
                                                <br>
                                                <small style="color:#135040;">Furniture retailer (IN)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            A friend of mine recommended that I check you out. Now I’m convinced that investing in market research was one of the best decisions I’ve made. It went so well I’ll be launching my second branch in the fall.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Martha
                                                <br>
                                                <small style="color:#135040;">Appliance Store Owner (LA)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            The process was professional from start to finish and I’m very satisfied with the output.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Jim
                                                <br>
                                                <small style="color:#135040;">Entrepreneur (MI)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            I made a good profit last quarter because of your research. I highly recommend your agency.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Lianna
                                                <br>
                                                <small style="color:#135040;">Author (ME)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            I’m used to doing things by myself, but conducting my own market research didn’t convert to more sales for my new book. I’m happy that I got professional help from your agency. The marketing strategies we’ve planned out drove more book sales and my following online had increased tenfold. I’m so grateful. God bless you!
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Justin
                                                <br>
                                                <small style="color:#135040;">Content Creator (CA)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            It’s such a rewarding feeling to finally know the right things to do to build an organic community on our social media platforms.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Fred
                                                <br>
                                                <small style="color:#135040;">TV Producer (CA)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            In my 11 years of producing shows, there are only a handful of agencies I can depend on to give us a comprehensive portrait of our target audiences. I’m happy to count Anthony & Associates as one of them.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Kenneth
                                                <br>
                                                <small style="color:#135040;">Online Coach (HI)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            You guys deserve kudos for your work. The launch of my 2nd online course was an overwhelming success!
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Jackson
                                                <br>
                                                <small style="color:#135040;">Creative Director (TX)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            They’ve made product development a much easier process.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Nelson
                                                <br>
                                                <small style="color:#135040;">Business Analyst (CO)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            We were very impressed by how thorough and timely they were.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Adam
                                                <br>
                                                <small style="color:#135040;">Digital Marketer (VA)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            I thought their reports on my customers and competitors were well presented and thoroughly researched.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Karla
                                                <br>
                                                <small style="color:#135040;">Head of Marketing Development (OH)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            It’s always a pleasure to collaborate with your agency.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Stephanie
                                                <br>
                                                <small style="color:#135040;">Business Consultant (MT)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            Now my 3rd time purchasing their market report service and I’m always satisfied with their outputs.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Dominique
                                                <br>
                                                <small style="color:#135040;">Senior Marketing Executive (TN)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            We’ve been partnering with Anthony&Associates close to 5 years now. We can rely on them to give professional market data and analysis.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Thomas
                                                <br>
                                                <small style="color:#135040;">Marketing Strategist (WY)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            High quality reports that are up to par with our standards.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Olivia
                                                <br>
                                                <small style="color:#135040;">Restaurateur (ND)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            Your market insights opened my eyes on alternative forms of service I can capitalize on. Not only has my business evolved, it has thrived.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Kristine
                                                <br>
                                                <small style="color:#135040;">Performance Marketing Director (RI)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            We got to hand it to your team, even when we commissioned a series of complex projects you all have totally exceeded our expectations.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Collin
                                                <br>
                                                <small style="color:#135040;">Business Owner (DE)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            It was an excellent experience to work with your researcher. The reports were personalized and relevant to my long-term objectives.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Greg
                                                <br>
                                                <small style="color:#135040;">Software Developer (NM)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            I’ve launched several products based on the gaps in the market outlined in their research. This strategy has been very, very profitable for me even during this global crisis. My recommendation is definitely well deserved.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Alfred
                                                <br>
                                                <small style="color:#135040;">Entrepreneur (ME)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            The process was fast and flexible and we sure got our money’s worth in the end.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Will
                                                <br>
                                                <small style="color:#135040;">Business Owner (AL)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            One of the best market research and development agencies we’ve worked with.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Tamina
                                                <br>
                                                <small style="color:#135040;">Director of Marketing (CA)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            I had them create a study on our brand perception against that of our competitors and going through their findings was a light bulb moment for me.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Bill
                                                <br>
                                                <small style="color:#135040;">COO (GA)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            They understood that the right information can make or break a company. They’ve been so instrumental for creating that solid foundation for us when we were starting out.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Sasha
                                                <br>
                                                <small style="color:#135040;">Sales Executive (IL)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            Once we got the market reports they gathered, we knew exactly where and how we could improve our services for our customers.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Everly
                                                <br>
                                                <small style="color:#135040;">Digital Marketing Strategist (CT)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            They’ve been trusted allies in moving our business forward.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Ralph
                                                <br>
                                                <small style="color:#135040;">Key Account Manager (KY)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            Your reports got us to pinpoint the specific needs of our corporate clients. From there we knew what initiatives we had to take to meet their needs.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Morgan
                                                <br>
                                                <small style="color:#135040;">Field Development Specialist (SD)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            They were specific to the current situation and goals of my company.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Andre
                                                <br>
                                                <small style="color:#135040;">Producer (HI)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            Thorough, accurate, and unbiased.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Theresa
                                                <br>
                                                <small style="color:#135040;">Business Development Manager (FL)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            They’re worth the investment.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Marvin
                                                <br>
                                                <small style="color:#135040;">Entrepreneur (OR)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            I really find their reports to be powerful tools to make prudent decisions.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/john.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Clyde
                                                <br>
                                                <small style="color:#135040;">Chief Marketing Officer (VT)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            I’m grateful for their dedication to improving our marketing strategies.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="card mb-0 pb-5 rounded-0 " style="background-color:#edecea;">
                                <div class="card-body pl-0 row">
                                    <div class="col-sm-6">
                                        <img class="card-img float-left" src="{{ asset('storage/christin.jpeg') }}" alt="Card image" style="position: relative;margin-top: -11%;">
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="ml-5 my-4">

                                            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ asset('storage/profile.JPG') }}" data-holder-rendered="true">
                                            <h6 class="d-inline-block align-bottom">
                                                Derick
                                                <br>
                                                <small style="color:#135040;">Software Developer (MS)</small>
                                            </h6>
                                        </div>
                                        <p class="card-text mt-4 mx-5">
                                            We’re proud to say that in the past year we’ve updated our product with customer-validated features. As expected, it was a hit, but the best part is it’s success finally allowed us to scale our business.
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="carousel-indicators">
                        <a class="mr-1 text-dark" href="#carouselExampleCaptions" role="button" data-slide="prev">
                            <span aria-hidden="true"><i class="fas fa-long-arrow-alt-left fa-2x"></i></span>
                            <span class=" sr-only">Previous</span>
                        </a>
                        <a class="ml-1 text-dark" href="#carouselExampleCaptions" role="button" data-slide="next">
                            <span aria-hidden="true"><i class="fas fa-long-arrow-alt-right fa-2x"></i></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
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
