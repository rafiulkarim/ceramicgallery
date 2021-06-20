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
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>Hatirpool Branch</li>
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
                        <h5>Hatirpool Branch</h5>
                        <p>
                            <span style="color: rgb(119, 119, 119); font-family: Raleway, sans-serif; letter-spacing: 0.5px; ">13, Paribag, Sonargaon Road, Hatirpool, Dhaka-1000</span><br>
                            <b>Mobile: +880 1926-996155 <br>
                                10 am - 8 pm <br> Off Day Tuesday</b>
                        </p>
                    </div>
                    <!-- <div class="contact-map g_map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.1114439257663!2d90.39016651435837!3d23.743404994961825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8be415b1a95%3A0x5cd95c0bd5255081!2sCERAMIC%20gallery!5e0!3m2!1sen!2sbd!4v1616604760906!5m2!1sen!2sbd" width="765" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div> -->
                </div>

                <div class="col-lg-2 col-md-2 col-sm-2 col-12">

                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer_script")
@endsection
