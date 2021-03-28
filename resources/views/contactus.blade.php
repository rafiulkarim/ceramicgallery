@extends("layouts.frontlayout")

@section("header_script")
@endsection

@section("banner")
    <div class="breadcrumb-area" data-black-overlay="7" style="background-image: url({{asset("resources/images/slider/TEIKI-GRIS.jpg")}})">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <div class="cr-breadcrumb text-center">
                        <h1>Contact Form</h1>
                        <ul>
                            <li>
                                <a href="{{url("/")}}">Home</a>
                            </li>
                            <li>Contact Us</li>
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
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="single-quick-contact service-style-2 text-center">
                            <!--                                <i class="bi bi-phone"></i>-->
                            <i class="fa fa-map-marker "></i>
                            <h5>CORPORATE OFFICE</h5>
                            <p>
                            </p><p>Rekha Chitra Tower, 110 Nur Ahmed Road, Kazir Dewri, Chattagram, Bangladesh
                            </p>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="single-quick-contact service-style-2 text-center">
                            <i class="fa fa-envelope-o "></i>
                            <h5>E-MAIL</h5>
                            <p>
                                info@ceramicgallery.com.bd</p><div><br></div>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                        <div class="single-quick-contact service-style-2 text-center">
                            <i class="fa fa-phone "></i>
                            <h5>PHONE</h5>
                            <p>
                                +88-03-1622115</p><div>01926-996177</div>
                            <p></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Contact Us Area -->
        <div class="pg-contact-form-map-wrapper bg-white section-padding-lg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">

                    </div>
                    <div class="col-lg-8">
                        <div class="pg-contact-form pg-contact-form-2 mr-0 mr-lg-3">
                            <div class="small-title">
                                <h2>Contact Us</h2>
                                <p>Got a question? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
                            </div>
                            <form id="contact-form" action="mail2.php" method="post">
                                <div class="row no-gutters">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-input">
                                            <input type="text" name="name" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="single-input">
                                            <input type="email" name="email" placeholder="E-mail">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="single-input">
                                            <input type="text" name="subject" placeholder="Subject">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-input">
                                            <textarea name="message" cols="10" rows="4" placeholder="Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="single-input">
                                            <button class="btn btn-primary" type="submit">
                                                <span>Send Now</span>
                                                <b></b><b></b></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-2">

                    </div>
                </div>
            </div>
            <!--// Contact Us Area -->


        </div>
@endsection

@section("footer_script")
@endsection
