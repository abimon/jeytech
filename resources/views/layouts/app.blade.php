<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JEYTECH PRECISION</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="We are a company that is envisioned to revolutionize industries through innovative automation solutions, cutting-edge IoT technologies, and unparalleled project management consultancy, driving unparalleled efficiency and productivity for businesses worldwide.">
    <meta name="keywords" content="Iot, jeytech,precision,project,management,industrial,automation,muthangari,westland, technology">

    <!-- Favicon -->
    <link href="{{asset('storage/img/favicon2.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <!-- Libraries Stylesheet -->
    <link href="{{asset('storage/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('storage/css/style.css')}}" rel="stylesheet">
</head>

<body>
    <div class="">
        <!-- Topbar Start -->
        <div class="container-fluid d-none d-lg-block">
            <div class="row align-items-center py-4 px-xl-5">
                <div class="col-lg-3">
                    <a href="/" class="text-decoration-none">
                    <img src="{{asset('storage/img/logo.png')}}" style="height: 150px;" alt="">
                    </a>
                </div>
                <div class="col-lg-3 text-right">
                    <div class="d-inline-flex align-items-center">
                        <i class="fa fa-2x fa-map-marker-alt text-primary mr-3"></i>
                        <div class="text-left">
                            <h6 class="font-weight-semi-bold mb-1">Our Office</h6>
                            <small>Muthangari Drive, Westlands, Nairobi, Kenya<br>
                                P.O Box 254795096433 - 00200 Nairobi</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-right">
                    <div class="d-inline-flex align-items-center">
                        <i class="fa fa-2x fa-envelope text-primary mr-3"></i>
                        <div class="text-left">
                            <h6 class="font-weight-semi-bold mb-1">Email Us</h6>
                            <small>info@precisionjeytech.com</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 text-right">
                    <div class="d-inline-flex align-items-center">
                        <i class="fa fa-2x fa-phone text-primary mr-3"></i>
                        <div class="text-left">
                            <h6 class="font-weight-semi-bold mb-1">Call Us</h6>
                            <small>+254 795 096 433</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->
        <!-- Navbar Start -->
        <div class="container-fluid">
            <div class="row border-top px-xl-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <a class="d-flex align-items-center justify-content-between bg-secondary w-100 text-decoration-none" data-toggle="collapse" href="#navbar-vertical" style="height: 67px; padding: 0 30px;">
                        <h5 class="text-primary m-0"><i class="fa fa-book-open mr-2"></i>Insider</h5>
                        <i class="fa fa-angle-down text-primary"></i>
                    </a>
                    <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 9;">
                        <div class="navbar-nav w-100">
                            <a href="/insights" class="nav-item nav-link">Insights</a>
                            <a href="" class="nav-item nav-link">Career</a>
                            <a href="" class="nav-item nav-link">Updates</a>
                        </div>
                    </nav>
                </div>
                <div class="col-lg-9">
                    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                        <a href="/" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0"><span class="text-primary">JEYTECH</span>PRECISION</h1>
                        </a>
                        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav py-0">
                                <a href="/" class="nav-item nav-link {{request()->path()=='/'?'active':''}}">Home</a>
                                <a href="/about" class="nav-item nav-link {{request()->path()=='about'?'active':''}}">About</a>
                                <a href="/portfolio" class="nav-item nav-link {{request()->path()=='portfolio'?'active':''}}">Portfolio</a>
                                <a href="/team" class="nav-item nav-link {{request()->path()=='team'?'active':''}}">Team</a>
                            </div>
                            <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="/contact">Contact Now!</a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
        <!-- Navbar End -->
    </div>
    <div>
        @yield('content')
    </div>
    <!-- Footer Start -->
    <div class="container-fluid text-white py-5 px-sm-3 px-lg-5" style="margin-top: 90px;background-color:#061f0b;">
        <div class="row pt-5">
            <div class="col-lg-7 col-md-12">
                <div class="row">
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt mr-2"></i>Muthangari Drive, Westlands, Nairobi, Kenya<br>
                            P.O Box 254795096433 - 00200 Nairobi</p>
                        <p><i class="fa fa-phone-alt mr-2"></i>+254 795 096 433</p>
                        <p><i class="fa fa-envelope mr-2"></i>info@precisionjeytech.com</p>
                        <div class="d-flex justify-content-start mt-4">
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-square" href="#"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 mb-5">
                        <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Our Services</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Industrial Automation</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Project Management</a>
                            <a class="text-white mb-2" href="#"><i class="fa fa-angle-right mr-2"></i>Internnet of Things</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 mb-5 border-left">
                <h5 class="text-primary text-uppercase mb-4" style="letter-spacing: 5px;">Newsletter</h5>
                <p>Subscribe for our quarterly updates</p>
                <div class="w-100">
                    <form action="/subscribe" method="post">
                        <div class="input-group">
                            <input type="text" class="form-control border-light" style="padding: 30px;" placeholder="Your Email Address">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary px-4">Sign Up</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-white border-top py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important; background-color:#082e0d;">
        <div class="row">
            <div class="col-lg-6 text-center text-md-left mb-3 mb-md-0">
                <p class="m-0 text-white">&copy; {{date('Y')}}<a href="#"></a>. All Rights Reserved. Designed by <a href="https://apekinc.top">APEK INC</a>
                </p>
            </div>
            <div class="col-lg-6 text-center text-md-right">
                <ul class="nav d-inline-flex">
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">FAQs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white py-0" href="#">Help</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('storage/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('storage/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('storage/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('storage/mail/contact.js')}}"></script>
    <!-- Template Javascript -->
    <script src="{{asset('storage/js/main.js')}}"></script>
</body>

</html>