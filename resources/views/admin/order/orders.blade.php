@extends('admin.layout.master')
@section('title', 'Admin - Orders')
@section('body')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Order List</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./admin-dashboard" class="text-dark">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #EA1B25;">Orders</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-lg-12 mb-4">
                <!-- Simple Tables -->
                <div class="card">
                    <div class="table-responsive">
                        <table class="table align-items-center table-bordered">
                            <thead class="thead-light">
                            <tr>
                                <th>Order ID</th>
                                <th>Customer</th>
                                <th>Item</th>
                                <th>Qty</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($orders) > 0)
                                    @foreach($orders as $order)
                                        @if(count($order->orderDetails) > 1)
                                            @for($i = 0; $i < count($order->orderDetails); $i++)
                                                @if($i == 0)
                                                    <tr>
                                                        <td class="align-middle" rowspan="{{count($order->orderDetails)}}"><a href="#">#{{$order->id}}</a></td>
                                                        <td class="align-middle" rowspan="{{count($order->orderDetails)}}">{{$order->full_name}}</td>
                                                        <td class="align-middle">{{\App\Models\Product::find($order->orderDetails[0]->product_id)->name}}</td>
                                                        <td class="align-middle">{{$order->orderDetails[0]->qty}}</td>
                                                        <td class="align-middle" rowspan="{{count($order->orderDetails)}}">
                                                            @if($order->status == 'processing')
                                                                <span class="badge badge-info">Pending</span>
                                                            @elseif($order->status == 'on-delivery')
                                                            <span class="badge badge-warning">On Delivery</span>
                                                            @elseif($order->status == 'rejected')
                                                            <span class="badge badge-danger">Rejected</span>
                                                            @elseif($order->status == 'canceled')
                                                                <span class="badge badge-light">Canceled</span>
                                                            @else
                                                                <span class="badge badge-dark">Delivered</span>
                                                            @endif
                                                        </td>
                                                        <td class="align-middle" rowspan="{{count($order->orderDetails)}}"><a href="/admin-order/{{$order->id}}" class="btn btn-sm btn-dark">Detail</a></td>
                                                    </tr>
                                                @else
                                                    <tr>
                                                        <td>{{\App\Models\Product::find($order->orderDetails[$i]->product_id)->name}}</td>
                                                        <td>{{$order->orderDetails[$i]->qty}}</td>
                                                    </tr>
                                                @endif
                                            @endfor
                                        @else
                                            <tr>
                                                <td class="align-middle"><a href="#">#{{$order->id}}</a></td>
                                                <td class="align-middle">{{$order->full_name}}</td>
                                                <td class="align-middle">{{\App\Models\Product::find($order->orderDetails[0]->product_id)->name}}</td>
                                                <td class="align-middle">{{$order->orderDetails[0]->qty}}</td>
                                                <td class="align-middle">
                                                    @if($order->status == 'processing')
                                                        <span class="badge badge-info">Pending</span>
                                                    @elseif($order->status == 'on-delivery')
                                                        <span class="badge badge-warning">On Delivery</span>
                                                    @elseif($order->status == 'rejected')
                                                        <span class="badge badge-danger">Rejected</span>
                                                    @elseif($order->status == 'canceled')
                                                        <span class="badge badge-light">Canceled</span>
                                                    @else
                                                        <span class="badge badge-dark">Delivered</span>
                                                    @endif
                                                </td>
                                                <td class="align-middle"><a href="/admin-order/{{$order->id}}" class="btn btn-sm btn-dark">Detail</a></td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
            </div>
        </div>
@endsection
