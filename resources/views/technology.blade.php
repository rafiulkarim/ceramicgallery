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
                            <li>Technology and Design</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section("content")
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
@endsection

@section("footer_script")
@endsection
