@extends('layouts.app')
@section('content')
<div class="container-fluid py-2">
    <div class="container py-2">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Projects Portfolio</h5>
            <h1>Previous projects we have engaged</h1>
        </div>
        <div class="row">
            @foreach($items as $item)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="rounded overflow-hidden mb-2">
                    <img class="img-fluid w-100" style="height:200px;" src="{{asset('storage/projects/'.$item->cover)}}" alt="">
                    <div class="bg-secondary p-4">
                        <a class="h5" href="">{{$item->title}}</a>
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-center" style="height:200px;overflow:scroll;">
                                <small><?php echo html_entity_decode($item->details); ?></small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection