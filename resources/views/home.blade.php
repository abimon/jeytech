@extends('layouts.app')
@section('content')
<!-- Carousel Start -->
<div class="container-fluid p-0 pb-2 mb-2">
    <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            @for($i=0;$i<=(($updates->count())-1);$i++)
                <li data-target="#header-carousel" data-slide-to="{{$i}}" class="{{$i==0?'active':''}}"></li>
                @endfor
        </ol>
        <div class="carousel-inner">
            @foreach($updates as $key=>$update)
            <div class="carousel-item {{($key+1)==1?'active':''}}" style="">
                <img class="position-relative w-100" src="{{asset('storage/updates/'.$update->cover)}}" style="object-fit: cover;">
                <div class="carousel-caption d-flex align-items-center justify-content-center">
                    <div class="p-5" style="width: 100%; max-width: 900px;">
                        <h5 class="text-primary text-uppercase mb-md-3">{{$update->title}}</h5>
                        <p class=" text-white mb-md-4">{{$update->summary}}</p>
                        <a href="/info/{{$update->id}}" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold mt-2">Learn More</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Carousel End -->
<!-- -- Services Start -->
<div class="container-fluid py-2">
    <div class="container py-2">
        <div class="text-center mb-5">
            <!-- <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Services</h5> -->
            <h1 class="text-primary">Our Leading Services</h1>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="rounded overflow-hidden mb-2" style="">
                    <img class="img-fluid w-100" style="height:200px;object-fit: cover;" src="{{asset('storage/img/pm.png')}}" alt="">
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
                <img class="img-fluid w-100" style="height:200px;object-fit: cover;" src="{{asset('storage/img/iot.png')}}" alt="">
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
                <img class="img-fluid w-100" style="height:200px;object-fit: cover;" src="{{asset('storage/img/ia.png')}}" alt="">
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
<!-- -- Services End -->
<!--  partners Start  -->
<div class="container-fluid py-2">
    <div class="container pt-2 pb-2">
        <div class="text-center mb-5">
            <!-- <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Partners</h5> -->
            <h1 class="text-primary">Our Partners</h1>
        </div>
        <div class="row">
            @foreach($partners as $partner)
            <div class="col-lg-2 col-md-3 col-3 m-1">
                <div style="height: 100px;width:100px;">
                    <img src="{{asset('storage/partners/'.$partner->logo)}}" alt="" style=" object-fit:contain; height:100%;width:100%;">
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- -- Partners End -->
<!-- Testimonial Start -->
<div class="container-fluid py-2">
    <div class="container py-5">
        <div class="text-center mb-5">
            <!-- <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Testimonial</h5> -->
            <h1 class="text-primary">What Say Our Clients</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="owl-carousel testimonial-carousel">
                    @foreach($tests as $test) <div class="text-center">
                        <i class="fa fa-3x fa-quote-left text-primary mb-4"></i>
                        <h4 class="font-weight-normal mb-4">{{$test->statement}}</h4>
                        <img class="img-fluid mx-auto mb-3" src="{{asset('storage/testimonial/'.$test->path)}}" alt="">
                        <h5 class="m-0">{{$test->name}}</h5>
                        <span>{{$test->position}} - {{$test->company}}</span>
                </div>
                @endforeach
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
            <!-- <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Our Blog</h5> -->
            <h1 class="text-primary">Latest From Our Blog</h1>
        </div>
        <div class="row pb-3">
            @foreach($articles as $article)
            <div class="col-lg-4 mb-4">
                <div class="blog-item position-relative overflow-hidden rounded mb-2" style="height: 300px;">
                    <img class="" src="{{asset('storage/blog/'.$article->cover)}}" style='height:100%;object-fit:cover;'>
                    <a class="blog-overlay text-decoration-none" href="/insight/{{$article->slag}}">
                        <h4 class="text-secondary mb-3">{{$article->title}}</h4>

                        <p class="text-primary m-0">{{($article->updated_at)->diffForHumans()}}</p>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>
<!-- Blog End -->

@endsection