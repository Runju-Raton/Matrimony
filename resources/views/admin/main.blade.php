<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <!-- Owl Carousel CSS -->

    <!-- Bootstrap css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-MBHBCyBZFfvjD6R4vG9X+KJeReuB+jT10iz5v2cq1yGS64XebZ1JbJ9HIXZP1ViF+aVhBPgMOqn8R+fX1puWaw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<style>
    body{
        min-height: 100vh;
        display: flex;
        flex-direction: column;
    }
    .sidebar {
        background-color: #f8f9fa; /* Background color of sidebar */
        box-shadow: 5px 0 5px -5px rgba(0, 0, 0, 0.5); /* Box shadow on the right side */
        min-height: 100vh;
        padding-top: 80px;
    }
    .body_content{
        margin-top: 120px;
    }
    .sidebar {
        background-color: #f8f9fa; /* Background color of sidebar */
    }
    .sidebar .nav-link {
        color: #000;
    }
    .sidebar .nav-link:hover {
        background-color: #e9ecef; /* Hover color */
        color: #000;
    }
    .content{
        flex: 1;
        align-items: center;
        /*margin: auto;*/
    }
    footer{
        height: 300px;
    }
    .pagination{
        text-align: center;
        justify-content: end;
    }
    .pagination a,
    .pagination span {
        font-size: 12px; /* Adjust the font size as needed */
    }
</style>
@yield('custom-style')

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="width: 100%;">
                <a class="navbar-brand" href="/dashboard">
                    <img width="40" border="0" alt="Bangladeshi Matrimonials" title="Bangladeshi Matrimonials" id="domain_title" src="https://imgs.bangladeshimatrimony.com/cbsimages/hp_new/bangladeshi_logo.svg">
                    <span class="logo-bangladeshi-title">
					Eternal <span class="logo-bangladeshi-title1">Match</span>  Site
				</span>
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        @auth
                            <a href="{{ route('logout') }}" class="btn btn-outline-danger mx-2 " type="submit">Logout <i class="fa fa-arrow-right" aria-hidden="true"></i> </a>
                        @endauth
                    </form>
                </div>
            </nav>

        </div>
    </div>
    <div class="row">
        <div class="col-md-2 sidebar">
            <!-- Sidebar content -->
            @include('admin.sidebar')
        </div>
        <div class="col-md-10 main-content">
            @yield('content')
        </div>
    </div>
</div>


<!-- Owl Carousel JavaScript -->
<!-- Bootstrap Script -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="{{asset('js/jquery/jquery.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@yield('custom-scripts')
</body>
</html>
