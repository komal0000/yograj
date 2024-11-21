@extends('app')
@section('title', 'Blogs')
@section('content')

<div class="container mt-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold" style="color: #343a40;">My Latest Posts</h1>
        <p class="text-muted">Explore the latest insights, stories, and updates on various topics.</p>
    </div>

    <div class="row g-4">
        @foreach ($posts as $post)
        <div class="col-md-6 col-lg-4">
            <div class="card h-100 shadow-sm border-0">
                <div class="card-img-top overflow-hidden" style="height: 250px;">
                    <img src="{{ asset('images/' . $post->image) }}" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="{{ $post->title }}">
                </div>
                <div class="card-body">
                    <h5 class="card-title fw-bold">{{ $post->title }}</h5>
                    <p class="card-subtitle text-muted mb-2">Posted on {{ $post->created_at->format('F d, Y') }}</p>
                    <p class="card-text text-muted">{{ Str::limit($post->content, 120) }}</p>
                    <a href="{{ route('post.show', ['id' => $post->id]) }}" class="btn btn-primary mt-2">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 15px;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .card-img-top img {
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
    }

    .btn-primary {
        background-color: #FF8976;
        border: none;
        border-radius: 5px;
    }

    .btn-primary:hover {
        background-color: #ff6a5d;
    }
</style>

@endsection
