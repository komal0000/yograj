@extends('app')
@section('title', 'Portfolio')
@section('content')

<div class="main py-5" style="background-color: #f9f9f9;">
    @php
        $data = App\Helper::getHomeSetting();
    @endphp

    <div class="container">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-xs-12 order-1 order-md-0">
                <div class="text-content">
                    <h1 id="heading" class="display-4 fw-bold" style="color: #222;">
                        {!! $data->title !!}
                    </h1>
                    <p style="font-size: 1.2rem; color: #666; line-height: 1.8;">
                        {!! $data->paragraph1 !!}
                    </p>
                    <p style="font-size: 1.2rem; color: #666; line-height: 1.8;">
                        {!! $data->paragraph2 !!}
                    </p>
                    <a href="#" class="btn btn-success btn-lg mt-3" style="border-radius: 30px;">
                        {!! $data->button_text !!}
                    </a>
                    <!-- Statistics -->
                    <div class="d-flex mt-4 gap-4 stats-container">
                        <div>
                            <h3 class="fw-bold" style="color: #6C63FF;">100M</h3>
                            <p class="text-muted">YouTube Views</p>
                        </div>
                        <div>
                            <h3 class="fw-bold" style="color: #FF7A59;">5M</h3>
                            <p class="text-muted">Subscribers</p>
                        </div>
                        <div>
                            <h3 class="fw-bold" style="color: #1DA1F2;">8M</h3>
                            <p class="text-muted">Followers</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Image Content -->
            <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-xs-12 order-0 order-md-1 p-0">
                <div class="image-content text-center">
                    <img src="{{ asset($data->image) }}" alt="Portfolio Image" class="img-fluid rounded" style="max-width: 90%; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .main {
        background: linear-gradient(135deg, #e0eaff, #f9f9f9);
    }

    .text-content h1 {
        font-family: 'Poppins', sans-serif;
        font-size: 2.8rem;
    }

    .text-content p {
        font-family: 'Roboto', sans-serif;
        font-size: 1.2rem;
        color: #666;
    }

    .stats-container div {
        text-align: center;
    }

    .stats-container h3 {
        font-size: 1.8rem;
    }

    .stats-container p {
        margin-top: 5px;
        font-size: 0.9rem;
        color: #888;
    }
</style>

@endsection
