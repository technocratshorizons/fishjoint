
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('page-title') | The Fish Joint</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="{{ asset('favicon_io/android-chrome-512x512.png') }}"/>
        @include('layout.head')

    </head>
<body>

<!--Top Navigation bar -->
    @include('layout.navbar')


<!--content page-->
    @yield('content')

<!--footer section-->
    @include('layout.footer')

<!--end page-->

{{-- Script --}}
    @include('layout.footer-script')
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
