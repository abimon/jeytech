@extends('layouts.app')
@section('content')
<div class="">
    <!-- Carousel Start -->
    <div class="p-0 mb-5 fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel " class="carousel slide " data-bs-ride="carousel" style="width: 100%;">
            <div class="carousel-inner ">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('storage/img/img1.png')}}" alt="Image">
                    <div class="carousel-caption d-flex justify-content-start m-md-4">
                        <div class="container-fluid d-flex justify-content-start">
                            <div class="row ">
                                <div class="col-lg-8 row">
                                    <h5 class="display-5 mb-md-5 animated slideInDown text-primary">Project Management Consultancy</h5>
                                    <p class="text-dark text-start col-md-10 col-8" style="font-size: larger;">Navigate your projects with precision and efficiency. Our seasoned experts offer comprehensive project management consultancy services, ensuring seamless execution, timely delivery, and optimal resource utilization. Trust us to turn your visions into successful realities.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('storage/img/img1.png')}}" alt="Image">
                    <div class="carousel-caption d-flex justify-content-start m-md-4">
                        <div class="container d-flex justify-content-start">
                            <div class="row">
                                <div class="col-lg-8 row">
                                    <h5 class="display-5 mb-md-5 animated slideInDown text-primary">IoT Solutions</h5>
                                    <p class="text-dark text-start col-md-10 col-8" style="font-size: larger;">Empower your business with the Internet of Things (IoT). Our tailored IoT solutions harness the power of connected devices in agritech, fleet management, and remote sensing, thus providing real-time insights, enhanced efficiency, and intelligent decision-making. From smart infrastructure to data-driven insights, we pave the way for a connected and smarter future.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('storage/img/img1.png')}}" alt="Image">
                    <div class="carousel-caption d-flex justify-content-start m-md-4">
                        <div class="container d-flex justify-content-start">
                            <div class="row">
                                <div class="col-lg-8 row">
                                    <h5 class="display-5 mb-md-5 animated slideInDown text-primary">Industrial Automation</h5>
                                    <p class="text-dark text-start col-md-10 col-8" style="font-size: larger;">Drive productivity and precision with our cutting-edge industrial automation services. We specialize in optimizing manufacturing processes, enhancing operational efficiency, and integrating state-of-the-art automation technologies. Experience the transformative impact of streamlined operations and increased output.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->
    <div class="container" ds-aos='fade-in' id="visim">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <h3 class="text-secondary text-center">Our Mission</h3>
                <p class="text-dark">At Jeytech Precision, our mission is to empower industries with state-of-the-art automation technologies, seamless integration of IoT systems, and expert project management consultancy. We strive to enhance operational excellence, sustainability, and competitiveness for our clients while fostering a culture of innovation and continuous improvement.</p>
            </div>
            <div class="col-md-6">
                <h3 class="text-secondary text-center">Our Vision</h3>
                <p class="text-dark">
                    To revolutionize industries through innovative automation solutions, cutting-edge IoT technologies, and unparalleled project management consultancy, driving unparalleled efficiency and productivity for businesses worldwide.
                </p>
            </div>
        </div>

    </div>
    <div class="container">
        <h3 class="text-secondary text-center">Our Core values</h3>
        <div class="row">
            <div class="col-md-4">
                <h5 class="text-primary">01. Innovation</h5>
                <p>We foster a culture of innovation, encouraging our team to think creatively and develop groundbreaking solutions to address complex industrial challenges.</p>
            </div>
            <div class="col-md-4">
                <h5 class="text-primary">02. Reliability</h5>
                <p>We are committed to delivering products and services of the highest quality,ensuring the reliability and long-term success of our clients' projects.</p>
            </div>
            <div class="col-md-4">
                <h5 class="text-primary">03. Customer-Centrism</h5>
                <p>Our clients' needs are at the core of everything we do. We listen, understand, and tailor our solutions to meet their unique requirements effectively.</p>
            </div>
            <div class="col-md-4">
                <h5 class="text-primary">04. Integrity</h5>
                <p>We conduct our business with the utmost integrity, maintaining transparency,
                    honesty, and ethical standards in all our interactions.</p>
            </div>
            <div class="col-md-4">
                <h5 class="text-primary">05. Cross-functional collaboration</h5>
                <p>We believe in the power of collaboration and teamwork. By working together, we achieve remarkable results and provide comprehensive solutions to our clients.</p>
            </div>
        </div>
    </div>
</div>
@endsection