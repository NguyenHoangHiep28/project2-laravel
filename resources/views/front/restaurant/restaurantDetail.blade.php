@extends('front.layout.master')
@section('title', 'FoodChow - Cloud Kitchen')
@section('body')

    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Restaurant</a></li>
                <li class="breadcrumb-item active">Restaurant Details</li>
            </ol>
        </div>
    </div>

    <section>
        <div class="block gray-bg top-padd30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="sec-box">
                            <div class="sec-wrapper">
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-lg-8">
                                        <div class="restaurant-detail-wrapper">
                                            <div class="restaurant-detail-info">
                                                <div class="restaurant-detail-thumb">
                                                    <ul class="restaurant-detail-img-carousel">
                                                        <li><img class="brd-rd3" src="images/resource/restaurant-detail-big-img1-1.jpg" alt="restaurant-detail-big-img1-1.jpg" itemprop="image"></li>
                                                        <li><img class="brd-rd3" src="images/resource/restaurant-detail-big-img1-2.jpg" alt="restaurant-detail-big-img1-2.jpg" itemprop="image"></li>
                                                        <li><img class="brd-rd3" src="images/resource/restaurant-detail-big-img1-3.jpg" alt="restaurant-detail-big-img1-3.jpg" itemprop="image"></li>
                                                        <li><img class="brd-rd3" src="images/resource/restaurant-detail-big-img1-4.jpg" alt="restaurant-detail-big-img1-4.jpg" itemprop="image"></li>
                                                    </ul>
                                                    <ul class="restaurant-detail-thumb-carousel">
                                                        <li><img class="brd-rd3" src="images/resource/restaurant-detail-small-img1-1.jpg" alt="restaurant-detail-small-img1-1.jpg" itemprop="image"></li>
                                                        <li><img class="brd-rd3" src="images/resource/restaurant-detail-small-img1-2.jpg" alt="restaurant-detail-small-img1-2.jpg" itemprop="image"></li>
                                                        <li><img class="brd-rd3" src="images/resource/restaurant-detail-small-img1-3.jpg" alt="restaurant-detail-small-img1-3.jpg" itemprop="image"></li>
                                                        <li><img class="brd-rd3" src="images/resource/restaurant-detail-small-img1-4.jpg" alt="restaurant-detail-small-img1-4.jpg" itemprop="image"></li>
                                                    </ul>
                                                </div>
                                                <div class="restaurant-detail-title">
                                                    <h1 itemprop="headline">Nik Baker's</h1>
                                                    <div class="info-meta">
                                                        <span>Greater Kailash (GK) 2</span>
                                                        <span><a href="#" title="" itemprop="url">Bakery</a>, <a href="#" title="" itemprop="url">Cafe</a></span>
                                                    </div>
                                                    <div class="rating-wrapper">
                                                        <a class="gradient-brd brd-rd2" href="#" title="" itemprop="url"><i class="fa fa-star"></i> Rate <i>4.0</i></a>
                                                        <div class="rate-share brd-rd5">
                                                            <div class="rating-box-wrapper">
                                                                <span>Rate</span>
                                                                <div class="rating-box">
                                                                    <span class="brd-rd2 clr1 on"></span>
                                                                    <span class="brd-rd2 clr2 on"></span>
                                                                    <span class="brd-rd2 clr3 on"></span>
                                                                    <span class="brd-rd2 clr4 on"></span>
                                                                    <span class="brd-rd2 clr5 on"></span>
                                                                    <span class="brd-rd2 clr6 on"></span>
                                                                    <span class="brd-rd2 clr7 off"></span>
                                                                    <span class="brd-rd2 clr8 off"></span>
                                                                    <i>4.0</i>
                                                                </div>
                                                            </div>
                                                            <div class="share-wrapper">
                                                                <div class="fb-share">
                                                                    <label class="switch">
                                                                        <input type="checkbox">
                                                                        <span class="switch-slider brd-rd30"></span>
                                                                    </label>
                                                                    <a class="facebook brd-rd2" href="#" title="" itemprop="url"><i class="fa fa-facebook-square"></i> Share on Facebook</a>
                                                                </div>
                                                                <div class="fb-share">
                                                                    <label class="switch">
                                                                        <input type="checkbox">
                                                                        <span class="switch-slider brd-rd30"></span>
                                                                    </label>
                                                                    <a class="twitter brd-rd2" href="#" title="" itemprop="url"><i class="fa fa-twitter"></i> Share on Twitter</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="restaurant-detail-tabs">
                                                    <ul class="nav nav-tabs">
                                                        <li class="active"><a href="#tab1-1" data-toggle="tab"><i class="fa fa-cutlery"></i> Menu</a></li>
                                                        <li><a href="#tab1-2" data-toggle="tab"><i class="fa fa-picture-o"></i> Gallery</a></li>
                                                        <li><a href="#tab1-3" data-toggle="tab"><i class="fa fa-star"></i> Reviews</a></li>
                                                        <li><a href="#tab1-5" data-toggle="tab"><i class="fa fa-info"></i> Restaurant Info</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade in active" id="tab1-1">
                                                            <form class="search-dish">
                                                                <input type="text" placeholder="Search here">
                                                                <button type="submit"><i class="fa fa-search"></i></button>
                                                            </form>
                                                            <div class="dishes-list-wrapper">
                                                                <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Pizza</span></h4>
                                                                <span class="post-rate red-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                                <ul class="dishes-list">
                                                                    <li class="wow fadeInUp" data-wow-delay="0.1s">
                                                                        <div class="featured-restaurant-box">
                                                                            <div class="featured-restaurant-thumb">
                                                                                <a href="#" title="" itemprop="url"><img src="images/resource/dish-img1-1.jpg" alt="dish-img1-1.jpg" itemprop="image"></a>
                                                                            </div>
                                                                            <div class="featured-restaurant-info">
                                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">Pizza Takeaway</a></h4>
                                                                                <span class="price">$85.00</span>
                                                                                <p itemprop="description">Lorem Ipsum is simply dummy text of the printing industry</p>
                                                                                <ul class="post-meta">
                                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="ord-btn">
                                                                                <a class="brd-rd2" href="#" title="Order Now" itemprop="url">ADD TO CART</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="wow fadeInUp" data-wow-delay="0.2s">
                                                                        <div class="featured-restaurant-box">
                                                                            <div class="featured-restaurant-thumb">
                                                                                <a href="#" title="" itemprop="url"><img src="images/resource/dish-img1-2.jpg" alt="dish-img1-2.jpg" itemprop="image"></a>
                                                                            </div>
                                                                            <div class="featured-restaurant-info">
                                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">Extra Cheese Pizza</a></h4>
                                                                                <span class="price">$85.00</span>
                                                                                <p itemprop="description">Lorem Ipsum is simply dummy text of the printing industry</p>
                                                                                <ul class="post-meta">
                                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="ord-btn">
                                                                                <a class="brd-rd2" href="#" title="Order Now" itemprop="url">ADD TO CART</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="wow fadeInUp" data-wow-delay="0.3s">
                                                                        <div class="featured-restaurant-box">
                                                                            <div class="featured-restaurant-thumb">
                                                                                <a href="#" title="" itemprop="url"><img src="images/resource/dish-img1-3.jpg" alt="dish-img1-3.jpg" itemprop="image"></a>
                                                                            </div>
                                                                            <div class="featured-restaurant-info">
                                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">Pizza Oven Testing Pronto</a></h4>
                                                                                <span class="price">$85.00</span>
                                                                                <p itemprop="description">Lorem Ipsum is simply dummy text of the printing industry</p>
                                                                                <ul class="post-meta">
                                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="ord-btn">
                                                                                <a class="brd-rd2" href="#" title="Order Now" itemprop="url">ADD TO CART</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="wow fadeInUp" data-wow-delay="0.4s">
                                                                        <div class="featured-restaurant-box">
                                                                            <div class="featured-restaurant-thumb">
                                                                                <a href="#" title="" itemprop="url"><img src="images/resource/dish-img1-4.jpg" alt="dish-img1-4.jpg" itemprop="image"></a>
                                                                            </div>
                                                                            <div class="featured-restaurant-info">
                                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">Chicken Bacon Ranch</a></h4>
                                                                                <span class="price">$85.00</span>
                                                                                <p itemprop="description">Lorem Ipsum is simply dummy text of the printing industry</p>
                                                                                <ul class="post-meta">
                                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="ord-btn">
                                                                                <a class="brd-rd2" href="#" title="Order Now" itemprop="url">ADD TO CART</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="dishes-list-wrapper">
                                                                <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Burgers</span></h4>
                                                                <span class="post-rate red-bg brd-rd2"><i class="fa fa-star-o"></i> 4.25</span>
                                                                <ul class="dishes-list">
                                                                    <li class="wow fadeInUp" data-wow-delay="0.2s">
                                                                        <div class="featured-restaurant-box">
                                                                            <div class="featured-restaurant-thumb">
                                                                                <a href="#" title="" itemprop="url"><img src="images/resource/dish-img2-1.jpg" alt="dish-img2-1.jpg" itemprop="image"></a>
                                                                            </div>
                                                                            <div class="featured-restaurant-info">
                                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">Bacon Gouda Burger</a></h4>
                                                                                <span class="price">$85.00</span>
                                                                                <p itemprop="description">Lorem Ipsum is simply dummy text of the printing industry</p>
                                                                                <ul class="post-meta">
                                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="ord-btn">
                                                                                <a class="brd-rd2" href="#" title="Order Now" itemprop="url">ADD TO CART</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="wow fadeInUp" data-wow-delay="0.3s">
                                                                        <div class="featured-restaurant-box">
                                                                            <div class="featured-restaurant-thumb">
                                                                                <a href="#" title="" itemprop="url"><img src="images/resource/dish-img2-2.jpg" alt="dish-img2-2.jpg" itemprop="image"></a>
                                                                            </div>
                                                                            <div class="featured-restaurant-info">
                                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">Tribeca Chicken Burger</a></h4>
                                                                                <span class="price">$85.00</span>
                                                                                <p itemprop="description">Lorem Ipsum is simply dummy text of the printing industry</p>
                                                                                <ul class="post-meta">
                                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="ord-btn">
                                                                                <a class="brd-rd2" href="#" title="Order Now" itemprop="url">ADD TO CART</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="wow fadeInUp" data-wow-delay="0.4s">
                                                                        <div class="featured-restaurant-box">
                                                                            <div class="featured-restaurant-thumb">
                                                                                <a href="#" title="" itemprop="url"><img src="images/resource/dish-img2-3.jpg" alt="dish-img2-3.jpg" itemprop="image"></a>
                                                                            </div>
                                                                            <div class="featured-restaurant-info">
                                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">Charburger</a></h4>
                                                                                <span class="price">$85.00</span>
                                                                                <p itemprop="description">Lorem Ipsum is simply dummy text of the printing industry</p>
                                                                                <ul class="post-meta">
                                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="ord-btn">
                                                                                <a class="brd-rd2" href="#" title="Order Now" itemprop="url">ADD TO CART</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="wow fadeInUp" data-wow-delay="0.5s">
                                                                        <div class="featured-restaurant-box">
                                                                            <div class="featured-restaurant-thumb">
                                                                                <a href="#" title="" itemprop="url"><img src="images/resource/dish-img2-4.jpg" alt="dish-img2-4.jpg" itemprop="image"></a>
                                                                            </div>
                                                                            <div class="featured-restaurant-info">
                                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">Salads & Veggies Burger</a></h4>
                                                                                <span class="price">$85.00</span>
                                                                                <p itemprop="description">Lorem Ipsum is simply dummy text of the printing industry</p>
                                                                                <ul class="post-meta">
                                                                                    <li><i class="fa fa-check-circle-o"></i> Min order $50</li>
                                                                                    <li><i class="flaticon-transport"></i> 30min</li>
                                                                                </ul>
                                                                            </div>
                                                                            <div class="ord-btn">
                                                                                <a class="brd-rd2" href="#" title="Order Now" itemprop="url">ADD TO CART</a>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab1-2">
                                                            <div class="restaurant-gallery">
                                                                <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Nik B</span>aker's Gallery</h4>
                                                                <div class="remove-ext">
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <div class="restaurant-gallery-img"><a href="images/resource/restaurant-gallery-img1.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="images/resource/restaurant-gallery-img1.jpg" alt="restaurant-gallery-img1.jpg" itemprop="image"></a></div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <div class="restaurant-gallery-img"><a href="images/resource/restaurant-gallery-img2.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="images/resource/restaurant-gallery-img2.jpg" alt="restaurant-gallery-img2.jpg" itemprop="image"></a></div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                                            <div class="restaurant-gallery-img"><a href="images/resource/restaurant-gallery-img3.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="images/resource/restaurant-gallery-img3.jpg" alt="restaurant-gallery-img3.jpg" itemprop="image"></a></div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <div class="restaurant-gallery-img"><a href="images/resource/restaurant-gallery-img4.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="images/resource/restaurant-gallery-img4.jpg" alt="restaurant-gallery-img4.jpg" itemprop="image"></a></div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <div class="restaurant-gallery-img"><a href="images/resource/restaurant-gallery-img5.jpg" data-fancybox="gallery" title="" itemprop="url"><img src="images/resource/restaurant-gallery-img5.jpg" alt="restaurant-gallery-img5.jpg" itemprop="image"></a></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab1-3">
                                                            <div class="customer-review-wrapper">
                                                                <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Custo</span>mer Reviews</h4>
                                                                <ul class="comments-thread customer-reviews">
                                                                    <li>
                                                                        <div class="comment">
                                                                            <img class="brd-rd50" src="images/resource/review-img1.jpg" alt="review-img1.jpg" itemprop="image">
                                                                            <div class="comment-info">
                                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">John Mathur</a></h4>
                                                                                <p itemprop="description">Lorem ipsum dolor sit amet, pri nusquam petentium at. In mutat omnes homero mea, pro delenit accusam eu</p>
                                                                                <span class="customer-rating">
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star"></i>
                                                                                        <span>(4)</span>
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="comment">
                                                                            <img class="brd-rd50" src="images/resource/review-img2.jpg" alt="review-img2.jpg" itemprop="image">
                                                                            <div class="comment-info">
                                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">John Mathur</a></h4>
                                                                                <p itemprop="description">Lorem ipsum dolor sit amet, pri nusquam petentium at. In mutat omnes homero mea, pro delenit accusam eu</p>
                                                                                <span class="customer-rating">
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star"></i>
                                                                                        <span>(4)</span>
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="comment">
                                                                            <img class="brd-rd50" src="images/resource/review-img3.jpg" alt="review-img3.jpg" itemprop="image">
                                                                            <div class="comment-info">
                                                                                <h4 itemprop="headline"><a href="#" title="" itemprop="url">John Mathur</a></h4>
                                                                                <p itemprop="description">Lorem ipsum dolor sit amet, pri nusquam petentium at. In mutat omnes homero mea, pro delenit accusam eu</p>
                                                                                <span class="customer-rating">
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star-o"></i>
                                                                                        <i class="fa fa-star"></i>
                                                                                        <span>(4)</span>
                                                                                    </span>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div class="your-review">
                                                                    <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Write</span> Review Here</h4>
                                                                    <form class="review-form">
                                                                        <textarea class="brd-rd5">Lorem ipsum dolor sit amet, pri nusquam petentium at. In mutatomnes homero mea, pro delenit accusam eu</textarea>
                                                                        <button class="brd-rd2 red-bg" type="submit">POST REVIEW</button>
                                                                        <div class="rate-box">
                                                                            <span>RATE US</span>
                                                                            <div class="rating-box">
                                                                                <span class="brd-rd2 clr1 on"></span>
                                                                                <span class="brd-rd2 clr2 on"></span>
                                                                                <span class="brd-rd2 clr3 on"></span>
                                                                                <span class="brd-rd2 clr4 on"></span>
                                                                                <span class="brd-rd2 clr5 on"></span>
                                                                                <span class="brd-rd2 clr6 on"></span>
                                                                                <span class="brd-rd2 clr7 off"></span>
                                                                                <span class="brd-rd2 clr8 off"></span>
                                                                                <i>4.0</i>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab1-4">
                                                            <div class="book-table">
                                                                <h4 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Book</span> This Restaurant Table</h4>
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <div class="input-field brd-rd2"><i class="fa fa-user"></i> <input type="text" placeholder="NAME"></div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <div class="input-field brd-rd2"><i class="fa fa-phone"></i> <input type="text" placeholder="PHONE"></div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <div class="select-wrp2">
                                                                                <select>
                                                                                    <option>Questions</option>
                                                                                    <option>Questions No 1</option>
                                                                                    <option>Questions No 2</option>
                                                                                    <option>Questions No 3</option>
                                                                                </select>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <div class="input-field brd-rd2"><i class="fa fa-envelope"></i> <input type="email" placeholder="EMAIL"></div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <div class="input-field brd-rd2"><i class="fa fa-calendar"></i> <input class="datepicker" type="text" placeholder="SELECT DATE"></div>
                                                                        </div>
                                                                        <div class="col-md-6 col-sm-6 col-lg-6">
                                                                            <div class="input-field brd-rd2"><i class="fa fa-clock-o"></i> <input class="timepicker" type="text" placeholder="SELECT Time"></div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                                            <div class="textarea-field brd-rd2"><i class="fa fa-pencil"></i> <textarea placeholder="Your Instruction"></textarea></div>
                                                                        </div>
                                                                        <div class="col-md-12 col-sm-12 col-lg-12">
                                                                            <button class="brd-rd2 red-bg" type="submit">POST PREVIEW</button>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        <div class="tab-pane fade" id="tab1-5">
                                                            <div class="restaurant-info-wrapper">
                                                                <h3 class="title3" itemprop="headline"><span class="sudo-bottom sudo-bg-red">Book</span> This Restaurant Table</h3>

                                                                <ul class="restaurant-info-list">
                                                                    <li>
                                                                        <i class="fa fa-map-marker red-clr"></i>
                                                                        <strong>Address :</strong>
                                                                        <span>2nd Street, East-West Mansion Flat A2 231 Newyork NY 10003</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-phone red-clr"></i>
                                                                        <strong>Call us & Hire us</strong>
                                                                        <span>+32 (0) 598 65 8968</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-envelope-o red-clr"></i>
                                                                        <strong>Have any questions?</strong>
                                                                        <span>Support@webinane.com</span>
                                                                    </li>
                                                                    <li>
                                                                        <i class="fa fa-fax red-clr"></i>
                                                                        <strong>Fax</strong>
                                                                        <span>+652 235 89658965</span>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div style="padding-left: 70px;" class="col-md-4 col-sm-12 col-lg-4">
                                        <div class="sidebar right">
                                            <div class="widget style2 Search_filters wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                                <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Search Filters</h4>
                                                <div class="widget-data">
                                                    <ul>
                                                        <li><a href="#" title="" itemprop="url">Fast Food</a> <span>30</span></li>
                                                        <li><a href="#" title="" itemprop="url">North Indian</a> <span>28</span></li>
                                                        <li><a href="#" title="" itemprop="url">Chinese</a> <span>25</span></li>
                                                        <li><a href="#" title="" itemprop="url">Bakery</a> <span>11</span></li>
                                                        <li><a href="#" title="" itemprop="url">Mughlai</a> <span>7</span></li>
                                                        <li><a href="#" title="" itemprop="url">Pizza</a> <span>6</span></li>
                                                        <li><a href="#" title="" itemprop="url">Ice Cream</a> <span>6</span></li>
                                                        <li><a href="#" title="" itemprop="url">Rolls</a> <span>6</span></li>
                                                        <li><a href="#" title="" itemprop="url">Cafe</a> <span>5</span></li>
                                                        <li><a href="#" title="" itemprop="url">Italian</a> <span>5</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="widget style2 quick_filters wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                                <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Quick Filters</h4>
                                                <div class="widget-data">
                                                    <ul>
                                                        <li><span class="radio-box"><input type="radio" name="filter" id="filt1-1"><label for="filt1-1">Promotions</label></span></li>
                                                        <li><span class="radio-box"><input type="radio" name="filter" id="filt1-2"><label for="filt1-2">Bookmarked</label></span></li>
                                                        <li><span class="radio-box"><input type="radio" name="filter" id="filt1-3"><label for="filt1-3">Pure veg</label></span></li>
                                                        <li><span class="radio-box"><input type="radio" name="filter" id="filt1-4"><label for="filt1-4">Free Delivery</label></span></li>
                                                        <li><span class="radio-box"><input type="radio" name="filter" id="filt1-5"><label for="filt1-5">Online Payments</label></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="widget style2 quick_filters wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                                <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Quick Filters</h4>
                                                <div class="widget-data">
                                                    <ul>
                                                        <li><span class="radio-box"><input type="radio" name="filter2" id="filt2-1"><label for="filt2-1">No minimum order 6</label></span></li>
                                                        <li><span class="radio-box"><input type="radio" name="filter2" id="filt2-2"><label for="filt2-2">Up to ₹150 69</label></span></li>
                                                        <li><span class="radio-box"><input type="radio" name="filter2" id="filt2-3"><label for="filt2-3">Up to ₹250 72</label></span></li>
                                                        <li><span class="radio-box"><input type="radio" name="filter2" id="filt2-4"><label for="filt2-4">Up to ₹500</label></span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="widget style2 popular_posts wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                                <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Popular Posts</h4>
                                                <div class="widget-data">
                                                    <div class="mini-posts-list">
                                                        <div class="mini-post-item">
                                                            <a href="blog-detail-right-sidebar.html" title="" itemprop="url"><img class="brd-rd2" src="images/resource/popular-post-img1.jpg" alt="popular-post-img1.jpg" itemprop="image"></a>
                                                            <div class="mini-post-info">
                                                                <h5 itemprop="headline"><a href="blog-detail-right-sidebar.html" title="" itemprop="url">Food Tech</a></h5>
                                                                <span class="mini-post-data"><i class="fa fa-clock-o"></i> August 10, 2017</span>
                                                            </div>
                                                        </div>
                                                        <div class="mini-post-item">
                                                            <a href="blog-detail-left-sidebar.html" title="" itemprop="url"><img class="brd-rd2" src="images/resource/popular-post-img2.jpg" alt="popular-post-img2.jpg" itemprop="image"></a>
                                                            <div class="mini-post-info">
                                                                <h5 itemprop="headline"><a href="blog-detail-left-sidebar.html" title="" itemprop="url">Food Tech</a></h5>
                                                                <span class="mini-post-data"><i class="fa fa-clock-o"></i> November 12, 2017</span>
                                                            </div>
                                                        </div>
                                                        <div class="mini-post-item">
                                                            <a href="blog-detail.html" title="" itemprop="url"><img class="brd-rd2" src="images/resource/popular-post-img3.jpg" alt="popular-post-img3.jpg" itemprop="image"></a>
                                                            <div class="mini-post-info">
                                                                <h5 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Food Tech</a></h5>
                                                                <span class="mini-post-data"><i class="fa fa-clock-o"></i> May 15, 2017</span>
                                                            </div>
                                                        </div>
                                                        <div class="mini-post-item">
                                                            <a href="blog-detail-right-sidebar.html" title="" itemprop="url"><img class="brd-rd2" src="images/resource/popular-post-img4.jpg" alt="popular-post-img4.jpg" itemprop="image"></a>
                                                            <div class="mini-post-info">
                                                                <h5 itemprop="headline"><a href="blog-detail-right-sidebar.html" title="" itemprop="url">Food Tech</a></h5>
                                                                <span class="mini-post-data"><i class="fa fa-clock-o"></i> March 20, 2017</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="widget style2 category_posts wow fadeIn" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeIn;">
                                                <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Categories</h4>
                                                <div class="widget-data">
                                                    <div class="mini-posts-list">
                                                        <div class="mini-post-item">
                                                            <a href="blog-detail-right-sidebar.html" title="" itemprop="url"><img class="brd-rd2" src="images/resource/popular-post-img2-1.jpg" alt="popular-post-img2-1.jpg" itemprop="image"></a>
                                                            <div class="mini-post-info">
                                                                <h5 itemprop="headline"><a href="blog-detail-right-sidebar.html" title="" itemprop="url">Food Tech</a></h5>
                                                                <span class="mini-post-data"><i class="fa fa-clock-o"></i> August 10, 2017</span>
                                                            </div>
                                                        </div>
                                                        <div class="mini-post-item">
                                                            <a href="blog-detail-left-sidebar.html" title="" itemprop="url"><img class="brd-rd2" src="images/resource/popular-post-img2-2.jpg" alt="popular-post-img2-2.jpg" itemprop="image"></a>
                                                            <div class="mini-post-info">
                                                                <h5 itemprop="headline"><a href="blog-detail-left-sidebar.html" title="" itemprop="url">Food Tech</a></h5>
                                                                <span class="mini-post-data"><i class="fa fa-clock-o"></i> November 12, 2017</span>
                                                            </div>
                                                        </div>
                                                        <div class="mini-post-item">
                                                            <a href="blog-detail.html" title="" itemprop="url"><img class="brd-rd2" src="images/resource/popular-post-img2-3.jpg" alt="popular-post-img2-3.jpg" itemprop="image"></a>
                                                            <div class="mini-post-info">
                                                                <h5 itemprop="headline"><a href="blog-detail.html" title="" itemprop="url">Food Tech</a></h5>
                                                                <span class="mini-post-data"><i class="fa fa-clock-o"></i> May 15, 2017</span>
                                                            </div>
                                                        </div>
                                                        <div class="mini-post-item">
                                                            <a href="blog-detail-right-sidebar.html" title="" itemprop="url"><img class="brd-rd2" src="images/resource/popular-post-img2-4.jpg" alt="popular-post-img2-4.jpg" itemprop="image"></a>
                                                            <div class="mini-post-info">
                                                                <h5 itemprop="headline"><a href="blog-detail-right-sidebar.html" title="" itemprop="url">Food Tech</a></h5>
                                                                <span class="mini-post-data"><i class="fa fa-clock-o"></i> March 20, 2017</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!--Sidebar -->
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
