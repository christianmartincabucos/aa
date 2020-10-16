@extends('layouts.app')
@push('css')
<style>

</style>
@endpush
@section('content')
<div class="container-fluid">
    <div id="home">
        <!-- <div class="row"> -->
        <div class="p-0 mt-5 ml-5 mobile-ml">
            <div class="center">
                <div><img src="{{ secure_asset('storage/jonathan.jpeg') }}" style="height:200px;width:370px;"></div>
                <div><img src="{{ secure_asset('storage/austin-distel.jpeg') }}" style="height:200px;width:370px;"></div>
                <div><img src=" {{ secure_asset('storage/carlos.jpeg') }}" style="height:200px"></div>
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
                    <img class="card-img w-50 float-right img-about" src="{{ secure_asset('storage/blake.jpeg') }}" alt="Card image" style="position:relative;margin-top: -28%;">
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

        <div class="col-md-12 col-sm-12">

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
