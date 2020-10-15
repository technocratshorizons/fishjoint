
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>@yield('page-title')|The Fish Joint</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</body>
</html>
