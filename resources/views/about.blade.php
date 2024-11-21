@extends('app')
@section('title', 'About')
@section('content')

    <section class="about-section py-5" style="background-color: #f9f9f9;">
        @php
            $data = App\Helper::getAboutSetting();
        @endphp
        <div class="container">
            <!-- Section Heading -->
            <div class="text-center mb-5">
                <h1 id="section-heading" class="fw-bold" style="font-size: 2.5rem; color: #222;">About Me</h1>
                <p class="text-muted" style="font-size: 1rem;">
                    A snapshot of my story, skills, and how to reach me.
                </p>
            </div>

            <!-- Biography and Image Section -->
            <div class="row align-items-center mb-5">
                <!-- Biography -->
                <div class="col-md-6 mb-4 mb-md-0">
                    <div class="p-4 bg-white shadow rounded">
                        <h2 class="fw-bold" style="color: #6C63FF;">Biography</h2>
                        <p style="line-height: 1.6; font-size: 1rem;" class="text-muted">
                            {!! $data->biography !!}
                        </p>
                    </div>
                </div>

                <!-- Image -->
                <div class="col-md-6 text-center">
                    <div class="about-img">
                        <img src="{{ asset($data->aboutimage) }}" alt="My-Image"
                            style="width: 100%; max-width: 400px; border-radius: 20px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);">
                    </div>
                </div>
            </div>

            <!-- Skills and Contact Information -->
            <div class="row">
                <!-- Skills -->
                <div class="col-md-6">
                    <div class="p-4 bg-white shadow rounded">
                        <h2 class="fw-bold" style="color: #FF7A59;">Skills</h2>
                        <ul class="skills list-unstyled mt-3">
                            @foreach ($data->skills as $skill)
                                <li style="font-size: 1rem; margin-bottom: 10px; display: flex; align-items: center;">
                                    <i class="fa fa-check-circle me-2" style="color: #FF7A59;"></i>
                                    {!! $skill !!}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <!-- Contact Information -->
                <div class="col-md-6">
                    <div class="p-4 bg-white shadow rounded">
                        <h2 class="fw-bold" style="color: #6C63FF;">Contact Information</h2>
                        <ul class="list-unstyled mt-3">
                            <li style="font-size: 1rem; margin-bottom: 10px;">
                                <strong>Email:</strong> {!! $data->email !!}
                            </li>
                            <li style="font-size: 1rem; margin-bottom: 10px;">
                                <strong>Phone:</strong> {!! $data->phone !!}
                            </li>
                            <li style="font-size: 1rem; margin-bottom: 10px;">
                                <strong>Address:</strong> {!! $data->address !!}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .about-section {
            background: linear-gradient(135deg, #e9f3fc, #f9f9f9);
        }

        h1,
        h2 {
            font-family: 'Poppins', sans-serif;
        }

        .shadow {
            box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);
        }

        .skills li {
            font-size: 1rem;
            color: #444;
            line-height: 1.6;
        }
    </style>

@endsection
