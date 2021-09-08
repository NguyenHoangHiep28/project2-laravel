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
                                                        @if(count($data) > 0)
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
                                                            @foreach($data as $orderDetail)
                                                                @if(count($orderDetail) > 1)
                                                                    @for($i = 0; $i < count($orderDetail); $i++)
                                                                        @if($i == 0)
                                                                        <tr>
                                                                            <td rowspan="{{count($orderDetail)}}">#{{\App\Models\Order::find($orderDetail[0]['order_id'])->id}}</td>
                                                                            <td class="order-dish-name">
                                                                                <h5 itemprop="headline"><a href="#" title=""
                                                                                                           itemprop="url">{{\App\Models\Product::find($orderDetail[0]['product_id'])->name}}
                                                                                    </a></h5>
                                                                            </td>
                                                                            <td>{{$orderDetail[0]['qty']}}</td>
                                                                            <td rowspan="{{count($orderDetail)}}">{{date('H:i - M d, Y', strtotime(\App\Models\Order::find($orderDetail[0]['order_id'])->created_at))}}</td>
                                                                            <td rowspan="{{count($orderDetail)}}">{{\App\Models\Product::find($orderDetail[0]['product_id'])->restaurant->restaurant_name}}</td>
                                                                            <td rowspan="{{count($orderDetail)}}"><span
                                                                                    class="brd-rd3 {{\App\Models\Order::find($orderDetail[0]['order_id'])->status}}">
                                                                                    @if(\App\Models\Order::find($orderDetail[0]['order_id'])->status == 'processing')
                                                                                        pending
                                                                                    @elseif(\App\Models\Order::find($orderDetail[0]['order_id'])->status == 'on-delivery')
                                                                                        on delivery
                                                                                    @elseif(\App\Models\Order::find($orderDetail[0]['order_id'])->status == 'rejected')
                                                                                        rejected
                                                                                    @else
                                                                                        delivered
                                                                                    @endif
                                                                                </span>
                                                                                <a class="detail-link brd-rd50"
                                                                                   href="/order/order-detail/{{$orderDetail[0]['order_id']}}"
                                                                                   title="Order Detail" itemprop="url"><i
                                                                                        class="fa fa-chain"></i></a></td>
                                                                        </tr>
                                                                        @else
                                                                            <tr>
                                                                                <td>
                                                                                    <h5 itemprop="headline"><a href="#" title=""
                                                                                                               itemprop="url"
                                                                                                               class="text-truncate">{{\App\Models\Product::find($orderDetail[$i]['product_id'])->name}}
                                                                                        </a></h5>
                                                                                </td>
                                                                                <td>{{$orderDetail[$i]['qty']}}</td>

                                                                            </tr>
                                                                        @endif
                                                                    @endfor
                                                                @else
                                                                    <tr>
                                                                        <td>#{{\App\Models\Order::find($orderDetail[0]['order_id'])->id}}</td>
                                                                        <td>
                                                                            <h5 itemprop="headline"><a href="#" title=""
                                                                                                       itemprop="url"
                                                                                                       class="text-truncate">{{\App\Models\Product::find($orderDetail[0]['product_id'])->name}}
                                                                                </a></h5>
                                                                        </td>
                                                                        <td>{{$orderDetail[0]['qty']}}</td>
                                                                        <td>{{date('H:i - M d, Y', strtotime(\App\Models\Order::find($orderDetail[0]['order_id'])->created_at))}}</td>
                                                                        <td>{{\App\Models\Product::find($orderDetail[0]['product_id'])->restaurant->restaurant_name}}</td>
                                                                        <td>
                                                                            <span class="brd-rd3 {{\App\Models\Order::find($orderDetail[0]['order_id'])->status}}">
                                                                                @if(\App\Models\Order::find($orderDetail[0]['order_id'])->status == 'processing')
                                                                                    pending
                                                                                @elseif(\App\Models\Order::find($orderDetail[0]['order_id'])->status == 'on-delivery')
                                                                                    on delivery
                                                                                @elseif(\App\Models\Order::find($orderDetail[0]['order_id'])->status == 'rejected')
                                                                                    rejected
                                                                                @elseif(\App\Models\Order::find($orderDetail[0]['order_id'])->status == 'canceled')
                                                                                    canceled
                                                                                @else
                                                                                    delivered
                                                                                @endif
                                                                            </span>
                                                                            <a class="detail-link brd-rd50"
                                                                               href="/order/order-detail/{{$orderDetail[0]['order_id']}}"
                                                                               title="Order Detail" itemprop="url"><i
                                                                                    class="fa fa-chain"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                @endif
                                                            @endforeach
                                                            </tbody>
                                                        </table>
                                                        @else
                                                        <h4>Your order is now empty :( <br/><br/>Let's discover some tasty food and place an order now !</h4>
                                                        @endif
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
