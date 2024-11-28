<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/index.css') }}">
    @yield('css')

    <style>
        header {
            background-color: #343a40;
        }

        .navbar {
            padding: 1rem 2rem;
        }

        .navbar-brand h1 {
            color: #fff;
            margin: 0;
        }

        .navbar-brand h1 span {
            color: #FF8976;
        }

        .nav-link {
            color: #fff !important;
            margin: 0 0.5rem;
        }

        .contact {
            background-color: #FF8976;
            border: none;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 5px;
        }

        .contact:hover {
            background-color: #ff6a5d;
            color: #fff;
        }

        footer {
            background-color: #343a40;
            color: #fff;
            padding: 2rem 1rem;
        }

        footer h1 span {
            color: #FF8976;
        }

        #fsocial-media li {
            margin-right: 10px;
        }

        #fsocial-media li a {
            font-size: 1.5rem;
            color: #fff;
            margin-right: 10px;
        }

        .privacy h4 a {
            color: #fff;
            text-decoration: none;
            font-size: 0.9rem;
        }

        #arrow {
            background-color: #FF8976;
            border: none;
            color: #fff;
            border-radius: 50%;
            padding: 0.6rem;
            margin-bottom: 10px;
        }

        #arrow:hover {
            background-color: #ff6a5d;
        }

        @media (max-width: 768px) {
            .navbar-brand h1 {
                font-size: 1.5rem;
            }

            .navbar-toggler {
                border-color: #FF8976;
            }

            .navbar-toggler-icon {
                background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3E%3Cpath stroke='rgba%2833, 37, 41, 0.5%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3E%3C/svg%3E");
                color: #FF8976;
            }

            #fsocial-media li a {
                font-size: 1.2rem;
            }

            footer {
                text-align: center;
            }

            .privacy h4 {
                margin-bottom: 0.5rem;
            }

            .footerdiv {
                margin-top: 1rem;
            }
        }
    </style>
</head>
<body>
    @include('components.header')
    @yield('content')
    @include('components.footer')
    @yield('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
