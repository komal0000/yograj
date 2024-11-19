@extends('admin.adminpanel')
@section('title', 'Messages')
@section('jumbo')

<li class="breadcrumb-item active" aria-current="page">Messages</li>
@endsection
@section('content')
<div class="">
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
            <tr>
                <td>{{$message->name}}</td>
                <td>{{$message->email}}</td>
                <td>
                    <a href="{{route('admin.msg.detail',['id'=>$message->id])}}" class="btn btn-primary btn-sm">View Detail</a>
                    <a href="{{route('admin.msg.delete',['id'=>$message->id])}}" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
