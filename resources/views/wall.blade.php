@extends("layouts.frontlayout")

@section("header_script")
    <style>
        .transparent-header{
            background-color: #00aced;
        }
    </style>

@endsection

@section("banner")

@endsection

@section("content")
    <div class="pg-contact-details bg-grey section-padding-sm mobile-mt-0 mt-5">
        <div class="container">
            <h5 class="text-center"><b>Wall Tiles</b></h5>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mt-2 product-card">
                    <div class="single-quick-contact service-style-2 text-center " id="product">
                        <a href="#"><img src="{{url('resources/images/product/wall/wall1.jpeg')}}" alt=""></a>
                        <div id="one" style="display: none;">
                            <p><u><b>Tiles Info </b></u></p>
                            <p>Category <b>:</b> Wall </p>
                            <p>Model No <b>:</b> 215 </p>
                            <p>Size <b>:</b> 300 X 800 mm </p>
                            <p>Function <b>:</b> Waterproof, Wear Resistant, Anti-Static, Acid-Resistant </p>
                            <p>Usage <b>:</b> Household, Interior & Indoor Tiles </p>
                            <p>Material <b>:</b> Ceramic </p>
                            <p>Surface Function <b>:</b> Glazed </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mt-2">
                    <div class="single-quick-contact service-style-2 text-center " id="productOne">
                        <a href="#"><img src="{{url('resources/images/product/wall/wall2.jpeg')}}" alt=""></a>
                        <div id="two" style="display: none;">
                            <p><u><b>Tiles Info </b></u></p>
                            <p>Category <b>:</b> Wall </p>
                            <p>Model No <b>:</b> 215 </p>
                            <p>Size <b>:</b> 300 X 800 mm </p>
                            <p>Function <b>:</b> Waterproof, Wear Resistant, Anti-Static, Acid-Resistant </p>
                            <p>Usage <b>:</b> Household, Interior & Indoor Tiles </p>
                            <p>Material <b>:</b> Ceramic </p>
                            <p>Surface Function <b>:</b> Glazed </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mt-2">
                    <div class="single-quick-contact service-style-2 text-center " id="productTwo">
                        <a href="#"><img src="{{url('resources/images/product/wall/wall3.jpeg')}}" alt=""></a>
                        <div id="three" style="display: none;">
                            <p><u><b>Tiles Info </b></u></p>
                            <p>Category <b>:</b> Wall </p>
                            <p>Model No <b>:</b> 215 </p>
                            <p>Size <b>:</b> 300 X 800 mm </p>
                            <p>Function <b>:</b> Waterproof, Wear Resistant, Anti-Static, Acid-Resistant </p>
                            <p>Usage <b>:</b> Household, Interior & Indoor Tiles </p>
                            <p>Material <b>:</b> Ceramic </p>
                            <p>Surface Function <b>:</b> Glazed </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer_script")
    <script>
        $(document).ready(function(){
            $("#product").hover(function(){
                $("#one").toggle();
            });
            $("#productOne").hover(function(){
                $("#two").toggle();
            });
            $("#productTwo").hover(function(){
                $("#three").toggle();
            });
        });
    </script>
@endsection
