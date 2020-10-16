@extends('layout.master')

@section('page-title', 'About-us')
@section('about-us', 'active')
@section('content')
     <!-- small-banner start -->
     <section class="small-banner">
        <div class="banner-heading">
           <h1>About us</h1>
        </div>
     </section>
     <!-- small-banner end -->
     <!-- Special Events start -->
     <section class="online-delivery special-events">
        <div class="container">
           <div class="row">
              <div class="col-md-6 order-md-1">
                 <img class="menu-img" src="img/about-1.png" alt="menu-img">
              </div>
              <div class="col-md-6">
                 <div class="delivery-text">
                    <h1 class="heading">Special Events and Catering
                    </h1>
                    <p class="small-text">
                       Our restaurant is available for private events: business lunches, dinners, cocktail receptions, and more. We would love to discuss how to be a part of your next event.
                    </p>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- Special Events end -->
     <!-- catering services start -->
     <section class="catering-service">
        <div class="container">
           <div class="serive-bg">
              <img class="dish-left" src="img/about-2.png" alt="menu-img">
              <h2>The future of catering services start from here, You can
                 order Your Favorite playlist that you already like it.
              </h2>
              <div class="text-center service-btn">
                 <a href="https://www.toasttab.com/fish-joint/v3" target="_blank" class="secondary-Btn">Order Now <i class="las la-arrow-right"></i></a>
              </div>
              <img class="dish-right" src="img/about-3.png" alt="menu-img">
           </div>
        </div>
     </section>
     <!-- catering services end -->
     <!-- Fresh and DELICIOUS start -->
     <section class="online-delivery fresh-food special-events">
        <div class="container">
           <div class="row">
              <div class="col-md-7">
                 <img class="menu-img" src="img/about-4.png" alt="menu-img">
              </div>
              <div class="col-md-5">
                 <div class="delivery-text">
                    <h1 class="heading">Fresh and DELICIOUS
                    </h1>
                    <p class="small-text">
                       Freshness brings flavor, color, and the best quality you can get. That’s why we put so much work into sourcing the best, freshest ingredients. We refuse to compromise on quality in our restaurant.
                    </p>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- Fresh and DELICIOUS end -->
     <!-- Our Chef and Staff start -->
     <section class="our-staff">
        <div class="container">
           <div class="staff-bg">
           </div>
           <div class="col-md-7">
              <div class="staff-text ">
                 <h1 class="heading">Our Chef and Staff</h1>
                 <p class="small-text">With years of experience cooking in the finest restaurants, our chef is excited to present their vision to you and all our guests. Our caring and committed staff will ensure you have a fantastic experience with us.</p>
              </div>
           </div>
        </div>
     </section>
     <!-- Our Chef and Staff end -->
     @include('mail')
@endsection
