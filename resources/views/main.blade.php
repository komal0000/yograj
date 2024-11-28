@extends('app')
@section('css')
    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>
@endsection
@section('content')
    <section id="home-section">
        @include('home')
    </section>

    <section id="about-section">
        @include('about')
    </section>

    <section id="social-media-section">
        @include('socialmedia')
    </section>

    <section id="blog-section">
        @include('home')
    </section>
@endsection
