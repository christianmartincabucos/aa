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
        <!-- <div class="col-md-12" id="references">
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
        </div> -->


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
