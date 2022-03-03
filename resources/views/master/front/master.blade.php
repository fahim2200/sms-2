<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.css">
    <link rel="stylesheet" href="{{asset('/')}}css/all.css">
    <link rel="stylesheet" href="{{asset('/')}}css/style.css">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light bg-light shadow sticky-top ">
    <div class="container">
        <a href="" class="navbar-brand text-dark">Logo</a>
        <ul class="navbar-nav">
            <li><a href="{{route('home')}}" class="nav-link text-dark">Home</a></li>
            <li><a href="" class="nav-link text-dark">All Course</a></li>
            <li><a href="{{route('user-login')}}" class="nav-link text-dark">Login</a></li>
            <li><a href="{{route('user-register')}}" class="nav-link text-dark">Registration</a></li>
        </ul>
    </div>
</nav>
@yield('body')
<footer class="pt-5 pb-4 bg-dark">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="card card-body rounded-0">
                    <h3>About Institute</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio, doloribus error facilis fugit, illum ipsa magni maiores, molestias necessitatibus provident quae totam ut veniam. Aliquam corporis exercitationem placeat possimus voluptas. </p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card card-body rounded-0">
                    <h3>Popular Link</h3>
                    <hr/>
                    <ul>
                        <li><a href="">Popular Course One</a></li>
                        <li><a href="">Popular Course Two</a></li>
                        <li><a href="">Popular Course Three</a></li>
                        <li><a href="">Popular Course Four</a></li>
                        <li><a href="">Popular Course Five</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-4 bg-light">
                <h3>Follow Us</h3>
                <hr/>
                <ul class="nav">
                    <li><a href="" class="nav-link"><i class="fab fa-2x fa-facebook-square"></i></a></li>
                    <li><a href="" class="nav-link"><i class="fab fa-2x fa-twitter-square"></i></a></li>
                    <li><a href="" class="nav-link"><i class="fab fa-2x fa-instagram-square"></i></a></li>
                    <li><a href=""class="nav-link"><i class="fab fa-2x fa-youtube-square"></i></a></li>
                    <li><a href="" class="nav-link"><i class="fab fa-2x fa-google-plus-square-square"></i></a></li>
                    <li><a href="" class="nav-link"><i class="fab fa-2x fa-facebook-square"></i></a></li>
                    <li><a href="" class="nav-link"><i class="fab fa-2x fa-twitter-square"></i></a></li>
                    <li><a href="" class="nav-link"><i class="fab fa-2x fa-instagram-square"></i></a></li>
                    <li><a href="" class="nav-link"><i class="fab fa-2x fa-youtube-square"></i></a></li>
                    <li><a href="" class="nav-link"><i class="fab fa-2x fa-google-plus-square-square"></i></a></li>
                </ul>
            </div>
        </div>
        <hr class="bg-white mt-5"/>
        <div class="row">
            <div class="col-md-12 ">
                <p class="text-white text-center mb-0">&copy; Copyright@2022, All right reserved by BASIS SEIP PHPLFB-3</p>
            </div>
        </div>
    </div>
</footer>
<script src="{{asset('/')}}js/jquery-3.6.0.js"></script>
<script src="{{asset('/')}}js/bootstrap.js"></script>

</body>
</html>
