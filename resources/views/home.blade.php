<div class="main">
    @php
        $data = App\Helper::getHomeSetting();
    @endphp

    <div class="container">
        <div class="row align-items-center">
            <!-- Text Content -->
            <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-xs-12 order-1 order-md-0">
                <div class="text-content" style="align-">
                    <h1 id="heading" class="display-4 fw-bold" style="color: #222;">
                        {!! $data->title !!}
                    </h1>
                    <p  style="font-size: 1.2rem; color: #666; line-height: 1.8; text-align: justify;">
                        {!! $data->paragraph1 !!}
                    </p>
                    <p style="font-size: 1.2rem; color: #666; line-height: 1.8; text-align: justify;">
                        {!! $data->paragraph2 !!}
                    </p>
                </div>
            </div>

            <!-- Image Content -->
            <div class="col-xxl-6 col-xl-6 col-md-6 col-sm-12 col-xs-12 order-0 order-md-1 p-0">
                <div class="image-content text-center mb-3">
                    <img src="{{ asset($data->image) }}" alt="Portfolio Image" class="img-fluid rounded"
                        style="max-width: 55%; box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);">
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .main {
        background-color: white
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
