@extends('layouts.admin')
@section('content')
<div class="container">
    <table>
        <thead>
            <th>#</th>
            <th>Email</th>
            <th>Subscribed on</th>
        </thead>
        <tbody>
            @foreach($subscribers as $key=>$sub)
            <tr>
                <td>{{$sub->email}}</td>
                <td>{{date_format(($sub->created_at),'jS F, Y')}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection