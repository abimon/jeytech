@extends('layouts.admin')
@section('content')
<form method="POST" action="{{ route('article.update',$article->id) }}" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="container">
        <div class="form-floating mb-2">
            <input type="text" value="{{$article->title}}" name="title" placeholder=" " class="form-control">
            <label for="">Title</label>
            @error('title')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-floating mb-2">
            <select name="category" id="" class="form-select">
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
            <textarea class="form-control" id="editor0" name="content">{{$article->content}}</textarea>
            <span id="count"></span>
            @error('content')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>

        <div class="form-floating mb-2">
            <input type="text" name="except" value="{{$article->except}}" oninput="wordsCount()" placeholder=" " id='mess' class="form-control">
            <label for="">Except</label>
            @error('except')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <small id='messages'></small>
        <div class="form-floating mb-2">
            <input type="file" name="cover" value="{{$article->cover}}" class="form-control">
            <label for="">Cover</label>
            @error('cover')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
        <div class="form-floating mb-2">
            <?php $tags =json_decode($article->tags,true); ?>
            <input type="text" name="tags" value=<?php foreach($tags as $tag) { echo $tag.' ,';} ?> placeholder="" class="form-control">
            <label for="">Tags (Separate with commas)</label>
            @error('tags')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>
    </div>
    <div class="text-center">
        <button type="submit" class="btn btn-outline-primary">Update</button>
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