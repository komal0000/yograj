@extends('app')
@section('title', $post->title)
@section('content')

<div class="container mt-4" style="min-height: 600px;">

  @if($post->image)
    <div class="">
      <img src="{{ asset('images/' . $post->image) }}" alt="{{ $post->title }}" class="img-fluid mt-3 mb-3" style="height: 300px; object-fit: cover;">
    </div>
  @endif

  <div>
    <h2>{{ $post->title }}</h2>
    <p class="post-meta text-right">Posted on {{ $post->created_at->format('F d, Y') }}</p>
  </div>

  <div class="post-content">
    {!! $post->content !!}
  </div>

  <div class="social-url">
    <h5>Social Media Links</h5>
    @if($post->facebook_url)
      <a href="{{ $post->facebook_url }}" target="_blank" title="facebook" class="btn btn-primary mr-2">
        <i class="fa fa-facebook"></i>
      </a>
    @endif
    @if($post->instagram_url)
      <a href="{{ $post->instagram_url }}" target="_blank" title="Instagram" class="btn btn-danger mr-2">
        <i class="fa fa-instagram"></i>
      </a>
    @endif
    @if($post->linkedin_url)
      <a href="{{ $post->linkedin_url }}" target="_blank" title="LinkedIn" class="btn btn-info mr-2">
        <i class="fa fa-linkedin"></i>
      </a>
    @endif
    @if($post->twitter_url)
      <a href="{{ $post->twitter_url }}" target="_blank" title="Twitter" class="btn btn-info">
        <i class="fa fa-twitter"></i>
      </a>
    @endif
  </div>

</div>

@endsection
