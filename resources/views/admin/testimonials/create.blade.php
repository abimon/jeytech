@extends('layouts.admin')
@section('content')
<form method="POST" action="{{ route('testimonials.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="form-floating mb-2">
            <input type="text" value="{{old('name')}}" name="name" placeholder=" " class="form-control">
            <label for="">Name</label>
            @error('name')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-floating mb-2">
            <input type="email" value="{{old('email')}}" name="email" placeholder=" " class="form-control">
            <label for="">Email</label>
            @error('email')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-floating mb-2">
            <input type="number" value="{{old('contact')}}" name="contact" placeholder=" " class="form-control">
            <label for="">Phone No.</label>
            @error('name')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-floating mb-2">
            <input type="text" name="company" value="{{old('company')}}" placeholder=" " class="form-control">
            <label for="">Company</label>
            @error('company')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-floating mb-2">
            <input type="text" name="position" value="{{old('position')}}"" placeholder=" "  class="form-control">
            <label for="">Position</label>
            @error('position')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-floating mb-2">
            <textarea type="text" name="statement" value="{{old('statement')}}" oninput="wordsCount()" placeholder=" " id='mess' class="form-control"></textarea>
            <label for="">Summary(400 characters max)*</label>
            @error('statement')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <small id='messages'></small>
        <label for="">Profile Image*</label>
        <div class="form-floating mb-2">
            <img id="output" src=" "height="50"/>
            <div class="pt-2">
                <a href="#" class="btn btn-primary btn-sm " title="Upload new profile image"><label for="file" class="text-white"><i class="bi bi-upload"></i> Upload Profile Image</label></a>
            </div>
            <input type="file" accept="image/jpeg, image/png" name="avatar" id="file" style="display: none;" class="form-control" onchange="loadFile(event)">

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
<script>
    function wordsCount() {
        var k = (document.getElementById("mess").value).length;
        var j = Math.ceil(k / 144)
        document.getElementById('messages').innerHTML = k + ' characters';
    }
</script>
@endsection