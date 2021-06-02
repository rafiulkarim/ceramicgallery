@extends("layouts.frontlayout")

@section("header_script")
@endsection

@section("banner")
    <div class="banner-area banner-slider-active animated-slider-content cr-slider-navigation-1">

        <!-- Single Banner -->
        <div class="single-banner bg-image-1 fullscreen" data-black-overlay="6" style="background-image: url({{asset("resources/images/slider/Realonda-Collection-HEX-Nouveau-Green-+-White.jpg")}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9 col-12">
                        <div class="single-banner-content single-banner-content-parallax">
                            <!--                            <h3>Excellence in Living</h3>-->
                            <h1></h1>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-banner bg-image-1 fullscreen" data-black-overlay="6" style="background-image: url({{asset("resources/images/slider/ROOF_IVORY_MARRON.jpg")}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9 col-12">
                        <div class="single-banner-content single-banner-content-parallax">
                            <!--                            <h3>Excellence in Living</h3>-->
                            <h1></h1>
                            <p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-banner bg-image-1 fullscreen" data-black-overlay="6" style="background-image: url({{asset("resources/images/slider/TEIKI-GRIS.jpg")}});">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-9 col-12">
                        <div class="single-banner-content single-banner-content-parallax">
                            <!--                            <h3>Excellence in Living</h3>-->
                            <h1></h1>
                            <p>
                            </p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Single Banner -->
    </div>
    <div id="section-down" class="scrl-down">
        <a href="#" class="scroll-down" address="true"></a>
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
                            <br><br>
                        <p>Thanks to the easily adaptable, stylized format of its wall tiles, floor
                            tiles, decors and the warmth and originality sanitary wares and
                            fittings, <b>CERAMIC gallery</b> collections are always an eye-catching
                            guaranteed success _ Technology is used to infuse them with style
                            and sensory appeal in new takes on classic designs and decors with
                            rich contrasts and subtle nuances.</p>
                        <br><br>
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
    <section class="portfolio-area section-padding-lg bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-12 offset-0">
                    <div class="">
                        <h2><b>Technology and Design</b></h2><br>
                        <p>In <b>CERAMIC gallery's</b> ongoing bid to spearhead new trends, it combines research into the needs of architects, interior
                            designers and professionals from the sector with cutting-edge technological innovations. With their outstanding
                            technical performance and visual appeal, its collections are all set to revolutionize the ceramic tile, sanitary ware and
                            fittings sectors. <br><br>Our collections have been designed and conceptualized to meet the demanding requirements of architecture,
                            construction and interior design. Research, innovation and respect for the environment are the values that define the way</p>
                        <br>
                    </div>
                </div>
            </div>
        </div>
        <div class="portfolio-wrap">
            <div class="container">
                <!-- Portfolios -->
                <div class="row justify-content-center services-grid">

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 p_cat_bx">
                        <!-- Single Product -->

                        <img src="{{asset("resources/images/homepage/Realonda-Collection---MARLSTONE-ST-EEL.jpg")}}" alt="img29"/>

                        <!--// Single Product -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 p_cat_bx">
                        <!-- Single Product -->

                        <img src="{{asset("resources/images/homepage/1200-2.jpg")}}" alt="img29"/>

                        <!--// Single Product -->
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12 p_cat_bx">
                        <!-- Single Product -->

                        <img src="{{asset("resources/images/homepage/Realonda-Collection----RIBERA-BAÑO.jpg")}}" alt="img29"/>

                        <!--// Single Product -->
                    </div>
                </div>
                <!--// Product -->
            </div>
        </div>
    </section>
    <!--// Call To Action Area -->
@endsection

@section("footer_script")
@endsection
