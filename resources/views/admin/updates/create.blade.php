@extends('layouts.admin')
@section('content')
<form method="POST" action="{{ route('updates.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="form-floating mb-2">
            <input type="text" value="{{old('title')}}" name="title" placeholder=" " class="form-control">
            <label for="">Title*</label>
            @error('title')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <label for="">Contents of the update</label>
        <div class="form-group mb-2">
            <textarea class="form-control" id="editor0" name="details">{{old('content')}}</textarea>
            <span id="count"></span>
            @error('content')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-floating mb-2">
            <input type="text" name="summary" value="{{old('except')}}" oninput="wordsCount()" placeholder=" " id='mess' class="form-control">
            <label for="">Summary(200 words)*</label>
            @error('except')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <small id='messages'></small>
        <label for="">Cover Image*</label>
        <div class="form-floating mb-2">
            <img id="output" src=" " height="50"/>
            <div class="pt-2">
                <a href="#" class="btn btn-primary btn-sm " title="Upload new profile image"><label for="file" class="text-white"><i class="bi bi-upload"></i> Upload Cover Image</label></a>
            </div>
            <input type="file" accept="image/jpeg, image/png" name="cover" id="file" style="display: none;" class="form-control" onchange="loadFile(event)">

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
    <div class="text-center">
        <button type="submit" class="btn btn-outline-primary">Post</button>
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