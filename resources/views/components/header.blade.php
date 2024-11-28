<header class="sticky-top">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('main') }}">
                <h1 class="mb-0 text-white">
                    AB<span style="color: #FF8976;">CD</span>
                </h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('main') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('main') }}#about-section">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('main') }}#social-media-section">Social Media</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="{{ route('blog.view') }}">Blog</a>
                    </li>
                </ul>
                <a class="btn btn-outline-success" href="/contactme">Contact Me</a>
            </div>
        </div>
    </nav>
</header>
