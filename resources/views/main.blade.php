@extends('app')
@section('css')
    <style>
        html {
            scroll-behavior: smooth;
        }
        section {
            scroll-margin-top: 72px;
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
    <section id="copntact-section">
        @include('contact')
    </section>
@endsection
