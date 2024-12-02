<header class="sticky-top">
    @php
        $data = App\Helper::getGeneralSetting();
    @endphp
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <!-- Logo aligned to the left, visible on all screen sizes -->
            <a class="navbar-brand" href="{{ route('main') }}">
                {!! $data->head !!}
            </a>

            <!-- Toggler for mobile view (hidden completely) -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" ></span>
            </button>

            <!-- Links hidden completely on all screen sizes -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('main') }}#home-section">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('blog.view') }}">Blog</a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
</header>
