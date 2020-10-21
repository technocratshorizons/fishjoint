@extends('layout.master')

@section('page-title', 'Menu')
@section('menu', 'active')
@section('content')
         <!-- small-banner start -->
        <section class="small-banner">
            <div class="banner-heading">
                <h1>Our menu</h1>
            </div>
        </section>
    <!-- small-banner end -->
      <!-- ONLINE ORDERING start -->
        <section class="order-sec">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 col-lg-9">
                        <h3>ONLINE ORDERING FOR TAKEOUT AND DELIVERY NOW AVAILABLE!</h3>
                    </div>
                    <div class="col-md-5 col-lg-3">
                        <div class="service-btn">
                            <a href="https://www.toasttab.com/fish-joint/v3" target="_blank" class="secondary-Btn">Order Now <i class="las la-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- ONLINE ORDERING end -->
    <!-- Little Bait start -->
    <section class="main-menu">
        <div class="container">
            <div class="menu-item pt-60">
                <h1 class="heading">Little Bait</h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Smoked Fish Dip</h4>
                            <p class="small-text">Served with chips and pickled jalapeño</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Buffalo Popcorn Shrimp</h4>
                            <p class="small-text">Crispy baby shrimp piled high tossed in our buffalo sauce </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Shrimp n’ Grits</h4>
                            <p class="small-text">Cheese grits with Cajun baby shrimp and bacon gravy </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Conch Fritters</h4>
                            <p class="small-text">Served with a spicy aioli</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Clam Strips</h4>
                            <p class="small-text">Fresh clams served crispy with cocktail & tartar sauce </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Mahi Fingers</h4>
                            <p class="small-text">Crispy Mahi served with Joint sauce </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Ahi Tuna Nachos</h4>
                            <p class="small-text">Fried wontons, seaweed salad, baby tomatoes, sesame seeds, fresh avocado and a spicy aioli
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Shrimp Ceviche</h4>
                            <p class="small-text">Baby shrimp tossed with cucumbers, avocado, cilantro, red onion, tomato juice and lime served with chips
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-r">
            <div class="container">
                <div class="menu-item pt-60">
                    <h1 class="heading">Steamers</h1>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="menu-content">
                                <h4>Clams</h4>
                                <p class="small-text p-1">Your Choice of Sauce</p>
                                <ul>
                                    <li>Classic shallots, white wine and parsley</li>
                                    <li>Spicy fresh tomatoes, garlic and crushed red pepper</li>
                                    <li>Scampi lemon, garlic and parsley</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="menu-content">
                                <h4>Clams</h4>
                                <p class="small-text p-1">Mussels</p>
                                <ul>
                                    <li>Classic shallots, white wine and parsley</li>
                                    <li>Spicy fresh tomatoes, garlic and crushed red pepper</li>
                                    <li>Scampi lemon, garlic and parsley</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="left-menu-img">
                <img class="menu-img-1" src="{{ asset('img/menu-5.png') }}" alt="img">
            </div>
        </div>
        <div class="container">
            <div class="menu-item pt-60">
                <h1 class="heading">FISH N' CHIPS</h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Fish n’ Chips</h4>
                            <p class="small-text">Served with chips, coleslaw and tartar sauce </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item pt-60">
                <h1 class="heading">Salad</h1>
                <p class="small-text m-0 p-0">Add Chicken $5, Add Shrimp $6, Add Mahi $6, Add Salmon $6, Add Crab Cake $8</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Caesar (Small)</h4>
                            <p class="small-text">Romaine, Parmesan cheese, croutons and Caesar dressing </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Caesar (Large)</h4>
                            <p class="small-text">Romaine, Parmesan cheese, croutons and Caesar dressing </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Mixed Green (Small)</h4>
                            <p class="small-text">Cucumbers, baby heirloom tomatoes, red onion, feta cheese and red wine vinaigrette
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Mixed Green (Large)</h4>
                            <p class="small-text">Cucumbers, baby heirloom tomatoes, red onion, feta cheese and red wine vinaigrette
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Seared Ahi Tuna Salad</h4>
                            <p class="small-text">Mixed greens with peppers, carrots, cabbage, avocado, sesame seeds, crispy wontons and a sweet soy dressing
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item pt-60">
                <h1 class="heading">Soups</h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">New England Clam Chowder (Cup)</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">New England Clam Chowder (Bowl)</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Lobster Bisque (Cup)</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Lobster Bisque (Bowl)</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item pt-60">
                <h1 class="heading">Tacos</h1>
                <p class="small-text m-0 p-0">(3) Flour tortillas with shredded cabbage, pico de gallo and a cilantro lime sauce. Choice of side.</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Fish (Fried Cod)</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Mahi</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Seared Ahi Tuna</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Grilled Shrimp</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Buffalo Shrimp</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item pt-60">
                <h1 class="heading">BURGERS / SANDWICHES</h1>
                <p class="small-text m-0 p-0">Served with choice of side and hushpuppies</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Salmon Burger</h4>
                            <p class="small-text">Grilled with lettuce, tomato, red onion and tartar sauce
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Ahi Tuna Burger</h4>
                            <p class="small-text">Grilled medium rare with pickled carrots and crispy wontons
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Crab Cake BLT</h4>
                            <p class="small-text">Lump crab cake with bacon, lettuce, tomato and a spicy aioli
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Fried Fish Sandwich</h4>
                            <p class="small-text">Beer-battered cod with lettuce, tomato, red onion and tartar sauce
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Mahi Sandwich</h4>
                            <p class="small-text">Grilled, blackened or jerked with lettuce, tomato, red onion and tartar sauce </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Snapper Sandwich</h4>
                            <p class="small-text">Grilled, blackened or jerked with lettuce, tomato, red onion and tartar sauce </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Fried Shrimp Po Boy</h4>
                            <p class="small-text">On a hoagie roll with lettuce, tomato and tartar sauce </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Fried Clam Strip Po Boy</h4>
                            <p class="small-text">On a hoagie roll with lettuce, tomato and tartar sauce </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item pt-60">
                <h1 class="heading">Seafood Platters</h1>
                <p class="small-text m-0 p-0">Choice of 2 sides and hushpuppies</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Grilled Mahi Platter</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Grilled Salmon Platter</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Grilled Snapper Platter</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Grilled Scallops Platter</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Grilled Shrimp Platter</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Grilled Crab Cakes Platter</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Fried Snapper Platter</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Fried Cod Platter</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Fried Clam Strips Platter</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Fried Shrimp Platter</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Fried Popcorn Shrimp Platter</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Fried Scallops Platter</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Fried Trifecta Platter</h4>
                            <p class="small-text">Shrimp. Cod. and Clam Strips</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Grilled Trifecta Platter</h4>
                            <p class="small-text">Mahi, Shrimp, and Scallops </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item pt-60">
                <h1 class="heading">LAND LOVERS</h1>
                <p class="small-text m-0 p-0">Choice of side and hushpuppies</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>The Joint Burger</h4>
                            <p class="small-text">Grilled 8 oz beef burger with American cheese, lettuce, tomato, pickles, red onion and Mayochup </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Grilled Chicken Sandwich</h4>
                            <p class="small-text">Chicken breast with lettuce, tomato, red onion and Joint sauce </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Hot Honey Fried Chicken</h4>
                            <p class="small-text">Buttermilk fried chicken tossed in our hot honey </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4>Parker’s Famous Grilled Cheese</h4>
                            <p class="small-text">American & mozzarella cheese, garlic butter and fresh tomato </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item pt-60">
                <h1 class="heading">Baby Sharks</h1>
                <p class="small-text m-0 p-0">Served with French fries</p>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Chicken Fingers</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Mahi Fingers</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Grilled Cheese</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Mac & Cheese</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu-item pt-60">
                <h1 class="heading">Sides</h1>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Mac & Cheese</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Hush Puppies</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Mixed Vegetables</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Homemade Chips</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">French Fries</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Cheese Grits</h4>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Cajun Rice</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Cole Slaw</h4>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="menu-content">
                            <h4 class="pb-4">Corn on the Cob</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-r">
            <div class="container">
                <div class="menu-item pt-60">
                    <h1 class="heading">Dessert</h1>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="menu-content">
                                <h4 class="pb-4">Key Lime Pie</h4>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="menu-content">
                                <h4 class="pb-4">Chocolate Cake</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="menu-item pt-60">
                    <h1 class="heading">Drinks</h1>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="menu-content">
                                <h4 class="pb-4">Soft Drinks</h4>
                                <p class="small-text"> Variety of Coke Products</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="menu-content">
                                <h4 class="pb-4">Bottle Water</h4>
                            </div>
                        </div>
                    </div>
                    <p class="small-text m-0 ptb-100 text-center">Prices subject to change without notice</p>
                </div>
            </div>
            <div class="bottom-menu-img">
                <img class="menu-img-2" src="{{asset('img/menu-6.png')}}" alt="img">
            </div>
        </div>
    </section>
@endsection

