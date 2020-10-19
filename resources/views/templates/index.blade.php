@extends('layouts.app')
@push('css')
<style>
    .list-group-item {
        background-color: #edecea !important;
    }
</style>
@endpush
@section('content')
<div class="container-fluid">
    <div class="row mb-3">
        <div class="col-md-9 p-0 mt-5 mobile-ml">
            <div class="center">
                <div><img src="{{ secure_asset('storage/jonathan.jpeg') }}" style="height:200px;width:370px;"></div>
                <div><img src="{{ secure_asset('storage/austin-distel.jpeg') }}" style="height:200px;width:370px;"></div>
                <div><img src=" {{ secure_asset('storage/carlos.jpeg') }}" style="height:200px"></div>
            </div>

            <div class="col-md-8 mt-5 ml-5 mobile-ml">
                <p class="font-weight-bold ml-5 pl-5 mobile-ml mobile-pl">We offer insights regarding customer behavior,market viability <br>
                    of products and services, competitors monitoring, and <br>
                    industry trends. These can be applied to product<br> development, customer service, marketing campaigns, <br>
                    planning growth strategies, and more. </p>
                <p class="mt-3 ml-5 pl-5 mobile-ml mobile-pl"><small><a href="#about" class="text-muted">More about A&A</a></small></p>
            </div>
        </div>
        @include('templates._mini-reviews')
    </div>
    <!-- </div>
<div class="container-fluid"> -->
    <!-- <div id="home"> -->
    <!-- <div class="row"> -->
    <!-- <div class="row">
            <div class="col-md-9 offset-md-3 mt-5 ml-5 mobile-ml">
                <p class="font-weight-bold ml-5 pl-5 mobile-ml">We offer insights regarding customer behavior,market viability <br>
                    of products and services, competitors monitoring, and <br>
                    industry trends. These can be applied to product<br> development, customer service, marketing campaigns, <br>
                    planning growth strategies, and more. </p>
                <p class="mt-3 ml-5 pl-5 mobile-ml"><small><a href="#about" class="text-muted">More about A&A</a></small></p>
            </div>
        </div> -->
    <!-- </div> -->
    <!-- </div> -->
    <div class="row" style="margin-bottom: -20px;">
        <div class="col-md-12">
            <div class="card mb-0 rounded-0" style="background-color:#edecea;">
                <div class="card-body pl-5 pl-5 ml-5 row mobile-ml mobile-pl">
                    <div class="col-md-5 col-sm-5">
                        <p class="h2 my-5 ml-3 mobile-ml" style="color:#135040;">HOW WE WORK</p><br>
                        <ul class="list-group ">
                            <li class="h4 text-green list-group-item border-0">In-database</li>
                            <ul class="list-group">
                                <li class="list-group-item border-0">In-database analytics refers to a model where data is processed within a database thus building analytic logic into the database. </li>
                            </ul>
                            <li class="h4 text-green list-group-item border-0">Efficient graphs</li>
                            <ul class="list-group">
                                <li class="list-group-item border-0">Graphs are an effective method of illustrating relationships in the data. We make a point to create readable graphs that clearly convey our findings to our clients.</li>
                            </ul>
                            <li class="h4 text-green list-group-item border-0">Average cost method</li>
                            <ul class="list-group">
                                <li class="list-group-item border-0">We want you to get the best value for your money, so we track inventory expenses with the average cost method. </li>
                            </ul>
                            <li class="h4 text-green list-group-item border-0">Predict changes with minimal loss</li>
                            <ul class="list-group">
                                <li class="list-group-item border-0">With our team of experts and researchers, we keep an eye on your company and how it responds to the market. </li>
                            </ul>
                            <li class="h4 text-green list-group-item border-0">Information specific to the product or needs</li>
                            <ul class="list-group">
                                <li class="list-group-item border-0">We offer diverse information on your products and needs that will help you choose the desired prospect that works for you best. </li>
                            </ul>
                        </ul>
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
