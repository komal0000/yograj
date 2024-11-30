@extends('admin.adminpanel')

@section('jumbo')
    <li class="breadcrumb-item active" aria-current="page">Categories</li>
@endsection

@section('content')
    <div class="container">

        <div class="card mb-3">
            <div class="card-body">
                <h3>Create New Category</h3>
                <form action="{{ route('admin.posts.category.index') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-4 my-3">
                            <label for="title">Category Title</label>
                            <input type="text" name="title" id="title" class="form-control"
                                placeholder="Enter category title" required>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary mt-4">
                                Add Category
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h3>Categories List</h3>
                <ul class="list-group">
                    @foreach ($categories as $category)
                        <li class="list-group-item">
                            {{ $category->title }}
                            <div class="float-right">
                                <a href="{{ route('admin.posts.category.destroy', ['id' => $category->id]) }}"><button
                                    type="submit" class="btn btn-sm btn-danger">Delete</button></a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

    </div>
@endsection
