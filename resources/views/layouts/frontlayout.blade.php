
<!doctype html>
<html class="no-js" lang="en-us">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{$title}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="N4jIre-tnVjYCy-AGl638Zc8mpz1U5sHFkFg2mjRwz8" />
    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset("resources/images/rsz_cg_logo.jpg")}}">
    <link rel="apple-touch-icon" href="/images/icon.png">

    <script src="https://buzinas.github.io/simple-scrollbar/simple-scrollbar.min.js"></script>
    <!-- Google font (font-family: 'Roboto', sans-serif;) -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet"> -->
    <!-- Google font (font-family: 'Roboto Condensed', sans-serif;) -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <!-- Stylesheets -->
    <link rel="stylesheet" href="{{asset("resources/frontend/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("resources/frontend/css/plugins.css")}}">
    <!-- Megamenu Stylesheets -->
    <link rel="stylesheet" href="{{asset("resources/frontend/css/megamenu/css/webslidemenu.css")}}">
    <link rel="stylesheet" href="{{asset("resources/frontend/style.css")}}">

    <!--Start form wizard-->
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset("resources/frontend/form-wizard/fonts/material-icon/css/material-design-iconic-font.min.css")}}">
    <link rel="stylesheet" href="{{asset("resources/frontend/form-wizard/vendor/nouislider/nouislider.min.css")}}">
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset("resources/frontend/form-wizard/css/style.css")}}">

    <!--/end form wizard-->

    <!-- Color Variations -->
    <link rel="stylesheet" href="{{asset("resources/frontend/css/color-variations.css")}}">

    <!-- Light Gallery -->
    <link rel="stylesheet" href="{{asset("resources/frontend/css/plugins/lightgallery.min.css")}}">

    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Cusom css -->

    <link rel="stylesheet" href="{{asset("resources/frontend/css/custom.css")}}">
    <link rel="stylesheet" media="screen, projection" href="{{asset("resources/frontend/css/drift-basic.css")}}">
    <style>
        .parent {display: block;position: relative;float: left;line-height: 30px;}
        .parent a{margin: 10px;color: #FFFFFF;text-decoration: none;}
        .parent:hover > ul {display:block;position:absolute;}
        .child {display: none;}
        .child li {background-color: #333;line-height: 30px; width:100%;}
        .child li a{color: #FFFFFF;}
        ul{list-style: none;margin: 0;padding: 0px; min-width:10em;}
        ul ul ul{left: 100%;top: 0;margin-left:1px;}
        /*li:hover {background-color: #95B4CA;}*/
        /*.parent li:hover {background-color: #F0F0F0;}*/
        .expand{font-size:12px;float:right;margin-right:5px;}
    </style>
    @yield("header_script")
</head>

<body>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-145024451-1');
</script>



<!-- Add your site or application content here -->



<!-- Main wrapper -->
<div class="wrapper" id="wrapper">


    <!-- Header -->
    <header class="header transparent-header sticky-header megamenu-container" data-black-overlay="1">
        <div class="container-fluid">

            <div class="header-inner">
                <div class="wsmenucontainer clearfix">
                    <div id="overlapblackbg"></div>
                    <div class="wsmobileheader clearfix"> <a id="wsnavtoggle" class="animated-arrow"><span></span></a> <a class="callusicon res_logo" href="{{url("/")}}"><span class="m_logo"><img src="{{asset("resources/images/CGlogo.jpg")}}" alt="Logo"></span></a></div>
                    <div class="header-area">
                        <!--Main Menu HTML Code-->

                        <div class="wsmain">
                            <div class="smllogo"><a href="{{url("/")}}"><img src="{{asset("resources/images/CGlogo.jpg")}}" alt="Logo"></a></div>
                            <nav class="wsmenu clearfix">
                                <ul class="mobile-sub wsmenu-list">
                                    <!--                                            <li><a href="/index.php" class="navtext">Home</a></li>-->
                                    <li><a href="#" class="navtext dr-down">About us</a>
                                        <div class="megamenu clearfix halfmenu">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <ul class="wstliststy06 clearfix">
                                                            <li><a href="{{route("about_ceramic_gallery")}}">CERAMIC Gallery</a></li>
                                                            <li><a href="{{route("about_technology_and_design")}}">Technology Design</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#" class="navtext dr-down">Products</a>
                                        <div class="megamenu clearfix halfmenu">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <ul class="wstliststy06 clearfix" style="width: 80px">
                                                            <li class="parent"><a href="#">Tiles<p class="fa fa-angle-right p-1"></p></a>
                                                                <ul class="child">
                                                                    <li class="parent"><a href="#">Category<p class="fa fa-angle-right p-1"></p><span class="expand"></span></a>
                                                                        <ul class="child">
                                                                            <li><a href="{{url('/product/wall')}}" nowrap>Wall</a></li>
                                                                            <li><a href="#" nowrap>Floor</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="parent"><a href="#">Size<p class="fa fa-angle-right p-1"></p><span class="expand"></span></a>
                                                                        <ul class="child">
                                                                            <li><a href="#" nowrap>12X24</a></li>
                                                                            <li><a href="#" nowrap>24x24</a></li>
                                                                            <li><a href="#" nowrap>32x32</a></li>
                                                                            <li><a href="#" nowrap>24x48</a></li>
                                                                            <li><a href="#" nowrap>24x36</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li class="parent"><a href="#">Brand<p class="fa fa-angle-right p-1"></p><span class="expand"></span></a>
                                                                        <ul class="child">
                                                                            <li><a href="#" nowrap>Winto</a></li>
                                                                            <li><a href="#" nowrap>Eagle</a></li>
                                                                            <li><a href="#" nowrap>HQ</a></li>
                                                                            <li><a href="#" nowrap>Monalisa</a></li>
                                                                            <li><a href="#" nowrap>Dongpeng</a></li>
                                                                        </ul>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li class="parent"><a href="#">Sanitary Ware<p class="fa fa-angle-right p-1"></p></a>
                                                                <ul class="child">
                                                                    <li class="parent"><a href="#">Basin<p class="fa fa-angle-right p-1"></p><span class="expand"></span></a>
                                                                        <ul class="child">
                                                                            <li><a href="#" nowrap>Counter</a></li>
                                                                            <li><a href="#" nowrap>Pedestal</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="#">Commode</a></li>
                                                                    <li><a href="#">Suqatting Pan</a></li>
                                                                    <li><a href="#">Bathtubs</a></li>
                                                                    <li><a href="#">Jacuzzi</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="parent"><a href="#">Sanitary Fittings<p class="fa fa-angle-right p-1"></p></a>
                                                                <ul class="child">
                                                                    <li class="parent"><a href="#">Shower Set<p class="fa fa-angle-right p-1"></p><span class="expand"></span></a>
                                                                        <ul class="child">
                                                                            <li><a href="#" nowrap>Panel</a></li>
                                                                            <li><a href="#" nowrap>Concealed</a></li>
                                                                        </ul>
                                                                    </li>
                                                                    <li><a href="#">Basin Mixer</a></li>
                                                                    <li><a href="#">Accessories</a></li>
                                                                </ul>
                                                            </li>
                                                            <li class="parent"><a href="#">Kitchen Ware<p class="fa fa-angle-right p-1"></p></a>
                                                                <ul class="child">
                                                                    <li><a href="#">Kitchen Sink</a></li>
                                                                    <li><a href="#">Sink Mixer</a></li>
                                                                    <li><a href="#">Stove</a></li>
                                                                    <li><a href="#">Kitchen Hood</a></li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li><a href="#" class="navtext dr-down">Sales & Display center</a>
                                        <div class="megamenu clearfix halfmenu">
                                            <div class="container-fluid">
                                                <div class="row">
                                                    <div class="col-lg-12 col-md-12">
                                                        <ul class="wstliststy06 clearfix">
                                                            <li><a href="{{route("hatirpool_branch")}}">Hatirpool Branch</a></li>
                                                            <li><a href="{{route("uttara_branch")}}">Uttara Branch</a></li>
                                                            <li><a href="{{route("chattagram_branch")}}">Chattogram Branch</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>

                                    <li><a href="{{route("contactus")}}" class="navtext">Contact us</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                        <!--Menu HTML Code-->

                    </div>
                </div>
            </div><!--/header-inner-->

        </div><!--/end container fluid-->
        <!--/container d-none d-lg-block-->

    </header>
    <!-- //Header -->



    <!-- Top Banner -->
@yield("banner")
<!--scroll down button-->

    <!--/scroll down button-->

    <!-- //Top Banner -->

    <!-- Floating Social Media bar Starts -->



    <main class="page-content">

        @yield("content")

    </main>
    <!-- //Page Content -->
    <!-- Footer Area -->
    <footer id="footer" class="footer-area">

        <!-- Footer Top Area -->
        <div class="footer-top-area bg-dark-light section-padding-sm">
            <div class="container">
                <div class="footer-widgets widgets">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-widget widget-quick-links">
                                <h5 class="footer-widget-title">QUICK LINK</h5>
                                <ul>
                                    <li>
                                        <a href="{{url("/")}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="">About Us</a>
                                    </li>
                                    <li>
                                        <a href="">Products</a>
                                    </li>
                                    <li>
                                        <a href="{{route("hatirpool_branch")}}">sales and Display center</a>
                                    </li>
                                    <li>
                                        <a href="{{route("contactus")}}">Contact us</a>
                                    </li>
                                </ul>
                            </div>
                            <!--// Single Widget -->
                        </div>
                        <div class="col-lg-4 col-md-6 col-12">
                            <!-- Single Widget -->
                            <div class="single-widget widget-quick-contact">
                                <h5 class="footer-widget-title">Quick Contact</h5>
                                <ul>
                                    <li>
                                        <span>Phone</span>
                                        <p>
                                            <a href="tel:(+880) 09639 777111">+88-03-1622115</a>
                                        </p>
                                        <span>Mobile</span>
                                        <p>
                                            <a href="tel:(+880) 09639 555222">01926-996177</a>
                                        </p>
                                    </li>
                                    <li>
                                        <span>Email</span>
                                        <p>
                                            <a href="mailto:info@starceramicsbd.com">info@ceramicgallery.com.bd</a>
                                        </p>
                                    </li>
                                    <li>
                                        <span>Address</span>
                                        <p><span style="color: rgb(119, 119, 119); font-family: Raleway, sans-serif; letter-spacing: 0.5px; ">Rekha Chitra Tower, 110 Nur Ahmed Road, Kazir Dewri, Chattagram, Bangladesh</span></p>
                                    </li>
                                </ul>
                            </div>
                            <!--// Single Widget -->
                        </div>


                        <div class="col-lg-5 col-md-6 col-12">


                            <!-- Single Widget -->
                            <div class="single-widget widget-newsletter" id="feed">
                                <h5 class="footer-widget-title">SUBSCRIPTION </h5>
                                <form id="subscription" method="post">
                                    <div class="form-group">
                                        <input type="email" id="email" class="email" placeholder="Your Email">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-sm" id="btn" name="btn">
                                        <span>Send</span>
                                    </button>
                                </form>

                            </div>

                            <!--// Single Widget -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--// Footer Top Area -->

        <!-- Footer Bottom Area -->
        <div class="footer-bottom-area bg-dark">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="social-icons social-icons-large">
                            <ul>
                                <li class="facebook">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                    </a>
                                </li>
                                <li class="facebook">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-twitter"></i>
                                    </a>
                                </li>
                                <li class="facebook">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-instagram"></i>
                                    </a>
                                </li>
                                <li class="facebook">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-linkedin"></i>
                                    </a>
                                </li>
                                <li class="facebook">
                                    <a href="#" target="_blank">
                                        <i class="fa fa-youtube"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p class="footer-copyright">Copyright &copy;
                            <a href="{{route("front.index")}}">,</a> 2021. Developed By   <a rel="dofollow" href="#"> OnePoint IT</a></p>
                    </div>
                </div>
            </div>
        </div>
        <!--// Footer Bottom Area -->

    </footer>
    <!-- //Footer Area -->

</div>
<!-- Load Facebook SDK for JavaScript -->
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            xfbml            : true,
            version          : 'v3.2'
        });
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Your customer chat code -->
<div class="fb-customerchat"
     attribution=setup_tool
     page_id="218035511684692"
     theme_color="#2D3790">
</div>

<!-- //Main wrapper -->
<!-- Start of LiveChat (www.livechatinc.com) code -->













<!-- End of LiveChat code -->












<!-- JS Files -->
<!-- Modernizer js -->
<script src="{{asset("resources/js/modernizr-3.5.0.min.js")}}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-145024451-1"></script>



<script async defer src="https://connect.facebook.net/en_US/sdk.js"></script>
<script src="{{asset("resources/js/jquery-3.2.1.min.js")}}"></script>
<script src="{{asset("resources/js/popper.min.js")}}"></script>
<script src="{{asset("resources/js/bootstrap.min.js")}}"></script>
<script src="{{asset("resources/js/plugins.js")}}"></script>
<script src="{{asset("resources/frontend/css/megamenu/js/webslidemenu.js")}}"></script>
<script src="{{asset("resources/js/active.js")}}"></script>

<!-- product lightbox on click
<script src="/css/plugins/product_lightBox/js/lightgallery.min.js"></script>
<script src="/css/plugins/product_lightBox/js/lg-fullscreen.min.js"></script>
<script src="/css/plugins/product_lightBox/js/lg-thumbnail.min.js"></script>
<script src="/css/plugins/product_lightBox/js/lg-zoom.min.js"></script>
<script src="/css/plugins/product_lightBox/js/lg-hash.min.js"></script>
<script src="/css/plugins/product_lightBox/js/lg-pager.min.js"></script>-->
<script src="{{asset("resources/js/scripts.js")}}"></script>
<!--form-wizard-->
<script src="{{asset("resources/js/jquery.min.js")}}"></script>
<script src="{{asset("resources/frontend/form-wizard/vendor/jquery-validation/dist/jquery.validate.min.js")}}"></script>
<script src="{{asset("resources/frontend/form-wizard/vendor/jquery-validation/dist/additional-methods.min.js")}}"></script>
<script src="{{asset("resources/frontend/form-wizard/vendor/jquery-steps/jquery.steps.min.js")}}"></script>
<script src="{{asset("resources/frontend/form-wizard/vendor/minimalist-picker/dobpicker.js")}}"></script>
<script src="{{asset("resources/frontend/form-wizard/vendor/nouislider/nouislider.min.js")}}"></script>
<script src="{{asset("resources/frontend/form-wizard/vendor/wnumb/wNumb.js")}}"></script>
<script src="{{asset("resources/frontend/form-wizard/js/main.js")}}"></script>
<script src="{{asset("resources/js/jquery.lazy.min.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<!--<script src="https://starceramicsbd.com/assets/frontend/js/jQuery.scrollSpeed.js"></script>-->
<!--/form-wizard-->

<script src="{{asset("resources/js/plugins.js")}}"></script>
<script>
    //cpywrite: https://github.com/imgix/drift

    if ($('.drift-demo-trigger').length ) {


        new Drift(document.querySelector('.drift-demo-trigger'), {
            paneContainer: document.querySelector('.pro_det_area'),
            inlinePane: 900,
            inlineOffsetY: -85,
            containInline: true,
            hoverBoundingBox: true
        });
    }
</script>
<script>
    $(document).ready(function(){
        $(function() {
            $('.lazy').Lazy({
                // your configuration goes here
                scrollDirection: 'vertical',
                effect: 'fadeIn',
                // delay: 1000,
                effectTime: 2000,
                placeholder: "data:image/gif;base64,R0lGODlhEALAPQAPzl5uLr9Nrl8e7...",
                threshold: 0,
                visibleOnly: true,
                onError: function(element) {
                    console.log('error loading ' + element.data('src'));
                }
            });
        });
    });
</script>



<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function(){
        $("#signup").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: "Please enter a valid email address"
            }
        });
    });
    $(document.body).on('submit', '#subscription', function(e) {
        e.preventDefault();

        //let name = $('#name').val();
        let email = $('#email').val();
        console.log(email);
        //let password = $('#password').val();
        {{--$(".loading").show();--}}
        {{--setTimeout(function () {--}}
        {{--    $.ajax({--}}
        {{--        method: "post",--}}
        {{--        url: '{{route('signup.store')}}',--}}
        {{--        data: {name: name, email: email, password: password,  _token: '{{ csrf_token() }}'},--}}
        {{--        dataType: "json",--}}
        {{--        success: function(res) {--}}
        {{--            if(res.data){--}}
        {{--                $( ".loading" ).hide();--}}
        {{--                $('#message').prepend('<div id="message" class="alert alert-success">' + res.message + '</div>');--}}
        {{--            }else if(res.data){--}}
        {{--                $( ".loading" ).hide();--}}
        {{--                $('#message').prepend('<div id="message" class="alert alert-danger">' + res.message + '</div>');--}}
        {{--            }--}}
        {{--        },--}}
        //     })
        // }, 2000);
    });
</script>


<script>
    //career-form1
    /*var start = 1990;
    var end = new Date().getFullYear();
    var options = "<option value='' selected>Year</option>";
    for(var year = start ; year <=end; year++){
      options += "<option>"+ year +"</option>";
    }
    document.getElementById("year").innerHTML = options;

        //date picker
        $(function () {
            var bindDatePicker = function() {
                $(".date").datetimepicker({
                    format:'YYYY-MM-DD',
                    icons: {
                        time: "fa fa-clock-o",
                        date: "fa fa-calendar",
                        up: "fa fa-arrow-up",
                        down: "fa fa-arrow-down"
                    }
                }).find('input:first').on("blur",function () {
                    // check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
                    // update the format if it's yyyy-mm-dd
                    var date = parseDate($(this).val());

                    if (! isValidDate(date)) {
                        //create date based on momentjs (we have that)
                        date = moment().format('YYYY-MM-DD');
                    }

                    $(this).val(date);
                });
            }

            var isValidDate = function(value, format) {
                format = format || false;
                // lets parse the date to the best of our knowledge
                if (format) {
                    value = parseDate(value);
                }

                var timestamp = Date.parse(value);

                return isNaN(timestamp) == false;
            }

            var parseDate = function(value) {
                var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
                if (m)
                    value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

                return value;
            }

            bindDatePicker();






        });

    */




    let scrollDiv = document.querySelector(".megamenu-scroll");
    SimpleScrollbar.initEl(scrollDiv);

</script>
@yield("footer_script")
</body>

</html>
