@extends('layouts.app')
@section('content')
 <!-- Header Start -->
 <div class="container-fluid page-header" style="margin-bottom: 90px;">
        <div class="container">
            <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
                <h3 class="display-4 text-white text-uppercase">Article</h3>
                <div class="d-inline-flex text-white">
                    <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                    <i class="fa fa-angle-double-right pt-1 px-3"></i>
                    <p class="m-0 text-uppercase">Article</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->


    <!-- Detail Start -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-8">
                    <div class="mb-5">
                        <h6 class="text-primary mb-3">Jan 01, 2050</h6>
                        <h1 class="mb-5">{{$article->title}}</h1>
                        <img class="img-fluid rounded w-100 mb-4" src="{{asset('storage/blog/'.$article->cover)}}" alt="Image">
                        <div>
                            <?php echo html_entity_decode($article->content)?>
                        </div>
                    </div>

                    <!-- Comment List -->
                    <div class="mb-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">{{$article->comments->count()}} Comments</h3>
                        @foreach($article->comments as $comment)
                        <div class="media mb-4">
                            <img src="{{asset('storage/img/user.png')}}" alt="Image" class="img-fluid rounded-circle mr-3 mt-1"
                                style="width: 45px;">
                            <div class="media-body">
                                <h6>{{$comment->name}} <small><i>{{($comment->updated_at)->diffForHumans()}}</i></small></h6>
                                <p>{{$article->comment->comment}}</p>
                                <button class="btn btn-sm btn-secondary">Reply</button>
                                @foreach($comments as $item)
                                @if($item->comment_id==$comment->id)
                                <div class="media mt-4">
                                    <img src="{{asset('storage/img/user.png')}}" alt="Image" class="img-fluid rounded-circle mr-3 mt-1"
                                        style="width: 45px;">
                                    <div class="media-body">
                                        <h6>{{$comment->name}} <small><i>{{($comment->updated_at)->diffForHumans()}}</i></small></h6>
                                        <p>{{$comment->comment}}</p>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Comment Form -->
                    <div class="bg-secondary rounded p-5">
                        <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Leave a comment</h3>
                        <form method="post" action='/comment'>
                            <div class="form-group">
                                <label for="name">Name *</label>
                                <input type="text" class="form-control border-0" id="name" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email *</label>
                                <input type="email" class="form-control border-0" id="email" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Message *</label>
                                <textarea id="message" cols="30" rows="5" class="form-control border-0" required></textarea>
                            </div>
                            <div class="form-group mb-0">
                                <input type="submit" value="Leave Comment" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">
                <!-- Author Bio -->
                <div class="d-flex flex-column text-center bg-dark rounded mb-5 py-5 px-4">
                    <img src="{{asset('storage/profile/'.$article->avatar)}}" class="img-fluid rounded-circle mx-auto mb-3" style="width: 100px;">
                    <h3 class="text-primary mb-3">{{$article->name}}</h3>
                    <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Tag Cloud</h3>
                    <p class="text-white m-0">The author of this article {{$article->name}} serves as {{$article->role}}.</p>
                </div>

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
    <!-- Detail End -->

@endsection