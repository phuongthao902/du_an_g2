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

    <title>Kimi Themes</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('public/frontend/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/kimi.css') }}" rel="stylesheet">
    <link href="{{ asset('public/frontend/css/font-awesome.min.css') }}" rel="stylesheet">

    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/owl_carousel/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ 'public/frontend/css/owl_carousel/owl.theme.default.css' }}">

    <!--tipue search-->
    <link rel="stylesheet" href="{{ asset('public/frontend/css/tipuesearch/tipuesearch.css') }}">
    <link rel="stylesheet" href="{{ asset('public/frontend/css/prism/prism.css') }}">

</head>

<body>

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid hidden-xs">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <button class="pull-left search-button" id="buttonOpenSearchbar"><i class="fa fa-search"
                            aria-hidden="true"></i></button>
                    <button class="pull-left search-button hide" id="buttonCloseSearchbar"><i class="fa fa-times"
                            aria-hidden="true"></i></button>

                    <div id="searchbar" class="hide">
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
                                src="{{ 'public/frontend/images/logo.png ' }}" width="100"></a></p>
                </div>
                <div class="col-md-4 less-padding-right">
                    <a href="registerMerchant.html" class="btn pull-right button-green-top-nav">Be Kimi Merchant</a>
                </div>
            </div>
        </div>

        <div class="container-fluid bg-white">
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
                            src="{{ 'public/frontend/images/logo.png ' }}" width="90"></a></p>
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
                    <li class="active"><a href="{{ URL::to('/trang-chu') }}">Shop</a></li>
                    <li><a href="articles.html">Articles</a></li>
                    <li><a href="merchantGuide.html">Chef Guide</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Location <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="chefDirectory.html">Jakarta Barat</a></li>
                            <li><a href="chefDirectory.html">Jakarta Selatan</a></li>
                            <li><a href="chefDirectory.html">Jakarta Pusat</a></li>
                            <li><a href="chefDirectory.html">Jakarta Utara</a></li>
                            <li><a href="chefDirectory.html">Jakarta Timur</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="chefDirectory.html">Depok</a></li>
                            <li><a href="chefDirectory.html">Tangerang</a></li>
                        </ul>
                    </li>
                    <li><a href="questions.html">FAQs</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="chefDirectory.html">Chef Directory</a></li>
                    <li><a href="login.html">Login / Register</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                            aria-haspopup="true" aria-expanded="false">Cart (0)</a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="cart-flyout">
                                    <h4 class="text-oswald text-center">Recently Added Product(s)</h4>
                                    <div class="row">
                                        <div class="col-xs-12 text-center">
                                            <img src="{{ 'public/frontend/images/svg/IG_8.svg' }}" width="50">
                                            <div class="maya-tiny-padding"></div>
                                            <p class="text-roboto-light">Your Basket is Empty</p>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    <div class="container-fluid kimi-container less-padding">
        <div class="homepage-slider owl-carousel owl-theme">
            <div class="item">
                <div class="scrim"></div>
                <h2 class="heading-large">Good Food is All the Sweeter When Shared with Good Friends</h2>
                <p>By : Kimi Editorial</p>
                <div class="row-buttons">
                    <a href="channelDetail.html" class="btn button-outline text-white">Visit Store</a>
                    <a href="articleDetails.html" class="btn button-outline text-white">See Article</a>
                    <a href="#" class="btn button-outline text-white">Collect</a>
                </div>
                <img src="{{ 'public/frontend/images/slider1.jpg ' }}" width="100%">
            </div>
            <div class="item">
                <div class="scrim"></div>
                <h2 class="heading-large">Refresh Your Day, Refresh Your Mood, Refresh with this Delicious Meal</h2>
                <p>By : Kimi Editorial</p>
                <div class="row-buttons">
                    <a href="channelDetail.html" class="btn button-outline text-white">Visit Store</a>
                    <a href="articleDetails.html.html" class="btn button-outline text-white">See Article</a>
                    <a href="#" class="btn button-outline text-white">Collect</a>
                </div>
                <img src="{{ 'public/frontend/images/slider2.jpg ' }}" width="100%">
            </div>
            <div class="item">
                <div class="scrim"></div>
                <h2 class="heading-large">Refresh Your Day, Refresh Your Mood, Refresh with this Delicious Meal</h2>
                <p>By : Kimi Editorial</p>
                <div class="row-buttons">
                    <a href="channelDetail.html" class="btn button-outline text-white">Visit Store</a>
                    <a href="articleDetails.html" class="btn button-outline text-white">See Article</a>
                    <a href="#" class="btn button-outline text-white">Collect</a>
                </div>
                <img src="{{ 'public/frontend/images/slider3.jpg ' }}" width="100%">
            </div>
        </div>
    </div>

    <div class="container-fluid less-padding">
        {{-- <h2 class="default-userProductList-InfoBar-title text-center"><i class="fa fa-heart-o"
                aria-hidden="true"></i> Editor's Pick</h2> --}}
        <div class="small-slider owl-carousel owl-theme">
            @foreach ($category as $key => $category1)
            <a href="products.html" class="item">
                {{-- @php
                    $count = 0;
                @endphp --}}

                    {{-- @if ($count < 3) --}}

                        <div class="scrim"></div>
                        {{-- <span class="small-text-overlay">5 Products</span> --}}
                        <p>{{ $category1->category_name }}</p>
                        <img src="{{ 'public/frontend/images/tag_nasi.jpg ' }}">
                        {{-- @php
                            $count++;
                        @endphp
                    @else
                        @break
                    @endif --}}

            </a>
            @endforeach
        </div>

    </div>

<div class="clearfix maya-tiny-padding"></div>
<div class="container">
    <div class="">
        <div class="clearfix"></div>
        @yield('content')
    </div>

    <div class="row">
        <div class="product-detail-tag-container col-md-12 text-center">
            <button class="btn outline-white-button text-center">Load More</button>
        </div>
    </div>

    <div class="row">
        <div class="col-md-2 col-md-offset-1">
            <p class="text-center">
                <img src="https://s3-ap-southeast-1.amazonaws.com/kimistatic/images/svg/pilih_menu.svg"
                    width="120" />
            <h5 class="text-roboto text-center">Pilih Menu yang Anda Inginkan</h5>
            </p>
        </div>
        <div class="col-md-2">
            <p class="text-center">
                <img src="https://s3-ap-southeast-1.amazonaws.com/kimistatic/images/svg/atur_jadwal.svg"
                    width="120" />
            <h5 class="text-roboto text-center">Atur Jadwal dan Alamat Pengantaran</h5>
            </p>
        </div>
        <div class="col-md-2">
            <p class="text-center">
                <img src="https://s3-ap-southeast-1.amazonaws.com/kimistatic/images/svg/approval.svg"
                    width="120" />
            <h5 class="text-roboto text-center">Dapatkan Approval dari Chef</h5>
            </p>
        </div>
        <div class="col-md-2">
            <p class="text-center">
                <img src="https://s3-ap-southeast-1.amazonaws.com/kimistatic/images/svg/pay.svg" width="120" />
            <h5 class="text-roboto text-center">Lakukan Pembayaran</h5>
            </p>
        </div>
        <div class="col-md-2">
            <p class="text-center">
                <img src="https://s3-ap-southeast-1.amazonaws.com/kimistatic/images/svg/nikmati.svg"
                    width="120" />
            <h5 class="text-roboto text-center">Nikmati Order Anda Sesuai Jalan</h5>
            </p>
        </div>
    </div>

</div><!-- /.container -->

<div class="clearfix maya-tiny-padding"></div>
<div class="container mobile-full-width-slider">
    <h2 class="default-userProductList-InfoBar-title text-center"><i class="fa fa-heart-o"
            aria-hidden="true"></i> Featured Merchant</h2>
    <div class="featured-merchant-slider owl-carousel owl-theme">
        <div class="item">
            <!--<div class="scrim"></div>-->
            <!--<p>Sucicakes</p>-->
            <img src="{{ 'public/frontend/images/sucicakes_logo.png' }}" class="img-rounded" width="100%">
        </div>

        <div class="item">
            <!--<div class="scrim"></div>-->
            <!--<p>Nasi Bakar 58</p>-->
            <img src="{{ 'public/frontend/images/nasi_bakar_logo.jpg' }}" class="img-rounded" width="100%">
        </div>

        <div class="item">
            <!--<div class="scrim"></div>-->
            <!--<p>LL Ball</p>-->
            <img src="{{ 'public/frontend/images/llball_logo.JPG ' }}" class="img-rounded" width="100%">
        </div>

        <div class="item">
            <!--<div class="scrim"></div>-->
            <!--<p>LL Ball</p>-->
            <img src="{{ 'public/frontend/images/deliciozo_logo.jpg ' }}" class="img-rounded" width="100%">
        </div>

        <div class="item">
            <!--<div class="scrim"></div>-->
            <!--<p>LL Ball</p>-->
            <img src="{{ 'public/frontend/images/bakmi_48_logo.jpg' }}" class="img-rounded" width="100%">
        </div>

        <div class="item">
            <!--<div class="scrim"></div>-->
            <!--<p>LL Ball</p>-->
            <img src="{{ 'public/frontend/images/llball_logo.JPG' }}" class="img-rounded" width="100%">
        </div>

        <div class="item">
            <!--<div class="scrim"></div>-->
            <!--<p>LL Ball</p>-->
            <img src="{{ 'public/frontend/images/fans_logo.png' }}" class="img-rounded" width="100%">
        </div>

    </div>
</div>
<div class="clearfix maya-small-padding"></div>




<!--include footer-->
<div class="include-footer"></div>


<script src="{{ 'public/frontend/js/jquery.min.js' }}"></script>


<!-- owl carousel -->
<script src="{{ 'public/frontend/js/owl_carousel/owl.carousel.js' }}"></script>


<!--boostrap js-->
<script>
    window.jQuery || document.write('<script src="{{ asset('public/frontend/js/vendor/jquery.min.js') }}">
</script>')</script>
<script src="{{ asset('public/frontend/js/bootstrap.min.js') }}"></script>


<!--tipuesearch-->
<script src="{{ asset('public/frontend/js/tipusearch/tipuesearch_content.js') }}"></script>
<script src="{{ asset('public/frontend/js/tipusearch/tipuesearch_set.js') }}"></script>
<script src="{{ asset('public/frontend/js/tipusearch/tipuesearch.js') }}"></script>
<script src="{{ asset('public/frontend/js/prism/prism.js') }}"></script>


<!--kimi basic js-->
<script src="{{ asset('public/frontend/js/kimi.js') }}"></script>


</body>

</html>