@extends('admin.adminpanel')
@section('title', 'Manage Posts')

@section('jumbo')
    <li class="breadcrumb-item active" aria-current="page">Posts</li>
@endsection
@section('content')
    <div class="">
        <div class="card mb-3">
            <div class="card-body">
                <h3>Create New Post</h3>
                <form action="{{ route('admin.posts.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-3">
                            <div>
                                <label for="image">Image</label>
                                <input type="file" class="form-control dropify" id="image" name="image">
                            </div>
                            <div>
                                <label for="categories">Categories</label>
                                <select class="form-control categories" name="category_ids[]" multiple>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                            </div>
                            <div class="form-group">
                                <label for="content">Content</label>
                                <textarea class="form-control" id="content" name="content" rows="5" placeholder="Enter content"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Social Media Links</label>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                                            </div>
                                            <input type="url" class="form-control" name="facebook_url"
                                                placeholder="Facebook URL">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                            </div>
                                            <input type="url" class="form-control" name="instagram_url"
                                                placeholder="Instagram URL">
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                            </div>
                                            <input type="url" class="form-control" name="linkedin_url"
                                                placeholder="LinkedIn URL">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-twitter"></i></span>
                                            </div>
                                            <input type="url" class="form-control" name="twitter_url" placeholder="Twitter URL">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>List of Posts</h3>
                <ul class="list-group">
                    @foreach ($posts as $post)
                        <li class="list-group-item">
                            <div class="row">
                                <div class="col-md-8">
                                    <strong style="margin-bottom: 15px">{{ $post->title }}</strong> <br>
                                    @if ($post->image)
                                        <img src="{{ asset('images/' . $post->image) }}" style="max-width: 200px;">
                                    @else
                                        No Image
                                    @endif
                                </div>
                                <div class="col-md-4">
                                    <div class="float-right">
                                        <a href="{{ route('admin.posts.edit', $post->id) }}"
                                            class="btn btn-sm btn-primary">View & Edit</a>
                                        <form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST"
                                            class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
@endsection
@section('js')
<script>
    $(document).ready(function () {
        $('#content').summernote();
    });
</script>
@endsection


