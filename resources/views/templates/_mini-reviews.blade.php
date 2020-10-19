@push('css')
<style>
    .vertical .carousel-inner {
        height: 100%;
    }

    /* .carousel.vertical .carousel-item {
        -webkit-transition: 1s ease-in-out top;
        -moz-transition: 1s ease-in-out top;
        -ms-transition: 1s ease-in-out top;
        -o-transition: 1s ease-in-out top;
        transition: 1s ease-in-out top;
    } */

    .carousel.vertical .active {
        top: 0;
    }

    .carousel.vertical .next {
        top: 400px;
    }

    .carousel.vertical .prev {
        top: -400px;
    }

    .carousel.vertical .next.left,
    .carousel.vertical .prev.right {
        top: 0;
    }

    .carousel.vertical .active.left {
        top: -400px;
    }

    .carousel.vertical .active.right {
        top: 400px;
    }

    .carousel.vertical .carousel-item {
        left: 0;
    }
</style>
@endpush
<div class="border-left col-md-3" id="reviews-page">
    <!-- <div class="mobile-pl">
        <div class="ml-3 mobile-ml">

            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
            <h6 class="d-inline-block align-bottom">Noel<br>
                <small style="color:#135040;">Entrepreneur (IL)</small>
            </h6>
        </div>
        <div>

            <fieldset class="rating ml-3 mobile-ml">
                <input type="radio" id="star5" name="rating" value="5" />
                <label class="full" for="star5" title="Awesome - 5 stars"></label>
                <input type="radio" id="star4half" name="rating" value="4 and a half" />
                <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                <input type="radio" id="star4" name="rating" value="4" />
                <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3half" name="rating" value="3 and a half" />
                <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                <input type="radio" id="star3" name="rating" value="3" />
                <label class="full" for="star3" title="Meh - 3 stars"></label>
                <input type="radio" id="star2half" name="rating" value="2 and a half" />
                <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1half" name="rating" value="1 and a half" />
                <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                <input type="radio" id="star1" name="rating" value="1" />
                <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                <input type="radio" id="starhalf" name="rating" value="half" />
                <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
        </div>
        <p class="card-text ml-3 mt-4 mobile-ml">I've got confidence to make better decisions, I know I have a great research agency on my side.</p>

    </div>
    <div class="mobile-pl">
        <div class="ml-3 mobile-ml">

            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
            <h6 class="d-inline-block align-bottom">Kate<br>
                <small style="color:#135040;">Beauty Retailer (CA)</small>
            </h6>
        </div>
        <div>

            <fieldset class="rating ml-3 mobile-ml">
                <input type="radio" id="star5" name="rating" value="5" />
                <label class="full" for="star5" title="Awesome - 5 stars"></label>
                <input type="radio" id="star4half" name="rating" value="4 and a half" />
                <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                <input type="radio" id="star4" name="rating" value="4" />
                <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3half" name="rating" value="3 and a half" />
                <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                <input type="radio" id="star3" name="rating" value="3" />
                <label class="full" for="star3" title="Meh - 3 stars"></label>
                <input type="radio" id="star2half" name="rating" value="2 and a half" />
                <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1half" name="rating" value="1 and a half" />
                <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                <input type="radio" id="star1" name="rating" value="1" />
                <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                <input type="radio" id="starhalf" name="rating" value="half" />
                <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
        </div>
        <p class="card-text ml-3 mt-4 mobile-ml">
            Long story short, their research gave life to my subscription service and we’ve reached our 800 subscriber milestone within the first 6 months. </p>

    </div>
    <div class="mobile-pl">
        <div class="ml-3 mobile-ml">

            <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
            <h6 class="d-inline-block align-bottom">Steven<br>
                <small style="color:#135040;">Computer Hardware Dealer (WI)</small>
            </h6>
        </div>
        <div>

            <fieldset class="rating ml-3 mobile-ml">
                <input type="radio" id="star5" name="rating" value="5" />
                <label class="full" for="star5" title="Awesome - 5 stars"></label>
                <input type="radio" id="star4half" name="rating" value="4 and a half" />
                <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                <input type="radio" id="star4" name="rating" value="4" />
                <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                <input type="radio" id="star3half" name="rating" value="3 and a half" />
                <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                <input type="radio" id="star3" name="rating" value="3" />
                <label class="full" for="star3" title="Meh - 3 stars"></label>
                <input type="radio" id="star2half" name="rating" value="2 and a half" />
                <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                <input type="radio" id="star1half" name="rating" value="1 and a half" />
                <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                <input type="radio" id="star1" name="rating" value="1" />
                <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                <input type="radio" id="starhalf" name="rating" value="half" />
                <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
            </fieldset>
        </div>
        <p class="card-text ml-3 mt-4 mobile-ml">
            Their reports are like road maps. Just follow the data. </p>
    </div> -->
    <!-- <div class="bd-example"> -->
    <div id="carouselExampleCaptions" class="carousel slide vertical" data-ride="carousel">
        <div class="d-flex justify-content-center mt-5">
            <a class="mr-1" style="color:#000000!important;" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span aria-hidden="true"><i class="fas fa-long-arrow-alt-left fa-2x"></i></span>
                <span class=" sr-only">Previous</span>
            </a>
            <a class="ml-1" style="color:#000000!important;" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span aria-hidden="true"><i class="fas fa-long-arrow-alt-right fa-2x"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="carousel-inner pb-5">
            <div class="carousel-item active">
                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">Noel<br>
                            <small style="color:#135040;">Entrepreneur (IL)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">I've got confidence to make better decisions, I know I have a great research agency on my side.</p>

                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">Kate<br>
                            <small style="color:#135040;">Beauty Retailer (CA)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        Long story short, their research gave life to my subscription service and we’ve reached our 800 subscriber milestone within the first 6 months. </p>
                </div>


                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">Steven<br>
                            <small style="color:#135040;">Computer Hardware Dealer (WI)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        Their reports are like road maps. Just follow the data. </p>
                </div>


                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">Howard<br>
                            <small style="color:#135040;">Toy Manufacturer (OH) </small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        You guys don’t just give statistics and hard facts, you’ve helped me make sense of that data to grow my business. </p>
                </div>


                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">Julian<br>
                            <small style="color:#135040;">CPA Consultant (CA)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        Anthony & Associates helped our company when we were in a deep slump back in 2017. They gave us a clear view of our company’s position in the market and convinced us that the best move was to calibrate our pricing structure and marketing plans. We bounced back and we’re doing much better.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Owen
                            <br>
                            <small style="color:#135040;">Head Software Engineer (DC)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        We managed to carve out a unique competitive edge for our inventory management software thanks to their services.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Stefen
                            <br>
                            <small style="color:#135040;">IT Consultant (MA)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        I’m glad we partnered with you guys as as soon as we did.
                    </p>
                </div>


            </div>

            <div class="carousel-item">
                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Joseph
                            <br>
                            <small style="color:#135040;">Corporate Service Manager (KS)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        They’ve identified problems and opportunities for our clients so we could create better initiatives for their needs.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Walter
                            <br>
                            <small style="color:#135040;">HR Director (NC)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        Accurate analytics that were relevant to the objectives of our corporation.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Amy
                            <br>
                            <small style="color:#135040;">Marketing Director (NY)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        We really like that their research made use of a wide variety of data sources.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Claire
                            <br>
                            <small style="color:#135040;">Sales Officer (DC)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        We’ve been so impressed by their comprehensive client profiling.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Edward
                            <br>
                            <small style="color:#135040;">Senior Vice President of Industrial Analytics (IL)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        We’d really like to thank your research and development team. They’ve done a lot to help us gather quality market information and improve our operations even through all these changes.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Manager
                            <br>
                            <small style="color:#135040;">Senior Operations Fred (FL) </small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        Reliable studies with reliable solutions.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Johnathan
                            <br>
                            <small style="color:#135040;">Automotive Operations Supervisor (MI)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        The research they presented were well-gathered and of high-standard.
                    </p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Tina
                            <br>
                            <small style="color:#135040;">Logistics Manager (AR)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        Your market research is one of the key reasons why we’re still ultra competitive in our industry.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Lisa
                            <br>
                            <small style="color:#135040;">Movement Disorders Specialist (FA)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        Because of your market studies we were able to anticipate and create strategies that catered to the growth of PD’s therapeutic market value in the next couple of years.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            William
                            <br>
                            <small style="color:#135040;">Patient and Caregiver Marketing Director (GA)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        Their findings formed the core of our best marketing strategies to date.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Sara
                            <br>
                            <small style="color:#135040;">Tourism Marketing Manager (NY)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        We’re thrilled that our holiday campaign drew 8 millions hits online. Job well done! We won’t hesitate to work with you again for the next one.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Jackie
                            <br>
                            <small style="color:#135040;">Apparel Retailer (CA)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        We’ve been able to sell 60% more designs just in the past 5 months because we found out exactly how to appeal to our core customers.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Jeff
                            <br>
                            <small style="color:#135040;">Furniture retailer (IN)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        A friend of mine recommended that I check you out. Now I’m convinced that investing in market research was one of the best decisions I’ve made. It went so well I’ll be launching my second branch in the fall.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Martha
                            <br>
                            <small style="color:#135040;">Appliance Store Owner (LA)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        The process was professional from start to finish and I’m very satisfied with the output.
                    </p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Jim
                            <br>
                            <small style="color:#135040;">Entrepreneur (MI)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        I made a good profit last quarter because of your research. I highly recommend your agency.
                    </p>
                </div>
                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Lianna
                            <br>
                            <small style="color:#135040;">Author (ME)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        I’m used to doing things by myself, but conducting my own market research didn’t convert to more sales for my new book. I’m happy that I got professional help from your agency. The marketing strategies we’ve planned out drove more book sales and my following online had increased tenfold. I’m so grateful. God bless you!
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Justin
                            <br>
                            <small style="color:#135040;">Content Creator (CA)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        It’s such a rewarding feeling to finally know the right things to do to build an organic community on our social media platforms.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Fred
                            <br>
                            <small style="color:#135040;">TV Producer (CA)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        In my 11 years of producing shows, there are only a handful of agencies I can depend on to give us a comprehensive portrait of our target audiences. I’m happy to count Anthony & Associates as one of them.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Kenneth
                            <br>
                            <small style="color:#135040;">Online Coach (HI)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        You guys deserve kudos for your work. The launch of my 2nd online course was an overwhelming success!
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Jackson
                            <br>
                            <small style="color:#135040;">Creative Director (TX)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        They’ve made product development a much easier process.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Nelson
                            <br>
                            <small style="color:#135040;">Business Analyst (CO)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        We were very impressed by how thorough and timely they were.
                    </p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Adam
                            <br>
                            <small style="color:#135040;">Digital Marketer (VA)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        I thought their reports on my customers and competitors were well presented and thoroughly researched.
                    </p>
                </div>
                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Karla
                            <br>
                            <small style="color:#135040;">Head of Marketing Development (OH)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        It’s always a pleasure to collaborate with your agency.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Stephanie
                            <br>
                            <small style="color:#135040;">Business Consultant (MT)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        Now my 3rd time purchasing their market report service and I’m always satisfied with their outputs.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Dominique
                            <br>
                            <small style="color:#135040;">Senior Marketing Executive (TN)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        We’ve been partnering with Anthony&Associates close to 5 years now. We can rely on them to give professional market data and analysis.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Thomas
                            <br>
                            <small style="color:#135040;">Marketing Strategist (WY)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        High quality reports that are up to par with our standards.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Olivia
                            <br>
                            <small style="color:#135040;">Restaurateur (ND)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        Your market insights opened my eyes on alternative forms of service I can capitalize on. Not only has my business evolved, it has thrived.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Kristine
                            <br>
                            <small style="color:#135040;">Performance Marketing Director (RI)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        We got to hand it to your team, even when we commissioned a series of complex projects you all have totally exceeded our expectations.
                    </p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Collin
                            <br>
                            <small style="color:#135040;">Business Owner (DE)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        It was an excellent experience to work with your researcher. The reports were personalized and relevant to my long-term objectives.
                    </p>
                </div>
                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Greg
                            <br>
                            <small style="color:#135040;">Software Developer (NM)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        I’ve launched several products based on the gaps in the market outlined in their research. This strategy has been very, very profitable for me even during this global crisis. My recommendation is definitely well deserved.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Alfred
                            <br>
                            <small style="color:#135040;">Entrepreneur (ME)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        The process was fast and flexible and we sure got our money’s worth in the end.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Will
                            <br>
                            <small style="color:#135040;">Business Owner (AL)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        One of the best market research and development agencies we’ve worked with.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Tamina
                            <br>
                            <small style="color:#135040;">Director of Marketing (CA)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        I had them create a study on our brand perception against that of our competitors and going through their findings was a light bulb moment for me.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Bill
                            <br>
                            <small style="color:#135040;">COO (GA)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        They understood that the right information can make or break a company. They’ve been so instrumental for creating that solid foundation for us when we were starting out.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Sasha
                            <br>
                            <small style="color:#135040;">Sales Executive (IL)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        Once we got the market reports they gathered, we knew exactly where and how we could improve our services for our customers.
                    </p>
                </div>
            </div>

            <div class="carousel-item">
                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Everly
                            <br>
                            <small style="color:#135040;">Digital Marketing Strategist (CT)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        They’ve been trusted allies in moving our business forward.
                    </p>
                </div>
                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Ralph
                            <br>
                            <small style="color:#135040;">Key Account Manager (KY)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        Your reports got us to pinpoint the specific needs of our corporate clients. From there we knew what initiatives we had to take to meet their needs.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Morgan
                            <br>
                            <small style="color:#135040;">Field Development Specialist (SD)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        They were specific to the current situation and goals of my company.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Andre
                            <br>
                            <small style="color:#135040;">Producer (HI)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        Thorough, accurate, and unbiased.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Theresa
                            <br>
                            <small style="color:#135040;">Business Development Manager (FL)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        They’re worth the investment.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Marvin
                            <br>
                            <small style="color:#135040;">Entrepreneur (OR)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        I really find their reports to be powerful tools to make prudent decisions.
                    </p>
                </div>

                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Clyde
                            <br>
                            <small style="color:#135040;">Chief Marketing Officer (VT)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        I’m grateful for their dedication to improving our marketing strategies.
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <div class="mobile-pl">
                    <div class="ml-3 mobile-ml">

                        <img class="d-inline-block mt-5 rounded-circle" height="50" width="50" src="{{ secure_asset('storage/profile.JPG') }}" data-holder-rendered="true">
                        <h6 class="d-inline-block align-bottom">
                            Derick
                            <br>
                            <small style="color:#135040;">Software Developer (MS)</small>
                        </h6>
                    </div>
                    <div>

                        <fieldset class="rating ml-5 mobile-ml">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class="full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class="full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class="full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class="full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                    <p class="card-text ml-3 mt-4  mobile-ml">
                        We’re proud to say that in the past year we’ve updated our product with customer-validated features. As expected, it was a hit, but the best part is it’s success finally allowed us to scale our business.
                    </p>
                </div>
            </div>
        </div>
        <div class="carousel-indicators ">
            <a class="mr-1" style="color:#000000!important;" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span aria-hidden="true"><i class="fas fa-long-arrow-alt-left fa-2x"></i></span>
                <span class=" sr-only">Previous</span>
            </a>
            <a class="ml-1" style="color:#000000!important;" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span aria-hidden="true"><i class="fas fa-long-arrow-alt-right fa-2x"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- </div> -->

</div>
@push('js')
<script>
    $(document).ready(function() {
        $('.carousel').carousel({
            interval: 3000,
        })
    });
</script>
@endpush
