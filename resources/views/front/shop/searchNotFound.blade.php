@extends('front.layout.master')
@section('body')
    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Search</a></li>
                <li class="breadcrumb-item active">Search Not Found</li>
            </ol>
        </div>
    </div>

    <section>
        <div class="block top-padd30 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="sec-box">
                        <div class="col-md-12 col-sm-12 col-lg-12">
                            <div class="row">
                                <div class="col-md-9 col-sm-12 col-lg-9">
                                    <div class="search-found">
                                        <h3 itemprop="headline">Search Result Found <span class="red-clr">"Food"</span>
                                        </h3>
                                        <p itemprop="description">Vivam pulput vehic Mauris porttitor erovel sapien Sed
                                            ut persp voluptatem accusanti...</p>
                                        <h2 itemprop="headline">No Results Found - Search a Relevant Keyword</h2>
                                        <form class="search-frm">
                                            <input type="text" placeholder="Search Keyword">
                                            <button class="red-bg" type="submit"><i class="fa fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-12 col-lg-3">
                                    <div class="sidebar">
                                        <div class="widget style2 quick_filters wow fadeIn" data-wow-delay="0.2s">
                                            <h4 class="widget-title2 sudo-bg-red" itemprop="headline">Quick Filters</h4>
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
                            </div>
                        </div>
                    </div><!-- Section Box -->
                </div>
            </div>

        </div>
    </section>
@endsection
