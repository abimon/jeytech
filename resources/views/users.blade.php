@extends('layouts.app')
@section('content')


@foreach($groups as $key=>$group)
<h1>Site {{$key+1}}</h1>
<table class="table align-items-center mb-0">
    <thead>
        <tr>
            <th class="text-uppercase text-dark text-xxs font-weight-bolder ">#</th>
            <th class="text-uppercase text-dark text-xxs font-weight-bolder ">Name</th>
            <th class="text-uppercase text-dark text-xxs font-weight-bolder ">Contact</th>
            <th class="text-uppercase text-dark text-xxs font-weight-bolder ">Institution</th>
            <th class="text-uppercase text-dark text-xxs font-weight-bolder ">Gender</th>
        </tr>
    </thead>
    <tbody>
        <div class="p-3">
            @foreach($group as $users)
            @foreach($users as $id=>$user)
            <tr>
                <td>{{$id+1}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['contact']}}</td>
                <td>{{$user['institution']}}</td>
                <td>{{$user['gender']}}</td>
                <td>
                    <a href="" class="">
                        <button class="btn btn-warning">
                            Remove User
                        </button>
                    </a>
                </td>
            </tr>
            @endforeach
            @endforeach
        </div>
    </tbody>
</table>
@endforeach
@endsection
