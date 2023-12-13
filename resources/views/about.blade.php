@extends('layouts.app')
@section('content')

<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid rounded mb-4 mb-lg-0" src="{{asset('storage/img/about.jpg')}}" alt="">
            </div>
            <div class="col-lg-7">
                <div class="text-left mb-4">
                    <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">About Us</h5>
                    <h1>Our Vision</h1>
                </div>
                <p>Jeytech Precisions is a company envisioned to revolutionize industries through innovative automation solutions, cutting-edge IoT technologies, and unparalleled project management consultancy, driving unparalleled efficiency and productivity for businesses worldwide.</p>
                <h1>Our Mission</h1>
                <p>Our mission is to empower industries with state-of-the-art automation technologies, seamless integration of IoT systems, and expert project management consultancy. We strive to enhance operational excellence, sustainability, and competitiveness for our clients while fostering a culture of innovation and continuous improvement.</p>
            </div>
        </div>
    </div>

    <!-- About End -->
    <div class="container">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Core Values</h5>
            <h1>Our Core Values</h1>
        </div>
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