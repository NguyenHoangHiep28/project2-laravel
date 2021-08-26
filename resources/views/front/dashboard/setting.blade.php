@extends('front.layout.master')
@section('title', 'Dashboard')
@section('body')
    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                <li class="breadcrumb-item active">Account Setting</li>
            </ol>
        </div>
    </div>

    <section>
        <div class="block less-spacing gray-bg top-padd30">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-lg-12">
                        <div class="sec-box">
                            <div class="dashboard-tabs-wrapper">
                                <div class="row">
                                    <div class="col-md-4 col-sm-12 col-lg-4">
                                        <div class="profile-sidebar brd-rd5 wow fadeIn" data-wow-delay="0.2s">
                                            <div class="profile-sidebar-inner brd-rd5">
                                                @include('front.components.userInfo')
                                                <ul class="nav nav-tabs">
                                                    <li><a href="/dashboard/cart"><i
                                                                class="fa fa-shopping-basket"></i> MY CART</a></li>
                                                    <li><a href="/dashboard/orders"><i
                                                                class="fa fa-file-text"></i>MY ORDERS</a></li>
                                                    <li class="active"><a href="/dashboard/setting"><i
                                                                class="fa fa-cog"></i> ACCOUNT SETTINGS</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 col-lg-8">
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="account-settings">
                                                <div class="tabs-wrp account-settings brd-rd5">
                                                    <h4 itemprop="headline">ACCOUNT SETTINGS</h4>
                                                    <div class="account-settings-inner">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-4 col-lg-4">
                                                                <div class="profile-info text-center">
                                                                    <div class="profile-thumb brd-rd50">
                                                                        <img id="profile-display"
                                                                             src="images/resource/profile-img1.jpg"
                                                                             alt="profile-img1.jpg" itemprop="image">
                                                                    </div>
                                                                    <a class="red-clr change-password" href="#"
                                                                       title="" itemprop="url">Change Password</a>
                                                                    <div class="profile-img-upload-btn">
                                                                        <label
                                                                            class="fileContainer brd-rd5 yellow-bg">
                                                                            UPLOAD PICTURE
                                                                            <input id="profile-upload"
                                                                                   type="file"/>
                                                                        </label>
                                                                    </div>
                                                                    <p itemprop="description">Upload a profile
                                                                        picture or choose one of the following</p>
                                                                    <div class="default-img-lst">
                                                                        <img class="brd-rd50"
                                                                             src="images/resource/profile-thumb1.jpg"
                                                                             alt="profile-thumb1.jpg"
                                                                             itemprop="image">
                                                                        <img class="brd-rd50"
                                                                             src="images/resource/profile-thumb2.jpg"
                                                                             alt="profile-thumb2.jpg"
                                                                             itemprop="image">
                                                                        <img class="brd-rd50"
                                                                             src="images/resource/profile-thumb3.jpg"
                                                                             alt="profile-thumb3.jpg"
                                                                             itemprop="image">
                                                                        <img class="brd-rd50"
                                                                             src="images/resource/profile-thumb4.jpg"
                                                                             alt="profile-thumb4.jpg"
                                                                             itemprop="image">
                                                                        <img class="brd-rd50"
                                                                             src="images/resource/profile-thumb5.jpg"
                                                                             alt="profile-thumb5.jpg"
                                                                             itemprop="image">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-8 col-sm-8 col-lg-8">
                                                                <div class="profile-info-form-wrap">
                                                                    <form class="profile-info-form">
                                                                        <div class="row mrg20">
                                                                            <div
                                                                                class="col-md-12 col-sm-12 col-lg-12">
                                                                                <label>Complete Name
                                                                                    <sup>*</sup></label>
                                                                                <input class="brd-rd3" type="text"
                                                                                       placeholder="Enter Your Name">
                                                                            </div>
                                                                            <div
                                                                                class="col-md-12 col-sm-12 col-lg-12">
                                                                                <label>Email Address
                                                                                    <sup>*</sup></label>
                                                                                <input class="brd-rd3" type="email"
                                                                                       placeholder="Enter Your Email Address">
                                                                            </div>
                                                                            <div
                                                                                class="col-md-12 col-sm-12 col-lg-12">
                                                                                <label>Phone No <sup>*</sup></label>
                                                                                <input class="brd-rd3" type="text"
                                                                                       placeholder="Enter Your Phone No">
                                                                            </div>
                                                                            <div class="col-md-12 col-sm-12 col-lg-12">
                                                                                <label>Address <sup>*</sup></label>
                                                                                <textarea name="" id="" cols="30"
                                                                                          rows="10"></textarea>
                                                                                <button class="brd-rd3 red-bg"
                                                                                        type="submit"
                                                                                        id="update-user-profile">Update
                                                                                </button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @include('front.components.signOutModal')
                                </div>
                            </div>
                        </div><!-- Section Box -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
