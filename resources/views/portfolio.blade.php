@extends('layouts.app')
@section('content')
<div class="container-fluid py-2">
    <div class="container py-2">
        <div class="text-center mb-5">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Projects Portfolio</h5>
            <h1>Previous projects we have engaged</h1>
        </div>
        <div class="row">
            @for($i=1;$i<=6;$i++)
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="rounded overflow-hidden mb-2">
                    <img class="img-fluid w-100" style="height:200px;" src="{{asset('storage/img/course-'.($i).'.jpg')}}" alt="">
                    <div class="bg-secondary p-4">
                        <a class="h5" href="">Project {{$i}}</a>
                        <div class="border-top mt-4 pt-4">
                            <div class="d-flex justify-content-center">
                                <small>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magni illo, obcaecati voluptates numquam non nulla pariatur sint facilis. Culpa aliquam fugiat alias iusto, quia ea eum debitis nihil est molestiae.</small></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</div>
@endsection