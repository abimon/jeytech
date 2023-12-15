@extends('layouts.admin')
@section('content')
<form method="POST" action="{{ route('article.store') }}" enctype="multipart/form-data">
    @csrf
    <div class="container">
        <div class="form-floating mb-2">
            <input type="text" value="{{old('title')}}"name="title" placeholder=" " class="form-control" >
            <label for="">Title</label>
            @error('title')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-floating mb-2">
            <select name="category" id="" class="form-select" >
                <option value="" class="form-control" selected disabled>Select Category</option>
                <option value="Project Management" class="form-control">Project Management</option>
                <option value="IoT" class="form-control">IoT</option>
                <option value="Industrial Automation" class="form-control">Industrial Automation</option>
            </select>
            <label for="">Category</label>
            @error('category')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-group mb-2">
            <textarea class="form-control" id="editor0" name="content" >{{old('content')}}</textarea>
            <span id="count"></span>
            @error('content')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-floating mb-2">
            <input type="text" name="except"value="{{old('except')}}" oninput="wordsCount()" placeholder=" " id='mess' class="form-control">
            <label for="">Except</label>
            @error('except')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <small id='messages'></small>
        <div class="form-floating mb-2">
            <input type="file" name="cover"value="{{old('cover')}}" class="form-control" >
            <label for="">Cover</label>
            @error('cover')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-floating mb-2">
            <input type="text" name="tags"value="{{old('tags')}}" placeholder=" " class="form-control">
            <label for="">Tags (Separate with commas)</label>
            @error('tags')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-outline-primary">Post</button>
    </div>
</form>
@endsection


<script>
    function wordsCount() {
        var k = (document.getElementById("mess").value).length;
        var j = Math.ceil(k / 144)
        document.getElementById('messages').innerHTML = k + ' characters';
    }
</script>