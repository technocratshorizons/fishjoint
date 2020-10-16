{{-- Plugin Js --}}
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>


{{-- Page script --}}
@yield('page-script')
<script type="text/javascript">
    $(function(){
    $(".dropdown").hover(
       function() {
           $('.dropdown-menu', this).stop( true, true ).fadeIn("fast");
           $(this).toggleClass('open');
           $('b', this).toggleClass("caret caret-up");
       },
       function() {
           $('.dropdown-menu', this).stop( true, true ).fadeOut("fast");
           $(this).toggleClass('open');
           $('b', this).toggleClass("caret caret-up");
       });
    });

    // page bottom script


 </script>
 @yield('mail-script')
 @yield('page-bottom-script')


