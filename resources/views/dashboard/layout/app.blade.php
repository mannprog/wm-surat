<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ $title }} | Desa Cipacing</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon" />

    <link rel="stylesheet"
        href="{{ asset('library/cdn.jsdelivr.net_npm_bootstrap@5.3.0_dist_css_bootstrap.min.css') }}">
    <!-- Custom styles for this template -->
    <link href="{{ asset('library/cdn.jsdelivr.net_npm_bootstrap-icons@1.10.3_font_bootstrap-icons.css') }}"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <style>
        trix-toolbar [data-trix-button-group="file-tools"] {
            display: none;
        }
    </style>
    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/dashboard.css') }}" rel="stylesheet">
</head>

<body>

    <header class="navbar sticky-top bg-dark flex-md-nowrap p-0 shadow">
        @include('dashboard.layout.topbar')
    </header>

    <div class="container-fluid">
        <div class="row">
            <div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
                @include('dashboard.layout.sidebar')
            </div>

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                @yield('content')
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
    <script src="{{ asset('library/cdn.jsdelivr.net_npm_chart.js@4.2.1_dist_chart.umd.min.js') }}"></script>
    <script src="{{ asset('library/cdn.jsdelivr.net_npm_feather-icons_dist_feather.min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <script>
        feather.replace()
    </script>
    @stack('custom-scripts')
</body>

</html>
