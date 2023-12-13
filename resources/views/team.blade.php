@extends('layouts.app')
@section('content')
<div class="container-fluid py-1 carousel-inner">
    <div class="carousel-item active" style="min-height: 300px;">
        <img class=" w-100" src="{{asset('storage/img/carousel-1.jpg')}}" style="min-height: 300px; object-fit: cover;">
        <div class="carousel-caption d-flex align-items-center justify-content-center">
            <div class="p-5" style="width: 100%; text-align:center;">
                <h5 class="text-white text-uppercase mb-md-3">Purpose Driven People</h5>
                <!-- <h1 class="display-3 text-white mb-md-4"></h1> -->
                <h2 class="text-white mb-md-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed, rem in corporis dignissimos aspernatur doloremque cum doloribus repudiandae blanditiis, dolorum dicta officiis tenetur deserunt reiciendis voluptatum officia nam cumque sunt?</h2>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid py-1">
    <div class="container pt-1 pb-3">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Team</h5>
            <h1>Meet Our Team</h1>
        </div>
        <div class="row">
            @for($i=1;$i<=4;$i++) <div class="col-md-6 col-lg-3 text-center team mb-4">
                <div class="team-item rounded overflow-hidden mb-2">
                    <div class="team-img position-relative">
                        <img class="img-fluid" src="{{asset('storage/img/team-'.$i.'.jpg')}}" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-linkedin-in"></i></a>
                            <a class="btn btn-outline-light btn-square mx-1" href="#"><i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                    <div class="bg-secondary p-4">
                        <h5>Staff name</h5>
                        <p class="m-0">Role</p>
                    </div>
                </div>
        </div>
        @endfor
    </div>
</div>
@endsection