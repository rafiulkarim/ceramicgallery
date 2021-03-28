@extends("layouts.frontlayout")

@section("header_script")
@endsection

@section("banner")
    <div class="breadcrumb-area" data-black-overlay="7" style="background-image: url({{asset("resources/images/slider/TEIKI-GRIS.jpg")}})">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="cr-breadcrumb text-center">
                        <h1>About Us</h1>
                        <ul>
                            <li>
                                <a href="{{url("/")}}">Home</a>
                            </li>
                            <li>Ceramic Gallery</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("content")
    <!-- Counter Area -->
    <div id="about-sec" class="counter-area section-padding-md bg-white">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-12 offset-0">
                    <div class="">
                        <h2><b>CERAMIC gallery</b></h2><br>
                        <p><b>CERAMIC gallery</b> offers a wide variety of decorative solutions,adding an up-to-the-minute twist to elegant classics.
                            <br>
                        <p>Thanks to the easily adaptable, stylized format of its wall tiles, floor
                            tiles, decors and the warmth and originality sanitary wares and
                            fittings, <b>CERAMIC gallery</b> collections are always an eye-catching
                            guaranteed success _ Technology is used to infuse them with style
                            and sensory appeal in new takes on classic designs and decors with
                            rich contrasts and subtle nuances.</p>
                        <br>
                        <p>The company has been continuously adapting to technological and
                            sector changes to offer its customers a <b>top-quality product and a
                                dedicated service</b> , at the level of their expectations.
                            We appreciate your trust</p>
                        </p>
                    </div>
                </div>
                <div class="col-xl-6 col-12 offset-0">
                    <div class="section-title">
                        <img src="{{asset("resources/images/homepage/Diary-9---Realonda-Collection-VENUS.jpg")}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--// Counter Area -->
    <!-- Services Area -->

    <!--// Call To Action Area -->
@endsection

@section("footer_script")
@endsection
