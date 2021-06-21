@extends("layouts.frontlayout")

@section("header_script")
    <style>
        .transparent-header{
            background-color: #00aced;
        }
        .product-details{
            margin-bottom: 0;
        }
        .product-info{
            font-size: 14px;
            margin: 5px  10px 0 10px;
        }
    </style>

@endsection

@section("banner")

@endsection

@section("content")
    <div class="pg-contact-details bg-grey section-padding-sm mobile-mt-0 mt-5">
        <div class="container">
            <h2 class="text-center">Walls Tiles</h2>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mt-2 product-card">
                    <div class="service-style-2" id="product">
                        <img src="{{url('resources/images/product/wall/wall1.jpeg')}}" data-toggle="modal" data-target="#exampleModal" alt="">

                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Tiles Info </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <img class="mx-sm-2 my-sm-2"  src="{{url('resources/images/product/wall/wall1.jpeg')}}"  alt="">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="product-info">
                                                <p class="product-details">Category <b>:</b> Wall </p>
                                                <p class="product-details">Model No <b>:</b> 215 </p>
                                                <p class="product-details">Size <b>:</b> 300 X 800 mm </p>
                                                <p class="product-details">Function <b>:</b> Waterproof, Wear Resistant, Anti-Static, Acid-Resistant </p>
                                                <p class="product-details">Usage <b>:</b> Household, Interior & Indoor Tiles </p>
                                                <p class="product-details">Material <b>:</b> Ceramic </p>
                                                <p class="product-details">Surface Function <b>:</b> Glazed </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mt-2 product-card">
                    <div class="service-style-2" id="product">
                        <img src="{{url('resources/images/product/wall/wall2.jpeg')}}" data-toggle="modal" data-target="#exampleModal2" alt="">

                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-lg" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Tiles Info </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <img class="mx-sm-2 my-sm-2"  src="{{url('resources/images/product/wall/wall2.jpeg')}}"  alt="">
                                        </div>
                                        <div class="col-md-4">
                                            <div style="font-size: 14px; margin: 0 10px 0 10px;">
                                                <p class="product-details">Category <b>:</b> Wall </p>
                                                <p class="product-details">Model No <b>:</b> 215 </p>
                                                <p class="product-details">Size <b>:</b> 300 X 800 mm </p>
                                                <p class="product-details">Function <b>:</b> Waterproof, Wear Resistant, Anti-Static, Acid-Resistant </p>
                                                <p class="product-details">Usage <b>:</b> Household, Interior & Indoor Tiles </p>
                                                <p class="product-details">Material <b>:</b> Ceramic </p>
                                                <p class="product-details">Surface Function <b>:</b> Glazed </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-12 mt-2 product-card">
                    <div class="service-style-2" id="product">
                        <img src="{{url('resources/images/product/wall/wall3.jpeg')}}" data-toggle="modal" data-target="#exampleModal3" alt="">

                        <!-- Modal -->
                        <div class="modal fade bd-example-modal-lg" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLongTitle">Tiles Info </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-8">
                                            <img class="mx-sm-2 my-sm-2"  src="{{url('resources/images/product/wall/wall3.jpeg')}}"  alt="">
                                        </div>
                                        <div class="col-md-4">
                                            <div style="font-size: 14px; margin: 0 10px 0 10px;">
                                                <p class="product-details">Category <b>:</b> Wall </p>
                                                <p class="product-details">Model No <b>:</b> 215 </p>
                                                <p class="product-details">Size <b>:</b> 300 X 800 mm </p>
                                                <p class="product-details">Function <b>:</b> Waterproof, Wear Resistant, Anti-Static, Acid-Resistant </p>
                                                <p class="product-details">Usage <b>:</b> Household, Interior & Indoor Tiles </p>
                                                <p class="product-details">Material <b>:</b> Ceramic </p>
                                                <p class="product-details">Surface Function <b>:</b> Glazed </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section("footer_script")

@endsection
