@extends('layouts.app')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 pb-2 mb-2">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#header-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#header-carousel" data-slide-to="1"></li>
            <li data-target="#header-carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            @for($i=1;$i<=3;$i++) 
            <div class="carousel-item {{$i==1?'active':''}}" style="">
                <img class="position-relative w-100" src="{{asset('storage/img/carousel-'.$i.'.jpg')}}" style="object-fit: cover;">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-white text-uppercase mb-md-3">Advert {{$i}}</h5>
                        <p class=" text-white mb-md-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. At fugit corporis provident nobis accusantium quaerat. Incidunt harum dignissimos iste nulla nisi nihil corrupti dolor ratione ex illum, numquam pariatur perferendis.</p>
                        <a href="" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
<!-- Carousel End -->


<!-- Category Start 
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-5">
                <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Services</h5>
                <h1>Explore Top Services</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="{{asset('storage/img/cat-1.jpg')}}" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">01. Project Management Consultancy</h4>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-2.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Development</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-3.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Game Design</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-4.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Apps Design</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-5.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Marketing</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-6.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Research</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-7.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">Content Writing</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <div class="cat-item position-relative overflow-hidden rounded mb-2">
                        <img class="img-fluid" src="img/cat-8.jpg" alt="">
                        <a class="cat-overlay text-white text-decoration-none" href="">
                            <h4 class="text-white font-weight-medium">SEO</h4>
                            <span>100 Courses</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    -- Category Start -->
<div class="container-fluid py-2">
    <div class="container py-2">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Services</h5>
            <h1>Our Leading Services</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="rounded overflow-hidden mb-2">
                    <img class="img-fluid w-100" style="height:200px;" src="{{asset('storage/img/course-1.jpg')}}" alt="">
                    <div class="bg-secondary p-4">
                        <a class="h5" href="">01. Project Management Consultancy</a>
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-center">
                                <small>Navigate your projects with precision and efficiency. Our seasoned experts offer comprehensive project management consultancy services, ensuring seamless execution, timely delivery, and optimal resource utilization. Trust us to turn your visions into successful realities.</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="rounded overflow-hidden mb-2">
                    <img class="img-fluid w-100" style="height:200px;" src="{{asset('storage/img/course-2.jpg')}}" alt="">
                    <div class="bg-secondary p-4">
                        <a class="h5" href="">02. IoT Solutions</a>
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-center">
                                <small>Empower your business with the Internet of Things (IoT). Our tailored IoT solutions harness the power of connected devices in agritech, fleet management, and remote sensing, thus providing real-time insights, enhanced efficiency, and intelligent decision-making. From smart infrastructure to data-driven insights, we pave the way for a connected and smarter future.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="rounded overflow-hidden mb-2">
                    <img class="img-fluid w-100" style="height:200px;" src="{{asset('storage/img/course-3.jpg')}}" alt="">
                    <div class="bg-secondary p-4">
                        <a class="h5" href="">03. Industrial Automation</a>
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-center">
                                <small>Drive productivity and precision with our cutting-edge industrial automation services. We specialize in optimizing manufacturing processes, enhancing operational efficiency, and integrating state-of-the-art automation technologies. Experience the transformative impact of streamlined operations and increased output.</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Registration Start 
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Need Any Courses</h5>
                        <h1 class="text-white">30% Off For New Students</h1>
                    </div>
                    <p class="text-white">Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Labore eos amet dolor amet diam</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Diam dolor diam elitripsum vero.</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-light text-center p-4">
                            <h1 class="m-0">Sign Up Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-primary p-5">
                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control border-0 p-4" placeholder="Your name" required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control border-0 p-4" placeholder="Your email" required="required" />
                                </div>
                                <div class="form-group">
                                    <select class="custom-select border-0 px-4" style="height: 47px;">
                                        <option selected>Select a course</option>
                                        <option value="1">Course 1</option>
                                        <option value="2">Course 1</option>
                                        <option value="3">Course 1</option>
                                    </select>
                                </div>
                                <div>
                                    <button class="btn btn-dark btn-block border-0 py-3" type="submit">Sign Up Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    Registration End -->


<!-- Testimonial Start -->
<div class="container-fluid py-2">
    <div class="container py-5">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Testimonial</h5>
            <h1>What Say Our Clients</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="owl-carousel testimonial-carousel">
                    @for($u=1;$u<=5;$u++) <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-normal mb-4">Dolor eirmod diam stet kasd sed. Aliqu rebum est eos. Rebum elitr dolore et eos labore, stet justo sed est sed. Diam sed sed dolor stet amet eirmod eos labore diam</h4>
                        <img class="img-fluid mx-auto mb-3" src="{{asset('storage/img/user.png')}}" alt="">
                        <h5 class="m-0">Client {{$u}} Name</h5>
                        <span>Profession</span>
                </div>
                @endfor
            </div>
        </div>
    </div>
</div>
</div>
<!-- Testimonial End -->


<!-- Blog Start -->
<div class="container-fluid py-2">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Our Blog</h5>
            <h1>Latest From Our Blog</h1>
        </div>
        <div class="row pb-3">
            @for($b=1;$b<=3;$b++) 
            <div class="col-lg-4 mb-4">
            <div class="blog-item position-relative overflow-hidden rounded mb-2" style="height: 300px;">
                <img class="" src="{{asset('storage/img/blog-1.jpg')}}" style='height:100%;object-fit:cover;'>
                <a class="blog-overlay text-decoration-none" href="">
                    <h4 class="text-primary mb-3">Blog {{$b}}</h4>
                    <h5 class="text-white mb-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem saepe pariatur ratione architecto.</h5>
                    <p class="text-primary m-0">{{date('jS F, Y')}}</p>
                </a>
            </div>
        </div>
        @endfor
    </div>
</div>
</div>
<!-- Blog End -->

@endsection