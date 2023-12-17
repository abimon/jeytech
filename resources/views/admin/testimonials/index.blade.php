@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card mb-4">
            <div class="card-header p-1 d-flex justify-content-between mb-3">
                <h6 class="p-2">All Testimonials</h6>
                <a href="{{route('testimonials.create')}}" class="btn btn-outline-primary"><i class="bi bi-plus"></i> Testimonials</a>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
                <div class="table-responsive p-0">
                    <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Client</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Created At</th>
                                <th class="text-secondary opacity-7 text-uppercase">Edit</th>
                                <th class="text-secondary opacity-7 text-uppercase">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $key => $item)
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
                                        <a href="#" type="button" class="text-dark" data-bs-toggle="modal" data-bs-target="#show{{$item->id}}">
                                            <h6 class="mb-0 text-sm">{{$item->name}}</h6>
                                        </a>
                                    </div>
                                    <div class="modal fade" id="show{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Details about show{{$item->name}}</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                    <div class="modal-body text-dark">
                                                    <div class="d-flex justify-content-center">
                                                    <img src="{{asset('storage/testimonial/'.$item->path)}}" alt="" style="height: 100px;">
                                                    </div>
                                                    <p>{{$item->name}} is {{$item->position}} in {{$item->company}}. To contact,
                                                    call {{$item->phone}} or email {{$item->email}}</p>
                                                    <p>
                                                        <b>
                                                        <i>"{{$item->statement}}"</i>
                                                        </b>
                                                    </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                
                                <td class="align-middle text-center">
                                    <span class="text-secondary text-xs font-weight-bold">{{$item->created_at->format('d-M-Y')}}</span>
                                </td>
                                <td class="align-middle">
                                    <a href="{{route('testimonials.edit', $item->id)}}" class="text-secondary font-weight-bold text-xs text-warning" data-toggle="tooltip" data-original-title="Edit">
                                        Edit
                                    </a>
                                </td>
                                <td class="align-middle">
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete{{$item->id}}">
                                        Delete
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade" id="delete{{$item->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Confirm</h1>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <form action="{{route('testimonials.destroy', $item->id)}}" method="POST">
                                                    @method('DELETE')
                                                    @csrf
                                                    <div class="modal-body text-danger">
                                                    Do you want to delete this item?<br>
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