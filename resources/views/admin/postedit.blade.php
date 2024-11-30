@extends('admin.adminpanel')

@section('jumbo')
    <li class="breadcrumb-item active" aria-current="page"><a href="{{ route('admin.posts.index') }}">Posts</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit</li>
@endsection

@section('content')
    <div class="">
        <form action="{{ route('admin.posts.update', $post->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
            </div>

            <div class="form-group">
                <label for="content">Content</label>
                <textarea class="form-control" id="content" name="content" rows="5">{{ old('content', $post->content) }}</textarea>
            </div>

            <div class="form-group">
                <div class="row">
                    <div class="col-md-5">
                        <label for="image">Image</label>
                        <input type="file" class="form-control dropify" id="image" name="image" data-default-file="{{ asset('images/' . $post->image) }}">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-md-6">
                    <label for="facebook_url">Facebook URL</label>
                    <input type="url" class="form-control" id="facebook_url" name="facebook_url" value="{{  $post->facebook_url}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="instagram_url">Instagram URL</label>
                    <input type="url" class="form-control" id="instagram_url" name="instagram_url" value="{{ $post->instagram_url}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="linkedin_url">LinkedIn URL</label>
                    <input type="url" class="form-control" id="linkedin_url" name="linkedin_url" value="{{  $post->linkedin_url}}">
                </div>
                <div class="form-group col-md-6">
                    <label for="twitter_url">Twitter URL</label>
                    <input type="url" class="form-control" id="twitter_url" name="twitter_url" value="{{  $post->twitter_url}}">
                </div>
            </div>

            <!-- Categories Section -->
            <div class="form-group">
                <label for="categories">Categories</label>
                <select name="category_ids[]" id="categories" class="form-control categories" multiple>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            @foreach($postcategories as $postcategory)
                                @if($postcategory->category_id == $category->id)
                                    selected
                                @endif
                            @endforeach>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
