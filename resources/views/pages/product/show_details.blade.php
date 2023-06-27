{{-- @extends('layout')
@section('content')
@foreach ($details_product as $key => $value)

<div class="product-details"><!--product-details-->
    <div class="col-sm-5">
        <div class="view-product">

            <h3>ZOOM</h3>
        </div>
        <br>
        <div id="similar-product" class="carousel slide" data-ride="carousel">

              <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                      <a href=""><img src="{{URL::to('/public/uploads/product/'.$value->product_image)}}" alt=""></a>
                    </div>
                </div>

              <!-- Controls -->
              <a class="left item-control" href="#similar-product" data-slide="prev">
                <i class="fa fa-angle-left"></i>
              </a>
              <a class="right item-control" href="#similar-product" data-slide="next">
                <i class="fa fa-angle-right"></i>
              </a>
        </div>

    </div>
    <div class="col-sm-7">
        <div class="product-information"><!--/product-information-->
            <img src="images/product-details/new.jpg" class="newarrival" alt="" />
            <h2>{{$value->product_name}}</h2>
            <p>Product name: {{$value->product_name}}</p>
            <p>Product ID: {{$value->product_id}}</p>

            <img src="images/product-details/rating.png" alt="" />

            <form action="{{URL::to('/save-cart')}}" method="post">
                {{ csrf_field() }}

            <span>
                <span>{{number_format($value->product_price).'VNĐ'}}</span>

                <label>Quantity:</label>
                <input name="qty" type="number" min="1" value="1" />
                <input name="productid_hidden" type="hidden" value="{{$value->product_id}}" />
                <button type="submit" class="btn btn-fefault cart">
                    <i class="fa fa-shopping-cart"></i>
                    Add to cart
                </button>
            </span>
        </form>
            <p><b>Status: </b> Stocking</p>
            <p><b>Condition: </b> New</p>
            <p><b>Brand: </b>{{$value->brand_name}}</p>
            <p><b>Category: </b>{{$value->category_name}}</p>
            <a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
        </div><!--/product-information-->
    </div>
</div><!--/product-details-->


<div class="category-tab shop-details-tab"><!--category-tab-->
    <div class="col-sm-12">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#details" data-toggle="tab">Description of songs</a></li>
            <li><a href="#companyprofile" data-toggle="tab">Product details</a></li>
            <li><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>
        </ul>
    </div>
    <div class="tab-content">
        <div class="tab-pane fade  active in" id="details" >

            <p>{!!$value->product_desc!!}</p>

        </div>

        <div class="tab-pane fade" id="companyprofile" >

            {{-- <p>{!!$value->product_lyrics!!}</p> --}}

{{-- </div>


 <div class="tab-pane fade" id="reviews">
    <div class="col-sm-12">
        <ul>
            <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
            <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>
            <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>
        </ul>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
            commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
            nulla pariatur.</p>
        <p><b>Write Your Review</b></p>

        <form action="#">
            <span>
                <input type="text" placeholder="Your Name" />
                <input type="email" placeholder="Email Address" />
            </span>
            <textarea name=""></textarea>
            <b>Rating: </b> <img src="images/product-details/rating.png" alt="" />
            <button type="button" class="btn btn-default pull-right">
                Submit
            </button>
        </form>
    </div>
</div>

</div> --}}
{{-- </div><!--/category-tab--> --}}
{{-- @endforeach --}}
{{-- <div class="recommended_items"><!--recommended_items-->
    <h2 class="title text-center">Recommended music products</h2>

    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item active">
                @foreach ($relate as $key => $lienquan)
                <div class="col-sm-4">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="public/uploads/product/{{ $product1->product_image }}" alt="risotto lemon">
                                <h2>{{number_format($lienquan->unit_price).' '.'VNĐ'}}</h2>
                                <p>{{$lienquan->product_name}}</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                            </div>

                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>
         <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
          </a>
          <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
          </a>
    </div> --}}
{{-- </div><!--/recommended_items--> --}}
{{-- @endsection --}}

@section('content')

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
                                src="{{ 'public/frontend/images/logo.png' }}" width="100"></a></p>
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
                    <div class="col-sm-3" id="slider-thumbs">
                        <a class="thumbnail" id="carousel-selector-0">
                            {{-- <img src="public/uploads/product/{{ $value->product_image }}" alt="risotto lemon"> --}}
                            <img src="{{ asset('public/frontend/images/sosisSolo_carousel.jpg') }}">
                        </a>

                        <a class="thumbnail" id="carousel-selector-1">
                            {{-- <img src="public/uploads/product/{{ $value->product_image }}" alt="risotto lemon"> --}}
                            <img src="{{ asset('public/frontend/images/sosisSolo_carousel_2.jpg') }}">
                        </a>

                    </div>

                </div>

            </div>
            <!--carousel ends-->
        </div>

        <div class="col-md-6" style="position: relative;">

            <div class="bookmarked">
                <img src="{{ asset('public/frontend/images/bookmarked.png') }}" width="86">
            </div>
            @section('content')
                @foreach ($details_product as $key => $value)
                    <h1>{{ $value->product_name }}</h1>
                @endforeach
            @endsection
            <h1>Tradisional</h1>
            <div class="row">
                <div class="col-md-10">
                    <a href="channelDetail.html" class="text-secondary">
                        <h4>By Sucicakes</h4>
                    </a>
                    <h4>Location: Kebon Jeruk, Jakarta Barat</h4>
                </div>
                <div class="col-md-2"><img src="{{ asset('public/frontend/images/halal.png') }}" width="60">
                </div>
            </div>


            <p class="product-description">Cemilan tradisional dari daerah Jawa, berisi irisan ayam berbumbu
                tradisional, dibalut dan digoreng dengan telur, sangat menggugah selera. Cocok untuk acara keluarga,
                meeting, dan moment lainnya. Bahan - bahan yang kami gunakan sangat terjaga kualitas dan kebersihannya.
            </p>
            <p class="product-description">Min-order: 10 pcs</p>

            <div class="product-detail-tag-container">
                <button class="btn outline-white-button">Healty</button>
                <button class="btn outline-white-button">Tradisional</button>
                <button class="btn outline-white-button">Cemilan Ringan</button>
                <button class="btn outline-white-button">Side Dish</button>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-6">
                    <h3>Rp 4.000</h3>
                </div>
                <div class="col-md-6" style="padding-top: 18px;">
                    <p class="pull-left" style="line-height: 35px; margin-right: 20px;">Quantity</p>
                    <form class="form-inline product-detail-form">
                        <div class="form-group pull-left"><button class="btn btn-default">-</button></div>
                        <div class="form-group pull-left">
                            <input type="number" class="form-control number-input" id="" placeholder="10"
                                style="width: 60px; border: none; font-weight: bold; font-size: 20px;">

                        </div>
                        <div class="form-group"><button class="btn btn-default">+</button></div>
                    </form>
                </div>
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

        <div class="col-md-8 col-md-offset-2">
            <p class="helvetica-18 text-center">Sosis Solo has been known as the specialty snack from Solo, is made of
                chopped beef combined with spices wrapped in a thin egg crepes. It’s similar with rissoles but has
                different kind of filling. Some people said that sosis solo get influenced by sausage roll (Dutch food).
            </p>
            <img src="{{ asset('public/frontend/images/sosisSolo_landscape.jpg') }}" width="100%"
                class="maya-small-padding" style="margin: 30px 0;">

            <p class="helvetica-18 text-center">The story comes when the colonial came to Indonesia, they ate sausage
                roll which has minced beef inside wrap with pastry. Because it’s difficult for local people to get
                sausage roll and of course it’s expensive as well then they come with their creativity try to make food
                that is similar with sausage roll. They change pastry with the mixture of flour, egg and water. They
                still used minced beef for the filling but in a simple way and using small amount to reduce the cost.
                And the most important is the taste be adapted to our local taste. And since that time sosis solo
                becoming popular. You could easily find it in the market.</p>
        </div>
    </div>


    <div class="container" style="background: white; padding-bottom: 50px;">
        <h2 class="text-center">Complete your Dish</h2>
        <hr class="hr-short">
        {{-- @foreach ($relate as $key => $lienquan) --}}
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <a href="productDetail.html" class="thumbnail_item thumbnail less-padding less-margin">
                    <img src="{{ asset('public/frontend/images/nasi_bakar_ayam_woku_2.jpg') }}" alt="sosis solo">
                    {{-- <img src="public/uploads/product/{{ $product1->product_image }}" alt="risotto lemon"> --}}
                </a>

                <div class="caption box">
                    {{-- <h3>{{$lienquan->product_name}}</h3> --}}
                    <h3>Linsion</h3>
                    <div class="row">
                        <div class="col-sm-8 col-xs-6">
                            <p class="default-userProductList-CardList-price">90$</p>
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
                    <img src="{{ asset('public/frontend/images/risotto_square.jpg') }}" alt="risotto lemon">
                </a>
                <div class="caption box">
                    <h3>Lemon Risotto</h3>
                    <div class="row">
                        <div class="col-sm-8 col-xs-6">
                            <p class="default-userProductList-CardList-price">Rp 45.000 / pcs</p>
                            <span class="min-order">10 pcs min order</span>
                        </div>

                        <div class="col-sm-4 col-xs-6">
                            <button onclick="location.href='shoppingCart.html'"
                                class="btn default-userProductList-CardList-button pull-right" role="button">Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-6 col-md-4">
                <a href="productDetail.html" class="thumbnail_item thumbnail less-padding less-margin">
                    <!--<img src="http://res.cloudinary.com/kimithemes/image/upload/c_thumb,h_480,w_480/v1506069881/IMG_20161004_075006_v8yiq2.jpg" alt="sosis solo">-->
                    <img src="{{ asset('public/frontend/images/sosisSolo.jpg') }}" alt="sosis solo">
                </a>
                <div class="caption box">
                    <h3>Sosis Solo Sucicakes</h3>
                    <div class="row">
                        <div class="col-sm-8 col-xs-6">
                            <p class="default-userProductList-CardList-price">Rp 4.500 / pcs</p>
                            <span class="min-order">10 pcs min order</span>
                        </div>

                        <div class="col-sm-4 col-xs-6">
                            <button onclick="location.href='shoppingCart.html'"
                                class="btn default-userProductList-CardList-button pull-right" role="button">Add to
                                Cart</button>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        {{-- @endforeach --}}
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
