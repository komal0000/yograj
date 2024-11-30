<section class="about-section">
    @php
        $data = App\Helper::getAboutSetting();
    @endphp
    <div class="container">
        <div class="text-center mb-5 d-block d-md-none">
            <h1 id="section-heading" class="fw-bold" style="font-size: 2.5rem; color: #222;">About Me</h1>
            <p class="text-muted" style="font-size: 1rem;">
                A snapshot of my story, skills, and how to reach me.
            </p>
        </div>
        <div class="row mb-5">
            <div class="col-md-3 text-center">
                <div class="about-img">
                    <img src="{{ asset($data->aboutimage) }}" alt="My-Image"
                        style="width: 100%; max-width: 600px; border-radius: 20px; box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);">
                </div>
            </div>
            <div class="col-md-9 mb-4 mb-md-0">
                <div class="d-none d-md-block">
                    <h1 id="section-heading" class="fw-bold" style="font-size: 2.5rem; color: #6C63FF;text-align:left;">About Me</h1>
                    <hr class="my-2">
                    {{-- <p class="text-muted" style="font-size: 1rem;">
                        A snapshot of my story, skills, and how to reach me.
                    </p> --}}
                </div>
                <p style="line-height: 1.6; font-size: 1rem; text-align: justify;" class="text-muted">
                    {!! $data->biography !!}
                </p>
                <br>
                <br>
                <h2 class="fw-bold" style="color: #FF7A59;">My Skills</h2>
                <hr class="my-2">
                <ul class="skills list-unstyled mt-3">
                    @foreach ($data->skills as $skill)
                        <li style="font-size: 1rem; margin-bottom: 10px; display: flex; align-items: center;">
                            <i class="fa fa-check-circle me-2" style="color: #FF7A59;"></i>
                            {!! $skill !!}
                        </li>
                    @endforeach
                </ul>
                <br>
                <br>
                <h2 class="fw-bold" style="color: #6C63FF;">Contact Information</h2>
                <hr class="my-2">
                <ul class="list-unstyled mt-3">
                    <li style="font-size: 1rem; margin-bottom: 10px;">
                        <strong>Email:</strong>
                        @foreach (explode(',',$data->email) as $email)
                            <a href="mailto:{{$email}}">{{$email}}</a>,
                        @endforeach

                    </li>
                    <li style="font-size: 1rem; margin-bottom: 10px;">
                        <strong>Phone:</strong>
                        @foreach (explode(',',$data->phone) as $phone)
                            <a href="tel:{{$phone}}">{{$phone}}</a>,
                        @endforeach
                    </li>
                    <li style="font-size: 1rem; margin-bottom: 10px;">
                        <strong>Address:</strong> {!! $data->address !!}
                    </li>
                </ul>


            </div>

        </div>
    </div>
</section>

<style>
    .about-section {
        background-color: white
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
