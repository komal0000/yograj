@extends('admin.adminpanel')
@section('title', 'Edit Post')

@section('content')
<div class="">
    <h1>Edit Post</h1>
    <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5">{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control-file" id="image" name="image">{{ $post->image }}
            <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" style="max-width: 200px;">
        </div>
        <!-- Social Media URL Inputs -->
        <div class="row">
        <div class="form-group col-md-6">
            <label for="facebook_url">Facebook URL</label>
            <input type="url" class="form-control" id="facebook_url" name="facebook_url" value="{{ $post->facebook_url }}">
        </div>
        <div class="form-group col-md-6">
            <label for="instagram_url">Instagram URL</label>
            <input type="url" class="form-control" id="instagram_url" name="instagram_url" value="{{ $post->instagram_url }}">
        </div>
        <div class="form-group col-md-6">
            <label for="linkedin_url">LinkedIn URL</label>
            <input type="url" class="form-control" id="linkedin_url" name="linkedin_url" value="{{ $post->linkedin_url }}">
        </div>
        <div class="form-group col-md-6">
            <label for="twitter_url">Twitter URL</label>
            <input type="url" class="form-control" id="twitter_url" name="twitter_url" value="{{ $post->twitter_url }}">
        </div>
    </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
