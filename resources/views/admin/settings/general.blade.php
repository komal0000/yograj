@extends('admin.adminpanel')
@section('title', 'Home Page Settings')
@section('jumbo')
    <li class="breadcrumb-item"><a href="/admin/settings">Settings</a></li>
    <li class="breadcrumb-item active" aria-current="page">General Settings</li>
@endsection
@section('content')

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-6 mb-2">
                <label for="head">Heading text</label>
                <textarea class="form-control" type="text" name="head" id="head">{!! $data->head !!}</textarea>
            </div>
        </div>
        <button class="btn btn-primary mt-3">Save</button>
    </form>
@endsection
