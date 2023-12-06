@extends('layouts.app')
@section('content')
<div class="container-xxl ">
    <div class="container" id="about">
        <div class="text-center mx-auto mb-5 wow fadeInUp row" data-wow-delay="0.1s">
            <h1 class="display-5 mb-3">About Us</h1>
            <div class="section-header"></div>
            <p class="text-dark text-start col-md-6" style="font-size: medium;">Jeytech Precisions is a company envisioned to revolutionize industries through innovative automation solutions, cutting-edge IoT technologies, and unparalleled project management consultancy, driving unparalleled efficiency and productivity for businesses worldwide.</p>
            <p class="text-dark text-start col-md-6" style="font-size: medium;">
            Our mission is to empower industries with state-of-the-art automation technologies, seamless integration of IoT systems, and expert project management consultancy. We strive to enhance operational excellence, sustainability, and competitiveness for our clients while fostering a culture of innovation and continuous improvement.
            </p>
        </div>
    </div>
    <div class="container" id="team">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-5 mb-3">Our Team</h1>
            <div class="section-header"></div>
            <div id="teachers" class="section wb ">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        @foreach($users->where('role','!=','Guest') as $user)
                        <div class="col-lg-3 col-md-4 col-6">
                            <div class="our-team">
                                <div class="team-img">
                                    <div>
                                        <img src="{{asset('storage/profile/'.$user['avatar'])}}" >
                                    </div>
                                    <div class="social">
                                        <ul>
                                            <li><a href="{{$user->facebook}}" target='_blank' class="fa-brands fa-facebook"></a></li>
                                            <li><a href="{{$user->twitter}}" target='_blank' class="fa-brands fa-twitter"></a></li>
                                            <li><a href="{{$user->linkedin}}" target='_blank' class="fa-brands fa-linkedin"></a></li>
                                            <li><a href="{{$user->instagram}}" target='_blank' class="fa-brands fa-instagram"></a></li>
                                            <li><a href="https://wa.me/{{$user->contact}}" target='_blank' class="fa-brands fa-whatsapp"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="team-content">
                                    <h3 class="title">{{$user->name}}</h3>
                                    <span class="post">{{$user->role}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" id="services">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-5 mb-3">Services</h1>
        <div class="section-header"></div>
        <div class="row">
            <div class="col-md-6 col-lg-4 col-12 p-3">
                <div class="p-2">
                    <h3 class="mb-md-2 animated slideInDown text-dark">01. Project Management Consultancy</h3>
                    <p class="text-dark text-start">Navigate your projects with precision and efficiency. Our seasoned experts offer comprehensive project management consultancy services, ensuring seamless execution, timely delivery, and optimal resource utilization. Trust us to turn your visions into successful realities.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-12 p-3">
                <div class="p-2">
                    <h3 class=" mb-md-2 animated slideInDown text-dark">02. IoT Solutions</h3>
                    <p class="text-dark text-start">Empower your business with the Internet of Things (IoT). Our tailored IoT solutions harness the power of connected devices in agritech, fleet management, and remote sensing, thus providing real-time insights, enhanced efficiency, and intelligent decision-making. From smart infrastructure to data-driven insights, we pave the way for a connected and smarter future.</p>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 col-12 p-3">
                <div class="p-2">
                    <h3 class="mb-md-2 animated slideInDown text-dark">03. Industrial Automation</h3>
                    <p class="text-dark text-start" >Drive productivity and precision with our cutting-edge industrial automation services. We specialize in optimizing manufacturing processes, enhancing operational efficiency, and integrating state-of-the-art automation technologies. Experience the transformative impact of streamlined operations and increased output.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" id="partnership">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-5 mb-3">Our Partnership</h1>
        <div class="section-header"></div>
        <p></p>
    </div>
</div>
<div class="container" id="testimonials">
    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-5 mb-3">Testimonials</h1>
        <div class="section-header"></div>
        <p></p>
    </div>
</div>
@endsection