@extends('front.layout.master')
@section('body')
    <section>
        <div class="bread-crumbs-wrapper">
            <div class="container">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                    <li class="breadcrumb-item active">Food Details</li>
                </ol>
            </div>
        </div>
    </section>

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
                                                        @for($i=0; $i< count($product->productImages); $i++)
                                                            <li><img class="brd-rd3" style="width: 743px;height: 473px"
                                                                     src="images/resource/{{$product->productImages[$i]->path}}"
                                                                     alt="restaurant-detail-big-img1-1.jpg"
                                                                     itemprop="image"></li>
                                                        @endfor
                                                    </ul>
                                                    <ul class="restaurant-detail-thumb-carousel">
                                                        @for($i=0; $i< count($product->productImages); $i++)
                                                            <li><img class="brd-rd3" style="width: 89px; height: 56px"
                                                                     src="images/resource/{{$product->productImages[$i]->path}}"
                                                                     alt="restaurant-detail-small-img1-1.jpg"
                                                                     itemprop="image"></li>
                                                        @endfor
                                                    </ul>
                                                </div>
                                                <div class="restaurant-detail-title">

                                                    <h1 style="font-size: 28px"
                                                        itemprop="headline">{{$product->name}}</h1>
                                                    <div class="info-meta">
                                                        <span><a href="#">{{$product->restaurant->restaurant_name}}</a></span>
                                                        <span><a href="#" title=""
                                                                 itemprop="url">{{$product->category->cate_name}}</a></span>
                                                    </div>
                                                    <div class="rating-wrapper">
                                                        <a class="gradient-brd brd-rd2" href="" title="" itemprop="url"><i
                                                                class="fa fa-star"></i> Rate <i>{{$rating ?? 0.0}}</i></a>
                                                    </div>
                                                    <div style="margin-bottom: 10px">
                                                        @if($product->discount != null)
                                                            <span class="discount-price" style="display: inline-block">${{$product->price}}.00</span>
                                                            <span class="price" style="float: none">${{$product->discount}}.00</span>
                                                        @else
                                                            <span class="price" style="float: none">${{$product->price}}.00</span>
                                                        @endif
                                                    </div>
                                                    <div class="qty-wrap">
                                                        <input type="hidden" value="{{$product->id}}">
                                                        <input class="qty" name="qty" type="text" value="1">
                                                    </div>
                                                    <p itemprop="description">{{$product->description}}</p>
                                                    <a class="brd-rd3 detail-to-cart" href="" title="" itemprop="url"
                                                       style="margin-right: 30px;">Add to cart</a>
{{--                                                    <a class="brd-rd3" style="background-color: #ea1b25" href="#"--}}
{{--                                                       title="" itemprop="url">Order Now</a>--}}
                                                </div>
                                                <div class="restaurant-detail-tabs">
                                                    <ul class="nav nav-tabs">
                                                        <li><a href="#tab1-3" data-toggle="tab" aria-expanded="true"><i
                                                                    class="fa fa-star"></i> Reviews</a></li>
                                                    </ul>
                                                    <div class="tab-content">
                                                        <div class="tab-pane fade active in" id="tab1-3">
                                                            <div class="customer-review-wrapper">
                                                                <h4 class="title3" itemprop="headline"><span
                                                                        class="sudo-bottom sudo-bg-red">Custo</span>mer
                                                                    Reviews</h4>
                                                                <ul class="comments-thread customer-reviews">
                                                                    @if($comments != null)
                                                                        @foreach($comments as $comment)
                                                                            <li>
                                                                                <div class="comment">
                                                                                    <img class="brd-rd50" style="width: 110px; height: 110px"
                                                                                         src="images/user/{{$comment->user->avatar ?? 'default-user-avt.png'}}"
                                                                                         alt="review-img1.jpg"
                                                                                         itemprop="image">
                                                                                    <div class="comment-info">
                                                                                        <h4 itemprop="headline"><a
                                                                                                href="#"
                                                                                                title=""
                                                                                                itemprop="url">{{$comment->user->name}}</a></h4>
                                                                                        <p itemprop="description">{{$comment->messages}}</p>
                                                                                        <span class="customer-rating">
                                                                                            @if($comment->rating < 5)
                                                                                                @for($i = 1; $i <=$comment->rating; $i++)
                                                                                        <i class="fa fa-star on"></i>
                                                                                                @endfor
                                                                                                @for($j = 1; $j <= 5 - $comment->rating; $j++)
                                                                                                        <i class="fa fa-star-o"></i>
                                                                                                    @endfor
                                                                                            @else
                                                                                                <i class="fa fa-star on"></i>
                                                                                                <i class="fa fa-star on"></i>
                                                                                                <i class="fa fa-star on"></i>
                                                                                                <i class="fa fa-star on"></i>
                                                                                                <i class="fa fa-star-on"></i>
                                                                                            @endif
                                                                                        <span>({{$comment->rating}})</span>
                                                                                    </span>
                                                                                    </div>
                                                                                </div>
                                                                            </li>
                                                                        @endforeach
                                                                    @endif
                                                                    @if(count($comments) == 0)
                                                                        <div style="width: 100%; height: 200px"><h4 style="color: #5c5c5c">There is no comment about this food now.</h4></div>
                                                                    @endif
                                                                </ul>
                                                                @if(\Illuminate\Support\Facades\Auth::check())
                                                                    <div class="your-review">
                                                                        <h4 class="title3" itemprop="headline"><span
                                                                                class="sudo-bottom sudo-bg-red">Write</span>
                                                                            Review Here</h4>
                                                                        <form class="review-form" method="post"
                                                                              action="/product-review">
                                                                            @csrf
                                                                            <input type="hidden" name="product-id"
                                                                                   value="{{$product->id}}">
                                                                            <textarea class="brd-rd30" name="message"
                                                                                      placeholder="Your review"></textarea>
                                                                            <button class="brd-rd2 red-bg"
                                                                                    type="submit">
                                                                                POST REVIEW
                                                                            </button>
                                                                            <div class="rate-box">
                                                                                <span>RATE US</span>
                                                                                <div class="rate">
                                                                                    <input type="radio" id="star5"
                                                                                           name="rate" value="5"/>
                                                                                    <label for="star5">5
                                                                                        stars</label>
                                                                                    <input type="radio" id="star4"
                                                                                           name="rate" value="4"/>
                                                                                    <label for="star4">4
                                                                                        stars</label>
                                                                                    <input type="radio" id="star3"
                                                                                           name="rate" value="3"/>
                                                                                    <label for="star3">3
                                                                                        stars</label>
                                                                                    <input type="radio" id="star2"
                                                                                           name="rate" value="2"/>
                                                                                    <label for="star2">2
                                                                                        stars</label>
                                                                                    <input type="radio" id="star1"
                                                                                           name="rate" value="1"/>
                                                                                    <label for="star1">1
                                                                                        star</label>
                                                                                </div>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                @else
                                                                    <h4 style="color: #5c5c5c">You need login to review
                                                                        food !</h4>
                                                                @endif
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-sm-12 col-lg-4">
                                        <div class="order-wrapper">
                                            <div class="order-inner gradient-brd">
                                                <div class="widget style2 Search_filters">
                                                    <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Search
                                                        Filters</h4>
                                                    <div class="widget-data">
                                                        <ul>
                                                            <li><a href="#" title="" itemprop="url">Fast Food</a> <span>30</span>
                                                            </li>
                                                            <li><a href="#" title="" itemprop="url">North Indian</a>
                                                                <span>28</span></li>
                                                            <li><a href="#" title="" itemprop="url">Chinese</a>
                                                                <span>25</span></li>
                                                            <li><a href="#" title="" itemprop="url">Bakery</a>
                                                                <span>11</span></li>
                                                            <li><a href="#" title="" itemprop="url">Mughlai</a>
                                                                <span>7</span></li>
                                                            <li><a href="#" title="" itemprop="url">Pizza</a>
                                                                <span>6</span></li>
                                                            <li><a href="#" title="" itemprop="url">Ice Cream</a> <span>6</span>
                                                            </li>
                                                            <li><a href="#" title="" itemprop="url">Rolls</a>
                                                                <span>6</span></li>
                                                            <li><a href="#" title="" itemprop="url">Cafe</a>
                                                                <span>5</span></li>
                                                            <li><a href="#" title="" itemprop="url">Italian</a>
                                                                <span>5</span></li>
                                                        </ul>
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
        </div>
    </section>
@endsection

