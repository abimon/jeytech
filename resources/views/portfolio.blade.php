@extends('layouts.app')
@section('content')
<div class="container-xxl ">
    
    <div class="container" id="team">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-5 mb-3">Project We have engaged in</h1>
            <div class="section-header"></div>
            <div id="teachers" class="section wb ">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        @for($i=1;$i<=10;$i++)
                        <div class="col-lg-4 col-md-6 col-12 p-2">
                        <div class="our-team">
                                <div class="team-img">
                                    <div>
                                        <img src="{{asset('storage/img/download1.jpg')}}" style="border-radius: 0px; height: 300px;">
                                    </div>
                                    <div class="social p-2">
                                        <p class="text-light">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi quod voluptates odit laudantium, in eligendi animi dolorem hic veniam consequuntur iure est expedita? Numquam eum vel rerum architecto suscipit illo!
                                        </p>
                                        <h3>Project {{$i}}</h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection