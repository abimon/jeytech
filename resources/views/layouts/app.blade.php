<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="We are a company that is envisioned to revolutionize industries through innovative automation solutions, cutting-edge IoT technologies, and unparalleled project management consultancy, driving unparalleled efficiency and productivity for businesses worldwide.">
    <meta name="keywords" content="Iot, jeytech,precision,project,management,indurtial,automation,muthangari,westland, technology">
    <title>JEYTECH PRECISIONS</title>
    <link rel="shortcut icon" href="{{asset('storage/img/favicon2.png')}}" type="image/x-icon">
    <link rel="apple-touch-icon" href="{{asset('storage/img/favicon2.png')}}">
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('storage/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('storage/css/bootstrap.min.css')}}">
</head>

<body class="" style="font-family: Nunito;">
    <nav class="navbar navbar-expand-lg  navbar-dark bg-dark text-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">
                <img src="{{asset('storage/img/logo.jpg')}}" style="height: 80px;" alt="">
            </a>
            <div class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </div>
            <div class="collapse navbar-collapse bg-dark" id="navbarSupportedContent">
                <ul class="navbar-nav bg-dark mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item bg-dark">
                        <a class="nav-link active" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item bg-dark dropdown">
                        <a class="nav-link " href="/about" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            About Us
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/about">Who we are</a></li>
                            <li><a class="dropdown-item" href="/about#team">Our Team</a></li>
                            <li><a class="dropdown-item" href="/about#services">Our Services</a></li>
                            <li><a class="dropdown-item" href="/about#partnership">Our Partnership</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="/about#testimonials">Testimonials</a></li>
                        </ul>
                    </li>
                    <li class="nav-item bg-dark">
                        <a class="nav-link" href="/portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item dropdown bg-dark">
                        <a class="nav-link " href="/insights" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Insights
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/insights">Insights</a></li>
                            <li><a class="dropdown-item" href="/career">Career</a></li>
                            <li><a class="dropdown-item" href="/updates">Updates</a></li>
                        </ul>
                    </li>
                    <li class="nav-item bg-dark">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class=" " style="min-height: 600px; margin-top:120px;">
        @yield('content')

    </div>
    <div class="text-light p-3 bg-dark ">
        <div class="m-3 row">
            <div class="col-md-4">
                <h3 class="text-secondary">Contact Us</h3>
                <p><i class="fa fa-location-dot"></i> Muthangari Drive, Westlands, Nairobi</p>
                <p><i class="fa fa-envelope"></i> P.O Box 254795096433 - 00200 Nairobi</p>
                <p><i class="fa">@</i> info@precisionjeytech.com</p>
            </div>
            <div class="col-md-4">
                <h3 class="text-secondary">Our Services</h3>
                <p> <i class="fa fa-star"></i> Project Management Consultancy</p>
                <p> <i class="fa fa-star"></i> IoT Solutions</p>
                <p> <i class="fa fa-star"></i> Industrial Automation</p>
            </div>
            <div class="col-md-4">
                <h3 class="text-secondary">Follow us</h3>
                <div class="d-flex justify-content-between">
                    <a href="" class="text-white"><i class="fa-brands fa-facebook fa-2x"></i></a>
                    <a href="" class="text-white"><i class="fa-brands fa-whatsapp fa-2x"></i></a>
                    <a href="" class="text-white"><i class="fa-brands fa-x fa-2x"></i></a>
                    <a href="" class="text-white"><i class="fa-brands fa-twitter fa-2x"></i></a>
                    <a href="" class="text-white"><i class="fa-brands fa-youtube fa-2x"></i></a>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('storage/css/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>