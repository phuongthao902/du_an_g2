<!DOCTYPE html>

<head>
    <title>Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords"
        content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- //bootstrap-css -->
    <!-- Custom CSS -->
    <link href="{{ asset('public/backend/css/style.css') }}" rel='stylesheet' type='text/css' />
    <link href="{{ asset('public/backend/css/style-responsive.css') }}" rel="stylesheet" />
    <!-- font CSS -->
    <link
        href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>
    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{ asset('public/backend/css/font.css') }}" type="text/css" />
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet" />
    <!-- //font-awesome icons -->
    <script src="js/jquery2.0.3.min.js"></script>
</head>

<body>
    <div class="log-w3">
        <div class="w3layouts-main">
            <h2>Add User</h2>
            <?php
            $message = Session::get('message');
            if ($message) {
                echo '<span class="text-alert">' . $message . '</span>';
                Session::put('message', null);
            }
            ?>
            {{-- <form method="post" action="{{ route('registration') }}"> --}}
            <form action="{{ URL::to('/all-users') }}" method="POST">
                @csrf
                <label style="margin-left: 45px;" for="name">{{ __('Name') }}</label><br><br>
                <input style="width: 350px; height: 30px; margin-left: 45px;" id="name" type="text"
                    name="name" value="{{ old('name') }}" required autofocus><br><br>

                <label style="margin-left: 45px;" for="email">{{ __('E-Mail Address') }}</label><br><br>
                <input style="width: 350px; height: 30px; margin-left: 45px;" id="email" type="email"
                    name="email" value="{{ old('email') }}" required><br><br>

                <label style="margin-left: 45px;" for="email">{{ __('Address') }}</label><br><br>
                <input style="width: 350px; height: 30px; margin-left: 45px;" id="address" type="address"
                        name="address" value="" required><br><br>

                <label style="margin-left: 45px;" for="password">{{ __('Password') }}</label><br><br>
                <input style="width: 350px; height: 30px; margin-left: 45px;" id="password" type="password"
                    name="password" required autocomplete="new-password"><br><br>

                <label style="margin-left: 45px;" for="password-confirm">{{ __('Confirm Password') }}</label><br><br>
                <input style="width: 350px; height: 30px; margin-left: 45px;" id="password-confirm" type="password"
                    name="password_confirmation" required autocomplete="new-password"><br><br>

                <select style="margin-left: 45px; width:355px; height:30px" name="decentralization" id="decentralization">{{_('Decentralization')}}
                    <option value="">Admin</option>
                    <option value="">User</option>
                </select><br><br>
                <button style="margin-left:170px; height:35px; width:105px; background-color:rgb(213, 243, 94)"
                    type="submit">Add</button>
            </form>

        </div>
    </div>
    <script src="{{ asset('public/backend/js/bootstrap.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.dcjqaccordion.2.7.js') }}"></script>
    <script src="{{ asset('public/backend/js/scripts.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('public/backend/js/jquery.nicescroll.js') }}"></script>
    <!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
    <script src="{{ asset('public/backend/js/jquery.scrollTo.js') }}"></script>
</body>

</html>
