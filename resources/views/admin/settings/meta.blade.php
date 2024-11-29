@extends('admin.adminpanel')
@section('title', 'Home Page Settings')
@section('jumbo')
    <li class="breadcrumb-item"><a href="/admin/settings">Settings</a></li>
    <li class="breadcrumb-item active" aria-current="page">Meta Settings</li>
@endsection
@section('content')

    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12 mb-2">
                <label for="meta_title">Title</label>
                <input class="form-control" type="text" name="meta_title" id="meta_title" value="{{ $data->meta_title }}">
            </div>
            <div class="col-md-12 mb-2">
                <label for="meta_description">Description</label>
                <textarea class="form-control" name="meta_description" id="meta_description" rows="3">{{ $data->meta_description }}</textarea>
            </div>
            <div class="col-md-6 mb-2">
                <label for="meta_image">Upload image</label>
                <input class="form-control dropify" type="file" name="meta_image" id="meta_image">
                {!! $data->meta_image !!}
            </div>
        </div>
        <button class="btn btn-primary mt-3">Save</button>
    </form>
@endsection
