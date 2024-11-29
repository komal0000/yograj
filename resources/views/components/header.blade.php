<header class="sticky-top">
    @php
        $data = App\Helper::getGeneralSetting();
    @endphp
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-2">
        <div class="container-fluid">
            <!-- Logo aligned to the left -->
            <a class="navbar-brand" href="{{ route('main') }}">
                <h1 class="mb-0" style="background: linear-gradient(to right, #FF8976, #FFB74D, #8E24AA);
                                          -webkit-background-clip: text;
                                          color: transparent;">
                    {!! $data->head !!}
                </h1>
            </a>

            <!-- Toggler for mobile view -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Links aligned to the right -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0"> <!-- 'ms-auto' aligns the items to the right -->
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('main') }}#home-section">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('blog.view') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/contactme">Contact Me</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
