@extends('layouts.app')
@section('content')
<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">Insights</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Insights</p>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
<!-- Blog Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <div class="row pb-3">
                    @foreach($articles as $item)
                    <div class="col-lg-6 mb-4">
                        <div class="blog-item position-relative overflow-hidden rounded mb-2" style="height: 300px;">
                            <img class="" src="{{asset('storage/blog/'.$item->cover)}}" alt="" style="width: 100%;object-fit:cover;">
                            <a class="blog-overlay text-decoration-none" href="/insight/{{$item->slag}}">
                                <h5 class="text-white mb-3">{{$item->title}}</h5>
                                <p class="text-primary m-0">{{date_format($item->created_at,'jS F, Y')}}</p>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Category List -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="" class="text-decoration-none h6 m-0">Project Management</a>
                            <span class="badge badge-primary badge-pill">{{$articles->where('category','Project Management')->count()}}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="" class="text-decoration-none h6 m-0">IoT</a>
                            <span class="badge badge-primary badge-pill">{{$articles->where('category','IoT')->count()}}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="" class="text-decoration-none h6 m-0">Industrial Automation</a>
                            <span class="badge badge-primary badge-pill">{{$articles->where('category','Industrial Automation')->count()}}</span>
                        </li>
                    </ul>
                </div>

                <!-- Recent Post -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h3>
                    @foreach($articles as $item)
                    <a class=" text-decoration-none mb-3" href="">
                        <img class="img-fluid rounded" src="{{asset('storage/blog/'.($item->cover))}}" alt="">
                        <div class="pl-3">
                            <h5 class="m-1">{{$item->title}}</h5>
                            <small>{{date_format($item->created_at,'jS F, Y')}}</small>
                        </div>
                    </a>
                    @endforeach
                </div>

                
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection