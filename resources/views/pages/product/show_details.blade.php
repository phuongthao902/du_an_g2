


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kimi is a curated foods and beverages artisans.">
    <meta name="author" content="Philip Herlambang">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">


    <meta name="twitter:card" content="summary">
    <meta name="title" content="Back to Kimi">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="en-id">


    <!-- open graph metadata facebook, slack, whatsapp line -->
    <meta property="fb:app_id" content="150112802189143" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:title" content="Back to Kimi" />
    <meta property='og:site_name' content='Kimi | Curated Foods and Beverages' />
    <meta property="og:url" content="http://kimistatic.s3-website-ap-southeast-1.amazonaws.com/" />
    <meta property="og:description" content="Kimi is a curated foods and beverages artisans." />
    <meta property='og:image'
        content="https://s3-ap-southeast-1.amazonaws.com/kimistatic/images/apple-touch-icon.png" />


    <!-- open graph metadata twitter -->
    <meta name="twitter:title" content="Back to Kimi">
    <meta name="twitter:url" content="http://www.backtokimi.com">
    <meta name="twitter:description" content="Kimi is a curated foods and beverages artisans.">
    <meta name="twitter:image" content="https://s3-ap-southeast-1.amazonaws.com/kimistatic/images/apple-touch-icon.png">
    <meta name="twitter:site" content="@backtokimi">


    <link rel="icon" href="https://s3-ap-southeast-1.amazonaws.com/kimistatic/images/favicon.ico">
    <link rel="apple-touch-icon" href="https://s3-ap-southeast-1.amazonaws.com/kimistatic/images/apple-touch-icon.png">

    <title>Back to Kimi</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/kimi.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top">

        <div class="container-fluid hidden-xs">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <button class="pull-left search-button" id="buttonOpenSearchbar"><i class="fa fa-search"
                            aria-hidden="true"></i></button>
                    <button class="pull-left search-button" id="buttonCloseSearchbar" style="display: none;"><i
                            class="fa fa-times" aria-hidden="true"></i></button>

                    <div id="searchbar" style="display: none;">
                        <div>
                            <div class="top-nav-searchbar">
                                <div class="input-group">
                                    <form action="search.html">
                                        <input class="form-control" type="text" name="q"
                                            id="tipue_search_input" placeholder="Search for" autofocus="autofocus">
                                    </form>
                                </div><!-- /input-group -->
                            </div>
                        </div>
                    </div>
                    <p class="help-text hidden-sm hidden-md" id="helpText">Find any troubles? Drop us an email at <a
                            href="mailto:grow@backtokimi.com" class="text-secondary">grow@backtokimi.com</a> </p>
                </div>
                <div class="col-md-4 col-sm-4">
                    <p class="text-center logo-container"><a href="index.html"><img
                                src="{{ asset('public/frontend/images/logo.png') }}" width="100"></a></p>
                </div>
                <div class="col-md-4 less-padding-right">
                    <a href="registerMerchant.html" class="btn pull-right button-green-top-nav">Be Kimi Merchant</a>
                </div>
            </div>
        </div>

        <div class="container-fluid" style="background: white;">
            <div class="navbar-header pull-left">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar icon-short"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar icon-medium"></span>
                </button>
            </div>
            <div class="visible-xs logo-center">
                <p class="text-center logo-container visible-xs"><a href="index.html"><img
                            src="{{ asset('public/frontend/images/logo.png') }}" width="90"></a></p>
            </div>
            <div class="visible-xs pull-right">
                <button class="pull-left search-button-mobile" id="buttonOpenSearchbarMobile"><i class="fa fa-search"
                        aria-hidden="true"></i></button>
            </div>
            <div class="clearfix"></div>

            <div class="fly-searchbar" style="display: none;">
                <div class="top-nav-searchbar searchbar-mobile">
                    <div class="input-group">
                        <form action="search.html">
                            <input class="form-control" type="text" name="q" id="tipue_search_input"
                                placeholder="Search for" autofocus="autofocus">
                        </form>
                        <button class="pull-right" id="buttonCloseSearchbarMobile"><i class="fa fa-times"
                                aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>


            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Shop</a></li>
                    <li><a href="articles.html">Articles</a></li>
                    <li><a href="merchantGuide.html">Chef Guide</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Location <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Jakarta Barat</a></li>
                            <li><a href="#">Jakarta Selatan</a></li>
                            <li><a href="#">Jakarta Pusat</a></li>
                            <li><a href="#">Jakarta Utara</a></li>
                            <li><a href="#">Jakarta Timur</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Depok</a></li>
                            <li><a href="#">Tangerang</a></li>
                        </ul>
                    </li>
                    <li><a href="questions.html">FAQs</a></li>
                    <li><a href="about.html">About Kimi</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="chefDirectory.html">Chef Directory</a></li>
                    <li><a href="login.html">Login / Register</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Cart (2)</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="cart-flyout">
                                    <h4 class="text-oswald">Recently Added Product(s)</h4>
                                    <div class="row">
                                        <div class="col-sm-2 col-xs-3 less-padding">
                                            <img src="images/brownies.jpg" width="100%">
                                        </div>
                                        <div class="col-sm-8 col-xs-9">
                                            <span class="text-gray-1">Brownies Chocolate</span>
                                            <p class="text-gray-2">1 x 50.000</p>
                                        </div>
                                        <!--<div class="col-sm-2">-->
                                        <!--<button><i class="fa fa-times-circle" aria-hidden="true"></i></button>-->
                                        <!--</div>-->
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-2 col-xs-3 less-padding">
                                            <img src="images/lapisSurabaya.jpg" width="100%">
                                        </div>
                                        <div class="col-sm-8 col-xs-9">
                                            <span class="text-gray-1">Lapis Surabaya</span>
                                            <p class="text-gray-2">1 x 175.000</p>
                                        </div>

                                    </div>
                                    <hr>

                                    <div class="row">
                                        <div class="col-sm-6 col-xs-6 less-padding">
                                            <h4><small>Total</small><br><span>IDR 225.000</span></h4>
                                        </div>
                                        <div class="col-sm-6 col-xs-6 less-padding">
                                            <a href="checkout2.html"
                                                class="button-green-top-nav btn pull-right btn-block text-oswald text-uppercase">View
                                                Cart</a>
                                        </div>
                                    </div>

                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>


    <div class="container kimi-container">
        <ol class="breadcrumb hidden-xs">
            <li><a href="{{ URL::to('/trang-chu') }}">Home</a></li>
            <li><a href="channelDetail.html">Sucicakes</a></li>
            <li><a href="#">Sosis Solo Sucicakes</a></li>
        </ol>
    </div>


    <div class="container" style="background: white; padding-bottom: 50px;">
        <div class="col-md-6">
            <!--carousel-->
            <div id="main_area">
                <!-- Slider -->
                <div class="row" style="margin-top: 25px;">

                    <div class="col-sm-9 less-padding">
                        <div class="col-xs-12 less-padding" id="slider">
                            <!-- Top part of the slider -->
                            <div class="row">
                                <div class="col-sm-12" id="carousel-bounding-box">
                                    <div class="carousel slide" id="myCarousel">
                                        <!-- Carousel items -->


                                        <div class="carousel-inner">
                                            @foreach ($details_product as $key => $value)
                                                <div class="active item" data-slide-number="0">
                                                    <img
                                                        src="{{ URL::to('/public/uploads/product/' . $value->product_image) }}" />
                                                </div>

                                                <div class="item" data-slide-number="1">
                                                    <img
                                                        src="{{ URL::to('/public/uploads/product/' . $value->product_image) }}" />
                                                </div>
                                            @endforeach
                                        </div>

                                        <!-- Carousel nav -->
                                        <a class="left carousel-control" href="#myCarousel" role="button"
                                            data-slide="prev">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                        <a class="right carousel-control" href="#myCarousel" role="button"
                                            data-slide="next">
                                            <span class="glyphicon glyphicon-chevron-right"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Slider-->
                    @foreach ($details_product as $key => $value)
                    <div class="col-sm-3" id="slider-thumbs">
                        <a class="thumbnail" id="carousel-selector-0">
                            <img src="{{ URL::to('/public/uploads/product/' . $value->product_image) }}" />
                            {{-- <img src="{{ asset('public/frontend/images/sosisSolo_carousel.jpg') }}"> --}}
                        </a>

                        <a class="thumbnail" id="carousel-selector-1">
                            <img src="{{ URL::to('/public/uploads/product/' . $value->product_image) }}" />
                            {{-- <img src="{{ asset('public/frontend/images/sosisSolo_carousel_2.jpg') }}"> --}}
                        </a>

                    </div>
@endforeach
                </div>

            </div>
            <!--carousel ends-->
        </div>

        <div class="col-md-6" style="position: relative;">

            <div class="bookmarked">
                <img src="{{ asset('public/frontend/images/bookmarked.png') }}" width="86">
            </div>
                @foreach ($details_product as $key => $value)
                    <h1>{{ $value->product_name }}</h1>

            {{-- <h1>Tradisional</h1> --}}
            <div class="row">
                <div class="col-md-10">
                    <a href="channelDetail.html" class="text-secondary">
                        <h4>{{$value->brand_name}}</h4>
                    </a>
                    <h4>{{$value->name}}</h4>
                </div>
                <div class="col-md-2"><img src="{{ asset('public/frontend/images/halal.png') }}" width="60">
                </div>
            </div>


            <p class="product-description">{{$value->product_desc}}</p>
            <p class="product-description">Min-order: 10 pcs</p>
            @endforeach
            <div class="product-detail-tag-container">
                <button class="btn outline-white-button">Healty</button>
                <button class="btn outline-white-button">Tradisional</button>
                <button class="btn outline-white-button">Cemilan Ringan</button>
                <button class="btn outline-white-button">Side Dish</button>
            </div>

            <div class="clearfix"></div>
            <div class="row">
                @foreach ($details_product as $key => $value)
                <div class="col-md-6">
                    <h3>{{number_format($value->unit_price).'VNĐ'}}</h3>
                </div>
                <div class="col-md-6" style="padding-top: 18px;">
                    <p class="pull-left" style="line-height: 35px; margin-right: 20px;">Quantity</p>
                    <form class="form-inline product-detail-form">
                        <div class="form-group pull-left"><button class="btn btn-default">-</button></div>
                        <div class="form-group pull-left">
                            <input type="number" class="form-control number-input" id="" value="{{$value->product_id}}" placeholder="10"
                                style="width: 60px; border: none; font-weight: bold; font-size: 20px;">

                        </div>
                        <div class="form-group"><button class="btn btn-default">+</button></div>
                    </form>
                </div>
                @endforeach
            </div>

            <div class="product-detail-action-button-container">
                <button onclick="location.href='{{ URL::to('/save-cart') }}'" class="btn button-add-to-bag"
                    style="margin-right: 10px;">Add to Bag</button>
                <button class="btn btn-default button-black button-learn-more" id="bookmarkButton">Set
                    Favourite</button>
                <button class="btn btn-default button-black button-learn-more" id="deleteBookmarkButton"
                    style="display: none;">Delete Favourite</button>
            </div>


        </div>

    </div><!-- /.container -->


    <div class="container" style="background: white; padding-bottom: 50px;">
        <h2 class="text-center">Sosis Solo</h2>
        <hr class="hr-short">
        @foreach ($details_product as $key => $value)
        <div class="col-md-8 col-md-offset-2">

            <p class="helvetica-18 text-center">Sosis Solo has been known as the specialty snack from Solo, is made of
                chopped beef combined with spices wrapped in a thin egg crepes. It’s similar with rissoles but has
                different kind of filling. Some people said that sosis solo get influenced by sausage roll (Dutch food).
            </p>
            <img src="{{ URL::to('/public/uploads/product/' . $value->product_image) }}" width="100%"
                class="maya-small-padding" style="margin: 30px 0;">

            <p class="helvetica-18 text-center">The story comes when the colonial came to Indonesia, they ate sausage
                roll which has minced beef inside wrap with pastry. Because it’s difficult for local people to get
                sausage roll and of course it’s expensive as well then they come with their creativity try to make food
                that is similar with sausage roll. They change pastry with the mixture of flour, egg and water. They
                still used minced beef for the filling but in a simple way and using small amount to reduce the cost.
                And the most important is the taste be adapted to our local taste. And since that time sosis solo
                becoming popular. You could easily find it in the market.</p>
        </div>
