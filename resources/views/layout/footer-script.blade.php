{{-- Plugin Js --}}
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.js') }}"></script>
<script src="{{ asset('js/popper.min.js') }}"></script>


{{-- Page script --}}
@yield('page-script')
<script type="text/javascript">
    $(function(){
        
       $('#gotoTop').on('click', function(event){
         event.preventDefault();
          $('html, body').stop().animate({scrollTop: 0}, 1800,"linear");
     });


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
    
//Get the button
var mybutton = document.getElementById("gotoTop");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


</script>
@yield('mail-script')
@yield('page-bottom-script')
