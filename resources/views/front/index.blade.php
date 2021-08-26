@extends('front.layout.master')
@section('title', 'FoodChow - Cloud Kitchen')
@section('body')
    <section>
        <div class="block">
            <div style="background-image: url(images/parallax2.jpg);" class="fixed-bg"></div>
            <div class="restaurant-searching text-center">
                <div class="restaurant-searching-inner">
                    <h2 itemprop="headline">Order <span>Food Online From</span> the Best Restaurants</h2>
                    <form class="restaurant-search-form2 brd-rd30">
                        <input class="brd-rd30" type="text" placeholder="FEEL LIKE EATING ...">
                        <button class="brd-rd30 red-bg" type="submit">SEARCH</button>
                    </form>
                    <div class="funfacts">
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="fact-box">
                                <i class="brd-rd50"><img src="images/resource/fact-icon1.png" alt="fact-icon1"
                                                         itemprop="image"></i>
                                <div class="fact-inner">
                                    <strong><span class="counter">137</span></strong>
                                    <h5>Restaurant</h5>
                                </div>
                            </div><!-- Fact Box -->
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="fact-box">
                                <i class="brd-rd50"><img src="images/resource/fact-icon2.png" alt="fact-icon2"
                                                         itemprop="image"></i>
                                <div class="fact-inner">
                                    <strong><span class="counter">158</span></strong>
                                    <h5>People Served</h5>
                                </div>
                            </div><!-- Fact Box -->
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="fact-box">
                                <i class="brd-rd50"><img src="images/resource/fact-icon3.png" alt="fact-icon3"
                                                         itemprop="image"></i>
                                <div class="fact-inner">
                                    <strong><span class="counter">659</span>K</strong>
                                    <h5>Happy Service</h5>
                                </div>
                            </div><!-- Fact Box -->
                        </div>
                        <div class="col-md-3 col-sm-6 col-lg-3">
                            <div class="fact-box">
                                <i class="brd-rd50"><img src="images/resource/fact-icon4.png" alt="fact-icon4"
                                                         itemprop="image"></i>
                                <div class="fact-inner">
                                    <strong><span class="counter">235</span></strong>
                                    <h5>Regular users</h5>
                                </div>
                            </div><!-- Fact Box -->
                        </div>
                    </div><!-- Fun Facts -->
                </div>
                <img class="bottom-clouds-mockup" src="images/resource/clouds.png" alt="clouds.png" itemprop="image">
            </div><!-- Restaurant Searching -->
        </div>
    </section>

    <section>
        <div class="block remove-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="title1-wrapper text-center">
                            <div class="title1-inner">
                                <h2 itemprop="headline">Top Restaurants</h2>
                                <p itemprop="description">Things that get tricky are things like burgers and fries, or
                                    things that are deep-fried. We do have a couple of burger restaurants that are
                                    capable of doing a good job transporting but it's Fries are almost impossible.</p>
                            </div>
                        </div>
                        <div class="top-restaurants-wrapper">
                            <ul class="restaurants-wrapper style2">
                                @foreach($restaurants as $restaurant)
                                    <li class="wow bounceIn" data-wow-delay="0.2s">
                                    <div class="top-restaurant"><a class="brd-rd50" href="#" title=""
                                                                   itemprop="url"><img
                                                src="images/resource/{{$restaurant->avatar}}" alt="top-restaurant1.png"
                                                itemprop="image" style="width: 113px;height: 113px"></a></div>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- top restaurants -->

    <section>
        <div class="block">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="title1-wrapper text-center">
                            <div class="title1-inner">
                                <span>Tasty food near you</span>
                                <h2 itemprop="headline">Choose & Enjoy</h2>
                            </div>
                        </div>
                        <div class="row remove-ext5">
                            @foreach($products as $product)
                                <div class="col-md-4 col-sm-6 col-lg-4">
                                <div class="popular-dish-box wow fadeIn" data-wow-delay="0.2s">
                                    <div class="popular-dish-thumb">
                                        <a href="food-detail.html" title="" itemprop="url"><img
                                                src="images/resource/{{$product->productImages[0]->path}}"
                                                alt="popular-dish-img1.jpg" itemprop="image" style="width: 370px;height: 236px"></a>
                                        <span class="post-rate yellow-bg brd-rd2"><i
                                                class="fa fa-star-o"></i> 4.25</span>
                                    </div>
                                    <div class="popular-dish-info">
                                        <h4 itemprop="headline"><a href="food-detail.html" title="" itemprop="url">
                                                {{$product->name}}</a>
                                        </h4>
                                        <p itemprop="description">{{$product->description}}</p>
                                        @if($product->discount != null)
                                            <span class="discount-price">${{$product->price}}</span>
                                            <span class="price">${{$product->discount}}.00</span>
                                        @else
                                            <span class="price">${{$product->price}}.00</span>
                                        @endif
                                        <a class="brd-rd2 add-to-cart" href="/cart/add/{{\Illuminate\Support\Facades\Auth::id()}}/{{$product->id}}" title="Order Now" itemprop="url">Add
                                            to cart</a>
                                        <div class="restaurant-info">
                                            <img src="images/resource/{{$product->restaurant->avatar}}"
                                                 alt="{{$product->restaurant->avatar}}" itemprop="image" style="width: 66px;height: 66px">
                                            <div class="restaurant-info-inner">
                                                <h6 itemprop="headline"><a href="restaurant-detail.html" title=""
                                                                           itemprop="url">{{$product->restaurant->restaurant_name}}</a>
                                                </h6>
                                                <span class="red-clr">{{$product->restaurant->address}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- Popular Dish Box -->
                            </div>
                            @endforeach
                            <div class="rite-meta">
                                <a href="#" title="" class="view-more">view more food</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- choose and enjoy meal -->

    <section>
        <div class="block grayish low-opacity">
            <div class="fixed-bg" style="background-image: url(images/pattern.png)"></div>
            <div class="top-mockup"><img src="images/resource/mockup2.png" alt=""></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12 col-xs-12">
                        <div class="filters-wrapper">
                            <div class="title1-wrapper text-center">
                                <div class="title1-inner">
                                    <span>Find Favourite Food</span>
                                    <h2 itemprop="headline">Popular This Month</h2>
                                    <b>Near you</b>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="dishes-caro">
                            <div class="dish-item">
                                <figure><img src="images/resource/dish-caro1.jpg" alt="" style="width: 370px;height: 283px"></figure>
                                <div class="item-meta">
                                    <img src="images/resource/restaurant-logo2.png" alt="">
                                    <div>
                                        <span>Jagnetina Na Raznju</span>
                                        <p>68 5th Avenue New York </p>
                                    </div>
                                </div>
                                <div class="caro-dish-name">
                                    <h4>Korean Bibimbap Yamyam</h4>
                                    <span>$10.00–$30.00</span>
                                </div>
                            </div>
                            <div class="dish-item">
                                <figure><img src="images/resource/dish-caro1.jpg" alt=""></figure>
                                <div class="item-meta">
                                    <img src="images/resource/restaurant-logo3.png" alt="">
                                    <div>
                                        <span>Central Caffe Pizzeria</span>
                                        <p>68 5th Avenue New York </p>
                                    </div>
                                </div>
                                <div class="caro-dish-name">
                                    <h4>Korean Bibimbap Yamyam</h4>
                                    <span>$10.00–$30.00</span>
                                </div>
                            </div>
                            <div class="dish-item">
                                <figure><img src="images/resource/dish-caro1.jpg" alt=""></figure>
                                <div class="item-meta">
                                    <img src="images/resource/restaurant-logo4.png" alt="">
                                    <div>
                                        <span>Dream Food By Opaq</span>
                                        <p>68 5th Avenue New York </p>
                                    </div>
                                </div>
                                <div class="caro-dish-name">
                                    <h4>Korean Bibimbap Yamyam</h4>
                                    <span>$10.00–$30.00</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="popular-of-month">
                            @foreach($populars as $popular)
                                <div class="pop-dish wow fadeIn" data-wow-delay="0.3s">
                                    <div class="poplr-dish">
                                        <img src="images/resource/{{$popular->productImages[0]->path}}" alt="" style="width: 88px;height: 88px">
                                        <div class="dish-meta">
                                            @if($popular->discount != null)
                                                <span>${{$popular->discount}}.00</span>
                                            @else
                                                <span>${{$popular->price}}.00</span>
                                            @endif
                                            <h4><a href="#" title="">{{$popular->name}}</a></h4>
                                        </div>
                                    </div>
                                    <div class="item-meta">
                                        <img alt="" src="images/resource/{{$popular->restaurant->avatar}}">
                                        <div>
                                            <span>{{$popular->restaurant->restaurant_name}}</span>
                                            <p>{{$popular->restaurant->address}}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="rite-meta">
                            <a href="#" title="" class="view-more">view more food</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bottom-mockup"><img src="images/resource/mockup1.png" alt=""></div>
        </div>
    </section><!--popular this month-->

    <section>
        <div class="block blackish low-opacity">
            <div class="fixed-bg" style="background-image: url(images/parallax1.jpg);"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="title1-wrapper text-center">
                            <div class="title1-inner">
                                <span>Welcome to Cloud-Kitchen-Name</span>
                                <h2 class="text-white" itemprop="headline">easy order in 3 steps</h2>
                            </div>
                        </div>
                        <div class="remove-ext text-center">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="step-box wow fadeIn" data-wow-delay="0.2s">
                                        <i><img src="images/resource/setp-img1.png" alt="setp-img1.png"
                                                itemprop="image"> <span class="brd-rd50 red-bg">1</span></i>
                                        <div class="setp-box-inner">
                                            <h4 itemprop="headline">Explore Food & Restaurants</h4>
                                            <p itemprop="description">Just explore food from a great number of famous
                                                restaurants.</p>
                                        </div>
                                    </div><!-- Step Box -->
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="step-box wow fadeIn" data-wow-delay="0.4s">
                                        <i><img src="images/resource/setp-img2.png" alt="setp-img2.png"
                                                itemprop="image"> <span class="brd-rd50 red-bg">2</span></i>
                                        <div class="setp-box-inner">
                                            <h4 itemprop="headline">Choose a Tasty Dish</h4>
                                            <p itemprop="description">Find out the food that you love.</p>
                                        </div>
                                    </div><!-- Step Box -->
                                </div>
                                <div class="col-md-4 col-sm-4 col-lg-4">
                                    <div class="step-box wow fadeIn" data-wow-delay="0.6s">
                                        <i><img src="images/resource/setp-img3.png" alt="setp-img3.png"
                                                itemprop="image"> <span class="brd-rd50 red-bg">3</span></i>
                                        <div class="setp-box-inner">
                                            <h4 itemprop="headline">Follow The Status</h4>
                                            <p itemprop="description">Add your favorite food in cart and place an order
                                                now.</p>
                                        </div>
                                    </div><!-- Step Box -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- order steps -->
@endsection

