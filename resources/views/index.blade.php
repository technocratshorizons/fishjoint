@extends('layout.master')

@section('page-title',"Home")
@section('home','active')
@section('content')
     <!-- Banner start -->
     <section class="top-banner">
        <div class="owl-carousel owl-one">
           <div class="item">
              <div class="container">
                 <div class="row">
                    <div class="col-md-6 order-md-1">
                       <div class="banner-img">
                          <img src="{{ asset('img/banner-1.png') }}" alt="banner-img">
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="banner-text">
                          <h1>Yes, We <span>Deliver!</span></h1>
                          <br>
                          <br>
                          <a href="https://www.toasttab.com/fish-joint/v3" target="_blank" class="primary-Btn">Order Now <i class="las la-arrow-right"></i></a>
                          <a href="{{ route('menu') }}" class="secondary-Btn">See full Menu <i class="las la-arrow-right"></i></a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           <!----
           <div class="item">
              <div class="container">
                 <div class="row">
                    <div class="col-md-6 order-md-1">
                       <div class="banner-img">
                          <img src="{{ asset('img/banner-1.png') }}" alt="banner-img">
                       </div>
                    </div>
                    <div class="col-md-6">
                       <div class="banner-text">
                          <h1>Fish Curry with Lotus <span>Stems.</span></h1>
                          <p>Etiam eget urna dictum, egestas ex nec, dapibus ante. Duis at mi a magna aliquam accumsan.</p>
                          <a href="https://www.toasttab.com/fish-joint/v3" target="_blank" class="primary-Btn">Order Now <i class="las la-arrow-right"></i></a>
                          <a href="{{ route('menu') }}" class="secondary-Btn">See full Menu <i class="las la-arrow-right"></i></a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
           ---->
        </div>
        <div class="line">
        </div>
        <div class="container">
        <div class="social-icons">
           <div class="icons">
              <a href="https://www.facebook.com/The-Fish-Joint-Restaurant-107686544092518/" target="_blank"><img src="{{ asset('img/icons/fb.png') }}" alt="fb-icon"></a>
              <a href="https://www.instagram.com/the_fishjoint/" target="_blank"><img src="{{ asset('img/icons/insta.png') }}" alt="fb-icon" ></a>
              <a href="https://www.yelp.com/biz/the-fish-joint-coconut-creek" target="_blank"><img src="{{ asset('img/icons/yelp.png') }}" alt="fb-icon"></a>
           </div>
        </div>
      </div>
     </section>
     <!-- Banner end -->
     <!-- about us start -->
     <section class="about-us">
        <div class="left-img">
           <img src="{{ asset('img/about-us.png') }}" alt="img">
        </div>
        <div class="about-text">
           <h1 class="heading">HOOKED@FIRST BITE</h1>
           <p class="small-text">e. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text...</p>
           <a href="{{ route('about-us') }}" class="primary-Btn">Read More <i class="las la-arrow-right"></i></a>
        </div>
     </section>
     <!-- about us end -->
     <!-- online delivery start -->
     <section class="online-delivery">
        <div class="line">
        </div>
        <div class="container">
           <div class="row">
              <div class="col-md-7">
                 <div class="delivery-text">
                    <h1 class="heading">Online Ordering For
                       Takeout And Delivery
                    </h1>
                    <p class="small-text">
                       We are now offering our own delivery service!
                    </p>
                    <a href="https://www.toasttab.com/fish-joint/v3" target="_blank" class="secondary-Btn">Order Delivery or Takeout <i class="las la-arrow-right"></i></a>
                    <div class="delivery-partners">
                       <h2 class="heading-2">Delivery Partners</h2>
                       <div class="delivery-box">
                          <div class="box-1">
                             <img src="{{ asset('img/uber-img.png') }}" alt="delivery-img">
                             <a href="http://www.ubereats.com/miami/food-delivery/the-fish-joint/wpgFF6SAQfC9n2AZJHHSSA/?utm_source=ue_iminterested&amp;utm_medium=email&amp;utm_campaign=smb_nerb_0320&amp;ue=ue" target="_blank" > Order Now</a>
                          </div>
                          <div class="box-2">
                             <img src="{{ asset('img/grub.png') }}" alt="delivery-img">
                             <a href="https://www.grubhub.com/restaurant/the-fish-joint-4570-lyons-road-unit-103-coconut-creek/1943176" target="_blank" > Order Now</a>
                          </div>
                          <div class="box-3">
                             <img src="{{ asset('img/door.png') }}" alt="delivery-img">
                             <a href="https://www.doordash.com/store/the-fish-joint-coconut-creek-854143/en-US" target="_blank" >Order Now</a>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="delivery-img">
           <img src="{{ asset('img/delivery-img.png') }}" alt="delivery-img">
        </div>
     </section>
     <!-- online delivery end -->
     <!-- our chef start-->
     <section class="our-chef">
        <div class="grey">
           <div class="container">
              <div class="row">
                 <div class="col-lg-3 col-md-12">
                    <div class="chef-text">
                       <h1 class="heading">Our Chef’s Special</h1>
                       <p class="small-text">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p>
                       <a href="https://www.toasttab.com/fish-joint/v3" target="_blank" class="primary-Btn">Order Now <i class="las la-arrow-right"></i></a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <div class="right-slider">
           <div class="owl-carousel owl-two" >
              <div class="item">
                 <div class="box">
                    <div class="slide-img">
                       <img src="{{ asset('img/slider-1.png') }}" alt="img">
                    </div>
                    <div class="slide-content">
                       <div class="right-side-content">
                          <h6>Fried Shrimp Platter</h6>
                          <div class="rating">
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star-half-alt"></i>
                          </div>
                       </div>
                       <a href="https://www.toasttab.com/fish-joint/v3" target="_blank" class="order-link"><i class="las la-arrow-right"></i></a>
                    </div>
                 </div>
              </div>
              <div class="item">
                 <div class="box">
                    <div class="slide-img">
                       <img src="{{ asset('img/slider-2.png') }}" alt="img">
                    </div>
                    <div class="slide-content">
                       <div class="right-side-content">
                          <h6>Fried Shrimp Platter</h6>
                          <div class="rating">
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star-half-alt"></i>
                          </div>
                       </div>
                       <a href="https://www.toasttab.com/fish-joint/v3" target="_blank" class="order-link"><i class="las la-arrow-right"></i></a>
                    </div>
                 </div>
              </div>
              <div class="item">
                 <div class="box">
                    <div class="slide-img">
                       <img src="{{ asset('img/slider-3.png') }}" alt="img">
                    </div>
                    <div class="slide-content">
                       <div class="right-side-content">
                          <h6>Fried Shrimp Platter</h6>
                          <div class="rating">
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star-half-alt"></i>
                          </div>
                       </div>
                       <a href="https://www.toasttab.com/fish-joint/v3" target="_blank" class="order-link"><i class="las la-arrow-right"></i></a>
                    </div>
                 </div>
              </div>
              <div class="item">
                 <div class="box">
                    <div class="slide-img">
                       <img src="{{ asset('img/slider-1.png') }}" alt="img">
                    </div>
                    <div class="slide-content">
                       <div class="right-side-content">
                          <h6>Fried Shrimp Platter</h6>
                          <div class="rating">
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star-half-alt"></i>
                          </div>
                       </div>
                       <a href="https://www.toasttab.com/fish-joint/v3" target="_blank" class="order-link"><i class="las la-arrow-right"></i></a>
                    </div>
                 </div>
              </div>
              <div class="item">
                 <div class="box">
                    <div class="slide-img">
                       <img src="{{ asset('img/slider-2.png') }}" alt="img">
                    </div>
                    <div class="slide-content">
                       <div class="right-side-content">
                          <h6>Fried Shrimp Platter</h6>
                          <div class="rating">
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star-half-alt"></i>
                          </div>
                       </div>
                       <a href="https://www.toasttab.com/fish-joint/v3" target="_blank" class="order-link"><i class="las la-arrow-right"></i></a>
                    </div>
                 </div>
              </div>
              <div class="item">
                 <div class="box">
                    <div class="slide-img">
                       <img src="{{ asset('img/slider-3.png') }}" alt="img">
                    </div>
                    <div class="slide-content">
                       <div class="right-side-content">
                          <h6>Fried Shrimp Platter</h6>
                          <div class="rating">
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star"></i>
                             <i class="las la-star-half-alt"></i>
                          </div>
                       </div>
                       <a href="https://www.toasttab.com/fish-joint/v3" target="_blank" class="order-link"><i class="las la-arrow-right"></i></a>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- our chef end-->
     <!-- our menu start -->
     <section class="our-menu">
        <div class="container">
           <h1 class="heading">Our Best Menu</h1>
           <div class="tabs-main">
              <div class="row">
                 <div class="col-lg-6 col-md-12 order-md-1">
                    <!-- Tabs content -->
                    <div class="tab-content" id="v-pills-tabContent">
                       <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                          <img class="menu-img" src="{{ asset('img/menu-1.png') }}" alt="menu-img">
                       </div>
                       <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                          <img class="menu-img" src="{{ asset('img/menu-2.png') }}" alt="menu-img">
                       </div>
                       <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                          <img class="menu-img" src="{{ asset('img/menu-3.png') }}" alt="menu-img">
                       </div>
                       <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                          <img class="menu-img" src="{{ asset('img/menu-4.png') }}" alt="menu-img">
                       </div>
                    </div>
                 </div>
                 <div class="col-md-12 col-lg-6">
                    <!-- Tabs nav -->
                    <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                       <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">
                          <h5 class="heading-3 text-uppercase">Smoked Fish Dip</h5>
                          <p class="small-text">Served with chips and pickled jalapeño</p>
                          <button class="order-small-btn request-callback" onclick="window.open('https://www.toasttab.com/fish-joint/v3')" id="myButton" >Order Now <i class="las la-arrow-right"></i>
                          </button>
                       </a>
                       <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">
                          <h5 class="heading-3 text-uppercase">Buffalo Popcorn Shrimp</h5>
                          <p class="small-text">Crispy baby shrimp piled high tossed in our buffalo sauce</p>
                          <button class="order-small-btn request-callback" onclick="window.open('https://www.toasttab.com/fish-joint/v3')" id="myButton" >Order Now <i class="las la-arrow-right"></i>
                          </button>
                       </a>
                       <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">
                          <h5 class="heading-3 text-uppercase">Shrimp n’ Grits</h5>
                          <p class="small-text">Cheese grits with Cajun baby shrimp and bacon gravy</p>
                          <button class="order-small-btn request-callback" onclick="window.open('https://www.toasttab.com/fish-joint/v3')" id="myButton" >Order Now <i class="las la-arrow-right"></i>
                          </button>
                       </a>
                       <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">
                          <h5 class="heading-3 text-uppercase">Salmon Burger</h5>
                          <p class="small-text">Grilled with lettuce, tomato, red onion and tartar sauce </p>
                          <button class="order-small-btn request-callback" onclick="window.open('https://www.toasttab.com/fish-joint/v3')" id="myButton" >Order Now <i class="las la-arrow-right"></i>
                          </button>
                       </a>
                       <div class="menu-btn">
                          <a href="{{ route('menu') }}" class="secondary-Btn">See full Menu <i class="las la-arrow-right"></i></a>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
     <!-- our menu end -->
     <!-- Why people love us start -->
     <section class="testimonials">
        <h1 class="heading">Why people love us</h1>
        <div class="testimonials-bg">
           <div class="container">
              <div class="owl-carousel owl-three">
                 <div class="item">
                    <div class="user-content">
                       <div class="rating">
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                       </div>
                       <p class="small-text">Best Mahi sandwich I’ve had in years and easily the best in the county. Will definitely be returning.</p>
                    </div>
                    <div class="user-detail hide-user">
                       <img class="rounded-circle user-img" src="{{ asset('img/user-2.png') }}" alt="user-img">
                       <h4 class="user-name">Tony M</h4>
                       <p class="post-date">9/19/2020</p>
                    </div>
                 </div>
                 <div class="item active">
                    <div class="user-content">
                       <div class="rating">
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                       </div>
                       <p class="small-text">I had a delicious ahi tuna salad, mom's mahi sandwich was fabulous. Fast service. Highly recommend!</p>
                    </div>
                    <div class="user-detail hide-user">
                       <img class="rounded-circle user-img" src="{{ asset('img/user-1.png') }}" alt="user-img">
                       <h4 class="user-name">Kelly Byron</h4>
                       <p class="post-date">9/16/2020</p>
                    </div>
                 </div>
                 <div class="item">
                    <div class="user-content">
                       <div class="rating">
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                       </div>
                       <p class="small-text">My wife and I got two lobster rolls today one hot and one cold. Both of them were very delicious. <span class="p-text"> They were overflowing with meat! We highly recommend this place for anyone looking for fresh seafood. Our only recommendation is that perhaps the bun itself could have garlic or have more butter or cheddar and be toasted. This would add to the flavor in our opinion but having said that we WILL be returning ..there's no question. This was my first time ever having a lobster roll and my wife has had it many times and we both have to say two thumbs up.</span> <a type="button" class="show-text" href="javascript:void(0)">Read More</a></p>
                    </div>
                    <div class="user-detail hide-user">
                       <img class="rounded-circle user-img" src="{{ asset('img/user-2.png') }}" alt="user-img">
                       <h4 class="user-name">Thomas Flewellyn</h4>
                       <p class="post-date">8/23/2020</p>
                    </div>
                 </div>
                 <div class="item">
                    <div class="user-content">
                       <div class="rating">
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                       </div>
                       <p class="small-text">A coworker recommended this place and I am really happy I listened to his advice.<span class="p-text">The fish and chips are just great and fresh, the grits and shrimp 👍👍👍 awesome and the conch fritters (just saying that I won’t have to go to Nassau to eat them again) great job just great job and superb service as well</span>  <a type="button" class="show-text" href="javascript:void(0)">Read More</a></p>
                    </div>
                    <div class="user-detail hide-user">
                       <img class="rounded-circle user-img" src="{{ asset('img/user-4.png') }}" alt="user-img">
                       <h4 class="user-name">Gabriel & Madelyn Garcia</h4>
                       <p class="post-date">7/4/2020</p>
                    </div>
                 </div>
                 <div class="item">
                    <div class="user-content">
                       <div class="rating">
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                          <i class="las la-star"></i>
                       </div>
                       <p class="small-text">Just happened to be in the plaza so decided to try it because I heard great things about the place. <span class="p-text"> Got the conch fritters and fish and chips. Conch fritters were good but couldn't eat the fish and chips as there was hair in it. I called back and spoke with someone said they would issue credit. No credit to my card but very disappointed and disgusted that there was a hair in the food. Probably better off the fish and chips seemed like all breading no fish.</span><a type="button" class="show-text"  href="javascript:void(0)">Read More</a></p>
                    </div>
                    <div class="user-detail hide-user">
                       <img class="rounded-circle user-img" src="{{ asset('img/user-5.png') }}" alt="user-img">
                       <h4 class="user-name">Supergirly</h4>
                       <p class="post-date">9/22/2020</p>
                    </div>
                 </div>
                 
              </div>
           </div>
        </div>
     </section>
     <!-- Why people love us end -->
     @include('mail')
@endsection

@section('page-bottom-script')
<script>
    $(document).ready(function() {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          600: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: true,
            loop: false,
            margin: 20
          }
        }
      })

       $('.owl-two').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          600: {
            items: 2,
            nav: false
          },
          1000: {
            items: 3,
            nav: true,
            loop: false,
            margin: 20
          }
        }
      })
       $('.owl-three').owlCarousel({
        loop: false,
        margin: 10,
        responsiveClass: true,
        center: true,
        responsive: {
          0: {
            items: 1,
            nav: true
          },
          600: {
            items: 2,
            nav: false
          },
          1000: {
            items: 3,
            nav: true,
            loop: false,
            margin: 20

          }
        }
      })

      $("body").on('click', '.show-text', function(){
        var parent = $(this).parent();
        parent.find('.p-text').css('display', 'block');
        $(this).text('Show Less');
        $(this).addClass('show-less');
        $(this).removeClass('show-text');
      });

      $("body").on('click', '.show-less', function(){
        var parent = $(this).parent();
        parent.find('.p-text').css('display', 'none');
        $(this).text('Read More');
        $(this).addClass('show-text');
        $(this).removeClass('show-less');
      });

    })

 </script>

@endsection
