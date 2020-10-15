 <!--Navbar start -->
 <div class="container">
    <nav class="mb-1 p-0 navbar navbar-expand-lg">
       <a class="navbar-brand" href="index.html"><img class="logo" src="{{ asset('img/logo.png') }}" alt="logo"></a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
          aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
       <i class="las la-bars mobile-icon"></i>
       </button>
       <div class="collapse mobile-view navbar-collapse" id="navbarSupportedContent-4">
          <ul class="navbar-nav ml-auto">
             <li class="nav-item  ">
                <a class="nav-link @yield('home')" href="\">
                Home
                </a>
             </li>
             <li class="nav-item">
                <a class="nav-link @yield('about-us')" href="\about-us">
                About Us
                </a>
             </li>
             <li class="nav-item">
                <a class="nav-link @yield('menu')" href="\menu">
                Menu
                </a>
             </li>
             <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://www.toasttab.com/fish-joint/v3">
                Order Online
                </a>
             </li>
             <li class="nav-item">
                <a class="nav-link" target="_blank" href="https://www.ezcater.com/catering/pvt/the-fish-joint-3">
                Catering
                </a>
             </li>
             <li class="nav-item">
                <a class="nav-link call-btn" href="tel:9546340277">
                <i class="las la-phone-volume"></i> (954) 634-0277
                </a>
             </li>
          </ul>
       </div>
    </nav>
 </div>
 <!--Navbar End-->
