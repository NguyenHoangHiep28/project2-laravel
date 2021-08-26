@extends('front.layout.master')
@section('title', 'Dashboard')
@section('body')
    <div class="bread-crumbs-wrapper">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#" title="" itemprop="url">Home</a></li>
                <li class="breadcrumb-item active">Cart</li>
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
                                                    <li class="active"><a href="/dashboard/orders"><i
                                                                class="fa fa-file-text"></i>MY ORDERS</a></li>
                                                    <li><a href="/dashboard/setting"><i
                                                                class="fa fa-cog"></i> ACCOUNT SETTINGS</a></li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-sm-12 col-lg-8">
                                        <div class="tab-content">
                                            <div class="tab-pane fade in active" id="my-orders">
                                                <div class="tabs-wrp brd-rd5">
                                                    <h4 itemprop="headline">MY Orders</h4>
                                                    <div class="select-wrap-inner">
                                                        <div class="select-wrp2" style="float:right;">
                                                            <select>
                                                                <option>All status</option>
                                                                <option>Pending orders</option>
                                                                <option>On delivery orders</option>
                                                                <option>Delivered orders</option>
                                                                <option>Rejected orders</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="booking-table">
                                                        <table class="table-bordered">
                                                            <thead>
                                                            <tr>
                                                                <th>ID</th>
                                                                <th>DISH NAME</th>
                                                                <th>QTY</th>
                                                                <th>TIME</th>
                                                                <th>RESTAURANT</th>
                                                                <th>STATUS</th>

                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td rowspan="2">#01234</td>
                                                                <td class="order-dish-name">
                                                                    <h5 itemprop="headline"><a href="#" title=""
                                                                                               itemprop="url">Lorem
                                                                            ipsum dolor sit amet consectetu
                                                                        </a></h5>
                                                                </td>
                                                                <td>2</td>
                                                                <td rowspan="2">20:40 - Aug 17,2017</td>
                                                                <td rowspan="2">Restaurant Name</td>
                                                                <td rowspan="2"><span
                                                                        class="brd-rd3 processing">pending</span>
                                                                    <a class="detail-link brd-rd50"
                                                                       href="cancel-order.html"
                                                                       title="Order Detail" itemprop="url"><i
                                                                            class="fa fa-chain"></i></a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <h5 itemprop="headline"><a href="#" title=""
                                                                                               itemprop="url"
                                                                                               class="text-truncate">This
                                                                            is dish name ...
                                                                        </a></h5>
                                                                </td>
                                                                <td>2</td>

                                                            </tr>
                                                            <tr>
                                                                <td>#01234</td>
                                                                <td>
                                                                    <h5 itemprop="headline"><a href="#" title=""
                                                                                               itemprop="url"
                                                                                               class="text-truncate">This
                                                                            is dish name ...
                                                                        </a></h5>
                                                                </td>
                                                                <td>2</td>
                                                                <td>Aug 17,2017</td>
                                                                <td>Restaurant Name</td>
                                                                <td>
                                                                    <span class="brd-rd3 on-delivery">on delivery</span>
                                                                    <a class="detail-link brd-rd50"
                                                                       href="cancel-order.html"
                                                                       title="Order Detail" itemprop="url"><i
                                                                            class="fa fa-chain"></i></a>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>#01234</td>
                                                                <td>
                                                                    <h5 itemprop="headline"><a href="#" title=""
                                                                                               itemprop="url"
                                                                                               class="text-truncate">This
                                                                            is dish name ...
                                                                        </a></h5>
                                                                </td>
                                                                <td>2</td>
                                                                <td>Aug 17,2017</td>
                                                                <td>Restaurant Name</td>
                                                                <td><span
                                                                        class="brd-rd3 rejected red-bg">REJECTED</span>
                                                                    <a class="detail-link brd-rd50"
                                                                       href="cancel-order.html"
                                                                       title="Order Detail" itemprop="url"><i
                                                                            class="fa fa-chain"></i></a>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
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
