<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard')</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('CSS/index.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    @yield('css')
    <style>
        .sidebar {
            background-color: #343a40;
            color: #fff;
            height: 100%;
            min-height: 100vh;
            padding-top: 20px;
        }

        .sidebar ul {
            padding-left: 0;
        }

        .sidebar ul li {
            list-style: none;
            margin-bottom: 15px;
        }

        .sidebar ul li a {
            color: #fff;
            text-decoration: none;
            padding: 10px 15px;
            border-radius: 5px;
        }

        .sidebar ul li a:hover {
            background-color: #495057;
        }

        .sidebar ul li a i {
            margin-right: 6px;
        }

        .breadcrumb a {
            text-decoration: none;
            color: #575A5E;
            font-weight: 700;
        }

        /* Make the Dropify text smaller */
        .dropify-wrapper .dropify-message p {
            font-size: 12px;
            /* Adjust the size to your preference */
        }
    </style>
</head>

<body>
    <div class="row m-0 gx-0">
        <div class="col-md-2 ps-0 col-sm-12">
            @include('admin.sidebar')
        </div>
        <div class="col-md-10 p-0 col-sm-12">
            <div class="content">
                <div class="bg-light py-3 ps-2">
                    <h4>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="/admin">Admin</a>
                            </li>
                            @yield('jumbo')
                        </ol>
                    </h4>
                </div>

                <div class="px-3">
                    @yield('content')
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.dropify').dropify();
            $('.categories').select2();
        });
    </script>
    @yield('js')
</body>

</html>