@endforeach
    </div>


    <div class="container" style="background: white; padding-bottom: 50px;">
        <h2 class="text-center">Complete your Dish</h2>
        <hr class="hr-short">
         <div class="row">
             {{-- @foreach ($relate as $key => $value1) --}}
             @foreach ($details_product as $key => $value)
            <div class="col-sm-6 col-md-4">
                <a href="productDetail.html" class="thumbnail_item thumbnail less-padding less-margin">
                    <img src="{{ URL::to('/public/uploads/product/' . $value->product_image) }}" />
                    {{-- <img src="public/uploads/product/{{ $product1->product_image }}" alt="risotto lemon"> --}}
                </a>
                <div class="caption box">
                    <h3>{{$value->product_name}}</h3>
                    <div class="row">
                        <div class="col-sm-8 col-xs-6">
                            <p class="default-userProductList-CardList-price">{{number_format($value->unit_price).' '.'VNĐ'}}</p>
                            <span class="min-order">5 pcs min order</span>
                        </div>

                        <div class="col-sm-4 col-xs-6">
                            <button onclick="location.href='{{ URL::to('/save-cart') }}'"
                                class="btn default-userProductList-CardList-button pull-right" role="button">Add to
                                Cart</button>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-sm-6 col-md-4" data-behavior="sample_code">
                <a href="productDetail.html" class="thumbnail_item thumbnail less-padding less-margin">
                    <!--<img src="https://res.cloudinary.com/kimithemes/image/upload/c_thumb,g_center,h_600,q_auto:best,w_600/v1506066842/risotto_ri5sle.jpg" alt="risotto lemon">-->
                    <img src="{{ URL::to('/public/uploads/product/' . $value->product_image) }}" />
                </a>
                <div class="caption box">
                    <h3>{{$value->product_name}}</h3>
                    <div class="row">
                        <div class="col-sm-8 col-xs-6">
                            <p class="default-userProductList-CardList-price">{{number_format($value->unit_price).' '.'VNĐ'}}</p>
                            <span class="min-order">10 pcs min order</span>
                        </div>

                        <div class="col-sm-4 col-xs-6">
                            <button onclick="location.href='{{ URL::to('/save-cart') }}'"
                                class="btn default-userProductList-CardList-button pull-right" role="button">Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <a href="productDetail.html" class="thumbnail_item thumbnail less-padding less-margin">
                    <!--<img src="http://res.cloudinary.com/kimithemes/image/upload/c_thumb,h_480,w_480/v1506069881/IMG_20161004_075006_v8yiq2.jpg" alt="sosis solo">-->
                    <img src="{{ URL::to('/public/uploads/product/' . $value->product_image) }}" />
                </a>
                <div class="caption box">
                    <h3>{{$value->product_name}}</h3>
                    <div class="row">
                        <div class="col-sm-8 col-xs-6">
                            <p class="default-userProductList-CardList-price">{{number_format($value->unit_price).' '.'VNĐ'}}</p>
                            <span class="min-order">10 pcs min order</span>
                        </div>

                        <div class="col-sm-4 col-xs-6">
                            <button onclick="location.href='{{ URL::to('/save-cart') }}'"
                                class="btn default-userProductList-CardList-button pull-right" role="button">Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>

    </div>

    <!--include footer-->
    <div class="include-footer"></div>


    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('public/frontend/js/jquery.min.js') }}"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="{{ asset('public/frontend//js/bootstrap.min.js') }}"></script>

    <script>
        jQuery(document).ready(function($) {

            // bookmark
            $('.bookmarked').hide();


            $('#bookmarkButton').on('click', function() {
                $('.bookmarked').fadeIn(200);
                $('#bookmarkButton').hide();
                $('#deleteBookmarkButton').show();
            });



            // Delete bookmark

            $('#deleteBookmarkButton').on('click', function() {
                $('.bookmarked').fadeOut(200);
                $('#bookmarkButton').show();
                $('#deleteBookmarkButton').hide();
            });


            $('#myCarousel').carousel({
                interval: 5000
            });

            //Handles the carousel thumbnails
            $('[id^=carousel-selector-]').click(function() {
                var id_selector = $(this).attr("id");
                try {
                    var id = /-(\d+)$/.exec(id_selector)[1];
                    console.log(id_selector, id);
                    jQuery('#myCarousel').carousel(parseInt(id));
                } catch (e) {
                    console.log('Regex failed!', e);
                }
            });
            // When the carousel slides, auto update the text
            $('#myCarousel').on('slid.bs.carousel', function(e) {
                var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-' + id).html());
            });
        });
    </script>

    <!--kimi basic js-->
    <script src="{{ asset('public/frontend/js/kimi.js') }}"></script>

</body>

</html>
