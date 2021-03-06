<!DOCTYPE html>
<html class="full" lang="en">
<!-- Make sure the <html> tag is set to the .full CSS class. Change the background image in the full.css file. -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>trakker - A minimal tv show tracker.</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap-social.css">
    <link href='http://fonts.googleapis.com/css?family=Quicksand:400,300' rel='stylesheet' type='text/css'>
    <link href='{{ URL::asset("https://fonts.googleapis.com/css?family=Comfortaa:400,300,700") }}' rel='stylesheet' type='text/css'>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/full.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>



    <!-- Put your page content here! -->
    <!-- <div class="gradientline"></div> -->
    <div class="container">
        <div class="row">
            <div id="info">
                <div class="logowrap"><a class="logo navbar-brand" href="/timeline"><img alt="logo" src="img/logo.png">trakker</a></div><br>
                <p class="slogan">A minimal tv show tracker.</p>
                <p class="signintext">Sign in to get started!</p>
                <div id="login">
                    <a href="{{ url('facebooklogin') }}" class="btn btn-block btn-facebook"><i class="fa fa-facebook"></i> Sign in with Facebook</a>
                    <a href="{{ url('twitterlogin') }}" class="btn btn-block btn-twitter"><i class="fa fa-twitter"></i> Sign in with Twitter</a>
                </div>
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
