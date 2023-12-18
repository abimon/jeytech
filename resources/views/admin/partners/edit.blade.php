@extends('layouts.admin')
@section('content')
<form method="POST" action="{{ route('partners.update',$item->id) }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="container">
        <div class="form-floating mb-2">
            <input type="text" value="{{$item->name}}" name="name" placeholder=" " class="form-control">
            <label for="">Name</label>
            @error('name')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-floating mb-2">
            <input type="text" name="country" value="{{$item->country}}" placeholder=" "  class="form-control">
            <label for="">Country</label>
            @error('country')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <label for="">Logo Image*</label>
        <div class="form-floating mb-2">
            <img id="output" src=" {{asset('storage/testimonial/'.$item->logo)}}"height="50"/>
            <div class="pt-2">
                <a href="#" class="btn btn-primary btn-sm " title="Upload new profile image"><label for="file" class="text-white"><i class="bi bi-upload"></i> Upload Logo Image</label></a>
            </div>
            <input type="file" accept="image/jpeg, image/png" name="logo" id="file" style="display: none;" class="form-control" onchange="loadFile(event)">

            <script>
                var loadFile = function(event) {
                    var image = document.getElementById('output');
                    image.src = URL.createObjectURL(event.target.files[0]);
                    document.getElementById('output').value == image.src;
                };
            </script>
            @error('cover')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="text-end ms-3">
        <button type="submit" class="btn btn-outline-primary">Save</button>
    </div>
</form>
@endsection