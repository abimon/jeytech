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
                    @for($i=1;$i<=3;$i++)
                    <div class="col-lg-6 mb-4">
                        <div class="blog-item position-relative overflow-hidden rounded mb-2" style="height: 300px;">
                            <img class="" src="{{asset('storage/img/blog-'.$i.'.jpg')}}" alt="" style="width: 100%;object-fit:cover;">
                            <a class="blog-overlay text-decoration-none" href="/article">
                                <h5 class="text-white mb-3">Lorem elitr magna stet eirmod labore amet labore clita at ut clita</h5>
                                <p class="text-primary m-0">{{date('jS F, Y')}}</p>
                            </a>
                        </div>
                    </div>
                    @endfor
                    <div class="col-12">
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
                    </div>
                </div>
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Author Bio -->
                <div class="d-flex flex-column text-center bg-dark rounded mb-5 py-5 px-4">
                    <img src="{{asset('storage/img/user.png')}}" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px;">
                    <h3 class="text-primary mb-3">{{'Author name'}}</h3>
                    <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h3>
                    <p class="text-white m-0">Conset elitr erat vero dolor ipsum et diam, eos dolor lorem, ipsum sit no ut est ipsum erat kasd amet elitr</p>
                </div>

                <!-- Search Form -->
                <!-- <div class="mb-5">
                    <form action="">
                        <div class="input-group">
                            <input type="text" class="form-control form-control-lg" placeholder="Keyword">
                            <div class="input-group-append">
                                <span class="input-group-text bg-transparent text-primary"><i class="fa fa-search"></i></span>
                            </div>
                        </div>
                    </form>
                </div> -->

                <!-- Category List -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Categories</h3>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="" class="text-decoration-none h6 m-0">Project Management</a>
                            <span class="badge badge-primary badge-pill">150</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="" class="text-decoration-none h6 m-0">IoT</a>
                            <span class="badge badge-primary badge-pill">131</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                            <a href="" class="text-decoration-none h6 m-0">Industrial Automation</a>
                            <span class="badge badge-primary badge-pill">78</span>
                        </li>
                    </ul>
                </div>

                <!-- Recent Post -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Post</h3>
                    @for($i=1;$i<=3;$i++)
                    <a class="d-flex align-items-center text-decoration-none mb-3" href="">
                        <img class="img-fluid rounded" src="{{asset('storage/img/blog-80x80.jpg')}}" alt="">
                        <div class="pl-3">
                            <h6 class="m-1">Diam lorem dolore justo eirmod lorem dolore</h6>
                            <small>Jan 01, 2050</small>
                        </div>
                    </a>
                    @endfor
                </div>

                <!-- Tag Cloud -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h3>
                    <div class="d-flex flex-wrap m-n1">
                        <?php $tags = ['Iot','precision','project','management','industrial','automation','muthangari','westland', 'technology'];?>
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