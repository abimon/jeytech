@extends('layouts.app')
@section('content')
<!-- Header Start -->
<div class="container-fluid page-header" style="margin-bottom: 90px;">
    <div class="container">
        <div class="d-flex flex-column justify-content-center" style="min-height: 300px">
            <h3 class="display-4 text-white text-uppercase">{{$update->title}}</h3>
            <div class="d-inline-flex text-white">
                <p class="m-0 text-uppercase"><a class="text-white" href="/">Home</a></p>
                <i class="fa fa-angle-double-right pt-1 px-3"></i>
                <p class="m-0 text-uppercase">Updates</p>
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
                    <h6 class="text-primary mb-3">{{$update->title}}</h6>
                    <h1 class="mb-5">{{$update->title}}</h1>
                    <img class="img-fluid rounded w-100 mb-4" src="{{asset('storage/updates/'.$update->cover)}}" alt="Image">
                    <div>
                        <?php echo html_entity_decode($update->details) ?>
                    </div>
                </div>

                <!-- Comment List -->
                
                <!-- Comment Form -->
                <!-- <div class="bg-secondary rounded p-5">
                    <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Leave a comment</h3>
                    <form method="post" action=''>
                        @csrf
                        <input type="hidden" name="id" value="{{$update->id}}">
                        <div class="form-group">
                            <label for="name">Name *</label>
                            <input type="text" class="form-control border-0" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" class="form-control border-0" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Comment *</label>
                            <textarea name="comment" cols="30" rows="5" class="form-control border-0" required></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <input type="submit" value="Leave Comment" class="btn btn-primary py-md-2 px-md-4 font-weight-semi-bold">
                        </div>
                    </form>
                </div> -->
            </div>

            <div class="col-lg-4 mt-5 mt-lg-0">
               
                <!-- Recent Updates -->
                <div class="mb-5">
                    <h3 class="text-uppercase mb-4" style="letter-spacing: 5px;">Recent Updates</h3>
                    @foreach($updates as $item)
                    <a class="d-flex align-items-center text-decoration-none mb-3" href="/info/{{$item->id}}">
                        <img class="img-fluid rounded" src="{{asset('storage/updates/'.$item->cover)}}" alt="">
                        <div class="pl-3">
                            <h6 class="m-1">{{$item->title}}</h6>
                            <small>{{date_format($item->created_at,'jS F, Y')}}</small>
                        </div>
                    </a>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Detail End -->

@endsection