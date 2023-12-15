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
                            <img class="" src="{{asset('storage/blog/'.$article->cover)}}" alt="" style="width: 100%;object-fit:cover;">
                            <a class="blog-overlay text-decoration-none" href="/article/{{$item->slug}}">
                                <h5 class="text-white mb-3">{{$item->except}}</h5>
                                <p class="text-primary m-0">{{date_format($item->created_at,'jS F, Y')}}</p>
                            </a>
                        </div>
                    </div>
                    @endforeach
                    <!-- <div class="col-12">
                        <nav aria-label="Page navigation">
                            <ul class="pagination pagination-lg justify-content-center mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div> -->
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
                    <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                        <img class="img-fluid rounded" src="{{$item->cover}}" alt="">
                        <div class="pl-3">
                            <h6 class="m-1">{{$item->title}}</h6>
                            <small>{{date_format($item->created_at,'jS F, Y')}}</small>
                        </div>
                    </a>
                    @endforeach
                </div>

                <!-- Tag Cloud -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        <?php $tags = json_decode(($article->tags),true);?>
                        @foreach($tags as $tag)
                        <a href="" class="btn btn-outline-primary m-1 text-capitalize">{{$tag}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog End -->
@endsection