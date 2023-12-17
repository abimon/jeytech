@extends('layouts.admin')
@section('content')
<div class="row">
  <div class="col-12">
    <div class="card mb-4">
      <div class="card-header p-1 d-flex justify-content-between mb-3">
        <h6 class="p-2">All Articles</h6>
        <a href="{{route('article.create')}}" class="btn btn-outline-primary"><i class="bi bi-plus"></i> Article</a>
      </div>
      <div class="card-body px-0 pt-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Title</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Comments</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Likes</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                <th class="text-secondary opacity-7 text-uppercase">Edit</th>
                <th class="text-secondary opacity-7 text-uppercase">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($articles as $key => $article)
              <tr>
                <td>
                  <div class="d-flex px-2 py-1">
                    <div>
                      <h6 class="mb-0 text-sm">{{$key+1}}</h6>
                    </div>
                  </div>
                </td>
                <td>
                  <div class="d-flex flex-column justify-content-center">
                    <a href="{{route('article.show', $article->id)}}">
                      <h6 class="mb-0 text-sm">{{$article->title}}</h6>
                    </a>
                  </div>
                </td>
                <td class="align-middle text-sm">
                  {{$article->comments->count()}} <i class="fa fa-comments"></i>
                </td>
                <td class="align-middle text-sm">
                  {{$article->likes->count()}} <i class="fa fa-thumbs-up"></i>
                </td>
                <td class="align-middle text-center">
                  <span class="text-secondary text-xs font-weight-bold">{{$article->created_at->format('d-M-Y')}}</span>
                </td>
                <td class="align-middle">
                  <a href="{{route('article.edit', $article->id)}}" class="text-secondary font-weight-bold text-xs text-warning" data-toggle="tooltip" data-original-title="Edit">
                    Edit
                  </a>
                </td>
                <td class="align-middle">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete{{$article->id}}">
                    Delete
                  </button>

                  <!-- Modal -->
                  <div class="modal fade" id="delete{{$article->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="{{route('article.destroy', $article->id)}}" method="POST">
                          @method('DELETE')
                          @csrf
                          <div class="modal-body text-danger">
                            Do you want to delete this article?<br>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-danger">Confirm</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection