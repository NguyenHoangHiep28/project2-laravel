@extends('front.layout.master')
@section('title', 'Restaurant')
@section('body')
    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Search</a></li>
                <li class="breadcrumb-item active">Restaurants Found</li>
            </ol>
        </div>
    </div>

    <section>
        <div class="block gray-bg bottom-padd210 top-padd30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="sec-box">
                            <div class="top-restaurants-wrapper">
                                <ul class="restaurants-wrapper style2">
                                    <li class="wow bounceIn" data-wow-delay="0.2s">
                                        <div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 1"
                                                                       itemprop="url"><img
                                                    src="images/resource/top-restaurant1.png"
                                                    alt="top-restaurant1.png" itemprop="image"></a></div>
                                    </li>
                                    <li class="wow bounceIn" data-wow-delay="0.4s">
                                        <div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 2"
                                                                       itemprop="url"><img
                                                    src="images/resource/top-restaurant2.png"
                                                    alt="top-restaurant2.png" itemprop="image"></a></div>
                                    </li>
                                    <li class="wow bounceIn" data-wow-delay="0.6s">
                                        <div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 3"
                                                                       itemprop="url"><img
                                                    src="images/resource/top-restaurant3.png"
                                                    alt="top-restaurant3.png" itemprop="image"></a></div>
                                    </li>
                                    <li class="wow bounceIn" data-wow-delay="0.8s">
                                        <div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 4"
                                                                       itemprop="url"><img
                                                    src="images/resource/top-restaurant4.png"
                                                    alt="top-restaurant4.png" itemprop="image"></a></div>
                                    </li>
                                    <li class="wow bounceIn" data-wow-delay="1s">
                                        <div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 5"
                                                                       itemprop="url"><img
                                                    src="images/resource/top-restaurant5.png"
                                                    alt="top-restaurant5.png" itemprop="image"></a></div>
                                    </li>
                                    <li class="wow bounceIn" data-wow-delay="1.2s">
                                        <div class="top-restaurant"><a class="brd-rd50" href="#" title="Restaurant 5"
                                                                       itemprop="url"><img
                                                    src="images/resource/top-restaurant6.png"
                                                    alt="top-restaurant6.png" itemprop="image"></a></div>
                                    </li>
                                </ul>
                            </div>
                            <div class="sec-wrapper top-padd80">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12 col-lg-3">
                                        <div class="sidebar left">
                                            <div class="widget style2 Search_filters">
                                                <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Search
                                                    Filters</h4>
                                                <div class="widget-data">
                                                    <ul>
                                                        <li><a href="#" title="" itemprop="url">Fast Food</a>
                                                            <span>30</span></li>
                                                        <li><a href="#" title="" itemprop="url">North Indian</a> <span>28</span>
                                                        </li>
                                                        <li><a href="#" title="" itemprop="url">Chinese</a>
                                                            <span>25</span></li>
                                                        <li><a href="#" title="" itemprop="url">Bakery</a>
                                                            <span>11</span></li>
                                                        <li><a href="#" title="" itemprop="url">Mughlai</a>
                                                            <span>7</span></li>
                                                        <li><a href="#" title="" itemprop="url">Pizza</a> <span>6</span>
                                                        </li>
                                                        <li><a href="#" title="" itemprop="url">Ice Cream</a>
                                                            <span>6</span></li>
                                                        <li><a href="#" title="" itemprop="url">Rolls</a> <span>6</span>
                                                        </li>
                                                        <li><a href="#" title="" itemprop="url">Cafe</a> <span>5</span>
                                                        </li>
                                                        <li><a href="#" title="" itemprop="url">Italian</a>
                                                            <span>5</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="widget style2 quick_filters">
                                                <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Quick
                                                    Filters</h4>
                                                <div class="widget-data">
                                                    <ul>
                                                        <li><span class="radio-box"><input type="radio" name="filter"
                                                                                           id="filt1-1"><label
                                                                    for="filt1-1">Promotions</label></span></li>
                                                        <li><span class="radio-box"><input type="radio" name="filter"
                                                                                           id="filt1-2"><label
                                                                    for="filt1-2">Bookmarked</label></span></li>
                                                        <li><span class="radio-box"><input type="radio" name="filter"
                                                                                           id="filt1-3"><label
                                                                    for="filt1-3">Pure veg</label></span></li>
                                                        <li><span class="radio-box"><input type="radio" name="filter"
                                                                                           id="filt1-4"><label
                                                                    for="filt1-4">Free Delivery</label></span></li>
                                                        <li><span class="radio-box"><input type="radio" name="filter"
                                                                                           id="filt1-5"><label
                                                                    for="filt1-5">Online Payments</label></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div><!--Sidebar -->
                                    </div>
                                    <div class="col-md-9 col-sm-12 col-lg-9">
                                        <div class="title2-wrapper">
                                            <h3 class="marginb-0" itemprop="headline">Restaurant's Found 3</h3>
                                        </div>
                                        <div class="remove-ext">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div
                                                        class="featured-restaurant-box with-bg style2 brd-rd12 wow fadeIn"
                                                        data-wow-delay="0.1s">
                                                        <div class="featured-restaurant-thumb">
                                                            <a href="restaurant-detail.html" title=""
                                                               itemprop="url"><img
                                                                    src="images/resource/most-popular-img1.png"
                                                                    alt="most-popular-img1.png" itemprop="image"></a>
                                                        </div>
                                                        <div class="featured-restaurant-info">
                                                            <span class="red-clr">5th Avenue New York 68</span>
                                                            <h4 itemprop="headline"><a href="restaurant-detail.html"
                                                                                       title="" itemprop="url">Domino's
                                                                    Pizza</a></h4>
                                                            <span class="food-types">Type of food: <a href="#" title=""
                                                                                                      itemprop="url">Apple Juice</a>, <a
                                                                    href="#" title="" itemprop="url">BB.Q</a></span>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-check-circle-o"></i> Min order $50
                                                                </li>
                                                                <li><i class="flaticon-transport"></i> 30min</li>
                                                                <li><i class="flaticon-money"></i> Accepts cash & online
                                                                    payments
                                                                </li>
                                                            </ul>
                                                            <span class="post-rate yellow-bg brd-rd2"><i
                                                                    class="fa fa-star-o"></i> 4.25</span>
                                                            <a class="brd-rd30" href="restaurant-detail.html"
                                                               title="Order Online"><i
                                                                    class="fa fa-angle-double-right"></i> Order
                                                                Online</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div
                                                        class="featured-restaurant-box with-bg style2 brd-rd12 wow fadeIn"
                                                        data-wow-delay="0.2s">
                                                        <div class="featured-restaurant-thumb">
                                                            <a href="restaurant-detail.html" title=""
                                                               itemprop="url"><img
                                                                    src="images/resource/most-popular-img2.png"
                                                                    alt="most-popular-img2.png" itemprop="image"></a>
                                                        </div>
                                                        <div class="featured-restaurant-info">
                                                            <span class="red-clr">5th Avenue New York 68</span>
                                                            <h4 itemprop="headline"><a href="restaurant-detail.html"
                                                                                       title="" itemprop="url">Burger
                                                                    King</a></h4>
                                                            <span class="food-types">Type of food: <a href="#" title=""
                                                                                                      itemprop="url">Apple Juice</a>, <a
                                                                    href="#" title="" itemprop="url">BB.Q</a></span>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-check-circle-o"></i> Min order $50
                                                                </li>
                                                                <li><i class="flaticon-transport"></i> 30min</li>
                                                                <li><i class="flaticon-money"></i> Accepts cash & online
                                                                    payments
                                                                </li>
                                                            </ul>
                                                            <span class="post-rate yellow-bg brd-rd2"><i
                                                                    class="fa fa-star-o"></i> 4.25</span>
                                                            <a class="brd-rd30" href="restaurant-detail.html"
                                                               title="Order Online"><i
                                                                    class="fa fa-angle-double-right"></i> Order
                                                                Online</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div
                                                        class="featured-restaurant-box with-bg style2 brd-rd12 wow fadeIn"
                                                        data-wow-delay="0.3s">
                                                        <div class="featured-restaurant-thumb">
                                                            <a href="restaurant-detail.html" title=""
                                                               itemprop="url"><img
                                                                    src="images/resource/most-popular-img3.png"
                                                                    alt="most-popular-img3.png" itemprop="image"></a>
                                                        </div>
                                                        <div class="featured-restaurant-info">
                                                            <span class="red-clr">5th Avenue New York 68</span>
                                                            <h4 itemprop="headline"><a href="restaurant-detail.html"
                                                                                       title="" itemprop="url">Wendy's
                                                                    Cafe</a></h4>
                                                            <span class="food-types">Type of food: <a href="#" title=""
                                                                                                      itemprop="url">Apple Juice</a>, <a
                                                                    href="#" title="" itemprop="url">BB.Q</a></span>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-check-circle-o"></i> Min order $50
                                                                </li>
                                                                <li><i class="flaticon-transport"></i> 30min</li>
                                                                <li><i class="flaticon-money"></i> Accepts cash & online
                                                                    payments
                                                                </li>
                                                            </ul>
                                                            <span class="post-rate yellow-bg brd-rd2"><i
                                                                    class="fa fa-star-o"></i> 4.25</span>
                                                            <a class="brd-rd30" href="restaurant-detail.html"
                                                               title="Order Online"><i
                                                                    class="fa fa-angle-double-right"></i> Order
                                                                Online</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div
                                                        class="featured-restaurant-box with-bg style2 brd-rd12 wow fadeIn"
                                                        data-wow-delay="0.4s">
                                                        <div class="featured-restaurant-thumb">
                                                            <a href="restaurant-detail.html" title=""
                                                               itemprop="url"><img
                                                                    src="images/resource/most-popular-img4.png"
                                                                    alt="most-popular-img4.png" itemprop="image"></a>
                                                        </div>
                                                        <div class="featured-restaurant-info">
                                                            <span class="red-clr">5th Avenue New York 68</span>
                                                            <h4 itemprop="headline"><a href="restaurant-detail.html"
                                                                                       title="" itemprop="url">Restaurant</a>
                                                            </h4>
                                                            <span class="food-types">Type of food: <a href="#" title=""
                                                                                                      itemprop="url">Apple Juice</a>, <a
                                                                    href="#" title="" itemprop="url">BB.Q</a></span>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-check-circle-o"></i> Min order $50
                                                                </li>
                                                                <li><i class="flaticon-transport"></i> 30min</li>
                                                                <li><i class="flaticon-money"></i> Accepts cash & online
                                                                    payments
                                                                </li>
                                                            </ul>
                                                            <span class="post-rate yellow-bg brd-rd2"><i
                                                                    class="fa fa-star-o"></i> 4.25</span>
                                                            <a class="brd-rd30" href="restaurant-detail.html"
                                                               title="Order Online"><i
                                                                    class="fa fa-angle-double-right"></i> Order
                                                                Online</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div
                                                        class="featured-restaurant-box with-bg style2 brd-rd12 wow fadeIn"
                                                        data-wow-delay="0.5s">
                                                        <div class="featured-restaurant-thumb">
                                                            <a href="restaurant-detail.html" title=""
                                                               itemprop="url"><img
                                                                    src="images/resource/most-popular-img5.png"
                                                                    alt="most-popular-img5.png" itemprop="image"></a>
                                                        </div>
                                                        <div class="featured-restaurant-info">
                                                            <span class="red-clr">5th Avenue New York 68</span>
                                                            <h4 itemprop="headline"><a href="restaurant-detail.html"
                                                                                       title="" itemprop="url">Domino's
                                                                    Pizza</a></h4>
                                                            <span class="food-types">Type of food: <a href="#" title=""
                                                                                                      itemprop="url">Apple Juice</a>, <a
                                                                    href="#" title="" itemprop="url">BB.Q</a></span>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-check-circle-o"></i> Min order $50
                                                                </li>
                                                                <li><i class="flaticon-transport"></i> 30min</li>
                                                                <li><i class="flaticon-money"></i> Accepts cash & online
                                                                    payments
                                                                </li>
                                                            </ul>
                                                            <span class="post-rate yellow-bg brd-rd2"><i
                                                                    class="fa fa-star-o"></i> 4.25</span>
                                                            <a class="brd-rd30" href="restaurant-detail.html"
                                                               title="Order Online"><i
                                                                    class="fa fa-angle-double-right"></i> Order
                                                                Online</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-lg-6">
                                                    <div
                                                        class="featured-restaurant-box with-bg style2 brd-rd12 wow fadeIn"
                                                        data-wow-delay="0.6s">
                                                        <div class="featured-restaurant-thumb">
                                                            <a href="restaurant-detail.html" title=""
                                                               itemprop="url"><img
                                                                    src="images/resource/most-popular-img6.png"
                                                                    alt="most-popular-img6.png" itemprop="image"></a>
                                                        </div>
                                                        <div class="featured-restaurant-info">
                                                            <span class="red-clr">5th Avenue New York 68</span>
                                                            <h4 itemprop="headline"><a href="restaurant-detail.html"
                                                                                       title="" itemprop="url">Domino's
                                                                    Pizza</a></h4>
                                                            <span class="food-types">Type of food: <a href="#" title=""
                                                                                                      itemprop="url">Apple Juice</a>, <a
                                                                    href="#" title="" itemprop="url">BB.Q</a></span>
                                                            <ul class="post-meta">
                                                                <li><i class="fa fa-check-circle-o"></i> Min order $50
                                                                </li>
                                                                <li><i class="flaticon-transport"></i> 30min</li>
                                                                <li><i class="flaticon-money"></i> Accepts cash & online
                                                                    payments
                                                                </li>
                                                            </ul>
                                                            <span class="post-rate yellow-bg brd-rd2"><i
                                                                    class="fa fa-star-o"></i> 4.25</span>
                                                            <a class="brd-rd30" href="restaurant-detail.html"
                                                               title="Order Online"><i
                                                                    class="fa fa-angle-double-right"></i> Order
                                                                Online</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="rite-meta">
                                                    <button type="button" class="view-more">
                                                        <span>view more</span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection