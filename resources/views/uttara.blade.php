@extends("layouts.frontlayout")

@section("header_script")
@endsection

@section("banner")
    <div class="breadcrumb-area" data-black-overlay="7" style="background-image: url({{asset("resources/images/slider/TEIKI-GRIS.jpg")}})">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="cr-breadcrumb text-center">
                        <h1>Sales & Display center</h1>
                        <ul>
                            <li>
                                <a href="{url('/')}}">Home</a>
                            </li>
                            <li>Uttara Branch</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("content")
    <div class="pg-contact-details bg-grey section-padding-sm mobile-mt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-2 col-md-2col-sm-2 col-12">
                </div>
                <div class="col-lg-8 col-md-8 col-sm-8 col-12">
                    <div class="single-quick-contact service-style-2 text-center">
                        <!--                                <i class="bi bi-phone"></i>-->
                        <i class="fa fa-map-marker"></i>
                        <h5>Uttara Branch</h5>
                        <p>
                            <span style="color: rgb(119, 119, 119); font-family: Raleway, sans-serif; letter-spacing: 0.5px; ">House-25, Sonargaon Janapath Road, Sector-12, Uttara, Dhaka-1230</span><br>
                            <b>Mobile: +880 1926-996155 <br>
                                10 am - 8 pm  <br> Off Day Wednesday</b>
                        </p>
                    </div>
                    <div class="contact-map g_map">

                    </div>
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-12">

                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer_script")
@endsection
