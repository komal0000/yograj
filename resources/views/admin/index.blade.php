@extends('admin.adminpanel')
@section('content')
<div class="container mt-3 ">
    <div class="row">
        <div class="col-6 col-md-6 col-lg-4 mb-3">
            <a href="{{ route('admin.posts.index') }}" class="btn text-start btn-light w-100  py-3 h-100">
                <i class="fas me-1 fa-edit"></i> Posts
            </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4 mb-3">
            <a href="{{ route('admin.posts.category.index') }}" class="btn text-start btn-light w-100  py-3 h-100">
                <i class="fas me-1 fa-edit"></i>Categories
            </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4 mb-3">
            <a href="{{ route('admin.settings.index') }}" class="btn text-start btn-light w-100  py-3 h-100">
                <i class="fas me-1 fa-gear"></i> Settings
            </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4 mb-3">
            <a href="{{ route('admin.msg') }}" class="btn text-start btn-light w-100  py-3 h-100">
                <i class="fas me-1 fa-envelope"></i> Messages
            </a>
        </div>
        <div class="col-6 col-md-6 col-lg-4 mb-3">
            <a href="{{ route('logout') }}" class="btn text-start btn-light w-100  py-3 h-100">
                <i class="fas me-1 fa-sign-out-alt"></i> Logout
            </a>
        </div>
    </div>
</div>

@endsection
