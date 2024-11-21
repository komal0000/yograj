@extends('app')
@section('title', $post->title)
@section('content')

<div class="container my-5" style="min-height: 600px;">

  @if($post->image)
  <div class="post-image mb-4 d-flex justify-content-center align-items-center">
      <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}"
           class="img-fluid rounded"
           style="max-height: 600px; object-fit: contain; padding: 10px 0; box-shadow: 0 8px 15px rgba(0, 0, 0, 0.1);">
  </div>
  @endif

  <div class="post-header text-center mb-5">
      <h1 class="fw-bold" style="color: #343a40;">{{ $post->title }}</h1>
      <p class="text-muted">Posted on {{ $post->created_at->format('F d, Y') }}</p>
  </div>

  <div class="post-content mb-5">
      <p style="font-size: 1.1rem; line-height: 1.8; color: #555;">
          {!! $post->content !!}
      </p>
  </div>

  @if($post->facebook_url || $post->instagram_url || $post->linkedin_url || $post->twitter_url)
  <div class="social-links text-center mt-5">
      <h5 class="mb-4">Links to the Post</h5>
      <div class="d-flex justify-content-center gap-3">
          @if($post->facebook_url)
          <a href="{{ $post->facebook_url }}" target="_blank" title="Facebook" class="btn btn-primary" style="width: 50px; height: 50px; border-radius: 50%;">
              <i class="fa fa-facebook" style="font-size: 1.5rem;"></i>
          </a>
          @endif
          @if($post->instagram_url)
          <a href="{{ $post->instagram_url }}" target="_blank" title="Instagram" class="btn btn-danger" style="width: 50px; height: 50px; border-radius: 50%;">
              <i class="fa fa-instagram" style="font-size: 1.5rem;"></i>
          </a>
          @endif
          @if($post->linkedin_url)
          <a href="{{ $post->linkedin_url }}" target="_blank" title="LinkedIn" class="btn btn-info" style="width: 50px; height: 50px; border-radius: 50%;">
              <i class="fa fa-linkedin" style="font-size: 1.5rem;"></i>
          </a>
          @endif
          @if($post->twitter_url)
          <a href="{{ $post->twitter_url }}" target="_blank" title="Twitter" class="btn btn-info" style="width: 50px; height: 50px; border-radius: 50%;">
              <i class="fa fa-twitter" style="font-size: 1.5rem;"></i>
          </a>
          @endif
      </div>
  </div>
  @endif

</div>

<style>
    .post-image {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .post-image img {
        border-radius: 10px;
    }

    .btn {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0;
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: scale(1.1);
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    }

    h1 {
        font-family: 'Poppins', sans-serif;
        font-size: 2.5rem;
    }

    p {
        font-family: 'Roboto', sans-serif;
    }
</style>

@endsection
